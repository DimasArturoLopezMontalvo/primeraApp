@extends('plantilla')

@section('contenido')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Gestor de Usuarios</h1>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-body">
                    <div class="box-header">
                        <button style="background-color: #FFAF33; color: white; border: 2px #FFAF33;" class="btn btn-primary" data-toggle="modal" data-target="#CrearUsuario">Crear nuevo</button>
                    </div>
                    <br>
                    <table class="table table-bordered table-hover table-striped dtUsers">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Departamento</th>
                                <th># Colaborador</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->departamento}}</td>
                                    @if($user->NumColab=="")
                                        <td>No registrado</td>
                                    @else
                                        <td>{{$user->NumColab}}</td>
                                    @endif
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <a href="{{url('Editar-Usuario/'.$user->id)}}">
                                            <button class="btn btn-success"><i class="fas fa-pencil-alt" data-togle="modal" 
                                            data-target="#EditarUsuario"></i></button>    
                                        </a>
                                        <button class="btn btn-danger EliminarUsuario" Uid="{{$user->id}}" 
                                        Usuario="{{$user->name}}"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <div class="modal fade" id="CrearUsuario">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group">
                                <h2>Tipo de usuario</h2>
                            </div>
                            <div class="form-group">
                                <h2>Nombre:</h2>
                                <input type="text" class="form-control input-lg" name="name" required="">
                            </div>
                            <div class="form-group">
                                <h2>Departamento:</h2>
                                <input type="text" class="form-control input-lg" name="departamento" required="">
                            </div>
                            <div class="form-group">
                                <h2># Colaborador:</h2>
                                <input type="text" class="form-control input-lg" name="NumColab" required="">
                            </div>
                            <div class="form-group">
                                <h2>Email:</h2>
                                <input type="text" class="form-control input-lg" name="email" required="">
                            </div>
                            <div class="form-group">
                                <h2>Contraseña:</h2>
                                <input type="text" class="form-control input-lg" name="password" required="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button style="background-color: #FFAF33; color: white; border: 2px #FFAF33; type="submit" class="btn btn-primary">Crear</button>
                        <button style="background-color: #FFAF33; color: white; border: 2px #FFAF33; type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
        $exp = explode('/', $_SERVER["REQUEST_URI"]);
    ?>
    @if($exp[3]=='Editar-Usuario')
    <div class="modal fade" id="EditarUsuario">
        <div class="modal-dialog">EditarUsuario
            <div class="modal-content">
                <form method="post" action="{{url('actualizar-Usuario/'.$exp[4])}}">
                    @csrf
                    @method('GET')
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group">
                                <h2>Tipo de usuario</h2>
                            </div>
                            <div class="form-group">
                                <h2>Nombre:</h2>
                                <input type="text" class="form-control input-lg" name="name" required="" value="{{$usuario->name}}">
                            </div>
                            <div class="form-group">
                                <h2>Departamento:</h2>
                                <input type="text" class="form-control input-lg" name="departamento" required="" value="{{$usuario->departamento}}">
                            </div>
                            <div class="form-group">
                                <h2># Colaborador:</h2>
                                <input type="text" class="form-control input-lg" name="NumColab" required="" value="{{$usuario->NumColab}}">
                            </div>
                            <div class="form-group">
                                <h2>Email:</h2>
                                <input type="text" class="form-control input-lg" name="email" required="" value="{{$usuario->email}}">
                            </div>
                            <div class="form-group">
                                <h2>Contraseña:</h2>
                                <input type="text" class="form-control input-lg" name="password" required="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button style="background-color: #FFAF33; color: white; border: 2px #FFAF33; type="submit" class="btn btn-success">Modificar</button>
                        <button style="background-color: #FFAF33; color: white; border: 2px #FFAF33; type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif
@endsection