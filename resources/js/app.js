import './bootstrap';
import 'flowbite';
import '@fortawesome/fontawesome-free';
// import Swal from 'sweetalert2';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
