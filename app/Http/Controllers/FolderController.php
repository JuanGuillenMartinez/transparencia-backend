<?php

namespace App\Http\Controllers;

use App\Helpers\JsonResponse;
use App\Models\Folder;
use App\Models\FolderCover;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $folder = Folder::create([
            'folder_group_id' => $request->folder_group_id,
            'legajo' => $request->legajo,
            'subserie' => $request->subserie,
        ]);
        if (isset($folder)) {
            $folderCover = FolderCover::create([
                'folder_id' => $folder->id,
                'area' => $request->area,
                'asunto' => $request->asunto,
                'fecha_inicio' => $request->fecha_inicio,
                'fecha_terminacion' => $request->fecha_terminacion,
                'valor_documental' => $request->valor_documental,
                'conservacion_tramite' => $request->conservacion_tramite,
                'conservacion_concentracion' => $request->conservacion_concentracion,
                'conservacion_acceso' => $request->conservacion_acceso,
                'conservacion_desclasificacion' => $request->conservacion_desclasificacion,
                'clasificacion_informacion' => $request->clasificacion_informacion,
                'expediente' => $request->expediente,
                'localizacion' => $request->localizacion,
            ]);
        }
        return JsonResponse::sendResponse($folderCover);
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
