<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadPdfController extends Controller
{
    public function pdf_upload()
    {
        return view('pdf_upload');
    }
    
    public function pdf_store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:10240',
        ]);

        $pdf = $request->file('file');

        $pdfName = 'pdf_' . time() . '.' . $pdf->getClientOriginalExtension();

        $pdf->move(public_path('pdf/dropzone'), $pdfName);
        return response()->json(['success' => true, 'message' => 'PDF berhasil diunggah'], 200);
    }
}
