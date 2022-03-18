@extends('layouts.app')

@section('titulo','Editar curso')

@section('contenido')

<h3 class="text-center">Editar información del Curso</h3>
{{--se utiliza el atributo enctype para poder subir archivos--}}
<form action="/cursos/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="nombrecurso">Modifique el Nombre del Curso</label>
        <input name="nombre" id="nombrecurso" value="{{$cursito->nombre}}" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="descripcion">Modifique la Descripción del Curso</label>
        <input name="descripcion" id="descripcion" value="{{$cursito->descripcion}}" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="imagen">Cargar nueva imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file">
    </div>

    <button type="submit" class="btn btn-success">Actualizar</button>
</form>
@endsection
