<?php

namespace App\Http\Controllers\Guru;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class AbsensiController extends Controller
{
    public function index()
    {
        return view('guru.absensi', [
            'listKelas' => Kelas::query()
                ->orderBy('nama')
                ->get(),
            'tanggal' => request('tanggal') ?? date('Y-m-d'),
            'tahun' => '2023 / 2024',
        ]);
    }

    public function simpan(Request $request)
    {
        $validate = $request->validate([
            'kelas_id' => 'required',
            'jam' => 'required'
        ]);
        if (!$validate) {
            return back()->withErrors($validate);
        } else {
            return back()->with($request->all());
        }
    }

    public function partial()
    {
        $listSiswa =  Siswa::whereTahun(request('tahun'))
            ->whereKelasId(request('kelas_id'))
            ->with([
                'absensi' => fn ($q) =>
                $q->whereTanggal(request('tanggal'))
                    ->whereKelasId(request('kelasId'))
                    ->whereJam(request('jam')),
                'absensi.guru:id,name',
                'user:nis,name'
            ])
            ->get();
        return view('guru.absensi.absensi-partial', [
            'listSiswa' => $listSiswa,
            'tahun' => request('tahun'), // Pass tahun and kelas_id to the view
            'kelas_id' => request('kelas_id'),
        ]);
    }
}
