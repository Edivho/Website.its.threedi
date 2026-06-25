<section 
    id="live"
    class="py-24 max-w-7xl mx-auto px-6 md:px-12"
>
    <div class="bg-primary text-brand-bg rounded-3xl overflow-hidden shadow-2xl grid grid-cols-1 lg:grid-cols-12">
        
        <div class="lg:col-span-7 p-8 md:p-16 flex flex-col justify-between">
            <div class="space-y-6">
                
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-white/10 border border-white/20 rounded-full text-xs font-semibold tracking-widest uppercase">
                    <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                    Siaran Langsung Interaktif
                </div>
                
                <h2 class="font-serif text-3xl md:text-5xl font-bold leading-tight">
                    Belanja Langsung <br />Melalui TikTok Live.
                </h2>
                
                <p class="text-brand-bg/85 font-light text-base md:text-lg leading-relaxed max-w-xl">
                    Nikmati kemudahan melihat bahan, ukuran, dan detail kecocokan produk fesyen pilihan kami secara langsung melalui siaran interaktif harian di TikTok Live.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 pt-6">
                    
                    <div class="bg-white/5 border border-white/10 rounded-xl p-5 hover:bg-white/10 transition-colors">
                        <div class="w-7 h-7 rounded-full bg-accent text-dark font-bold text-xs flex items-center justify-center mb-3">
                            01
                        </div>
                        <h4 class="font-bold text-sm mb-1">Join Live</h4>
                        <p class="text-xs text-brand-bg/75">Masuk ke live room kami setiap sore pukul 16.00 WIB.</p>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-xl p-5 hover:bg-white/10 transition-colors">
                        <div class="w-7 h-7 rounded-full bg-accent text-dark font-bold text-xs flex items-center justify-center mb-3">
                            02
                        </div>
                        <h4 class="font-bold text-sm mb-1">Claim Product</h4>
                        <p class="text-xs text-brand-bg/75">Ketik "SAYA" diikuti kode pakaian yang sedang ditunjukkan host.</p>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-xl p-5 hover:bg-white/10 transition-colors">
                        <div class="w-7 h-7 rounded-full bg-accent text-dark font-bold text-xs flex items-center justify-center mb-3">
                            03
                        </div>
                        <h4 class="font-bold text-sm mb-1">Admin Checkout</h4>
                        <p class="text-xs text-brand-bg/75">Kirim tangkapan layar klaim Anda ke admin WhatsApp kami.</p>
                    </div>

                </div>
            </div>

            <div class="pt-10 flex flex-wrap gap-4">
                <button 
                    @click="$dispatch('open-live-modal')"
                    class="inline-flex items-center gap-3 px-8 py-4 bg-accent text-dark hover:bg-white rounded-xl font-bold text-sm uppercase tracking-wider transition-all shadow-md active:scale-95"
                >
                    <svg class="w-4 h-4 text-primary animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                    </svg>
                    Tonton Live Sekarang
                </button>

                <a 
                    href="https://api.whatsapp.com/send/?phone=6281387875740&text&type=phone_number&app_absent=0" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="inline-flex items-center gap-3 px-8 py-4 bg-[#25D366] text-white hover:bg-[#20ba5a] rounded-xl font-bold text-sm uppercase tracking-wider transition-all shadow-md active:scale-95 no-underline"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.69-4.98c-.202-.101-1.194-.588-1.379-.653-.185-.066-.32-.099-.455.101-.134.202-.519.653-.636.785-.117.135-.235.151-.437.052-2.11-.101-3.72-1.006-4.946-2.114-.117-.203-.012-.313.088-.413.09-.09.202-.236.303-.354.101-.117.135-.198.202-.331.066-.135.033-.253-.017-.354-.05-.101-.455-1.1-.623-1.505-.164-.397-.33-.342-.454-.349-.117-.006-.253-.007-.39-.007a.75.75 0 0 0-.544.254c-.185.202-.705.69-0.705 1.685s.724 1.96 1.826 3.315c1.1 1.354 2.11 2.074 3.4 2.633.725.313 1.298.423 1.785.35.545-.082 1.67-.682 1.905-1.34.235-.657.235-1.221.164-1.34-.07-.116-.203-.185-.405-.286"/>
                    </svg>
                    CHAT ADMIN WHATSAPP
                </a>
            </div>

        </div>

        <div class="lg:col-span-5 relative min-h-[300px] lg:min-h-full">
            <img 
                src="{{ asset('src/assets/images/thrift_store_aesthetic_1782335033320.png') }}" 
                alt="Thrift clothes hanger mockup" 
                class="w-full h-full object-cover"
                referrerpolicy="no-referrer"
            />
            <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-primary to-transparent opacity-80 lg:opacity-40"></div>
            
            <div class="absolute bottom-6 left-6 right-6 bg-[#541A1A]/90 backdrop-blur-sm p-5 rounded-2xl border border-white/10 shadow-lg text-white">
                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-2">
                        <span class="w-2.5 h-2.5 rounded-full bg-red-500 animate-ping"></span>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-red-400">Sedang Berlangsung</span>
                    </div>
                    <span class="text-[10px] text-white/60 font-mono">1.2K Penonton</span>
                </div>
                <h4 class="font-serif text-sm font-semibold italic">"Koleksi Jaket Retro & Varsity Handpicked Grade S"</h4>
            </div>
        </div>

    </div>
</section>
