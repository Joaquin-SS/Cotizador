@extends('layout')

@section('content')
    <h1 class="display-4 text-center text-dark mt-5 mb-5">¿Deseas cotizar algo más?</h1>

    <form class="contenedorForm" action="controlador.php" method="post">
        <button type="submit" name="btnEliminar" class="btn btn-warning">SI, SEGUIR COTIZANDO</button>
        <button type="submit" name="btnRegresar" class="btn btn-success">NO, TERMINAR COTIZACIÓN</button>
    </form>
@endsection
