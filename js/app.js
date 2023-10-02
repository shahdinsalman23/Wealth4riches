// Initialize Wow
new WOW().init();

$('.multiple-items').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 300,
    arrows: true,
    dots: true
  });
      
  $('.product_slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 300,
    arrows: true,
  });

  ////// tabs custom (place nav and tabs anywhere separately)
$('.tabs-custom-nav a').click(function(event){
  $(this).closest('li').siblings('li').children('a').removeClass('current');
  $(this).addClass('current');
  $(this.hash).closest('.general').children('div.tab-content-panel:not(:hidden)').hide();
  $(this.hash).show();
  event.preventDefault();
  $('.sliderxs').slick('setPosition');
  });
  ////// tabs custom end

  ////// tabs generic (nav and tabs in main div)
$('.tab-custom .tab-custom-nav a').click(function(event){
$(this).closest('li').siblings('li').children('a').removeClass('current');
$(this).addClass('current');
$(this).closest('.tab-custom').children('div.tab-content-panel:not(:hidden)').hide();
$(this.hash).show();
event.preventDefault();
$('.sliderxs').slick('setPosition');
});

$('.popular_slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  speed: 300,
  arrows: true,
  dots: true,
});

////// tabs custom (place nav and tabs anywhere separately)
$('.tabs-custom-navs a').click(function(event){
  $(this).closest('li').siblings('li').children('a').removeClass('current');
  $(this).addClass('current');
  $(this.hash).closest('.generals').children('div.tab-content-panel:not(:hidden)').hide();
  $(this.hash).show();
  event.preventDefault();
  $('.sliderxs').slick('setPosition');
  });
  ////// tabs custom end

  $('.garden_slider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    speed: 300,
    arrows: true,
  });

  $('.garden_slider01').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    speed: 300,
    arrows: true,
  });

  $('.garden_slider02').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    speed: 300,
    arrows: true,
  });

  $('.Product-Brand').slick({
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    speed: 300,
    arrows: true,
  });

  $(".blogs-slider").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 300,
    arrows: true,
  });
		