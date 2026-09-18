{{-- ─── NAVBAR ─────────────────────────────────────────── --}}
@php
    $currentRoute = request()->route()->getName();
    $navLinks = [
        ['name' => 'Beranda',       'route' => 'home'],
        ['name' => 'Tentang Kami',  'route' => 'about'],
        ['name' => 'Fasilitas',     'route' => 'facility'],
        ['name' => 'Produk',        'route' => 'products'],
        ['name' => 'Kemitraan',     'route' => 'partnership'],
    ];
    $isHero = in_array($currentRoute, ['home']);
@endphp

<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 {{ $isHero ? 'navbar-transparent' : 'navbar-scrolled' }}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 bg-primary rounded-sm flex items-center justify-center flex-shrink-0 group-hover:bg-primary-dark transition-colors">
                    <span class="text-gold font-serif font-bold text-lg leading-none">PT</span>
                </div>
                <div class="flex flex-col leading-tight">
                    <span class="logo-text font-serif font-bold text-white text-base tracking-wide transition-colors">PAMA TOBACCO</span>
                    <span class="logo-sub text-white/60 text-[10px] tracking-widest uppercase transition-colors">INDUSTRI</span>
                </div>
            </a>

            {{-- Desktop Nav --}}
            <div class="hidden md:flex items-center gap-8">
                @foreach($navLinks as $link)
                    <a href="{{ route($link['route']) }}"
                       class="nav-link-white text-sm font-medium tracking-wide {{ $currentRoute === $link['route'] ? 'border-b border-gold' : '' }}">
                        {{ $link['name'] }}
                    </a>
                @endforeach
                <a href="{{ route('contact') }}" class="btn-primary text-sm py-2.5 px-5">
                    Hubungi Kami
                </a>
            </div>

            {{-- Mobile Hamburger --}}
            <button id="menu-btn" class="md:hidden p-2 rounded-sm mobile-menu-icon text-white" aria-label="Menu">
                <svg class="w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="hidden md:hidden pb-4 border-t border-white/10">
            <div class="flex flex-col gap-1 pt-4">
                @foreach($navLinks as $link)
                    <a href="{{ route($link['route']) }}"
                       class="px-4 py-3 text-sm font-medium text-white/90 hover:text-white hover:bg-white/10 rounded-sm transition-all {{ $currentRoute === $link['route'] ? 'text-gold bg-white/10' : '' }}">
                        {{ $link['name'] }}
                    </a>
                @endforeach
                <a href="{{ route('contact') }}" class="mx-4 mt-3 btn-primary text-center justify-center text-sm">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</nav>
