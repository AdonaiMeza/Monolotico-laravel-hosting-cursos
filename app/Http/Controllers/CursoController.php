<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\http\Requests\StoreCurso;

class CursoController extends Controller
{
    //
    public function index(){

        $cursos = Curso::orderBy('id','desc')->paginate();

        //return $cursos;

        return view('cursos.index',compact('cursos'));

    }

    public function create(){
            return view('cursos.create');
    }

    public function store(StoreCurso $request){

      
/*

        $curso = new Curso();
        $curso->name =$request->name;
        $curso->descripcion =$request->descripcion;
        $curso->categoria =$request->categoria;
        
        $curso->save();
        return redirect()->route('cursos.show',$curso->id);

        */
        //return $request->all();
        
        $request->merge([
            'slug' => Str::slug($request->name),
          ]);

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show',$curso);
    }

    public function show(Curso $curso){

       // $curso = Curso::find($id);

        //compact('curso'); //['curso' => $curso]
        return view('cursos.show',compact('curso'));
    }

    public function edit(Curso $curso){
        //$curso = Curso::find($id);
        //return $curso;

        return view('cursos.edit',compact ('curso'));
    }

    public function update (Request $request, Curso $curso){

        //return $request->all();
        
        $request->validate([

            'name'=>'required',
            'descripcion'=>'required',
            'categoria'=>'required',

        ]);

        /*
        $curso->name  = $request->name;
        $curso->descripcion  = $request->descripcion;
        $curso->categoria  = $request->categoria;
        $curso->save();
        */
        $request->merge([
            'slug' => Str::slug($request->name),
          ]);
          
        $curso->update($request->all());


        return redirect()->route('cursos.show',$curso);
        //return $curso;
        

    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index');

    }

}
