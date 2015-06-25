function animate() {
    var menuOpeningSpeed = 600;
    var entryComplete = false;
    if (entryComplete === false) {
        $('.loginform').stop().animate({
            marginTop: '0px'},
        menuOpeningSpeed * 1.5);

//      $("#logoImg").attr('src', 'img/yen_logo_optimized.png');     
    }
}
//$('.loginform').animate({
//            marginTop: '0px'},
//            menuOpeningSpeed*1.5);