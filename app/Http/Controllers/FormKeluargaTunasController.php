<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Agent;
use Illuminate\Support\Facades\Validator;

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
            $validator = Validator::make(
                $request->all(),
                [
                    'name'        => 'required|string|min:3|max:100',
                    'gender'      => 'required|in:L,P',
                    'age'         => 'required|integer|min:10|max:80',
                    'email'       => 'required|email|unique:agents,email',
                    'province_id' => 'required|exists:provinces,id',
                    'regency_id'  => 'required|exists:regencies,id',
                ],
                [
                    // NAME
                    'name.required' => 'Nama wajib diisi',
                    'name.string'   => 'Nama harus berupa teks',
                    'name.min'      => 'Nama minimal 3 karakter',
                    'name.max'      => 'Nama maksimal 100 karakter',

                    // GENDER
                    'gender.required' => 'Jenis kelamin wajib dipilih',
                    'gender.in'       => 'Jenis kelamin tidak valid',

                    // AGE
                    'age.required' => 'Usia wajib diisi',
                    'age.integer'  => 'Usia harus berupa angka',
                    'age.min'      => 'Usia minimal 10 tahun',
                    'age.max'      => 'Usia maksimal 80 tahun',

                    // EMAIL
                    'email.required' => 'Email wajib diisi',
                    'email.email'    => 'Format email tidak valid',
                    'email.unique'   => 'Email sudah terdaftar',

                    // PROVINCE
                    'province_id.required' => 'Provinsi wajib dipilih',
                    'province_id.exists'   => 'Provinsi tidak ditemukan',

                    // REGENCY
                    'regency_id.required' => 'Kabupaten / Kota wajib dipilih',
                    'regency_id.exists'   => 'Kabupaten / Kota tidak ditemukan',
                ]
            );

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validasi gagal',
                    'errors'  => $validator->errors(),
                ], 422);
            }

            Agent::create([
                'nama'          => $request->name,
                'jenis_kelamin' => $request->gender,
                'usia'          => $request->age,
                'email'         => $request->email,
                'province_id'   => $request->province_id,
                'regency_id'    => $request->regency_id,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Pendaftaran berhasil'
            ], 200);

        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan server',
                // aktifkan saat debug
                // 'error' => $e->getMessage()
            ], 500);
        }
    }
}
