var main = function() {
    
    var menuOpeningSpeed = 600;
    var menuToggled = false;

  $('body').click(function() {
    if(menuToggled===false){
        $('.menu').stop().animate({
            left: "0px"},
            menuOpeningSpeed);
        
        $('.intro').stop().animate({
            top: "-80", fontSize: "45"}, menuOpeningSpeed/2, function(){
        $('.jumbotron').animate({
            marginLeft: '-215px',
            left: '100%'
        },menuOpeningSpeed/2);});
        
        $('.clock').stop().animate({
            top: "72", fontSize: "110"}, menuOpeningSpeed/2, function(){
        $('.widget').animate({
            marginLeft: '-270px',
            left: '100%'
        },menuOpeningSpeed/2);});
        
        $('.topImage').stop().fadeOut({queue: false, duration: menuOpeningSpeed});
        $('.images img').animate({
            maxWidth: "105%"},
        menuOpeningSpeed);
        
        menuToggled = true;
    }
    else{
        $('.menu').stop().animate({
            left: "-285px"},
            menuOpeningSpeed);
        
        $('.jumbotron').stop().animate({
            marginLeft: '0px',
            left: "50%"},menuOpeningSpeed/2, function(){
        $('.intro').stop().animate({
            top: "80", fontSize: "80"},menuOpeningSpeed/2);});
            
        $('.widget').stop().animate({
            marginLeft: '0px',
            left: "50%"},menuOpeningSpeed/2, function(){
        $('.clock').stop().animate({
            top: "400", fontSize: "80"},menuOpeningSpeed/2);});
        
        $('.topImage').stop().fadeIn({queue: false, duration: menuOpeningSpeed});
        $('.images img').animate({
            maxWidth: "110%"},
            menuOpeningSpeed);
        menuToggled = false;
    }
  });
};


$(document).ready(main);