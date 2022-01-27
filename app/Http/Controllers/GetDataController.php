<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ganga;
use Illuminate\Http\Request;

class GetDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gangesCategories = Ganga::all()->groupBy('category_id');
        $categories = Category::all();
        return view('ganga.index', compact('gangesCategories','categories'));
    }
}
