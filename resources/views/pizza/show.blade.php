@extends('Layouts.app')
@section('content')
<div class='w-96 m-auto my-36'>


  <div class="wrapper bg-white p-5 shadow-md my-20">
  <h1 class="text-3xl text-center font-bold  border-purple-200 py-5 text-purple-700">
 Summary Order
  </h1>
    <div class="order-detail flex justify-between items-center  my-5">
        <p class='text-lg font-normal text-gray-400'> Order by: </p>
        <p class='text-lg font-normal text-gray-900 '>{{$pizza->name}}</p>
    </div>
    <div class="order-detail flex justify-between items-center  my-5">
        <p class='text-lg font-normal text-gray-400'> Order time: </p>
        <p class='text-lg font-normal text-gray-900 '> {{$pizza->created_at}}</p>
    </div>
 
    <div class="order-detail flex justify-between items-center  my-5">
        <p class='text-lg font-normal text-gray-400'>Pizza Type : </p>
        <p class='text-lg font-normal text-gray-900'>{{$pizza->type}}</p>
    </div>

    <div class="order-detail flex justify-between items-center my-5">
        <p class='text-lg font-normal text-gray-400'>Pizza Base : </p>
        <p class='text-lg font-normal text-gray-900'>   {{$pizza->base}}</p>
    </div>
  <!-- <a href='/'>Go back </a> -->
  <form action="{{route('Pizza.complete',$pizza->id)}}" method="post">
    @csrf
    @method('DELETE')
  <input type="submit" name="submit" value="Complete order" id="name" class="bg-purple-800 rounded-xl text-white p-2 mb-5 my-5 fw-bold"style="width:100%">
  </form>
 
  </div>
 


</div> 

@endsection
