@extends('layouts.app')
@section('content')
    <form action="{{route('postSingleMail')}}" method="POST">
        @csrf
        <div class="mb-3">
            <h1 for="exampleInputEmail1" class="form-label text-danger">Send single mail</h1>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <form action="{{route('postJobMail')}}" method="POST">
        @csrf
        <div class="mb-3">
            <h1 for="exampleInputEmail1" class="form-label text-danger">Send job mail</h1>
        </div>
        
        <button type="submit" class="btn btn-info">Submit</button>
    </form>
@endsection
