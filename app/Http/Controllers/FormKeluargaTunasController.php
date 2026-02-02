<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Agent;

class FormKeluargaTunasController extends Controller
{
    public function index()
    {
        $provinces = DB::table('provinces')->get();
        return view('form',compact('provinces'));
    }

    public function home()
    {
        $data = DB::table('islands')
            ->leftJoin('provinces', 'provinces.island_id', '=', 'islands.id')
            ->leftJoin('agents', 'agents.province_id', '=', 'provinces.id')
            ->select(
                'islands.id',
                'islands.name as island_name',
                DB::raw('COUNT(agents.id) as total_agents')
            )
        ->groupBy('islands.id', 'islands.name')
        ->get();

         // ===============================
        // TOTAL AGENT
        // ===============================
        $totalAgents = DB::table('agents')->count();

        // ===============================
        // JUMLAH PROVINSI YANG ADA AGENT
        // ===============================
        $provincesWithAgents = DB::table('agents')
            ->whereNotNull('province_id')
            ->distinct('province_id')
            ->count('province_id');

        // ===============================
        // JUMLAH KABUPATEN / KOTA
        // YANG ADA AGENT
        // ===============================
        $regenciesWithAgents = DB::table('agents')
            ->whereNotNull('regency_id')
            ->distinct('regency_id')
            ->count('regency_id');

        return view('home', compact('data', 'totalAgents', 'provincesWithAgents', 'regenciesWithAgents'));
    }

    public function regencies($provinceId)
    {
        $regencies = DB::table('regencies')->where('province_id', $provinceId)->get();
        return response()->json($regencies);
    }

    public function store(Request $request)
    {
        try {
            // VALIDASI
            $validated = $request->validate([
                'name'        => 'required|string|min:3|max:100',
                'gender'      => 'required|in:L,P',
                'age'         => 'required|integer|min:10|max:80',
                'phone'       => 'required|regex:/^08[0-9]{8,11}$/',
                'province_id' => 'required|exists:provinces,id',
                'regency_id'  => 'required|exists:regencies,id',
            ]);

            // SIMPAN DATA
            Agent::create([
                'nama'          => $validated['name'],
                'jenis_kelamin' => $validated['gender'],
                'usia'          => $validated['age'],
                'nomor_telepon' => $validated['phone'],
                'province_id'   => $validated['province_id'],
                'regency_id'    => $validated['regency_id'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Pendaftaran berhasil'
            ], 200);

        } catch (ValidationException $e) {
            // ERROR VALIDASI (422)
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors'  => $e->errors()
            ], 422);
        } catch (\Throwable $e) {
            // ERROR SERVER
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan server'
            ], 500);
        }
    }
}
