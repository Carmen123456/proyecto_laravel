<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bom dia</title>

    <!-- Enlaces a las bibliotecas externas -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Estilos personalizados -->
    <style>
        .operaciones {
            float: left;
        }

        i {
            color: black;
        }

        body {
            margin: 0;
        }

        .table-container {
            max-width: 1300px;
            margin-left: 100px;

        }

        .container {
            height: 180px;
            background: #0f9bf6;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10%;
            margin-left: 140px;
            margin-top: 20px;
        }
     
        .primerSegundo{
          height: 160px;
        }
        .primerTercer{
          height: 140px;
        }
        .content {
            font-family: Arial;
            text-align: center;
            font-size: 2em;
            color: rgba(255, 255, 255, .8);
        }

        .waves {
            position: absolute;
            bottom: -135px;
            height: 427px;
            width: 100%;
            overflow: hidden;
        }

        .wave {
            position: absolute;
            left: -180px;
            bottom: 0;
            width: 2402px;
            height: 327px;
            background: url(../../../img/olas.png) center bottom no-repeat;
            animation: 5s wave ease-in-out infinite alternate;
        }

        .wave.a {
            background-position: 0 -854px;
        }

        .wave.b {
            background-position: 0 -427px;
            animation-delay: .6s;
        }

        .circle {
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: green;
        }

        .wave.c {
            background-position: 0 0;
            animation-delay: 1.2s;
        }

        @keyframes wave {
            0% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-80px, 30px);
            }

            100% {
                transform: translate(160px, -60px);
            }
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="row">
            <div class="col-md-3 mt-auto">
                <div class="container">
                    <div class="content">
                        <h1 id="firstData"></h1>
                        <h4>Primer lugar<h4>
                    </div>
                    <div class="waves">
                        <div class="wave circulo a"></div>
                        <div class="wave circulo b"></div>
                        <div class="wave circulo c"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-auto">
                <div class="container primerSegundo">
                    <div class="content">
                        <h1 id="secondData"><h1>
                          <h4>Segundo lugar<h4>
                    </div>
                    <div class="waves">
                        <div class="wave circulo a"></div>
                        <div class="wave circulo b"></div>
                        <div class="wave circulo c"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-auto">
                <div class="container primerTercer">
                    <div class="content">
                        <h1 id="thirdData"></h1>
                        <h4>Tercer lugar<h4>
                    </div>
                    <div class="waves">
                        <div class="wave circulo a"></div>
                        <div class="wave circulo b"></div>
                        <div class="wave circulo c"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <br>
    <br>
    <div class="table-responsive table-container">
        <table id="example" class="table" style="width:100%">
            <thead class="text-dark">
                <tr>
                    <th>NOMBRE</th>
                    <th>PROMESAS</th>
                    <th>CLIENTES GESTIONADOS</th>
                    <th>POSIBLES</th>
                    <th>NUMERO DIRECTO</th>
                    <th>NUMERO GESTIONES</th>
                    <th>Semáforo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datosCliente as $Cliente)
                    <tr>
                        <td>{{ $Cliente->name_client }}</td>
                        <td>{{ $Cliente->number_document }}</td>
                        <td>{{ $Cliente->address }}</td>
                        <td>{{ $Cliente->address }}</td>
                        <td>{{ $Cliente->phone }}</td>
                        <td>{{ $Cliente->email }}</td>
                        <td><span class="circle"></span></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <form method="get" action="">
      <input type="text" max="100" class="porcentaje1"  placeholder="Ingrese el valor 1">
<input type="text" max="100" class="porcentaje1" placeholder="Ingrese el valor 2">
<input type="text" id="resultado" placeholder="Resultado" readonly>

    </form>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="checkboxSemaforo" onchange="mostrarOcultarSemaforo(this)">
        <label class="form-check-label" for="checkboxSemaforo">Activar/Desactivar semáforo</label>
    </div>
    <!-- Enlaces a los scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        function mostrarOcultarSemaforo(checkbox) {
            var tabla = $('#example').DataTable();
            var columnIndex = 6; // Índice de la columna que deseas mostrar/ocultar

            if (checkbox.checked) {
                tabla.column(columnIndex).visible(true);
            } else {
                tabla.column(columnIndex).visible(false);
            }
        }
        $(document).ready(function() {
            var selectedColumn = 1; // Columna inicial seleccionada por defecto
            var dataTable = $('#example').DataTable({
                order: [
                    [selectedColumn, 'desc']
                ],
                columnDefs: [{
                        targets: 0,
                        orderable: false
                    },
                    {
                        targets: [6],
                        visible: false
                    }

                ]
            });
            $('#example thead th').each(function(index) {
                $(this).on('click', function() {
                    selectedColumn = index;
                    dataTable.order([selectedColumn, 'desc']).draw();
                });
            });


            dataTable.on('draw', function() {
                var data = dataTable.rows().data();
                var primerPuesto = data[0][0];
                console.log(primerPuesto);
                $('#firstData').text(primerPuesto);
            });
            var data = dataTable.rows().data();
            var primerPuesto = data[0][0]; // Obtener el dato de la primera columna
            $('#firstData').text(primerPuesto);
            var segundoPuesto = data[1][0]; // Obtener el dato de la primera columna
            $('#secondData').text(segundoPuesto);
            var tercerPuesto = data[2][0]; // Obtener el dato de la primera columna
            $('#thirdData').text(tercerPuesto);
        });
        const numeroInputs = document.querySelectorAll('.porcentaje1');
const resultadoInput = document.getElementById('resultado');

numeroInputs.forEach(numeroInput => {
  numeroInput.addEventListener('input', () => {
    const suma = Array.from(numeroInputs).reduce((total, input) => total + Number(input.value), 0);
    const resta = 100 - suma;
    resultadoInput.value = resta;
  });
});

// // Función para realizar la paginación automática
// function paginarAutomaticamente() {
//       // Verifica si hay una página siguiente disponible
//       if (dataTable.page.hasPage()) {
//         // Obtén el índice de la página siguiente
//         const siguientePagina = dataTable.page() + 1;
      
//         // Realiza la paginación a la siguiente página
//         dataTable.page(siguientePagina).draw('page');
//       } else {
//         // Si no hay una página siguiente, vuelve a la primera página
//         dataTable.page('first').draw('page');
//       }
//     }

//     // Inicia la paginación automática
//     setInterval(paginarAutomaticamente, 5000);

    </script>
</body>

</html>
