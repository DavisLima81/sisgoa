<?php

namespace App\Http\Controllers;

use App\Models\Pop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use DB;
use Illuminate\Support\Facades\Storage;
use PDF;



class PopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
        return view('pops.index',compact('pops'))
            ->with('i', ($request->input('page', 1) - 1) * 5);

    }

    public function guest(Request $request)
    {
        //
        $pops = Pop::orderBy('id','DESC')->paginate(5);
        return view('pops.guest',compact('pops'))
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
        return view('pops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //VALIDAÇÃO
        $this->validate($request, [
            'tipo' => 'required',
            'titulo' => 'required|min:4|max:120',
            'cover' => 'required|mimes:pdf',
        ]);

        //GRAVAR novop POP no BD
        $pop = New Pop();
        $pop->tipo = $request->tipo;
        $pop->titulo = $request->titulo;
        $pop->cover = $request->file('cover')->store('public/pops');
        $pop->save();
        
        return redirect()->route('pops.index')
                        ->with('Successo','Pop armazenado no sistema.');

        /* var_dump(
            $request->file('cover')->getMimeType(),
            $request->file('cover')->getClientOriginalName(),
            $request->file('cover')->getClientOriginalExtension(),
            $request->file('cover')->getSize(),
            $request->file('cover')->isValid(),
            $pop->cover
        ); */

        //var_dump($request->file);
        /* var_dump($request->tipo);
        echo('<br>');
        var_dump($request->titulo);
        echo('<br>');
        var_dump($request->cover); */

        /* $pop->cover = Storage::putFile('pops', $request->cover); */
    

        /* return redirect()->route('pops.index')
                        ->with('Successo','Pop armazenado no sistema.');
         */
        
         /* var_dump($request->cover, $request->allFiles('cover'));
        dd($request); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pop  $pop
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        $pop = Pop::find($id);
        return view('pops.show',compact('pop'));
    }

    public function showFile(Pop $pop)
    {   
        $prePath = $pop->cover;
        $path = substr_replace($prePath, 'storage', 0, 6);
        return response()->file($path);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pop  $pop
     * @return \Illuminate\Http\Response
     */
    public function edit(Pop $pop)
    {
        //
        return view('pops.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pop  $pop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pop $pop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pop  $pop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pop $pop)
    {
        //
    }
}
