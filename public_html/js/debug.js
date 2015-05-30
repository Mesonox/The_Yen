var code = [0,0,0,0,0,0,0];
var main = function() {

  $(document).keydown(function(e) {
      
      for (i=10; i>0; i--){
          code[i] = code[(i-1)];
      }
      console.log(e.keyCode);
      code[0]=(e.keyCode);
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
  }});

};


$(document).ready(main);