@extends('layouts.plantilla')
@section('title','Cursos edit')
@section('content')
    <h1>Cursos-editando</h1>
    
        <form action="{{ route('cursos.update',$curso)}}" method="post">

            @csrf
            @method('put')
            
            <label>
                Nombre:
                <br>
                <input type="text" name="name" value="{{old('name', $curso->name)}}">

                

            </label>
            @error('name')
                <br>
                <small>*{{$message}}</small>
            @enderror

            <input type="hidden" name="slug" value="slug">

            <label>
                <br>
                Descripcion:
                <br>
                
                <textarea name="descripcion" rows="5"  >{{old('descripcion',$curso->descripcion)}}</textarea>

            </label>

            @error('descripcion')
            <br>
            <small>*{{$message}}</small>
           @enderror




            <label>
                <br>
                
                Categoria:
                <br>
                <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">

            </label>

            @error('categoria')
            <br>
            <small>*{{$message}}</small>
        @enderror


            <br>
            <button type="submit">Actualizar formulario</button>
        </form>
@endsection

