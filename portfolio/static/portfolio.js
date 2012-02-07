$(document).ready( function(){

  $('.image-box img').imagesLoaded(function() {
    $(this).each( function(){
      
      var $this, box, url, height, width;
      
      $this = $(this);
      
      box = $this.parents('.image-box');
      url = $this.attr('src');
      height = $this.height();
      width = $this.width();
      
      
      if( height > 780 || width > 780 ) {
      
      $this.remove();       
        box.css({
          'background' : 'url(' + url + ') no-repeat center center',
          'background-size' : '100% auto',
          '-moz-background-size' : '100% auto',
          '-webkit-background-size': '100% auto',
          'height' : '780px',
          'width'  : '780px',
          'margin' : '0px',
          'padding' : '0px',
          'margin' : '30px'
        }).show();
        
      }
    });
  });

});
