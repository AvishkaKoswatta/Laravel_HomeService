<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function index(){
        $forms = Form::where('user_id', Auth::id())->get(); // Only show forms of the logged-in user
        return view('forms.index', ['forms' => $forms]);
    }

    public function create(){
        return view('forms.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'description' => 'required',
            'service_type' => 'required',
            'charge_per_hour' => 'required'
        ]);

        $data['user_id'] = Auth::id(); // Associate the form with the logged-in user
        Form::create($data);

        return redirect(route('form.index'));
    }

    public function edit(Form $form){
        if ($form->user_id !== Auth::id()) {
            abort(403); // Prevent unauthorized access
        }
        return view('forms.edit', ['form' => $form]);
    }

    public function update(Form $form, Request $request){
        if ($form->user_id !== Auth::id()) {
            abort(403); // Prevent unauthorized access
        }

        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'description' => 'required',
            'service_type' => 'required',
            'charge_per_hour' => 'required'
        ]);

        $form->update($data);

        return redirect(route('form.index'));
    }

    public function destroy(Form $form){
        if ($form->user_id !== Auth::id()) {
            abort(403); // Prevent unauthorized access
        }

        $form->delete();

        return redirect(route('form.index'));
    }




    public function showServiceDetails($service)
    {
        $forms = Form::where('service_type', $service)->get();
        return view('detail', compact('forms', 'service'));
    }
    

}
