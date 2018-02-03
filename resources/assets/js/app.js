/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });

$(document).ready(function () {

    'use strict';
	function equalizeHeight(x, y) {
	    let textHeight = $(x).height();
	    $(y).css('min-height', textHeight);
	}
	equalizeHeight('.featured-posts .text', '.featured-posts .image');

	$(window).resize(() => {
	    equalizeHeight('.featured-posts .text', '.featured-posts .image');
	});

	$(window).on('scroll', function () {

	    let scroll = $(this).scrollTop();

	    if ($(window).width() > 1250) {
	        $('section.divider').css({
	            'background-position': 'left -' + scroll / 8 + 'px'
	        });
	    } else {
	        $('section.divider').css({
	            'background-position': 'center bottom'
	        });
	    }
	});	
});