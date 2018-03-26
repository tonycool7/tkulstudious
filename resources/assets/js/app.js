
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('jquery');

require('owl.carousel');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    data(){
        return {
            icon : true
        }
    },
    methods: {
        showMainMMenu: function () {
            if(this.icon){
                $('.responsive-icon__icon_middle').hide('medium');
                $('.responsive-icon__icon_top').css('top', '10pt').css('transform', 'rotate(45deg)');
                $('.responsive-icon__icon_bottom').css('top', '10pt').css('transform', 'rotate(-45deg)');
                $('.intro-section__nav').css('background-color', 'rgb(43, 49, 63)');
                $('#main-menu').fadeIn('medium');
                $('body').css('overflow', 'hidden');
            }else{
                $('.responsive-icon__icon_middle').show('medium');
                $('.responsive-icon__icon_top').css('top', '4pt').css('transform', 'rotate(0deg)');
                $('.responsive-icon__icon_bottom').css('top', '14pt').css('transform', 'rotate(0deg)');
                $('.intro-section__nav').css('background-color', '');

                $('#main-menu').fadeOut('medium');
                $('body').css('overflow', 'auto');

            }
            this.icon = !this.icon;
        },

        checkCheckbox : function (el) {
            var checkbox = $(el).find('input');
            $(el).toggleClass('checkbox_div-active');
            if(checkbox.is(':checked')){
               checkbox.attr("checked", false);
               $(el).find('p').find('i').removeClass('fa-minus').addClass('fa-plus');
            }else{
               checkbox.attr("checked", true);
               $(el).find('p').find('i').removeClass('fa-plus').addClass('fa-minus');
            }
        }
    }
});
