<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $address = $request->input('address');

        if ($address) {
            // Perform the search if an address is provided
            $results = Form::where('address', 'like', '%' . $address . '%')->get();
        } else {
            
            $results = collect();
        }

        return view('search', compact('results', 'address'));
    }
}
