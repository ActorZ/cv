<?php

namespace App\Http\Controllers;

use App\AdminSettings;
use Illuminate\Http\Request;
use App\Http\Requests\AdminSettingsRequest;

class AdminSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //$settings = AdminSettings::findId(1)->get();

       //return view('admin.settings')->with('settings',$settings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdminSettings  $adminSettings
     * @return \Illuminate\Http\Response
     */
    public function show(AdminSettings $adminSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminSettings  $adminSettings
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $settings = AdminSettings::find($id);
        //dd($settings);
        return view('admin.settings')->with('settings',$settings);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminSettings  $adminSettings
     * @return \Illuminate\Http\Response
     */
    public function update(AdminSettingsRequest $request, AdminSettings $id)
    {
        //$settings = AdminSettings::findOrFail($id);
        //dd($request->all());
        /*if ($request->hasFile('document_sr')) {
              die('ima');
        }else{
            die('nema');
        }*/
        if(!empty($request->document_sr) and !empty($request->document_en)){
        $originalname_sr = $request->file('document_sr')->getClientOriginalName();
        $slika = $request->document_sr;
        $slika->move('documents',$originalname_sr);

        $originalname_en = $request->file('document_en')->getClientOriginalName();
        $slika2 = $request->document_en;
        $slika2->move('documents',$originalname_en);
        
//dd($request->all());
        $id->update(array_merge($request->input(), ['document_sr' => $originalname_sr,'document_en'=>$originalname_en])
            //$request->input()
           
        );
      }else{
        $id->update(
            $request->input()
         );
      }
        flash('Settings updated');

        return redirect()->route('settings.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminSettings  $adminSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminSettings $adminSettings)
    {
        //
    }
}
