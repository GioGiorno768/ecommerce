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

    <!-- Mobile Navbar (Eraspace Style) -->
    <div class="block md:hidden bg-gradient-to-r from-red-700 to-red-900 shadow-md">
        <div class="px-4 py-2.5 flex items-center justify-between gap-3">
            <!-- Search Input Box -->
            <div class="flex-1 relative shadow-xs">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="ph-bold ph-magnifying-glass text-slate-400 text-base"></i>
                </div>
                <input type="text" placeholder="Cari di Dancell..." class="w-full pl-9 pr-4 py-1.5 bg-white rounded-lg text-xs outline-none text-slate-800 placeholder-slate-400 border border-slate-200">
            </div>
            
            <!-- Bell and Cart Icons -->
            <div class="flex items-center space-x-3 text-white">
                <button @click="isNotificationOpen = !isNotificationOpen" class="relative p-1 focus:outline-none cursor-pointer">
                    <i class="ph-light ph-bell text-2xl"></i>
                    <span class="absolute top-0.5 right-0.5 w-2.5 h-2.5 bg-yellow-400 rounded-full border border-red-800 shadow-xs animate-pulse"></span>
                </button>
                <button class="relative p-1 focus:outline-none cursor-pointer">
                    <i class="ph-light ph-shopping-cart text-2xl"></i>
                    <span class="absolute top-0 right-0 w-4 h-4 bg-yellow-400 text-[9px] font-bold text-red-950 flex items-center justify-center rounded-full border border-red-900 shadow-xs">2</span>
                </button>
            </div>
        </div>
        
        <!-- Location Sub-Header -->
        <div class="bg-red-950 text-white text-[10px] py-1.5 px-4 flex items-center gap-1.5 font-bold">
            <i class="ph-fill ph-storefront text-yellow-400 text-xs"></i>
            <span>Aktifkan Lokasimu Untuk Melihat Toko Terdekat</span>
        </div>
    </div>

    <!-- Main Navbar (Desktop Only) -->
    <div class="hidden md:block bg-gradient-to-r from-red-700 to-red-900 shadow-md">
        <div class="max-w-screen-2xl mx-auto px-3 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 gap-6">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center cursor-pointer hover:opacity-90 transition-opacity">
                    <span class="text-2xl font-black tracking-tight text-white">Dan<span class="text-yellow-400">cell</span></span>
                </div>

                <!-- Prominent Search Bar (Center Desktop) -->
                <div class="flex-1 max-w-2xl flex items-center group">
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
                <div class="flex items-center space-x-2 flex-shrink-0">
                    
                    <!-- Notification Dropdown Container -->
                    <div class="relative">
                        <button @click="isNotificationOpen = !isNotificationOpen" class="relative p-2 text-red-100 hover:text-white hover:bg-red-800 rounded-lg transition-all focus:outline-none cursor-pointer">
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
                            class="absolute right-0 mt-3 w-96 bg-white/95 backdrop-blur-2xl rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.15)] border border-slate-100 overflow-hidden z-50 origin-top-right text-slate-800"
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
                    <button class="relative p-2 text-red-100 hover:text-white hover:bg-red-800 rounded-lg transition-all cursor-pointer">
                        <i class="ph-light ph-shopping-cart text-2xl"></i>
                        <span class="absolute top-0 right-0 w-4 h-4 bg-yellow-400 text-[9px] font-bold text-red-950 flex items-center justify-center rounded-full border border-red-900 shadow-xs">2</span>
                    </button>

                    <div class="h-6 w-px bg-red-800 mx-1.5"></div>
                    
                    <!-- User Profile / Login -->
                    <button class="flex items-center space-x-2.5 p-1 pr-3 rounded-xl border border-red-800 hover:border-red-700 hover:bg-red-800 transition-all bg-red-950/50 cursor-pointer">
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

    <!-- Full Mobile Slide-Over Drawer Menu Component (Moved to page root level) -->
</header>
