// resources/js/alpine.js
import Alpine from 'alpinejs';
import pricingComponent from './alpine/pricing';  // Changed import to match default export

document.addEventListener('alpine:init', () => {
    Alpine.data('pricing', pricingComponent);
});

window.Alpine = Alpine;
Alpine.start();
