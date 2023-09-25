let nav=document.querySelector('nav');
window.addEventListener("scroll",()=>{
    if(window.scrollY > 50 ){
        nav.style.backgroundColor="#111827"
    }else{
        nav.style.backgroundColor="transparent"
    }

});

var smooth = [$('a.smooth'), 100, 750];

smooth[0].click(function() {
   $('html, body').animate({
      scrollTop: $('[id="' + $.attr(this, 'href').substr(1) + '"]').offset().top -smooth[1]
   }, smooth[2]);
   return false;
});