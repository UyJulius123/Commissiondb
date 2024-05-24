<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commission;

class CommissionController extends Controller
{
    public function index(){
        $commissions = Commission::all(); // Retrieve all commissions
        return view('commissions.index', compact('commissions')); // Pass $commissions to the view
    }

    public function create(){
        return view('Commissions\create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'Title' => 'required',
            'Description' => 'nullable',
            'Comments' => 'nullable',
        ]);
    
        Commission::create($data);
    
        return redirect(route('commission.index'));
    }
    public function edit($id)
{
    $commission = Commission::findOrFail($id);
    return view('commissions.edit', compact('commission'));
}

public function update(Request $request, $id)
{
    $data = $request->validate([
        'Title' => 'required',
        'Description' => 'nullable',
        'Comments' => 'nullable',
    ]);

    $commission = Commission::findOrFail($id);
    $commission->update($data);

    return redirect(route('commission.index'))->with('success', 'Commission updated successfully');
}

public function destroy($id)
{
    $commission = Commission::findOrFail($id);
    $commission->delete();

    return redirect(route('commission.index'))->with('success', 'Commission deleted successfully');
}

}
?>
