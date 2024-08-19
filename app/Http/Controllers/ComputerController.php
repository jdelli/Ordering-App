<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;


class ComputerController extends Controller
{
    public function index() {

        $orders = Computer::all();
        
        return view('computers.index', [
        'computer' => $orders,
        ]);
    }      



    public function show($id) {

        $order = Computer::findorfail($id);
    
        return view('computers.show', ['computer' => $order]);
      }




    public function create() {
        return view('computers.create');
    }


    public function store() {

        $order = new Computer();

        $order->name = request('name');
        $order->type = request('type');
        $order->brand = request('brand');
        $order->save();

        return redirect('/')->with('mssg', 'Ordered successfully');
    }


    public function destroy($id) {
        $order = Computer::findorfail($id);
        $order->delete();
        return redirect('/computers')->with('mssg', 'Deleted successfully');


    }    

}
