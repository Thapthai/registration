<?php

namespace App\Http\Controllers;

use App\Models\Registratiom;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $data = Registratiom::all();
       return view('registration.registrantion_data', compact('data'));
    }
    public function create()
    {
        return view('index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'organization' => 'required',
            'name_receipt' => 'required',
            'address_receipt' => 'required',

        ]);
        $registration = new Registratiom;
        $registration->fname = $request->fname;
        $registration->lname = $request->lname;
        $registration->mobile = $request->mobile;
        $registration->email = $request->email;
        $registration->organization = $request->organization;
        $registration->name_receipt = $request->name_receipt;
        $registration->address_receipt = $request->address_receipt;

        $registration->save();
        return redirect()->route('home');
    }

}