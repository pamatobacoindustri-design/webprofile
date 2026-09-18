@extends('layouts.app')

@section('title', 'Kemitraan & Distribusi')
@section('meta_description', 'Program kemitraan dan distribusi PT PAMA TOBACCO INDUSTRI — bergabunglah sebagai distributor atau agen resmi di seluruh Indonesia.')

@section('content')

{{-- ─── PAGE HEADER ──────────────────────────────────────── --}}
<section class="relative pt-40 pb-24 bg-primary overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-primary-dark via-primary to-primary/80"></div>
    <div class="absolute bottom-0 left-0 right-0 h-16 bg-white" style="clip-path: ellipse(55% 100% at 50% 100%)"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="section-tag" data-aos="fade-up">Jaringan Bisnis</span>
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-white mt-2" data-aos="fade-up" data-aos-delay="100">
            Kemitraan & Distribusi
        </h1>
        <p class="text-white/70 mt-4 max-w-xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            Bergabunglah dengan jaringan distribusi terpercaya kami dan raih kesuksesan bersama.
        </p>
    </div>
</section>


{{-- ─── INTRO ────────────────────────────────────────────── --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <span class="section-tag">Mengapa Bermitra Bersama Kami</span>
                <h2 class="section-title mb-4">
                    Peluang Bisnis yang <span class="text-primary">Menguntungkan</span>
                </h2>
                <div class="section-divider"></div>
                <p class="text-neutral-slate leading-relaxed mb-5">
                    PT PAMA TOBACCO INDUSTRI membuka peluang kemitraan strategis bagi distributor, agen, dan sub-agen di seluruh wilayah Indonesia. Dengan pengalaman lebih dari satu dekade di industri ini, kami memahami betul apa yang dibutuhkan mitra bisnis kami untuk berkembang.
                </p>
                <p class="text-neutral-slate leading-relaxed mb-8">
                    Kami menawarkan skema kemitraan yang kompetitif, dukungan logistik yang handal, dan program pemasaran yang terstruktur untuk memastikan keberhasilan bisnis bersama dalam jangka panjang.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach([
                        'Harga distributor yang kompetitif',
                        'Area distribusi yang jelas & terlindungi',
                        'Dukungan marketing material (POSM)',
                        'Tim support yang responsif',
                        'Sistem pengiriman cepat & handal',
                        'Program bonus & insentif menarik',
                    ] as $benefit)
                    <div class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-gold/20 rounded-sm flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="text-neutral-slate text-sm">{{ $benefit }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            <div data-aos="fade-left" class="grid grid-cols-2 gap-6">
                @foreach([
                    ['50+', 'Mitra Aktif', 'Di seluruh Indonesia'],
                    ['100+', 'Kota', 'Jangkauan distribusi'],
                    ['10+', 'Tahun', 'Pengalaman industri'],
                    ['24/7', 'Support', 'Tim layanan mitra'],
                ] as [$num, $label, $sub])
                <div class="bg-neutral-offwhite p-8 rounded-sm text-center border-t-4 border-gold">
                    <span class="font-serif font-bold text-4xl text-primary">{{ $num }}</span>
                    <p class="font-semibold text-neutral-charcoal mt-1">{{ $label }}</p>
                    <p class="text-neutral-slate text-xs mt-1">{{ $sub }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


{{-- ─── TIPE KEMITRAAN ───────────────────────────────────── --}}
<section class="py-24 bg-neutral-offwhite">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="section-tag">Program Kemitraan</span>
            <h2 class="section-title">Pilih Skema Kemitraan Anda</h2>
            <div class="section-divider mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                [
                    'title' => 'Distributor Utama',
                    'scope' => 'Skala Provinsi',
                    'desc' => 'Untuk partner bisnis yang ingin mengelola distribusi produk PAMA di tingkat provinsi. Dapatkan harga khusus, area eksklusif, dan dukungan penuh dari manajemen kami.',
                    'features' => ['Area eksklusif tingkat provinsi', 'Harga distributor terbaik', 'Kuota produk diprioritaskan', 'Account manager dedicated', 'Joint marketing program'],
                    'featured' => false,
                ],
                [
                    'title' => 'Distributor Regional',
                    'scope' => 'Skala Kabupaten/Kota',
                    'desc' => 'Cocok untuk pengusaha yang ingin mengelola distribusi di tingkat kabupaten atau beberapa kecamatan dengan modal awal yang lebih terjangkau.',
                    'features' => ['Area distribusi yang jelas', 'Harga kompetitif', 'Dukungan logistik', 'Marketing material', 'Training produk'],
                    'featured' => true,
                ],
                [
                    'title' => 'Agen & Sub-Agen',
                    'scope' => 'Skala Kecamatan',
                    'desc' => 'Entry point yang ideal untuk memulai bisnis distribusi rokok. Cocok untuk warung grosir dan pedagang yang ingin menambah lini produk.',
                    'features' => ['Modal awal terjangkau', 'Fleksibilitas area', 'Pembelian minimum rendah', 'Harga kompetitif', 'Bonus sistem penjualan'],
                    'featured' => false,
                ],
            ] as $tier)
            <div class="card overflow-hidden {{ $tier['featured'] ? 'ring-2 ring-gold scale-105' : '' }}"
                 data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                @if($tier['featured'])
                <div class="bg-gold py-2 text-center">
                    <span class="text-white text-xs font-bold tracking-widest uppercase">Paling Populer</span>
                </div>
                @endif
                <div class="p-8">
                    <span class="text-xs font-semibold tracking-widest uppercase text-gold">{{ $tier['scope'] }}</span>
                    <h3 class="font-serif font-bold text-2xl text-neutral-charcoal mt-2 mb-4">{{ $tier['title'] }}</h3>
                    <p class="text-neutral-slate text-sm leading-relaxed mb-6">{{ $tier['desc'] }}</p>
                    <ul class="space-y-3 mb-8">
                        @foreach($tier['features'] as $feat)
                        <li class="flex items-center gap-3 text-sm text-neutral-slate">
                            <svg class="w-4 h-4 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                            </svg>
                            {{ $feat }}
                        </li>
                        @endforeach
                    </ul>
                    <a href="#inquiry-form" class="{{ $tier['featured'] ? 'btn-primary' : 'btn-outline border-primary text-primary hover:bg-primary hover:text-white' }} w-full justify-center">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ─── FORMULIR INQUIRY ─────────────────────────────────── --}}
<section id="inquiry-form" class="py-24 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <span class="section-tag">Hubungi Kami</span>
            <h2 class="section-title">Formulir Inquiry Kemitraan</h2>
            <div class="section-divider mx-auto"></div>
            <p class="text-neutral-slate mt-4">Isi formulir di bawah ini dan tim kemitraan kami akan menghubungi Anda dalam 1x24 jam kerja.</p>
        </div>

        <div class="card p-8 md:p-12" data-aos="fade-up" data-aos-delay="100">
            <form action="#" method="POST" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-neutral-charcoal mb-2">Nama Lengkap *</label>
                        <input type="text" name="name" required
                               class="w-full border border-neutral-200 rounded-sm px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all"
                               placeholder="Nama Anda">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-neutral-charcoal mb-2">Nama Perusahaan</label>
                        <input type="text" name="company"
                               class="w-full border border-neutral-200 rounded-sm px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all"
                               placeholder="PT/CV/UD (jika ada)">
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-neutral-charcoal mb-2">No. Telepon / WhatsApp *</label>
                        <input type="tel" name="phone" required
                               class="w-full border border-neutral-200 rounded-sm px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all"
                               placeholder="08xx-xxxx-xxxx">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-neutral-charcoal mb-2">Email</label>
                        <input type="email" name="email"
                               class="w-full border border-neutral-200 rounded-sm px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all"
                               placeholder="email@anda.com">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-neutral-charcoal mb-2">Wilayah yang Diminati *</label>
                    <input type="text" name="area" required
                           class="w-full border border-neutral-200 rounded-sm px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all"
                           placeholder="Contoh: Kota Tegal, Kab. Brebes, dsb.">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-neutral-charcoal mb-2">Jenis Kemitraan yang Diminati *</label>
                    <select name="type" class="w-full border border-neutral-200 rounded-sm px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all text-neutral-slate">
                        <option value="">-- Pilih Tipe Kemitraan --</option>
                        <option value="distributor_utama">Distributor Utama (Provinsi)</option>
                        <option value="distributor_regional">Distributor Regional (Kab/Kota)</option>
                        <option value="agen">Agen / Sub-Agen (Kecamatan)</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-neutral-charcoal mb-2">Pesan / Pertanyaan</label>
                    <textarea name="message" rows="4"
                              class="w-full border border-neutral-200 rounded-sm px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all resize-none"
                              placeholder="Ceritakan sedikit tentang bisnis Anda dan harapan dari kemitraan ini..."></textarea>
                </div>
                <button type="submit" class="btn-primary w-full justify-center">
                    Kirim Permintaan Kemitraan
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</section>

@endsection
