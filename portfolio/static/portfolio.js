$(document).ready( function(){

  $('.image-box img').imagesLoaded(function() {
    $(this).each( function(){
      
      var $this, box, url, height, width, ratio;
      
      $this = $(this);
      
      box = $this.parents('.image-box');
      url = $this.attr('src');
      height = $this.height();
      width = $this.width();      
      
      if( width > 780 && width > height ) {
      
        ratio = height / width;
        
        $this.remove();       
          box.css({
            'background' : 'url(' + url + ') no-repeat center center',
            'background-size' : '100% auto',
            '-moz-background-size' : '100% auto',
            '-webkit-background-size': '100% auto',
            'height' : ratio * 780 + 'px',
            'width'  : '780px',
            'margin' : '0px',
            'padding' : '0px',
            'margin' : '30px'
          }).show();
        
      } else if ( height > 780 && height > width ) {
      
        ratio = width / height;
          
        $this.remove();       
        box.css({
          'background' : 'url(' + url + ') no-repeat center center',
          'background-size' : '100% auto',
          '-moz-background-size' : '100% auto',
          '-webkit-background-size': '100% auto',
          'height' : '780px',
          'width'  : ratio * 780 + 'px',
          'margin' : '0px',
          'padding' : '0px',
          'margin' : '30px'
        }).show();
        
      } else if ( height > 780 && height == width ) {
      
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
