<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $pesan = Contact::all();
        return view('admin.contact.main', compact('pesan'));
    }

    public function kirimPesan(Request $request)
    {
        $data['nama'] = $request->input('nama');
        $data['no_hp'] = $request->input('no_hp');
        $data['email'] = $request->input('email');
        $data['subjek'] = $request->input('subjek');
        $data['pesan'] = $request->input('pesan');

        Contact::create($data);
        return redirect()->back()->with('success', 'Berhasil mengirim pesan');
    }
    public function deletePesan($id)
    {
        $data = Contact::find($id);
        if ($data) {
            $data->delete();
            return redirect()->back()->with('success', 'Berhasil Menghapus data pesan');
        }
    }
}
