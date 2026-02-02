@php
    $agents = collect($data)->keyBy('id');

    $sumatra     = $agents[1]->total_agents ?? 0;
    $jawa        = $agents[2]->total_agents ?? 0;
    $kalimantan  = $agents[3]->total_agents ?? 0;
    $sulawesi    = $agents[4]->total_agents ?? 0;
    $baliNusa    = $agents[5]->total_agents ?? 0;
    $malukuPapua = ($agents[6]->total_agents ?? 0) + ($agents[7]->total_agents ?? 0);
@endphp

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keluarga Tunas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Figtree', system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
        }
        .bg-tunas-yellow { background-color: #FFD23F; }
        .bg-tunas-orange { background-color: #FF7A00; }
        .bg-tunas-purple { background-color: #6B46C1; }
        .text-tunas-orange { color: #FF7A00; }

        .hero-card { border-radius: 48px; }
        .counter-box {
            background-color: #6B46C1;
            padding: 16px 28px;          /* ⬆ lebih besar */
            border-radius: 20px;         /* ⬆ lebih lembut */
            text-align: center;
            color: white;
            min-width: 350px;            /* ⬆ sebelumnya 160px */
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        }
        /* SVG Map Styling */
        .island { fill: #FFD23F; stroke: #E06B00; stroke-width: 0.5; }
        .connector-line { stroke: #000; stroke-width: 1; opacity: 0.3; fill: none; }
    </style>
</head>
<body class="bg-[#F9FAFB]">
    <header class="bg-white border-b">
        <div class="max-w-6xl mx-auto px-6 md:px-16 h-[72px] flex items-center justify-between">

            <!-- Logo -->
            <div class="flex items-center">
                <img
                    src="{{ asset('storage/img/tg.png') }}"
                    alt="Tunas Digital"
                    class="h-[40px] w-auto"
                >
            </div>

            <!-- Optional Right Space (biar header terasa penuh & seimbang) -->
            <div class="hidden md:flex items-center space-x-6">
                <span class="text-[11px] uppercase tracking-widest font-semibold text-gray-500">
                    Kementerian Komunikasi dan Digital RI
                </span>
            </div>

        </div>
    </header>


    <section class="relative">

        <!-- Background atas (kuning + ilustrasi) -->
        <img
            src="{{ asset('storage/img/path1.png') }}"
            alt=""
            class="w-full h-auto block"
        >

        <!-- Background bawah (oranye) -->
        <div class="bg-tunas-orange h-[180px]"></div>

        <!-- Card putih -->
        <div class="absolute inset-0 flex justify-center items-start
            pt-[90px] md:pt-[140px] lg:pt-[180px]
            px-4 md:px-6" style='z-index:1000;'>
            <div class="max-w-3xl w-full bg-white rounded-[32px] p-10 md:p-14 text-center shadow-xl">
                <h1 class="text-3xl md:text-4xl font-[800] mb-4 text-black">
                    Keluarga Tunas
                </h1>

                <p class="text-[#444] text-sm md:text-base leading-relaxed mb-8 max-w-2xl mx-auto">
                    Dengan menjadi Keluarga Tunas, peserta yang terdaftar akan mendapatkan akses
                    konten eksklusif seputar perlindungan anak di ruang digital, perkembangan
                    penerapan PP Tunas, dan konten Tunas Digital menarik lainnya.
                </p>

                <a href='{{ route("agen_tunas") }}' class="bg-black text-white px-8 py-3 rounded-full font-bold text-sm">
                    Daftar sebagai Keluarga Tunas
                </a>
            </div>
        </div>

    </section>

    <section class="bg-tunas-orange py-20 px-6 relative">
        <h2 class="text-3xl md:text-4xl font-[800] text-white text-center mb-16 tracking-tight">Peta Persebaran Keluarga Tunas</h2>

        <div class="max-w-6xl mx-auto">
            <div class="flex flex-wrap justify-center gap-4 mb-10">
                <div class="counter-box">
                    <div class="text-2xl font-bold counter" data-target="{{ $sumatra }}">0</div>
                    <div class="text-[10px] uppercase font-bold tracking-[0.15em] opacity-80">Sumatra</div>
                </div>

                <div class="counter-box">
                    <div class="text-2xl font-bold counter" data-target="{{ $kalimantan }}">0</div>
                    <div class="text-[10px] uppercase font-bold tracking-[0.15em] opacity-80">Kalimantan</div>
                </div>

                <div class="counter-box">
                    <div class="text-2xl font-bold counter" data-target="{{ $malukuPapua }}">0</div>
                    <div class="text-[10px] uppercase font-bold tracking-[0.15em] opacity-80">Maluku & Papua</div>
                </div>
            </div>

            <div class="relative w-full flex justify-center py-6">
                <img src='{{ asset("storage/img/path43.png") }}'/>
            </div>

            <div class="flex flex-wrap justify-center gap-4 mt-10">
                <div class="counter-box">
                    <div class="text-2xl font-bold counter" data-target="{{ $jawa }}">0</div>
                    <div class="text-[10px] uppercase font-bold tracking-[0.15em] opacity-80">Jawa</div>
                </div>

                <div class="counter-box">
                    <div class="text-2xl font-bold counter" data-target="{{ $baliNusa }}">0</div>
                    <div class="text-[10px] uppercase font-bold tracking-[0.15em] opacity-80">Bali & Nusa Tenggara</div>
                </div>

                <div class="counter-box">
                    <div class="text-2xl font-bold counter" data-target="   {{ $sulawesi }}">0</div>
                    <div class="text-[10px] uppercase font-bold tracking-[0.15em] opacity-80">Sulawesi</div>
                </div>
            </div>
        </div>

        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 mt-24">

            <div class="bg-white rounded-[24px] p-10 shadow-lg">
                <p class="text-tunas-orange font-bold text-[11px] uppercase tracking-widest mb-3 leading-tight">
                    Keluarga Tunas Terdaftar
                </p>
                <p class="text-[64px] font-[900] leading-none tracking-tighter counter"
                data-target="{{ $totalAgents }}">0</p>
            </div>

            <div class="bg-white rounded-[24px] p-10 shadow-lg">
                <p class="text-tunas-orange font-bold text-[11px] uppercase tracking-widest mb-3">
                    Provinsi
                </p>
                <p class="text-[64px] font-[900] leading-none tracking-tighter counter"
                data-target="{{ $provincesWithAgents }}">0</p>
            </div>

            <div class="bg-white rounded-[24px] p-10 shadow-lg">
                <p class="text-tunas-orange font-bold text-[11px] uppercase tracking-widest mb-3 leading-tight">
                    Kabupaten & Kota
                </p>
                <p class="text-[64px] font-[900] leading-none tracking-tighter counter"
                data-target="{{ $regenciesWithAgents }}">0</p>
            </div>

        </div>

    </section>

        <footer class="bg-[#111111] text-white py-6 px-6 md:px-16">
            <div class="text-center text-[10px] text-white-600 tracking-[0.3em] uppercase">
                © 2026 Kementerian Komunikasi dan Digital Republik Indonesia
            </div>
        </footer>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");

    const animateCounter = (counter) => {
        const target = +counter.dataset.target;
        const duration = 1500;
        const startTime = performance.now();

        function update(currentTime) {
            const progress = Math.min((currentTime - startTime) / duration, 1);
            const value = Math.floor(progress * target);
            counter.innerText = value.toLocaleString("id-ID");

            if (progress < 1) {
                requestAnimationFrame(update);
            }
        }

        requestAnimationFrame(update);
    };

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
});
</script>

</body>
</html>