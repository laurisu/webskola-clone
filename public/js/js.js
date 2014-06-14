/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
 
/*smooth scrolling*/
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
  
/* ==== WYSIWYG EDITOR ==== */
    tinymce.init({
        theme_url: '/plugins/tinymce/theme.min.js',
        skin_url: '/plugins/tinymce/lightgray',
        selector:'.tinymce-editor',
        menubar : false,
        statusbar : false
        
    });  
  
});

/* jQuery image panning via http://www.stumbleupon.com/su/1x3nZg */
$(window).load(function() {
    $outer_container=$("#outer_container");
    $imagePan_panning=$("#imagePan .panning");
    $imagePan=$("#imagePan");
    $imagePan_container=$("#imagePan .panning-container");
 
    $imagePan_panning.css("margin-top",($imagePan.height()-$imagePan_panning.height())/2+"px");
    containerWidth=$imagePan.width();
    containerHeight=$imagePan.height();
    totalContentW=$imagePan_panning.width();
    totalContentH=$imagePan_panning.height();
    $imagePan_container.css("width",totalContentW).css("height",totalContentH);
 
    function MouseMove(e){
        var mouseCoordsX=(e.pageX - $imagePan.offset().left);
        var mouseCoordsY=(e.pageY - $imagePan.offset().top);
        var mousePercentX=mouseCoordsX/containerWidth;
        var mousePercentY=mouseCoordsY/containerHeight;
        var destX=-(((totalContentW-(containerWidth))-containerWidth)*(mousePercentX));
        var destY=-(((totalContentH-(containerHeight))-containerHeight)*(mousePercentY));
        var thePosA=mouseCoordsX-destX;
        var thePosB=destX-mouseCoordsX;
        var thePosC=mouseCoordsY-destY;
        var thePosD=destY-mouseCoordsY;
        var marginL=$imagePan_panning.css("marginLeft").replace("px", "");
        var marginT=$imagePan_panning.css("marginTop").replace("px", "");
        var animSpeed=7500; //ease amount
        var easeType="easeOutSine";
        if(mouseCoordsX>destX || mouseCoordsY>destY){
            //$imagePan_container.css("left",-thePosA-marginL); $imagePan_container.css("top",-thePosC-marginT); //without easing
            $imagePan_container.stop().animate({left: -thePosA-marginL, top: -thePosC-marginT}, animSpeed,easeType); //with easing
        } else if(mouseCoordsX<destX || mouseCoordsY<destY){
            //$imagePan_container.css("left",thePosB-marginL); $imagePan_container.css("top",thePosD-marginT); //without easing
            $imagePan_container.stop().animate({left: thePosB-marginL, top: thePosD-marginT}, animSpeed,easeType); //with easing
        } else {
            $imagePan_container.stop();
        }
    }
 
    $imagePan_panning.css("margin-left",($imagePan.width()-$imagePan_panning.width())/2).css("margin-top",($imagePan.height()-$imagePan_panning.height())/2);
 
    $imagePan.bind("mousemove", function(event){
        MouseMove(event);
    });
});
 
$(window).resize(function() {
    $imagePan.unbind("mousemove");
    $imagePan_container.css("top",0).css("left",0);
    $(window).load();
});