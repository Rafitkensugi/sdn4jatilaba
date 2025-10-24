import './bootstrap';

import AOS from 'aos'
import 'aos/dist/aos.css'
import Alpine from 'alpinejs';

window.Alpine = Alpine;

document.addEventListener('DOMContentLoaded', () => 
{
    AOS.init({
        duration: 500,
        once: true,
        easing: 'ease-in-out',
        delay: 150,
    });
})

Alpine.start();
