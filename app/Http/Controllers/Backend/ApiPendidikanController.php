<?php

namespace App\Http\Controllers\Backend;

use App\Models\Pendidikan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApiPendidikanController extends Controller
{
    public function getAll() {
        $pendidikan = Pendidikan::all();
        return Response::json($pendidikan, 201);
    }

    public function getPen($id) {
        $pendidikan = Pendidikan::find($id);
        return Response::json($pendidikan, 200);
    }

    public function createPen(Request $request) {
        Pendidikan::create($request->all());
        return response()->json([
            'status' => 'ok',
            'message' => 'Pendidikan berhasil Ditambahkan!'
        ], 201);
    }

    public function updatePen($id, Request $request) {
        Pendidikan::find($id)->update($request->all());
        return response()->json([
            'status' => 'ok',
            'message' => 'Pendidikan berhasil Dirubah!'
        ], 201);
    }

    public function deletePen($id) {
        Pendidikan::destroy($id);
        return response()->json([
            'status' => 'ok',
            'message' => 'Pendidikan berhasil Dihapus!'
        ], 201);
    }
}