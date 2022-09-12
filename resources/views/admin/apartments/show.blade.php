@extends('layouts.app')

@section('title', 'Dati appartamento | ThreeBnB')

@section('content')
<div class="container">
    <table class="table m-5">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Immagine</th>
            <th scope="col">Nome immagine</th>
            <th scope="col">Titolo</th>
            <th scope="col">Stanze</th>
            <th scope="col">Letti</th>
            <th scope="col">Bagni</th>
            <th scope="col">Sqm</th>
            <th scope="col">Indirizzo</th>
            <th scope="col">Latitudine</th>
            <th scope="col">Longitudine</th>
            <th scope="col">Servizi</th>
            <th scope="col">Sponsorizzazione</th>
            <th scope="col">Visibile in pagina pubblica</th>
          </tr>
        </thead>
        <tbody>
            <tr class="{{$apartment->visible === 1 ? 'table-success' : ''}}" >
              <td>{{$apartment->id}}</td>
              <td> <img src="{{File::exists('storage/'. $apartment->image) ? asset('storage/' . $apartment->image) : $apartment->image}}"> </td>
              <td>{{$apartment->image_original_name}}</td>
              <td>{{$apartment->title}}</td>
              <td>{{$apartment->rooms}}</td>
              <td>{{$apartment->beds}}</td>
              <td>{{$apartment->bathrooms}}</td>
              <td>{{$apartment->sqm}}</td>
              <td>{{$apartment->address}}</td>
              <td>{{$apartment->latitude}}</td>
              <td>{{$apartment->longitude}}</td>

                <td>
                    <ul>
                        @foreach ($apartment->services as $service)
                        <li>{{$service->name}}</li>
                        @endforeach
                    </ul>
                </td>

                <td>
                    @if (count($apartment->sponsorships) != 0)
                        @foreach ($apartment->sponsorships as $sponsorship)
                            {{$sponsorship->name}}
                        @endforeach
                    @else
                        Nessuna sponsorizzazione
                    @endif
                </td>

              <td>
                {{$apartment->visible == 1 ? 'Si' : 'No'}}
              </td>

              <td>
                {{-- Modifica --}}
                <a class="btn btn-success" href="{{route('admin.apartments.edit', $apartment)}}">Modifica</a>

                {{-- Cancella --}}
                <form class="d-inline"
                action="{{route('admin.apartments.destroy', $apartment)}}"
                method="POST"
                onsubmit="return confirm('sei sicuro di voler eliminare l\'appartamento?')">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger">Cancella</button>
                </form>
            </td>
            </tr>
        </tbody>
      </table>
</div>

@endsection
