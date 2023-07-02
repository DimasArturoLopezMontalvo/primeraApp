@extends('plantilla')

@section('contenido')
  <div class="content-wrapper">
  	<section class="content-header">
  		<h1>Mi Perfil</h1>
    </section>
    
    <section class="content">
    	<div class="box">
    		<div class="box-body">
                <form method="POST" action="" enctype="multipart form/data">
                    @csrf
                    @method('PUT') 
                <div class="row">
                    <div class="col-md-6 col-xs-12">              
                        <h2>Nombre: </h2>
                        <input type="text" name="name" value="{{auth()->user()->name}}" class="input-lg">
                        <h2>Departamento: </h2>
                        <input type="text" name="departamento" value="{{auth()->user()->departamento}}" class="input-lg">
                        <h2>Numero de Colaborador: </h2>
                        <input type="text" name="NumColab" value="{{auth()->user()->NumColab}}" class="input-lg">           
                    </div>
                    <div class="col-md-6 col-xs-12">              
                        <h2>Email: </h2>
                        <input type="text" name="email" value="{{auth()->user()->email}}" class="input-lg">
                        <h2>Password: </h2>
                        <input type="text" name="passwordN" value="" class="input-lg">           
                        <input type="hidden" name="password" value="{{auth()->user()->password}}" class="input-lg">
                    </div>
                  </div>
              </div> 
                 <div class="box-footer">
                    <button type="submit" class="btn btn-success btn-lg pull-right">Guardar</button>
                 </div>
                 </form> 
    		</div>    	
    </section>
 </div>
@endsection
