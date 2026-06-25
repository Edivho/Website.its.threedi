/**
 * @license
 * SPDX-License-Identifier: Apache-2.0
 */

import { useState, useEffect, FormEvent } from "react";
import { 
  ArrowRight, 
  MapPin, 
  Instagram, 
  Smartphone, 
  Video, 
  TrendingUp, 
  Users, 
  Heart, 
  Check, 
  ExternalLink, 
  Menu, 
  X, 
  Clock, 
  MessageSquare,
  Sparkles,
  Map,
  ChevronRight,
  Send,
  Calendar
} from "lucide-react";
import { motion, AnimatePresence } from "motion/react";

// Types for WhatsApp Modal
interface Package {
  id: string;
  name: string;
  price: string;
  items: string;
  consultation: string;
  guide: string;
  group: string;
}

export default function App() {
  const [scrolled, setScrolled] = useState(false);
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);
  
  // Interactive Modals State
  const [activePackage, setActivePackage] = useState<Package | null>(null);
  const [showLiveModal, setShowLiveModal] = useState(false);
  const [showMapsModal, setShowMapsModal] = useState(false);
  
  // Form state for WhatsApp package inquiry
  const [buyerName, setBuyerName] = useState("");
  const [buyerCity, setBuyerCity] = useState("");
  const [buyerCustomText, setBuyerCustomText] = useState("");

  // Sticky Navbar background change on scroll
  useEffect(() => {
    const handleScroll = () => {
      if (window.scrollY > 50) {
        setScrolled(true);
      } else {
        setScrolled(false);
      }
    };
    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  const packages: Package[] = [
    {
      id: "starter",
      name: "Starter Package",
      price: "Rp 1.500.000",
      items: "50 Pcs Pakaian Pilihan (Grade A Quality)",
      consultation: "1x Sesi Konsultasi Bisnis Pemula",
      guide: "E-Book Panduan Langkah Awal Thrift",
      group: "Akses Komunitas Mitra Starter"
    },
    {
      id: "premium",
      name: "Premium Package",
      price: "Rp 3.500.000",
      items: "120 Pcs Best-Selling Thrift (Grade A+ & Brand Pilihan)",
      consultation: "Pendampingan Bisnis Intensif 1 Bulan",
      guide: "Kit Pemasaran & Strategi TikTok/Instagram Ads",
      group: "WhatsApp Prioritas Group & Restock VIP"
    },
    {
      id: "super",
      name: "Super Premium",
      price: "Rp 7.500.000",
      items: "300 Pcs Premium Vintage Handpicked (Grade S/Super Rare)",
      consultation: "Konsultasi Eksklusif 1-on-1 Selamanya",
      guide: "SOP Operasional, Foto Produk, & Template Konten",
      group: "Komunitas Elite & Hak Prioritas Restock Utama"
    }
  ];

  // Helper to construct WhatsApp link
  const handleWhatsAppSend = (e: FormEvent) => {
    e.preventDefault();
    if (!activePackage) return;
    
    const phoneNumber = "6281387875740"; // WhatsApp Business Store Number
    const baseMessage = `Halo Its.Threedi, saya tertarik dengan paket kemitraan thrift Anda!\n\n` +
      `*Detail Inkuiri:*\n` +
      `• *Paket:* ${activePackage.name} (${activePackage.price})\n` +
      `• *Nama:* ${buyerName || "Calon Pengusaha Thrift"}\n` +
      `• *Kota Asal:* ${buyerCity || "Indonesia"}\n` +
      `${buyerCustomText ? `• *Pesan Khusus:* ${buyerCustomText}\n` : ""}\n` +
      `Mohon info lebih lanjut mengenai ketersediaan paket dan tata cara pengirimannya. Terima kasih!`;
      
    const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(baseMessage)}`;
    window.open(url, "_blank");
  };

  // Helper to open direct maps
  const openDirectMaps = () => {
    window.open("https://maps.google.com", "_blank");
  };

  // Custom Smooth Scroll helper
  const scrollToSection = (id: string) => {
    setMobileMenuOpen(false);
    const element = document.getElementById(id);
    if (element) {
      element.scrollIntoView({ behavior: "smooth" });
    }
  };

  return (
    <div className="min-h-screen bg-brand-bg font-sans selection:bg-primary selection:text-white overflow-x-hidden text-dark">
      
      {/* --- STICKY NAVBAR --- */}
      <nav 
        id="navbar-section"
        className={`fixed top-0 left-0 right-0 z-50 transition-all duration-500 ${
          scrolled 
            ? "bg-[#FAF6F0]/90 backdrop-blur-md shadow-md py-4 border-b border-accent/20" 
            : "bg-transparent py-6"
        }`}
      >
        <div className="max-w-7xl mx-auto px-6 md:px-12 flex items-center justify-between">
          
          {/* Logo */}
          <div 
            onClick={() => scrollToSection("hero-section")}
            className="flex items-center gap-2 cursor-pointer group"
          >
            <div className="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-brand-bg font-serif font-bold text-sm tracking-wider shadow-sm transition-transform group-hover:scale-105">
              3
            </div>
            <span className="font-serif font-semibold text-xl md:text-2xl tracking-tight text-dark group-hover:text-primary transition-colors">
              Its.<span className="text-primary italic font-medium">Threedi</span>
            </span>
          </div>

          {/* Desktop Menu */}
          <div className="hidden md:flex items-center gap-10">
            <button 
              onClick={() => scrollToSection("about-section")}
              className="font-medium text-sm text-dark/80 hover:text-primary transition-colors uppercase tracking-wider"
            >
              Tentang
            </button>
            <button 
              onClick={() => scrollToSection("live-section")}
              className="font-medium text-sm text-dark/80 hover:text-primary transition-colors uppercase tracking-wider flex items-center gap-1.5"
            >
              <span className="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
              Live TikTok
            </button>
            <button 
              onClick={() => scrollToSection("package-section")}
              className="font-medium text-sm text-dark/80 hover:text-primary transition-colors uppercase tracking-wider"
            >
              Paket Usaha
            </button>
            <button 
              onClick={() => scrollToSection("location-section")}
              className="font-medium text-sm text-dark/80 hover:text-primary transition-colors uppercase tracking-wider"
            >
              Lokasi
            </button>
          </div>

          {/* Primary CTA (Desktop) */}
          <div className="hidden md:block">
            <button
              onClick={() => setShowLiveModal(true)}
              className="relative overflow-hidden group px-6 py-2.5 bg-primary text-brand-bg rounded-full text-xs font-semibold uppercase tracking-widest transition-all shadow-sm hover:shadow-lg active:scale-95"
            >
              <span className="relative z-10 flex items-center gap-2">
                Live Sekarang
                <ArrowRight className="w-3.5 h-3.5 transition-transform duration-300 group-hover:translate-x-1" />
              </span>
              <span className="absolute inset-0 bg-dark transform scale-x-0 origin-left transition-transform duration-300 group-hover:scale-x-100 rounded-full"></span>
            </button>
          </div>

          {/* Mobile Menu Toggle */}
          <button 
            onClick={() => setMobileMenuOpen(!mobileMenuOpen)}
            className="md:hidden p-2 text-dark focus:outline-none"
            aria-label="Toggle menu"
          >
            {mobileMenuOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
          </button>
        </div>

        {/* Mobile Navigation Dropdown */}
        <AnimatePresence>
          {mobileMenuOpen && (
            <motion.div 
              initial={{ opacity: 0, y: -20 }}
              animate={{ opacity: 1, y: 0 }}
              exit={{ opacity: 0, y: -20 }}
              transition={{ duration: 0.2 }}
              className="absolute top-full left-0 right-0 bg-[#FAF6F0] border-b border-accent/20 py-8 px-6 flex flex-col gap-6 shadow-xl md:hidden"
            >
              <button 
                onClick={() => scrollToSection("about-section")}
                className="text-left font-medium text-lg text-dark/90 py-1"
              >
                Tentang Toko
              </button>
              <button 
                onClick={() => scrollToSection("live-section")}
                className="text-left font-medium text-lg text-dark/90 py-1 flex items-center gap-2"
              >
                <span className="w-2.5 h-2.5 rounded-full bg-primary animate-pulse"></span>
                TikTok Live Streaming
              </button>
              <button 
                onClick={() => scrollToSection("package-section")}
                className="text-left font-medium text-lg text-dark/90 py-1"
              >
                Paket Bisnis Thrift
              </button>
              <button 
                onClick={() => scrollToSection("location-section")}
                className="text-left font-medium text-lg text-dark/90 py-1"
              >
                Lokasi & Alamat
              </button>
              
              <hr className="border-accent/30 my-2" />
              
              <button
                onClick={() => {
                  setMobileMenuOpen(false);
                  setShowLiveModal(true);
                }}
                className="w-full text-center py-3.5 bg-primary text-brand-bg rounded-lg text-sm font-semibold tracking-wider flex items-center justify-center gap-2"
              >
                <Video className="w-4 h-4" />
                Live Sekarang
              </button>
            </motion.div>
          )}
        </AnimatePresence>
      </nav>

      {/* --- SECTION 1 — HERO --- */}
      <section 
        id="hero-section"
        className="min-h-screen pt-32 pb-16 flex items-center px-6 md:px-12 max-w-7xl mx-auto"
      >
        <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center w-full">
          
          {/* Left Column Content */}
          <div className="lg:col-span-7 flex flex-col justify-center text-left">
            
            {/* Tagline Badge */}
            <motion.div 
              initial={{ opacity: 0, y: 15 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.6 }}
              className="inline-flex items-center gap-2 mb-6 px-4 py-1.5 rounded-full bg-primary/10 border border-primary/20 self-start text-primary font-medium text-xs tracking-wider uppercase"
            >
              <Sparkles className="w-3.5 h-3.5" />
              Thrift Store & Business Partner
            </motion.div>

            {/* Brand Title and Tagline */}
            <motion.h1 
              initial={{ opacity: 0, y: 15 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.6, delay: 0.1 }}
              className="font-serif text-5xl md:text-7xl font-bold text-dark leading-[1.05] mb-6 tracking-tight"
            >
              Pakai Baju Branded, <br />
              <span className="text-primary italic font-medium font-serif">Tanpa Perlu Mahal.</span>
            </motion.h1>

            {/* Description */}
            <motion.p 
              initial={{ opacity: 0, y: 15 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.6, delay: 0.2 }}
              className="text-lg md:text-xl text-dark/80 max-w-xl mb-10 leading-relaxed font-light"
            >
              Temukan outfit thrift yang branded tetapi masi terjangkau dan mulus. mulailah membangun usaha thrift bersama kami <span className="font-semibold text-primary">Its.Threedi</span>. Premium, pilihan, dan berkelanjutan.
            </motion.p>

            {/* CTA Buttons Grid */}
            <motion.div 
              initial={{ opacity: 0, y: 15 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.6, delay: 0.3 }}
              className="flex flex-col sm:flex-row items-stretch sm:items-center gap-4"
            >
              {/* TikTok Live CTA */}
              <button 
                onClick={() => setShowLiveModal(true)}
                className="flex-1 sm:flex-none flex items-center justify-center gap-3 px-8 py-4 bg-primary text-brand-bg rounded-lg font-medium text-sm tracking-wider uppercase shadow-md hover:bg-dark hover:-translate-y-0.5 transition-all active:translate-y-0"
              >
                <Video className="w-4 h-4 animate-pulse" />
                Live di TikTok
              </button>

              {/* Instagram CTA */}
              <a 
                href="https://instagram.com/its.threedi" 
                target="_blank" 
                rel="noopener noreferrer"
                className="flex-1 sm:flex-none flex items-center justify-center gap-2.5 px-8 py-4 bg-white/70 border border-accent text-dark rounded-lg font-medium text-sm tracking-wider uppercase hover:bg-white hover:-translate-y-0.5 transition-all active:translate-y-0 shadow-sm"
              >
                <Instagram className="w-4 h-4 text-primary" />
                Instagram
              </a>

              {/* Lokasi CTA */}
              <button 
                onClick={() => setShowMapsModal(true)}
                className="flex-1 sm:flex-none flex items-center justify-center gap-2 px-8 py-4 bg-transparent border-b-2 border-primary/40 hover:border-primary text-dark font-medium text-sm tracking-wider uppercase transition-colors"
              >
                <MapPin className="w-4 h-4 text-primary" />
                Lokasi Toko
              </button>
            </motion.div>
          </div>

          {/* Right Column Large Image (PATH PERBAIKAN PRODUCTION) */}
          <motion.div 
            initial={{ opacity: 0, scale: 0.98 }}
            animate={{ opacity: 1, scale: 1 }}
            transition={{ duration: 0.8 }}
            className="lg:col-span-5 relative"
          >
            <div className="relative z-10 rounded-2xl overflow-hidden aspect-[3/4] shadow-2xl border-4 border-white/60">
              <img 
                src="/hero_fashion_portrait_1782335016649.png" 
                alt="Its.Threedi Fashion Premium Thrift Editorial" 
                className="w-full h-full object-cover transform hover:scale-105 transition-transform duration-[1.5s]"
                referrerPolicy="no-referrer"
              />
            </div>
            
            <div className="absolute -bottom-6 -left-6 w-32 h-32 bg-accent/20 rounded-full filter blur-xl -z-10"></div>
            <div className="absolute -top-6 -right-6 w-48 h-48 bg-primary/5 rounded-full filter blur-2xl -z-10"></div>
            
            <div className="absolute bottom-6 right-6 bg-[#FAF6F0]/95 backdrop-blur-sm px-5 py-4 rounded-xl shadow-lg border border-accent/20 z-20 hidden sm:block">
              <p className="font-serif italic text-dark text-xs">"Pakaian bukan hanya sekadar kain, melainkan cerita yang diteruskan."</p>
              <div className="flex items-center gap-1.5 mt-2.5">
                <span className="w-1.5 h-1.5 rounded-full bg-primary"></span>
                <span className="text-[10px] uppercase font-bold tracking-widest text-primary">Its.Threedi Editorial</span>
              </div>
            </div>
          </motion.div>

        </div>
      </section>

      {/* --- SECTION 2 — ABOUT STORE --- */}
      <section 
        id="about-section"
        className="py-24 bg-[#FAF6F0] border-y border-accent/20 relative"
      >
        <div className="max-w-7xl mx-auto px-6 md:px-12">
          <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            
            {/* Text description */}
            <div className="lg:col-span-6 space-y-6">
              <p className="text-primary font-bold text-xs uppercase tracking-widest flex items-center gap-2">
                <span className="w-6 h-[1px] bg-primary"></span> Profile Toko
              </p>
              
              <h2 className="font-serif text-3xl md:text-5xl font-bold leading-tight">
                Mendefinisikan Ulang Makna Thrift Premium.
              </h2>
              
              <p className="text-dark/80 font-light text-base md:text-lg leading-relaxed">
                <span className="font-semibold text-primary">Its.Threedi</span> hadir sebagai destinasi kurasi pakaian vintage dan modern terpercaya di Jakarta Selatan. Kami berkomitmen untuk menghadirkan kualitas terbaik dari berbagai penjuru dunia secara bersih, wangi, dan siap pakai.
              </p>
              
              <p className="text-dark/70 font-light text-sm md:text-base leading-relaxed">
                Atas dasar kenyamanan mitra bisnis, kami menyediakan paket usaha terstruktur dan pasokan suplai langsung dari tangan pertama, guna membantu kelancaran finansial para pengusaha baru di bidang thrift fashion.
              </p>

              <div className="pt-4 flex flex-wrap gap-x-8 gap-y-3">
                <div className="flex items-center gap-2 text-xs font-semibold text-dark/75">
                  <Check className="w-4 h-4 text-primary" /> Terkurasi Profesional
                </div>
                <div className="flex items-center gap-2 text-xs font-semibold text-dark/75">
                  <Check className="w-4 h-4 text-primary" /> Siap Pajang & Bersih
                </div>
                <div className="flex items-center gap-2 text-xs font-semibold text-dark/75">
                  <Check className="w-4 h-4 text-primary" /> Garansi Kualitas Terbaik
                </div>
              </div>
            </div>

            {/* Interactive maps profile snippet / Why trust */}
            <div className="lg:col-span-6 space-y-8 lg:pl-4">
              <div className="bg-brand-bg rounded-xl p-8 border border-accent/30 shadow-sm flex flex-col justify-between h-full relative overflow-hidden">
                <div className="absolute top-0 right-0 w-32 h-32 bg-accent/10 rounded-full transform translate-x-12 -translate-y-12"></div>
                
                <h3 className="font-serif text-xl font-bold mb-4">Mengapa Dipercaya?</h3>
                <div className="space-y-4 relative z-10">
                  <div className="flex gap-4">
                    <div className="w-8 h-8 rounded-full bg-white flex items-center justify-center shrink-0 border border-accent">
                      <TrendingUp className="w-4 h-4 text-primary" />
                    </div>
                    <div>
                      <h4 className="font-bold text-sm">Kurasi Kelas Tinggi</h4>
                      <p className="text-xs text-dark/70 mt-1">Hanya item pilihan berstandar tinggi yang lulus uji kualitas kami. Tidak ada pakaian cacat atau robek tersembunyi.</p>
                    </div>
                  </div>

                  <div className="flex gap-4">
                    <div className="w-8 h-8 rounded-full bg-white flex items-center justify-center shrink-0 border border-accent">
                      <Users className="w-4 h-4 text-primary" />
                    </div>
                    <div>
                      <h4 className="font-bold text-sm">Mitra Sukses Terbukti</h4>
                      <p className="text-xs text-dark/70 mt-1">Komunitas mitra bisnis kami tersebar di seluruh Indonesia dengan dukungan operasional yang siap sedia mendampingi Anda.</p>
                    </div>
                  </div>

                  <div className="flex gap-4">
                    <div className="w-8 h-8 rounded-full bg-white flex items-center justify-center shrink-0 border border-accent">
                      <MapPin className="w-4 h-4 text-primary" />
                    </div>
                    <div>
                      <h4 className="font-bold text-sm">Lokasi Strategis Jakarta</h4>
                      <p className="text-xs text-dark/70 mt-1">Store fisik kami di Jagakarsa, Jakarta Selatan sangat mudah dikunjungi untuk Anda yang ingin melakukan sortir mandiri.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          {/* Statistic Cards */}
          <div className="grid grid-cols-1 md:grid-cols-3 gap-6 mt-16 pt-16 border-t border-accent/20">
            <div className="bg-brand-bg p-8 rounded-xl border border-accent/30 text-center hover:shadow-md transition-shadow group">
              <p className="text-primary font-bold text-sm uppercase tracking-wider mb-2">Produk Terjual</p>
              <h3 className="text-4xl md:text-5xl font-serif font-semibold text-dark mb-2 group-hover:text-primary transition-colors">10,000+</h3>
              <p className="text-xs text-dark/70">Pakaian thrift premium terkirim ke seluruh pelosok tanah air.</p>
            </div>

            <div className="bg-brand-bg p-8 rounded-xl border border-accent/30 text-center hover:shadow-md transition-shadow group">
              <p className="text-primary font-bold text-sm uppercase tracking-wider mb-2">Tiktok Followers</p>
              <h3 className="text-4xl md:text-5xl font-serif font-semibold text-dark mb-2 group-hover:text-primary transition-colors">112,000+</h3>
              <p className="text-xs text-dark/70">Pengikut aktif dan loyal yang menyukai fesyen berkelanjutan.</p>
            </div>

            <div className="bg-brand-bg p-8 rounded-xl border border-accent/30 text-center hover:shadow-md transition-shadow group">
              <p className="text-primary font-bold text-sm uppercase tracking-wider mb-2">Tiktok Likes</p>
              <h3 className="text-4xl md:text-5xl font-serif font-semibold text-dark mb-2 group-hover:text-primary transition-colors">28,700+</h3>
              <p className="text-xs text-dark/70">Interaksi hangat pada siaran langsung dan konten video kreatif kami.</p>
            </div>
          </div>

        </div>
      </section>

      {/* --- SECTION 3 — LIVE TIKTOK (Highlight & PATH PERBAIKAN PRODUCTION) --- */}
      <section 
        id="live-section"
        className="py-24 max-w-7xl mx-auto px-6 md:px-12"
      >
        <div className="bg-primary text-brand-bg rounded-3xl overflow-hidden shadow-2xl grid grid-cols-1 lg:grid-cols-12">
          
          {/* Left Text / Guide */}
          <div className="lg:col-span-7 p-8 md:p-16 flex flex-col justify-between">
            <div className="space-y-6">
              <div className="inline-flex items-center gap-2 px-3 py-1 bg-white/10 border border-white/20 rounded-full text-xs font-semibold tracking-widest uppercase">
                <span className="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                Siaran Langsung Interaktif
              </div>
              
              <h2 className="font-serif text-3xl md:text-5xl font-bold leading-tight">
                Belanja Langsung <br />Melalui TikTok Live.
              </h2>
              
              <p className="text-brand-bg/85 font-light text-base md:text-lg leading-relaxed max-w-xl">
                Nikmati kemudahan melihat bahan, ukuran, dan detail kecocokan produk fesyen pilihan kami secara langsung melalui siaran harian di TikTok Live.
              </p>

              {/* 3 Steps */}
              <div className="grid grid-cols-1 sm:grid-cols-3 gap-6 pt-6">
                <div className="bg-white/5 border border-white/10 rounded-xl p-5 hover:bg-white/10 transition-colors">
                  <div className="w-7 h-7 rounded-full bg-accent text-dark font-bold text-xs flex items-center justify-center mb-3">
                    01
                  </div>
                  <h4 className="font-bold text-sm mb-1">Join Live</h4>
                  <p className="text-xs text-brand-bg/75">Masuk ke live room kami setiap sore pukul 16.00 WIB.</p>
                </div>

                <div className="bg-white/5 border border-white/10 rounded-xl p-5 hover:bg-white/10 transition-colors">
                  <div className="w-7 h-7 rounded-full bg-accent text-dark font-bold text-xs flex items-center justify-center mb-3">
                    02
                  </div>
                  <h4 className="font-bold text-sm mb-1">Claim Product</h4>
                  <p className="text-xs text-brand-bg/75">Ketik "SAYA" diikuti kode pakaian yang sedang ditunjukkan host.</p>
                </div>

                <div className="bg-white/5 border border-white/10 rounded-xl p-5 hover:bg-white/10 transition-colors">
                  <div className="w-7 h-7 rounded-full bg-accent text-dark font-bold text-xs flex items-center justify-center mb-3">
                    03
                  </div>
                  <h4 className="font-bold text-sm mb-1">Admin Checkout</h4>
                  <p className="text-xs text-brand-bg/75">Kirim tangkapan layar klaim Anda ke admin WhatsApp kami.</p>
                </div>
              </div>
            </div>

            <div className="pt-10">
              <button 
                onClick={() => setShowLiveModal(true)}
                className="inline-flex items-center gap-3 px-8 py-4 bg-accent text-dark hover:bg-white rounded-xl font-bold text-sm uppercase tracking-wider transition-all shadow-md active:scale-95"
              >
                <Video className="w-4 h-4 text-primary animate-bounce" />
                Tonton Live Sekarang
              </button>
            </div>
          </div>

          {/* Right Image Display */}
          <div className="lg:col-span-5 relative min-h-[300px] lg:min-h-full">
            <img 
              src="/thrift_store_aesthetic_1782335033320.png" 
              alt="Thrift clothes hanger closeup" 
              className="w-full h-full object-cover"
              referrerPolicy="no-referrer"
            />
            <div className="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-primary to-transparent opacity-80 lg:opacity-40"></div>
            
            <div className="absolute bottom-6 left-6 right-6 bg-[#541A1A]/90 backdrop-blur-sm p-5 rounded-2xl border border-white/10 shadow-lg text-white">
              <div className="flex items-center justify-between mb-2">
                <div className="flex items-center gap-2">
                  <span className="w-2.5 h-2.5 rounded-full bg-red-500 animate-ping"></span>
                  <span className="text-[10px] font-bold uppercase tracking-widest text-red-400">Sedang Berlangsung</span>
                </div>
                <span className="text-[10px] text-white/60 font-mono">1.2K Penonton</span>
              </div>
              <h4 className="font-serif text-sm font-semibold italic">"Koleksi Jaket Retro & Varsity Handpicked Grade S"</h4>
            </div>
          </div>

        </div>
      </section>

      {/* --- SECTION 4 — PAKET USAHA --- */}
      <section 
        id="package-section"
        className="py-24 bg-[#FAF6F0] border-t border-accent/20"
      >
        <div className="max-w-7xl mx-auto px-6 md:px-12">
          
          <div className="text-center max-w-2xl mx-auto mb-16 space-y-4">
            <p className="text-primary font-bold text-xs uppercase tracking-widest">Memulai Bisnis Anda</p>
            <h2 className="font-serif text-3xl md:text-5xl font-bold text-dark">Premium Paket Kemitraan</h2>
            <p className="text-dark/70 font-light text-sm md:text-base">
              Pilih paket awal yang sesuai dengan target ekspansi Anda. Seluruh pakaian dikirim dalam keadaan bersih laundry, wangi, berlabel tag harga kosong, dan siap digantung.
            </p>
          </div>

          <div className="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
            {packages.map((pkg) => {
              const isPremium = pkg.id === "premium";
              return (
                <div 
                  key={pkg.id}
                  className={`rounded-2xl p-8 transition-all flex flex-col justify-between relative ${
                    isPremium 
                      ? "bg-white border-2 border-primary shadow-xl scale-102 lg:scale-105 z-10" 
                      : "bg-brand-bg border border-accent/40 shadow-sm hover:shadow-md hover:scale-101"
                  }`}
                >
                  {isPremium && (
                    <div className="absolute top-0 right-1/2 transform translate-x-1/2 -translate-y-1/2 bg-primary text-brand-bg text-[10px] font-bold uppercase tracking-widest px-4 py-1 rounded-full whitespace-nowrap shadow-sm">
                      Terpopuler & Paling Menguntungkan
                    </div>
                  )}

                  <div className="space-y-6">
                    <div>
                      <h3 className="font-serif text-2xl font-bold mb-1.5">{pkg.name}</h3>
                      <p className="text-2xl md:text-3xl font-bold text-primary tracking-tight">{pkg.price}</p>
                    </div>

                    <hr className="border-accent/30" />

                    <div className="space-y-4">
                      <div className="flex gap-3 items-start">
                        <div className="w-5 h-5 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                          <Check className="w-3 h-3 text-primary" />
                        </div>
                        <div>
                          <p className="text-xs font-bold text-dark/90">Total Pakaian</p>
                          <p className="text-xs text-dark/75 mt-0.5">{pkg.items}</p>
                        </div>
                      </div>

                      <div className="flex gap-3 items-start">
                        <div className="w-5 h-5 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                          <Check className="w-3 h-3 text-primary" />
                        </div>
                        <div>
                          <p className="text-xs font-bold text-dark/90">Sesi Konsultasi</p>
                          <p className="text-xs text-dark/75 mt-0.5">{pkg.consultation}</p>
                        </div>
                      </div>

                      <div className="flex gap-3 items-start">
                        <div className="w-5 h-5 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                          <Check className="w-3 h-3 text-primary" />
                        </div>
                        <div>
                          <p className="text-xs font-bold text-dark/90">Bonus Pendukung</p>
                          <p className="text-xs text-dark/75 mt-0.5">{pkg.guide}</p>
                        </div>
                      </div>

                      <div className="flex gap-3 items-start">
                        <div className="w-5 h-5 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                          <Check className="w-3 h-3 text-primary" />
                        </div>
                        <div>
                          <p className="text-xs font-bold text-dark/90">Akses Group</p>
                          <p className="text-xs text-dark/75 mt-0.5">{pkg.group}</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div className="pt-8">
                    <button 
                      onClick={() => setActivePackage(pkg)}
                      className={`w-full py-3 rounded-xl font-bold text-xs uppercase tracking-widest transition-all text-center flex items-center justify-center gap-2 ${
                        isPremium 
                          ? "bg-primary text-brand-bg hover:bg-dark" 
                          : "bg-white text-dark border border-accent hover:bg-brand-bg"
                      }`}
                    >
                      <MessageSquare className="w-3.5 h-3.5" />
                      Saya Tertarik
                    </button>
                  </div>
                </div>
              );
            })}
          </div>

        </div>
      </section>

      {/* --- LOKASI / ADDRESS SECTION --- */}
      <section id="location-section" className="py-24 max-w-7xl mx-auto px-6 md:px-12 border-t border-accent/20">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div className="space-y-6">
            <p className="text-primary font-bold text-xs uppercase tracking-widest">Kunjungi Store Fisik</p>
            <h2 className="font-serif text-3xl md:text-5xl font-bold text-dark">Mari Bertemu Langsung.</h2>
            <p className="text-dark/80 font-light leading-relaxed">
              Ingin melihat dan memilih pakaian secara manual? Kami menyambut hangat kehadiran Anda di store fisik kami yang berlokasi di Jagakarsa, Jakarta Selatan.
            </p>
            <div className="space-y-3 pt-2">
              <p className="flex items-start gap-3 text-sm text-dark/80">
                <MapPin className="w-5 h-5 text-primary shrink-0 mt-0.5" />
                <span>Jl. Jagakarsa Raya, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta.</span>
              </p>
              <p className="flex items-center gap-3 text-sm text-dark/80">
                <Clock className="w-5 h-5 text-primary shrink-0" />
                <span>Buka Setiap Hari: 10.00 - 21.00 WIB</span>
              </p>
            </div>
            <div className="pt-4">
              <button 
                onClick={openDirectMaps}
                className="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-lg text-sm font-semibold hover:bg-dark transition-colors"
              >
                <Map className="w-4 h-4" /> Buka Google Maps
              </button>
            </div>
          </div>
          <div className="w-full h-80 bg-accent/20 rounded-2xl overflow-hidden border border-accent/30 shadow-inner relative flex items-center justify-center">
            <span className="text-sm font-light text-dark/60 italic">Interactive Maps Placeholder</span>
          </div>
        </div>
      </section>

      {/* --- MODAL INTERAKTIF: WHATSAPP INQUIRY FORM --- */}
      <AnimatePresence>
        {activePackage && (
          <div className="fixed inset-0 z-50 flex items-center justify-center p-4 bg-dark/40 backdrop-blur-sm">
            <motion.div 
              initial={{ opacity: 0, scale: 0.95 }}
              animate={{ opacity: 1, scale: 1 }}
              exit={{ opacity: 0, scale: 0.95 }}
              className="bg-white rounded-2xl p-6 md:p-8 max-w-md w-full shadow-2xl relative border border-accent/20"
            >
              <button 
                onClick={() => setActivePackage(null)}
                className="absolute top-4 right-4 p-1 rounded-full hover:bg-accent/20 text-dark/60 hover:text-dark transition-colors"
              >
                <X className="w-5 h-5" />
              </button>
              
              <h3 className="font-serif text-2xl font-bold mb-2">Formulir Kemitraan</h3>
              <p className="text-sm text-dark/70 mb-6">Anda memilih <span className="font-bold text-primary">{activePackage.name}</span>. Silakan lengkapi data berikut:</p>
              
              <form onSubmit={handleWhatsAppSend} className="space-y-4">
                <div>
                  <label className="block text-xs font-bold uppercase tracking-wider mb-1.5 text-dark/80">Nama Lengkap</label>
                  <input 
                    type="text" 
                    required
                    placeholder="Contoh: Budi Santoso"
                    value={buyerName}
                    onChange={(e) => setBuyerName(e.target.value)}
                    className="w-full px-4 py-3 bg-brand-bg rounded-lg border border-accent/40 focus:outline-none focus:border-primary text-sm transition-colors"
                  />
                </div>
                <div>
                  <label className="block text-xs font-bold uppercase tracking-wider mb-1.5 text-dark/80">Kota Asal</label>
                  <input 
                    type="text" 
                    required
                    placeholder="Contoh: Jakarta Selatan"
                    value={buyerCity}
                    onChange={(e) => setBuyerCity(e.target.value)}
                    className="w-full px-4 py-3 bg-brand-bg rounded-lg border border-accent/40 focus:outline-none focus:border-primary text-sm transition-colors"
                  />
                </div>
                <div>
                  <label className="block text-xs font-bold uppercase tracking-wider mb-1.5 text-dark/80">Pesan Tambahan (Opsional)</label>
                  <textarea 
                    placeholder="Ada pertanyaan khusus mengenai pengiriman atau isi paket?"
                    value={buyerCustomText}
                    onChange={(e) => setBuyerCustomText(e.target.value)}
                    rows={3}
                    className="w-full px-4 py-3 bg-brand-bg rounded-lg border border-accent/40 focus:outline-none focus:border-primary text-sm transition-colors resize-none"
                  />
                </div>
                <button 
                  type="submit"
                  className="w-full py-3.5 bg-primary text-white rounded-lg text-sm font-semibold tracking-wide hover:bg-dark transition-colors flex items-center justify-center gap-2 mt-2"
                >
                  <Send className="w-4 h-4" /> Kirim via WhatsApp
                </button>
              </form>
            </motion.div>
          </div>
        )}
      </AnimatePresence>

      {/* --- MODAL INTERAKTIF: TIKTOK LIVE ROUTER --- */}
      <AnimatePresence>
        {showLiveModal && (
          <div className="fixed inset-0 z-50 flex items-center justify-center p-4 bg-dark/40 backdrop-blur-sm">
            <motion.div 
              initial={{ opacity: 0, scale: 0.95 }}
              animate={{ opacity: 1, scale: 1 }}
              exit={{ opacity: 0, scale: 0.95 }}
              className="bg-white rounded-2xl p-6 text-center max-w-sm w-full shadow-2xl relative border border-accent/20"
            >
              <button 
                onClick={() => setShowLiveModal(false)}
                className="absolute top-4 right-4 p-1 rounded-full hover:bg-accent/20 text-dark/60 hover:text-dark transition-colors"
              >
                <X className="w-5 h-5" />
              </button>
              <div className="w-12 h-12 bg-primary/10 text-primary rounded-full flex items-center justify-center mx-auto mb-4">
                <Video className="w-6 h-6 animate-pulse" />
              </div>
              <h3 className="font-serif text-xl font-bold mb-2">Menuju Live TikTok</h3>
              <p className="text-sm text-dark/70 mb-6">Anda akan diarahkan ke profil resmi TikTok @its.threedi untuk bergabung dalam siaran langsung interaktif.</p>
              <div className="flex gap-3">
                <button 
                  onClick={() => setShowLiveModal(false)}
                  className="flex-1 py-2.5 border border-accent rounded-lg text-xs font-semibold uppercase hover:bg-brand-bg transition-colors"
                >
                  Batal
                </button>
                <a 
                  href="https://tiktok.com/@its.threedi" 
                  target="_blank" 
                  rel="noopener noreferrer"
                  className="flex-1 py-2.5 bg-primary text-white rounded-lg text-xs font-semibold uppercase tracking-wider text-center flex items-center justify-center gap-1 hover:bg-dark transition-colors"
                >
                  Buka TikTok <ExternalLink className="w-3.5 h-3.5" />
                </a>
              </div>
            </motion.div>
          </div>
        )}
      </AnimatePresence>

      {/* --- MODAL INTERAKTIF: MAPS LOCATION DIALOG --- */}
      <AnimatePresence>
        {showMapsModal && (
          <div className="fixed inset-0 z-50 flex items-center justify-center p-4 bg-dark/40 backdrop-blur-sm">
            <motion.div 
              initial={{ opacity: 0, scale: 0.95 }}
              animate={{ opacity: 1, scale: 1 }}
              exit={{ opacity: 0, scale: 0.95 }}
              className="bg-white rounded-2xl p-6 text-center max-w-sm w-full shadow-2xl relative border border-accent/20"
            >
              <button 
                onClick={() => setShowMapsModal(false)}
                className="absolute top-4 right-4 p-1 rounded-full hover:bg-accent/20 text-dark/60 hover:text-dark transition-colors"
              >
                <X className="w-5 h-5" />
              </button>
              <div className="w-12 h-12 bg-primary/10 text-primary rounded-full flex items-center justify-center mx-auto mb-4">
                <MapPin className="w-6 h-6" />
              </div>
              <h3 className="font-serif text-xl font-bold mb-2">Petunjuk Arah Store</h3>
              <p className="text-sm text-dark/70 mb-6">Buka Google Maps untuk melihat lokasi rute perjalanan presisi menuju store Its.Threedi di Jagakarsa.</p>
              <div className="flex gap-3">
                <button 
                  onClick={() => setShowMapsModal(false)}
                  className="flex-1 py-2.5 border border-accent rounded-lg text-xs font-semibold uppercase hover:bg-brand-bg transition-colors"
                >
                  Kembali
                </button>
                <button 
                  onClick={() => {
                    setShowMapsModal(false);
                    openDirectMaps();
                  }}
                  className="flex-1 py-2.5 bg-primary text-white rounded-lg text-xs font-semibold uppercase tracking-wider text-center flex items-center justify-center gap-1 hover:bg-dark transition-colors"
                >
                  Buka Maps <ExternalLink className="w-3.5 h-3.5" />
                </button>
              </div>
            </motion.div>
          </div>
        )}
      </AnimatePresence>

      {/* --- FOOTER DEKORATIF --- */}
      <footer className="py-12 bg-brand-bg text-center text-dark/60 border-t border-accent/20 mt-12">
        <p className="font-serif font-bold text-sm tracking-wide mb-2 text-dark">Its.Threedi</p>
        <p className="text-xs">&copy; {new Date().getFullYear()} Its.Threedi Store Jakarta. All rights reserved.</p>
      </footer>

    </div>
  );
}