<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    /** 
     * Store a newly created resource in storage. 
     * 
     * @param \Illuminate\Http\Request  $request
     * @param \Illuminate\Http\Response
     * 
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'price' => 'required'
        ]);

        return Product::create($request->all());
    }

    /**
     * Display the specified resource
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Product::find($id);
    }
}