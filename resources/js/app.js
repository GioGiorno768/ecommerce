import { animate } from "motion";
import Lenis from 'lenis';

// Inisialisasi Lenis Smooth Scroll
const lenis = new Lenis({
  duration: 1.2,
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
  smoothWheel: true,
  wheelMultiplier: 1.0,
  touchMultiplier: 1.5,
});

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf);

// Ekspos ke window agar bisa dipanggil langsung di Alpine.js (x-data / x-init / @click)
window.animate = animate;
window.lenis = lenis;
