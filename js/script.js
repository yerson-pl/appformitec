$(function(){
    var toogleMenu = $('#toogle-menu');
    var nav = $('#main-nav  ');
    toogleMenu.on('click', function(){
        nav.add($('body')).toggleClass('mostrar');
    });
});