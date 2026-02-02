<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Data source: Wikipedia dan Kepmendagri 2024-2025
     * Total: 416 kabupaten + 98 kota = 514 regencies
     */
    public function run(): void
    {
        $regencies = $this->getAllRegencies();

        // Insert in chunks to avoid memory issues
        foreach (array_chunk($regencies, 100) as $chunk) {
            DB::table('regencies')->insert($chunk);
        }
    }

    private function getAllRegencies(): array
    {
        return array_merge(
            $this->aceh(),              // 18 kab + 5 kota = 23
            $this->sumateraUtara(),     // 25 kab + 8 kota = 33
            $this->sumateraBarat(),     // 12 kab + 7 kota = 19
            $this->riau(),              // 10 kab + 2 kota = 12
            $this->kepulauanRiau(),     // 5 kab + 2 kota = 7
            $this->jambi(),             // 9 kab + 2 kota = 11
            $this->sumateraSelatan(),   // 13 kab + 4 kota = 17
            $this->bengkulu(),          // 9 kab + 1 kota = 10
            $this->lampung(),           // 13 kab + 2 kota = 15
            $this->bangkaBelitung(),    // 6 kab + 1 kota = 7
            $this->dkiJakarta(),        // 1 kab + 5 kota = 6
            $this->banten(),            // 4 kab + 4 kota = 8
            $this->jawaBarat(),         // 18 kab + 9 kota = 27
            $this->jawaTengah(),        // 29 kab + 6 kota = 35
            $this->diYogyakarta(),      // 4 kab + 1 kota = 5
            $this->jawaTimur(),         // 29 kab + 9 kota = 38
            $this->bali(),              // 8 kab + 1 kota = 9
            $this->nusaTenggaraBarat(), // 8 kab + 2 kota = 10
            $this->nusaTenggaraTimur(), // 21 kab + 1 kota = 22
            $this->kalimantanBarat(),   // 12 kab + 2 kota = 14
            $this->kalimantanTengah(),  // 13 kab + 1 kota = 14
            $this->kalimantanSelatan(), // 11 kab + 2 kota = 13
            $this->kalimantanTimur(),   // 7 kab + 3 kota = 10
            $this->kalimantanUtara(),   // 4 kab + 1 kota = 5
            $this->sulawesiUtara(),     // 11 kab + 4 kota = 15
            $this->gorontalo(),         // 5 kab + 1 kota = 6
            $this->sulawesiTengah(),    // 12 kab + 1 kota = 13
            $this->sulawesiBarat(),     // 6 kab + 0 kota = 6
            $this->sulawesiSelatan(),   // 21 kab + 3 kota = 24
            $this->sulawesiTenggara(),  // 15 kab + 2 kota = 17
            $this->maluku(),            // 9 kab + 2 kota = 11
            $this->malukuUtara(),       // 8 kab + 2 kota = 10
            $this->papua(),             // 8 kab + 1 kota = 9
            $this->papuaBarat(),        // 7 kab + 0 kota = 7
            $this->papuaSelatan(),      // 4 kab + 0 kota = 4
            $this->papuaTengah(),       // 8 kab + 0 kota = 8
            $this->papuaPegunungan(),   // 8 kab + 0 kota = 8
            $this->papuaBaratDaya()     // 5 kab + 1 kota = 6
        );
    }

    private function aceh(): array
    {
        return [
            ['id' => 1, 'province_id' => 1, 'name' => 'Kabupaten Aceh Barat'],
            ['id' => 2, 'province_id' => 1, 'name' => 'Kabupaten Aceh Barat Daya'],
            ['id' => 3, 'province_id' => 1, 'name' => 'Kabupaten Aceh Besar'],
            ['id' => 4, 'province_id' => 1, 'name' => 'Kabupaten Aceh Jaya'],
            ['id' => 5, 'province_id' => 1, 'name' => 'Kabupaten Aceh Selatan'],
            ['id' => 6, 'province_id' => 1, 'name' => 'Kabupaten Aceh Singkil'],
            ['id' => 7, 'province_id' => 1, 'name' => 'Kabupaten Aceh Tamiang'],
            ['id' => 8, 'province_id' => 1, 'name' => 'Kabupaten Aceh Tengah'],
            ['id' => 9, 'province_id' => 1, 'name' => 'Kabupaten Aceh Tenggara'],
            ['id' => 10, 'province_id' => 1, 'name' => 'Kabupaten Aceh Timur'],
            ['id' => 11, 'province_id' => 1, 'name' => 'Kabupaten Aceh Utara'],
            ['id' => 12, 'province_id' => 1, 'name' => 'Kabupaten Bener Meriah'],
            ['id' => 13, 'province_id' => 1, 'name' => 'Kabupaten Bireuen'],
            ['id' => 14, 'province_id' => 1, 'name' => 'Kabupaten Gayo Lues'],
            ['id' => 15, 'province_id' => 1, 'name' => 'Kabupaten Nagan Raya'],
            ['id' => 16, 'province_id' => 1, 'name' => 'Kabupaten Pidie'],
            ['id' => 17, 'province_id' => 1, 'name' => 'Kabupaten Pidie Jaya'],
            ['id' => 18, 'province_id' => 1, 'name' => 'Kabupaten Simeulue'],
            ['id' => 19, 'province_id' => 1, 'name' => 'Kota Banda Aceh'],
            ['id' => 20, 'province_id' => 1, 'name' => 'Kota Langsa'],
            ['id' => 21, 'province_id' => 1, 'name' => 'Kota Lhokseumawe'],
            ['id' => 22, 'province_id' => 1, 'name' => 'Kota Sabang'],
            ['id' => 23, 'province_id' => 1, 'name' => 'Kota Subulussalam'],
        ];
    }

    private function sumateraUtara(): array
    {
        return [
            ['id' => 24, 'province_id' => 2, 'name' => 'Kabupaten Asahan'],
            ['id' => 25, 'province_id' => 2, 'name' => 'Kabupaten Batubara'],
            ['id' => 26, 'province_id' => 2, 'name' => 'Kabupaten Dairi'],
            ['id' => 27, 'province_id' => 2, 'name' => 'Kabupaten Deli Serdang'],
            ['id' => 28, 'province_id' => 2, 'name' => 'Kabupaten Humbang Hasundutan'],
            ['id' => 29, 'province_id' => 2, 'name' => 'Kabupaten Karo'],
            ['id' => 30, 'province_id' => 2, 'name' => 'Kabupaten Labuhanbatu'],
            ['id' => 31, 'province_id' => 2, 'name' => 'Kabupaten Labuhanbatu Selatan'],
            ['id' => 32, 'province_id' => 2, 'name' => 'Kabupaten Labuhanbatu Utara'],
            ['id' => 33, 'province_id' => 2, 'name' => 'Kabupaten Langkat'],
            ['id' => 34, 'province_id' => 2, 'name' => 'Kabupaten Mandailing Natal'],
            ['id' => 35, 'province_id' => 2, 'name' => 'Kabupaten Nias'],
            ['id' => 36, 'province_id' => 2, 'name' => 'Kabupaten Nias Barat'],
            ['id' => 37, 'province_id' => 2, 'name' => 'Kabupaten Nias Selatan'],
            ['id' => 38, 'province_id' => 2, 'name' => 'Kabupaten Nias Utara'],
            ['id' => 39, 'province_id' => 2, 'name' => 'Kabupaten Padang Lawas'],
            ['id' => 40, 'province_id' => 2, 'name' => 'Kabupaten Padang Lawas Utara'],
            ['id' => 41, 'province_id' => 2, 'name' => 'Kabupaten Pakpak Bharat'],
            ['id' => 42, 'province_id' => 2, 'name' => 'Kabupaten Samosir'],
            ['id' => 43, 'province_id' => 2, 'name' => 'Kabupaten Serdang Bedagai'],
            ['id' => 44, 'province_id' => 2, 'name' => 'Kabupaten Simalungun'],
            ['id' => 45, 'province_id' => 2, 'name' => 'Kabupaten Tapanuli Selatan'],
            ['id' => 46, 'province_id' => 2, 'name' => 'Kabupaten Tapanuli Tengah'],
            ['id' => 47, 'province_id' => 2, 'name' => 'Kabupaten Tapanuli Utara'],
            ['id' => 48, 'province_id' => 2, 'name' => 'Kabupaten Toba'],
            ['id' => 49, 'province_id' => 2, 'name' => 'Kota Binjai'],
            ['id' => 50, 'province_id' => 2, 'name' => 'Kota Gunungsitoli'],
            ['id' => 51, 'province_id' => 2, 'name' => 'Kota Medan'],
            ['id' => 52, 'province_id' => 2, 'name' => 'Kota Padangsidimpuan'],
            ['id' => 53, 'province_id' => 2, 'name' => 'Kota Pematangsiantar'],
            ['id' => 54, 'province_id' => 2, 'name' => 'Kota Sibolga'],
            ['id' => 55, 'province_id' => 2, 'name' => 'Kota Tanjungbalai'],
            ['id' => 56, 'province_id' => 2, 'name' => 'Kota Tebing Tinggi'],
        ];
    }

    private function sumateraBarat(): array
    {
        return [
            ['id' => 57, 'province_id' => 3, 'name' => 'Kabupaten Agam'],
            ['id' => 58, 'province_id' => 3, 'name' => 'Kabupaten Dharmasraya'],
            ['id' => 59, 'province_id' => 3, 'name' => 'Kabupaten Kepulauan Mentawai'],
            ['id' => 60, 'province_id' => 3, 'name' => 'Kabupaten Lima Puluh Kota'],
            ['id' => 61, 'province_id' => 3, 'name' => 'Kabupaten Padang Pariaman'],
            ['id' => 62, 'province_id' => 3, 'name' => 'Kabupaten Pasaman'],
            ['id' => 63, 'province_id' => 3, 'name' => 'Kabupaten Pasaman Barat'],
            ['id' => 64, 'province_id' => 3, 'name' => 'Kabupaten Pesisir Selatan'],
            ['id' => 65, 'province_id' => 3, 'name' => 'Kabupaten Sijunjung'],
            ['id' => 66, 'province_id' => 3, 'name' => 'Kabupaten Solok'],
            ['id' => 67, 'province_id' => 3, 'name' => 'Kabupaten Solok Selatan'],
            ['id' => 68, 'province_id' => 3, 'name' => 'Kabupaten Tanah Datar'],
            ['id' => 69, 'province_id' => 3, 'name' => 'Kota Bukittinggi'],
            ['id' => 70, 'province_id' => 3, 'name' => 'Kota Padang'],
            ['id' => 71, 'province_id' => 3, 'name' => 'Kota Padang Panjang'],
            ['id' => 72, 'province_id' => 3, 'name' => 'Kota Pariaman'],
            ['id' => 73, 'province_id' => 3, 'name' => 'Kota Payakumbuh'],
            ['id' => 74, 'province_id' => 3, 'name' => 'Kota Sawahlunto'],
            ['id' => 75, 'province_id' => 3, 'name' => 'Kota Solok'],
        ];
    }

    private function riau(): array
    {
        return [
            ['id' => 76, 'province_id' => 4, 'name' => 'Kabupaten Bengkalis'],
            ['id' => 77, 'province_id' => 4, 'name' => 'Kabupaten Indragiri Hilir'],
            ['id' => 78, 'province_id' => 4, 'name' => 'Kabupaten Indragiri Hulu'],
            ['id' => 79, 'province_id' => 4, 'name' => 'Kabupaten Kampar'],
            ['id' => 80, 'province_id' => 4, 'name' => 'Kabupaten Kepulauan Meranti'],
            ['id' => 81, 'province_id' => 4, 'name' => 'Kabupaten Kuantan Singingi'],
            ['id' => 82, 'province_id' => 4, 'name' => 'Kabupaten Pelalawan'],
            ['id' => 83, 'province_id' => 4, 'name' => 'Kabupaten Rokan Hilir'],
            ['id' => 84, 'province_id' => 4, 'name' => 'Kabupaten Rokan Hulu'],
            ['id' => 85, 'province_id' => 4, 'name' => 'Kabupaten Siak'],
            ['id' => 86, 'province_id' => 4, 'name' => 'Kota Dumai'],
            ['id' => 87, 'province_id' => 4, 'name' => 'Kota Pekanbaru'],
        ];
    }

    private function kepulauanRiau(): array
    {
        return [
            ['id' => 88, 'province_id' => 5, 'name' => 'Kabupaten Bintan'],
            ['id' => 89, 'province_id' => 5, 'name' => 'Kabupaten Karimun'],
            ['id' => 90, 'province_id' => 5, 'name' => 'Kabupaten Kepulauan Anambas'],
            ['id' => 91, 'province_id' => 5, 'name' => 'Kabupaten Lingga'],
            ['id' => 92, 'province_id' => 5, 'name' => 'Kabupaten Natuna'],
            ['id' => 93, 'province_id' => 5, 'name' => 'Kota Batam'],
            ['id' => 94, 'province_id' => 5, 'name' => 'Kota Tanjung Pinang'],
        ];
    }

    private function jambi(): array
    {
        return [
            ['id' => 95, 'province_id' => 6, 'name' => 'Kabupaten Batanghari'],
            ['id' => 96, 'province_id' => 6, 'name' => 'Kabupaten Bungo'],
            ['id' => 97, 'province_id' => 6, 'name' => 'Kabupaten Kerinci'],
            ['id' => 98, 'province_id' => 6, 'name' => 'Kabupaten Merangin'],
            ['id' => 99, 'province_id' => 6, 'name' => 'Kabupaten Muaro Jambi'],
            ['id' => 100, 'province_id' => 6, 'name' => 'Kabupaten Sarolangun'],
            ['id' => 101, 'province_id' => 6, 'name' => 'Kabupaten Tanjung Jabung Barat'],
            ['id' => 102, 'province_id' => 6, 'name' => 'Kabupaten Tanjung Jabung Timur'],
            ['id' => 103, 'province_id' => 6, 'name' => 'Kabupaten Tebo'],
            ['id' => 104, 'province_id' => 6, 'name' => 'Kota Jambi'],
            ['id' => 105, 'province_id' => 6, 'name' => 'Kota Sungai Penuh'],
        ];
    }

    private function sumateraSelatan(): array
    {
        return [
            ['id' => 106, 'province_id' => 7, 'name' => 'Kabupaten Banyuasin'],
            ['id' => 107, 'province_id' => 7, 'name' => 'Kabupaten Empat Lawang'],
            ['id' => 108, 'province_id' => 7, 'name' => 'Kabupaten Lahat'],
            ['id' => 109, 'province_id' => 7, 'name' => 'Kabupaten Muara Enim'],
            ['id' => 110, 'province_id' => 7, 'name' => 'Kabupaten Musi Banyuasin'],
            ['id' => 111, 'province_id' => 7, 'name' => 'Kabupaten Musi Rawas'],
            ['id' => 112, 'province_id' => 7, 'name' => 'Kabupaten Musi Rawas Utara'],
            ['id' => 113, 'province_id' => 7, 'name' => 'Kabupaten Ogan Ilir'],
            ['id' => 114, 'province_id' => 7, 'name' => 'Kabupaten Ogan Komering Ilir'],
            ['id' => 115, 'province_id' => 7, 'name' => 'Kabupaten Ogan Komering Ulu'],
            ['id' => 116, 'province_id' => 7, 'name' => 'Kabupaten Ogan Komering Ulu Selatan'],
            ['id' => 117, 'province_id' => 7, 'name' => 'Kabupaten Ogan Komering Ulu Timur'],
            ['id' => 118, 'province_id' => 7, 'name' => 'Kabupaten Penukal Abab Lematang Ilir'],
            ['id' => 119, 'province_id' => 7, 'name' => 'Kota Lubuklinggau'],
            ['id' => 120, 'province_id' => 7, 'name' => 'Kota Pagar Alam'],
            ['id' => 121, 'province_id' => 7, 'name' => 'Kota Palembang'],
            ['id' => 122, 'province_id' => 7, 'name' => 'Kota Prabumulih'],
        ];
    }

    private function bengkulu(): array
    {
        return [
            ['id' => 123, 'province_id' => 8, 'name' => 'Kabupaten Bengkulu Selatan'],
            ['id' => 124, 'province_id' => 8, 'name' => 'Kabupaten Bengkulu Tengah'],
            ['id' => 125, 'province_id' => 8, 'name' => 'Kabupaten Bengkulu Utara'],
            ['id' => 126, 'province_id' => 8, 'name' => 'Kabupaten Kaur'],
            ['id' => 127, 'province_id' => 8, 'name' => 'Kabupaten Kepahiang'],
            ['id' => 128, 'province_id' => 8, 'name' => 'Kabupaten Lebong'],
            ['id' => 129, 'province_id' => 8, 'name' => 'Kabupaten Mukomuko'],
            ['id' => 130, 'province_id' => 8, 'name' => 'Kabupaten Rejang Lebong'],
            ['id' => 131, 'province_id' => 8, 'name' => 'Kabupaten Seluma'],
            ['id' => 132, 'province_id' => 8, 'name' => 'Kota Bengkulu'],
        ];
    }

    private function lampung(): array
    {
        return [
            ['id' => 133, 'province_id' => 9, 'name' => 'Kabupaten Lampung Barat'],
            ['id' => 134, 'province_id' => 9, 'name' => 'Kabupaten Lampung Selatan'],
            ['id' => 135, 'province_id' => 9, 'name' => 'Kabupaten Lampung Tengah'],
            ['id' => 136, 'province_id' => 9, 'name' => 'Kabupaten Lampung Timur'],
            ['id' => 137, 'province_id' => 9, 'name' => 'Kabupaten Lampung Utara'],
            ['id' => 138, 'province_id' => 9, 'name' => 'Kabupaten Mesuji'],
            ['id' => 139, 'province_id' => 9, 'name' => 'Kabupaten Pesawaran'],
            ['id' => 140, 'province_id' => 9, 'name' => 'Kabupaten Pesisir Barat'],
            ['id' => 141, 'province_id' => 9, 'name' => 'Kabupaten Pringsewu'],
            ['id' => 142, 'province_id' => 9, 'name' => 'Kabupaten Tanggamus'],
            ['id' => 143, 'province_id' => 9, 'name' => 'Kabupaten Tulang Bawang'],
            ['id' => 144, 'province_id' => 9, 'name' => 'Kabupaten Tulang Bawang Barat'],
            ['id' => 145, 'province_id' => 9, 'name' => 'Kabupaten Way Kanan'],
            ['id' => 146, 'province_id' => 9, 'name' => 'Kota Bandar Lampung'],
            ['id' => 147, 'province_id' => 9, 'name' => 'Kota Metro'],
        ];
    }

    private function bangkaBelitung(): array
    {
        return [
            ['id' => 148, 'province_id' => 10, 'name' => 'Kabupaten Bangka'],
            ['id' => 149, 'province_id' => 10, 'name' => 'Kabupaten Bangka Barat'],
            ['id' => 150, 'province_id' => 10, 'name' => 'Kabupaten Bangka Selatan'],
            ['id' => 151, 'province_id' => 10, 'name' => 'Kabupaten Bangka Tengah'],
            ['id' => 152, 'province_id' => 10, 'name' => 'Kabupaten Belitung'],
            ['id' => 153, 'province_id' => 10, 'name' => 'Kabupaten Belitung Timur'],
            ['id' => 154, 'province_id' => 10, 'name' => 'Kota Pangkal Pinang'],
        ];
    }

    private function dkiJakarta(): array
    {
        return [
            ['id' => 155, 'province_id' => 11, 'name' => 'Kabupaten Administrasi Kepulauan Seribu'],
            ['id' => 156, 'province_id' => 11, 'name' => 'Kota Administrasi Jakarta Barat'],
            ['id' => 157, 'province_id' => 11, 'name' => 'Kota Administrasi Jakarta Pusat'],
            ['id' => 158, 'province_id' => 11, 'name' => 'Kota Administrasi Jakarta Selatan'],
            ['id' => 159, 'province_id' => 11, 'name' => 'Kota Administrasi Jakarta Timur'],
            ['id' => 160, 'province_id' => 11, 'name' => 'Kota Administrasi Jakarta Utara'],
        ];
    }

    private function banten(): array
    {
        return [
            ['id' => 161, 'province_id' => 12, 'name' => 'Kabupaten Lebak'],
            ['id' => 162, 'province_id' => 12, 'name' => 'Kabupaten Pandeglang'],
            ['id' => 163, 'province_id' => 12, 'name' => 'Kabupaten Serang'],
            ['id' => 164, 'province_id' => 12, 'name' => 'Kabupaten Tangerang'],
            ['id' => 165, 'province_id' => 12, 'name' => 'Kota Cilegon'],
            ['id' => 166, 'province_id' => 12, 'name' => 'Kota Serang'],
            ['id' => 167, 'province_id' => 12, 'name' => 'Kota Tangerang'],
            ['id' => 168, 'province_id' => 12, 'name' => 'Kota Tangerang Selatan'],
        ];
    }

    private function jawaBarat(): array
    {
        return [
            ['id' => 169, 'province_id' => 13, 'name' => 'Kabupaten Bandung'],
            ['id' => 170, 'province_id' => 13, 'name' => 'Kabupaten Bandung Barat'],
            ['id' => 171, 'province_id' => 13, 'name' => 'Kabupaten Bekasi'],
            ['id' => 172, 'province_id' => 13, 'name' => 'Kabupaten Bogor'],
            ['id' => 173, 'province_id' => 13, 'name' => 'Kabupaten Ciamis'],
            ['id' => 174, 'province_id' => 13, 'name' => 'Kabupaten Cianjur'],
            ['id' => 175, 'province_id' => 13, 'name' => 'Kabupaten Cirebon'],
            ['id' => 176, 'province_id' => 13, 'name' => 'Kabupaten Garut'],
            ['id' => 177, 'province_id' => 13, 'name' => 'Kabupaten Indramayu'],
            ['id' => 178, 'province_id' => 13, 'name' => 'Kabupaten Karawang'],
            ['id' => 179, 'province_id' => 13, 'name' => 'Kabupaten Kuningan'],
            ['id' => 180, 'province_id' => 13, 'name' => 'Kabupaten Majalengka'],
            ['id' => 181, 'province_id' => 13, 'name' => 'Kabupaten Pangandaran'],
            ['id' => 182, 'province_id' => 13, 'name' => 'Kabupaten Purwakarta'],
            ['id' => 183, 'province_id' => 13, 'name' => 'Kabupaten Subang'],
            ['id' => 184, 'province_id' => 13, 'name' => 'Kabupaten Sukabumi'],
            ['id' => 185, 'province_id' => 13, 'name' => 'Kabupaten Sumedang'],
            ['id' => 186, 'province_id' => 13, 'name' => 'Kabupaten Tasikmalaya'],
            ['id' => 187, 'province_id' => 13, 'name' => 'Kota Bandung'],
            ['id' => 188, 'province_id' => 13, 'name' => 'Kota Banjar'],
            ['id' => 189, 'province_id' => 13, 'name' => 'Kota Bekasi'],
            ['id' => 190, 'province_id' => 13, 'name' => 'Kota Bogor'],
            ['id' => 191, 'province_id' => 13, 'name' => 'Kota Cimahi'],
            ['id' => 192, 'province_id' => 13, 'name' => 'Kota Cirebon'],
            ['id' => 193, 'province_id' => 13, 'name' => 'Kota Depok'],
            ['id' => 194, 'province_id' => 13, 'name' => 'Kota Sukabumi'],
            ['id' => 195, 'province_id' => 13, 'name' => 'Kota Tasikmalaya'],
        ];
    }

    private function jawaTengah(): array
    {
        return [
            ['id' => 196, 'province_id' => 14, 'name' => 'Kabupaten Banjarnegara'],
            ['id' => 197, 'province_id' => 14, 'name' => 'Kabupaten Banyumas'],
            ['id' => 198, 'province_id' => 14, 'name' => 'Kabupaten Batang'],
            ['id' => 199, 'province_id' => 14, 'name' => 'Kabupaten Blora'],
            ['id' => 200, 'province_id' => 14, 'name' => 'Kabupaten Boyolali'],
            ['id' => 201, 'province_id' => 14, 'name' => 'Kabupaten Brebes'],
            ['id' => 202, 'province_id' => 14, 'name' => 'Kabupaten Cilacap'],
            ['id' => 203, 'province_id' => 14, 'name' => 'Kabupaten Demak'],
            ['id' => 204, 'province_id' => 14, 'name' => 'Kabupaten Grobogan'],
            ['id' => 205, 'province_id' => 14, 'name' => 'Kabupaten Jepara'],
            ['id' => 206, 'province_id' => 14, 'name' => 'Kabupaten Karanganyar'],
            ['id' => 207, 'province_id' => 14, 'name' => 'Kabupaten Kebumen'],
            ['id' => 208, 'province_id' => 14, 'name' => 'Kabupaten Kendal'],
            ['id' => 209, 'province_id' => 14, 'name' => 'Kabupaten Klaten'],
            ['id' => 210, 'province_id' => 14, 'name' => 'Kabupaten Kudus'],
            ['id' => 211, 'province_id' => 14, 'name' => 'Kabupaten Magelang'],
            ['id' => 212, 'province_id' => 14, 'name' => 'Kabupaten Pati'],
            ['id' => 213, 'province_id' => 14, 'name' => 'Kabupaten Pekalongan'],
            ['id' => 214, 'province_id' => 14, 'name' => 'Kabupaten Pemalang'],
            ['id' => 215, 'province_id' => 14, 'name' => 'Kabupaten Purbalingga'],
            ['id' => 216, 'province_id' => 14, 'name' => 'Kabupaten Purworejo'],
            ['id' => 217, 'province_id' => 14, 'name' => 'Kabupaten Rembang'],
            ['id' => 218, 'province_id' => 14, 'name' => 'Kabupaten Semarang'],
            ['id' => 219, 'province_id' => 14, 'name' => 'Kabupaten Sragen'],
            ['id' => 220, 'province_id' => 14, 'name' => 'Kabupaten Sukoharjo'],
            ['id' => 221, 'province_id' => 14, 'name' => 'Kabupaten Tegal'],
            ['id' => 222, 'province_id' => 14, 'name' => 'Kabupaten Temanggung'],
            ['id' => 223, 'province_id' => 14, 'name' => 'Kabupaten Wonogiri'],
            ['id' => 224, 'province_id' => 14, 'name' => 'Kabupaten Wonosobo'],
            ['id' => 225, 'province_id' => 14, 'name' => 'Kota Magelang'],
            ['id' => 226, 'province_id' => 14, 'name' => 'Kota Pekalongan'],
            ['id' => 227, 'province_id' => 14, 'name' => 'Kota Salatiga'],
            ['id' => 228, 'province_id' => 14, 'name' => 'Kota Semarang'],
            ['id' => 229, 'province_id' => 14, 'name' => 'Kota Surakarta'],
            ['id' => 230, 'province_id' => 14, 'name' => 'Kota Tegal'],
        ];
    }

    private function diYogyakarta(): array
    {
        return [
            ['id' => 231, 'province_id' => 15, 'name' => 'Kabupaten Bantul'],
            ['id' => 232, 'province_id' => 15, 'name' => 'Kabupaten Gunungkidul'],
            ['id' => 233, 'province_id' => 15, 'name' => 'Kabupaten Kulon Progo'],
            ['id' => 234, 'province_id' => 15, 'name' => 'Kabupaten Sleman'],
            ['id' => 235, 'province_id' => 15, 'name' => 'Kota Yogyakarta'],
        ];
    }

    private function jawaTimur(): array
    {
        return [
            ['id' => 236, 'province_id' => 16, 'name' => 'Kabupaten Bangkalan'],
            ['id' => 237, 'province_id' => 16, 'name' => 'Kabupaten Banyuwangi'],
            ['id' => 238, 'province_id' => 16, 'name' => 'Kabupaten Blitar'],
            ['id' => 239, 'province_id' => 16, 'name' => 'Kabupaten Bojonegoro'],
            ['id' => 240, 'province_id' => 16, 'name' => 'Kabupaten Bondowoso'],
            ['id' => 241, 'province_id' => 16, 'name' => 'Kabupaten Gresik'],
            ['id' => 242, 'province_id' => 16, 'name' => 'Kabupaten Jember'],
            ['id' => 243, 'province_id' => 16, 'name' => 'Kabupaten Jombang'],
            ['id' => 244, 'province_id' => 16, 'name' => 'Kabupaten Kediri'],
            ['id' => 245, 'province_id' => 16, 'name' => 'Kabupaten Lamongan'],
            ['id' => 246, 'province_id' => 16, 'name' => 'Kabupaten Lumajang'],
            ['id' => 247, 'province_id' => 16, 'name' => 'Kabupaten Madiun'],
            ['id' => 248, 'province_id' => 16, 'name' => 'Kabupaten Magetan'],
            ['id' => 249, 'province_id' => 16, 'name' => 'Kabupaten Malang'],
            ['id' => 250, 'province_id' => 16, 'name' => 'Kabupaten Mojokerto'],
            ['id' => 251, 'province_id' => 16, 'name' => 'Kabupaten Nganjuk'],
            ['id' => 252, 'province_id' => 16, 'name' => 'Kabupaten Ngawi'],
            ['id' => 253, 'province_id' => 16, 'name' => 'Kabupaten Pacitan'],
            ['id' => 254, 'province_id' => 16, 'name' => 'Kabupaten Pamekasan'],
            ['id' => 255, 'province_id' => 16, 'name' => 'Kabupaten Pasuruan'],
            ['id' => 256, 'province_id' => 16, 'name' => 'Kabupaten Ponorogo'],
            ['id' => 257, 'province_id' => 16, 'name' => 'Kabupaten Probolinggo'],
            ['id' => 258, 'province_id' => 16, 'name' => 'Kabupaten Sampang'],
            ['id' => 259, 'province_id' => 16, 'name' => 'Kabupaten Sidoarjo'],
            ['id' => 260, 'province_id' => 16, 'name' => 'Kabupaten Situbondo'],
            ['id' => 261, 'province_id' => 16, 'name' => 'Kabupaten Sumenep'],
            ['id' => 262, 'province_id' => 16, 'name' => 'Kabupaten Trenggalek'],
            ['id' => 263, 'province_id' => 16, 'name' => 'Kabupaten Tuban'],
            ['id' => 264, 'province_id' => 16, 'name' => 'Kabupaten Tulungagung'],
            ['id' => 265, 'province_id' => 16, 'name' => 'Kota Batu'],
            ['id' => 266, 'province_id' => 16, 'name' => 'Kota Blitar'],
            ['id' => 267, 'province_id' => 16, 'name' => 'Kota Kediri'],
            ['id' => 268, 'province_id' => 16, 'name' => 'Kota Madiun'],
            ['id' => 269, 'province_id' => 16, 'name' => 'Kota Malang'],
            ['id' => 270, 'province_id' => 16, 'name' => 'Kota Mojokerto'],
            ['id' => 271, 'province_id' => 16, 'name' => 'Kota Pasuruan'],
            ['id' => 272, 'province_id' => 16, 'name' => 'Kota Probolinggo'],
            ['id' => 273, 'province_id' => 16, 'name' => 'Kota Surabaya'],
        ];
    }

    private function bali(): array
    {
        return [
            ['id' => 274, 'province_id' => 17, 'name' => 'Kabupaten Badung'],
            ['id' => 275, 'province_id' => 17, 'name' => 'Kabupaten Bangli'],
            ['id' => 276, 'province_id' => 17, 'name' => 'Kabupaten Buleleng'],
            ['id' => 277, 'province_id' => 17, 'name' => 'Kabupaten Gianyar'],
            ['id' => 278, 'province_id' => 17, 'name' => 'Kabupaten Jembrana'],
            ['id' => 279, 'province_id' => 17, 'name' => 'Kabupaten Karangasem'],
            ['id' => 280, 'province_id' => 17, 'name' => 'Kabupaten Klungkung'],
            ['id' => 281, 'province_id' => 17, 'name' => 'Kabupaten Tabanan'],
            ['id' => 282, 'province_id' => 17, 'name' => 'Kota Denpasar'],
        ];
    }

    private function nusaTenggaraBarat(): array
    {
        return [
            ['id' => 283, 'province_id' => 18, 'name' => 'Kabupaten Bima'],
            ['id' => 284, 'province_id' => 18, 'name' => 'Kabupaten Dompu'],
            ['id' => 285, 'province_id' => 18, 'name' => 'Kabupaten Lombok Barat'],
            ['id' => 286, 'province_id' => 18, 'name' => 'Kabupaten Lombok Tengah'],
            ['id' => 287, 'province_id' => 18, 'name' => 'Kabupaten Lombok Timur'],
            ['id' => 288, 'province_id' => 18, 'name' => 'Kabupaten Lombok Utara'],
            ['id' => 289, 'province_id' => 18, 'name' => 'Kabupaten Sumbawa'],
            ['id' => 290, 'province_id' => 18, 'name' => 'Kabupaten Sumbawa Barat'],
            ['id' => 291, 'province_id' => 18, 'name' => 'Kota Bima'],
            ['id' => 292, 'province_id' => 18, 'name' => 'Kota Mataram'],
        ];
    }

    private function nusaTenggaraTimur(): array
    {
        return [
            ['id' => 293, 'province_id' => 19, 'name' => 'Kabupaten Alor'],
            ['id' => 294, 'province_id' => 19, 'name' => 'Kabupaten Belu'],
            ['id' => 295, 'province_id' => 19, 'name' => 'Kabupaten Ende'],
            ['id' => 296, 'province_id' => 19, 'name' => 'Kabupaten Flores Timur'],
            ['id' => 297, 'province_id' => 19, 'name' => 'Kabupaten Kupang'],
            ['id' => 298, 'province_id' => 19, 'name' => 'Kabupaten Lembata'],
            ['id' => 299, 'province_id' => 19, 'name' => 'Kabupaten Malaka'],
            ['id' => 300, 'province_id' => 19, 'name' => 'Kabupaten Manggarai'],
            ['id' => 301, 'province_id' => 19, 'name' => 'Kabupaten Manggarai Barat'],
            ['id' => 302, 'province_id' => 19, 'name' => 'Kabupaten Manggarai Timur'],
            ['id' => 303, 'province_id' => 19, 'name' => 'Kabupaten Nagekeo'],
            ['id' => 304, 'province_id' => 19, 'name' => 'Kabupaten Ngada'],
            ['id' => 305, 'province_id' => 19, 'name' => 'Kabupaten Rote Ndao'],
            ['id' => 306, 'province_id' => 19, 'name' => 'Kabupaten Sabu Raijua'],
            ['id' => 307, 'province_id' => 19, 'name' => 'Kabupaten Sikka'],
            ['id' => 308, 'province_id' => 19, 'name' => 'Kabupaten Sumba Barat'],
            ['id' => 309, 'province_id' => 19, 'name' => 'Kabupaten Sumba Barat Daya'],
            ['id' => 310, 'province_id' => 19, 'name' => 'Kabupaten Sumba Tengah'],
            ['id' => 311, 'province_id' => 19, 'name' => 'Kabupaten Sumba Timur'],
            ['id' => 312, 'province_id' => 19, 'name' => 'Kabupaten Timor Tengah Selatan'],
            ['id' => 313, 'province_id' => 19, 'name' => 'Kabupaten Timor Tengah Utara'],
            ['id' => 314, 'province_id' => 19, 'name' => 'Kota Kupang'],
        ];
    }

    private function kalimantanBarat(): array
    {
        return [
            ['id' => 315, 'province_id' => 20, 'name' => 'Kabupaten Bengkayang'],
            ['id' => 316, 'province_id' => 20, 'name' => 'Kabupaten Kapuas Hulu'],
            ['id' => 317, 'province_id' => 20, 'name' => 'Kabupaten Kayong Utara'],
            ['id' => 318, 'province_id' => 20, 'name' => 'Kabupaten Ketapang'],
            ['id' => 319, 'province_id' => 20, 'name' => 'Kabupaten Kubu Raya'],
            ['id' => 320, 'province_id' => 20, 'name' => 'Kabupaten Landak'],
            ['id' => 321, 'province_id' => 20, 'name' => 'Kabupaten Melawi'],
            ['id' => 322, 'province_id' => 20, 'name' => 'Kabupaten Mempawah'],
            ['id' => 323, 'province_id' => 20, 'name' => 'Kabupaten Sambas'],
            ['id' => 324, 'province_id' => 20, 'name' => 'Kabupaten Sanggau'],
            ['id' => 325, 'province_id' => 20, 'name' => 'Kabupaten Sekadau'],
            ['id' => 326, 'province_id' => 20, 'name' => 'Kabupaten Sintang'],
            ['id' => 327, 'province_id' => 20, 'name' => 'Kota Pontianak'],
            ['id' => 328, 'province_id' => 20, 'name' => 'Kota Singkawang'],
        ];
    }

    private function kalimantanTengah(): array
    {
        return [
            ['id' => 329, 'province_id' => 21, 'name' => 'Kabupaten Barito Selatan'],
            ['id' => 330, 'province_id' => 21, 'name' => 'Kabupaten Barito Timur'],
            ['id' => 331, 'province_id' => 21, 'name' => 'Kabupaten Barito Utara'],
            ['id' => 332, 'province_id' => 21, 'name' => 'Kabupaten Gunung Mas'],
            ['id' => 333, 'province_id' => 21, 'name' => 'Kabupaten Kapuas'],
            ['id' => 334, 'province_id' => 21, 'name' => 'Kabupaten Katingan'],
            ['id' => 335, 'province_id' => 21, 'name' => 'Kabupaten Kotawaringin Barat'],
            ['id' => 336, 'province_id' => 21, 'name' => 'Kabupaten Kotawaringin Timur'],
            ['id' => 337, 'province_id' => 21, 'name' => 'Kabupaten Lamandau'],
            ['id' => 338, 'province_id' => 21, 'name' => 'Kabupaten Murung Raya'],
            ['id' => 339, 'province_id' => 21, 'name' => 'Kabupaten Pulang Pisau'],
            ['id' => 340, 'province_id' => 21, 'name' => 'Kabupaten Seruyan'],
            ['id' => 341, 'province_id' => 21, 'name' => 'Kabupaten Sukamara'],
            ['id' => 342, 'province_id' => 21, 'name' => 'Kota Palangka Raya'],
        ];
    }

    private function kalimantanSelatan(): array
    {
        return [
            ['id' => 343, 'province_id' => 22, 'name' => 'Kabupaten Balangan'],
            ['id' => 344, 'province_id' => 22, 'name' => 'Kabupaten Banjar'],
            ['id' => 345, 'province_id' => 22, 'name' => 'Kabupaten Barito Kuala'],
            ['id' => 346, 'province_id' => 22, 'name' => 'Kabupaten Hulu Sungai Selatan'],
            ['id' => 347, 'province_id' => 22, 'name' => 'Kabupaten Hulu Sungai Tengah'],
            ['id' => 348, 'province_id' => 22, 'name' => 'Kabupaten Hulu Sungai Utara'],
            ['id' => 349, 'province_id' => 22, 'name' => 'Kabupaten Kotabaru'],
            ['id' => 350, 'province_id' => 22, 'name' => 'Kabupaten Tabalong'],
            ['id' => 351, 'province_id' => 22, 'name' => 'Kabupaten Tanah Bumbu'],
            ['id' => 352, 'province_id' => 22, 'name' => 'Kabupaten Tanah Laut'],
            ['id' => 353, 'province_id' => 22, 'name' => 'Kabupaten Tapin'],
            ['id' => 354, 'province_id' => 22, 'name' => 'Kota Banjarbaru'],
            ['id' => 355, 'province_id' => 22, 'name' => 'Kota Banjarmasin'],
        ];
    }

    private function kalimantanTimur(): array
    {
        return [
            ['id' => 356, 'province_id' => 23, 'name' => 'Kabupaten Berau'],
            ['id' => 357, 'province_id' => 23, 'name' => 'Kabupaten Kutai Barat'],
            ['id' => 358, 'province_id' => 23, 'name' => 'Kabupaten Kutai Kartanegara'],
            ['id' => 359, 'province_id' => 23, 'name' => 'Kabupaten Kutai Timur'],
            ['id' => 360, 'province_id' => 23, 'name' => 'Kabupaten Mahakam Ulu'],
            ['id' => 361, 'province_id' => 23, 'name' => 'Kabupaten Paser'],
            ['id' => 362, 'province_id' => 23, 'name' => 'Kabupaten Penajam Paser Utara'],
            ['id' => 363, 'province_id' => 23, 'name' => 'Kota Balikpapan'],
            ['id' => 364, 'province_id' => 23, 'name' => 'Kota Bontang'],
            ['id' => 365, 'province_id' => 23, 'name' => 'Kota Samarinda'],
        ];
    }

    private function kalimantanUtara(): array
    {
        return [
            ['id' => 366, 'province_id' => 24, 'name' => 'Kabupaten Bulungan'],
            ['id' => 367, 'province_id' => 24, 'name' => 'Kabupaten Malinau'],
            ['id' => 368, 'province_id' => 24, 'name' => 'Kabupaten Nunukan'],
            ['id' => 369, 'province_id' => 24, 'name' => 'Kabupaten Tana Tidung'],
            ['id' => 370, 'province_id' => 24, 'name' => 'Kota Tarakan'],
        ];
    }

    private function sulawesiUtara(): array
    {
        return [
            ['id' => 371, 'province_id' => 25, 'name' => 'Kabupaten Bolaang Mongondow'],
            ['id' => 372, 'province_id' => 25, 'name' => 'Kabupaten Bolaang Mongondow Selatan'],
            ['id' => 373, 'province_id' => 25, 'name' => 'Kabupaten Bolaang Mongondow Timur'],
            ['id' => 374, 'province_id' => 25, 'name' => 'Kabupaten Bolaang Mongondow Utara'],
            ['id' => 375, 'province_id' => 25, 'name' => 'Kabupaten Kepulauan Sangihe'],
            ['id' => 376, 'province_id' => 25, 'name' => 'Kabupaten Kepulauan Siau Tagulandang Biaro'],
            ['id' => 377, 'province_id' => 25, 'name' => 'Kabupaten Kepulauan Talaud'],
            ['id' => 378, 'province_id' => 25, 'name' => 'Kabupaten Minahasa'],
            ['id' => 379, 'province_id' => 25, 'name' => 'Kabupaten Minahasa Selatan'],
            ['id' => 380, 'province_id' => 25, 'name' => 'Kabupaten Minahasa Tenggara'],
            ['id' => 381, 'province_id' => 25, 'name' => 'Kabupaten Minahasa Utara'],
            ['id' => 382, 'province_id' => 25, 'name' => 'Kota Bitung'],
            ['id' => 383, 'province_id' => 25, 'name' => 'Kota Kotamobagu'],
            ['id' => 384, 'province_id' => 25, 'name' => 'Kota Manado'],
            ['id' => 385, 'province_id' => 25, 'name' => 'Kota Tomohon'],
        ];
    }

    private function gorontalo(): array
    {
        return [
            ['id' => 386, 'province_id' => 26, 'name' => 'Kabupaten Boalemo'],
            ['id' => 387, 'province_id' => 26, 'name' => 'Kabupaten Bone Bolango'],
            ['id' => 388, 'province_id' => 26, 'name' => 'Kabupaten Gorontalo'],
            ['id' => 389, 'province_id' => 26, 'name' => 'Kabupaten Gorontalo Utara'],
            ['id' => 390, 'province_id' => 26, 'name' => 'Kabupaten Pohuwato'],
            ['id' => 391, 'province_id' => 26, 'name' => 'Kota Gorontalo'],
        ];
    }

    private function sulawesiTengah(): array
    {
        return [
            ['id' => 392, 'province_id' => 27, 'name' => 'Kabupaten Banggai'],
            ['id' => 393, 'province_id' => 27, 'name' => 'Kabupaten Banggai Kepulauan'],
            ['id' => 394, 'province_id' => 27, 'name' => 'Kabupaten Banggai Laut'],
            ['id' => 395, 'province_id' => 27, 'name' => 'Kabupaten Buol'],
            ['id' => 396, 'province_id' => 27, 'name' => 'Kabupaten Donggala'],
            ['id' => 397, 'province_id' => 27, 'name' => 'Kabupaten Morowali'],
            ['id' => 398, 'province_id' => 27, 'name' => 'Kabupaten Morowali Utara'],
            ['id' => 399, 'province_id' => 27, 'name' => 'Kabupaten Parigi Moutong'],
            ['id' => 400, 'province_id' => 27, 'name' => 'Kabupaten Poso'],
            ['id' => 401, 'province_id' => 27, 'name' => 'Kabupaten Sigi'],
            ['id' => 402, 'province_id' => 27, 'name' => 'Kabupaten Tojo Una-Una'],
            ['id' => 403, 'province_id' => 27, 'name' => 'Kabupaten Toli-Toli'],
            ['id' => 404, 'province_id' => 27, 'name' => 'Kota Palu'],
        ];
    }

    private function sulawesiBarat(): array
    {
        return [
            ['id' => 405, 'province_id' => 28, 'name' => 'Kabupaten Majene'],
            ['id' => 406, 'province_id' => 28, 'name' => 'Kabupaten Mamasa'],
            ['id' => 407, 'province_id' => 28, 'name' => 'Kabupaten Mamuju'],
            ['id' => 408, 'province_id' => 28, 'name' => 'Kabupaten Mamuju Tengah'],
            ['id' => 409, 'province_id' => 28, 'name' => 'Kabupaten Mamuju Utara'],
            ['id' => 410, 'province_id' => 28, 'name' => 'Kabupaten Polewali Mandar'],
        ];
    }

    private function sulawesiSelatan(): array
    {
        return [
            ['id' => 411, 'province_id' => 29, 'name' => 'Kabupaten Bantaeng'],
            ['id' => 412, 'province_id' => 29, 'name' => 'Kabupaten Barru'],
            ['id' => 413, 'province_id' => 29, 'name' => 'Kabupaten Bone'],
            ['id' => 414, 'province_id' => 29, 'name' => 'Kabupaten Bulukumba'],
            ['id' => 415, 'province_id' => 29, 'name' => 'Kabupaten Enrekang'],
            ['id' => 416, 'province_id' => 29, 'name' => 'Kabupaten Gowa'],
            ['id' => 417, 'province_id' => 29, 'name' => 'Kabupaten Jeneponto'],
            ['id' => 418, 'province_id' => 29, 'name' => 'Kabupaten Kepulauan Selayar'],
            ['id' => 419, 'province_id' => 29, 'name' => 'Kabupaten Luwu'],
            ['id' => 420, 'province_id' => 29, 'name' => 'Kabupaten Luwu Timur'],
            ['id' => 421, 'province_id' => 29, 'name' => 'Kabupaten Luwu Utara'],
            ['id' => 422, 'province_id' => 29, 'name' => 'Kabupaten Maros'],
            ['id' => 423, 'province_id' => 29, 'name' => 'Kabupaten Pangkajene dan Kepulauan'],
            ['id' => 424, 'province_id' => 29, 'name' => 'Kabupaten Pinrang'],
            ['id' => 425, 'province_id' => 29, 'name' => 'Kabupaten Sidenreng Rappang'],
            ['id' => 426, 'province_id' => 29, 'name' => 'Kabupaten Sinjai'],
            ['id' => 427, 'province_id' => 29, 'name' => 'Kabupaten Soppeng'],
            ['id' => 428, 'province_id' => 29, 'name' => 'Kabupaten Takalar'],
            ['id' => 429, 'province_id' => 29, 'name' => 'Kabupaten Tana Toraja'],
            ['id' => 430, 'province_id' => 29, 'name' => 'Kabupaten Toraja Utara'],
            ['id' => 431, 'province_id' => 29, 'name' => 'Kabupaten Wajo'],
            ['id' => 432, 'province_id' => 29, 'name' => 'Kota Makassar'],
            ['id' => 433, 'province_id' => 29, 'name' => 'Kota Palopo'],
            ['id' => 434, 'province_id' => 29, 'name' => 'Kota Parepare'],
        ];
    }

    private function sulawesiTenggara(): array
    {
        return [
            ['id' => 435, 'province_id' => 30, 'name' => 'Kabupaten Bombana'],
            ['id' => 436, 'province_id' => 30, 'name' => 'Kabupaten Buton'],
            ['id' => 437, 'province_id' => 30, 'name' => 'Kabupaten Buton Selatan'],
            ['id' => 438, 'province_id' => 30, 'name' => 'Kabupaten Buton Tengah'],
            ['id' => 439, 'province_id' => 30, 'name' => 'Kabupaten Buton Utara'],
            ['id' => 440, 'province_id' => 30, 'name' => 'Kabupaten Kolaka'],
            ['id' => 441, 'province_id' => 30, 'name' => 'Kabupaten Kolaka Timur'],
            ['id' => 442, 'province_id' => 30, 'name' => 'Kabupaten Kolaka Utara'],
            ['id' => 443, 'province_id' => 30, 'name' => 'Kabupaten Konawe'],
            ['id' => 444, 'province_id' => 30, 'name' => 'Kabupaten Konawe Kepulauan'],
            ['id' => 445, 'province_id' => 30, 'name' => 'Kabupaten Konawe Selatan'],
            ['id' => 446, 'province_id' => 30, 'name' => 'Kabupaten Konawe Utara'],
            ['id' => 447, 'province_id' => 30, 'name' => 'Kabupaten Muna'],
            ['id' => 448, 'province_id' => 30, 'name' => 'Kabupaten Muna Barat'],
            ['id' => 449, 'province_id' => 30, 'name' => 'Kabupaten Wakatobi'],
            ['id' => 450, 'province_id' => 30, 'name' => 'Kota Baubau'],
            ['id' => 451, 'province_id' => 30, 'name' => 'Kota Kendari'],
        ];
    }

    private function maluku(): array
    {
        return [
            ['id' => 452, 'province_id' => 31, 'name' => 'Kabupaten Buru'],
            ['id' => 453, 'province_id' => 31, 'name' => 'Kabupaten Buru Selatan'],
            ['id' => 454, 'province_id' => 31, 'name' => 'Kabupaten Kepulauan Aru'],
            ['id' => 455, 'province_id' => 31, 'name' => 'Kabupaten Maluku Barat Daya'],
            ['id' => 456, 'province_id' => 31, 'name' => 'Kabupaten Maluku Tengah'],
            ['id' => 457, 'province_id' => 31, 'name' => 'Kabupaten Maluku Tenggara'],
            ['id' => 458, 'province_id' => 31, 'name' => 'Kabupaten Maluku Tenggara Barat'],
            ['id' => 459, 'province_id' => 31, 'name' => 'Kabupaten Seram Bagian Barat'],
            ['id' => 460, 'province_id' => 31, 'name' => 'Kabupaten Seram Bagian Timur'],
            ['id' => 461, 'province_id' => 31, 'name' => 'Kota Ambon'],
            ['id' => 462, 'province_id' => 31, 'name' => 'Kota Tual'],
        ];
    }

    private function malukuUtara(): array
    {
        return [
            ['id' => 463, 'province_id' => 32, 'name' => 'Kabupaten Halmahera Barat'],
            ['id' => 464, 'province_id' => 32, 'name' => 'Kabupaten Halmahera Selatan'],
            ['id' => 465, 'province_id' => 32, 'name' => 'Kabupaten Halmahera Tengah'],
            ['id' => 466, 'province_id' => 32, 'name' => 'Kabupaten Halmahera Timur'],
            ['id' => 467, 'province_id' => 32, 'name' => 'Kabupaten Halmahera Utara'],
            ['id' => 468, 'province_id' => 32, 'name' => 'Kabupaten Kepulauan Sula'],
            ['id' => 469, 'province_id' => 32, 'name' => 'Kabupaten Pulau Morotai'],
            ['id' => 470, 'province_id' => 32, 'name' => 'Kabupaten Pulau Taliabu'],
            ['id' => 471, 'province_id' => 32, 'name' => 'Kota Ternate'],
            ['id' => 472, 'province_id' => 32, 'name' => 'Kota Tidore Kepulauan'],
        ];
    }

    private function papua(): array
    {
        return [
            ['id' => 473, 'province_id' => 33, 'name' => 'Kabupaten Biak Numfor'],
            ['id' => 474, 'province_id' => 33, 'name' => 'Kabupaten Kepulauan Yapen'],
            ['id' => 475, 'province_id' => 33, 'name' => 'Kabupaten Nabire'],
            ['id' => 476, 'province_id' => 33, 'name' => 'Kabupaten Paniai'],
            ['id' => 477, 'province_id' => 33, 'name' => 'Kabupaten Supiori'],
            ['id' => 478, 'province_id' => 33, 'name' => 'Kabupaten Waropen'],
            ['id' => 479, 'province_id' => 33, 'name' => 'Kabupaten Sarmi'],
            ['id' => 480, 'province_id' => 33, 'name' => 'Kabupaten Mamberamo Raya'],
            ['id' => 481, 'province_id' => 33, 'name' => 'Kota Jayapura'],
        ];
    }

    private function papuaBarat(): array
    {
        return [
            ['id' => 482, 'province_id' => 34, 'name' => 'Kabupaten Manokwari'],
            ['id' => 483, 'province_id' => 34, 'name' => 'Kabupaten Manokwari Selatan'],
            ['id' => 484, 'province_id' => 34, 'name' => 'Kabupaten Pegunungan Arfak'],
            ['id' => 485, 'province_id' => 34, 'name' => 'Kabupaten Tambrauw'],
            ['id' => 486, 'province_id' => 34, 'name' => 'Kabupaten Teluk Bintuni'],
            ['id' => 487, 'province_id' => 34, 'name' => 'Kabupaten Teluk Wondama'],
            ['id' => 488, 'province_id' => 34, 'name' => 'Kabupaten Maybrat'],
        ];
    }

    private function papuaSelatan(): array
    {
        return [
            ['id' => 489, 'province_id' => 35, 'name' => 'Kabupaten Asmat'],
            ['id' => 490, 'province_id' => 35, 'name' => 'Kabupaten Boven Digoel'],
            ['id' => 491, 'province_id' => 35, 'name' => 'Kabupaten Mappi'],
            ['id' => 492, 'province_id' => 35, 'name' => 'Kabupaten Merauke'],
        ];
    }

    private function papuaTengah(): array
    {
        return [
            ['id' => 493, 'province_id' => 36, 'name' => 'Kabupaten Deiyai'],
            ['id' => 494, 'province_id' => 36, 'name' => 'Kabupaten Dogiyai'],
            ['id' => 495, 'province_id' => 36, 'name' => 'Kabupaten Intan Jaya'],
            ['id' => 496, 'province_id' => 36, 'name' => 'Kabupaten Mimika'],
            ['id' => 497, 'province_id' => 36, 'name' => 'Kabupaten Puncak'],
            ['id' => 498, 'province_id' => 36, 'name' => 'Kabupaten Puncak Jaya'],
            ['id' => 499, 'province_id' => 36, 'name' => 'Kabupaten Nabire'],
            ['id' => 500, 'province_id' => 36, 'name' => 'Kabupaten Paniai'],
        ];
    }

    private function papuaPegunungan(): array
    {
        return [
            ['id' => 501, 'province_id' => 37, 'name' => 'Kabupaten Jayawijaya'],
            ['id' => 502, 'province_id' => 37, 'name' => 'Kabupaten Lanny Jaya'],
            ['id' => 503, 'province_id' => 37, 'name' => 'Kabupaten Mamberamo Tengah'],
            ['id' => 504, 'province_id' => 37, 'name' => 'Kabupaten Nduga'],
            ['id' => 505, 'province_id' => 37, 'name' => 'Kabupaten Pegunungan Bintang'],
            ['id' => 506, 'province_id' => 37, 'name' => 'Kabupaten Tolikara'],
            ['id' => 507, 'province_id' => 37, 'name' => 'Kabupaten Yahukimo'],
            ['id' => 508, 'province_id' => 37, 'name' => 'Kabupaten Yalimo'],
        ];
    }

    private function papuaBaratDaya(): array
    {
        return [
            ['id' => 509, 'province_id' => 38, 'name' => 'Kabupaten Fakfak'],
            ['id' => 510, 'province_id' => 38, 'name' => 'Kabupaten Kaimana'],
            ['id' => 511, 'province_id' => 38, 'name' => 'Kabupaten Raja Ampat'],
            ['id' => 512, 'province_id' => 38, 'name' => 'Kabupaten Sorong'],
            ['id' => 513, 'province_id' => 38, 'name' => 'Kabupaten Sorong Selatan'],
            ['id' => 514, 'province_id' => 38, 'name' => 'Kota Sorong'],
        ];
    }
}