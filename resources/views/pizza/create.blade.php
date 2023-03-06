@extends('layouts.app')
@section('content')
<div class='w-96 m-auto my-36'>
  <h1 class="text-4xl text-center font-bold py-5 text-purple-900 uppercase">
 Order Your Pizza
  </h1>
  <form action="{{route('Pizza.save')}}" class="bg-purple-100 p-5" method="POST">
      @csrf
     <div class="form-group my-5">
      <label for="name" class="font-light text-purple-900 text-xl">Customer Name : </label>
      <br>      <br>
      <input type="text" name="name" id="name" class="focus:border-purple-500 focus:text-black focus:bg-white text-center text-black rounded-lg p-1 text-lg" style="width:100%">
     </div>
     <div class="form-group">
     <label for="type" class="font-light text-purple-900 text-xl">Choose Pizza Type :
       </label>     
       <br>      <br>
    <select name="type" id="type" style="width:100%" class=" focus:border-purple-500 focus:text-black focus:bg-white text-center text-black rounded-lg p-1 text-lg">


        <option value="margheritta">margheritta</option>
        <option value="hawaillian">Hawaillian</option>
        <option value="veg&supreme">Veg supreme</option>
        <option value="volcano">Volcano</option>
    </select>
      </div>
      <div class="form-group my-5">
      <label for="base" class="font-light text-purple-900 text-xl">Choose Pizza Base : </label>
      <br>      <br>
     <select name="base" id="base" style="width:100%" class=" focus:border-purple-500 focus:text-black focus:bg-white text-center text-black rounded-lg p-1 text-lg">


        <option value="Juice&Spicy">Juice and Spicy</option>
        <option value="Thin&Crispy">Thin and Crispy</option>
        <option value="Overheat">Overheat</option>
        <option value="Garlic&Crust">Garlic and Crust</option>
    </select>

    <div class="form-group my-5">
      <label for="" class="font-light text-purple-900 text-xl">Choose your topping : </label>
      <br>      <br>
       <div class="form-check flex items-center">
      <input type="checkbox" name="topping[]" id="mash" class="focus:border-purple-500 focus:text-black focus:bg-white text-center text-black rounded-lg text-lg " style="" value='mushroom' >
        <label for="mash" class="font-light mx-5 text-purple-900 text-xl ">mushroom </label>
      

      
      </div>
      <div class="form-check flex items-center">
      <input type="checkbox" name="topping[]" id="on" class="focus:border-purple-500 focus:text-black focus:bg-white text-center text-black rounded-lg text-lg " style="" value='tomatoes'>
        <label for="on" class="font-light mx-5 text-purple-900 text-xl ">Onion </label>
      

      
      </div>
      <div class="form-check flex items-center">
      <input type="checkbox" name="topping[]" id="tomatoes" class="focus:border-purple-500 focus:text-black focus:bg-white text-center text-black rounded-lg text-lg " style="" value='extra-onion'>
        <label for="tomatoes" class="font-light mx-5 text-purple-900 text-xl ">Tomatoes </label>
      

      
      </div>
      <div class="form-check flex items-center">
      <input type="checkbox" name="topping[]" id="ol" class="focus:border-purple-500 focus:text-black focus:bg-white text-center text-black rounded-lg text-lg " style="" value='olives'>
        <label for="ol" class="font-light mx-5 text-purple-900 text-xl ">Olives </label>
      

      
      </div>
     </div>
      </div>
      <input type="submit" name="submit" value="Make Order" id="name" class="bg-purple-800 rounded-xl text-white p-2 mb-5 my-5"style="width:100%">
  </form>
 
</div> 

@endsection
