<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi Keluarga Tunas</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Figtree -->
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Figtree', system-ui, sans-serif;
        }
        .bg-tunas-orange { background-color: #FF7A00; }
    </style>
</head>

<body class="bg-[#F9FAFB]">

<!-- ================= HEADER ================= -->
<header class="bg-white border-b">
    <div class="max-w-6xl mx-auto px-6 md:px-16 h-[72px] flex items-center justify-between">
        <img
            src="{{ asset('storage/img/tg.png') }}"
            alt="Tunas Digital"
            class="h-[42px] w-auto"
        >
        <span class="hidden md:block text-[11px] uppercase tracking-widest font-semibold text-gray-500">
            Kementerian Komunikasi dan Digital RI
        </span>
    </div>
</header>

<!-- ================= SECTION FORM ================= -->
<section class="bg-tunas-orange min-h-screen py-20 px-4 flex justify-center relative overflow-hidden">

    <!-- DOODLE KIRI -->
    <div class="hidden md:block absolute left-0 bottom-0 z-0 pointer-events-none">
        <img
            src="{{ asset('storage/img/doodle_left.png') }}"
            alt="Doodle kiri"
            class="w-[200px] lg:w-[240px] opacity-90"
        >
    </div>

    <!-- DOODLE KANAN -->
    <div class="hidden md:block absolute right-0 bottom-0 z-0 pointer-events-none">
        <img
            src="{{ asset('storage/img/doodle_right.png') }}"
            alt="Doodle kanan"
            class="w-[180px] lg:w-[220px] opacity-90"
        >
    </div>

    <!-- LENGKUNGAN ORNAMEN -->
    <div class="absolute left-[-120px] bottom-[-120px] w-[320px] h-[320px] border-[22px] border-orange-400 rounded-full opacity-30"></div>

    <!-- FORM CONTAINER -->
    <div class="w-full max-w-[750px] relative z-10">

        <!-- CARD HEADER -->
        <div class="bg-white rounded-[20px] px-8 py-6 text-center shadow-lg mb-6">
            <h1 class="text-[30px] md:text-[30px] font-extrabold mb-3">
                Form Registrasi Keluarga Tunas
            </h1>
            <p class="text-[18px] md:text-[18px] leading-relaxed text-gray-600">
                Daftarkan dirimu sebagai Keluarga Tunas dan jadilah bagian dari gerakan
                membangun ruang digital yang aman dan berdaya bagi anak Indonesia.
            </p>
        </div>

        <!-- FORM -->
        <form class="space-y-5">

            <!-- Nama -->
            <div class="bg-white rounded-[16px] px-6 py-5">
                <label class="text-[13px] font-semibold block mb-2">Nama</label>
                <input
                    type="text"
                    placeholder="Tulis nama anda"
                    class="w-full text-[14px] outline-none border-b border-orange-400 focus:border-orange-600 pb-2"
                >
            </div>

            <!-- Jenis Kelamin -->
            <div class="bg-white rounded-[16px] px-6 py-5">
                <label class="text-[13px] font-semibold block mb-3">Jenis Kelamin</label>
                <div class="space-y-2 text-[14px]">
                    <label class="flex items-center gap-2">
                        <input type="radio" name="gender" class="accent-orange-500">
                        Laki-laki
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="radio" name="gender" class="accent-orange-500">
                        Perempuan
                    </label>
                </div>
            </div>

            <!-- Usia -->
            <div class="bg-white rounded-[16px] px-6 py-5">
                <label class="text-[13px] font-semibold block mb-2">Usia</label>
                <input
                    type="number"
                    placeholder="Tulis usia anda"
                    class="w-full text-[14px] outline-none border-b border-orange-400 focus:border-orange-600 pb-2"
                >
            </div>

            <!-- Nomor Telepon -->
            <div class="bg-white rounded-[16px] px-6 py-5">
                <label class="text-[13px] font-semibold block mb-2">Nomor Telepon</label>
                <input
                    type="tel"
                    placeholder="Tulis nomor telepon anda"
                    class="w-full text-[14px] outline-none border-b border-orange-400 focus:border-orange-600 pb-2"
                >
            </div>

            <!-- Provinsi -->
            <div class="bg-white rounded-[16px] px-6 py-5">
                <label class="text-[13px] font-semibold block mb-2">Provinsi</label>
                <select class="w-full text-[14px] outline-none border-b border-orange-400 focus:border-orange-600 pb-2 bg-transparent">
                    <option>Pilih</option>
                </select>
            </div>

            <!-- Kabupaten / Kota -->
            <div class="bg-white rounded-[16px] px-6 py-5">
                <label class="text-[13px] font-semibold block mb-2">Kabupaten / Kota</label>
                <select class="w-full text-[14px] outline-none border-b border-orange-400 focus:border-orange-600 pb-2 bg-transparent">
                    <option>Pilih</option>
                </select>
            </div>
        </form>

        <div class="mt-8">
            <button
                type="submit"
                class="w-full bg-black text-white py-4 rounded-full text-[16px] md:text-[18px] font-extrabold tracking-wide shadow-lg hover:bg-gray-900 transition"
            >
                Daftar sebagai Keluarga Tunas
            </button>
        </div>
    </div>
</section>

<!-- ================= FOOTER ================= -->
<footer class="bg-[#111111] text-white py-6 px-6 md:px-16">
    <div class="text-center text-[10px] text-gray-600 tracking-[0.3em] uppercase">
        © 2025 Kementerian Komunikasi dan Digital Republik Indonesia
    </div>
</footer>

</body>
</html>
