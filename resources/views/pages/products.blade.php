@extends('layouts.app')

@section('title', 'Produk')
@section('meta_description', 'Rangkaian produk rokok PT PAMA TOBACCO INDUSTRI — SKT, SKM, dan Mild dengan kualitas premium dari Tegal, Jawa Tengah.')

@section('content')

{{-- ─── PAGE HEADER ──────────────────────────────────────── --}}
<section class="relative pt-40 pb-24 bg-primary overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-primary-dark via-primary to-primary/80"></div>
    <div class="absolute bottom-0 left-0 right-0 h-16 bg-white" style="clip-path: ellipse(55% 100% at 50% 100%)"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="section-tag" data-aos="fade-up">Portofolio Produk</span>
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-white mt-2" data-aos="fade-up" data-aos-delay="100">
            Produk Kami
        </h1>
        <p class="text-white/70 mt-4 max-w-xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            Rangkaian produk tembakau berkualitas untuk berbagai segmen konsumen di seluruh Indonesia.
        </p>
    </div>
</section>


{{-- ─── DISCLAIMER ───────────────────────────────────────── --}}
<section class="bg-neutral-charcoal py-3">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-white/50 text-xs text-center tracking-wide">
            ⚠ Produk ini mengandung nikotin dan tar yang berbahaya bagi kesehatan. Dilarang dijual kepada anak-anak di bawah 18 tahun.
        </p>
    </div>
</section>


{{-- ─── KATEGORI FILTER ──────────────────────────────────── --}}
@php
$categories = [
    [
        'code' => 'SKT',
        'name' => 'Sigaret Kretek Tangan',
        'desc' => 'Rokok kretek yang dilinting secara manual oleh para pengrajin berpengalaman, menghadirkan cita rasa autentik yang khas.',
        'color' => '#7B1C2E',
        'products' => [
            ['PAMA Kretek Classic', 'Cita rasa kretek autentik dengan blending tembakau pilihan Jawa Tengah. Nikmati pengalaman merokok tradisional yang sesungguhnya.', 'Full Flavor', '12 batang / pak'],
            ['PAMA Kretek Merah', 'Varian premium dengan tembakau grade A dan rempah pilihan. Kekuatan rasa yang khas dengan aroma yang kaya dan tahan lama.', 'Premium', '12 batang / pak'],
            ['PAMA Kretek Spesial', 'Edisi spesial dengan komposisi blend eksklusif untuk konsumen yang menghargai kelezatan rokok kretek berkualitas tinggi.', 'Super Premium', '12 batang / pak'],
        ],
    ],
    [
        'code' => 'SKM',
        'name' => 'Sigaret Kretek Mesin',
        'desc' => 'Diproduksi dengan teknologi mesin modern untuk konsistensi kualitas sempurna di setiap batang.',
        'color' => '#C9A84C',
        'products' => [
            ['PAMA Mesin Filter', 'SKM dengan filter modern, menghadirkan cita rasa kretek yang familiar dengan sentuhan teknologi produksi terkini.', 'Reguler', '16 batang / pak'],
            ['PAMA Mild Blue', 'Pilihan tepat untuk konsumen modern. Karakter rasa yang lebih ringan namun tetap mempertahankan nuansa kretek yang khas.', 'Mild', '16 batang / pak'],
            ['PAMA Mild Green', 'Varian mild dengan sensasi segar, cocok untuk konsumen aktif yang menginginkan pilihan lebih ringan dan modern.', 'Extra Mild', '16 batang / pak'],
        ],
    ],
];
@endphp

@foreach($categories as $cat)
<section class="py-20 {{ $loop->even ? 'bg-neutral-offwhite' : 'bg-white' }}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Category Header --}}
        <div class="flex flex-col md:flex-row md:items-end gap-6 mb-12" data-aos="fade-up">
            <div class="flex-1">
                <div class="flex items-center gap-3 mb-2">
                    <span class="px-3 py-1 text-xs font-bold tracking-widest uppercase rounded-sm text-white"
                          style="background-color: {{ $cat['color'] }}">{{ $cat['code'] }}</span>
                </div>
                <h2 class="section-title">{{ $cat['name'] }}</h2>
                <div class="section-divider"></div>
                <p class="text-neutral-slate max-w-xl">{{ $cat['desc'] }}</p>
            </div>
        </div>

        {{-- Product Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($cat['products'] as $i => $product)
            <div class="card overflow-hidden group" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                {{-- Product visual --}}
                <div class="aspect-[4/3] flex items-center justify-center relative overflow-hidden"
                     style="background: linear-gradient(135deg, {{ $cat['color'] }}15, {{ $cat['color'] }}05)">
                    <div class="absolute inset-0 group-hover:opacity-80 transition-opacity"
                         style="background: {{ $cat['color'] }}08"></div>
                    <div class="text-center z-10 p-6">
                        <span class="font-serif font-bold text-5xl leading-none"
                              style="color: {{ $cat['color'] }}30">{{ $cat['code'] }}</span>
                        <p class="font-serif font-semibold mt-2" style="color: {{ $cat['color'] }}60">{{ $product[0] }}</p>
                    </div>
                    <div class="absolute top-4 right-4 text-xs font-semibold px-3 py-1 rounded-sm text-white tracking-wide"
                         style="background-color: {{ $cat['color'] }}">{{ $product[2] }}</div>
                </div>

                {{-- Product info --}}
                <div class="p-6">
                    <h3 class="font-serif font-semibold text-lg text-neutral-charcoal mb-2">{{ $product[0] }}</h3>
                    <p class="text-neutral-slate text-sm leading-relaxed mb-4">{{ $product[1] }}</p>
                    <div class="flex items-center justify-between pt-4 border-t border-neutral-offwhite">
                        <span class="text-xs text-neutral-slate">{{ $product[3] }}</span>
                        <a href="{{ route('contact') }}"
                           class="text-sm font-semibold flex items-center gap-1 transition-all hover:gap-2"
                           style="color: {{ $cat['color'] }}">
                            Inquiry
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endforeach


{{-- ─── CTA ──────────────────────────────────────────────── --}}
<section class="py-16 bg-neutral-charcoal">
    <div class="max-w-4xl mx-auto px-4 text-center" data-aos="fade-up">
        <h3 class="font-serif font-bold text-2xl text-white mb-4">
            Tertarik Mendistribusikan Produk Kami?
        </h3>
        <p class="text-white/60 mb-8">Hubungi tim kemitraan kami untuk informasi lengkap mengenai harga distributor dan program kerjasama.</p>
        <a href="{{ route('partnership') }}" class="btn-gold">Pelajari Program Kemitraan</a>
    </div>
</section>

@endsection
