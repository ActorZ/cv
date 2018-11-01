<?php

namespace App\Http\Controllers;

use App\Admin\StaticPage;
use Illuminate\Http\Request;
use App\Http\Requests\AdminStaticPagesStoreRequest;
use \Purifier;

class StaticPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $pages = StaticPage::paginate(10);

        return view('admin.static')->with('pages',$pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.static_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminStaticPagesStoreRequest $request)
    {
        if(!empty($request->image)){
        $originalname = $request->image->getClientOriginalName();
        
        
        $slika = $request->image;
        $slika->move('images',$originalname);
        
//dd($request->all());
        $page = StaticPage::create(array_merge($request->input(), ['image' => $originalname])
            //$request->input()
           
        );
      }else{
        $page = StaticPage::create(
            $request->input() 
        );
      }
       

        if($page->wasRecentlyCreated){
        flash('New static page created');
        }else{
         flash('That title already exist')->error();  
         return redirect()->back(); 
        }

        return redirect()->route('static.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\StaticPage  $staticPage
     * @return \Illuminate\Http\Response
     */
    public function show(StaticPage $static)
    {

        return view('admin.static_single')->with('static',$static);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\StaticPage  $staticPage
     * @return \Illuminate\Http\Response
     */
    public function edit(StaticPage $static)
    {
        return view('admin.static_edit')->with('static',$static);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\StaticPage  $staticPage
     * @return \Illuminate\Http\Response
     */
    public function update(AdminStaticPagesStoreRequest $request, StaticPage $static)
    {
        if(!empty($request->image)){
            $originalname = $request->image->getClientOriginalName();
         
            $slika = $request->image;
            $slika->move('images',$originalname);

            $static->update(array_merge($request->input(), ['image' => $originalname])
            //$request->input()
           
            );
        }else{
         clean($static->update(
            $request->input()
         ));
        }
        flash('Static page updated');

        return redirect()->route('static.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\StaticPage  $staticPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(StaticPage $static)
    {
        $static->delete();

        flash('Static page deleted');

         return redirect()->route('static.index');
    }
}
