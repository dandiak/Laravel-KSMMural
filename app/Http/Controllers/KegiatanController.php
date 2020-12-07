<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    protected function index(kegiatan $kegiatan) {
        $kegiatan = Kegiatan::all();
        $count = Kegiatan::where('status_kegiatan', 'Terlaksana')->count();
        $count1 = Kegiatan::where('status_kegiatan', 'Belum Terlaksana')->count();
        $count2 = Kegiatan::where('status_kegiatan', 'Tidak Terlaksana')->count();

        return view('kegiatan/home', ["kegiatan" => $kegiatan])->with('count', $count)->with('count1', $count1)->with('count2', $count2);
    }

    protected function formAdd() {
        return view('kegiatan/add');
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
        Kegiatan::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'deskripsi_kegiatan' => $request->deskripsi_kegiatan,
            'ketua_kegiatan' => $request->ketua_kegiatan,
            'jadwal_kegiatan' => $request->jadwal_kegiatan,
            'periode_kegiatan' => $request->periode_kegiatan,
            'status_kegiatan' => $request->status_kegiatan,
        ]);

        return redirect('/home/kegiatan');
    }

    protected function Show($id) {
        $kegiatan = Kegiatan::where('id', $id)->first();

        return view('kegiatan/detail', (["kegiatan" => $kegiatan]));
    }

    protected function formEdit($id) {
        $kegiatan = Kegiatan::where('id', $id)->first();

        return view('kegiatan/edit', (["kegiatan" => $kegiatan]));
    }

    protected function Edit(Request $request, $id) {
        Kegiatan::where('id', $id)->update([
            'nama_kegiatan' => $request->nama_kegiatan,
            'deskripsi_kegiatan' => $request->deskripsi_kegiatan,
            'ketua_kegiatan' => $request->ketua_kegiatan,
            'jadwal_kegiatan' => $request->jadwal_kegiatan,
            'periode_kegiatan' => $request->periode_kegiatan,
            'status_kegiatan' => $request->status_kegiatan,
        ]);

        return redirect('/home/kegiatan');
    }

    protected function Delete($id) {
        Kegiatan::destroy('id', $id);

        return redirect('/home/kegiatan');
    }
}
