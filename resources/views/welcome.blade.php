
@extends('layouts.app')
@section('content')

<div class='w-2/4 m-auto my-36'>
  
<h1 class="lg:text-5xl text-center font-normal border-b-8 border-purple-200 py-5 uppercase text-purple-700 text-2xl ">
    Pizza shop
  </h1>
  
  <p class='text-center my-5 text-lg font-normal '>{{session('msg')}}</p>
    <div class="my-6 flex justify-center flex-wrap">
   
    <a class="bg-purple-900  text-white font-bold rounded-2xl p-4 pl-12 pr-12 hover:bg-purple-600 transition duration-300 ease-in-out" href="./pizza/create"> 
       @if(session('msg'))
        <span>Make another order</span> 
       @else
       <span>Order a Pizza now</span> 
       @endif
  </a>
  <a class="bg-purple-900 text-white font-bold rounded-2xl p-4 pl-12 pr-12 hover:bg-purple-600 transition duration-300 ease-in-out mx-5 my-6 md:my-0 lg:my-0 md:w-auto" href="./pizza/show"> 

        <span>Check my cart</span> 



  </a>
  
</div> 
</div>
 

@endsection
