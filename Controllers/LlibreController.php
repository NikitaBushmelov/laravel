<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Llibre;

class LlibreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //consulta per agafar tots els llibres
        $llibres=DB::select('SELECT * FROM llibre');
        //retorne la vista i envie la variable llibres
        return view('llibre.show',compact('llibres'));
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
        $this->validate($request,[  //comprobe que els camps estiguin plens
            'isbn'=>'required',  
            'titol'=> 'required',  
            'categoria'=>'required',  
            'preu'=>'required',  
            'editorial'=>'required',  
            'autor'=>'required']); 
            //crees les variables
            $isbn=$request->input('isbn');
            $titol=$request->input('titol');
            $categoria=$request->input('categoria');
            $preu=$request->input('preu');
            $editorial=$request->input('editorial');
            $autor=$request->input('autor'); 
            //consulta de crear
            DB::insert("INSERT INTO llibre(`isbn`, `titol`, `categoria`, `preu`, `editorial`, `autor`) VALUES ("
            .$isbn.",'"
            .$titol."','"
            .$categoria."',"
            .$preu.",'"
            .$editorial."','"
            .$autor."')");  
            //rediregeixes
            return redirect('/llibre/mostrar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //no sirve creo
        return view('Llibre.show',['id'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        //te busque el llibre que vols editar, utilitze l'extensio de model(estan a dal, ojo amb les rutes i els namespaces, perque si el namespace es diferent no va bé)
        $llibre= Llibre::find($id);
        //lo mismo que index
        return view('llibre.upd', compact('llibre'));
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
        //es com insertar pero sense fer la consulta, sino utilitzan el model llibre
        $llibre=Llibre::find($id);
        $llibre->isbn=$request->get('isbn');
        $llibre->titol=$request->get('titol');
        $llibre->categoria=$request->get('categoria');
        $llibre->preu=$request->get('preu');
        $llibre->editorial=$request->get('editorial');
        $llibre->autor=$request->get('autor');
        $llibre->save();
        return redirect("/llibre/mostrar");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$crud=Llibre::find($id);
        //$crud->delete();
        //esborrar
        DB::delete('delete  from llibre where isbn = ?', [$id]);
        return redirect("/llibre/mostrar");
    }
}
