<nav 
    x-data="{ scrolled: false, mobileOpen: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })"
    :class="scrolled ? 'bg-brand-light/95 backdrop-blur-md shadow-md py-4 border-b border-accent/20' : 'bg-transparent py-6'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-500"
>
    <div class="max-w-7xl mx-auto px-6 md:px-12 flex items-center justify-between">
        
        <a href="#hero" class="flex items-center gap-1.5 group">
            <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-brand-bg font-serif font-bold text-sm tracking-wider shadow-sm transition-transform group-hover:scale-105">
                3
            </div>
            <span class="font-serif font-bold italic text-primary text-xl md:text-2xl tracking-wide transition-transform group-hover:translate-x-0.5">
                di
            </span>
        </a>

        <div class="hidden md:flex items-center gap-10">
            <a href="#about" class="font-medium text-sm text-dark/80 hover:text-primary transition-colors uppercase tracking-wider">Tentang</a>
            <a href="#live" class="font-medium text-sm text-dark/80 hover:text-primary transition-colors uppercase tracking-wider flex items-center gap-1.5">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                Live TikTok
            </a>
            <a href="#packages" class="font-medium text-sm text-dark/80 hover:text-primary transition-colors uppercase tracking-wider">Paket Usaha</a>
            <a href="#location" class="font-medium text-sm text-dark/80 hover:text-primary transition-colors uppercase tracking-wider">Lokasi</a>
        </div>

        <div class="hidden md:block">
            <button
                @click="$dispatch('open-live-modal')"
                class="relative overflow-hidden group px-6 py-2.5 bg-primary text-brand-bg rounded-full text-xs font-semibold uppercase tracking-widest transition-all shadow-sm hover:shadow-lg active:scale-95"
            >
                <span class="relative z-10 flex items-center gap-2">
                    Live Sekarang
                    <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </span>
                <span class="absolute inset-0 bg-dark transform scale-x-0 origin-left transition-transform duration-300 group-hover:scale-x-100 rounded-full"></span>
            </button>
        </div>

        <button 
            @click="mobileOpen = !mobileOpen"
            class="md:hidden p-2 text-dark focus:outline-none"
            aria-label="Toggle menu"
        >
            <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg x-show="mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <div 
        x-show="mobileOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="absolute top-full left-0 right-0 bg-[#FAF6F0] border-b border-accent/20 py-8 px-6 flex flex-col gap-6 shadow-xl md:hidden"
        style="display: none;"
    >
        <a href="#about" @click="mobileOpen = false" class="text-left font-medium text-lg text-dark/90 py-1">Tentang Toko</a>
        <a href="#live" @click="mobileOpen = false" class="text-left font-medium text-lg text-dark/90 py-1 flex items-center gap-2">
            <span class="w-2.5 h-2.5 rounded-full bg-primary animate-pulse"></span>
            TikTok Live Streaming
        </a>
        <a href="#packages" @click="mobileOpen = false" class="text-left font-medium text-lg text-dark/90 py-1">Paket Bisnis Thrift</a>
        <a href="#location" @click="mobileOpen = false" class="text-left font-medium text-lg text-dark/90 py-1">Lokasi & Alamat</a>
        
        <hr class="border-accent/30 my-2" />
        
        <button
            @click="mobileOpen = false; $dispatch('open-live-modal')"
            class="w-full text-center py-3.5 bg-primary text-brand-bg rounded-lg text-sm font-semibold tracking-wider flex items-center justify-center gap-2"
        >
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
            </svg>
            Live Sekarang
        </button>
    </div>
</nav>