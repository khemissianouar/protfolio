
$(document).ready(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a").on('click', function(event) {

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 1000, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
    });

    $(".arrowUp").on('click', function(event) {

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 1000, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
    });
})
(function ($) {
  var sections =[];
  var id=false;
  var $navbar =$('.navbar-nav');
  var $navbara=$('a'.$navbar);
  $navbar.click(function (e) {
  e.preventDefault();
  $('html,body').animate({
      scrollTop:$($(this).attr('href')).offset().top - $navbar.height()
  });
     hash($($(this).attr('href')));
  });
  $navbara.each(function () {
    sections.push($($(this).attr('href')));

  });
  $(window).scroll(function (e) {
    var scrollTop= $(this).scrollTop() + ($(window).height()/2)
      for (var i in sections){
      var section = sections[i];
      if(scrollTop> section.offset.top){
        scrollrd_id= section.attr('id');
      }
      }
      if (scrollrd_id !== id){
        id = scrollrd_id;
        $navbara.removeClass('current');
        $('a[href="#'+ id + '"]',$navbar).addClass('current');

      }

  });

  console.log(sections);

})(jQuery);

hash = function (h) {
    if(history.pushState){
        history.pushState(null,null,h)
    }else {
        location.hash = h;
    }
}