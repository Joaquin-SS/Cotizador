@extends('layout')

@section('content')

    <main class="container">
        <section class="cotizador">
            <h2>Cotizador en Línea</h2>
            <form id="formularioCotizacion">
                <div class="modelo-cotizacion">
                    <label for="modelo1">Modelo 1:</label>
                    <input type="number" id="modelo1Cantidad" name="modelo1Cantidad" placeholder="Cantidad">
                    <textarea id="modelo1Personalizacion" name="modelo1Personalizacion" placeholder="Detalles de personalización"></textarea>
                </div>

                <div class="modelo-cotizacion">
                    <label for="modelo2">Modelo 2:</label>
                    <input type="number" id="modelo2Cantidad" name="modelo2Cantidad" placeholder="Cantidad">
                    <textarea id="modelo2Personalizacion" name="modelo2Personalizacion" placeholder="Detalles de personalización"></textarea>
                </div>

                <label for="plazo">Plazo de Entrega:</label>
                <input type="date" id="plazo" name="plazo">

                <input type="submit" value="Obtener Cotización">
            </form>

            <div class="resumen-cotizacion">
                <!-- Aquí se mostrará el resumen detallado de la cotización -->
            </div>
        </section>
    </main>

    <footer>
        <div class="Contacto">
            <p>Teléfono: 103-452-4890</p>
            <p>Email: correo@xd.com</p>
        </div>
    </footer>
@endsection
