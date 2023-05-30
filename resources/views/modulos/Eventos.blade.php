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
            <div class="box-body">
                <table class="table table-bordered table-hover table-striped dtUsers">
                       <thead>
                            <tr>
                                <th>fecha_Evento</th>
                                <th>nombre_Evento</th>
                                <th>Suite</th>
                                <th>Num_Colaborador</th>
                                <th>Nombre_Colaborador</th>
                                <th>puesto</th>
                                <th>pago</th>
                                <th>pax</th>
                                <th>asistencia</th>
                                <th>observaciones</th>
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
                                <td>{{$evento->puesto}}</td>
                                <td>{{$evento->pago}}</td>
                                <td>{{$evento->pax}}</td>
                                <td>{{$evento->asistencia}}</td>
                                <td>{{$evento->observaciones}}</td>
                                <<td>
                                    <a href="{{url('Editar-Evento/'.$evento->id)}}">
                                        <button class="btn btn-success"><i 
                                        class="fas fa-pencil-alt"></i></button>    
                                    </a>
                                    <button class="btn btn-danger EliminarEvento" Cid="{{$evento->id}}" 
                                    Evento="{{$evento->nombre}}"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                       
                </table>            
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
                            <input type="text" class="form-control input-lg" 
                            name="fechEvent" required="">
                        </div>

                        <div class="form-group">
                            <h2>nombre_Evento:</h2>
                            <input type="text" class="form-control input-lg" 
                            name="nomEvent" required="">
                        </div>
                        <div class="form-group">
                            <h2>Suite:</h2>
                            <input type="date" class="form-control input-lg" 
                            name="Suite" required=" ">
                        </div>
                        <div class="form-group">
                            <h2>Num_Colaborador:</h2>
                            <input type="text" class="form-control input-lg" 
                            name="NumColaborador" required="">
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
<!-- Editar Cliente -->
<?php
        $exp = explode("/", $_SERVER["REQUEST_URI"]);
    ?>
    @if($exp[3] == "Editar-Cliente")
    <div class="modal fade" id="EditarCliente">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{ url('actualizar-Cliente/' .$cli->id) }}">
                    @csrf
                    @method('put')
                    <div class="modal-body">
                        <div class="box_body">
                            <div class="form-group">
                                <h2>Nombre:</h2>
                                <input type="text" class="form-control input-lg" 
                                name="nombre" required="" value="{{$cli->nombre}}">
                            </div>

                            <div class="form-group">
                                <h2>Documento:</h2>
                                <input type="text" class="form-control input-lg" 
                                name="documento" required=""  value="{{$cli->documento}}">
                            </div>
                            <div class="form-group">
                                <h2>Fecha Nacimiento:</h2>
                                <input type="date" class="form-control input-lg" 
                                name="fechNac" required=" "  value="{{$cli->fechNac}}">
                            </div>
                            <div class="form-group">
                                <h2>Dirección:</h2>
                                <input type="text" class="form-control input-lg" 
                                name="direccion" required=""  value="{{$cli->direccion}}">
                            </div>
                            <div class="form-group">
                                <h2>Teléfono:</h2>
                                <input type="text" class="form-control input-lg" 
                                data-inputmask="'mask': '+(999) 999-9999'" data-mask
                                name="telefono" required=""  value="{{$cli->telefono}}">
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
