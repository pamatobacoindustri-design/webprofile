@extends('layouts.app')

@section('title', 'Tentang Kami')
@section('meta_description', 'Pelajari sejarah, visi, misi, dan nilai-nilai PT PAMA TOBACCO INDUSTRI — produsen tembakau nasional dari Ds. Wangandawa, Kabupaten Tegal.')

@section('content')

{{-- ─── PAGE HEADER ──────────────────────────────────────── --}}
<section class="relative pt-40 pb-24 bg-primary overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-primary-dark via-primary to-primary/80"></div>
    <div class="absolute bottom-0 left-0 right-0 h-16 bg-white" style="clip-path: ellipse(55% 100% at 50% 100%)"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="section-tag" data-aos="fade-up">Profil Perusahaan</span>
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-white mt-2" data-aos="fade-up" data-aos-delay="100">
            Tentang Kami
        </h1>
        <p class="text-white/70 mt-4 max-w-xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            Mengenal lebih dalam PT PAMA TOBACCO INDUSTRI — perjalanan, nilai, dan komitmen kami.
        </p>
    </div>
</section>


{{-- ─── PROFIL & SEJARAH ─────────────────────────────────── --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <span class="section-tag">Sejarah Perusahaan</span>
                <h2 class="section-title mb-4">Dari Tegal untuk <span class="text-primary">Indonesia</span></h2>
                <div class="section-divider"></div>
                <p class="text-neutral-slate leading-relaxed mb-5">
                    PT PAMA TOBACCO INDUSTRI lahir dari tekad kuat untuk membawa kualitas industri tembakau lokal ke panggung nasional. Berdiri di Ds. Wangandawa, Kabupaten Tegal, Jawa Tengah — sebuah wilayah yang secara historis telah menjadi bagian integral dari ekosistem industri rokok Indonesia.
                </p>
                <p class="text-neutral-slate leading-relaxed mb-5">
                    Dimulai dengan skala produksi yang terbatas namun berkomitmen tinggi pada kualitas, perusahaan kami tumbuh secara konsisten setiap tahunnya. Kami menggabungkan keahlian tradisional para pengrajin tembakau lokal yang telah diwariskan turun-temurun dengan investasi berkelanjutan pada teknologi produksi modern.
                </p>
                <p class="text-neutral-slate leading-relaxed">
                    Hari ini, PT PAMA TOBACCO INDUSTRI telah berkembang menjadi salah satu produsen rokok yang disegani, dengan jaringan distribusi yang menjangkau ratusan kota di seluruh Indonesia.
                </p>
            </div>
            <div data-aos="fade-left">
                {{-- Timeline --}}
                <div class="relative pl-8 border-l-2 border-gold/30 space-y-10">
                    @foreach([
                        ['Pendirian Perusahaan', 'PT PAMA TOBACCO INDUSTRI resmi berdiri di Ds. Wangandawa, Kab. Tegal dengan lini produksi SKT pertama.', '20XX'],
                        ['Ekspansi Produksi', 'Penambahan lini produksi SKM dan peningkatan kapasitas fasilitas manufaktur secara signifikan.', '20XX'],
                        ['Jangkauan Nasional', 'Jaringan distribusi berhasil diperluas mencakup lebih dari 50 kota di Jawa, Sumatera, dan Kalimantan.', '20XX'],
                        ['Modernisasi Fasilitas', 'Investasi besar pada mesin produksi generasi terbaru dan sistem quality control terintegrasi.', '20XX'],
                        ['100+ Kota Distribusi', 'Milestone distribusi nasional — produk PT PAMA kini hadir di lebih dari 100 kota di Indonesia.', '20XX'],
                    ] as [$title, $desc, $year])
                    <div class="relative">
                        <div class="absolute -left-10 top-1 w-4 h-4 bg-gold rounded-full border-2 border-white shadow-md"></div>
                        <span class="text-gold text-xs font-semibold tracking-widest uppercase">{{ $year }}</span>
                        <h4 class="font-serif font-semibold text-neutral-charcoal mt-1 mb-1">{{ $title }}</h4>
                        <p class="text-neutral-slate text-sm leading-relaxed">{{ $desc }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ─── VISI & MISI ──────────────────────────────────────── --}}
<section class="py-24 bg-neutral-offwhite">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16" data-aos="fade-up">
            <span class="section-tag">Arah & Tujuan</span>
            <h2 class="section-title">Visi & Misi Perusahaan</h2>
            <div class="section-divider mx-auto"></div>
        </div>

        {{-- Visi --}}
        <div class="bg-primary rounded-sm p-10 md:p-14 mb-8 relative overflow-hidden" data-aos="fade-up">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -translate-y-32 translate-x-32"></div>
            <div class="relative z-10 flex flex-col md:flex-row gap-8 items-start">
                <div class="flex-shrink-0 w-16 h-16 bg-gold/20 rounded-sm flex items-center justify-center">
                    <svg class="w-8 h-8 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-serif font-bold text-2xl text-gold mb-4">Visi</h3>
                    <p class="font-accent text-xl text-white/90 italic leading-relaxed">
                        "Menjadi perusahaan manufaktur rokok nasional yang unggul, terpercaya, dan memberikan nilai tambah bagi seluruh pemangku kepentingan melalui inovasi berkelanjutan dan standar kualitas tertinggi."
                    </p>
                </div>
            </div>
        </div>

        {{-- Misi --}}
        <div class="card p-10 md:p-14" data-aos="fade-up" data-aos-delay="100">
            <div class="flex flex-col md:flex-row gap-8 items-start">
                <div class="flex-shrink-0 w-16 h-16 bg-primary/10 rounded-sm flex items-center justify-center">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-serif font-bold text-2xl text-primary mb-6">Misi</h3>
                    <ul class="space-y-4">
                        @foreach([
                            'Memproduksi rokok berkualitas premium dengan bahan baku tembakau pilihan dari petani lokal Jawa Tengah.',
                            'Mengembangkan kapasitas produksi secara berkelanjutan dengan mengadopsi teknologi manufaktur terkini.',
                            'Membangun ekosistem distribusi yang kuat dan merata di seluruh wilayah Indonesia.',
                            'Menciptakan lingkungan kerja yang profesional, aman, dan mensejahterakan bagi seluruh karyawan.',
                            'Menjadi mitra bisnis yang andal dan transparan bagi seluruh distributor dan mitra kami.',
                        ] as $i => $misi)
                        <li class="flex gap-4 items-start">
                            <span class="flex-shrink-0 w-7 h-7 bg-primary text-white text-xs font-bold rounded-sm flex items-center justify-center mt-0.5">{{ $i + 1 }}</span>
                            <p class="text-neutral-slate leading-relaxed">{{ $misi }}</p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ─── NILAI PERUSAHAAN ─────────────────────────────────── --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="section-tag">Pondasi Kami</span>
            <h2 class="section-title">Nilai-Nilai Perusahaan</h2>
            <div class="section-divider mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['Kualitas', 'Standar produksi ketat di setiap lini — dari pemilihan tembakau hingga kemasan akhir.', '#7B1C2E', 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z'],
                ['Integritas', 'Bisnis yang dijalankan dengan kejujuran, transparansi, dan tanggung jawab penuh kepada semua pihak.', '#C9A84C', 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                ['Inovasi', 'Terus beradaptasi dengan tren industri dan kebutuhan pasar yang berkembang dengan solusi kreatif.', '#7B1C2E', 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z'],
                ['Kemitraan', 'Membangun hubungan jangka panjang yang saling menguntungkan bersama seluruh mitra dan pemangku kepentingan.', '#C9A84C', 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z'],
            ] as $i => [$title, $desc, $color, $path])
            <div class="pillar-card text-center" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <div class="w-16 h-16 rounded-full mx-auto flex items-center justify-center mb-5" style="background-color: {{ $color }}20">
                    <svg class="w-8 h-8" fill="none" stroke="{{ $color }}" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $path }}"/>
                    </svg>
                </div>
                <h3 class="font-serif font-semibold text-xl text-neutral-charcoal mb-3">{{ $title }}</h3>
                <p class="text-neutral-slate text-sm leading-relaxed">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
