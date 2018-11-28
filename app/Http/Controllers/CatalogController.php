<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Branch;
use App\Models\Employee;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleado = Employee::findOrFail(1);
        $services = $empleado->services()->get();
        // foreach ($services as $k) {
        //     echo $k->id; echo "<br>";
        // }

        return view('catalog.index',compact('services'));
    }

    public function show($id)
    {
        //validar id
        $empleado = Employee::findOrFail(1);
        $serv = $empleado->services($id)->first();
        $proveedor = Branch::findOrFail(1);
        return view('details',compact('serv','proveedor'));
    }
}
