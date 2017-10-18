@extends('menuPrincipal')

@section('content')
{{session("mensaje") }}
<br>
<br>

<form method="POST" action="{{ asset('libros') }}">

  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  Titulo del Libro: <input type="text" name="txtTitulo"><br>

  Editorial: <input type="text" name="txtEditorial"><br>

  Autor: <input type="text" name="txtAutor"><br>

  Fecha de Edicion: <input type="date" name="txtFechaEdicion"><br>

  Tipo de Tapa:
  <select name="cboTipoTapa">
    <option value="D">Dura</option>
    <option value="B">Blanda</option>
  </select>

  <br>

  Genero: <input type="text" name="txtGenero"><br>

  Precio: <input type="double" name="txtPrecio"><br>

  Proveedor:
  <select name="cboProveedor">
    @foreach ($proveedores_list as $proveedor)
      <option value="{{$proveedor->id}}">{{$proveedor->razon_social}}</option>
    @endforeach
  </select>

  <br>

  <input type="submit" value="Guardar datos">
</form>

<br>
<br>
<a href="/libros/public/libros">Listado</a>
@endsection