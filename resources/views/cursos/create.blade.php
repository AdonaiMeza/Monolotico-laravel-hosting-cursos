@extends('layouts.plantilla')
@section('title','Cursos create')
@section('content')
    <h1>Cursos-creando</h1>
    
        <form action="{{ route('cursos.store')}}" method="POST">

           
            @csrf
            
            <label>
                Nombre:
                <br>
                <input type="text" name="name" value="{{old('name')}}">

                

            </label>

            <input type="hidden" name="slug" value="slug">


            <label>
                <br>
                Descripcion:
                <br>
                
                <textarea name="descripcion" rows="5" >{{old('descripcion')}}</textarea>

            </label>

            
        
           

            <label>
                <br>
                
                Categoria:
                <br>
                <input type="text" name="categoria" value="{{old('categoria')}}">

            </label>

            
            @if($errors->any())
            <div class="alert alert-danger">
                <p><strong>Por favor revise, algunos de estos campos presentan errores: </strong></p>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif
         
            <br>
            <button type="submit">Enviar formulario</button>
        </form>
@endsection

