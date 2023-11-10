@extends('layout')

@section('content')
    <h1 class="display-2 text-center mb-3"> <b>Mis Cotizaciones</b></h1>

    <a href="seguirCotizando.blade.php" class="cta-button">Cotizar</a>

    <div class="container">
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">ID:</th>
                <th scope="col">Tipo:</th>
                <th scope="col">Nombre:</th>
                <th scope="col">Personalizacion:</th>
                <th scope="col">Plazo de Entrega:</th>
                <th scope="col">Cantidad:</th>
                <th scope="col">Eliminar:</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection
