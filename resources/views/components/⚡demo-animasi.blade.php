<?php

use Livewire\Component;

new class extends Component
{
    //
};
?><div x-data="{ isNotificationOpen: false, isMobileMenuOpen: false, isMobileSearchOpen: false }" class="min-h-screen bg-slate-50 text-slate-800 font-sans selection:bg-red-500 selection:text-white pb-16 sm:pb-0">
    <!-- Navbar & Drawer Group -->
    <x-layout.navbar />

    <!-- Hero Slider Banner (Mobile: Rounded Padded, Desktop: Full Width) -->
    <div class="px-4 pt-3 sm:px-0 sm:pt-0">
        <div class="rounded-xl sm:rounded-none overflow-hidden shadow-xs sm:shadow-none">
            <x-home.hero-slider />
        </div>
    </div>

    <!-- Member Points Card (Floating Over Banner - Mobile Only) -->
    <div class="block sm:hidden px-7 -mt-6 relative z-20">
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
    <div class="block sm:hidden px-4 pt-4 pb-1">
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
    <div class="block sm:hidden bg-white border-b border-slate-100/80 py-5 px-3">
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
    <div class="hidden sm:block max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 -mt-14 relative z-20" style="font-family: 'Plus Jakarta Sans', sans-serif;">
        <div class="bg-white rounded-2xl py-6 px-8 border border-slate-100 shadow-xl flex items-center justify-between text-slate-800">
            <!-- QR Member -->
            <a href="#" class="flex flex-col items-center flex-1 text-center group px-4">
                <i class="ph-light ph-qr-code text-3xl text-red-650 transition-transform group-hover:scale-105"></i>
                <span class="text-xs font-extrabold text-slate-850 mt-2">Dancell QR</span>
                <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider leading-none mt-1">Scan Member</span>
                <p class="text-[11px] text-slate-400 mt-2 font-normal max-w-xs leading-normal">Tunjukkan QR ke kasir offline untuk mendapatkan poin langsung.</p>
            </a>
            <div class="h-16 w-px bg-slate-100"></div>

            <!-- Points -->
            <a href="#" class="flex flex-col items-center flex-1 text-center group px-4">
                <i class="ph-light ph-star text-3xl text-yellow-555 transition-transform group-hover:scale-105"></i>
                <span class="text-xs font-extrabold text-slate-850 mt-2">250 Poin</span>
                <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider leading-none mt-1">Poin Saya</span>
                <p class="text-[11px] text-slate-400 mt-2 font-normal max-w-xs leading-normal">Setara dengan <span class="font-bold text-slate-600">Rp25.000</span>. Berlaku s/d Desember 2026.</p>
            </a>
            <div class="h-16 w-px bg-slate-100"></div>

            <!-- Coupons -->
            <a href="#" class="flex flex-col items-center flex-1 text-center group px-4">
                <i class="ph-light ph-ticket text-3xl text-emerald-650 transition-transform group-hover:scale-105"></i>
                <span class="text-xs font-extrabold text-slate-850 mt-2">12 Kupon</span>
                <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider leading-none mt-1">Voucher</span>
                <p class="text-[11px] text-slate-400 mt-2 font-normal max-w-xs leading-normal">Tersedia <span class="font-bold text-emerald-600">3 kupon</span> aktif yang akan segera berakhir.</p>
            </a>
        </div>
    </div>

    <!-- Ultra-Modern Framed Flagship Hero Stage (Desktop Only) -->
    <div class="hidden sm:block max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 pt-14 pb-12">
        <!-- Feature Trust Bar -->
        <x-home.trust-bar />
    </div>
    
    <!-- Category Drag Carousel -->
    <x-home.category-carousel />

    <!-- Fixed Mobile Bottom Navigation Bar -->
    <x-layout.mobile-bottom-nav />

    <!-- Full Mobile Slide-Over Drawer Menu Component (Placed at root to maintain top z-index stack) -->
    <x-layout.mobile-drawer />
</div>
