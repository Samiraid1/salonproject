$(document).ready(function(){
  
    // Hide topnav in mobile version
    if (window.matchMedia('(max-width: 767px)').matches) {
      $('.topnav').hide();
    }

    // Show topnav onclick on burger
    $('.burger').click(function(){
      $('.topnav').toggle(300);
    });

})


// Smooth scroll
$(document).ready(function(){
    $("a").on('click', function(event) {
      if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 300, function(){
          window.location.hash = hash;
        });
      }
    });
  });