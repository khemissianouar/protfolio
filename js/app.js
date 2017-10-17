JQuery(document).ready(function($){
   var $active = false;
   Window.onhashchange=function(){
     alert('Window.location.hash');
   }
   if ($work.hasClass('active')) {
     return  true;

   }


$('.work').click(function(e){
e.preventDefault();
var $work =$(this);
var $detail = $work.parent().nextAll('row-detail:first');
var $work_detail =$('.work_detail',$work).clone();
var showElement = function(){
  $detail.append($work_detail);
  $work_detail.slideDown();
  //Animation
  for (var i = 1; i <=4; i++) {
  $('.stagger'+ i,$work_detail).css({opacity:0,marginLeft:-20}).delay(300 * 200 *i).animate({opacity:1,marginLeft:0})
  }
  $active =$work_detail


}
var hideAction = function(){

  var $el=$active;
      $el.slideUp(500,function(){

    $el=remove();

});}
var buildSlideShow =function(){
  $('.work_detail.append',$work_detail).nivoSlider({
  effect : 'boxRain',
  directionNav: false,
  controlNav:false,
  pauseTime :4000
});

}
// Traitement
$('.work').removeClass('active');
$work.addClass('active');

if($active){ hideAction();
}
showElement();
buildSlideShow();
Window.location.hash=$work.attr('id');



});
if(Window.location.hash){
  var $target=$(Window.location.hash);
  if ($target.length>0) {
    $target.trigger('click');
    scrollTo($target);

  }
}



});
var scrollTo(cible){
  $('html,body').animate({scrollTop:cible.offset.top},750);
}
$('.m-nav-toggle').click(function(a){
a.preventDefault();
$('.menu').toggleClass('is-open');
