<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class AdmAdminContactController extends Controller
{
    public function index(){

    	$poruke = Contact::paginate(10);

    	return view('admin.contact')->with('poruke',$poruke);
    }

    public function destroy(Contact $poruka){
    	$poruka->delete();

        flash('Message deleted');

         return redirect()->route('contact.index');
    }

    public function trash(){

    	$obrisane_poruke = Contact::withTrashed()->paginate(10);

    	return view('admin.contact_deleted')->with('obrisane_poruke',$obrisane_poruke);
    }
}
