<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pop;

class TestesController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:pop-list|pop-create|pop-edit|pop-delete', ['only' => ['index','store']]);
         $this->middleware('permission:pop-create', ['only' => ['create','store']]);
         $this->middleware('permission:pop-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:pop-delete', ['only' => ['destroy']]);
    }
    

    public function index(Request $request)
    {
        //
        $pops = Pop::orderBy('id','DESC')->paginate(5);
        return view('testes.teste',compact('pops'))
            ->with('i', ($request->input('page', 1) - 1) * 5);

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
