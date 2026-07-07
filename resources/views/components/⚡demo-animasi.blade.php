<?php

use Livewire\Component;

new class extends Component
{
    //
};
?><div x-data="{ isNotificationOpen: false, isMobileMenuOpen: false, isMobileSearchOpen: false }" class="min-h-screen bg-slate-50 text-slate-800 font-sans selection:bg-red-500 selection:text-white pb-16 lg:pb-0">
    <!-- Navbar & Drawer Group -->
    <x-layout.navbar />

    <!-- Hero Slider Banner (Full Width on Mobile & Desktop) -->
    <div class="px-0 pt-0">
        <div class="rounded-none overflow-hidden shadow-none">
            <x-home.hero-slider />
        </div>
    </div>

    <!-- Member Points Card (Floating Over Banner - Mobile Only) -->
    <div class="block lg:hidden px-7 -mt-6 relative z-20">
        <div class="bg-white rounded-xl py-2.5 px-3 border border-slate-100 shadow-md flex items-center justify-between text-slate-800">
            <!-- QR Member -->
            <a href="#" class="flex flex-col items-center flex-1 text-center group">
                <i class="ph-light ph-qr-code text-2xl text-red-650 transition-transform group-hover:scale-105"></i>
                <span class="text-[10px] font-extrabold text-slate-850 mt-1">Dancell QR</span>
                <span class="text-[7px] text-slate-400 font-bold uppercase tracking-wider leading-none mt-0.5">Scan Member</span>
            </a>
            <div class="h-8 w-px bg-slate-100"></div>
            <!-- Points -->
            <a href="#" class="flex flex-col items-center flex-1 text-center group">
                <i class="ph-light ph-star text-2xl text-yellow-555 transition-transform group-hover:scale-105"></i>
                <span class="text-[10px] font-extrabold text-slate-850 mt-1">250 Poin</span>
                <span class="text-[7px] text-slate-400 font-bold uppercase tracking-wider leading-none mt-0.5">Poin Saya</span>
            </a>
            <div class="h-8 w-px bg-slate-100"></div>
            <!-- Coupons -->
            <a href="#" class="flex flex-col items-center flex-1 text-center group">
                <i class="ph-light ph-ticket text-2xl text-emerald-650 transition-transform group-hover:scale-105"></i>
                <span class="text-[10px] font-extrabold text-slate-850 mt-1">12 Kupon</span>
                <span class="text-[7px] text-slate-400 font-bold uppercase tracking-wider leading-none mt-0.5">Voucher</span>
            </a>
        </div>
    </div>

    <!-- Minimalist Stats/Trust Bar (Mobile Only - Under Banner & Points Card) -->
    <div class="block lg:hidden px-4 pt-4 pb-4">
        <div class="flex items-center justify-between text-[9px] text-slate-400 font-bold tracking-wide uppercase px-2">
            <div class="flex items-center gap-1">
                <i class="ph-light ph-shield-check text-red-650 text-sm"></i>
                <span>Garansi 100%</span>
            </div>
            <div class="h-3 w-px bg-slate-200"></div>
            <div class="flex items-center gap-1">
                <i class="ph-light ph-truck text-red-650 text-sm"></i>
                <span>Gratis Ongkir</span>
            </div>
            <div class="h-3 w-px bg-slate-200"></div>
            <div class="flex items-center gap-1">
                <i class="ph-light ph-arrows-counter-clockwise text-red-650 text-sm"></i>
                <span>Trade-In</span>
            </div>
            <div class="h-3 w-px bg-slate-200"></div>
            <div class="flex items-center gap-1">
                <i class="ph-light ph-credit-card text-red-650 text-sm"></i>
                <span>Cicilan 0%</span>
            </div>
        </div>
    </div>

    <!-- Quick Access Strip (Mobile Only - Unified Theme Edisi Premium) -->
    <div class="block lg:hidden bg-white border-b border-slate-100/80 py-3 px-3">
        <div class="grid grid-cols-4 gap-1">
            <a href="#" class="flex flex-col items-center text-center group">
                <i class="ph-light ph-percent text-2xl text-red-800 transition-transform group-hover:scale-105"></i>
                <span class="text-[9px] font-extrabold uppercase tracking-wider text-slate-500 mt-2 leading-none">Promo</span>
            </a>
            <a href="#" class="flex flex-col items-center text-center group">
                <i class="ph-light ph-hand-pointing text-2xl text-red-800 transition-transform group-hover:scale-105"></i>
                <span class="text-[9px] font-extrabold uppercase tracking-wider text-slate-500 mt-2 leading-none">Click & Pick</span>
            </a>
            <a href="#" class="flex flex-col items-center text-center group">
                <i class="ph-light ph-seal-check text-2xl text-red-800 transition-transform group-hover:scale-105"></i>
                <span class="text-[9px] font-extrabold uppercase tracking-wider text-slate-500 mt-2 leading-none">Official</span>
            </a>
            <a href="#" class="flex flex-col items-center text-center group">
                <i class="ph-light ph-gift text-2xl text-red-800 transition-transform group-hover:scale-105"></i>
                <span class="text-[9px] font-extrabold uppercase tracking-wider text-slate-500 mt-2 leading-none">Gift Card</span>
            </a>
        </div>
    </div>

    <!-- Member Points Card (Floating Detailed Overlay - Desktop Only) -->
    <div class="hidden lg:block max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 -mt-14 relative z-20">
        <div class="bg-white rounded-2xl py-6 px-8 border border-slate-100 shadow-xl flex items-center justify-between text-slate-800">
            <!-- QR Member -->
            <a href="#" class="flex flex-col items-center flex-1 text-center group px-4">
                <i class="ph-light ph-qr-code text-3xl text-red-650 transition-transform group-hover:scale-105"></i>
                <span class="text-xs font-extrabold text-slate-850 mt-2">Dancell QR</span>
                <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider leading-none mt-1">Scan Member</span>
                <p class="hidden lg:block text-[11px] text-slate-400 mt-2 font-normal max-w-xs leading-normal">Tunjukkan QR ke kasir offline untuk mendapatkan poin langsung.</p>
            </a>
            <div class="h-16 w-px bg-slate-100"></div>

            <!-- Points -->
            <a href="#" class="flex flex-col items-center flex-1 text-center group px-4">
                <i class="ph-light ph-star text-3xl text-yellow-555 transition-transform group-hover:scale-105"></i>
                <span class="text-xs font-extrabold text-slate-850 mt-2">250 Poin</span>
                <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider leading-none mt-1">Poin Saya</span>
                <p class="hidden lg:block text-[11px] text-slate-400 mt-2 font-normal max-w-xs leading-normal">Setara dengan <span class="font-bold text-slate-600">Rp25.000</span>. Berlaku s/d Desember 2026.</p>
            </a>
            <div class="h-16 w-px bg-slate-100"></div>

            <!-- Coupons -->
            <a href="#" class="flex flex-col items-center flex-1 text-center group px-4">
                <i class="ph-light ph-ticket text-3xl text-emerald-650 transition-transform group-hover:scale-105"></i>
                <span class="text-xs font-extrabold text-slate-850 mt-2">12 Kupon</span>
                <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider leading-none mt-1">Voucher</span>
                <p class="hidden lg:block text-[11px] text-slate-400 mt-2 font-normal max-w-xs leading-normal">Tersedia <span class="font-bold text-emerald-600">3 kupon</span> aktif yang akan segera berakhir.</p>
            </a>
        </div>
    </div>

    <!-- Ultra-Modern Framed Flagship Hero Stage (Desktop Only) -->
    <div class="hidden lg:block max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 pb-2">
        <!-- Simplified Stats Bar (Desktop - Single Line Mobile Style) -->
        <div class="flex items-center justify-center gap-x-5 lg:gap-x-12 text-[10px] text-slate-400 font-bold tracking-wider uppercase py-2.5 border-b border-slate-100/80">
            <div class="flex items-center gap-1.5 flex-shrink-0">
                <i class="ph-light ph-shield-check text-red-650 text-sm"></i>
                <span>Garansi 100% Original</span>
            </div>
            <div class="h-3 w-px bg-slate-200 flex-shrink-0"></div>
            <div class="flex items-center gap-1.5 flex-shrink-0">
                <i class="ph-light ph-truck text-red-650 text-sm"></i>
                <span>Gratis Ongkir Se-Indonesia</span>
            </div>
            <div class="h-3 w-px bg-slate-200 flex-shrink-0"></div>
            <div class="flex items-center gap-1.5 flex-shrink-0">
                <i class="ph-light ph-arrows-counter-clockwise text-red-650 text-sm"></i>
                <span>Tukar Tambah Terbaik</span>
            </div>
            <div class="h-3 w-px bg-slate-200 flex-shrink-0"></div>
            <div class="flex items-center gap-1.5 flex-shrink-0">
                <i class="ph-light ph-credit-card text-red-650 text-sm"></i>
                <span>Cicilan 0% Mitra Bank</span>
            </div>
        </div>

        <!-- Highlighted Quick Access Strip (Desktop - Premium Actions Bar) -->
        <div class="mt-4 bg-white rounded-2xl border border-slate-100/60 p-6 shadow-xs">
            <div class="grid grid-cols-4 gap-4 divide-x divide-slate-100/80">
                <!-- Promo -->
                <a href="#" class="flex flex-col items-center text-center group">
                    <div class="w-14 h-14 rounded-full bg-slate-50 text-slate-700 flex items-center justify-center transition-all duration-300 group-hover:bg-red-900 group-hover:text-white group-hover:-translate-y-1 shadow-2xs">
                        <i class="ph-light ph-percent text-2xl transition-all duration-500 group-hover:rotate-12"></i>
                    </div>
                    <span class="text-xs font-semibold text-slate-800 mt-3 group-hover:text-red-900 transition-colors">Promo Spesial</span>
                    <span class="text-[10px] text-slate-400 font-normal mt-1 block">Penawaran & diskon hari ini</span>
                </a>
                <!-- Click & Pick -->
                <a href="#" class="flex flex-col items-center text-center group px-2">
                    <div class="w-14 h-14 rounded-full bg-slate-50 text-slate-700 flex items-center justify-center transition-all duration-300 group-hover:bg-red-900 group-hover:text-white group-hover:-translate-y-1 shadow-2xs">
                        <i class="ph-light ph-hand-pointing text-2xl transition-all duration-500 group-hover:rotate-12"></i>
                    </div>
                    <span class="text-xs font-semibold text-slate-800 mt-3 group-hover:text-red-900 transition-colors">Click & Pick</span>
                    <span class="text-[10px] text-slate-400 font-normal mt-1 block">Belanja online ambil di toko</span>
                </a>
                <!-- Official -->
                <a href="#" class="flex flex-col items-center text-center group px-2">
                    <div class="w-14 h-14 rounded-full bg-slate-50 text-slate-700 flex items-center justify-center transition-all duration-300 group-hover:bg-red-900 group-hover:text-white group-hover:-translate-y-1 shadow-2xs">
                        <i class="ph-light ph-seal-check text-2xl transition-all duration-500 group-hover:rotate-12"></i>
                    </div>
                    <span class="text-xs font-semibold text-slate-800 mt-3 group-hover:text-red-900 transition-colors">Official Store</span>
                    <span class="text-[10px] text-slate-400 font-normal mt-1 block">Jaminan produk 100% original</span>
                </a>
                <!-- Gift Card -->
                <a href="#" class="flex flex-col items-center text-center group pl-2">
                    <div class="w-14 h-14 rounded-full bg-slate-50 text-slate-700 flex items-center justify-center transition-all duration-300 group-hover:bg-red-900 group-hover:text-white group-hover:-translate-y-1 shadow-2xs">
                        <i class="ph-light ph-gift text-2xl transition-all duration-500 group-hover:rotate-12"></i>
                    </div>
                    <span class="text-xs font-semibold text-slate-800 mt-3 group-hover:text-red-900 transition-colors">Gift Card</span>
                    <span class="text-[10px] text-slate-400 font-normal mt-1 block">Voucher digital hadiah spesial</span>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Category Drag Carousel -->
    <x-home.category-carousel />

    <!-- Promo Parallax Slider (Autoplay + 3D Depth scrolling) -->
    <x-home.promo-parallax-slider />

    <!-- Brand Showcase & New Arrivals Grid (Asymmetric Layout) -->
    <x-home.brand-showcase />

    <!-- Fixed Mobile Bottom Navigation Bar -->
    <x-layout.mobile-bottom-nav />

    <!-- Full Mobile Slide-Over Drawer Menu Component (Placed at root to maintain top z-index stack) -->
    <x-layout.mobile-drawer />
</div>
