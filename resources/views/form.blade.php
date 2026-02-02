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
                <div class="bg-white rounded-[20px] px-8 py-6 text-center shadow-lg mb-6" id='title-header'>
                    <h1 class="text-[30px] md:text-[30px] font-extrabold mb-3">
                        Form Registrasi Keluarga Tunas
                    </h1>
                    <p class="text-[18px] md:text-[18px] leading-relaxed text-gray-600">
                        Daftarkan dirimu sebagai Keluarga Tunas dan jadilah bagian dari gerakan
                        membangun ruang digital yang aman dan berdaya bagi anak Indonesia.
                    </p>
                </div>

                <!-- FORM -->
                <div id="form-wrapper">
                    <form class="space-y-5" id="registerForm" >

                        <!-- Nama -->
                        <div class="bg-white rounded-[16px] px-6 py-5">
                            <label class="text-[13px] font-semibold block mb-2">Nama</label>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                placeholder="Tulis nama anda"
                                class="w-full text-[14px] outline-none border-b border-orange-400 focus:border-orange-600 pb-2"
                            />
                            <p class="text-red-600 text-[12px] mt-1 hidden" id="error-name"></p>
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="bg-white rounded-[16px] px-6 py-5">
                            <label class="text-[13px] font-semibold block mb-3">Jenis Kelamin</label>
                            <div class="space-y-2 text-[14px]">
                                <label class="flex items-center gap-2">
                                    <input type="radio" name="gender" value="L" class="accent-orange-500">
                                    Laki-laki
                                </label>
                                <label class="flex items-center gap-2">
                                    <input type="radio" name="gender" value="P" class="accent-orange-500">
                                    Perempuan
                                </label>
                                <p class="text-red-600 text-[12px] mt-2 hidden" id="error-gender"></p>
                            </div>
                        </div>

                        <!-- Usia -->
                        <div class="bg-white rounded-[16px] px-6 py-5">
                            <label class="text-[13px] font-semibold block mb-2">Usia</label>
                            <input
                                type="number"
                                name="age"
                                id="age"
                                placeholder="Tulis usia anda"
                                class="w-full text-[14px] outline-none border-b border-orange-400 focus:border-orange-600 pb-2"
                            />
                            <p class="text-red-600 text-[12px] mt-1 hidden" id="error-age"></p>
                        </div>

                        <!-- Nomor Telepon -->
                        <div class="bg-white rounded-[16px] px-6 py-5">
                            <label class="text-[13px] font-semibold block mb-2">Nomor Telepon</label>
                            <input
                                type="tel"
                                name="phone"
                                id="phone"
                                placeholder="08xxxxxxxxxx"
                                class="w-full text-[14px] outline-none border-b border-orange-400 focus:border-orange-600 pb-2"
                            />
                            <p class="text-red-600 text-[12px] mt-1 hidden" id="error-phone"></p>
                        </div>

                        <!-- Provinsi -->
                        <div class="bg-white rounded-[16px] px-6 py-5">
                            <label class="text-[13px] font-semibold block mb-2">Provinsi</label>
                            <select class="w-full text-[14px] outline-none border-b border-orange-400 focus:border-orange-600 pb-2 bg-transparent" id='province' name="province">
                                <option>Pilih</option>
                                @foreach($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                            <p class="text-red-600 text-[12px] mt-1 hidden" id="error-province"></p>
                        </div>

                        <!-- Kabupaten / Kota -->
                        <div class="bg-white rounded-[16px] px-6 py-5">
                            <label class="text-[13px] font-semibold block mb-2">Kabupaten / Kota</label>
                            <select id="regency"  class="w-full text-[14px] outline-none border-b border-orange-400 focus:border-orange-600 pb-2 bg-transparent" name='regency'>
                                <option>Pilih</option>
                            </select>
                            <p class="text-red-600 text-[12px] mt-1 hidden" id="error-regency"></p>
                        </div>

                        <div class="mt-8">
                            <button
                            type="submit"
                            class="w-full bg-black text-white py-4 rounded-full text-[16px] md:text-[18px] font-extrabold tracking-wide shadow-lg hover:bg-gray-900 transition"
                            >
                            Daftar sebagai Keluarga Tunas
                        </button>
                    </form>
                </div>
                </div>
                <!-- SUCCESS CARD -->
                <div id="success-card" class="hidden flex justify-center">
                    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-6 text-center">
                        <h2 class="text-2xl font-bold mb-3">Terima Kasih</h2>

                        <p class="text-gray-600 text-sm mb-5">
                            Terima kasih, data Anda berhasil dikirim.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <!-- ================= FOOTER ================= -->
        <footer class="bg-[#111111] text-white py-6 px-6 md:px-16">
            <div class="text-center text-[10px] text-white-600 tracking-[0.3em] uppercase">
                © 2026 Kementerian Komunikasi dan Digital Republik Indonesia
            </div>
        </footer>
        <script>
            document.getElementById('province').addEventListener('change', function() {
                const provinceId = this.value;
                fetch(`/getRegencies/${provinceId}`)
                    .then(response => response.json())
                    .then(data => {
                        const regencySelect = document.querySelector('select[name="regency"]');
                        regencySelect.innerHTML = '<option>Pilih</option>';
                        data.forEach(regency => {
                            const option = document.createElement('option');
                            option.value = regency.id;
                            option.textContent = regency.name;
                            regencySelect.appendChild(option);
                        });
                    });
            });

            const form = document.getElementById('registerForm');

            const nameInput      = document.getElementById('name');
            const ageInput       = document.getElementById('age');
            const phoneInput     = document.getElementById('phone');
            const provinceSelect = document.getElementById('province');
            const regencySelect  = document.getElementById('regency');

            function showError(field, message) {
                const errorEl = document.getElementById(`error-${field}`);
                const inputEl = document.getElementById(field);

                if (errorEl) {
                    errorEl.textContent = message;
                    errorEl.classList.remove('hidden');
                }

                if (inputEl) {
                    inputEl.classList.add('border-red-500');
                }
            }

            function clearError(field) {
                const errorEl = document.getElementById(`error-${field}`);
                const inputEl = document.getElementById(field);

                if (errorEl) {
                    errorEl.textContent = '';
                    errorEl.classList.add('hidden');
                }

                if (inputEl) {
                    inputEl.classList.remove('border-red-500');
                }
            }

            form.addEventListener('submit', async function (e) {
                e.preventDefault();

                // reset semua error
                ['name','gender','age','phone','province','regency'].forEach(clearError);

                const name     = nameInput.value.trim();
                const age      = ageInput.value;
                const phone    = phoneInput.value.trim();
                const province = provinceSelect.value;
                const regency  = regencySelect.value;
                const genderEl = document.querySelector('input[name="gender"]:checked');

                let valid = true;

                // VALIDASI FRONTEND
                if (!name) {
                    showError('name', 'Nama wajib diisi');
                    valid = false;
                }

                if (!genderEl) {
                    document.getElementById('error-gender').textContent = 'Jenis kelamin wajib dipilih';
                    document.getElementById('error-gender').classList.remove('hidden');
                    valid = false;
                }

                if (!age || age < 10 || age > 80) {
                    showError('age', 'Usia harus antara 10 – 80 tahun');
                    valid = false;
                }

                if (!phone) {
                    showError('phone', 'Nomor telepon wajib diisi');
                    valid = false;
                } else if (!/^08[0-9]{8,11}$/.test(phone)) {
                    showError('phone', 'Format nomor telepon tidak valid');
                    valid = false;
                }

                if (!province || province === 'Pilih') {
                    showError('province', 'Provinsi wajib dipilih');
                    valid = false;
                }

                if (!regency || regency === 'Pilih') {
                    showError('regency', 'Kabupaten / Kota wajib dipilih');
                    valid = false;
                }

                if (!valid) return;

                try {
                    const response = await fetch('/store', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            name,
                            gender: genderEl.value,
                            age,
                            phone,
                            province_id: province,
                            regency_id: regency
                        })
                    });

                    // =============================
                    // VALIDASI BACKEND ERROR
                    // =============================
                    if (response.status === 422) {
                        const data = await response.json();
                        Object.keys(data.errors).forEach(field => {
                            const message = data.errors[field][0];

                            if (field === 'province_id') showError('province', message);
                            else if (field === 'regency_id') showError('regency', message);
                            else showError(field, message);
                        });
                        return;
                    }

                    // =============================
                    // SUCCESS (TANPA TERGANTUNG JSON)
                    // =============================
                    if (response.ok) {
                        document.getElementById('form-wrapper').classList.add('hidden');
                        document.getElementById('success-card').classList.remove('hidden');
                        document.getElementById('title-header').classList.add('hidden');

                        setTimeout(() => {
                            window.location.href = '/';
                        }, 3000);
                    }

                } catch (error) {
                    console.error(error);
                }
            });

            function showNotification(type, message) {
                const notif = document.getElementById('form-notification');

                notif.className = 'mb-6 rounded-xl p-4 text-sm font-medium';

                if (type === 'success') {
                    notif.classList.add('bg-green-100', 'text-green-700', 'border', 'border-green-300');
                } else {
                    notif.classList.add('bg-red-100', 'text-red-700', 'border', 'border-red-300');
                }

                notif.textContent = message;
                notif.classList.remove('hidden');

                // auto hide (optional)
                setTimeout(() => {
                    notif.classList.add('hidden');
                }, 5000);
            }
        </script>
    </body>
</html>
