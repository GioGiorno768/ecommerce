<!-- Promo Slider Component (Pure Image Widescreen Edition) -->
<section 
    x-data="{ 
        activeSlide: 0,
        slides: [
            { 
                id: 1, 
                image: 'https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?q=80&w=1200&auto=format&fit=crop', 
                link: '#' 
            },
            { 
                id: 2, 
                image: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200&auto=format&fit=crop', 
                link: '#' 
            }
        ],
        interval: null,
        isDragging: false,
        startX: 0,
        dragThreshold: 50,
        init() {
            this.startAutoPlay();
        },
        startAutoPlay() {
            this.interval = setInterval(() => { this.next() }, 5000);
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
    class="w-full px-0 py-3 lg:py-0 my-4 lg:my-10 relative overflow-hidden select-none cursor-grab active:cursor-grabbing"
    @mousedown="startDrag"
    @mouseup="endDrag"
    @mouseleave="endDrag"
    @touchstart="startDrag"
    @touchend="endDrag"
>
    <!-- Slider Stage (Full-bleed on both mobile and desktop) -->
    <div class="relative overflow-hidden h-48 sm:h-64 md:h-80 lg:h-96 bg-slate-950 transform translate-z-0">
        
        <!-- Background Banners Container -->
        <template x-for="(slide, index) in slides" :key="slide.id">
            <a 
                :href="slide.link"
                x-show="activeSlide === index"
                x-transition:enter="transition opacity duration-750 ease-in-out"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition opacity duration-500 ease-in-out absolute inset-0"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute inset-0 w-full h-full block overflow-hidden"
            >
                <!-- Standard Normal-Scrolling Image -->
                <img 
                    :src="slide.image" 
                    class="w-full h-full object-cover"
                    draggable="false"
                    alt="Promo Banner"
                >
                <!-- Subtle Dark Overlay for Premium Look -->
                <div class="absolute inset-0 bg-black/10"></div>
            </a>
        </template>

        <!-- Slider Dots Indicators (Aligned with website max-width) -->
        <div class="absolute bottom-4 inset-x-0 z-10 pointer-events-none">
            <div class="max-w-screen-2xl mx-auto px-8 sm:px-12 lg:px-16 flex justify-end">
                <div class="flex space-x-2 pointer-events-auto">
                    <template x-for="(slide, index) in slides" :key="slide.id">
                        <button 
                            @click="setSlide(index)" 
                            class="w-2 h-2 sm:w-2.5 sm:h-2.5 rounded-full transition-all duration-300 cursor-pointer" 
                            :class="activeSlide === index ? 'bg-white w-5 sm:w-6' : 'bg-white/40'"
                        ></button>
                    </template>
                </div>
            </div>
        </div>
    </div>
</section>
