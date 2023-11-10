@extends('layout')

@section('content')
      <h1>Catalogo de Computadoras</h1>
        <section class="marca">
            <h2>Lenovo</h2>
            <div class="modelo">
                <div class="modelo-item">
                    <img src="lenovo_modelo1.jpg" alt="Lenovo Modelo 1">
                    <p>Lenovo Modelo 1</p>
                    <button onclick="mostrarDetalles('lenovo_modelo1')">Ver Detalles</button>
                    <div class="modelo-detalles" id="lenovo_modelo1_detalles">
                        <!-- Detalles, especificaciones e imágenes aquí -->
                        <button onclick="agregarAlCotizador('Lenovo Modelo 1')">Agregar al Cotizador</button>
                    </div>
                </div>

            </div>
        </section>

        <section class="marca">
            <h2>HP</h2>
            <div class="modelo">
                <div class="modelo-item">
                    <img src="hp_modelo1.jpg" alt="HP Modelo 1">
                    <p>HP Modelo 1</p>
                    <button onclick="mostrarDetalles('hp_modelo1')">Ver Detalles</button>
                    <div class="modelo-detalles" id="hp_modelo1_detalles">
                        <!-- Detalles, especificaciones e imágenes aquí -->
                        <button onclick="agregarAlCotizador('HP Modelo 1')">Agregar al Cotizador</button>
                    </div>
                </div>

            </div>
        </section>

        <!-- Otras marcas y modelos -->



    <script>
        function mostrarDetalles(modelo) {
            // Ocultar todos los detalles antes de mostrar el modelo seleccionado
            const detalles = document.querySelectorAll('.modelo-detalles');
            detalles.forEach(detalle => {
                detalle.style.display = 'none';
            });

            // Mostrar los detalles del modelo seleccionado
            const modeloDetalles = document.getElementById(modelo + '_detalles');
            modeloDetalles.style.display = 'block';
        }

        function agregarAlCotizador(modelo) {
            // Agregar el modelo al cotizador
            console.log('Modelo agregado al cotizador: ' + modelo);
        }
    </script>
@endsection

