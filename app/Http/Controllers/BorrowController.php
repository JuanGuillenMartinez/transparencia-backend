<?php

namespace App\Http\Controllers;

use App\Helpers\JsonResponse;
use App\Http\Resources\Borrow\BorrowResource;
use App\Models\Borrow;
use App\Models\FolderGroup;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borrows = Borrow::all();
        return JsonResponse::sendResponse(BorrowResource::collection($borrows));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $borrow = Borrow::create([
            "folder_group_id" => $request->folder_group_id,
            "person_id" => $request->person_id,
            "estatus" => "prestado",
        ]);
        return JsonResponse::sendResponse($borrow);
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
        $borrow = Borrow::find($id);
        $borrow->folder_group_id = $request->folder_group_id;
        $borrow->person_id = $request->person_id;
        $borrow->estatus = $request->estatus;
        $borrow->save();
        return JsonResponse::sendResponse($borrow);
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

    public function returnFolder($id)
    {
        $borrow = Borrow::find($id);
        $folderGroup = FolderGroup::find($borrow->folder_group_id);
        $folderGroup->estatus = 'disponible';
        $folderGroup->save();
        $borrow->estatus = "devuelto";
        $borrow->fecha_devolucion = Carbon::now();
        return $borrow->save();
    }

    public function relendFolder($id)
    {
        $borrow = Borrow::find($id);
        $folderGroup = FolderGroup::find($borrow->folder_group_id);
        $folderGroup->estatus = 'prestado';
        $folderGroup->save();
        $borrow->estatus = "prestado";
        $borrow->created_at = Carbon::now();
        $borrow->fecha_devolucion = null;
        return $borrow->save();
    }
}
