<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function MiPerfil(){
        return view('modulos.MiPerfil');
    }

     public function index()     
    {
        //
        $usuarios=Usuarios::all();
        return view('modulos.Usuarios')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function MiPerfilUpdate(Request $request){
        if(auth()->user()->email != request('email')){
            if(request('passwordN')){
                $datos = request()->validate([
                    'name'=>['required', 'string', 'max:255'],
                    'departamento'=>['required', 'string', 'max:255'],
                    'NumColab' => ['required','string','max:255'],
                    'email'=>['required', 'email', 'unique:users'],
                    'passwordN'=>['required', 'string', 'min:3']
                ]);
            }else{
                $datos=request()->validate([
                    'name'=>['required', 'string', 'max:255'],
                    'departamento'=>['required', 'string', 'max:255'],
                    'NumColab' => ['required','string','max:255'],
                    'email'=>['required', 'email', 'unique:users'],
                    'passwordN'=>['required', 'string', 'min:3']
                ]);
            }
        }else{
            if(request('passwordN')){
                $datos = request()->validate([
                    'name'=>['required', 'string', 'max:255'],
                    'departamento'=>['required', 'string', 'max:255'],
                    'email'=>['required', 'email'],
                    'passwordN'=>['required', 'string', 'min:3']
                ]);
            }else{
                $datos=request()->validate([
                    'name'=>['required', 'string', 'max:255'],
                    'departamento'=>['required', 'string', 'max:255'],
                    'email'=>['required', 'email']
                ]);
            }
         }
         //Si se requiere actualizar el numero de colaborador
         if (request('NumColab')){
            $NumColab=$request['NumColab'];
         } else{
            $NumColab = auth()->user()->NumColab;
         }
        
         //si se quiere actualizar la contraseña y cumple con la regla
         if(isset($datos["passwordN"])){
            DB::table('users')->where('id', auth()->user()->id)->update(['name'=>$datos["name"],
            'email'=>$datos["email"], 'NumColab'=>$NumColab, 'departamento'=>$datos,
            'password'=>Hash::make(request("passwordN"))]);            
         }else{
            DB::table('users')->where('id', auth()->user()->id)->update(['name'=>$datos["name"],
            'email'=>$datos["email"], 'NumColab'=>$NumColab, 'departamento'=>$datos]);
         }
               
           return redirect('MiPerfil');
      }

     
    
    
     public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validar los datos recibidos
        $datos = request()->validate([
            'name' => ['string', 'max:255'],
            'departamento'=>['required', 'string', 'max:255'],
            'NumColab' => ['required','string','max:255'],
            'rol' => ['required'],
            'email' => ['string', 'unique:users'],
            'password' => ['string', 'min:3']
        ]);
 
 //Crear el registro en la tabla users de la base de datos
        Usuarios::create([
            'name' => $datos['name'],
            'departamento'=> $datos['departamento'],
            'NumColab' => $datos ['NumColab'],
            'email' => $datos['email'],
            'rol' => $datos['rol'],
            'password' => Hash::make($datos['password']),
            ]); 
 
 //redireccionamos a la vista de usuarios, al llamar a la ruta Usuarios
     return redirect('Usuarios')->with('UsuarioCreado', 'OK');
 }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuarios $id)
    {
        if(auth()->user()->rol != 'Administrador'){
            return redirect('Inicio');
        }
        $usuarios = Usuarios::all();
        $usuario = Usuarios::find($id->id);
        return view('modulos.Usuarios', compact('usuarios', 'usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuarios::find($id);
	
        if($usuario["email"] != request('email')){
           $datos=request()->validate([
            'name' => ['required'],
            'departamento' => ['required'],
            'NumColab' => ['required'],
            'rol' => ['required'],
            'email' => ['required', 'email', 'unique:users']
        ]);
         }else{
        $datos=request()->validate([
          'name' => ['required'],
          'departamento' => ['required'],
          'NumColab' => ['required'],
          'rol' => ['required'],
          'email' => ['required', 'email']
        ]);
        }
        if($usuario["password"]!=request('password')){
        $clave=request("password");
    }else{
        $clave=$usuario["password"];
         }
         DB::table('users')->where('id', $usuario['id'])->update(['name'=>$datos["name"], 'departamento'=>$datos["departamento"], 'NumColab'=>$datos["NumColab"], 'email'=>$datos["email"], 'rol'=>$datos['rol'], 'password'=>Hash::make($clave)]);
         return redirect('Usuarios');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuarios::find($id);
	    $exp = explode("/", $usuario->NumColab);

        if (strpos($usuario->NumColab, "/") !== false) {
            $exp = explode("/", $usuario->NumColab);
    }        
    Usuarios::destroy($id);
	return redirect('Usuarios');
    }
    
}