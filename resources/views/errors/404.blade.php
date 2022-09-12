@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center align-items-center">
    <p>{{$exception->getMessage()}}</p>
</div>
@endsection
