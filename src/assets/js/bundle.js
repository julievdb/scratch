import $ from 'jquery';
import './components/navigation';
import './components/slider';
import 'slick-carousel';

$(document).ready(() => {
   $('.c-post__gallery').slick({
      arrows: false,
      adaptiveHeight: true
   });
});