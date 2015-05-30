var code = [0,0,0,0,0,0,0,0,0,0,0];
var main = function() {
var gaben = document.getElementById('music');

  $(document).keydown(function(e) {
      
      for (i=10; i>0; i--){
          code[i] = code[(i-1)];
      }
      console.log(e.keyCode);
      code[0]=(e.keyCode);
      if (
          code[10]==38 &&
          code[9]==38 &&
          code[8]==40 &&
          code[7]==40 &&
          code[6]==37 &&
          code[5]==39 &&
          code[4]==37 &&
          code[3]==39 &&
          code[2]==66 &&
          code[1]==65 &&
          code[0]==13
      ){
          $('body').toggleClass('font-effect-fire-animation');
          if (gaben.paused == false) {
            gaben.pause();
          } else {
            gaben.play();
          }
  }else{
     if (
          code[6]==38 &&
          code[5]==38 &&
          code[4]==68 &&
          code[3]==69 &&
          code[2]==66 &&
          code[1]==85 &&
          code[0]==71
      ){
      window.open("http://104.236.162.97/debug.php");  
  } 
  }});

};


$(document).ready(main);