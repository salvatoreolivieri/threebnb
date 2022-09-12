<?php

namespace App\Http\Controllers\Admin;
use App\Apartment;
use App\Service;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormApartmentRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments = Apartment::orderBy('id', 'DESC')->paginate(10);
        return view('admin.apartments.index', compact('apartments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();

        return view('admin.apartments.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormApartmentRequest $request)
    {
        $data = $request->all();

        $coordinates = Apartment::coordinates('coordinate');

        $data['user_id'] = Auth::id();

        $data['latitude'] = $coordinates['latitude'];
        $data['longitude'] = $coordinates['longitude'];

        $data['image_original_name'] = $request->file('image')->getClientOriginalName();

        $destinationPath = public_path().'/images' ;

        $data['image']->move($destinationPath, $data['image_original_name']);

        $data['image'] = '/images/'. $data['image_original_name'];

        // $data['image'] = Storage::put('uploads',$data['image']);

        $new_apartment = new Apartment();

        $new_apartment->fill($data);

        $new_apartment->save();

        if(array_key_exists('services', $data)){
            $new_apartment->services()->attach($data['services']);
        };

        return Redirect::to('http://127.0.0.1:8000/dettaglio-appartamento/'.$new_apartment->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        if($apartment){
            return view('admin.apartments.show', compact('apartment'));
        } else {
            abort(404, 'Errore 404 | Pagina non trovata');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment)
    {

        $services = Service::all();

        if($apartment){
            return view('admin.apartments.edit', compact('apartment', 'services'));
        } else {
            abort(404, 'Errore 404 | Pagina non trovata');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function update(FormApartmentRequest $request, Apartment $apartment)
    {

         $data = $request->all();
         if(array_key_exists( 'image', $data)){
            if($apartment->image){
            Storage::delete($apartment->image);
            }
            $data['image_original_name'] = $request->file('image')->getClientOriginalName();

            $destinationPath = public_path().'/images' ;

            $data['image']->move($destinationPath, $data['image_original_name']);

            $data['image'] = '/images/'. $data['image_original_name'];
            // $data['image'] = Storage::put('uploads',$data['image']);
        };

        $apartment->fill($data);

        $apartment->update();

        if(array_key_exists('services', $data)){
            $apartment->services()->sync($data['services']);
        };

        return Redirect::to('http://127.0.0.1:8000/dettaglio-appartamento/'.$apartment->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $apartment)
    {
        $apartment->messages()->delete();
        $apartment->delete();
        return redirect()->route('admin.index');
    }

    public function sponsoredPush($sponsorId, $apartmentId){

        $apartment = Apartment::find($apartmentId);

        $apartment->sponsorships()->sync($sponsorId);

        if($sponsorId == 1){
            $apartment->sponsorships[0]->expired_at = Carbon::now()->addDays(1);
        }
        else if($sponsorId == 2){
            $apartment->sponsorships[0]->expired_at = Carbon::now()->addDays(3);
        }
        else{
            $apartment->sponsorships[0]->expired_at = Carbon::now()->addDays(6);
        }

        $apartment->push();

        return Redirect::to('http://127.0.0.1:8000/dettaglio-appartamento/' . $apartment->id);

    }

}
