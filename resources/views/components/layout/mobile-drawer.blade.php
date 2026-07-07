<!-- Full Mobile Slide-Over Drawer Menu (z-[70] to cover top header & bottom bar cleanly) -->
<div 
    x-show="isMobileMenuOpen"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-[70] lg:hidden flex"
    style="display: none;"
>
    <!-- Overlay Backdrop -->
    <div @click="isMobileMenuOpen = false" class="fixed inset-0 bg-slate-950/45 backdrop-blur-xs"></div>

    <!-- Drawer Content Container -->
    <div 
        x-show="isMobileMenuOpen"
        x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        class="relative w-4/5 max-w-xs bg-white h-full shadow-2xl flex flex-col justify-between overflow-y-auto z-10"
    >
        <div>
            <!-- Drawer Header (Branded Red Accent Edition) -->
            <div class="p-5 bg-gradient-to-r from-red-800 to-red-950 text-white flex flex-col gap-4">
                <!-- Top Row: Logo + Close Button -->
                <div class="flex items-center justify-between">
                    <a href="#" class="text-xl font-black tracking-tight text-white flex items-center">
                        <span>DANCELL</span><span class="text-yellow-400">.</span>
                    </a>
                    <button @click="isMobileMenuOpen = false" class="p-1.5 text-white/80 hover:text-white hover:bg-white/10 rounded-full transition-colors cursor-pointer">
                        <i class="ph-light ph-x text-lg"></i>
                    </button>
                </div>
                
                <!-- Bottom Row: Clean Login Prompt (Thin Typography) -->
                <div class="flex items-center space-x-3 pt-1">
                    <!-- Circular modern user avatar ring -->
                    <div class="w-9 h-9 rounded-full border border-white/20 flex items-center justify-center bg-white/10 text-white text-xs font-bold shadow-sm">
                        US
                    </div>
                    <div>
                        <p class="text-[9px] text-red-200 font-bold uppercase tracking-wider leading-none">Halo, Selamat Datang</p>
                        <p class="text-xs font-normal text-white mt-1">Akun Saya / Masuk</p>
                    </div>
                </div>
            </div>

            <!-- Trade-In Mobile Highlight Banner -->
            <div class="p-3.5 bg-yellow-50/50 m-4 rounded-xl border border-yellow-250/70 flex items-center justify-between shadow-3xs">
                <div class="flex items-center space-x-3 text-yellow-805">
                    <i class="ph-light ph-arrows-counter-clockwise text-xl"></i>
                    <div>
                        <p class="text-xs font-semibold text-yellow-900 leading-tight">Program Trade-In</p>
                        <p class="text-[10px] font-normal text-yellow-750/90 mt-0.5">Tukar Tambah HP Lama</p>
                    </div>
                </div>
                <i class="ph-light ph-caret-right text-yellow-850 text-xs"></i>
            </div>

            <!-- Category Navigation Links -->
            <div class="px-4 py-3">
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider px-3 mb-2">Kategori Utama</p>
                <nav class="space-y-1">
                    <a href="#" class="flex items-center space-x-3.5 px-3 py-2.5 rounded-xl text-slate-600 hover:text-red-900 hover:bg-red-50/40 transition-colors group">
                        <i class="ph-light ph-device-mobile text-slate-400 group-hover:text-red-700 text-xl transition-colors"></i>
                        <span class="text-sm font-normal transition-colors">Smartphone & Tablet</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3.5 px-3 py-2.5 rounded-xl text-slate-600 hover:text-red-900 hover:bg-red-50/40 transition-colors group">
                        <i class="ph-light ph-laptop text-slate-400 group-hover:text-red-700 text-xl transition-colors"></i>
                        <span class="text-sm font-normal transition-colors">Laptop & PC</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3.5 px-3 py-2.5 rounded-xl text-slate-600 hover:text-red-900 hover:bg-red-50/40 transition-colors group">
                        <i class="ph-light ph-headphones text-slate-400 group-hover:text-red-700 text-xl transition-colors"></i>
                        <span class="text-sm font-normal transition-colors">Audio Premium</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3.5 px-3 py-2.5 rounded-xl text-slate-600 hover:text-red-900 hover:bg-red-50/40 transition-colors group">
                        <i class="ph-light ph-watch text-slate-400 group-hover:text-red-700 text-xl transition-colors"></i>
                        <span class="text-sm font-normal transition-colors">Smartwatch & Fitness</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3.5 px-3 py-2.5 rounded-xl text-slate-600 hover:text-red-900 hover:bg-red-50/40 transition-colors group">
                        <i class="ph-light ph-plugs text-slate-400 group-hover:text-red-700 text-xl transition-colors"></i>
                        <span class="text-sm font-normal transition-colors">Aksesoris Original</span>
                    </a>
                </nav>
            </div>

            <!-- Secondary Menu Links -->
            <div class="px-4 py-3 border-t border-slate-100 mt-2">
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider px-3 mb-2">Layanan & Bantuan</p>
                <nav class="space-y-1 text-sm text-slate-500">
                    <a href="#" class="flex items-center justify-between px-3 py-2 hover:text-red-900 hover:bg-slate-50 rounded-lg transition-colors group">
                        <span class="text-sm font-normal transition-colors">Cabang Terdekat</span>
                        <i class="ph-light ph-storefront text-slate-400 group-hover:text-red-750 transition-colors"></i>
                    </a>
                    <a href="#" class="flex items-center justify-between px-3 py-2 hover:text-red-900 hover:bg-slate-50 rounded-lg transition-colors group">
                        <span class="text-sm font-normal transition-colors">Lacak Pesanan</span>
                        <i class="ph-light ph-truck text-slate-400 group-hover:text-red-750 transition-colors"></i>
                    </a>
                    <a href="#" class="flex items-center justify-between px-3 py-2 hover:text-red-900 hover:bg-slate-50 rounded-lg transition-colors group">
                        <span class="text-sm font-normal transition-colors">Pusat Bantuan</span>
                        <i class="ph-light ph-question text-slate-400 group-hover:text-red-750 transition-colors"></i>
                    </a>
                </nav>
            </div>
        </div>

        <!-- Drawer Footer -->
        <div class="p-4 bg-slate-50 border-t border-slate-100 text-center text-xs text-slate-400 font-normal">
            &copy; 2026 Dancell Official Store
        </div>
    </div>
</div>
