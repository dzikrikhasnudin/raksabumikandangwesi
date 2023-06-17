import './bootstrap';
import 'flowbite';
import '@fortawesome/fontawesome-free';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
