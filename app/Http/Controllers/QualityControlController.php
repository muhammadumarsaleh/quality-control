<?php

namespace App\Http\Controllers;

use App\Models\QualityControl;
use App\Models\User;
use Illuminate\Http\Request;

class QualityControlController extends Controller
{
    public function index()
    {
        $qualityControls = QualityControl::all();
        return view('quality-control.index', compact('qualityControls'));
    }

    public function create()
    {
        $latestRecord = QualityControl::latest('id')->first();
        $nextId = $latestRecord ? $latestRecord->id + 1 : 1;
        $reportId = sprintf('%04d.BMS.2024', $nextId);

        $users = User::where('usertype', 'user')->pluck('name', 'id');

        return view('quality-control.create', compact('reportId', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'report_id' => 'required',
            'inspektor' => 'required',
            'tanggal_pengecekan' => 'required|date',
            'area' => 'required',
            'sub_area' => 'required',
            'eksekutor' => 'required',
            'deskripsi_temuan' => 'required',
            'foto_temuan_sebelum' => 'required|image',
            'foto_temuan_sesudah' => 'required|image',
            'status' => 'required',
        ]);

        $foto_temuan_sebelum = $request->file('foto_temuan_sebelum')->store('images');
        $foto_temuan_sesudah = $request->file('foto_temuan_sesudah')->store('images');

        QualityControl::create([
            'report_id' => $request->report_id,
            'inspektor' => $request->inspektor,
            'tanggal_pengecekan' => $request->tanggal_pengecekan,
            'area' => $request->area,
            'sub_area' => $request->sub_area,
            'eksekutor' => $request->eksekutor,
            'deskripsi_temuan' => $request->deskripsi_temuan,
            'foto_temuan_sebelum' => $foto_temuan_sebelum,
            'foto_temuan_sesudah' => $foto_temuan_sesudah,
            'status' => $request->status,
            'close_date' => $request->close_date,
        ]);

        return redirect()->route('quality-control.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(QualityControl $qualityControl)
    {
        $users = User::where('usertype', 'user')->pluck('name', 'id');
        return view('quality-control.edit', compact('qualityControl', 'users'));
    }

    public function update(Request $request, QualityControl $qualityControl)
    {
        $request->validate([
            'report_id' => 'required',
            'inspektor' => 'required',
            'tanggal_pengecekan' => 'required|date',
            'area' => 'required',
            'sub_area' => 'required',
            'eksekutor' => 'required',
            'deskripsi_temuan' => 'required',
            'foto_temuan_sebelum' => 'nullable|image',
            'foto_temuan_sesudah' => 'nullable|image',
            'status' => 'required',
        ]);

        if ($request->hasFile('foto_temuan_sebelum')) {
            $foto_temuan_sebelum = $request->file('foto_temuan_sebelum')->store('images');
            $qualityControl->update(['foto_temuan_sebelum' => $foto_temuan_sebelum]);
        }

        if ($request->hasFile('foto_temuan_sesudah')) {
            $foto_temuan_sesudah = $request->file('foto_temuan_sesudah')->store('images');
            $qualityControl->update(['foto_temuan_sesudah' => $foto_temuan_sesudah]);
        }

        $qualityControl->update($request->except(['foto_temuan_sebelum', 'foto_temuan_sesudah']));

        return redirect()->route('quality-control.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(QualityControl $qualityControl)
    {
        $qualityControl->delete();
        return redirect()->route('quality-control.index')->with('success', 'Data berhasil dihapus');
    }
}
