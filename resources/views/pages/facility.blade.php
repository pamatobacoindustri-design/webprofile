@extends('layouts.app')

@section('title', 'Fasilitas Manufaktur')
@section('meta_description', 'Fasilitas produksi modern PT PAMA TOBACCO INDUSTRI di Tegal — teknologi mesin terkini, kapasitas tinggi, dan sistem quality control berlapis.')

@section('content')

{{-- ─── PAGE HEADER ──────────────────────────────────────── --}}
<section class="relative pt-40 pb-24 bg-primary overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-primary-dark via-primary to-primary/80"></div>
    <div class="absolute bottom-0 left-0 right-0 h-16 bg-white" style="clip-path: ellipse(55% 100% at 50% 100%)"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="section-tag" data-aos="fade-up">Infrastruktur Produksi</span>
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-white mt-2" data-aos="fade-up" data-aos-delay="100">
            Fasilitas Manufaktur
        </h1>
        <p class="text-white/70 mt-4 max-w-xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            Pabrik modern dengan teknologi terkini, dirancang untuk kapasitas produksi skala nasional.
        </p>
    </div>
</section>


{{-- ─── INTRO FASILITAS ──────────────────────────────────── --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <span class="section-tag">Infrastruktur Kami</span>
                <h2 class="section-title mb-4">Pabrik Berstandar <span class="text-primary">Industri Nasional</span></h2>
                <div class="section-divider"></div>
                <p class="text-neutral-slate leading-relaxed mb-5">
                    Pabrik PT PAMA TOBACCO INDUSTRI di Ds. Wangandawa, Tegal, dirancang khusus untuk memenuhi standar produksi industri tembakau nasional. Dengan fasilitas yang terintegrasi, kami mampu mengelola seluruh rantai produksi dari penerimaan bahan baku hingga distribusi produk jadi.
                </p>
                <p class="text-neutral-slate leading-relaxed mb-8">
                    Setiap sudut pabrik kami dirancang dengan memperhatikan aspek keselamatan kerja, efisiensi produksi, dan kenyamanan karyawan — mencerminkan komitmen kami pada standar manufaktur modern.
                </p>
                {{-- Quick stats --}}
                <div class="grid grid-cols-2 gap-6">
                    @foreach([
                        ['Luas Area', 'Ribuan m²'],
                        ['Lini Produksi', 'SKT & SKM'],
                        ['Kapasitas/Hari', 'Jutaan batang'],
                        ['Karyawan', '500+ Tenaga Ahli'],
                    ] as [$label, $val])
                    <div class="bg-neutral-offwhite p-4 rounded-sm border-l-4 border-gold">
                        <span class="text-neutral-slate text-xs tracking-wide uppercase">{{ $label }}</span>
                        <p class="font-serif font-semibold text-neutral-charcoal mt-1">{{ $val }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div data-aos="fade-left">
                <div class="aspect-square bg-gradient-to-br from-primary/10 via-neutral-offwhite to-gold/10 rounded-sm flex items-center justify-center text-primary/20 font-serif text-3xl">
                    Fasilitas Pabrik
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ─── FITUR FASILITAS ──────────────────────────────────── --}}
<section class="py-24 bg-neutral-offwhite">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="section-tag">Keunggulan Infrastruktur</span>
            <h2 class="section-title">Fasilitas Unggulan Kami</h2>
            <div class="section-divider mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach([
                [
                    'title' => 'Lini Produksi SKT (Sigaret Kretek Tangan)',
                    'desc' => 'Lini produksi SKT kami dioperasikan oleh para pengrajin terampil yang telah menguasai teknik pelintingan rokok secara manual. Keahlian tangan mereka menghasilkan produk dengan cita rasa otentik yang tidak dapat ditiru oleh mesin.',
                    'icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01',
                    'delay' => '0',
                ],
                [
                    'title' => 'Lini Produksi SKM (Sigaret Kretek Mesin)',
                    'desc' => 'Mesin produksi SKM kami berteknologi tinggi mampu menghasilkan ribuan batang per menit dengan konsistensi kualitas yang sangat presisi. Sistem kontrol otomatis memastikan setiap batang memenuhi standar berat, panjang, dan kepadatan yang telah ditetapkan.',
                    'icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z',
                    'delay' => '100',
                ],
                [
                    'title' => 'Gudang Tembakau Berklim Kontrol',
                    'desc' => 'Bahan baku tembakau kami disimpan di gudang dengan sistem pengatur suhu dan kelembaban yang presisi. Hal ini sangat penting untuk menjaga kualitas dan karakteristik aroma tembakau agar tetap optimal saat diproses.',
                    'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10',
                    'delay' => '200',
                ],
                [
                    'title' => 'Laboratorium Quality Control',
                    'desc' => 'Laboratorium QC kami dilengkapi dengan peralatan pengujian modern untuk menganalisis kandungan tar, nikotin, dan karakteristik bakar produk. Setiap batch produksi harus melewati serangkaian pengujian ketat sebelum diizinkan untuk dikemas dan didistribusikan.',
                    'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01',
                    'delay' => '300',
                ],
            ] as $facility)
            <div class="card p-8 flex gap-6" data-aos="fade-up" data-aos-delay="{{ $facility['delay'] }}">
                <div class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-sm flex items-center justify-center">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $facility['icon'] }}"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-serif font-semibold text-lg text-neutral-charcoal mb-3">{{ $facility['title'] }}</h3>
                    <p class="text-neutral-slate text-sm leading-relaxed">{{ $facility['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ─── STANDAR KUALITAS ─────────────────────────────────── --}}
<section class="py-24 bg-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <span class="section-tag">Komitmen Mutu</span>
        <h2 class="section-title-white mb-5">Standar Kualitas Tertinggi<br>di Setiap Tahap Produksi</h2>
        <div class="section-divider mx-auto mb-10"></div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
            @foreach([
                ['Seleksi Bahan Baku', '01'],
                ['Proses Produksi', '02'],
                ['Inspeksi Kualitas', '03'],
                ['Pengemasan & Distribusi', '04'],
            ] as [$step, $num])
            <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <span class="font-serif font-bold text-5xl text-gold/30 leading-none mb-3">{{ $num }}</span>
                <p class="text-white/80 text-sm text-center leading-relaxed">{{ $step }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
