@extends('menuPrincipal')

@section('content')
{{session("mensaje") }}
<br>
<br>

<form method="POST" action="{{ asset('libros/' . $libro->id) }}">

  <input type="hidden" name="_method" value="PUT">

  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  Titulo del Libro: <input type="text" name="txtTitulo" value="{{ $libro->txtTitulo }}"><br>

  Editorial: <input type="text" name="txtEditorial" value="{{ $libro->txtEditorial }}"><br>

  Autor: <input type="text" name="txtAutor" value="{{ $libro->txtAutor }}"><br>

  Fecha de Edicion: <input type="date" name="txtFechaEdicion" value="{{ $libro->txtFechaEdicion }}"><br>

  Tipo de Tapa: <input type="text" name="txtTipoTapa" value="{{ $libro->txtTipoTapa }}"><br>

  Genero: <input type="text" name="txtGenero" value="{{ $libro->txtGenero }}"><br>

  Precio: <input type="double" name="txtPrecio" value="{{ $libro->txtPrecio }}"><br>

  Proveedor: <input type="text" name="txtProveedorId" value="{{ $libro->txtProveedorId }}"><br>

  <input type="submit" value="Modificar datos">
</form>

<br>
<br>
<a href="/libros/public/libros">Listado</a>
@endsection