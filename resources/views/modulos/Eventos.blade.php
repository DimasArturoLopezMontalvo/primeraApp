@extends('plantilla')

@section('contenido')
<div class="content-wrapper">
    <section class="content-header">
        <h1>Gestor de Evento</h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <button style="background-color: #FFAF33; color: white; border: 2px #FFAF33;" class="btn btn-primary" data-toggle="modal" data-target="#CrearEvento">
                    Ingresar nuevo evento
                </button>
            </div>
            <div>
                <!DOCTYPE html>
<html>
<head>
  <title>Imprimir Tablas</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
    }

    button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
  <button onclick="imprimirTabla()">Imprimir</button>

  <script>
    function imprimirTabla() {
      window.print();
    }
  </script>
</body>
</html>

                <table class="table-warning table table-success table-striped table-striped dtUsers">
                       <thead>
                            <tr>
                                <th >F. Evento</th>
                                <th>Nombre E.</th>
                                <th>Suite</th>
                                <th># Colab.</th>
                                <th>Nombre Colab.</th>
                                <th>Puesto</th>
                                <th>Pago</th>
                                <th>Pax</th>
                                <th>Asist.</th>
                                <th>Observ.</th>
                                <th>firma</th>
                                <th></th>
                            </tr>
                       </thead> 
                        <tbody>
                             @foreach ($eventos as $evento)
                            <tr>
                                <td>{{$evento->fechEvent}}</td>
                                <td>{{$evento->nomEvent}}</td>
                                <td>{{$evento->Suite}}</td>
                                <td>{{$evento->NumColaborador}}</td>
                                <td>{{$evento->NombreColaborador}}</td>
                                <td>{{$evento->puesto}}</td>
                                <td>{{$evento->pago}}</td>
                                <td>{{$evento->pax}}</td>
                                <td>{{$evento->asistencia}}</td>
                                <td>{{$evento->observaciones}}</td>
                                <td>{{$evento->firma}}</td>
                                <td>
                                    <a href="{{url('Editar-Evento/'.$evento->id)}}">
                                        <button class="btn btn-success"><i 
                                        class="fas fa-pencil-alt"></i></button>    
                                    </a>
                                    <button class="btn btn-danger EliminarEvento" Eid="{{$evento->id}}" 
                                    Evento="{{$evento->nomEvent}}"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                </table>    
                <!DOCTYPE html>
<html>
<head>
    <style>
        .signature {
            display: inline-block;
            width: 200px;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .signature h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="signature">
        <h2>Elaboró:</h2>
        <p>Jorge Serrano</p>
        <p>Recursos Humanos</p>
        <p>_________________</p>
    </div>

    <div class="signature">
        <h2>Alejandro López</h2>
        <p>Gerente General</p>
        <p>_________________</p>
    </div>

    <div class="signature">
        <h2>Graciela Garcia</h2>
        <p>Revisó-Contabilidad</p>
        <p>_________________</p>
    </div>

    <div class="signature">
        <h2>Araceli Esquivel</h2>
        <p>Autorizó ContralorGeneral</p>
        <p>_________________</p>
    </div>
</body>
</html>
  
            </div>
        </div>
    </section>
</div>
<!-- Crear cliente -->
<div class="modal fade" id="CrearEvento">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="">
                @csrf
                <div class="modal-body">
                    <div class="box_body">
                        <div class="form-group">
                            <h2>Fecha_Evento:</h2>
                            <input type="date" class="form-control input-lg" 
                            name="fechEvent" required="">
                        </div>
                        <div class="form-group">
                            <h2>nombre_Evento:</h2>
                            <input type="text" class="form-control input-lg" 
                            name="nomEvent" required="">
                        </div>
                        <div class="form-group">
                            <h2>Suite:</h2>
                            <input type="text" class="form-control input-lg" 
                            name="Suite" required=" ">
                        </div>
                        <div class="form-group">
                            <h2>Num_Colaborador:</h2>
                            <input type="text" class="form-control input-lg" 
                            name="NumColaborador" required="">
                        </div>
                        <div class="form-group">
                            <h2>Nombre del Colaborador:</h2>
                            <input type="text" class="form-control input-lg" 
                            name="NombreColaborador" required="">
                        </div>
                        <div class="form-group">
                          <h2>puesto:</h2>
                          <input type="text" class="form-control input-lg" 
                          name="puesto" required="">
                      </div>
                      <div class="form-group">
                        <h2>pago:</h2>
                        <input type="text" class="form-control input-lg" 
                        name="pago" required="">
                    </div>
                    <div class="form-group">
                      <h2>pax:</h2>
                      <input type="text" class="form-control input-lg" 
                      name="pax" required="">
                  </div>
                  <div class="form-group">
                    <h2>asistencia:</h2>
                    <input type="text" class="form-control input-lg" 
                    name="asistencia" required="">
                </div>
                <div class="form-group">
                  <h2>observaciones:</h2>
                  <input type="text" class="form-control input-lg" 
                  name="observaciones" required="">
              </div>
              <div class="form-group">
                <h2>Firma:</h2>
                <input type="text" class="form-control input-lg" 
                name="" required="firma">
            </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Crear</button>
                            <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Editar EVENTO -->
<?php
        $exp = explode("/", $_SERVER["REQUEST_URI"]);
    ?>
    @if($exp[3] == "Editar-Evento")
    <div class="modal fade" id="EditarEvento">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{ url('actualizar-Evento/' .$cli->id) }}">
                    @csrf
                    @method('put')
                    <div class="modal-body">
                        <div class="box_body">
                            <div class="form-group">
                                <h2>Fecha_Evento:</h2>
                                <input type="date" class="form-control input-lg" 
                                name="fechEvent" required="" value="{{$cli->fechEvent}}">
                            </div>
                            <div class="form-group">
                                <h2>nombre_Evento:</h2>
                                <input type="text" class="form-control input-lg" 
                                name="nomEvent" required=""  value="{{$cli->nomEvent}}">
                            </div>
                            <div class="form-group">
                                <h2>Suite:</h2>
                                <input type="text" class="form-control input-lg" 
                                name="Suite" required=" "  value="{{$cli->Suite}}">
                            </div>
                            <div class="form-group">
                                <h2>Num_Colaborador:</h2>
                                <input type="text" class="form-control input-lg" 
                                name="NumColaborador" required=""  value="{{$cli->NumColaborador}}">
                            </div>
                            <div class="form-group">
                                <h2>Nombre del Colaborador</h2>
                                <input type="text" class="form-control input-lg" 
                                name="NombreColaborador" required=""  value="{{$cli->NombreColaborador}}">
                            </div>
                            <div class="form-group">
                                <h2>puesto</h2>
                                <input type="text" class="form-control input-lg" 
                                name="puesto" required=""  value="{{$cli->puesto}}">
                            </div>
                            <div class="form-group">
                                <h2>pago</h2>
                                <input type="text" class="form-control input-lg" 
                                name="pago" required=""  value="{{$cli->pago}}">
                            </div>
                            <div class="form-group">
                                <h2>pax</h2>
                                <input type="text" class="form-control input-lg" 
                                name="pax" required=""  value="{{$cli->pax}}">
                            </div>
                            <div class="form-group">
                                <h2>Asistencia</h2>
                                <input type="text" class="form-control input-lg" 
                                name="asistencia" required=""  value="{{$cli->asistencia}}">
                            </div>
                            <div class="form-group">
                                <h2>Observaciones</h2>
                                <input type="text" class="form-control input-lg" 
                                name="observaciones" required=""  value="{{$cli->observaciones}}">
                            </div>
                            <div class="form-group">
                                <h2>Firma</h2>
                                <input type="text" class="form-control input-lg" 
                                name="firma" value="{{$cli->firma}}">
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                <button type="button" class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif
@endsection
