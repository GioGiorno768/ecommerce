<!-- Hero Slider Stage Box (Pure Image Full-Width Parallax Edition) -->
<div 
    x-data="{ 
        activeSlide: 0,
        slides: [
            { 
                id: 1, 
                image: 'https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?q=80&w=1600&auto=format&fit=crop', 
                link: '#' 
            },
            { 
                id: 2, 
                image: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1600&auto=format&fit=crop', 
                link: '#' 
            },
            { 
                id: 3, 
                image: 'https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=1600&auto=format&fit=crop', 
                link: '#' 
            }
        ],
        interval: null,
        isDragging: false,
        startX: 0,
        dragThreshold: 50,
        scrollY: 0,
        init() {
            this.startAutoPlay();
            // Bind window scroll listener untuk efek parallax
            window.addEventListener('scroll', () => {
                this.scrollY = window.pageYOffset || document.documentElement.scrollTop;
            }, { passive: true });
        },
        startAutoPlay() {
            this.interval = setInterval(() => { this.next() }, 6000);
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
    class="relative w-full border-b border-slate-200/80 dark:border-slate-800 shadow-md overflow-hidden h-[180px] sm:h-[360px] md:h-[420px] lg:h-[480px] cursor-grab active:cursor-grabbing select-none bg-slate-900 group"
    @mousedown="startDrag"
    @mouseup="endDrag"
    @mouseleave="endDrag"
    @touchstart="startDrag"
    @touchend="endDrag"
>
    <!-- Background Banners Container -->
    <div class="absolute inset-0 overflow-hidden z-0">
        <template x-for="(slide, index) in slides" :key="slide.id">
            <a 
                :href="slide.link"
                x-show="activeSlide === index"
                x-transition:enter="transition opacity-smooth duration-750"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition opacity-smooth duration-500 absolute inset-0"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute inset-0 w-full h-full block"
            >
                <!-- Image with subtle scroll parallax -->
                <img 
                    :src="slide.image" 
                    class="w-full h-full object-cover transition-transform duration-75"
                    :style="'transform: translateY(' + scrollY * 0.15 + 'px)'"
                    draggable="false"
                    alt="Promo Banner"
                >
            </a>
        </template>
    </div>

    <!-- Minimal Slider Dot Indicators (Bottom Centered) -->
    <div class="absolute bottom-3 sm:bottom-5 left-1/2 -translate-x-1/2 z-20 flex items-center space-x-1.5 sm:space-x-2 bg-black/35 backdrop-blur-xs px-2.5 py-1 sm:px-3.5 sm:py-1.5 rounded-full border border-white/10 shadow-md">
        <template x-for="(slide, index) in slides" :key="slide.id">
            <button 
                @click="setSlide(index)"
                class="h-1 sm:h-1.5 rounded-full transition-all duration-300 cursor-pointer"
                :class="activeSlide === index ? 'bg-white w-4 sm:w-6' : 'bg-white/45 w-1 sm:w-1.5 hover:bg-white/75'"
            ></button>
        </template>
    </div>

    <!-- Minimal Next/Prev Arrow Buttons (Desktop Hover Only) -->
    <button 
        @click="prev()" 
        class="absolute left-4 top-1/2 -translate-y-1/2 z-20 w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-black/25 hover:bg-black/50 border border-white/15 text-white flex items-center justify-center transition-all cursor-pointer opacity-0 group-hover:opacity-100 hidden sm:flex"
    >
        <i class="ph-bold ph-caret-left text-xs sm:text-sm"></i>
    </button>
    <button 
        @click="next()" 
        class="absolute right-4 top-1/2 -translate-y-1/2 z-20 w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-black/25 hover:bg-black/50 border border-white/15 text-white flex items-center justify-center transition-all cursor-pointer opacity-0 group-hover:opacity-100 hidden sm:flex"
    >
        <i class="ph-bold ph-caret-right text-xs sm:text-sm"></i>
    </button>
</div>
