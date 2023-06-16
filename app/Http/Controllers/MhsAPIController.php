<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MhsAPIController extends Controller
{
    public function read()
    {
        $mhs = Mahasiswa::all();
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil di Tampilkan',
            'data' => $mhs
        ], 200);
    }

    public function create(Request $req)
    {
        $mhs = Mahasiswa::create([
            'nim' => $req->nim,
            'nama' => $req->nama,
            'gender' => $req->gender,
            'prodi' => $req->prodi,
            'minat' => $req->minat
        ]);

        if($mhs)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil di Tambahkan'
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal di Tambahkan'
            ],400);
        }
    }

    public function update($id, Request $req)
    {
        $mhs = Mahasiswa::find($id)->update([
            'nim' => $req->nim,
            'nama' => $req->nama,
            'gender' => $req->gender,
            'prodi' => $req->prodi,
            'minat' => $req->minat
        ]);

        if($mhs)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil di Ubah'
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal di Ubah'
            ],400);
        }
    }

    public function delete($id)
    {
        $mhs = Mahasiswa::find($id);

        if($mhs)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil di Hapus'
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal di Hapus'
            ],400);
        }
    }
    
}
