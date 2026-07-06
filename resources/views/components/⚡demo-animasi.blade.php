<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div x-data="{ isNotificationOpen: false, isMobileMenuOpen: false, isMobileSearchOpen: false }" class="min-h-screen bg-slate-50 text-slate-800 font-sans selection:bg-red-500 selection:text-white">
    <!-- Header/Navbar Group -->
    <header class="sticky top-0 z-50 w-full transition-all duration-300">
        <!-- Top Utility Bar (Hidden on Mobile) -->
        <div class="bg-gradient-to-r from-red-800 to-red-900 text-red-200 text-xs py-1.5 hidden sm:block">
            <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <div class="flex space-x-5">
                    <a href="#" class="hover:text-white transition flex items-center gap-1.5"><i class="ph-fill ph-device-mobile text-sm text-red-400"></i> Pilih Cabang Terdekat</a>
                    <a href="#" class="hover:text-white transition flex items-center gap-1.5"><i class="ph-fill ph-storefront text-sm text-red-400"></i> Temukan Toko Offline</a>
                </div>
                <div class="flex space-x-5">
                    <a href="#" class="hover:text-white transition">Bantuan</a>
                    <a href="#" class="hover:text-white transition">Lacak Pesanan</a>
                </div>
            </div>
        </div>

        <!-- Main Navbar (Sleek & Compact Height) -->
        <div class="bg-gradient-to-r from-red-700 to-red-900 shadow-md">
            <div class="max-w-screen-2xl mx-auto px-3 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-12 sm:h-16 gap-2.5 sm:gap-6">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center cursor-pointer hover:opacity-90 transition-opacity">
                        <span class="text-xl sm:text-2xl font-black tracking-tight text-white">Dan<span class="text-yellow-400">cell</span></span>
                    </div>

                    <!-- Prominent Search Bar (Center Desktop) -->
                    <div class="flex-1 max-w-2xl hidden md:flex items-center group">
                        <div class="relative w-full flex shadow-2xs">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <i class="ph-light ph-magnifying-glass text-slate-400 text-lg group-focus-within:text-red-900 transition-colors"></i>
                            </div>
                            <input type="text" placeholder="Cari iPhone 15 Pro, Smartwatch, atau Aksesoris..." class="w-full pl-10 pr-24 py-2 bg-white border-transparent rounded-lg text-xs focus:ring-3 focus:ring-red-950/20 transition-all outline-none text-slate-800 placeholder-slate-400">
                            <button class="absolute right-1 top-1 bottom-1 bg-red-950 hover:bg-slate-900 text-white px-4 rounded-md font-bold text-xs transition-colors cursor-pointer">
                                Cari
                            </button>
                        </div>
                    </div>

                    <!-- Right Actions (Thin & Minimalist Icons) -->
                    <div class="flex items-center space-x-1 sm:space-x-2 flex-shrink-0">
                        
                        <!-- Mobile Search Toggle Button -->
                        <button 
                            @click="isMobileSearchOpen = !isMobileSearchOpen" 
                            class="md:hidden p-1.5 text-red-100 hover:text-white hover:bg-red-800 rounded-lg transition-all focus:outline-none"
                            title="Cari Produk"
                        >
                            <i class="ph-light ph-magnifying-glass text-2xl"></i>
                        </button>

                        <!-- Notification Dropdown Container (Desktop Only - Mobile accesses via Bottom Navigation Bar) -->
                        <div class="relative hidden sm:block">
                            <button @click="isNotificationOpen = !isNotificationOpen" class="relative p-1.5 sm:p-2 text-red-100 hover:text-white hover:bg-red-800 rounded-lg transition-all focus:outline-none cursor-pointer">
                                <i class="ph-light ph-bell text-2xl"></i>
                                <span class="absolute top-1 right-1.5 w-2 h-2 bg-yellow-400 rounded-full border border-red-900 shadow-sm animate-pulse"></span>
                            </button>

                            <!-- Notification Dropdown Menu -->
                            <div 
                                x-show="isNotificationOpen"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 scale-95 -translate-y-2"
                                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                                x-transition:leave-end="opacity-0 scale-95 -translate-y-2"
                                @click.outside="isNotificationOpen = false"
                                class="absolute right-0 mt-3 w-80 sm:w-96 bg-white/95 backdrop-blur-2xl rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.15)] border border-slate-100 overflow-hidden z-50 origin-top-right text-slate-800"
                                style="display: none;"
                            >
                                <!-- Dropdown Header -->
                                <div class="px-5 py-4 border-b border-slate-100 bg-slate-50/50 flex items-center justify-between">
                                    <div class="flex items-center space-x-2">
                                        <h3 class="font-extrabold text-slate-900 text-base">Notifikasi</h3>
                                        <span class="bg-red-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow-sm">2 Baru</span>
                                    </div>
                                    <button class="text-xs font-semibold text-red-600 hover:text-red-700 hover:underline transition-colors cursor-pointer">
                                        Tandai dibaca
                                    </button>
                                </div>

                                <!-- Dropdown Notification List -->
                                <div class="max-h-[360px] overflow-y-auto divide-y divide-slate-100 [&::-webkit-scrollbar]:w-1.5 [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar-thumb]:bg-slate-200 [&::-webkit-scrollbar-thumb]:rounded-full hover:[&::-webkit-scrollbar-thumb]:bg-slate-300">
                                    <!-- Unread 1 -->
                                    <a href="#" class="flex items-start p-4 bg-red-50/40 hover:bg-red-50/80 transition-colors group relative">
                                        <div class="h-10 w-10 rounded-xl bg-red-100 border border-red-200/60 text-red-600 flex items-center justify-center flex-shrink-0 mr-3.5 group-hover:scale-105 transition-transform">
                                            <i class="ph-fill ph-ticket text-xl"></i>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <div class="flex items-center justify-between mb-0.5">
                                                <p class="text-xs font-bold text-slate-900 group-hover:text-red-700 transition-colors truncate">Cashback s/d 1 Juta! 💸</p>
                                                <span class="w-2 h-2 rounded-full bg-red-600 flex-shrink-0 ml-2"></span>
                                            </div>
                                            <p class="text-xs text-slate-600 line-clamp-2 leading-relaxed">Promo gajian khusus buat kamu, tukar tambah sekarang sebelum kehabisan!</p>
                                            <span class="text-[10px] text-red-500 font-medium mt-1.5 inline-block">Baru saja</span>
                                        </div>
                                    </a>

                                    <!-- Unread 2 -->
                                    <a href="#" class="flex items-start p-4 bg-blue-50/40 hover:bg-blue-50/80 transition-colors group relative">
                                        <div class="h-10 w-10 rounded-xl bg-blue-100 border border-blue-200/60 text-blue-600 flex items-center justify-center flex-shrink-0 mr-3.5 group-hover:scale-105 transition-transform">
                                            <i class="ph-fill ph-package text-xl"></i>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <div class="flex items-center justify-between mb-0.5">
                                                <p class="text-xs font-bold text-slate-900 group-hover:text-blue-700 transition-colors truncate">Pesanan Dikirim 🚚</p>
                                                <span class="w-2 h-2 rounded-full bg-blue-600 flex-shrink-0 ml-2"></span>
                                            </div>
                                            <p class="text-xs text-slate-600 line-clamp-2 leading-relaxed">Hore! Pesanan iPhone 15 Pro Max kamu sedang dalam perjalanan ke alamatmu.</p>
                                            <span class="text-[10px] text-blue-500 font-medium mt-1.5 inline-block">2 jam yang lalu</span>
                                        </div>
                                    </a>

                                    <!-- Read 1 -->
                                    <a href="#" class="flex items-start p-4 hover:bg-slate-50 transition-colors opacity-75 hover:opacity-100 group">
                                        <div class="h-10 w-10 rounded-xl bg-slate-100 text-slate-500 flex items-center justify-center flex-shrink-0 mr-3.5 group-hover:bg-emerald-100 group-hover:text-emerald-600 transition-colors">
                                            <i class="ph-fill ph-check-circle text-xl"></i>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-xs font-bold text-slate-800 group-hover:text-emerald-700 transition-colors truncate">Pembayaran Berhasil</p>
                                            <p class="text-xs text-slate-500 line-clamp-2 leading-relaxed">Pembayaran pesanan #INV-20260704 telah kami terima dan sedang diproses.</p>
                                            <span class="text-[10px] text-slate-400 font-medium mt-1.5 inline-block">Kemarin, 14:30</span>
                                        </div>
                                    </a>
                                </div>

                                <!-- Dropdown Footer -->
                                <a href="#" class="block py-3 px-4 text-center bg-slate-50 hover:bg-slate-100 text-xs font-bold text-slate-700 hover:text-red-700 border-t border-slate-100 transition-colors flex items-center justify-center space-x-1">
                                    <span>Lihat Semua Notifikasi</span>
                                    <i class="ph-bold ph-caret-right text-xs"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Cart -->
                        <button class="relative p-1.5 sm:p-2 text-red-100 hover:text-white hover:bg-red-800 rounded-lg transition-all cursor-pointer">
                            <i class="ph-light ph-shopping-bag text-xl sm:text-2xl"></i>
                            <span class="absolute top-0 right-0 w-3.5 h-3.5 sm:w-4 sm:h-4 bg-yellow-400 text-[9px] font-bold text-red-950 flex items-center justify-center rounded-full border border-red-900 shadow-xs">2</span>
                        </button>

                        <div class="h-6 w-px bg-red-800 mx-1.5 hidden sm:block"></div>
                        
                        <!-- User Profile / Login (Desktop) -->
                        <button class="hidden sm:flex items-center space-x-2.5 p-1 pr-3 rounded-xl border border-red-800 hover:border-red-700 hover:bg-red-800 transition-all bg-red-950/50 cursor-pointer">
                            <img src="https://ui-avatars.com/api/?name=User&background=ffffff&color=7f1d1d" alt="User" class="w-7 h-7 rounded-lg border border-red-800">
                            <div class="text-left">
                                <p class="text-[9px] text-red-300 font-medium leading-none mb-0.5">Hello, User</p>
                                <p class="text-xs font-bold text-white leading-none">Akun Saya</p>
                            </div>
                            <i class="ph-light ph-caret-down text-red-300 text-xs ml-1"></i>
                        </button>

                    </div>
                </div>
            </div>

            <!-- Collapsible Mobile Search Input Row -->
            <div 
                x-show="isMobileSearchOpen" 
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-2"
                class="md:hidden px-4 pb-3 pt-2 bg-gradient-to-r from-red-800 to-red-950 border-t border-red-800/80"
                style="display: none;"
            >
                <div class="relative w-full flex shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                        <i class="ph-bold ph-magnifying-glass text-slate-400 text-lg"></i>
                    </div>
                    <input type="text" placeholder="Cari iPhone, Smartwatch, Aksesoris..." class="w-full pl-10 pr-20 py-2.5 bg-white rounded-lg text-xs focus:ring-2 focus:ring-red-400 transition-all outline-none text-slate-800 placeholder-slate-400">
                    <button class="absolute right-1 top-1 bottom-1 bg-red-950 text-white px-4 rounded-md font-bold text-xs">
                        Cari
                    </button>
                </div>
            </div>

            <!-- Sub-Navbar (Desktop Categories - Sleek Height) -->
            <div class="border-t border-red-800/80 bg-gradient-to-r from-red-700 to-red-900 hidden md:block">
                <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex space-x-6 h-10 items-center relative">
                        <!-- Mega Menu Wrapper -->
                        <div class="group h-full flex items-center">
                            <button class="flex items-center space-x-1.5 text-xs font-bold text-white group-hover:text-yellow-400 transition-colors h-full cursor-pointer">
                                <i class="ph-bold ph-list text-base"></i>
                                <span>Semua Kategori</span>
                            </button>
                            
                            <!-- Mega Menu Dropdown -->
                            <div class="absolute left-0 top-full w-[850px] bg-white border border-slate-200 shadow-2xl rounded-br-2xl rounded-bl-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 overflow-hidden transform origin-top-left -translate-y-2 group-hover:translate-y-0">
                                <div class="grid grid-cols-3 gap-8 p-8 relative">
                                    <!-- Decorative background -->
                                    <div class="absolute right-0 bottom-0 w-64 h-64 bg-red-50 rounded-tl-full opacity-50 pointer-events-none"></div>
                                    
                                    <!-- Column 1: Smartphone -->
                                    <div class="relative z-10">
                                        <h3 class="text-slate-900 font-bold mb-4 flex items-center"><i class="ph-duotone ph-device-mobile mr-2 text-red-600 text-xl"></i> Smartphone & Tablet</h3>
                                        <ul class="space-y-3">
                                            <li><a href="#" class="text-slate-600 hover:text-red-600 hover:translate-x-1 transition-all inline-block text-sm font-medium">Apple iPhone</a></li>
                                            <li><a href="#" class="text-slate-600 hover:text-red-600 hover:translate-x-1 transition-all inline-block text-sm font-medium">Samsung Galaxy</a></li>
                                            <li><a href="#" class="text-slate-600 hover:text-red-600 hover:translate-x-1 transition-all inline-block text-sm font-medium">Xiaomi & POCO</a></li>
                                            <li><a href="#" class="text-slate-600 hover:text-red-600 hover:translate-x-1 transition-all inline-block text-sm font-medium">Oppo & Vivo</a></li>
                                            <li><a href="#" class="text-slate-600 hover:text-red-600 hover:translate-x-1 transition-all inline-block text-sm font-medium">Apple iPad</a></li>
                                        </ul>
                                    </div>
                                    <!-- Column 2: Laptop & PC -->
                                    <div class="relative z-10">
                                        <h3 class="text-slate-900 font-bold mb-4 flex items-center"><i class="ph-duotone ph-laptop mr-2 text-red-600 text-xl"></i> Laptop & Komputer</h3>
                                        <ul class="space-y-3">
                                            <li><a href="#" class="text-slate-600 hover:text-red-600 hover:translate-x-1 transition-all inline-block text-sm font-medium">MacBook Pro & Air</a></li>
                                            <li><a href="#" class="text-slate-600 hover:text-red-600 hover:translate-x-1 transition-all inline-block text-sm font-medium">Asus ROG & ZenBook</a></li>
                                            <li><a href="#" class="text-slate-600 hover:text-red-600 hover:translate-x-1 transition-all inline-block text-sm font-medium">Lenovo Legion & Yoga</a></li>
                                            <li><a href="#" class="text-slate-600 hover:text-red-600 hover:translate-x-1 transition-all inline-block text-sm font-medium">HP Spectre & Omen</a></li>
                                            <li><a href="#" class="text-slate-600 hover:text-red-600 hover:translate-x-1 transition-all inline-block text-sm font-medium">PC Rakitan / Komponen</a></li>
                                        </ul>
                                    </div>
                                    <!-- Column 3: Audio & Wearables -->
                                    <div class="relative z-10">
                                        <h3 class="text-slate-900 font-bold mb-4 flex items-center"><i class="ph-duotone ph-headphones mr-2 text-red-600 text-xl"></i> Aksesoris & Audio</h3>
                                        <ul class="space-y-3">
                                            <li><a href="#" class="text-slate-600 hover:text-red-600 hover:translate-x-1 transition-all inline-block text-sm font-medium">AirPods & Beats</a></li>
                                            <li><a href="#" class="text-slate-600 hover:text-red-600 hover:translate-x-1 transition-all inline-block text-sm font-medium">Sony Audio & JBL</a></li>
                                            <li><a href="#" class="text-slate-600 hover:text-red-600 hover:translate-x-1 transition-all inline-block text-sm font-medium">Apple Watch</a></li>
                                            <li><a href="#" class="text-slate-600 hover:text-red-600 hover:translate-x-1 transition-all inline-block text-sm font-medium">Garmin Smartwatch</a></li>
                                            <li><a href="#" class="text-slate-600 hover:text-red-600 hover:translate-x-1 transition-all inline-block text-sm font-medium">Charger & Kabel</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Bottom Bar in Mega Menu -->
                                <div class="bg-slate-50 border-t border-slate-100 p-4 px-8 flex justify-between items-center relative z-10">
                                    <span class="text-slate-500 text-sm font-medium">Temukan ribuan produk pilihan lainnya untuk kebutuhanmu.</span>
                                    <a href="#" class="text-red-700 font-bold text-sm flex items-center hover:text-red-800 transition-colors group/link">
                                        Lihat Semua Kategori <i class="ph-bold ph-arrow-right ml-1 group-hover/link:translate-x-1 transition-transform"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="h-4 w-px bg-red-800"></div>
                        <a href="#" class="text-sm font-semibold text-red-100 hover:text-white transition-colors">Produk Terlaris</a>
                        <a href="#" class="text-sm font-semibold text-red-100 hover:text-white transition-colors">Produk Unggulan</a>
                        <div class="flex-1"></div>
                        <a href="#" class="text-sm font-bold text-red-950 hover:text-black transition-colors flex items-center bg-yellow-400 hover:bg-yellow-300 px-4 py-1.5 rounded-lg shadow-sm">
                            <i class="ph-fill ph-swap text-lg mr-1.5"></i>
                            Trade-In
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Full Mobile Slide-Over Drawer Menu (z-[70] to cover top header & bottom bar cleanly) -->
        <div 
            x-show="isMobileMenuOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-[70] md:hidden flex"
            style="display: none;"
        >
            <!-- Overlay Backdrop -->
            <div @click="isMobileMenuOpen = false" class="fixed inset-0 bg-slate-950/70 backdrop-blur-sm"></div>

            <!-- Drawer Content Container -->
            <div 
                x-show="isMobileMenuOpen"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="-translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="-translate-x-full"
                class="relative w-4/5 max-w-sm bg-white h-full shadow-2xl flex flex-col justify-between overflow-y-auto z-10"
            >
                <div>
                    <!-- Drawer Header -->
                    <div class="p-5 bg-gradient-to-r from-red-800 to-red-950 text-white flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <img src="https://ui-avatars.com/api/?name=User&background=ffffff&color=7f1d1d" alt="User" class="w-10 h-10 rounded-xl border-2 border-red-500/50">
                            <div>
                                <p class="text-xs text-red-200 font-medium">Halo, Selamat Datang</p>
                                <p class="text-sm font-extrabold">Akun Saya / Masuk</p>
                            </div>
                        </div>
                        <button @click="isMobileMenuOpen = false" class="p-2 text-white/80 hover:text-white rounded-lg">
                            <i class="ph-bold ph-x text-xl"></i>
                        </button>
                    </div>

                    <!-- Trade-In Mobile Highlight Banner -->
                    <div class="p-4 bg-yellow-400/90 m-4 rounded-xl border border-yellow-500 flex items-center justify-between shadow-xs">
                        <div class="flex items-center space-x-2 text-red-950">
                            <i class="ph-fill ph-swap text-xl"></i>
                            <div>
                                <p class="text-xs font-black">Program Trade-In</p>
                                <p class="text-[10px] font-semibold text-red-900">Tukar Tambah HP Lama</p>
                            </div>
                        </div>
                        <i class="ph-bold ph-caret-right text-red-950"></i>
                    </div>

                    <!-- Category Navigation Links -->
                    <div class="px-4 py-2">
                        <p class="text-[11px] font-extrabold text-slate-400 uppercase tracking-wider px-3 mb-2">Kategori Utama</p>
                        <nav class="space-y-1">
                            <a href="#" class="flex items-center space-x-3 px-3 py-3 rounded-xl text-slate-800 font-extrabold hover:bg-red-50 hover:text-red-900 transition-colors">
                                <i class="ph-bold ph-device-mobile text-red-600 text-xl"></i>
                                <span>Smartphone & Tablet</span>
                            </a>
                            <a href="#" class="flex items-center space-x-3 px-3 py-3 rounded-xl text-slate-800 font-extrabold hover:bg-red-50 hover:text-red-900 transition-colors">
                                <i class="ph-bold ph-laptop text-red-600 text-xl"></i>
                                <span>Laptop & PC</span>
                            </a>
                            <a href="#" class="flex items-center space-x-3 px-3 py-3 rounded-xl text-slate-800 font-extrabold hover:bg-red-50 hover:text-red-900 transition-colors">
                                <i class="ph-bold ph-headphones text-red-600 text-xl"></i>
                                <span>Audio Premium</span>
                            </a>
                            <a href="#" class="flex items-center space-x-3 px-3 py-3 rounded-xl text-slate-800 font-extrabold hover:bg-red-50 hover:text-red-900 transition-colors">
                                <i class="ph-bold ph-watch text-red-600 text-xl"></i>
                                <span>Smartwatch & Fitness</span>
                            </a>
                            <a href="#" class="flex items-center space-x-3 px-3 py-3 rounded-xl text-slate-800 font-extrabold hover:bg-red-50 hover:text-red-900 transition-colors">
                                <i class="ph-bold ph-plugs text-red-600 text-xl"></i>
                                <span>Aksesoris Original</span>
                            </a>
                        </nav>
                    </div>

                    <!-- Secondary Menu Links -->
                    <div class="px-4 py-2 border-t border-slate-100 mt-2">
                        <p class="text-[11px] font-extrabold text-slate-400 uppercase tracking-wider px-3 mb-2">Layanan & Bantuan</p>
                        <nav class="space-y-1 text-sm font-semibold text-slate-600">
                            <a href="#" class="flex items-center justify-between px-3 py-2.5 hover:text-red-900">
                                <span>Cabang Terdekat</span>
                                <i class="ph-bold ph-storefront text-slate-400"></i>
                            </a>
                            <a href="#" class="flex items-center justify-between px-3 py-2.5 hover:text-red-900">
                                <span>Lacak Pesanan</span>
                                <i class="ph-bold ph-truck text-slate-400"></i>
                            </a>
                            <a href="#" class="flex items-center justify-between px-3 py-2.5 hover:text-red-900">
                                <span>Pusat Bantuan</span>
                                <i class="ph-bold ph-question text-slate-400"></i>
                            </a>
                        </nav>
                    </div>
                </div>

                <!-- Drawer Footer -->
                <div class="p-4 bg-slate-50 border-t border-slate-100 text-center text-xs text-slate-400 font-medium">
                    &copy; 2026 Dancell Official Store
                </div>
            </div>
        </div>
    </header>

    <!-- Ultra-Modern Framed Flagship Hero Stage -->
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 pb-12">
        
        <!-- Hero Slider Stage Box -->
        <div 
            x-data="{ 
                activeSlide: 0,
                slides: [
                    { id: 1, title: 'iPhone 15 Pro Max', subtitle: 'Titanium kedirgantaraan. Chip A17 Pro terdepan. Sistem kamera 48MP Pro paling canggih.', image: '/images/slider-1.png', bgText: 'PRO MAX', price: 'Rp 22.999.000', originalPrice: 'Rp 24.999.000', rating: '4.9', reviews: '2.5k', specs: ['Titanium Frame', 'A17 Pro Chip', '48MP Camera'] },
                    { id: 2, title: 'Sony WH-1000XM5', subtitle: 'Peredam bising terbaik di industri. Kualitas audio Hi-Res definitif dengan baterai 30 jam.', image: '/images/slider-2.png', bgText: 'SONY ANC', price: 'Rp 5.999.000', originalPrice: 'Rp 6.499.000', rating: '4.8', reviews: '1.1k', specs: ['Hi-Res Audio', '30 Jam Baterai', 'Custom ANC Engine'] },
                    { id: 3, title: 'Apple Watch Ultra 2', subtitle: 'Casing Titanium 49mm paling tangguh dengan layar Retina 3000 nits paling terang.', image: '/images/slider-3.png', bgText: 'ULTRA 2', price: 'Rp 13.999.000', originalPrice: 'Rp 15.999.000', rating: '5.0', reviews: '942', specs: ['S9 SiP Chip', 'Titanium Case 49mm', '100m Water Resistant'] }
                ],
                interval: null,
                isDragging: false,
                startX: 0,
                dragThreshold: 50,
                init() {
                    this.startAutoPlay();
                },
                startAutoPlay() {
                    this.interval = setInterval(() => { this.next() }, 6500);
                },
                stopAutoPlay() {
                    clearInterval(this.interval);
                },
                next() {
                    this.activeSlide = (this.activeSlide === this.slides.length - 1) ? 0 : this.activeSlide + 1;
                },
                prev() {
                    this.activeSlide = (this.activeSlide === 0) ? this.slides.length - 1 : this.activeSlide - 1;
                },
                setSlide(index) {
                    this.activeSlide = index;
                    this.stopAutoPlay();
                    this.startAutoPlay();
                },
                startDrag(e) {
                    this.isDragging = true;
                    this.startX = e.type.includes('mouse') ? e.pageX : e.touches[0].clientX;
                    this.stopAutoPlay();
                },
                endDrag(e) {
                    if(!this.isDragging) return;
                    this.isDragging = false;
                    const endX = e.type.includes('mouse') ? e.pageX : e.changedTouches[0].clientX;
                    const diff = this.startX - endX;
                    
                    if (diff > this.dragThreshold) {
                        this.next();
                    } else if (diff < -this.dragThreshold) {
                        this.prev();
                    }
                    this.startAutoPlay();
                }
            }"
            class="relative w-full rounded-2xl md:rounded-[2.5rem] bg-gradient-to-b from-white via-slate-50/90 to-slate-100/70 border border-slate-200/80 shadow-xs sm:shadow-[0_20px_50px_-15px_rgba(0,0,0,0.06)] overflow-hidden min-h-[420px] sm:min-h-[580px] lg:min-h-[620px] flex flex-col justify-between cursor-grab active:cursor-grabbing select-none"
            @mousedown="startDrag"
            @mouseup="endDrag"
            @mouseleave="endDrag"
            @touchstart="startDrag"
            @touchend="endDrag"
        >
            <!-- Rich Tech Grid Pattern Background -->
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] [background-size:32px_32px] opacity-45 pointer-events-none z-0"></div>

            <!-- Soft Radial Glow Effect -->
            <div class="absolute -top-24 -right-24 w-[32rem] h-[32rem] bg-gradient-to-br from-red-500/10 via-red-200/5 to-transparent rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-24 -left-24 w-[32rem] h-[32rem] bg-gradient-to-tr from-red-500/5 via-slate-200/10 to-transparent rounded-full blur-3xl pointer-events-none"></div>

            <!-- Stage Top Bar (Official Store Tag + Slide Controls) -->
            <div class="relative z-20 px-3 sm:px-10 pt-3 sm:pt-8 flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <span class="inline-flex items-center space-x-1.5 px-2.5 py-0.5 sm:px-3.5 sm:py-1.5 rounded-full bg-red-900/10 border border-red-900/20 text-red-900 font-extrabold text-[9px] sm:text-xs uppercase tracking-wider">
                        <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-red-600 animate-ping"></span>
                        <span>Official Flagship</span>
                    </span>
                </div>

                <!-- Clean Slide Switcher Pills (Desktop Only) -->
                <div class="hidden sm:flex items-center space-x-1 bg-white/90 backdrop-blur-md p-1 rounded-2xl border border-slate-200/80 shadow-xs">
                    <template x-for="(slide, index) in slides" :key="slide.id">
                        <button 
                            @click="setSlide(index)"
                            class="px-3.5 py-1.5 rounded-xl text-xs font-bold transition-all duration-300 flex items-center space-x-1.5 cursor-pointer"
                            :class="activeSlide === index ? 'bg-red-900 text-white shadow-sm' : 'text-slate-500 hover:text-slate-900'"
                        >
                            <span x-text="'0' + (index + 1)"></span>
                            <span x-show="activeSlide === index" x-text="slide.title.split(' ')[0]" class="hidden md:inline font-semibold"></span>
                        </button>
                    </template>
                </div>
            </div>

            <!-- Slides Showcase -->
            <template x-for="(slide, index) in slides" :key="slide.id">
                <div 
                    x-show="activeSlide === index"
                    x-transition:enter="transition ease-out duration-600"
                    x-transition:enter-start="opacity-0 translate-y-3"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-250 absolute inset-0"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="absolute inset-0 w-full h-full px-3 sm:px-10 lg:px-12 pt-8 sm:pt-16 pb-8 flex items-center overflow-y-auto"
                >
                    <!-- Background Infinite Marquee Text -->
                    <div class="absolute bottom-4 inset-x-0 overflow-hidden pointer-events-none select-none z-0">
                        <div class="animate-marquee whitespace-nowrap text-slate-900/[0.04] font-black text-3xl sm:text-8xl md:text-[9rem] tracking-tight uppercase leading-none">
                            <span class="mr-12" x-text="slide.title + ' • DANCELL OFFICIAL STORE • GARANSI RESMI 100% • BEST PRICE • '"></span>
                            <span class="mr-12" x-text="slide.title + ' • DANCELL OFFICIAL STORE • GARANSI RESMI 100% • BEST PRICE • '"></span>
                        </div>
                    </div>

                    <div class="flex flex-col md:grid md:grid-cols-12 gap-2.5 sm:gap-6 lg:gap-12 items-center w-full relative z-10 py-1 sm:py-0">
                        
                        <!-- Top Image Showcase on Mobile (Order First on Mobile, Order Last on Desktop) -->
                        <div class="w-full md:col-span-5 flex justify-center items-center order-first md:order-last">
                            
                            <!-- Sleek Product Card Box -->
                            <div class="relative bg-white/90 backdrop-blur-md rounded-xl sm:rounded-3xl p-1.5 sm:p-4 border border-slate-200/90 shadow-2xs sm:shadow-[0_20px_50px_-15px_rgba(0,0,0,0.1)] w-full max-w-[165px] sm:max-w-xs md:max-w-md group">
                                
                                <!-- Product Image Container -->
                                <div class="relative rounded-lg sm:rounded-2xl overflow-hidden bg-slate-50 flex items-center justify-center min-h-[110px] sm:min-h-[260px] md:min-h-[360px]">
                                    <img 
                                        :src="slide.image" 
                                        :alt="slide.title" 
                                        draggable="false" 
                                        class="w-full max-h-[120px] sm:max-h-[280px] md:max-h-[400px] object-cover rounded-lg sm:rounded-2xl group-hover:scale-105 transition-transform duration-700"
                                    >
                                </div>

                                <!-- Floating Glass Badge 1 (Desktop Only) -->
                                <div class="hidden sm:flex absolute -top-3 -right-3 bg-white/95 backdrop-blur-xl border border-slate-200/90 rounded-2xl p-2.5 sm:p-3 text-slate-800 items-center space-x-3 shadow-lg z-20">
                                    <div class="w-8 h-8 rounded-xl bg-red-50 text-red-600 flex items-center justify-center font-bold">
                                        <i class="ph-bold ph-shield-check text-lg"></i>
                                    </div>
                                    <div class="text-left pr-1">
                                        <p class="text-[10px] text-slate-400 font-semibold uppercase tracking-wider">Garansi</p>
                                        <p class="text-xs font-extrabold text-slate-900">100% Original</p>
                                    </div>
                                </div>

                                <!-- Floating Glass Badge 2 (Desktop Only) -->
                                <div class="hidden sm:flex absolute -bottom-3 -left-3 bg-white/95 backdrop-blur-xl border border-slate-200/90 rounded-2xl p-2.5 sm:p-3 text-slate-800 items-center space-x-3 shadow-lg z-20">
                                    <div class="w-8 h-8 rounded-xl bg-red-50 text-red-600 flex items-center justify-center font-bold">
                                        <i class="ph-bold ph-truck text-lg"></i>
                                    </div>
                                    <div class="text-left pr-1">
                                        <p class="text-[10px] text-slate-400 font-semibold uppercase tracking-wider">Express</p>
                                        <p class="text-xs font-extrabold text-slate-900">Bebas Ongkir</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Text Content Below Image on Mobile (Order Last on Mobile, Order First on Desktop) -->
                        <div class="w-full md:col-span-7 select-none text-left order-last md:order-first">
                            <!-- Category Badge & Rating -->
                            <div class="flex items-center space-x-1.5 mb-1.5 sm:mb-4">
                                <span class="px-2 py-0.5 sm:px-3.5 sm:py-1 rounded-md sm:rounded-lg bg-red-900 text-white text-[9px] sm:text-xs font-extrabold uppercase tracking-wider shadow-xs" x-text="slide.id === 1 ? '🔥 Flash Sale' : 'New Arrival'"></span>
                                <div class="flex items-center space-x-1 text-[10px] sm:text-xs font-bold text-slate-700 bg-white/90 backdrop-blur-md px-1.5 py-0.5 sm:px-3 sm:py-1 rounded-md sm:rounded-lg border border-slate-200/80 shadow-xs">
                                    <i class="ph-fill ph-star text-amber-500 text-[10px] sm:text-sm"></i>
                                    <span x-text="slide.rating"></span>
                                    <span class="text-slate-400 font-normal" x-text="'(' + slide.reviews + ')'"></span>
                                </div>
                            </div>

                            <!-- Main Title & Subtitle -->
                            <h1 x-text="slide.title" class="text-xl sm:text-5xl lg:text-6xl font-black text-slate-900 tracking-tight leading-[1.1] mb-1 sm:mb-3"></h1>
                            <p x-text="slide.subtitle" class="text-[11px] sm:text-base lg:text-lg text-slate-600 max-w-xl font-normal leading-snug sm:leading-relaxed mb-2 sm:mb-6 line-clamp-2 sm:line-clamp-none"></p>

                            <!-- Specs Pills (Desktop Only) -->
                            <div class="hidden sm:flex flex-wrap gap-2 mb-7">
                                <template x-for="spec in slide.specs">
                                    <span class="flex items-center px-3.5 py-1.5 bg-white border border-slate-200/90 text-slate-700 text-xs font-semibold rounded-xl shadow-xs">
                                        <i class="ph-bold ph-check-circle text-red-600 mr-1.5 text-sm"></i>
                                        <span x-text="spec"></span>
                                    </span>
                                </template>
                            </div>

                            <!-- Pricing -->
                            <div class="flex items-baseline space-x-1.5 sm:space-x-3 mb-2.5 sm:mb-7">
                                <span class="text-lg sm:text-4xl lg:text-5xl font-black text-red-900 tracking-tight" x-text="slide.price"></span>
                                <span class="text-[10px] sm:text-sm text-slate-400 line-through font-medium" x-text="slide.originalPrice"></span>
                                <span class="bg-red-50 text-red-700 border border-red-100 text-[8px] sm:text-xs font-bold px-1.5 py-0.5 rounded">Hemat 2 Juta</span>
                            </div>

                            <!-- CTA Buttons -->
                            <div class="flex items-center gap-2 sm:gap-3">
                                <button class="w-full sm:w-auto px-4 sm:px-8 py-2 sm:py-4 bg-gradient-to-r from-red-800 to-red-950 hover:from-red-900 hover:to-black text-white font-extrabold rounded-lg sm:rounded-2xl shadow-md shadow-red-950/20 hover:-translate-y-0.5 transition-all flex items-center justify-center group text-xs sm:text-sm cursor-pointer">
                                    <i class="ph-bold ph-shopping-bag text-xs sm:text-lg mr-1.5 sm:mr-2 group-hover:scale-110 transition-transform"></i>
                                    <span>Beli Sekarang</span>
                                </button>
                                <button class="hidden sm:flex px-7 py-4 bg-white hover:bg-slate-50 text-slate-700 hover:text-red-900 font-bold rounded-2xl border border-slate-200 shadow-xs transition-all items-center justify-center text-sm cursor-pointer">
                                    <span>Detail</span>
                                    <i class="ph-bold ph-arrow-right text-xs ml-1"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </template>

            <!-- Bottom Progress Indicators & Arrows -->
            <div class="relative z-20 px-3 sm:px-10 pb-3 sm:pb-6 flex items-center justify-between">
                <div class="flex items-center space-x-1.5">
                    <template x-for="(slide, index) in slides" :key="slide.id">
                        <button 
                            @click="setSlide(index)"
                            class="h-1.5 sm:h-2 rounded-full transition-all duration-300 cursor-pointer"
                            :class="activeSlide === index ? 'bg-red-900 w-6 sm:w-10' : 'bg-slate-300 w-1.5 sm:w-2 hover:bg-slate-400'"
                        ></button>
                    </template>
                </div>
                <div class="flex items-center space-x-1.5">
                    <button @click="prev()" class="w-6 h-6 sm:w-9 sm:h-9 rounded-lg sm:rounded-xl bg-white border border-slate-200 text-slate-600 hover:text-red-900 hover:border-red-900 flex items-center justify-center transition-colors shadow-2xs cursor-pointer">
                        <i class="ph-bold ph-caret-left text-[10px] sm:text-sm"></i>
                    </button>
                    <button @click="next()" class="w-6 h-6 sm:w-9 sm:h-9 rounded-lg sm:rounded-xl bg-white border border-slate-200 text-slate-600 hover:text-red-900 hover:border-red-900 flex items-center justify-center transition-colors shadow-2xs cursor-pointer">
                        <i class="ph-bold ph-caret-right text-[10px] sm:text-sm"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Clean 4-Column Feature Trust Bar (Below Hero Stage - 2x2 Grid on Mobile) -->
        <div class="mt-3 sm:mt-6 grid grid-cols-2 lg:grid-cols-4 gap-2 sm:gap-4">
            <div class="bg-white rounded-lg sm:rounded-2xl p-2 sm:p-5 border border-slate-200/80 shadow-2xs hover:shadow-md transition-all flex items-center space-x-2 sm:space-x-3.5">
                <div class="w-7 h-7 sm:w-11 sm:h-11 rounded-md sm:rounded-xl bg-red-50 text-red-600 border border-red-100 flex items-center justify-center flex-shrink-0">
                    <i class="ph-bold ph-shield-check text-xs sm:text-xl"></i>
                </div>
                <div>
                    <h4 class="text-[11px] sm:text-sm font-bold text-slate-900 leading-tight">Garansi 100%</h4>
                    <p class="text-[10px] sm:text-xs text-slate-500 font-medium hidden sm:block mt-0.5">Jaminan original</p>
                </div>
            </div>

            <div class="bg-white rounded-lg sm:rounded-2xl p-2 sm:p-5 border border-slate-200/80 shadow-2xs hover:shadow-md transition-all flex items-center space-x-2 sm:space-x-3.5">
                <div class="w-7 h-7 sm:w-11 sm:h-11 rounded-md sm:rounded-xl bg-red-50 text-red-600 border border-red-100 flex items-center justify-center flex-shrink-0">
                    <i class="ph-bold ph-truck text-xs sm:text-xl"></i>
                </div>
                <div>
                    <h4 class="text-[11px] sm:text-sm font-bold text-slate-900 leading-tight">Gratis Ongkir</h4>
                    <p class="text-[10px] sm:text-xs text-slate-500 font-medium hidden sm:block mt-0.5">Se-Indonesia</p>
                </div>
            </div>

            <div class="bg-white rounded-lg sm:rounded-2xl p-2 sm:p-5 border border-slate-200/80 shadow-2xs hover:shadow-md transition-all flex items-center space-x-2 sm:space-x-3.5">
                <div class="w-7 h-7 sm:w-11 sm:h-11 rounded-md sm:rounded-xl bg-red-50 text-red-600 border border-red-100 flex items-center justify-center flex-shrink-0">
                    <i class="ph-bold ph-arrows-counter-clockwise text-xs sm:text-xl"></i>
                </div>
                <div>
                    <h4 class="text-[11px] sm:text-sm font-bold text-slate-900 leading-tight">Trade-In</h4>
                    <p class="text-[10px] sm:text-xs text-slate-500 font-medium hidden sm:block mt-0.5">Cashback s/d 2 Juta</p>
                </div>
            </div>

            <div class="bg-white rounded-lg sm:rounded-2xl p-2 sm:p-5 border border-slate-200/80 shadow-2xs hover:shadow-md transition-all flex items-center space-x-2 sm:space-x-3.5">
                <div class="w-7 h-7 sm:w-11 sm:h-11 rounded-md sm:rounded-xl bg-red-50 text-red-600 border border-red-100 flex items-center justify-center flex-shrink-0">
                    <i class="ph-bold ph-credit-card text-xs sm:text-xl"></i>
                </div>
                <div>
                    <h4 class="text-[11px] sm:text-sm font-bold text-slate-900 leading-tight">Cicilan 0%</h4>
                    <p class="text-[10px] sm:text-xs text-slate-500 font-medium hidden sm:block mt-0.5">Mitra bank resmi</p>
                </div>
            </div>
        </div>

    </div>
    
    <!-- Pure Component: Category Drag Carousel with Atmospheric Dark Cards & Pagination -->
    <section 
        x-data="{ 
            isDragging: false,
            startX: 0,
            scrollLeft: 0,
            activePageIndex: 0,
            totalPages: 3,
            startDrag(e) {
                this.isDragging = true;
                this.startX = (e.pageX || e.touches[0].pageX) - this.$refs.slider.offsetLeft;
                this.scrollLeft = this.$refs.slider.scrollLeft;
            },
            stopDrag() {
                this.isDragging = false;
            },
            drag(e) {
                if(!this.isDragging) return;
                e.preventDefault();
                const x = (e.pageX || e.touches[0].pageX) - this.$refs.slider.offsetLeft;
                const walk = (x - this.startX) * 1.5;
                this.$refs.slider.scrollLeft = this.scrollLeft - walk;
                this.updateActivePage();
            },
            onScroll() {
                this.updateActivePage();
            },
            updateActivePage() {
                const el = this.$refs.slider;
                const maxScroll = el.scrollWidth - el.clientWidth;
                if (maxScroll <= 0) {
                    this.activePageIndex = 0;
                    return;
                }
                const progress = el.scrollLeft / maxScroll;
                this.activePageIndex = Math.min(this.totalPages - 1, Math.floor(progress * this.totalPages + 0.3));
            },
            goToPage(page) {
                const el = this.$refs.slider;
                const maxScroll = el.scrollWidth - el.clientWidth;
                const targetScroll = (page / (this.totalPages - 1)) * maxScroll;
                el.scrollTo({ left: targetScroll, behavior: 'smooth' });
                this.activePageIndex = page;
            }
        }"
        class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 py-3 sm:py-6 pb-20 md:pb-6 relative"
    >
        <!-- Header: Title + Top-Right Link -->
        <div class="flex items-center justify-between mb-3 sm:mb-5">
            <div class="flex items-center space-x-1.5 sm:space-x-2">
                <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-red-600"></span>
                <h2 class="text-[11px] sm:text-base font-extrabold uppercase tracking-wider text-slate-400">Kategori Pilihan Dancell</h2>
            </div>
            <a href="#" class="inline-flex items-center text-[11px] sm:text-sm font-extrabold text-red-900 hover:text-red-700 transition-colors group">
                <span>Lihat Semua</span>
                <i class="ph-bold ph-arrow-right ml-1 sm:ml-1.5 text-xs group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>

        <!-- Grab & Scroll Horizontal Category Carousel with Atmospheric Dark Cards (Compact on Mobile) -->
        <div 
            x-ref="slider"
            @scroll="onScroll"
            @mousedown="startDrag"
            @mouseleave="stopDrag"
            @mouseup="stopDrag"
            @mousemove="drag"
            @touchstart="startDrag"
            @touchend="stopDrag"
            @touchmove="drag"
            class="flex space-x-2.5 sm:space-x-5 overflow-x-auto pb-3 pt-1 px-1 scrollbar-none cursor-grab active:cursor-grabbing select-none scroll-smooth"
        >
            
            <!-- Card 1: Smartphone -->
            <a href="#" class="h-32 sm:h-52 min-w-[130px] sm:min-w-[240px] rounded-lg sm:rounded-2xl overflow-hidden relative group cursor-pointer border border-slate-800/80 shadow-md hover:shadow-2xl hover:border-red-500/50 transition-all duration-500 hover:-translate-y-1.5 flex flex-col justify-between p-3 sm:p-5 flex-shrink-0 bg-slate-950">
                <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?q=80&w=600&auto=format&fit=crop" alt="Smartphone" class="absolute inset-0 w-full h-full object-cover opacity-45 group-hover:opacity-70 group-hover:scale-110 transition-all duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/60 to-slate-950/20"></div>

                <div class="relative z-10 flex items-start justify-between">
                    <div class="w-7 h-7 sm:w-10 sm:h-10 rounded-md sm:rounded-xl bg-white/10 backdrop-blur-xl border border-white/20 text-white flex items-center justify-center text-xs sm:text-xl group-hover:bg-red-900 group-hover:border-red-700 transition-all duration-300 shadow-lg">
                        <i class="ph-bold ph-device-mobile"></i>
                    </div>
                    <div class="w-5 h-5 sm:w-8 sm:h-8 rounded-full bg-white/10 backdrop-blur-md border border-white/10 text-white/70 flex items-center justify-center text-[9px] sm:text-xs group-hover:text-white group-hover:bg-red-900 transition-all">
                        <i class="ph-bold ph-arrow-up-right"></i>
                    </div>
                </div>

                <div class="relative z-10">
                    <h3 class="text-xs sm:text-lg font-extrabold text-white tracking-tight group-hover:text-red-400 transition-colors">Smartphone</h3>
                    <p class="text-[9px] sm:text-xs font-semibold text-slate-300/90 mt-0.5">120+ Produk</p>
                </div>
            </a>

            <!-- Card 2: Laptop & PC -->
            <a href="#" class="h-32 sm:h-52 min-w-[130px] sm:min-w-[240px] rounded-lg sm:rounded-2xl overflow-hidden relative group cursor-pointer border border-slate-800/80 shadow-md hover:shadow-2xl hover:border-red-500/50 transition-all duration-500 hover:-translate-y-1.5 flex flex-col justify-between p-3 sm:p-5 flex-shrink-0 bg-slate-950">
                <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?q=80&w=600&auto=format&fit=crop" alt="Laptop & PC" class="absolute inset-0 w-full h-full object-cover opacity-45 group-hover:opacity-70 group-hover:scale-110 transition-all duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/60 to-slate-950/20"></div>

                <div class="relative z-10 flex items-start justify-between">
                    <div class="w-7 h-7 sm:w-10 sm:h-10 rounded-md sm:rounded-xl bg-white/10 backdrop-blur-xl border border-white/20 text-white flex items-center justify-center text-xs sm:text-xl group-hover:bg-red-900 group-hover:border-red-700 transition-all duration-300 shadow-lg">
                        <i class="ph-bold ph-laptop"></i>
                    </div>
                    <div class="w-5 h-5 sm:w-8 sm:h-8 rounded-full bg-white/10 backdrop-blur-md border border-white/10 text-white/70 flex items-center justify-center text-[9px] sm:text-xs group-hover:text-white group-hover:bg-red-900 transition-all">
                        <i class="ph-bold ph-arrow-up-right"></i>
                    </div>
                </div>

                <div class="relative z-10">
                    <h3 class="text-xs sm:text-lg font-extrabold text-white tracking-tight group-hover:text-red-400 transition-colors">Laptop & PC</h3>
                    <p class="text-[9px] sm:text-xs font-semibold text-slate-300/90 mt-0.5">85+ Produk</p>
                </div>
            </a>

            <!-- Card 3: Audio Premium -->
            <a href="#" class="h-32 sm:h-52 min-w-[130px] sm:min-w-[240px] rounded-lg sm:rounded-2xl overflow-hidden relative group cursor-pointer border border-slate-800/80 shadow-md hover:shadow-2xl hover:border-red-500/50 transition-all duration-500 hover:-translate-y-1.5 flex flex-col justify-between p-3 sm:p-5 flex-shrink-0 bg-slate-950">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=600&auto=format&fit=crop" alt="Audio Premium" class="absolute inset-0 w-full h-full object-cover opacity-45 group-hover:opacity-70 group-hover:scale-110 transition-all duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/60 to-slate-950/20"></div>

                <div class="relative z-10 flex items-start justify-between">
                    <div class="w-7 h-7 sm:w-10 sm:h-10 rounded-md sm:rounded-xl bg-white/10 backdrop-blur-xl border border-white/20 text-white flex items-center justify-center text-xs sm:text-xl group-hover:bg-red-900 group-hover:border-red-700 transition-all duration-300 shadow-lg">
                        <i class="ph-bold ph-headphones"></i>
                    </div>
                    <div class="w-5 h-5 sm:w-8 sm:h-8 rounded-full bg-white/10 backdrop-blur-md border border-white/10 text-white/70 flex items-center justify-center text-[9px] sm:text-xs group-hover:text-white group-hover:bg-red-900 transition-all">
                        <i class="ph-bold ph-arrow-up-right"></i>
                    </div>
                </div>

                <div class="relative z-10">
                    <h3 class="text-xs sm:text-lg font-extrabold text-white tracking-tight group-hover:text-red-400 transition-colors">Audio Premium</h3>
                    <p class="text-[9px] sm:text-xs font-semibold text-slate-300/90 mt-0.5">64+ Produk</p>
                </div>
            </a>

            <!-- Card 4: Smartwatch -->
            <a href="#" class="h-32 sm:h-52 min-w-[130px] sm:min-w-[240px] rounded-lg sm:rounded-2xl overflow-hidden relative group cursor-pointer border border-slate-800/80 shadow-md hover:shadow-2xl hover:border-red-500/50 transition-all duration-500 hover:-translate-y-1.5 flex flex-col justify-between p-3 sm:p-5 flex-shrink-0 bg-slate-950">
                <img src="https://images.unsplash.com/photo-1508685096489-7aacd43bd3b1?q=80&w=600&auto=format&fit=crop" alt="Smartwatch" class="absolute inset-0 w-full h-full object-cover opacity-45 group-hover:opacity-70 group-hover:scale-110 transition-all duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/60 to-slate-950/20"></div>

                <div class="relative z-10 flex items-start justify-between">
                    <div class="w-7 h-7 sm:w-10 sm:h-10 rounded-md sm:rounded-xl bg-white/10 backdrop-blur-xl border border-white/20 text-white flex items-center justify-center text-xs sm:text-xl group-hover:bg-red-900 group-hover:border-red-700 transition-all duration-300 shadow-lg">
                        <i class="ph-bold ph-watch"></i>
                    </div>
                    <div class="w-5 h-5 sm:w-8 sm:h-8 rounded-full bg-white/10 backdrop-blur-md border border-white/10 text-white/70 flex items-center justify-center text-[9px] sm:text-xs group-hover:text-white group-hover:bg-red-900 transition-all">
                        <i class="ph-bold ph-arrow-up-right"></i>
                    </div>
                </div>

                <div class="relative z-10">
                    <h3 class="text-xs sm:text-lg font-extrabold text-white tracking-tight group-hover:text-red-400 transition-colors">Smartwatch</h3>
                    <p class="text-[9px] sm:text-xs font-semibold text-slate-300/90 mt-0.5">42+ Produk</p>
                </div>
            </a>

            <!-- Card 5: Tablet & iPad -->
            <a href="#" class="h-32 sm:h-52 min-w-[130px] sm:min-w-[240px] rounded-lg sm:rounded-2xl overflow-hidden relative group cursor-pointer border border-slate-800/80 shadow-md hover:shadow-2xl hover:border-red-500/50 transition-all duration-500 hover:-translate-y-1.5 flex flex-col justify-between p-3 sm:p-5 flex-shrink-0 bg-slate-950">
                <img src="https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?q=80&w=600&auto=format&fit=crop" alt="Tablet & iPad" class="absolute inset-0 w-full h-full object-cover opacity-45 group-hover:opacity-70 group-hover:scale-110 transition-all duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/60 to-slate-950/20"></div>

                <div class="relative z-10 flex items-start justify-between">
                    <div class="w-7 h-7 sm:w-10 sm:h-10 rounded-md sm:rounded-xl bg-white/10 backdrop-blur-xl border border-white/20 text-white flex items-center justify-center text-xs sm:text-xl group-hover:bg-red-900 group-hover:border-red-700 transition-all duration-300 shadow-lg">
                        <i class="ph-bold ph-device-tablet"></i>
                    </div>
                    <div class="w-5 h-5 sm:w-8 sm:h-8 rounded-full bg-white/10 backdrop-blur-md border border-white/10 text-white/70 flex items-center justify-center text-[9px] sm:text-xs group-hover:text-white group-hover:bg-red-900 transition-all">
                        <i class="ph-bold ph-arrow-up-right"></i>
                    </div>
                </div>

                <div class="relative z-10">
                    <h3 class="text-xs sm:text-lg font-extrabold text-white tracking-tight group-hover:text-red-400 transition-colors">Tablet & iPad</h3>
                    <p class="text-[9px] sm:text-xs font-semibold text-slate-300/90 mt-0.5">48+ Produk</p>
                </div>
            </a>

            <!-- Card 6: Kamera & Drone -->
            <a href="#" class="h-32 sm:h-52 min-w-[130px] sm:min-w-[240px] rounded-lg sm:rounded-2xl overflow-hidden relative group cursor-pointer border border-slate-800/80 shadow-md hover:shadow-2xl hover:border-red-500/50 transition-all duration-500 hover:-translate-y-1.5 flex flex-col justify-between p-3 sm:p-5 flex-shrink-0 bg-slate-950">
                <img src="https://images.unsplash.com/photo-1516035069371-29a1b244cc32?q=80&w=600&auto=format&fit=crop" alt="Kamera & Drone" class="absolute inset-0 w-full h-full object-cover opacity-45 group-hover:opacity-70 group-hover:scale-110 transition-all duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/60 to-slate-950/20"></div>

                <div class="relative z-10 flex items-start justify-between">
                    <div class="w-7 h-7 sm:w-10 sm:h-10 rounded-md sm:rounded-xl bg-white/10 backdrop-blur-xl border border-white/20 text-white flex items-center justify-center text-xs sm:text-xl group-hover:bg-red-900 group-hover:border-red-700 transition-all duration-300 shadow-lg">
                        <i class="ph-bold ph-camera"></i>
                    </div>
                    <div class="w-5 h-5 sm:w-8 sm:h-8 rounded-full bg-white/10 backdrop-blur-md border border-white/10 text-white/70 flex items-center justify-center text-[9px] sm:text-xs group-hover:text-white group-hover:bg-red-900 transition-all">
                        <i class="ph-bold ph-arrow-up-right"></i>
                    </div>
                </div>

                <div class="relative z-10">
                    <h3 class="text-xs sm:text-lg font-extrabold text-white tracking-tight group-hover:text-red-400 transition-colors">Kamera & Drone</h3>
                    <p class="text-[9px] sm:text-xs font-semibold text-slate-300/90 mt-0.5">35+ Produk</p>
                </div>
            </a>

            <!-- Card 7: Aksesoris Original -->
            <a href="#" class="h-32 sm:h-52 min-w-[130px] sm:min-w-[240px] rounded-lg sm:rounded-2xl overflow-hidden relative group cursor-pointer border border-slate-800/80 shadow-md hover:shadow-2xl hover:border-red-500/50 transition-all duration-500 hover:-translate-y-1.5 flex flex-col justify-between p-3 sm:p-5 flex-shrink-0 bg-slate-950">
                <img src="https://images.unsplash.com/photo-1625772452859-1c03d5bf1137?q=80&w=600&auto=format&fit=crop" alt="Aksesoris Original" class="absolute inset-0 w-full h-full object-cover opacity-45 group-hover:opacity-70 group-hover:scale-110 transition-all duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/60 to-slate-950/20"></div>

                <div class="relative z-10 flex items-start justify-between">
                    <div class="w-7 h-7 sm:w-10 sm:h-10 rounded-md sm:rounded-xl bg-white/10 backdrop-blur-xl border border-white/20 text-white flex items-center justify-center text-xs sm:text-xl group-hover:bg-red-900 group-hover:border-red-700 transition-all duration-300 shadow-lg">
                        <i class="ph-bold ph-plugs"></i>
                    </div>
                    <div class="w-5 h-5 sm:w-8 sm:h-8 rounded-full bg-white/10 backdrop-blur-md border border-white/10 text-white/70 flex items-center justify-center text-[9px] sm:text-xs group-hover:text-white group-hover:bg-red-900 transition-all">
                        <i class="ph-bold ph-arrow-up-right"></i>
                    </div>
                </div>

                <div class="relative z-10">
                    <h3 class="text-xs sm:text-lg font-extrabold text-white tracking-tight group-hover:text-red-400 transition-colors">Aksesoris Original</h3>
                    <p class="text-[9px] sm:text-xs font-semibold text-slate-300/90 mt-0.5">150+ Produk</p>
                </div>
            </a>

            <!-- Card 8: Gaming Gear -->
            <a href="#" class="h-32 sm:h-52 min-w-[130px] sm:min-w-[240px] rounded-lg sm:rounded-2xl overflow-hidden relative group cursor-pointer border border-slate-800/80 shadow-md hover:shadow-2xl hover:border-red-500/50 transition-all duration-500 hover:-translate-y-1.5 flex flex-col justify-between p-3 sm:p-5 flex-shrink-0 bg-slate-950">
                <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=600&auto=format&fit=crop" alt="Gaming Gear" class="absolute inset-0 w-full h-full object-cover opacity-45 group-hover:opacity-70 group-hover:scale-110 transition-all duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/60 to-slate-950/20"></div>

                <div class="relative z-10 flex items-start justify-between">
                    <div class="w-7 h-7 sm:w-10 sm:h-10 rounded-md sm:rounded-xl bg-white/10 backdrop-blur-xl border border-white/20 text-white flex items-center justify-center text-xs sm:text-xl group-hover:bg-red-900 group-hover:border-red-700 transition-all duration-300 shadow-lg">
                        <i class="ph-bold ph-game-controller"></i>
                    </div>
                    <div class="w-5 h-5 sm:w-8 sm:h-8 rounded-full bg-white/10 backdrop-blur-md border border-white/10 text-white/70 flex items-center justify-center text-[9px] sm:text-xs group-hover:text-white group-hover:bg-red-900 transition-all">
                        <i class="ph-bold ph-arrow-up-right"></i>
                    </div>
                </div>

                <div class="relative z-10">
                    <h3 class="text-xs sm:text-lg font-extrabold text-white tracking-tight group-hover:text-red-400 transition-colors">Gaming Gear</h3>
                    <p class="text-[9px] sm:text-xs font-semibold text-slate-300/90 mt-0.5">30+ Produk</p>
                </div>
            </a>

            <!-- Card 9: Smart Home & IoT -->
            <a href="#" class="h-32 sm:h-52 min-w-[130px] sm:min-w-[240px] rounded-lg sm:rounded-2xl overflow-hidden relative group cursor-pointer border border-slate-800/80 shadow-md hover:shadow-2xl hover:border-red-500/50 transition-all duration-500 hover:-translate-y-1.5 flex flex-col justify-between p-3 sm:p-5 flex-shrink-0 bg-slate-950">
                <img src="https://images.unsplash.com/photo-1558002038-1055907df827?q=80&w=600&auto=format&fit=crop" alt="Smart Home & IoT" class="absolute inset-0 w-full h-full object-cover opacity-45 group-hover:opacity-70 group-hover:scale-110 transition-all duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/60 to-slate-950/20"></div>

                <div class="relative z-10 flex items-start justify-between">
                    <div class="w-7 h-7 sm:w-10 sm:h-10 rounded-md sm:rounded-xl bg-white/10 backdrop-blur-xl border border-white/20 text-white flex items-center justify-center text-xs sm:text-xl group-hover:bg-red-900 group-hover:border-red-700 transition-all duration-300 shadow-lg">
                        <i class="ph-bold ph-house-line"></i>
                    </div>
                    <div class="w-5 h-5 sm:w-8 sm:h-8 rounded-full bg-white/10 backdrop-blur-md border border-white/10 text-white/70 flex items-center justify-center text-[9px] sm:text-xs group-hover:text-white group-hover:bg-red-900 transition-all">
                        <i class="ph-bold ph-arrow-up-right"></i>
                    </div>
                </div>

                <div class="relative z-10">
                    <h3 class="text-xs sm:text-lg font-extrabold text-white tracking-tight group-hover:text-red-400 transition-colors">Smart Home & IoT</h3>
                    <p class="text-[9px] sm:text-xs font-semibold text-slate-300/90 mt-0.5">55+ Produk</p>
                </div>
            </a>

        </div>

        <!-- Pagination Bar Below Carousel -->
        <div class="flex items-center justify-center space-x-1.5 mt-3">
            <template x-for="(page, index) in totalPages" :key="index">
                <button 
                    @click="goToPage(index)" 
                    :class="activePageIndex === index ? 'w-6 bg-red-900' : 'w-2 bg-slate-200 hover:bg-slate-300'" 
                    class="h-2 rounded-full transition-all duration-300 cursor-pointer"
                    :title="'Halaman ' + (index + 1)"
                ></button>
            </template>
        </div>
    </section>

    <!-- Clean & Elegant Fixed Mobile Bottom Navigation Bar -->
    <div class="fixed bottom-0 inset-x-0 bg-white/95 backdrop-blur-2xl border-t border-slate-200/90 z-50 flex items-center justify-around py-1.5 px-1 shadow-[0_-5px_20px_rgba(0,0,0,0.06)] md:hidden">
        <a href="#" class="flex flex-col items-center justify-center text-red-900 font-extrabold text-[9px] py-1 px-2.5 rounded-lg bg-red-50">
            <i class="ph-light ph-house text-xl mb-0.5"></i>
            <span>Beranda</span>
        </a>
        <button @click="isMobileMenuOpen = true" class="flex flex-col items-center justify-center text-slate-500 hover:text-red-900 font-semibold text-[9px] py-1 px-2.5 rounded-lg transition-colors cursor-pointer">
            <i class="ph-light ph-squares-four text-xl mb-0.5"></i>
            <span>Kategori</span>
        </button>
        <a href="#" class="flex flex-col items-center justify-center text-slate-500 hover:text-red-900 font-semibold text-[9px] py-1 px-2.5 rounded-lg transition-colors">
            <div class="w-6 h-6 rounded-full bg-yellow-400 text-red-950 flex items-center justify-center shadow-xs -mt-1 mb-0.5">
                <i class="ph-light ph-arrows-counter-clockwise text-xs font-bold"></i>
            </div>
            <span>Trade-In</span>
        </a>
        <button @click="isNotificationOpen = !isNotificationOpen" class="flex flex-col items-center justify-center text-slate-500 hover:text-red-900 font-semibold text-[9px] py-1 px-2.5 rounded-lg transition-colors cursor-pointer relative">
            <i class="ph-light ph-bell text-xl mb-0.5"></i>
            <span class="absolute top-1 right-2.5 w-1.5 h-1.5 bg-yellow-400 rounded-full border border-white"></span>
            <span>Notifikasi</span>
        </button>
        <button @click="isMobileMenuOpen = true" class="flex flex-col items-center justify-center text-slate-500 hover:text-red-900 font-semibold text-[9px] py-1 px-2.5 rounded-lg transition-colors cursor-pointer">
            <i class="ph-light ph-user text-xl mb-0.5"></i>
            <span>Akun</span>
        </button>
    </div>

</div>
