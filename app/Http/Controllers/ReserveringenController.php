<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservering;

class ReserveringenController extends Controller
{
    public function index()
    {
        $reserveringen = Reservering::all();
        return view('reserveringen.index', compact('reserveringen'));
    }
    public function create()
    {
        return view('reserveringen.create');
    }
    public function store(Request $request)
    {
        Reservering::create($request->all());
        return redirect()->route('reserveringen.index');
    }
}
