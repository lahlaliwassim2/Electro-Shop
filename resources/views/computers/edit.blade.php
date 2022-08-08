@extends('layout')
@section('title', 'Edit Computers')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8">
        <h1>Edit Computers</h1>
    </div>
    <div class="flex justify-center ">
       <form action="{{ route('computers.update',['computer' => $computer->id]) }}" method="POST" class="form bg-white p-6 border-1">
        @csrf
        @method('PUT')
        <!-- CROSS SITE REQUEST FORGERY-->
        <div>
            <label for="" class="text-sm">computer Name</label>
            <input type="text" class="text-lg border-1 " value="{{$computer->name}}" id="computer-name" name="computer-name">
            @error('computer-name')
                     <div class="form-error"> {{$message}}</div>
            @enderror
        </div>


        <div>
            <label for="" class="text-sm">computer Origin</label>
            <input type="text" class="text-lg border-1 " value="{{$computer->origin}}" id="computer-origin" name="computer-origin">
            @error('computer-origin')
            <div class="form-error"> {{$message}}</div>
            @enderror
        </div>



        <div>
            <label for="" class="text-sm">Computer Price </label>
            <input type="text" class="text-lg border-1 " value="{{$computer->price}}" id="computer-price" name="computer-price">
            @error('computer-price')
            <div class="form-error"> {{$message}}</div>
            @enderror
        </div>
            <div>


                <button type="submit"> submit</button>
            </div>
       </form>
    </div>


</div>
@endsection
