een = '.wzvtnatsnoc.pso@liam||gro'
eentjes = een.split("||");
var reverse = function (s) {
  var ret ='';
  for (var i=s.length-1;i>=0;i--)
    ret+=s.charAt(i);
  return ret;
}

een = reverse(eentjes[0])+reverse(eentjes[1]);

$(function() {
  $('.envoyez').attr('href', 'mailto:' + een);
});