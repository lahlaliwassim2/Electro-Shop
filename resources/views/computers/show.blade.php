@extends('layout')
@section('title', 'Computers')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8">
        <h1>Computers</h1>
    </div>
    <div class="mt-8">
       <h3>{{ $computer['name'] }} is from <strong>{{ $computer['origin'] }} -{{ $computer['price'] }}</strong></h3>
    </div>
    <a href="{{route('computers.edit',$computer->id)}}" class="edit-btn">edit</a>
</div>
@endsection
