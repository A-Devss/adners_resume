$(document).ready(function() {
    $('#about').click(function(event) {
      event.preventDefault();
  
      let $target = $('#about-me-section');
      let offset = $target.offset().top - $('nav').height();
      anim(offset);
    });
  
    $('#skills').click(function(event) {
      event.preventDefault();
  
      let $target = $('#skills-section');
      let offset = $target.offset().top - $('nav').height();
      anim(offset);
     
    });
  
    $('#edu').click(function(event) {
      event.preventDefault();
  
      let $target = $('#education-section');
      let offset = $target.offset().top - $('nav').height();
      anim(offset);
     
    });
  
    $('#exp').click(function(event) {
      event.preventDefault();
  
      let $target = $('#work-exp-section');
      let offset = $target.offset().top - $('nav').height();
      anim(offset);
     
    });
  
    $('#achivements').click(function(event) {
      event.preventDefault();
  
      let $target = $('#achievement-section');
      let offset = $target.offset().top - $('nav').height();
      anim(offset);
     
    });
  
    $('#personal-info').click(function(event) {
      event.preventDefault();
  
      let $target = $('#personal-info-section');
      let offset = $target.offset().top - $('nav').height();
      anim(offset);
     
    });
  
    $('#interests').click(function(event) {
      event.preventDefault();
  
      let $target = $('#interest-section');
      let offset = $target.offset().top - $('nav').height();
      anim(offset);
     
    });
  
    function anim(offset){
      $('html, body').stop().animate({
        'scrollTop': offset
      }, 200, 'swing'); 
    }
  
  
  });
  
  