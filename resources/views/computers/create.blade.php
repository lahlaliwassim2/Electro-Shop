@extends('layout')
@section('title', 'Create Computers')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8">
        <h1>create a new Computers</h1>
    </div>
    <div class="flex justify-center ">
       <form action="{{ route('computers.store') }}" method="POST" class="form bg-white p-6 border-1">
        @csrf
        <!-- CROSS SITE REQUEST FORGERY-->
        <div>
            <label for="" class="text-sm">computer Name</label>
            <input type="text" class="text-lg border-1 " id="computer-name" name="computer-name">
        </div>
        <div>
            <label for="" class="text-sm">computer Origin</label>
            <input type="text" class="text-lg border-1 " id="computer-origin" name="computer-origin">
        </div>
        <div>
            <label for="" class="text-sm">Computer Price </label>
            <input type="text" class="text-lg border-1 " id="computer-price" name="computer-price">
        </div>
            <div>
                <button type="submit"> submit</button>
            </div>
       </form>
    </div>


</div>
@endsection
