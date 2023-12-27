document.addEventListener('DOMContentLoaded', function () {
  var splides = document.querySelectorAll('.splide');
  for (var i = 0; i < splides.length; i++) {
    new Splide(splides[i], {
      type: 'loop',
      padding: '2rem',
      autoplay: true,
    }).mount();
  }
});
