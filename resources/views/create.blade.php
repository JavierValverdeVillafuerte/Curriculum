@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Curriculum</h1>
    <form action="{{ route('partials.form') }}" method="POST">
        @csrf
        
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
