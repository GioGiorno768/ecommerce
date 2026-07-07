import { animate } from "motion";
import Lenis from 'lenis';

// Inisialisasi Lenis Smooth Scroll (dinonaktifkan hanya di mobile ukuran sm ke bawah / < 640px)
let lenis = null;

if (window.innerWidth >= 640) {
  lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    smoothWheel: true,
    wheelMultiplier: 1.0,
    touchMultiplier: 1.5,
  });

  function raf(time) {
    if (lenis) {
      lenis.raf(time);
    }
    requestAnimationFrame(raf);
  }

  requestAnimationFrame(raf);
}

// Ekspos ke window agar bisa dipanggil langsung di Alpine.js (x-data / x-init / @click)
window.animate = animate;
window.lenis = lenis;
