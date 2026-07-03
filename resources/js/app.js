//
import { animate } from "motion";

// Ekspos ke window agar bisa dipanggil langsung di Alpine.js (x-data / x-init / @click)
window.animate = animate;
