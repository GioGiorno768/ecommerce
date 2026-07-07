<!-- Brand Showcase & New Arrivals Component (Asymmetric Layout with Luxury Minimalist Product Cards) -->
<section 
    x-data="{ 
        activeBrand: 'apple',
        brands: [
            { id: 'apple', name: 'Apple', logo: 'ph-light ph-apple-logo', count: '6 Produk' },
            { id: 'samsung', name: 'Samsung', logo: 'ph-light ph-device-mobile', count: '6 Produk' },
            { id: 'xiaomi', name: 'Xiaomi', logo: 'ph-light ph-device-mobile-camera', count: '6 Produk' },
            { id: 'oppo', name: 'OPPO', logo: 'ph-light ph-smartphone', count: '6 Produk' },
            { id: 'garmin', name: 'Garmin', logo: 'ph-light ph-watch', count: '6 Produk' },
            { id: 'jbl', name: 'JBL', logo: 'ph-light ph-speaker-high', count: '6 Produk' }
        ],
        products: [
            /* ================= Apple Products (6 Items) ================= */
            { 
                id: 1, 
                brand: 'apple', 
                name: 'iPhone 15 Pro Max 256GB', 
                category: 'Smartphone', 
                rating: '4.9', 
                reviews: 48, 
                priceOriginal: 'Rp24.999.000', 
                pricePromo: 'Rp22.999.000', 
                tag: 'Diskon 8%', 
                image: 'https://images.unsplash.com/photo-1695048133142-1a20484d2569?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 2, 
                brand: 'apple', 
                name: 'MacBook Air M3 13-inch', 
                category: 'Laptop', 
                rating: '4.8', 
                reviews: 32, 
                priceOriginal: 'Rp18.999.000', 
                pricePromo: 'Rp17.999.000', 
                tag: 'Diskon 5%', 
                image: 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 3, 
                brand: 'apple', 
                name: 'Apple Watch Series 9 GPS', 
                category: 'Wearables', 
                rating: '4.9', 
                reviews: 56, 
                priceOriginal: 'Rp7.999.000', 
                pricePromo: 'Rp7.199.000', 
                tag: 'Diskon 10%', 
                image: 'https://images.unsplash.com/photo-1434494878577-86c23bcb06b9?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 4, 
                brand: 'apple', 
                name: 'iPad Pro M4 Ultra Thin', 
                category: 'Tablet', 
                rating: '5.0', 
                reviews: 14, 
                priceOriginal: 'Rp19.499.000', 
                pricePromo: 'Rp18.599.000', 
                tag: 'Terbaru', 
                image: 'https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 5, 
                brand: 'apple', 
                name: 'AirPods Pro 2 Gen USB-C', 
                category: 'Audio', 
                rating: '4.8', 
                reviews: 82, 
                priceOriginal: 'Rp4.299.000', 
                pricePromo: 'Rp3.899.000', 
                tag: 'Best Audio', 
                image: 'https://images.unsplash.com/photo-1600294037681-c80b4cb5b434?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 6, 
                brand: 'apple', 
                name: 'Apple TV 4K 128GB Wi-Fi', 
                category: 'Accessories', 
                rating: '4.7', 
                reviews: 19, 
                priceOriginal: 'Rp3.199.000', 
                pricePromo: 'Rp2.949.000', 
                tag: 'Stock Terbatas', 
                image: 'https://images.unsplash.com/photo-1585647347483-22b66260dfff?q=80&w=600&auto=format&fit=crop' 
            },

            /* ================= Samsung Products (6 Items) ================= */
            { 
                id: 7, 
                brand: 'samsung', 
                name: 'Galaxy S24 Ultra 5G 512GB', 
                category: 'Smartphone', 
                rating: '4.9', 
                reviews: 50, 
                priceOriginal: 'Rp21.999.000', 
                pricePromo: 'Rp20.599.000', 
                tag: 'Diskon 6%', 
                image: 'https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 8, 
                brand: 'samsung', 
                name: 'Galaxy Tab S9 Plus Wifi', 
                category: 'Tablet', 
                rating: '4.8', 
                reviews: 24, 
                priceOriginal: 'Rp15.999.000', 
                pricePromo: 'Rp14.999.000', 
                tag: 'Best Seller', 
                image: 'https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 9, 
                brand: 'samsung', 
                name: 'Galaxy Watch 6 Classic 43mm', 
                category: 'Wearables', 
                rating: '4.7', 
                reviews: 18, 
                priceOriginal: 'Rp5.999.000', 
                pricePromo: 'Rp5.299.000', 
                tag: 'Promo', 
                image: 'https://images.unsplash.com/photo-1508685096489-7aacd43bd3b1?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 10, 
                brand: 'samsung', 
                name: 'Galaxy Buds2 Pro TWS Audio', 
                category: 'Audio', 
                rating: '4.8', 
                reviews: 44, 
                priceOriginal: 'Rp2.799.000', 
                pricePromo: 'Rp2.399.000', 
                tag: 'Clear Sound', 
                image: 'https://images.unsplash.com/photo-1590658268037-6bf12165a8df?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 11, 
                brand: 'samsung', 
                name: 'Galaxy SmartTag2 Smart Tracker', 
                category: 'Accessories', 
                rating: '4.6', 
                reviews: 38, 
                priceOriginal: 'Rp499.000', 
                pricePromo: 'Rp449.000', 
                tag: 'Smart Gadget', 
                image: 'https://images.unsplash.com/photo-1585647347483-22b66260dfff?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 12, 
                brand: 'samsung', 
                name: 'Galaxy Book4 Pro Touch 14-inch', 
                category: 'Laptop', 
                rating: '4.9', 
                reviews: 20, 
                priceOriginal: 'Rp23.999.000', 
                pricePromo: 'Rp21.999.000', 
                tag: 'Premium Laptop', 
                image: 'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?q=80&w=600&auto=format&fit=crop' 
            },

            /* ================= Xiaomi Products (6 Items) ================= */
            { 
                id: 13, 
                brand: 'xiaomi', 
                name: 'Xiaomi 14 5G 12/256GB', 
                category: 'Smartphone', 
                rating: '4.7', 
                reviews: 42, 
                priceOriginal: 'Rp11.999.000', 
                pricePromo: 'Rp11.499.000', 
                tag: 'Terbaru', 
                image: 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 14, 
                brand: 'xiaomi', 
                name: 'Redmi Pad SE 4GB/128GB', 
                category: 'Tablet', 
                rating: '4.8', 
                reviews: 64, 
                priceOriginal: 'Rp2.399.000', 
                pricePromo: 'Rp1.999.000', 
                tag: 'Diskon 16%', 
                image: 'https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 15, 
                brand: 'xiaomi', 
                name: 'Xiaomi Smart Band 8 Active', 
                category: 'Wearables', 
                rating: '4.9', 
                reviews: 120, 
                priceOriginal: 'Rp599.000', 
                pricePromo: 'Rp499.000', 
                tag: 'Terlaris', 
                image: 'https://images.unsplash.com/photo-1575311373937-040b8e1fd5b6?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 16, 
                brand: 'xiaomi', 
                name: 'Redmi Note 13 Pro 5G 8/256', 
                category: 'Smartphone', 
                rating: '4.8', 
                reviews: 79, 
                priceOriginal: 'Rp4.999.000', 
                pricePromo: 'Rp4.399.000', 
                tag: 'Hot Item', 
                image: 'https://images.unsplash.com/photo-1598327105666-5b89351aff97?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 17, 
                brand: 'xiaomi', 
                name: 'Xiaomi Watch 2 WearOS Smartwatch', 
                category: 'Wearables', 
                rating: '4.7', 
                reviews: 15, 
                priceOriginal: 'Rp2.499.000', 
                pricePromo: 'Rp2.199.000', 
                tag: 'New Edition', 
                image: 'https://images.unsplash.com/photo-1434494878577-86c23bcb06b9?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 18, 
                brand: 'xiaomi', 
                name: 'Xiaomi TV A Pro 43-inch Smart TV', 
                category: 'Accessories', 
                rating: '4.8', 
                reviews: 31, 
                priceOriginal: 'Rp3.999.000', 
                pricePromo: 'Rp3.499.000', 
                tag: 'Smart TV', 
                image: 'https://images.unsplash.com/photo-1593305841991-05c297ba4575?q=80&w=600&auto=format&fit=crop' 
            },

            /* ================= OPPO Products (6 Items) ================= */
            { 
                id: 19, 
                brand: 'oppo', 
                name: 'OPPO Find N3 Flip 12GB', 
                category: 'Smartphone', 
                rating: '4.8', 
                reviews: 15, 
                priceOriginal: 'Rp15.999.000', 
                pricePromo: 'Rp14.999.000', 
                tag: 'Diskon 6%', 
                image: 'https://images.unsplash.com/photo-1598327105666-5b89351aff97?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 20, 
                brand: 'oppo', 
                name: 'OPPO Reno11 Pro 5G 12GB', 
                category: 'Smartphone', 
                rating: '4.7', 
                reviews: 28, 
                priceOriginal: 'Rp8.999.000', 
                pricePromo: 'Rp8.499.000', 
                tag: 'Hot Deal', 
                image: 'https://images.unsplash.com/photo-1565630916779-e303be97b6f5?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 21, 
                brand: 'oppo', 
                name: 'OPPO Enco Buds 2 TWS', 
                category: 'Audio', 
                rating: '4.9', 
                reviews: 85, 
                priceOriginal: 'Rp399.000', 
                pricePromo: 'Rp299.000', 
                tag: 'Diskon 25%', 
                image: 'https://images.unsplash.com/photo-1590658268037-6bf12165a8df?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 22, 
                brand: 'oppo', 
                name: 'OPPO Watch X Premium Smartwatch', 
                category: 'Wearables', 
                rating: '4.8', 
                reviews: 22, 
                priceOriginal: 'Rp4.299.000', 
                pricePromo: 'Rp3.999.000', 
                tag: 'GPS Sport', 
                image: 'https://images.unsplash.com/photo-1579586337278-3befd40fd17a?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 23, 
                brand: 'oppo', 
                name: 'OPPO Pad Air 4GB/64GB', 
                category: 'Tablet', 
                rating: '4.7', 
                reviews: 41, 
                priceOriginal: 'Rp3.999.000', 
                pricePromo: 'Rp3.599.000', 
                tag: 'Best Value', 
                image: 'https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 24, 
                brand: 'oppo', 
                name: 'OPPO Enco Air3 Pro ANC TWS', 
                category: 'Audio', 
                rating: '4.8', 
                reviews: 33, 
                priceOriginal: 'Rp1.299.000', 
                pricePromo: 'Rp1.099.000', 
                tag: 'Noise Cancelling', 
                image: 'https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?q=80&w=600&auto=format&fit=crop' 
            },

            /* ================= Garmin Products (6 Items) ================= */
            { 
                id: 25, 
                brand: 'garmin', 
                name: 'Garmin Forerunner 265 GPS', 
                category: 'Wearables', 
                rating: '4.9', 
                reviews: 30, 
                priceOriginal: 'Rp6.999.000', 
                pricePromo: 'Rp6.799.000', 
                tag: 'Sport', 
                image: 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 26, 
                brand: 'garmin', 
                name: 'Garmin Fenix 7 Pro Sapphire', 
                category: 'Wearables', 
                rating: '4.8', 
                reviews: 12, 
                priceOriginal: 'Rp13.999.000', 
                pricePromo: 'Rp13.299.000', 
                tag: 'Premium', 
                image: 'https://images.unsplash.com/photo-1508685096489-7aacd43bd3b1?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 27, 
                brand: 'garmin', 
                name: 'Garmin Venu 3 Smartwatch', 
                category: 'Wearables', 
                rating: '4.7', 
                reviews: 22, 
                priceOriginal: 'Rp7.999.000', 
                pricePromo: 'Rp7.699.000', 
                tag: 'Lifestyle', 
                image: 'https://images.unsplash.com/photo-1508685096489-7aacd43bd3b1?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 28, 
                brand: 'garmin', 
                name: 'Garmin Instinct 2 Solar Edition', 
                category: 'Wearables', 
                rating: '4.9', 
                reviews: 47, 
                priceOriginal: 'Rp6.599.000', 
                pricePromo: 'Rp5.999.000', 
                tag: 'Outdoor Rugged', 
                image: 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 29, 
                brand: 'garmin', 
                name: 'Garmin Approach S70 Golf GPS', 
                category: 'Wearables', 
                rating: '4.8', 
                reviews: 19, 
                priceOriginal: 'Rp11.599.000', 
                pricePromo: 'Rp10.999.000', 
                tag: 'Golf Premium', 
                image: 'https://images.unsplash.com/photo-1510017808632-95f08e037596?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 30, 
                brand: 'garmin', 
                name: 'Garmin HRM-Pro Plus Heart Rate Monitor', 
                category: 'Accessories', 
                rating: '4.9', 
                reviews: 58, 
                priceOriginal: 'Rp1.899.000', 
                pricePromo: 'Rp1.699.000', 
                tag: 'Fitness Tracker', 
                image: 'https://images.unsplash.com/photo-1575311373937-040b8e1fd5b6?q=80&w=600&auto=format&fit=crop' 
            },

            /* ================= JBL Products (6 Items) ================= */
            { 
                id: 31, 
                brand: 'jbl', 
                name: 'JBL Charge 5 Speaker BT', 
                category: 'Audio', 
                rating: '4.9', 
                reviews: 74, 
                priceOriginal: 'Rp2.999.000', 
                pricePromo: 'Rp2.699.000', 
                tag: 'Diskon 10%', 
                image: 'https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 32, 
                brand: 'jbl', 
                name: 'JBL Live Pro 2 TWS Noise Cancelling', 
                category: 'Audio', 
                rating: '4.8', 
                reviews: 55, 
                priceOriginal: 'Rp2.299.000', 
                pricePromo: 'Rp1.999.000', 
                tag: 'Terlaris', 
                image: 'https://images.unsplash.com/photo-1590658268037-6bf12165a8df?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 33, 
                brand: 'jbl', 
                name: 'JBL PartyBox 110 Portable BT', 
                category: 'Audio', 
                rating: '4.9', 
                reviews: 16, 
                priceOriginal: 'Rp5.999.000', 
                pricePromo: 'Rp5.499.000', 
                tag: 'Hot Item', 
                image: 'https://images.unsplash.com/photo-1589003077984-894e133dabab?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 34, 
                brand: 'jbl', 
                name: 'JBL Tune 510BT Over-Ear Headphone', 
                category: 'Audio', 
                rating: '4.7', 
                reviews: 93, 
                priceOriginal: 'Rp899.000', 
                pricePromo: 'Rp699.000', 
                tag: 'Best Bass', 
                image: 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 35, 
                brand: 'jbl', 
                name: 'JBL Bar 500 Soundbar 5.1ch', 
                category: 'Audio', 
                rating: '4.8', 
                reviews: 21, 
                priceOriginal: 'Rp9.999.000', 
                pricePromo: 'Rp8.999.000', 
                tag: 'Cinema Sound', 
                image: 'https://images.unsplash.com/photo-1545454675-3531b543be5d?q=80&w=600&auto=format&fit=crop' 
            },
            { 
                id: 36, 
                brand: 'jbl', 
                name: 'JBL Go 4 Portable Speaker', 
                category: 'Audio', 
                rating: '4.9', 
                reviews: 62, 
                priceOriginal: 'Rp699.000', 
                pricePromo: 'Rp599.000', 
                tag: 'Mini Bluetooth', 
                image: 'https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?q=80&w=600&auto=format&fit=crop' 
            }
        ]
    }"
    class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 py-4 lg:py-8 pb-20 lg:pb-12 relative"
>
    <!-- Section Header -->
    <div class="flex items-center justify-between mb-4 lg:mb-6">
        <div class="flex items-center space-x-2">
            <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-red-600"></span>
            <h2 class="text-xs sm:text-base font-extrabold uppercase tracking-wider text-slate-400">Jelajahi Brand Resmi</h2>
        </div>
        <a href="#" class="inline-flex items-center text-xs sm:text-sm font-extrabold text-red-900 hover:text-red-700 transition-colors group">
            <span>Lihat Semua</span>
            <i class="ph-bold ph-arrow-right ml-1.5 text-xs group-hover:translate-x-1 transition-transform"></i>
        </a>
    </div>

    <!-- Asymmetrical Container -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8">
        
        <!-- Left Column: Brand Directory (Horizontal Scroll on Mobile, Vertical Sidebar on Desktop) -->
        <div class="lg:col-span-3">
            <!-- Mobile Horizontal Scroll Menu (Hidden on lg screens - Tab Bar Style with Active Underline) -->
            <div class="flex lg:hidden overflow-x-auto pb-1 gap-6 scrollbar-none scroll-smooth -mx-4 px-4 border-b border-slate-100">
                <template x-for="brand in brands" :key="brand.id">
                    <button 
                        @click="activeBrand = brand.id"
                        class="flex flex-col items-center pb-2.5 text-xs font-medium whitespace-nowrap transition-all duration-300 cursor-pointer flex-shrink-0 relative group"
                        :class="activeBrand === brand.id 
                            ? 'text-red-900 font-bold' 
                            : 'text-slate-400 hover:text-slate-700'"
                    >
                        <div class="flex items-center space-x-1.5">
                            <i class="text-sm transition-colors duration-300" :class="brand.logo"></i>
                            <span x-text="brand.name"></span>
                        </div>
                        <!-- Active Underline indicator -->
                        <span 
                            class="absolute bottom-0 inset-x-0 h-0.5 bg-red-900 rounded-full transition-all duration-350"
                            x-show="activeBrand === brand.id"
                            x-transition:enter="transition ease-out duration-300 transform scale-x-100"
                            x-transition:enter-start="scale-x-0"
                            x-transition:enter-end="scale-x-100"
                        ></span>
                    </button>
                </template>
            </div>

            <!-- Desktop Vertical Sidebar (Only visible on lg screens - Left Accent Bar Style) -->
            <div class="hidden lg:flex flex-col space-y-2 p-1.5">
                <p class="text-[10px] lg:text-xs font-semibold text-slate-400 uppercase tracking-widest px-4 mb-3.5">Daftar Brand</p>
                <template x-for="brand in brands" :key="brand.id">
                    <button 
                        @click="activeBrand = brand.id"
                        class="flex items-center justify-between px-4 py-3 rounded-lg text-sm lg:text-base font-semibold transition-all duration-300 text-left cursor-pointer group relative overflow-hidden"
                        :class="activeBrand === brand.id 
                            ? 'text-red-900 bg-red-50/20' 
                            : 'text-slate-500 hover:bg-slate-50/50 hover:text-slate-900'"
                    >
                        <!-- Active left vertical accent bar (thicker for highlight) -->
                        <span 
                            class="absolute left-0 top-2.5 bottom-2.5 w-[3px] bg-red-900 rounded-full transition-all duration-300"
                            x-show="activeBrand === brand.id"
                            x-transition:enter="transition ease-out duration-300 transform scale-y-100"
                            x-transition:enter-start="scale-y-0"
                            x-transition:enter-end="scale-y-100"
                        ></span>
                        
                        <div class="flex items-center space-x-3.5 transition-transform duration-300" :class="activeBrand === brand.id ? 'translate-x-1.5' : ''">
                            <i class="text-lg lg:text-xl transition-colors duration-300" :class="brand.logo"></i>
                            <span x-text="brand.name"></span>
                        </div>
                        
                        <span 
                            class="text-[10px] lg:text-xs font-bold px-2.5 py-0.5 rounded-full transition-colors duration-300"
                            :class="activeBrand === brand.id ? 'bg-red-900/10 text-red-950' : 'bg-slate-100 text-slate-400'"
                            x-text="brand.count.replace(' Produk', '')"
                        ></span>
                    </button>
                </template>
            </div>
        </div>

        <!-- Right Column: Products Display (2 Columns on Mobile, 3 Columns on Desktop) -->
        <div class="lg:col-span-9">
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6">
                <template x-for="product in products.filter(p => p.brand === activeBrand)" :key="product.id">
                    <div 
                        x-show="product.brand === activeBrand"
                        x-transition:enter="transition ease-out duration-300"
                        class="bg-white rounded-xl border border-slate-100 shadow-sm hover:shadow-md hover:border-slate-200/80 hover:-translate-y-1 transition-all duration-500 group flex flex-col justify-between relative overflow-hidden"
                    >
                        <!-- Top portion: Image Box + Text Overlay (Category to Progress Bar) -->
                        <div class="relative w-full h-64 sm:h-76 lg:h-84 overflow-hidden flex flex-col justify-between p-4 sm:p-5">
                            <!-- Full-bleed background image with cinematic hover zoom -->
                            <img 
                                :src="product.image" 
                                :alt="product.name" 
                                class="absolute inset-0 w-full h-full object-cover transition-transform duration-[1500ms] group-hover:scale-108 z-0" 
                                draggable="false"
                            >
                            <!-- Dark gradient overlay to show up the text/details -->
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/95 via-slate-950/45 to-transparent z-0"></div>

                            <!-- Discount Tag Overlay (Top-Left) -->
                            <div class="z-10 flex justify-between items-start w-full">
                                <template x-if="product.tag">
                                    <span 
                                        class="bg-red-950/80 backdrop-blur-md text-white text-[8px] font-medium px-2 py-0.5 rounded-full tracking-widest uppercase"
                                        x-text="product.tag"
                                    ></span>
                                </template>
                                <div x-show="!product.tag"></div>
                            </div>

                            <!-- Text Content Overlay (Bottom of the image box) -->
                            <div class="z-10 mt-auto pt-6">
                                <!-- Light Elegant Category Tag -->
                                <span class="text-[8px] sm:text-[9px] lg:text-[10px] font-medium text-slate-400 uppercase tracking-widest block" x-text="product.category"></span>
                                <!-- Medium Weight Title in White -->
                                <h3 
                                    class="text-xs sm:text-sm lg:text-base font-medium text-white mt-1 line-clamp-1 group-hover:text-red-400 transition-colors" 
                                    x-text="product.name"
                                ></h3>
                                <!-- Compact Airbnb-style Rating -->
                                <div class="flex items-center space-x-1 mt-1 text-[10px] lg:text-xs">
                                    <i class="ph-fill ph-star text-amber-400 text-[11px] lg:text-[13px]"></i>
                                    <span class="font-medium text-slate-200" x-text="product.rating"></span>
                                    <span class="text-slate-400" x-text="'(' + product.reviews + ')'"></span>
                                </div>

                                <!-- Elegant Stock Progress Bar (Transparent/White theme) -->
                                <div class="mt-2.5">
                                    <div class="flex items-center justify-between text-[9px] lg:text-xs font-medium text-slate-400 mb-1">
                                        <span class="text-slate-300">Tersisa <span class="font-bold text-slate-100" x-text="((product.id * 3) % 12 + 2)"></span> unit</span>
                                        <span class="text-red-400 font-semibold animate-pulse" x-show="((product.id * 3) % 12 + 2) <= 5">Segera Habis!</span>
                                    </div>
                                    <div class="w-full h-1 bg-white/20 rounded-full overflow-hidden">
                                        <div 
                                            class="h-full rounded-full transition-all duration-500" 
                                            :class="((product.id * 3) % 12 + 2) <= 5 ? 'bg-red-500' : 'bg-red-400/60'"
                                            :style="'width: ' + (((product.id * 3) % 12 + 2) / 14 * 100) + '%'"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bottom portion: Pure White Footer (Price & Cart Button) -->
                        <div class="bg-white p-4 pt-2 sm:p-5 flex items-end justify-between border-t border-slate-150/40 z-10">
                            <div>
                                <span class="text-[9px] sm:text-[10px] text-slate-400 line-through font-normal" x-text="product.priceOriginal"></span>
                                <div class="text-xs sm:text-sm font-semibold text-slate-900 mt-0.5" x-text="product.pricePromo"></div>
                            </div>
                            <!-- Circular Shopping Cart Button -->
                            <button class="w-8 h-8 rounded-full bg-slate-100/80 text-slate-500 hover:bg-red-900 hover:text-white flex items-center justify-center transition-all duration-300 cursor-pointer pointer-events-auto shadow-2xs hover:shadow-xs">
                                <i class="ph-light ph-shopping-cart text-sm"></i>
                            </button>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>

    <!-- Ticker styles -->
    <style>
        @keyframes marquee-scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            animation: marquee-scroll var(--speed, 25s) linear infinite;
        }
    </style>

    <!-- Infinite Scrolling Brand Marquee -->
    <div class="w-full mt-14 lg:mt-24 overflow-hidden relative py-8 bg-white/40">
        <!-- Fade Gradients on edges -->
        <div class="absolute top-0 bottom-0 left-0 w-20 sm:w-40 bg-gradient-to-r from-slate-50 to-transparent z-10 pointer-events-none"></div>
        <div class="absolute top-0 bottom-0 right-0 w-20 sm:w-40 bg-gradient-to-l from-slate-50 to-transparent z-10 pointer-events-none"></div>

        <!-- Ticker content container -->
        <div class="max-w-screen-2xl mx-auto px-4 relative overflow-hidden">
            <div 
                class="flex items-center space-x-20 sm:space-x-32 w-max animate-marquee"
                style="--speed: 28s;"
            >
                <!-- First half of logos -->
                <div class="flex items-center space-x-20 sm:space-x-32">
                    <!-- Apple -->
                    <div class="flex items-center space-x-4 group cursor-pointer transition-transform duration-300 hover:scale-105">
                        <span class="w-12 h-12 bg-slate-400 group-hover:bg-slate-800 transition-colors duration-300" style="mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/apple.svg') no-repeat center; -webkit-mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/apple.svg') no-repeat center; mask-size: contain; -webkit-mask-size: contain; display: inline-block;"></span>
                        <span class="text-xl sm:text-2xl font-bold text-slate-400 group-hover:text-slate-800 transition-colors duration-300 tracking-wider">Apple</span>
                    </div>
                    <!-- Samsung -->
                    <div class="flex items-center group cursor-pointer transition-transform duration-300 hover:scale-105">
                        <span class="w-64 h-16 bg-slate-400 group-hover:bg-slate-800 transition-colors duration-300" style="mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/samsung.svg') no-repeat center; -webkit-mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/samsung.svg') no-repeat center; mask-size: contain; -webkit-mask-size: contain; display: inline-block;"></span>
                    </div>
                    <!-- Xiaomi -->
                    <div class="flex items-center space-x-4 group cursor-pointer transition-transform duration-300 hover:scale-105">
                        <span class="w-12 h-12 bg-slate-400 group-hover:bg-slate-800 transition-colors duration-300" style="mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/xiaomi.svg') no-repeat center; -webkit-mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/xiaomi.svg') no-repeat center; mask-size: contain; -webkit-mask-size: contain; display: inline-block;"></span>
                        <span class="text-xl sm:text-2xl font-bold text-slate-400 group-hover:text-slate-800 transition-colors duration-300 tracking-wider">Xiaomi</span>
                    </div>
                    <!-- OPPO -->
                    <div class="flex items-center group cursor-pointer transition-transform duration-300 hover:scale-105">
                        <span class="w-56 h-16 bg-slate-400 group-hover:bg-slate-800 transition-colors duration-300" style="mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/oppo.svg') no-repeat center; -webkit-mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/oppo.svg') no-repeat center; mask-size: contain; -webkit-mask-size: contain; display: inline-block;"></span>
                    </div>
                    <!-- Garmin -->
                    <div class="flex items-center space-x-4 group cursor-pointer transition-transform duration-300 hover:scale-105">
                        <span class="w-12 h-12 bg-slate-400 group-hover:bg-slate-800 transition-colors duration-300" style="mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/garmin.svg') no-repeat center; -webkit-mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/garmin.svg') no-repeat center; mask-size: contain; -webkit-mask-size: contain; display: inline-block;"></span>
                        <span class="text-xl sm:text-2xl font-bold text-slate-400 group-hover:text-slate-800 transition-colors duration-300 tracking-wider">Garmin</span>
                    </div>
                    <!-- JBL -->
                    <div class="flex items-center group cursor-pointer transition-transform duration-300 hover:scale-105">
                        <span class="w-40 h-14 bg-slate-400 group-hover:bg-slate-800 transition-colors duration-300" style="mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/jbl.svg') no-repeat center; -webkit-mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/jbl.svg') no-repeat center; mask-size: contain; -webkit-mask-size: contain; display: inline-block;"></span>
                    </div>
                    <!-- ASUS -->
                    <div class="flex items-center group cursor-pointer transition-transform duration-300 hover:scale-105">
                        <span class="w-56 h-16 bg-slate-400 group-hover:bg-slate-800 transition-colors duration-300" style="mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/asus.svg') no-repeat center; -webkit-mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/asus.svg') no-repeat center; mask-size: contain; -webkit-mask-size: contain; display: inline-block;"></span>
                    </div>
                    <!-- Sony -->
                    <div class="flex items-center group cursor-pointer transition-transform duration-300 hover:scale-105">
                        <span class="w-56 h-16 bg-slate-400 group-hover:bg-slate-800 transition-colors duration-300" style="mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/sony.svg') no-repeat center; -webkit-mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/sony.svg') no-repeat center; mask-size: contain; -webkit-mask-size: contain; display: inline-block;"></span>
                    </div>
                </div>
                <!-- Second half (Identical clone for infinite scrolling seamless transition) -->
                <div class="flex items-center space-x-20 sm:space-x-32">
                    <!-- Apple -->
                    <div class="flex items-center space-x-4 group cursor-pointer transition-transform duration-300 hover:scale-105">
                        <span class="w-12 h-12 bg-slate-400 group-hover:bg-slate-800 transition-colors duration-300" style="mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/apple.svg') no-repeat center; -webkit-mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/apple.svg') no-repeat center; mask-size: contain; -webkit-mask-size: contain; display: inline-block;"></span>
                        <span class="text-xl sm:text-2xl font-bold text-slate-400 group-hover:text-slate-800 transition-colors duration-300 tracking-wider">Apple</span>
                    </div>
                    <!-- Samsung -->
                    <div class="flex items-center group cursor-pointer transition-transform duration-300 hover:scale-105">
                        <span class="w-64 h-16 bg-slate-400 group-hover:bg-slate-800 transition-colors duration-300" style="mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/samsung.svg') no-repeat center; -webkit-mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/samsung.svg') no-repeat center; mask-size: contain; -webkit-mask-size: contain; display: inline-block;"></span>
                    </div>
                    <!-- Xiaomi -->
                    <div class="flex items-center space-x-4 group cursor-pointer transition-transform duration-300 hover:scale-105">
                        <span class="w-12 h-12 bg-slate-400 group-hover:bg-slate-800 transition-colors duration-300" style="mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/xiaomi.svg') no-repeat center; -webkit-mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/xiaomi.svg') no-repeat center; mask-size: contain; -webkit-mask-size: contain; display: inline-block;"></span>
                        <span class="text-xl sm:text-2xl font-bold text-slate-400 group-hover:text-slate-800 transition-colors duration-300 tracking-wider">Xiaomi</span>
                    </div>
                    <!-- OPPO -->
                    <div class="flex items-center group cursor-pointer transition-transform duration-300 hover:scale-105">
                        <span class="w-56 h-16 bg-slate-400 group-hover:bg-slate-800 transition-colors duration-300" style="mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/oppo.svg') no-repeat center; -webkit-mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/oppo.svg') no-repeat center; mask-size: contain; -webkit-mask-size: contain; display: inline-block;"></span>
                    </div>
                    <!-- Garmin -->
                    <div class="flex items-center space-x-4 group cursor-pointer transition-transform duration-300 hover:scale-105">
                        <span class="w-12 h-12 bg-slate-400 group-hover:bg-slate-800 transition-colors duration-300" style="mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/garmin.svg') no-repeat center; -webkit-mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/garmin.svg') no-repeat center; mask-size: contain; -webkit-mask-size: contain; display: inline-block;"></span>
                        <span class="text-xl sm:text-2xl font-bold text-slate-400 group-hover:text-slate-800 transition-colors duration-300 tracking-wider">Garmin</span>
                    </div>
                    <!-- JBL -->
                    <div class="flex items-center group cursor-pointer transition-transform duration-300 hover:scale-105">
                        <span class="w-40 h-14 bg-slate-400 group-hover:bg-slate-800 transition-colors duration-300" style="mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/jbl.svg') no-repeat center; -webkit-mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/jbl.svg') no-repeat center; mask-size: contain; -webkit-mask-size: contain; display: inline-block;"></span>
                    </div>
                    <!-- ASUS -->
                    <div class="flex items-center group cursor-pointer transition-transform duration-300 hover:scale-105">
                        <span class="w-56 h-16 bg-slate-400 group-hover:bg-slate-800 transition-colors duration-300" style="mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/asus.svg') no-repeat center; -webkit-mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/asus.svg') no-repeat center; mask-size: contain; -webkit-mask-size: contain; display: inline-block;"></span>
                    </div>
                    <!-- Sony -->
                    <div class="flex items-center group cursor-pointer transition-transform duration-300 hover:scale-105">
                        <span class="w-56 h-16 bg-slate-400 group-hover:bg-slate-800 transition-colors duration-300" style="mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/sony.svg') no-repeat center; -webkit-mask: url('https://cdn.jsdelivr.net/npm/simple-icons@v14/icons/sony.svg') no-repeat center; mask-size: contain; -webkit-mask-size: contain; display: inline-block;"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
