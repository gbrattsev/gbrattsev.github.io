'use strict'

$(document).ready(function() {
  
  $( "#start" ).click(function() {
    setTimeout(function() {
      $('.start , .carousel').toggleClass('hide');
    },300);    
  });

});