<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class UploadController extends Controller
{
    public function upload()
    {
        return view('upload');
    }

    public function proses_upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file',
            'keterangan' => 'required',
        ]);

        // Menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

        // Nama file
        $fileName = $file->getClientOriginalName();
        echo 'File Name: ' . $fileName . '<br>';
        // Ekstensi file
        $fileExtension = $file->getClientOriginalExtension();
        echo 'File Extension: ' . $fileExtension . '<br>';
        // Real path
        $fileRealPath = $file->getRealPath();
        echo 'File Real Path: ' . $fileRealPath . '<br>';
        // Ukuran file
        $fileSize = $file->getSize();
        echo 'File Size: ' . $fileSize . '<br>';
        // Tipe MIME
        $fileMimeType = $file->getMimeType();
        echo 'File MIME Type: ' . $fileMimeType;

        // Isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        // Simpan file dengan nama aslinya
        $file->move($tujuan_upload, $fileName);

        return redirect()->back()->with('success', 'File berhasil diupload.');
    }

    public function resize_upload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keterangan' => 'required',
        ]);

        $path = public_path('img/logo');

        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true);
        }

        $file = $request->file('file');
        $fileName = 'logo_' . uniqid() . '.' . $file->getClientOriginalExtension();

        $canvas = Image::canvas(200, 200);
        $resizeImage = Image::make($file)->resize(null, 200, function($constraint) {
            $constraint->aspectRatio();
        });

        $canvas->insert($resizeImage, 'center');

        if($canvas->save($path . '/' .$fileName)) {
            return redirect(route('upload'))->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect(route('upload'))->with('error', 'Data Gagal Ditambahkan');
        }
    }
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