<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\GangaPost;
use App\Models\Ganga;
use Illuminate\Http\Request;

class GangaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum',['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ganges = Ganga::get();
        return response()->json($ganges, 200);

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
        return response()->json($ganga, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ganga  $ganga
     * @return \Illuminate\Http\Response
     */
    public function show(Ganga $ganga)
    {
        return response()->json($ganga, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ganga  $ganga
     * @return \Illuminate\Http\Response
     */
    public function update(GangaPost $request, Ganga $ganga)
    {
        $ganga->update($request->all());
        $ganga->save();
        return  response()->json($ganga, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ganga  $ganga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ganga $ganga)
    {
        $ganga->delete();
        return response()->json($ganga, 204);
    }
}
