<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="min-h-screen bg-slate-50 text-slate-800 font-sans selection:bg-red-500 selection:text-white">
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
                            <input type="text" placeholder="Cari iPhone 15 Pro, Smartwatch, atau Aksesoris..." class="w-full pl-12 pr-32 py-3 bg-white border-transparent rounded-full text-sm focus:ring-4 focus:ring-red-950/20 transition-all outline-none text-slate-800 placeholder-slate-400">
                            <button class="absolute right-1 top-1 bottom-1 bg-red-950 hover:bg-slate-900 text-white px-6 rounded-full font-semibold text-sm transition-colors">
                                Cari
                            </button>
                        </div>
                    </div>

                    <!-- Right Actions (Icons) -->
                    <div class="flex items-center space-x-1 sm:space-x-3 flex-shrink-0">
                        <!-- Notification -->
                        <button class="relative p-2.5 text-red-100 hover:text-white hover:bg-red-800 rounded-full transition-all">
                            <i class="ph-bold ph-bell text-2xl"></i>
                            <span class="absolute top-1.5 right-2 w-2.5 h-2.5 bg-yellow-400 rounded-full border-2 border-red-900"></span>
                        </button>
                        
                        <!-- Cart -->
                        <button class="relative p-2.5 text-red-100 hover:text-white hover:bg-red-800 rounded-full transition-all">
                            <i class="ph-bold ph-shopping-cart text-2xl"></i>
                            <span class="absolute top-0 right-0 w-5 h-5 bg-yellow-400 text-[10px] font-bold text-red-950 flex items-center justify-center rounded-full border-2 border-red-900 shadow-sm">2</span>
                        </button>

                        <div class="h-8 w-px bg-red-800 mx-2 hidden sm:block"></div>
                        
                        <!-- User Profile / Login -->
                        <button class="hidden sm:flex items-center space-x-3 p-1.5 pr-4 rounded-full border border-red-800 hover:border-red-700 hover:bg-red-800 transition-all bg-red-950/50">
                            <img src="https://ui-avatars.com/api/?name=User&background=ffffff&color=7f1d1d" alt="User" class="w-8 h-8 rounded-full border border-red-800">
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
                    <div class="flex space-x-8 h-12 items-center">
                        <button class="flex items-center space-x-2 text-sm font-bold text-white hover:text-red-200 transition-colors">
                            <i class="ph-bold ph-list text-lg"></i>
                            <span>Semua Kategori</span>
                        </button>
                        <div class="h-4 w-px bg-red-800"></div>
                        <a href="#" class="text-sm font-semibold text-red-100 hover:text-white transition-colors">Produk Terlaris</a>
                        <a href="#" class="text-sm font-semibold text-red-100 hover:text-white transition-colors">Produk Unggulan</a>
                        <div class="flex-1"></div>
                        <a href="#" class="text-sm font-bold text-red-950 hover:text-black transition-colors flex items-center bg-yellow-400 hover:bg-yellow-300 px-4 py-1.5 rounded-full shadow-sm">
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
                                <span class="inline-block py-1.5 px-4 rounded-full bg-red-900 text-white text-xs font-bold tracking-widest uppercase shadow-sm">
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
                                <button class="px-8 py-4 bg-red-900 hover:bg-red-950 text-white rounded-xl font-bold shadow-xl shadow-red-900/30 transition-all hover:-translate-y-1 flex items-center group">
                                    <i class="ph-bold ph-shopping-bag mr-2 text-xl"></i>
                                    Beli Sekarang
                                </button>
                                <button class="px-8 py-4 bg-white text-slate-700 hover:text-red-900 rounded-xl font-bold border border-slate-200 hover:border-red-900 transition-all shadow-sm">
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
            <div class="h-40 bg-white rounded-3xl shadow-sm border border-slate-100 flex flex-col items-center justify-center hover:border-red-200 hover:shadow-md cursor-pointer transition-all hover:-translate-y-1">
                 <div class="w-16 h-16 bg-red-50 rounded-full flex items-center justify-center mb-3">
                     <i class="ph-duotone ph-device-mobile text-4xl text-red-600"></i>
                 </div>
                 <span class="font-semibold text-slate-700">Smartphone</span>
            </div>
            <!-- More categories... -->
            <div class="h-40 bg-white rounded-3xl shadow-sm border border-slate-100 flex flex-col items-center justify-center hover:border-red-200 hover:shadow-md cursor-pointer transition-all hover:-translate-y-1">
                 <div class="w-16 h-16 bg-red-50 rounded-full flex items-center justify-center mb-3">
                     <i class="ph-duotone ph-headphones text-4xl text-red-600"></i>
                 </div>
                 <span class="font-semibold text-slate-700">Audio</span>
            </div>
            <div class="h-40 bg-white rounded-3xl shadow-sm border border-slate-100 flex flex-col items-center justify-center hover:border-red-200 hover:shadow-md cursor-pointer transition-all hover:-translate-y-1">
                 <div class="w-16 h-16 bg-red-50 rounded-full flex items-center justify-center mb-3">
                     <i class="ph-duotone ph-watch text-4xl text-red-600"></i>
                 </div>
                 <span class="font-semibold text-slate-700">Wearables</span>
            </div>
            <div class="h-40 bg-white rounded-3xl shadow-sm border border-slate-100 flex flex-col items-center justify-center hover:border-red-200 hover:shadow-md cursor-pointer transition-all hover:-translate-y-1">
                 <div class="w-16 h-16 bg-red-50 rounded-full flex items-center justify-center mb-3">
                     <i class="ph-duotone ph-plugs text-4xl text-red-600"></i>
                 </div>
                 <span class="font-semibold text-slate-700">Accessories</span>
            </div>
        </div>
    </div>
</div>
