<?php
    
namespace App\Http\Controllers;
    
use App\Models\Piloto;
use Illuminate\Http\Request;
    
class PilotoController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:piloto-list|piloto-create|piloto-edit|piloto-delete', ['only' => ['index','show']]);
         $this->middleware('permission:piloto-create', ['only' => ['create','store']]);
         $this->middleware('permission:piloto-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:piloto-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pilotos = Piloto::latest()->paginate(5);
        return view('pilotos.index',compact('pilotos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pilotos.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'trigrama' => 'required',
        ]);
    
        Piloto::create($request->all());
    
        return redirect()->route('pilotos.index')
                        ->with('success','Piloto created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Piloto  $piloto
     * @return \Illuminate\Http\Response
     */
    public function show(Piloto $piloto)
    {
        return view('pilotos.show',compact('piloto'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Piloto  $piloto
     * @return \Illuminate\Http\Response
     */
    public function edit(Piloto $piloto)
    {
        return view('pilotos.edit',compact('piloto'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Piloto  $piloto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Piloto $piloto)
    {
         request()->validate([
            'name' => 'required',
            'trigrama' => 'required',
        ]);
    
        $piloto->update($request->all());
    
        return redirect()->route('pilotos.index')
                        ->with('success','Piloto updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Piloto  $piloto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Piloto $piloto)
    {
        $piloto->delete();
    
        return redirect()->route('pilotos.index')
                        ->with('success','Piloto deleted successfully');
    }
}