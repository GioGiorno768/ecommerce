<!-- Clean & Elegant Fixed Mobile Bottom Navigation Bar (Eraspace Style) -->
<div class="fixed bottom-0 inset-x-0 bg-white/95 backdrop-blur-2xl border-t border-slate-200/90 z-50 flex items-center justify-around py-2 px-1 shadow-[0_-5px_20px_rgba(0,0,0,0.06)] lg:hidden">
    <!-- Home (Beranda) -->
    <a href="#" class="flex flex-col items-center justify-center text-red-900 font-extrabold text-[10px] py-1 px-3">
        <i class="ph-fill ph-house text-xl mb-0.5"></i>
        <span>Home</span>
    </a>
    
    <!-- Kategori (Categories) -->
    <button @click="isMobileMenuOpen = true" class="flex flex-col items-center justify-center text-slate-500 hover:text-red-900 font-semibold text-[10px] py-1 px-3 transition-colors cursor-pointer">
        <i class="ph-light ph-squares-four text-xl mb-0.5"></i>
        <span>Kategori</span>
    </button>
    
    <!-- Trade-In -->
    <a href="#" class="flex flex-col items-center justify-center text-slate-500 hover:text-red-900 font-semibold text-[10px] py-1 px-3 transition-colors">
        <i class="ph-light ph-arrows-counter-clockwise text-xl mb-0.5"></i>
        <span>Trade-In</span>
    </a>

    <!-- Wishlist -->
    <a href="#" class="flex flex-col items-center justify-center text-slate-500 hover:text-red-900 font-semibold text-[10px] py-1 px-3 transition-colors">
        <i class="ph-light ph-heart text-xl mb-0.5"></i>
        <span>Wishlist</span>
    </a>
    
    <!-- Akun (Account) -->
    <button @click="isMobileMenuOpen = true" class="flex flex-col items-center justify-center text-slate-500 hover:text-red-900 font-semibold text-[10px] py-1 px-3 transition-colors cursor-pointer">
        <i class="ph-light ph-user text-xl mb-0.5"></i>
        <span>Akun</span>
    </button>
</div>
