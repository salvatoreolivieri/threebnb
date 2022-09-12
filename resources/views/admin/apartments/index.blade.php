@extends('layouts.app')

@section('title', "Lista appartamenti")

@section('content')
    <h1>Lista appartamenti</h1>

    @if (session('delete_success'))
        <div class="alert alert-success d-flex justify-content-between" role="success">
            {{session('delete_success')}}
            <a class="btn btn-success" href="{{route('admin.apartments.index')}}">X</a>
        </div>
    @endif

    <table class="table">

        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Stanze</th>
            <th scope="col">Letti</th>
            <th scope="col">Bagni</th>
            <th scope="col">Metri quadrati</th>
            <th scope="col">Indirizzo</th>
            <th scope="col">Latitudine</th>
            <th scope="col">Longitudine</th>
            <th scope="col">Servizi</th>
            <th scope="col">Visibile in pagina pubblica</th>
            <th scope="col">Azioni</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($apartments as $apartment)
                <tr>
                    <th scope="row">{{$apartment->id}}</th>
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
                        @if ($apartment->visible == 1)
                        Si
                        @else
                            No
                        @endif
                    </td>

                    <td>
                        <a class="btn btn-success" href="{{route('admin.apartments.show', $apartment)}}">Mostra</a>
                        <a class="btn btn-primary" href="{{route('admin.apartments.edit', $apartment)}}">Modifica</a>

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
            @endforeach

        </tbody>


    </table>

@endsection
