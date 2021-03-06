<?php

namespace App\Http\Controllers;

use App\Helpers\JsonResponse;
use App\Http\Resources\FolderGroup\FolderGroupResource;
use App\Models\FolderGroup;
use App\Models\Subdepartment;
use Illuminate\Http\Request;

class SubdepartmentController extends Controller
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
        $subdepartment = Subdepartment::create([
            'department_id' => $request->department_id,
            'nombre' => $request->nombre,
            'identificador_interno' => $request->identificador_interno,
        ]);
        return JsonResponse::sendResponse($subdepartment);
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

    public function folderGroups($id)
    {
        $folderGroups = FolderGroup::where('subdepartment_id', $id)->get();
        return JsonResponse::sendResponse(FolderGroupResource::collection($folderGroups));
    }
}
