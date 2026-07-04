<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div x-data="{ isNotificationOpen: false }" class="min-h-screen bg-slate-50 text-slate-800 font-sans selection:bg-red-500 selection:text-white">
    <!-- Header/Navbar Group -->
    <header class="sticky top-0 z-50 w-full transition-all duration-300">
        <!-- Top Utility Bar -->
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

        <!-- Main Navbar -->
        <div class="bg-gradient-to-r from-red-700 to-red-900 shadow-md">
            <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-20 gap-8">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center cursor-pointer hover:opacity-90 transition-opacity">
                        <span class="text-3xl font-black tracking-tight text-white">Dan<span class="text-yellow-400">cell</span></span>
                    </div>

                    <!-- Prominent Search Bar (Center) -->
                    <div class="flex-1 max-w-3xl hidden md:flex items-center group">
                        <div class="relative w-full flex shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="ph-bold ph-magnifying-glass text-slate-400 text-xl group-focus-within:text-red-900 transition-colors"></i>
                            </div>
                            <input type="text" placeholder="Cari iPhone 15 Pro, Smartwatch, atau Aksesoris..." class="w-full pl-12 pr-32 py-3 bg-white border-transparent rounded-lg text-sm focus:ring-4 focus:ring-red-950/20 transition-all outline-none text-slate-800 placeholder-slate-400">
                            <button class="absolute right-1 top-1 bottom-1 bg-red-950 hover:bg-slate-900 text-white px-6 rounded-md font-semibold text-sm transition-colors">
                                Cari
                            </button>
                        </div>
                    </div>

                    <!-- Right Actions (Icons) -->
                    <div class="flex items-center space-x-1 sm:space-x-3 flex-shrink-0">
                        <!-- Notification -->
                        <button @click="isNotificationOpen = true" class="relative p-2.5 text-red-100 hover:text-white hover:bg-red-800 rounded-lg transition-all">
                            <i class="ph-bold ph-bell text-2xl"></i>
                            <span class="absolute top-1.5 right-2 w-2.5 h-2.5 bg-yellow-400 rounded-full border-2 border-red-900"></span>
                        </button>
                        
                        <!-- Cart -->
                        <button class="relative p-2.5 text-red-100 hover:text-white hover:bg-red-800 rounded-lg transition-all">
                            <i class="ph-bold ph-shopping-cart text-2xl"></i>
                            <span class="absolute top-0 right-0 w-5 h-5 bg-yellow-400 text-[10px] font-bold text-red-950 flex items-center justify-center rounded-full border-2 border-red-900 shadow-sm">2</span>
                        </button>

                        <div class="h-8 w-px bg-red-800 mx-2 hidden sm:block"></div>
                        
                        <!-- User Profile / Login -->
                        <button class="hidden sm:flex items-center space-x-3 p-1.5 pr-4 rounded-xl border border-red-800 hover:border-red-700 hover:bg-red-800 transition-all bg-red-950/50">
                            <img src="https://ui-avatars.com/api/?name=User&background=ffffff&color=7f1d1d" alt="User" class="w-8 h-8 rounded-lg border border-red-800">
                            <div class="text-left">
                                <p class="text-[10px] text-red-300 font-medium leading-none mb-0.5">Hello, User</p>
                                <p class="text-xs font-bold text-white leading-none">Akun Saya</p>
                            </div>
                            <i class="ph-bold ph-caret-down text-red-300 text-xs ml-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sub-Navbar (Categories) -->
            <div class="border-t border-red-800 bg-gradient-to-r from-red-700 to-red-900 hidden md:block">
                <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex space-x-8 h-12 items-center relative">
                        <!-- Mega Menu Wrapper -->
                        <div class="group h-full flex items-center">
                            <button class="flex items-center space-x-2 text-sm font-bold text-white group-hover:text-yellow-400 transition-colors h-full">
                                <i class="ph-bold ph-list text-lg"></i>
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
    </header>

    <!-- Hero Slider -->
    <div 
        x-data="{ 
            activeSlide: 0,
            slides: [
                { id: 1, title: 'iPhone 15 Pro Max', subtitle: 'Titanium. So strong. So light. So Pro.', image: '/images/slider-1.png', color: 'from-slate-50 to-white', price: 'Rp 22.999.000', originalPrice: 'Rp 24.999.000', rating: '4.9', reviews: '2.5k', specs: ['Titanium Frame', 'A17 Pro Chip', '48MP Camera'] },
                { id: 2, title: 'Sony WH-1000XM5', subtitle: 'Your world. Nothing else. Industry-leading noise cancellation.', image: '/images/slider-2.png', color: 'from-red-50 to-white', price: 'Rp 5.999.000', originalPrice: 'Rp 6.499.000', rating: '4.8', reviews: '1.1k', specs: ['Hi-Res Audio', '30 Hours Battery', 'Multipoint'] },
                { id: 3, title: 'Apple Watch Ultra 2', subtitle: 'Next level adventure. Now in striking red.', image: '/images/slider-3.png', color: 'from-slate-100 to-white', price: 'Rp 13.999.000', originalPrice: 'Rp 15.999.000', rating: '5.0', reviews: '942', specs: ['S9 SiP', 'Titanium Case', '100m Water Resistant'] }
            ],
            interval: null,
            isDragging: false,
            startX: 0,
            dragThreshold: 50,
            init() {
                this.startAutoPlay();
                this.animateCurrentSlide();
            },
            startAutoPlay() {
                this.interval = setInterval(() => { this.next() }, 6000);
            },
            stopAutoPlay() {
                clearInterval(this.interval);
            },
            next() {
                this.activeSlide = (this.activeSlide === this.slides.length - 1) ? 0 : this.activeSlide + 1;
                this.animateCurrentSlide();
            },
            prev() {
                this.activeSlide = (this.activeSlide === 0) ? this.slides.length - 1 : this.activeSlide - 1;
                this.animateCurrentSlide();
            },
            setSlide(index) {
                this.activeSlide = index;
                this.animateCurrentSlide();
                this.stopAutoPlay();
                this.startAutoPlay();
            },
            animateCurrentSlide() {
                // Handled natively by x-transition
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
        class="relative w-full h-[600px] md:h-[700px] overflow-hidden bg-white cursor-grab active:cursor-grabbing select-none"
        @mousedown="startDrag"
        @mouseup="endDrag"
        @mouseleave="endDrag"
        @touchstart="startDrag"
        @touchend="endDrag"
    >
        <!-- Slides -->
        <template x-for="(slide, index) in slides" :key="slide.id">
            <div 
                x-show="activeSlide === index"
                x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-300 absolute inset-0"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute inset-0 w-full h-full"
                :class="'bg-gradient-to-br ' + slide.color"
            >
                <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center w-full">
                        <!-- Text Content -->
                        <div class="slide-content z-10 mt-12 md:mt-0 select-none">
                            <div class="flex items-center space-x-3 mb-5">
                                <span class="inline-block py-1.5 px-4 rounded-md bg-red-900 text-white text-xs font-bold tracking-widest uppercase shadow-sm">
                                    <span x-text="slide.id === 1 ? '🔥 Flash Sale' : 'New Arrival'"></span>
                                </span>
                                <div class="flex items-center space-x-1 text-sm font-semibold text-slate-700">
                                    <i class="ph-fill ph-star text-yellow-500 text-base"></i>
                                    <span x-text="slide.rating"></span>
                                    <span class="text-slate-400 font-normal" x-text="'(' + slide.reviews + ' Reviews)'"></span>
                                </div>
                            </div>

                            <h1 x-text="slide.title" class="text-5xl md:text-6xl lg:text-7xl font-black text-slate-900 tracking-tight leading-[1.05] mb-4 drop-shadow-sm"></h1>
                            <p x-text="slide.subtitle" class="text-lg md:text-xl text-slate-600 mb-6 max-w-xl leading-relaxed font-medium"></p>
                            
                            <!-- Specs / Features -->
                            <div class="flex flex-wrap gap-2 mb-8">
                                <template x-for="spec in slide.specs">
                                    <span class="flex items-center px-3 py-1.5 bg-slate-100 border border-slate-200 text-slate-700 text-xs font-semibold rounded-lg">
                                        <i class="ph-bold ph-check-circle text-green-500 mr-1.5 text-sm"></i>
                                        <span x-text="spec"></span>
                                    </span>
                                </template>
                            </div>

                            <!-- Pricing -->
                            <div class="mb-8 flex items-end space-x-4">
                                <span class="text-3xl md:text-4xl font-extrabold text-red-900" x-text="slide.price"></span>
                                <span class="text-lg text-slate-400 line-through font-medium mb-1" x-text="slide.originalPrice"></span>
                            </div>
                            
                            <div class="flex flex-wrap gap-4 select-none">
                                <button class="px-8 py-4 bg-red-900 hover:bg-red-950 text-white rounded-lg font-bold shadow-xl shadow-red-900/30 transition-all hover:-translate-y-1 flex items-center group">
                                    <i class="ph-bold ph-shopping-bag mr-2 text-xl"></i>
                                    Beli Sekarang
                                </button>
                                <button class="px-8 py-4 bg-white text-slate-700 hover:text-red-900 rounded-lg font-bold border border-slate-200 hover:border-red-900 transition-all shadow-sm">
                                    Lihat Detail
                                </button>
                            </div>
                        </div>

                        <!-- Image Content -->
                        <div class="relative h-full flex justify-center items-center pointer-events-none select-none">
                            <!-- Decorative blur blob -->
                            <div class="absolute w-72 h-72 md:w-[28rem] md:h-[28rem] bg-red-400/10 rounded-full blur-3xl filter mix-blend-multiply"></div>
                            
                            <img :src="slide.image" :alt="slide.title" draggable="false" class="slide-img relative z-10 max-h-[350px] md:max-h-[550px] w-auto drop-shadow-2xl object-contain hover:scale-105 transition-transform duration-700">
                        </div>
                    </div>
                </div>
            </div>
        </template>
        
        <!-- Indicators -->
        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex space-x-3 z-20">
            <template x-for="(slide, index) in slides" :key="slide.id">
                <button 
                    @click="setSlide(index)"
                    class="w-3 h-3 rounded-full transition-all duration-300 shadow-sm border border-black/10"
                    :class="activeSlide === index ? 'bg-red-900 w-8' : 'bg-slate-300 hover:bg-red-400'"
                ></button>
            </template>
        </div>
    </div>
    
    <!-- Rest of the e-commerce structure placeholder -->
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <h2 class="text-2xl font-bold text-slate-900 mb-8">Kategori Populer</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="h-40 bg-white rounded-2xl shadow-sm border border-slate-100 flex flex-col items-center justify-center hover:border-red-200 hover:shadow-md cursor-pointer transition-all hover:-translate-y-1">
                 <div class="w-16 h-16 bg-red-50 rounded-xl flex items-center justify-center mb-3">
                     <i class="ph-duotone ph-device-mobile text-4xl text-red-600"></i>
                 </div>
                 <span class="font-semibold text-slate-700">Smartphone</span>
            </div>
            <!-- More categories... -->
            <div class="h-40 bg-white rounded-2xl shadow-sm border border-slate-100 flex flex-col items-center justify-center hover:border-red-200 hover:shadow-md cursor-pointer transition-all hover:-translate-y-1">
                 <div class="w-16 h-16 bg-red-50 rounded-xl flex items-center justify-center mb-3">
                     <i class="ph-duotone ph-headphones text-4xl text-red-600"></i>
                 </div>
                 <span class="font-semibold text-slate-700">Audio</span>
            </div>
            <div class="h-40 bg-white rounded-2xl shadow-sm border border-slate-100 flex flex-col items-center justify-center hover:border-red-200 hover:shadow-md cursor-pointer transition-all hover:-translate-y-1">
                 <div class="w-16 h-16 bg-red-50 rounded-xl flex items-center justify-center mb-3">
                     <i class="ph-duotone ph-watch text-4xl text-red-600"></i>
                 </div>
                 <span class="font-semibold text-slate-700">Wearables</span>
            </div>
            <div class="h-40 bg-white rounded-2xl shadow-sm border border-slate-100 flex flex-col items-center justify-center hover:border-red-200 hover:shadow-md cursor-pointer transition-all hover:-translate-y-1">
                 <div class="w-16 h-16 bg-red-50 rounded-xl flex items-center justify-center mb-3">
                     <i class="ph-duotone ph-plugs text-4xl text-red-600"></i>
                 </div>
                 <span class="font-semibold text-slate-700">Accessories</span>
            </div>
        </div>
    </div>

    <!-- Notification Sidebar Overlay & Panel -->
    <div x-show="isNotificationOpen" class="relative z-[100]" aria-labelledby="slide-over-title" role="dialog" aria-modal="true" style="display: none;">
        <!-- Background backdrop -->
        <div 
            x-show="isNotificationOpen"
            x-transition:enter="ease-in-out duration-500"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in-out duration-500"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-slate-900/30 backdrop-blur-sm transition-opacity"
            @click="isNotificationOpen = false"
        ></div>

        <div class="fixed inset-0 overflow-hidden pointer-events-none">
            <div class="absolute inset-0 overflow-hidden">
                <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                    <!-- Slide-over panel -->
                    <div 
                        x-show="isNotificationOpen"
                        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                        x-transition:enter-start="translate-x-full"
                        x-transition:enter-end="translate-x-0"
                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                        x-transition:leave-start="translate-x-0"
                        x-transition:leave-end="translate-x-full"
                        class="pointer-events-auto w-screen max-w-md"
                        @click.outside="isNotificationOpen = false"
                    >
                        <!-- Ultra-premium frosted glass sidebar with custom slim scrollbar -->
                        <div class="flex h-full flex-col overflow-y-scroll bg-white/60 backdrop-blur-3xl shadow-[-20px_0_60px_-15px_rgba(0,0,0,0.1)] border-l border-white/80 [&::-webkit-scrollbar]:w-1.5 [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar-thumb]:bg-slate-300/50 [&::-webkit-scrollbar-thumb]:rounded-full hover:[&::-webkit-scrollbar-thumb]:bg-slate-400/80">
                            
                            <!-- Sidebar Header (Glassy) -->
                            <div class="px-6 py-6 border-b border-white/60 flex items-center justify-between sticky top-0 z-20 bg-white/40 backdrop-blur-2xl shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)]">
                                <div class="flex items-center space-x-3">
                                    <div class="relative flex items-center justify-center w-10 h-10 rounded-xl bg-gradient-to-br from-red-500 to-red-700 shadow-lg shadow-red-500/20 ring-1 ring-white/50">
                                        <i class="ph-bold ph-bell-ringing text-white text-xl"></i>
                                    </div>
                                    <h2 class="text-2xl font-black text-transparent bg-clip-text bg-gradient-to-r from-slate-900 to-slate-600" id="slide-over-title">
                                        Notifikasi
                                    </h2>
                                    <span class="bg-red-500 text-white text-[10px] uppercase tracking-wider px-2 py-0.5 rounded-md font-bold shadow-sm ring-1 ring-white/30">2 Baru</span>
                                </div>
                                <button @click="isNotificationOpen = false" type="button" class="rounded-full p-2.5 text-slate-400 bg-white/50 hover:bg-white hover:text-red-600 hover:rotate-90 hover:shadow-md transition-all duration-300 focus:outline-none ring-1 ring-white/50">
                                    <span class="sr-only">Close panel</span>
                                    <i class="ph-bold ph-x text-xl"></i>
                                </button>
                            </div>

                            <!-- Sidebar Content -->
                            <div class="flex-1 px-4 py-6 sm:px-6 relative z-10">
                                <!-- Notification List -->
                                <ul role="list" class="space-y-4">
                                    <!-- Unread Notification 1 -->
                                    <li class="relative p-5 rounded-2xl bg-gradient-to-br from-white/90 to-white/50 backdrop-blur-md border border-white hover:shadow-[0_8px_30px_rgb(0,0,0,0.06)] hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                                        <div class="absolute inset-0 bg-gradient-to-br from-red-50/50 to-transparent opacity-0 group-hover:opacity-100 rounded-2xl transition-opacity duration-300"></div>
                                        <div class="flex space-x-4 relative z-10">
                                            <div class="flex-shrink-0">
                                                <div class="h-12 w-12 rounded-xl bg-white/80 backdrop-blur-sm flex items-center justify-center border border-white shadow-sm group-hover:scale-110 group-hover:rotate-6 group-hover:bg-red-500 group-hover:border-red-500 group-hover:text-white group-hover:shadow-red-500/30 text-red-500 transition-all duration-300">
                                                    <i class="ph-fill ph-ticket text-2xl"></i>
                                                </div>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <div class="flex justify-between items-start mb-1">
                                                    <p class="text-sm font-bold text-slate-900 group-hover:text-red-700 transition-colors">Cashback s/d 1 Juta! 💸</p>
                                                    <div class="relative flex h-3 w-3 mt-1">
                                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                                                        <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500 shadow-[0_0_10px_rgba(239,68,68,0.8)]"></span>
                                                    </div>
                                                </div>
                                                <p class="text-sm text-slate-600 leading-relaxed mt-1">Promo gajian khusus buat kamu, tukar tambah sekarang sebelum kehabisan!</p>
                                                <p class="text-xs text-red-500/80 mt-3 font-semibold flex items-center"><i class="ph-fill ph-clock mr-1"></i> Baru saja</p>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- Unread Notification 2 -->
                                    <li class="relative p-5 rounded-2xl bg-gradient-to-br from-white/90 to-white/50 backdrop-blur-md border border-white hover:shadow-[0_8px_30px_rgb(0,0,0,0.06)] hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                                        <div class="absolute inset-0 bg-gradient-to-br from-blue-50/50 to-transparent opacity-0 group-hover:opacity-100 rounded-2xl transition-opacity duration-300"></div>
                                        <div class="flex space-x-4 relative z-10">
                                            <div class="flex-shrink-0">
                                                <div class="h-12 w-12 rounded-xl bg-white/80 backdrop-blur-sm flex items-center justify-center border border-white shadow-sm group-hover:scale-110 group-hover:-rotate-6 group-hover:bg-blue-500 group-hover:border-blue-500 group-hover:text-white group-hover:shadow-blue-500/30 text-blue-500 transition-all duration-300">
                                                    <i class="ph-fill ph-package text-2xl"></i>
                                                </div>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <div class="flex justify-between items-start mb-1">
                                                    <p class="text-sm font-bold text-slate-900 group-hover:text-blue-700 transition-colors">Pesanan Dikirim 🚚</p>
                                                    <div class="relative flex h-3 w-3 mt-1">
                                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                                                        <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500 shadow-[0_0_10px_rgba(59,130,246,0.8)]"></span>
                                                    </div>
                                                </div>
                                                <p class="text-sm text-slate-600 leading-relaxed mt-1">Hore! Pesanan iPhone 15 Pro Max kamu sedang dalam perjalanan ke alamatmu.</p>
                                                <p class="text-xs text-blue-500/80 mt-3 font-semibold flex items-center"><i class="ph-fill ph-clock mr-1"></i> 2 jam yang lalu</p>
                                            </div>
                                        </div>
                                    </li>

                                    <div class="py-4 flex items-center text-[10px] text-slate-400 uppercase tracking-[0.2em] font-bold">
                                        <div class="h-px bg-slate-300/40 flex-1"></div>
                                        <span class="px-4">Telah Dibaca</span>
                                        <div class="h-px bg-slate-300/40 flex-1"></div>
                                    </div>

                                    <!-- Read Notification 1 -->
                                    <li class="relative p-5 rounded-2xl bg-white/40 backdrop-blur-sm border border-white/60 hover:bg-white/80 hover:border-white hover:shadow-lg hover:-translate-y-1 transition-all duration-300 cursor-pointer group">
                                        <div class="flex space-x-4 opacity-60 group-hover:opacity-100 transition-opacity">
                                            <div class="flex-shrink-0">
                                                <div class="h-12 w-12 rounded-xl bg-slate-100/80 backdrop-blur-sm flex items-center justify-center border border-white text-slate-400 group-hover:bg-emerald-500 group-hover:text-white group-hover:border-emerald-500 group-hover:shadow-emerald-500/30 group-hover:scale-110 transition-all duration-300">
                                                    <i class="ph-fill ph-check-circle text-2xl"></i>
                                                </div>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm font-bold text-slate-700 group-hover:text-emerald-700 transition-colors">Pembayaran Berhasil</p>
                                                <p class="text-sm text-slate-500 mt-1 leading-relaxed">Pembayaran pesanan #INV-20260704 telah kami terima dan sedang diproses.</p>
                                                <p class="text-xs text-slate-400 mt-3 font-medium flex items-center"><i class="ph-fill ph-calendar mr-1 text-slate-300"></i> Kemarin, 14:30</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                            <!-- Sidebar Footer (Sticky) -->
                            <div class="p-6 border-t border-white/60 bg-white/40 backdrop-blur-2xl sticky bottom-0 z-20 shadow-[0_-4px_20px_-10px_rgba(0,0,0,0.05)]">
                                <button class="w-full py-3.5 bg-slate-900/90 hover:bg-slate-900 text-white font-bold rounded-xl transition-all duration-300 shadow-lg shadow-slate-900/20 hover:shadow-slate-900/40 hover:-translate-y-0.5 flex items-center justify-center space-x-2 ring-1 ring-white/20 backdrop-blur-md">
                                    <i class="ph-bold ph-checks text-lg"></i>
                                    <span>Tandai Semua Sudah Dibaca</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
