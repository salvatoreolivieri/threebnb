@extends('layouts.app')

@section('title', 'Crea appartamento | ThreeBnB')

@section('content')

<div class="container">

    <form id="apartmentCreateForm" action="{{route('admin.apartments.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Titolo --}}
        <div class="mb-3">
          <label for="title" class="form-label">&#42;Titolo riepilogativo</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
          @error('title')
            <p class="error-msg">{{$message}}</p>
          @enderror

          <p id="error-title" class="text-danger"></p>
        </div>

        {{-- Stanze --}}
        <div class="mb-3">
          <label for="rooms" class="form-label">&#42;Stanze</label>
          <input type="number" class="form-control @error('rooms') is-invalid @enderror" id="rooms" name="rooms" value="{{ old('rooms') }}">
          @error('rooms')
            <p class="error-msg">{{$message}}</p>
          @enderror

          <p id="error-rooms" class="text-danger"></p>
        </div>

        {{-- Letti --}}
        <div class="mb-3">
          <label for="beds" class="form-label">&#42;Letti</label>
          <input type="number" class="form-control @error('beds') is-invalid @enderror" id="beds" name="beds" value="{{ old('beds') }}">
          @error('beds')
            <p class="error-msg">{{$message}}</p>
          @enderror

          <p id="error-beds" class="text-danger"></p>
        </div>

        {{-- Bagni --}}
        <div class="mb-3">
          <label for="bathrooms" class="form-label">&#42;Bagni</label>
          <input type="number" class="form-control @error('bathrooms') is-invalid @enderror" id="bathrooms" name="bathrooms" value="{{ old('bathrooms') }}">
          @error('bathrooms')
            <p class="error-msg">{{$message}}</p>
          @enderror

          <p id="error-bathrooms" class="text-danger"></p>
        </div>

        {{-- Metri quadri --}}
        <div class="mb-3">
          <label for="sqm" class="form-label">&#42;Metri quadri</label>
          <input type="number" class="form-control @error('sqm') is-invalid @enderror" id="sqm" name="sqm" value="{{ old('sqm') }}">
          @error('sqm')
            <p class="error-msg">{{$message}}</p>
          @enderror

          <p id="error-sqm" class="text-danger"></p>
        </div>

        {{-- Indirizzo --}}
        <div class="mb-3">
          <label for="address" class="form-label">&#42;Indirizzo</label>
          <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}">
          @error('address')
            <p class="error-msg">{{$message}}</p>
          @enderror

          <p id="error-address" class="text-danger"></p>
        </div>

        {{-- Disponibilità --}}
        <label for="visible">&#42;Disponibile</label>
        <div class="mb-3">

          <label for="visible">SI</label>
          <input type="radio" class="@error('visible') is-invalid @enderror" id="visible" name="visible" value="1" {{old('visible', []) ? 'checked' : '' }}>

          <label for="visible">NO</label>
          <input type="radio" class="@error('visible') is-invalid @enderror" id="visible" name="visible" value="0" {{!old('visible', []) ? 'checked' : '' }}>
          @error('visible')
            <p class="error-msg">{{$message}}</p>
          @enderror
        </div>

        {{-- Servizi --}}
        <label for="service" class="form-label">&#42;Servizi</label>
        <div class="mb-3 d-flex justify-content-between">
          @foreach ($services as $service)
          <div>
            <label for="service{{ $loop->iteration }}" class="mr-3">{{ $service->name }}</label>
            <input type="checkbox" class="form-control
                   @error('service') is-invalid @enderror"
                   id="service{{$loop->iteration}}"
                   name="services[]"
                   value="{{$service->id}}"
                   @if(in_array($service->id, old('services',[]))) checked @endif>
          </div>
          @endforeach

        </div>
        @error('services')
          <p class="error-msg">{{$message}}</p>
        @enderror

        <p id="error-services" class="text-danger"></p>

        {{-- Immagine --}}
        <label for="image">&#42;Immagine</label>
        <div class="mb-3">
          <input type="file" accept="image/*" class="@error('image') is-invalid @enderror" id="image" name="image">
          @error('image')
            <p class="error-msg">{{$message}}</p>
          @enderror

          <p id="error-image" class="text-danger"></p>
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
</div>

@endsection
