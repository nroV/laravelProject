@extends('layouts.app')
@section('content')
<div class=' md:m-auto md:my-36 sm:max-w-sm md:max-w-3xl' style="max-width:1800px" >
  <h1 class="text-4xl text-center font-bold border-b-8 border-purple-200 py-5 uppercase text-purple-700">
    Pizza Orders
  </h1>

  <div class="order-list my-5 bg-purple-100 p-10 w-full ">
        <div class="order-header flex justify-between">
             <p class="text-xl text-black font-bold self-center text-center">Order Date</p>
             <p class="text-xl text-black font-bold self-center text-center">Pizza type</p>
             <p class="text-xl text-black font-bold self-center text-center">Pizza Base</p>
             <p class="text-xl text-black font-bold self-center text-center">Order by</p>
           
           
      </div>


        @foreach($pizzas as $data)
        <a href="{{route('Pizza.show',$data->id)}} "> <div class="order-header flex justify-between hover:bg-purple-300 transition duration-500 ease-linear">

          <p class='text-xl text-gray-400 my-5'>
            @php 
              echo date_format($data->created_at,"d-M-Y");
            @endphp
          
         </p>
         <p class='text-xl text-gray-4  00 my-5'>
         {{$data->type }}    
         </p>
         <p class='text-xl text-gray-400 my-5'>
        {{$data->base }}     
         </p>
         <p class='text-xl text-gray-400 my-5'>
        {{$data->name }}     
         </p>
      </div>  
</a>  
        @endforeach    
</div>
           

  

  </div>
  <!-- <h2 class='text-center text-xl font-bold my-5 text-purple-900'>Order Summary</h2> -->

  <!-- <h2 class='text-center text-xl font-bold text-purple-900'>----Order by Name---- </h2>
  @foreach($order as $data)
  <p class='text-lg text-gray-400 my-5 text-center'>
              {{$data->type }} -  {{$data->base }}-   {{$data ->name }}
  </p>
  @endforeach -->

  <!-- <h2 class='text-center text-xl font-bold text-purple-900'>----Get by Vorn---- </h2>
  @foreach($ordername as $data)
  <p class='text-lg text-gray-400 my-5 text-center'>
              {{$data->type }} -  {{$data->base }}-   {{$data ->name }}
  </p>
  @endforeach -->
</div> 

@endsection
