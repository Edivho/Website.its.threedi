<!-- Footer Section -->
<footer 
    id="location"
    x-data="{ 
        liveModalOpen: false, 
        mapsModalOpen: false, 
        packageModalOpen: false,
        selectedPackage: { name: '', price: '', items: '', consultation: '' },
        buyerName: '',
        buyerCity: '',
        buyerCustomText: '',
        sendWhatsApp() {
            const phoneNumber = '6281234567890';
            const baseMessage = `Halo Its.Threedi, saya tertarik dengan paket kemitraan thrift Anda!\n\n` +
                `*Detail Inkuiri:*\n` +
                `• *Paket:* ${this.selectedPackage.name} (${this.selectedPackage.price})\n` +
                `• *Nama:* ${this.buyerName || 'Calon Pengusaha Thrift'}\n` +
                `• *Kota Asal:* ${this.buyerCity || 'Indonesia'}\n` +
                `${this.buyerCustomText ? `• *Pesan Khusus:* ${this.buyerCustomText}\n` : ''}\n` +
                `Mohon info lebih lanjut mengenai ketersediaan paket dan tata cara pengirimannya. Terima kasih!`;
            
            const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(baseMessage)}`;
            window.open(url, '_blank');
        },
        openDirectMaps() {
            window.open('https://maps.google.com/?q=Jl.+Guru+Muhyin+RT04/02+No.73+Lenteng+Agung+Jagakarsa+Jakarta+Selatan', '_blank');
        }
    }"
    @open-live-modal.window="liveModalOpen = true"
    @open-maps-modal.window="mapsModalOpen = true"
    @open-package-modal.window="packageModalOpen = true; selectedPackage = $event.detail"
    class="bg-dark text-brand-bg pt-20 pb-12 relative overflow-hidden"
>
    <!-- Background Accents -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-primary/10 rounded-full filter blur-2xl -z-10"></div>
    
    <div class="max-w-7xl mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 pb-16 border-b border-white/10">
        
        <!-- Column 1: Brand details -->
        <div class="lg:col-span-4 space-y-6">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-full bg-accent flex items-center justify-center text-dark font-serif font-bold text-sm tracking-wider">
                    3
                </div>
                <span class="font-serif font-semibold text-xl md:text-2xl tracking-tight text-white">
                    Its.<span class="text-accent italic font-medium font-serif">Threedi</span>
                </span>
            </div>
            
            <p class="text-xs text-brand-bg/75 leading-relaxed font-light">
                Penyedia busana terkurasi berkualitas internasional serta partner strategis kemitraan bisnis thrifting terpercaya di Jakarta Selatan.
            </p>
            
            <!-- Social links -->
            <div class="flex gap-4">
                <!-- Instagram -->
                <a 
                    href="https://instagram.com/its.threedi" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="w-9 h-9 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-brand-bg hover:bg-white hover:text-dark transition-all"
                    aria-label="Instagram"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                </a>

                <!-- TikTok -->
                <a 
                    href="https://tiktok.com/@its.threedi" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="w-9 h-9 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-brand-bg hover:bg-white hover:text-dark transition-all font-bold text-xs"
                    aria-label="TikTok"
                >
                    TK
                </a>

                <!-- WhatsApp -->
                <a 
                    href="https://wa.me/6281234567890" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="w-9 h-9 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-brand-bg hover:bg-white hover:text-dark transition-all"
                    aria-label="WhatsApp"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Column 2: Alamat fisik (Address) -->
        <div class="lg:col-span-4 space-y-4">
            <h4 class="text-xs font-bold uppercase tracking-widest text-accent">Alamat Store Fisik</h4>
            <div class="text-xs text-brand-bg/80 space-y-2 font-light leading-relaxed">
                <p class="font-bold text-white text-sm">Its.Threedi Flagship Store</p>
                <p>Jl. Guru Muhyin RT04/02 No.73</p>
                <p>Kel. Lenteng Agung, Kec. Jagakarsa</p>
                <p>Kota Jakarta Selatan, DKI Jakarta 12610</p>
            </div>
        </div>

        <!-- Column 3: Interactive Location Button & Maps -->
        <div class="lg:col-span-4 space-y-6">
            <h4 class="text-xs font-bold uppercase tracking-widest text-accent">Navigasi Petunjuk</h4>
            <p class="text-xs text-brand-bg/75 leading-relaxed font-light">
                Ingin langsung melihat proses sortir atau membeli satuan langsung di outlet? Gunakan penunjuk Google Maps resmi kami.
            </p>
            <div class="flex flex-col sm:flex-row lg:flex-col gap-3">
                <button 
                    @click="mapsModalOpen = true"
                    class="flex items-center justify-center gap-2.5 px-6 py-3 bg-white/5 border border-white/10 text-brand-bg hover:bg-white/15 rounded-xl font-medium text-xs tracking-wider uppercase transition-all"
                >
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                    </svg>
                    Intip Peta Satelit
                </button>
                
                <button 
                    @click="openDirectMaps"
                    class="flex items-center justify-center gap-2 px-6 py-3 bg-accent text-dark hover:bg-white rounded-xl font-bold text-xs tracking-wider uppercase transition-all"
                >
                    <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Buka Google Maps
                </button>
            </div>
        </div>

    </div>

    <!-- Copyright -->
    <div class="max-w-7xl mx-auto px-6 md:px-12 pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-[11px] text-brand-bg/60 font-light">
        <p>© 2026 Its.Threedi. Seluruh hak cipta dilindungi undang-undang.</p>
        <div class="flex gap-6">
            <span class="hover:text-accent cursor-pointer transition-colors">Syarat & Ketentuan</span>
            <span class="hover:text-accent cursor-pointer transition-colors">Kebijakan Privasi</span>
            <span class="hover:text-accent cursor-pointer transition-colors">Kemitraan Thrift</span>
        </div>
    </div>

    <!-- ================= ALPINE MODALS ================= -->

    <!-- 1. WHATSAPP PACKAGE INQUIRY MODAL -->
    <template x-teleport="body">
        <div 
            x-show="packageModalOpen" 
            class="fixed inset-0 z-50 flex items-center justify-center p-4"
            style="display: none;"
        >
            <!-- Backdrop -->
            <div 
                x-show="packageModalOpen"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                @click="packageModalOpen = false" 
                class="fixed inset-0 bg-dark/70 backdrop-blur-sm"
            ></div>

            <!-- Modal Body -->
            <div 
                x-show="packageModalOpen"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95 translate-y-4"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="opacity-0 scale-95 translate-y-4"
                class="bg-[#FAF6F0] w-full max-w-lg rounded-2xl overflow-hidden shadow-2xl border border-accent relative z-10"
            >
                <!-- Header -->
                <div class="bg-primary text-brand-bg p-6 flex justify-between items-center">
                    <div>
                        <span class="text-[9px] uppercase tracking-widest font-bold text-accent">Form Inkuiri Paket</span>
                        <h3 class="font-serif text-xl font-bold mt-1" x-text="selectedPackage.name"></h3>
                    </div>
                    <button @click="packageModalOpen = false" class="p-1 rounded-full hover:bg-white/10 text-brand-bg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Form -->
                <form @submit.prevent="sendWhatsApp()" class="p-6 space-y-5">
                    
                    <!-- Info details -->
                    <div class="bg-brand-bg p-4 rounded-xl border border-accent/40 text-xs space-y-2 text-dark">
                        <div class="flex justify-between">
                            <span class="text-dark/60">Nama Paket:</span>
                            <span class="font-bold text-primary" x-text="selectedPackage.name"></span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-dark/60">Estimasi Investasi:</span>
                            <span class="font-bold text-primary" x-text="selectedPackage.price"></span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-dark/60">Dukungan:</span>
                            <span class="font-light text-right" x-text="selectedPackage.consultation"></span>
                        </div>
                    </div>

                    <div class="space-y-4 text-dark">
                        
                        <!-- Name -->
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-dark/75 mb-1.5">Nama Lengkap</label>
                            <input 
                                type="text" 
                                required
                                placeholder="Masukkan nama Anda"
                                x-model="buyerName"
                                class="w-full px-4 py-2.5 bg-white border border-accent rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-primary"
                            />
                        </div>

                        <!-- City -->
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-dark/75 mb-1.5">Kota Asal</label>
                            <input 
                                type="text" 
                                required
                                placeholder="Contoh: Jakarta Selatan, Surabaya, etc"
                                x-model="buyerCity"
                                class="w-full px-4 py-2.5 bg-white border border-accent rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-primary"
                            />
                        </div>

                        <!-- Custom Note -->
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-dark/75 mb-1.5">Pesan Tambahan (Opsional)</label>
                            <textarea 
                                placeholder="Sebutkan jika ada pertanyaan khusus atau kategori pakaian yang diinginkan"
                                x-model="buyerCustomText"
                                rows="3"
                                class="w-full px-4 py-2.5 bg-white border border-accent rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-primary resize-none"
                            ></textarea>
                        </div>

                    </div>

                    <!-- CTA -->
                    <button 
                        type="submit"
                        class="w-full py-3 bg-primary text-brand-bg rounded-xl font-bold text-xs uppercase tracking-widest hover:bg-dark transition-colors flex items-center justify-center gap-2"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                        Kirim ke WhatsApp Resmi
                    </button>

                </form>
            </div>
        </div>
    </template>

    <!-- 2. TIKTOK LIVE MODAL -->
    <template x-teleport="body">
        <div 
            x-show="liveModalOpen" 
            class="fixed inset-0 z-50 flex items-center justify-center p-4"
            style="display: none;"
        >
            <div 
                x-show="liveModalOpen"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                @click="liveModalOpen = false" 
                class="fixed inset-0 bg-dark/70 backdrop-blur-sm"
            ></div>

            <div 
                x-show="liveModalOpen"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95 translate-y-4"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="opacity-0 scale-95 translate-y-4"
                class="bg-[#FAF6F0] w-full max-w-md rounded-2xl overflow-hidden shadow-2xl border border-accent relative z-10"
            >
                <div class="p-6 border-b border-accent/20 flex justify-between items-center text-dark">
                    <div class="flex items-center gap-2">
                        <span class="w-2.5 h-2.5 rounded-full bg-red-500 animate-pulse"></span>
                        <h3 class="font-serif text-lg font-bold">TikTok Live Streaming Room</h3>
                    </div>
                    <button @click="liveModalOpen = false" class="p-1 rounded-full hover:bg-dark/10 text-dark">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <div class="p-6 space-y-6 text-dark">
                    
                    <div class="text-center py-4 bg-brand-bg rounded-xl border border-accent/30 space-y-2">
                        <svg class="w-8 h-8 text-primary mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <p class="font-serif text-sm font-bold">Jadwal Siaran Live Mingguan</p>
                        <p class="text-xs text-dark/70">Senin - Sabtu | Pukul 16.00 WIB - Selesai</p>
                    </div>

                    <div class="space-y-3.5">
                        <h4 class="text-xs font-bold uppercase tracking-wider text-dark/75">Ketentuan Berbelanja Live:</h4>
                        
                        <div class="flex gap-2.5 items-start text-xs">
                            <span class="w-5 h-5 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 text-[10px] font-bold">1</span>
                            <p class="text-dark/80 pt-0.5">Penonton yang mengetik kode klaim tercepat di layar host berhak mendapatkan barang.</p>
                        </div>

                        <div class="flex gap-2.5 items-start text-xs">
                            <span class="w-5 h-5 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 text-[10px] font-bold">2</span>
                            <p class="text-dark/80 pt-0.5">Segera ambil tangkapan layar (screenshot) sebagai bukti klaim yang sah.</p>
                        </div>

                        <div class="flex gap-2.5 items-start text-xs">
                            <span class="w-5 h-5 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 text-[10px] font-bold">3</span>
                            <p class="text-dark/80 pt-0.5">Lakukan konfirmasi ke WhatsApp admin maksimal 1x24 jam setelah sesi live usai.</p>
                        </div>
                    </div>

                    <div class="space-y-2.5 pt-2">
                        <a 
                            href="https://tiktok.com/@its.threedi" 
                            target="_blank" 
                            rel="noopener noreferrer"
                            class="w-full py-3.5 bg-primary text-brand-bg rounded-xl font-bold text-xs uppercase tracking-widest hover:bg-dark transition-colors flex items-center justify-center gap-2 shadow-sm text-center"
                        >
                            <svg class="w-4 h-4 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                            Hubungkan ke TikTok Live
                        </a>

                        <button 
                            @click="liveModalOpen = false"
                            class="w-full py-3 bg-white text-dark border border-accent rounded-xl font-medium text-xs uppercase tracking-widest hover:bg-brand-bg transition-colors"
                        >
                            Nanti Saja
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </template>

    <!-- 3. GOOGLE MAPS MODAL -->
    <template x-teleport="body">
        <div 
            x-show="mapsModalOpen" 
            class="fixed inset-0 z-50 flex items-center justify-center p-4"
            style="display: none;"
        >
            <div 
                x-show="mapsModalOpen"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                @click="mapsModalOpen = false" 
                class="fixed inset-0 bg-dark/70 backdrop-blur-sm"
            ></div>

            <div 
                x-show="mapsModalOpen"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95 translate-y-4"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="opacity-0 scale-95 translate-y-4"
                class="bg-[#FAF6F0] w-full max-w-2xl rounded-2xl overflow-hidden shadow-2xl border border-accent relative z-10"
            >
                <div class="p-6 border-b border-accent/20 flex justify-between items-center text-dark">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <h3 class="font-serif text-lg font-bold">Navigasi Peta Flagship Store</h3>
                    </div>
                    <button @click="mapsModalOpen = false" class="p-1 rounded-full hover:bg-dark/10 text-dark">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <div class="p-6 space-y-6 text-dark">
                    
                    <!-- Styled simulated map -->
                    <div class="w-full h-72 rounded-xl bg-accent-dark/20 border border-accent/50 relative overflow-hidden shadow-inner flex items-center justify-center">
                        <div class="absolute inset-0 bg-[#E8D8C8] opacity-80 flex flex-col justify-between p-6">
                            <div class="w-full h-1.5 bg-white/60 absolute top-1/3 left-0 transform -rotate-12"></div>
                            <div class="w-full h-2 bg-white/60 absolute top-2/3 left-0 transform rotate-6"></div>
                            <div class="w-2.5 h-full bg-white/60 absolute left-1/3 top-0 transform rotate-12"></div>
                            
                            <!-- Location Pin -->
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex flex-col items-center">
                                <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white shadow-xl animate-bounce">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div class="bg-[#FAF6F0] text-[10px] font-bold text-dark px-2 py-0.5 rounded shadow mt-1 border border-accent whitespace-nowrap">
                                    Its.Threedi Flagship
                                </div>
                            </div>

                            <div class="absolute bottom-4 left-4 right-4 bg-white/90 backdrop-blur-sm p-3.5 rounded-lg border border-accent/30 text-[10px] text-dark/80 space-y-1">
                                <p class="font-bold">Jagakarsa, Jakarta Selatan</p>
                                <p class="font-light">Jl. Guru Muhyin RT04/02 No.73, Lenteng Agung</p>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="text-xs space-y-1.5 leading-relaxed font-light">
                            <p class="font-semibold text-sm">Informasi Penting Kunjungan Offline:</p>
                            <p>• Toko fisik buka setiap hari mulai pukul 10.00 WIB hingga 21.00 WIB.</p>
                            <p>• Tersedia lahan parkir aman untuk kendaraan roda dua maupun roda empat.</p>
                            <p>• Calon mitra yang ingin menyortir barang kemitraan mandiri wajib membuat janji terlebih dahulu.</p>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-3">
                            <button 
                                @click="openDirectMaps()"
                                class="flex-1 py-3.5 bg-primary text-brand-bg rounded-xl font-bold text-xs uppercase tracking-widest hover:bg-dark transition-colors flex items-center justify-center gap-2 shadow-sm text-center"
                            >
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                                Navigasi Google Maps Resmi
                            </button>

                            <button 
                                @click="mapsModalOpen = false"
                                class="flex-1 py-3 bg-white text-dark border border-accent rounded-xl font-medium text-xs uppercase tracking-widest hover:bg-brand-bg transition-colors"
                            >
                                Tutup Penunjuk
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </template>

</footer>
