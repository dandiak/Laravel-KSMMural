<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AnggotaController extends Controller
{
    protected function index(anggota $anggota) {
        $anggota = Anggota::all();
        $count = Anggota::where('status_anggota', 'Aktif')->count();
        $count1 = Anggota::where('status_anggota', 'Nonaktif')->count();

        return view('anggota/home', ["anggota" => $anggota])->with('count', $count)->with('count1', $count1);
    }

    protected function formAdd() {
        return view('anggota/add');
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'nama_anggota' => ['required', 'string', 'max:255'],
    //         'nim_anggota' => ['required', 'string', 'min:8', 'max:10', 'unique:anggota'],
    //         'alamat_anggota' => ['required'],
    //         'fakultas_anggota' => ['required'],
    //         'jurusan_anggota' => ['required'],
    //         'tahun_anggota' => ['required'],
    //         'status_anggota' => ['required'],
    //     ]);
    // }

    // protected function Add(array $data) {
    //     return Anggota::create([
    //         'nama_anggota' => $data['nama_anggota'],
    //         'nim_anggota' => $data['nim_anggota'],
    //         'alamat_anggota' => $data['alamat_anggota'],
    //         'fakultas_anggota' => $data['fakultas_anggota'],
    //         'jurusan_anggota' => $data['jurusan_anggota'],
    //         'tahun_anggota' => $data['tahun_anggota'],
    //         'status_anggota' => $data['status_anggota'],
    //     ]);

    //     return redirect('/home');
    // }

    protected function Add(Request $request) {
        Anggota::create([
            'nama_anggota' => $request->nama_anggota,
            'nim_anggota' => $request->nim_anggota,
            'alamat_anggota' => $request->alamat_anggota,
            'fakultas_anggota' => $request->fakultas_anggota,
            'jurusan_anggota' => $request->jurusan_anggota,
            'tahun_anggota' => $request->tahun_anggota,
            'status_anggota' => $request->status_anggota,
        ]);

        return redirect('/home');
    }

    protected function Show($id) {
        $anggota = Anggota::where('id', $id)->first();

        return view('anggota/detail', (["anggota" => $anggota]));
    }

    protected function formEdit($id) {
        $anggota = Anggota::where('id', $id)->first();

        return view('anggota/edit', (["anggota" => $anggota]));
    }

    protected function Edit(Request $request, $id) {
        Anggota::where('id', $id)->update([
            'nama_anggota' => $request->nama_anggota,
            'nim_anggota' => $request->nim_anggota,
            'alamat_anggota' => $request->alamat_anggota,
            'fakultas_anggota' => $request->fakultas_anggota,
            'jurusan_anggota' => $request->jurusan_anggota,
            'tahun_anggota' => $request->tahun_anggota,
            'status_anggota' => $request->status_anggota,
        ]);

        return redirect('/home');
    }

    protected function Delete($id) {
        Anggota::destroy('id', $id);

        return redirect('/home');
    }
}
