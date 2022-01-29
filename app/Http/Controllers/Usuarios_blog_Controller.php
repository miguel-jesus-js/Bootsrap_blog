<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios_blog;

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
        $request->validate([
            'nombre' => 'required', 'app' => 'required', 'apm' => 'required', 'sexo' => 'required', 'nombre_user' => 'required', 'correo' => 'required', 'contrasena' => 'required', 'foto_perfil' => 'required|image|mimes:jpeg,png,svg|max:1024'
        ]);
        $usuarios = $request->all();
        if($imagen = $request->file('foto_perfil')){
            $rutaGuardarImg = 'img/';
            $fotoUsuario = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $fotoUsuario);
            $usuarios['foto_perfil'] = "$fotoUsuario";
        }
        Usuarios_blog::create($usuarios);
        //return redirect()->route('/');
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
