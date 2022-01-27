<?php

namespace App\Http\Controllers;

use App\Http\Requests\GangaPost;
use App\Models\Category;
use App\Models\Ganga;
use Illuminate\Http\Request;

class GangaController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('ganga.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GangaPost $request)
    {
        $ganga = new Ganga();
        $ganga->create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ganga = Ganga::findOrFail($id);
        $categories = Category::all();
        return view('ganga.show', compact('ganga','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gangaEdit = Ganga::findOrFail($id);
        $categories = Category::all();
        return view('ganga.edit',compact('gangaEdit','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GangaPost $request, $id)
    {
        $ganga = Ganga::findOrFail($id);
        $ganga->update($request->all());
        return view('ganga.show', compact('ganga','categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ganga = Ganga::findOrFail($id);
        $ganga->delete();
        return redirect('/');
    }
}
