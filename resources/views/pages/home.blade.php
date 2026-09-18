@extends('layouts.app')

@section('title', 'Beranda')
@section('meta_description', 'PT PAMA TOBACCO INDUSTRI — Kualitas tembakau nasional, berakar dari tanah Jawa Tengah. Produsen SKT & SKM dari Ds. Wangandawa, Kabupaten Tegal.')

@section('content')

{{-- ═══════════════════════════════════════════════════════ --}}
{{-- HERO SECTION                                           --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">

    {{-- Background Image --}}
    <div class="absolute inset-0 bg-neutral-charcoal">
        <img
            src="{{ asset('images/hero-bg.jpg') }}"
            alt="Fasilitas produksi PT PAMA TOBACCO INDUSTRI"
            class="w-full h-full object-cover opacity-40 mix-blend-luminosity"
            onerror="this.style.display='none'"
        >
        {{-- Gradient overlay --}}
        <div class="absolute inset-0 bg-hero"></div>
    </div>

    {{-- Decorative element --}}
    <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-white to-transparent z-10"></div>

    {{-- Hero Content --}}
    <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-28 pb-32 text-center">

        <div data-aos="fade-up" data-aos-delay="100">
            <span class="section-tag">Est. Wangandawa, Tegal — Jawa Tengah</span>
        </div>

        <h1 data-aos="fade-up" data-aos-delay="200"
            class="text-4xl md:text-6xl lg:text-7xl font-serif font-bold text-white leading-tight text-shadow mb-6 max-w-5xl mx-auto">
            Kualitas Tembakau<br>
            <span class="text-gold">Nasional,</span> Berakar dari<br>
            Tanah Jawa Tengah
        </h1>

        <p data-aos="fade-up" data-aos-delay="300"
           class="font-accent text-lg md:text-xl text-white/80 max-w-3xl mx-auto mb-10 leading-relaxed italic">
            Menggabungkan keahlian pengrajin lokal Tegal dengan teknologi manufaktur modern —
            menghadirkan produk tembakau berkualitas yang diakui di seluruh penjuru nusantara.
        </p>

        <div data-aos="fade-up" data-aos-delay="400" class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('products') }}" class="btn-gold">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z"/></svg>
                Jelajahi Produk Kami
            </a>
            <a href="{{ route('partnership') }}" class="btn-outline">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Informasi Kemitraan
            </a>
        </div>

        {{-- Scroll indicator --}}
        <div class="absolute bottom-12 left-1/2 -translate-x-1/2 z-20 flex flex-col items-center gap-2 animate-bounce">
            <span class="text-white/40 text-xs tracking-widest uppercase">Scroll</span>
            <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════ --}}
{{-- STATS SECTION                                          --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="bg-primary py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            @foreach([
                ['10+', 'Tahun Pengalaman'],
                ['500+', 'Karyawan Terampil'],
                ['50+', 'Mitra Distribusi'],
                ['100+', 'Kota Jangkauan'],
            ] as [$stat, $label])
            <div data-aos="fade-up" class="flex flex-col items-center">
                <span class="font-serif font-bold text-4xl md:text-5xl text-gold leading-none mb-2">{{ $stat }}</span>
                <span class="text-white/70 text-sm tracking-wide">{{ $label }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════ --}}
{{-- TENTANG KAMI SNIPPET                                   --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Image side --}}
            <div data-aos="fade-right" class="relative">
                <div class="aspect-[4/3] bg-neutral-offwhite rounded-sm overflow-hidden shadow-card">
                    <img src="{{ asset('images/about-factory.jpg') }}" alt="Pabrik PT PAMA TOBACCO INDUSTRI"
                         class="w-full h-full object-cover" onerror="this.parentElement.innerHTML='<div class=\'w-full h-full flex items-center justify-center bg-gradient-to-br from-primary/10 to-gold/10\'><span class=\'font-serif text-primary/30 text-2xl\'>PT PAMA TOBACCO</span></div>'">
                </div>
                {{-- Floating badge --}}
                <div class="absolute -bottom-6 -right-6 bg-primary text-white p-6 shadow-card-hover">
                    <span class="font-serif font-bold text-3xl text-gold block leading-none">10+</span>
                    <span class="text-white/80 text-xs tracking-wide mt-1 block">Tahun<br>Berpengalaman</span>
                </div>
            </div>

            {{-- Content side --}}
            <div data-aos="fade-left">
                <span class="section-tag">Tentang Kami</span>
                <h2 class="section-title mb-4">
                    Produsen Tembakau Lokal dengan<br>Standar <span class="text-primary">Nasional</span>
                </h2>
                <div class="section-divider"></div>
                <p class="text-neutral-slate leading-relaxed mb-5">
                    PT PAMA TOBACCO INDUSTRI berdiri dengan visi menjadi produsen tembakau terdepan di Indonesia. Berlokasi strategis di <strong class="text-neutral-charcoal">Ds. Wangandawa, Kabupaten Tegal, Jawa Tengah</strong> — jantung dari sentra industri rokok Pulau Jawa.
                </p>
                <p class="text-neutral-slate leading-relaxed mb-8">
                    Kami berkomitmen menghadirkan produk berkualitas tinggi yang memenuhi selera konsumen dari Sabang sampai Merauke, dengan tetap menghargai kearifan lokal para pengrajin tembakau Tegal yang telah diwariskan turun-temurun.
                </p>
                <a href="{{ route('about') }}" class="btn-primary">
                    Selengkapnya Tentang Kami
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════ --}}
{{-- KEUNGGULAN / PILAR                                     --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-24 bg-neutral-offwhite">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16" data-aos="fade-up">
            <span class="section-tag">Keunggulan Kami</span>
            <h2 class="section-title">Tiga Pilar Kekuatan Kami</h2>
            <div class="section-divider mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>',
                    'title' => 'Kualitas Terstandar',
                    'desc' => 'Setiap produk melewati proses quality control berlapis, dari seleksi bahan baku tembakau pilihan hingga pengemasan akhir, memastikan konsistensi kualitas di setiap batang.',
                    'delay' => '0',
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>',
                    'title' => 'Teknologi Modern',
                    'desc' => 'Fasilitas produksi kami dilengkapi mesin-mesin terkini yang memungkinkan kapasitas produksi tinggi dengan presisi dan efisiensi optimal di setiap lini produksi.',
                    'delay' => '100',
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>',
                    'title' => 'Jaringan Nasional',
                    'desc' => 'Jaringan distribusi kami yang luas menjangkau lebih dari 100 kota di seluruh Indonesia, didukung oleh tim logistik yang berpengalaman dan sistem manajemen distribusi modern.',
                    'delay' => '200',
                ],
            ] as $pillar)
            <div class="pillar-card" data-aos="fade-up" data-aos-delay="{{ $pillar['delay'] }}">
                <div class="w-14 h-14 bg-primary/10 rounded-sm flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        {!! $pillar['icon'] !!}
                    </svg>
                </div>
                <h3 class="font-serif font-semibold text-xl text-neutral-charcoal mb-3">{{ $pillar['title'] }}</h3>
                <p class="text-neutral-slate text-sm leading-relaxed">{{ $pillar['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════ --}}
{{-- PRODUK PREVIEW                                         --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col md:flex-row md:items-end justify-between mb-14 gap-4" data-aos="fade-up">
            <div>
                <span class="section-tag">Produk Kami</span>
                <h2 class="section-title">Pilihan Produk Unggulan</h2>
                <div class="section-divider"></div>
            </div>
            <a href="{{ route('products') }}" class="btn-primary self-start md:self-auto whitespace-nowrap">
                Lihat Semua Produk
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach([
                ['Sigaret Kretek Tangan', 'SKT', 'Dibuat dengan keahlian tangan para pengrajin berpengalaman, menghadirkan cita rasa khas kretek yang autentik.', 'Premium'],
                ['Sigaret Kretek Mesin', 'SKM', 'Diproduksi dengan teknologi mesin modern untuk konsistensi kualitas dan efisiensi produksi tertinggi.', 'Reguler'],
                ['Sigaret Kretek Mild', 'SKM-Mild', 'Pilihan tepat bagi konsumen modern yang menginginkan pengalaman merokok lebih ringan namun tetap berkualitas.', 'Mild'],
            ] as [$name, $type, $desc, $badge])
            <div class="card overflow-hidden group" data-aos="fade-up">
                <div class="aspect-[3/2] bg-gradient-to-br from-primary/10 via-neutral-offwhite to-gold/10 flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-primary/5 group-hover:bg-primary/10 transition-colors duration-300"></div>
                    <div class="text-center z-10">
                        <span class="font-serif font-bold text-4xl text-primary/30">{{ $type }}</span>
                    </div>
                    <div class="absolute top-4 right-4 bg-gold text-white text-xs font-semibold px-3 py-1 rounded-sm tracking-wide">
                        {{ $badge }}
                    </div>
                </div>
                <div class="p-6">
                    <span class="text-gold text-xs font-semibold tracking-widest uppercase">{{ $type }}</span>
                    <h3 class="font-serif font-semibold text-lg text-neutral-charcoal mt-1 mb-3">{{ $name }}</h3>
                    <p class="text-neutral-slate text-sm leading-relaxed mb-5">{{ $desc }}</p>
                    <a href="{{ route('products') }}" class="text-primary text-sm font-semibold flex items-center gap-2 hover:gap-3 transition-all">
                        Detail Produk
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════ --}}
{{-- CTA KEMITRAAN                                          --}}
{{-- ═══════════════════════════════════════════════════════ --}}
<section class="py-24 bg-primary relative overflow-hidden">
    {{-- decorative circles --}}
    <div class="absolute -top-24 -right-24 w-80 h-80 bg-white/5 rounded-full"></div>
    <div class="absolute -bottom-16 -left-16 w-64 h-64 bg-gold/10 rounded-full"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <span class="section-tag">Bergabung Bersama Kami</span>
        <h2 class="section-title-white mb-5">
            Jadilah Bagian dari Jaringan<br>Distribusi Terpercaya Kami
        </h2>
        <p class="text-white/70 text-base leading-relaxed mb-10 max-w-2xl mx-auto">
            Kami membuka peluang kemitraan strategis bagi distributor, agen, dan sub-agen di seluruh Indonesia. Skema kompetitif dan dukungan penuh dari tim kami.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('partnership') }}" class="btn-gold">
                Pelajari Program Kemitraan
            </a>
            <a href="{{ route('contact') }}" class="btn-outline">
                Hubungi Tim Kami
            </a>
        </div>
    </div>
</section>

@endsection
