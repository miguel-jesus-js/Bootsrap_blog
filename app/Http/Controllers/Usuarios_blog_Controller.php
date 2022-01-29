<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios_blog;
use Illuminate\Support\Facades\Input as input;

class Usuarios_blog_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usuarios.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        function regexCheck($variable,$case){
            //Selector de la regex (expresión regular)
            switch ($case){
                case "email":
                        $regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
                break;
            
                case "pass":
                        $regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,15}$/";

                break;
            }
            
            
            if(preg_match($regex,$variable)){
                return TRUE;
            }else{
                return FALSE;
            }
        
        }
        $request->validate([
            'nombre' => 'required', 
            'app' => 'required', 
            'apm' => 'required', 
            'sexo' => 'required', 
            'nombre_user' => 'required|min:8|max:15', 
            'correo' => 'required', 
            'contrasena' => 'required',
            'foto_perfil' => 'required|image|mimes:jpeg,png,svg|max:1024'
        ]);
        
        $usuarios = $request->all();
        if(@$usuarios['correo']){
            if(!regexCheck($usuarios['correo'],"email")){
                return json_encode(array('type' => 'warning','title' => 'Formato invalido', 'msj' => 'El correo no tiene un formato valido'));
            }
        }
        if(@$usuarios['contrasena']){
            if(!regexCheck($usuarios['contrasena'],"pass")){
                return json_encode(array('type' => 'warning','title' => 'Formato invalido', 'msj' => 'La contraseña no tiene un formato valido'));
            }
        }
        
        if($imagen = $request->file('foto_perfil')){
            $rutaGuardarImg = 'img/';
            $fotoUsuario = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $fotoUsuario);
            $usuarios['foto_perfil'] = "$fotoUsuario";
        }
        if (Usuarios_blog::where('nombre_user',  $usuarios['nombre_user'])->exists()) {
            return json_encode(array('type' => 'warning','title' => 'Operación fallida', 'msj' => 'El usuario ya fue registrado con aterioridad'));
        }elseif(Usuarios_blog::where('correo',  $usuarios['correo'])->exists()){
            return json_encode(array('type' => 'warning','title' => 'Operación fallida', 'msj' => 'El correo ya fue registrado con aterioridad'));
        }else{
            Usuarios_blog::create($usuarios);
            return json_encode(array('type' => 'success','title' => 'Operación exitosa', 'msj' => 'Usuario registrado correctamente'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
