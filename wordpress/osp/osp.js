$(document).ready(function(){

$("h1").each(function(){
   $(this).clone().appendTo($(this)).css({"font-family": "SansGuilt1","color":"#dbdbdb","font-size":"1.2em", "position":"relative", "top":"-1em","z-index":"-20"});
});

});

