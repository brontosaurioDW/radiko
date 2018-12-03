<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Models\Usuario;
use App\user;

use Storage;
use Image;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('perfil.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = User::find($id);
        return view('perfil.index', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        return view('perfil.edit', compact('usuario'));
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
        $request->validate(User::$rules_edit, [
            'name.required' => 'El nombre es requerido.',
            'name.min' => 'El nombre debe tener al menos :min caracteres.',
            'foto.image' => 'Debe seleccionar un archivo .jpg o .png'
        ]);

        $inputData = $request->input();

        $usuario = User::find($id);

        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $image = Image::make($file);
            $image->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            });
            $fotoName = $request->file('foto')->hashName('');
            $filepath = $request->file('foto')->hashName('public/images/usuarios'); 
            Storage::put($filepath, (string) $image->encode());   
            $inputData['foto'] = $fotoName;
        } 

        $usuario->update($inputData);

        if(isset($file) && !empty($file)) {
            Storage::delete($file);
        }

        return redirect()->route('perfil.detalle', $id )
        ->with(
            [
              'status' => 'La usuario <b>' . $usuario->name . '</b> fue editado exitosamente.',
              'class' => 'warning'
          ]
      );

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
