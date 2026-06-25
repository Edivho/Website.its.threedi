<section 
    id="packages"
    class="py-24 bg-[#FAF6F0] border-t border-accent/20"
>
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        
        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
            <p class="text-primary font-bold text-xs uppercase tracking-widest">Memulai Bisnis Anda</p>
            <h2 class="font-serif text-3xl md:text-5xl font-bold text-dark">Premium Paket Kemitraan</h2>
            <p class="text-dark/70 font-light text-sm md:text-base">
                Pilih paket awal yang sesuai dengan target ekspansi Anda. Seluruh pakaian dikirim dalam keadaan bersih laundry, wangi, berlabel tag harga kosong, dan siap digantung.
            </p>
        </div>

        <!-- Pricing Cards Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
            
            <!-- Card 1: Starter -->
            <div class="bg-brand-bg rounded-2xl p-8 border border-accent/40 shadow-sm hover:shadow-md transition-all flex flex-col justify-between relative hover:scale-[1.01]">
                <div class="space-y-6">
                    <div>
                        <h3 class="font-serif text-2xl font-bold mb-1.5">Starter Package</h3>
                        <p class="text-2xl md:text-3xl font-bold text-primary tracking-tight">Rp 1.500.000</p>
                    </div>

                    <hr class="border-accent/30" />

                    <!-- Features list -->
                    <div class="space-y-4">
                        
                        <!-- Item -->
                        <div class="flex gap-3 items-start">
                            <div class="w-5 h-5 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3 h-3 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-dark/90">Total Pakaian</p>
                                <p class="text-xs text-dark/75 mt-0.5">50 Pcs Pakaian Pilihan (Grade A Quality)</p>
                            </div>
                        </div>

                        <!-- Consultation -->
                        <div class="flex gap-3 items-start">
                            <div class="w-5 h-5 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3 h-3 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-dark/90">Sesi Konsultasi</p>
                                <p class="text-xs text-dark/75 mt-0.5">1x Sesi Konsultasi Bisnis Pemula</p>
                            </div>
                        </div>



                    </div>
                </div>

                <!-- CTA -->
                <div class="pt-8">
                    <button 
                        @click="$dispatch('open-package-modal', { name: 'Starter Package', price: 'Rp 1.500.000', items: '50 Pcs Pakaian Pilihan (Grade A Quality)', consultation: '1x Sesi Konsultasi Bisnis Pemula' })"
                        class="w-full py-3 bg-white text-dark border border-accent rounded-xl font-bold text-xs uppercase tracking-widest hover:bg-brand-bg transition-all flex items-center justify-center gap-2"
                    >
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                        Saya Tertarik
                    </button>
                </div>
            </div>

            <!-- Card 2: Premium (Highlighted) -->
            <div class="bg-white rounded-2xl p-8 border-2 border-primary shadow-xl scale-102 lg:scale-105 z-10 transition-all flex flex-col justify-between relative">
                <div class="absolute top-0 right-1/2 transform translate-x-1/2 -translate-y-1/2 bg-primary text-brand-bg text-[10px] font-bold uppercase tracking-widest px-4 py-1 rounded-full whitespace-nowrap shadow-sm">
                    Terpopuler & Paling Menguntungkan
                </div>

                <div class="space-y-6">
                    <div>
                        <h3 class="font-serif text-2xl font-bold mb-1.5">Premium Package</h3>
                        <p class="text-2xl md:text-3xl font-bold text-primary tracking-tight">Rp 3.500.000</p>
                    </div>

                    <hr class="border-accent/30" />

                    <!-- Features list -->
                    <div class="space-y-4">
                        
                        <!-- Item -->
                        <div class="flex gap-3 items-start">
                            <div class="w-5 h-5 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3 h-3 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-dark/90">Total Pakaian</p>
                                <p class="text-xs text-dark/75 mt-0.5">120 Pcs Best-Selling Thrift (Grade A+ & Brand Pilihan)</p>
                            </div>
                        </div>

                        <!-- Consultation -->
                        <div class="flex gap-3 items-start">
                            <div class="w-5 h-5 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3 h-3 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-dark/90">Sesi Konsultasi</p>
                                <p class="text-xs text-dark/75 mt-0.5">Pendampingan Bisnis Intensif 1 Bulan</p>
                            </div>
                        </div>



                    </div>
                </div>

                <!-- CTA -->
                <div class="pt-8">
                    <button 
                        @click="$dispatch('open-package-modal', { name: 'Premium Package', price: 'Rp 3.500.000', items: '120 Pcs Best-Selling Thrift (Grade A+ & Brand Pilihan)', consultation: 'Pendampingan Bisnis Intensif 1 Bulan' })"
                        class="w-full py-3 bg-primary text-brand-bg hover:bg-dark rounded-xl font-bold text-xs uppercase tracking-widest transition-all flex items-center justify-center gap-2 shadow-sm"
                    >
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                        Saya Tertarik
                    </button>
                </div>
            </div>

            <!-- Card 3: Super Premium -->
            <div class="bg-brand-bg rounded-2xl p-8 border border-accent/40 shadow-sm hover:shadow-md transition-all flex flex-col justify-between relative hover:scale-[1.01]">
                <div class="space-y-6">
                    <div>
                        <h3 class="font-serif text-2xl font-bold mb-1.5">Super Premium</h3>
                        <p class="text-2xl md:text-3xl font-bold text-primary tracking-tight">Rp 7.500.000</p>
                    </div>

                    <hr class="border-accent/30" />

                    <!-- Features list -->
                    <div class="space-y-4">
                        
                        <!-- Item -->
                        <div class="flex gap-3 items-start">
                            <div class="w-5 h-5 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3 h-3 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-dark/90">Total Pakaian</p>
                                <p class="text-xs text-dark/75 mt-0.5">300 Pcs Premium Vintage Handpicked (Grade S/Super Rare)</p>
                            </div>
                        </div>

                        <!-- Consultation -->
                        <div class="flex gap-3 items-start">
                            <div class="w-5 h-5 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3 h-3 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-dark/90">Sesi Konsultasi</p>
                                <p class="text-xs text-dark/75 mt-0.5">Konsultasi Eksklusif 1-on-1 Selamanya</p>
                            </div>
                        </div>



                    </div>
                </div>

                <!-- CTA -->
                <div class="pt-8">
                    <button 
                        @click="$dispatch('open-package-modal', { name: 'Super Premium Package', price: 'Rp 7.500.000', items: '300 Pcs Premium Vintage Handpicked (Grade S/Super Rare)', consultation: 'Konsultasi Eksklusif 1-on-1 Selamanya' })"
                        class="w-full py-3 bg-white text-dark border border-accent rounded-xl font-bold text-xs uppercase tracking-widest hover:bg-brand-bg transition-all flex items-center justify-center gap-2"
                    >
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                        Saya Tertarik
                    </button>
                </div>
            </div>

        </div>

        <!-- Footnote info -->
        <div class="mt-16 text-center text-xs text-dark/60 italic">
            * Seluruh transaksi kemitraan akan dipandu langsung oleh tim advisor profesional Its.Threedi melalui jalur aman WhatsApp resmi.
        </div>

    </div>
</section>
