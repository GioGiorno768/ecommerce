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
            <a href="#" class="inline-flex items-center text-[11px] sm:text-sm font-extrabold text-red-900 hover:text-red-700 transition-colors group">
                <span>Lihat Semua</span>
                <i class="ph-bold ph-arrow-right ml-1 sm:ml-1.5 text-xs group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>
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
