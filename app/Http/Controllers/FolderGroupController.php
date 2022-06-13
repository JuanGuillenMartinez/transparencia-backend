<?php

namespace App\Http\Controllers;

use App\Helpers\JsonResponse;
use App\Http\Resources\Folder\FolderResource;
use App\Models\Folder;
use App\Models\FolderGroup;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class FolderGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $folderGroups = FolderGroup::all();
        return JsonResponse::sendResponse($folderGroups);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $folderGroup = FolderGroup::create([
            'subdepartment_id' => $request->subdepartment_id,
            'serie' => $request->serie,
            'estatus' => $request->estatus,
        ]);
        return $folderGroup;
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

    public function folders($folderGroupId) {
        $folderGroup = FolderGroup::find($folderGroupId);
        return JsonResponse::sendResponse(FolderResource::collection($folderGroup->folders));
    }

    public function available() 
    {
        $folderGroup = FolderGroup::where('estatus', 'disponible')->get();
        return JsonResponse::sendResponse($folderGroup);
    }
}
