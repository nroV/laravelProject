<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
class PizzaController extends Controller
{
    //
    public function index(){
        $pizz = Pizza::all();
        $pizzorder = Pizza::orderBy('name')->get();
        $pizzname = Pizza::where('name','vorn')->get();
        return view('pizza.order',['pizzas'=>$pizz,'order'=>$pizzorder,'ordername' =>$pizzname],);
    
}
public function showproduct($id){
    $pizza = Pizza::findorFail($id);
    return view('pizza.show',['pizza'=>$pizza]);

}
public function store(){
        // error_log(request('name'));
        // error_log(request('type'));
        // error_log(request('base'));
    $pizza = new Pizza();
    $pizza->name = request('name');
    $pizza->type = request('type');
    $pizza->base = request('base');
    $pizza->price=0;
    $pizza->topping=request('topping'); 
    $pizza->save();
    error_log($pizza);
    error_log("success");
    return redirect('/')->with('msg','Your order is pending...');

}
public function create(){
// $pizz = Pizza::all();
// $pizzorder = Pizza::orderBy('name')->get();
// $pizzname = Pizza::where('name','vorn')->get();
return view('pizza.create');

}
public function destroy($id){
$pizza = Pizza::findorFail($id);
$pizza->delete();
return redirect('/')->with('msg','Your order has been complete!!!');

}
}
