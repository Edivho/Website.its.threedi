<section 
    id="hero"
    class="min-h-screen pt-32 pb-16 flex items-center px-6 md:px-12 max-w-7xl mx-auto"
>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center w-full">
        
        <div class="lg:col-span-7 flex flex-col justify-center text-left">
            
            <div class="inline-flex items-center gap-2 mb-6 px-4 py-1.5 rounded-full bg-primary/10 border border-primary/20 self-start text-primary font-medium text-xs tracking-wider uppercase">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                </svg>
                Thrift Store & Business Partner
            </div>

            <h1 class="font-serif text-5xl md:text-7xl font-bold text-dark leading-[1.05] mb-6 tracking-tight">
                Seni Berpakaian, <br />
                <span class="text-primary italic font-medium font-serif">Menghargai Masa Lalu.</span>
            </h1>

            <p class="text-lg md:text-xl text-dark/80 max-w-xl mb-10 leading-relaxed font-light">
                Temukan outfit thrift pilihan kelas dunia dan mulailah membangun bisnis thrift mandiri Anda sendiri bersama <span class="font-semibold text-primary">Its.Threedi</span>. Premium, terkurasi, dan berkelanjutan.
            </p>

            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                
                <button 
                    @click="$dispatch('open-live-modal')"
                    class="flex-1 sm:flex-none flex items-center justify-center gap-3 px-8 py-4 bg-primary text-brand-bg rounded-lg font-medium text-sm tracking-wider uppercase shadow-md hover:bg-dark hover:-translate-y-0.5 transition-all active:translate-y-0"
                >
                    <svg class="w-4 h-4 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                    </svg>
                    Live di TikTok
                </button>

                <a 
                    href="https://instagram.com/its.threedi" 
                    target="_blank" 
                    rel="noopener noreferrer"
                    class="flex-1 sm:flex-none flex items-center justify-center gap-2.5 px-8 py-4 bg-white/70 border border-accent text-dark rounded-lg font-medium text-sm tracking-wider uppercase hover:bg-white hover:-translate-y-0.5 transition-all active:translate-y-0 shadow-sm"
                >
                    <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Instagram
                </a>

                <button 
                    @click="$dispatch('open-maps-modal')"
                    class="flex-1 sm:flex-none flex items-center justify-center gap-2 px-8 py-4 bg-transparent border-b-2 border-primary/40 hover:border-primary text-dark font-medium text-sm tracking-wider uppercase transition-colors"
                >
                    <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Lokasi Toko
                </button>

            </div>
        </div>

        <div class="lg:col-span-5 relative">
            
            <div class="relative z-10 rounded-2xl overflow-hidden aspect-[3/4] shadow-2xl border-4 border-white/60">
                <img 
                    src="{{ asset('hero_fashion_portrait_1782335016649.png') }}" 
                    alt="Its.Threedi Editorial portrait" 
                    class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-[1.5s]"
                    referrerpolicy="no-referrer"
                />
            </div>

            <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-accent/20 rounded-full filter blur-xl -z-10"></div>
            <div class="absolute -top-6 -right-6 w-48 h-48 bg-primary/5 rounded-full filter blur-2xl -z-10"></div>
            
            <div class="absolute bottom-6 right-6 bg-[#FAF6F0]/95 backdrop-blur-sm px-5 py-4 rounded-xl shadow-lg border border-accent/20 z-20 hidden sm:block">
                <p class="font-serif italic text-dark text-xs">"Pakaian bukan hanya sekadar kain, melainkan cerita yang diteruskan."</p>
                <div class="flex items-center gap-1.5 mt-2.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                    <span class="text-[10px] uppercase font-bold tracking-widest text-primary">Its.Threedi Editorial</span>
                </div>
            </div>

        </div>
    </div>
</section>