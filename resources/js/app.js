import './bootstrap';
import Alpine from 'alpinejs';

import jQuery from 'jquery';
import select2 from "select2"

window.$ = jQuery;
window.Alpine = Alpine;

select2();
Alpine.start();


// // Import your Vue component
// import { createApp } from 'vue';
// import TableUmkm from './components/tables/TableUmkm.vue';
// import IncrementCounter from './components/IncrementCounter.vue';
// import RegisterUmkm from './components/form/RegisterUmkm.vue';
// import TableEvent from './components/tables/TableEvent.vue';
// import CalendarGui from './components/core/CalendarGui.vue';

// // Register your Vue component globally


// createApp({})
//     .component('FormUmkm', TableUmkm)
//     .component('IncrementCounter', IncrementCounter)
//     .component('RegisterUmkm', RegisterUmkm)
//     .component('TableEvent', TableEvent)
//     .component('CalendarGui', CalendarGui)
//     .mount('#melt')
