<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin\StaticPage;
use App\AdminSettings;
use App\Admin\Project;

class HomeController extends Controller
{
   
    public function index()
    {
    	$uvodni_tekst = StaticPage::where('id','1')
    	->where('active','1')
    	->get();

    	$osnovni_podaci = AdminSettings::all();

        $radno_iskustvo = StaticPage::where('id','5')->get();
        $radno_iskustvo_ek = StaticPage::where('id','6')->get();

        $obrazovanje = StaticPage::where('id','7')->get();

        $osobine = StaticPage::where('id','8')->get();

        $projects = Project::all();

        return view('index')->with('uvodni_tekst',$uvodni_tekst)->with('osnovni_podaci',$osnovni_podaci)->with('radno_iskustvo',$radno_iskustvo)->with('radno_iskustvo_ek',$radno_iskustvo_ek)->with('obrazovanje',$obrazovanje)->with('osobine',$osobine)->with('projects',$projects);
    }

    public function index_en(){
        $uvodni_tekst = StaticPage::where('id','1')
        ->where('active','1')
        ->get();

        $osnovni_podaci = AdminSettings::all();

        $radno_iskustvo = StaticPage::where('id','5')->get();
        $radno_iskustvo_ek = StaticPage::where('id','6')->get();

        $obrazovanje = StaticPage::where('id','7')->get();

        $osobine = StaticPage::where('id','8')->get();

        $projects = Project::all();

        return view('en.index')->with('uvodni_tekst',$uvodni_tekst)->with('osnovni_podaci',$osnovni_podaci)->with('radno_iskustvo',$radno_iskustvo)->with('radno_iskustvo_ek',$radno_iskustvo_ek)->with('obrazovanje',$obrazovanje)->with('osobine',$osobine)->with('projects',$projects);
    }
}
