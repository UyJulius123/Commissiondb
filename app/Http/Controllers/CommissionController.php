<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commission;

class CommissionController extends Controller
{
    public function index(){
        return view('commissions.index');
    }


    public function create(){
        return view('commissions.create');
    }

    public function store(Request $request){
       $data = $request->validate([
        'Title' => 'required',
        'Description' => 'required',
        'Comments' => 'required',
       ]);

       $newCommission = Commission::create($data);

       return redirect(route('commission.index'));
    }
}