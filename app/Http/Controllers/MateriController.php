<?php

namespace App\Http\Controllers;

use App\Models\materi;
use App\Models\sub_materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    public function materi()
    {
        $materi = materi::all();
        return view('admin.materi.materi', compact('materi'));
    }
    public function addMateri(Request $request)
    {
        $photo = $request->file('foto_materi');
        $filename = date('Y-m-d') . $photo->getClientOriginalName();
        $path = 'foto_materi/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($photo));

        $data['nama_materi'] = $request->input('nama_materi');
        $data['deskripsi'] = $request->input('deskripsi');
        $data['harga'] = $request->input('nama_materi');
        $data['foto_materi'] = $filename;

        materi::create($data);
        return redirect('admin/materi/tambah-materi')->with('success', 'Berhasil menambahkan materi');
    }

    public function detailMateri(Request $request, $id)
    {
        $materi = materi::find($id);
        $submateri = sub_materi::where('materi_id', $materi->id)->get();
        if ($request->is('api/*') || $request->wantsJson()) {
            return response()->json([
                'materi' => $materi
            ]);
        }
        return view('admin.materi.detailmateri', compact('materi', 'submateri'));
    }
    public function deleteMateri($id)
    {
        $materi = materi::find($id);
        if ($materi) {
            $materi->delete();
        }
        return redirect()->back()->with('success', 'Berhasil menghapus materi');
    }
    public function viewAddSubMateri(Request $request, $id)
    {
        $materi = materi::find($id);
        if ($request->is('api/*') || $request->wantsJson()) {
            return response()->json([
                'materi' => $materi
            ]);
        }
        return view('admin.materi.addSubMateri', compact('materi'));
    }
    public function addSubMateri(Request $request, $id)
    {
        $photo = $request->file('video');
        $filename =  $photo->getClientOriginalName();
        $path = 'video/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($photo));

        $materi_id = Materi::find($id);
        $data['nama_sub_materi'] = $request->input('nama_sub_materi');
        $data['video'] = $filename;
        $data['materi_id'] = $materi_id->id;

        sub_materi::create($data);
        return redirect()->back()->with('success', 'berhasil menambahkan sub materi');
    }
    public function deleteSubMateri($id)
    {
        $subMateri = sub_materi::find($id);
        if ($subMateri) {
            $subMateri->delete();
        }
        return redirect()->back()->with('success', 'sukses delete sub materi');
    }
}
