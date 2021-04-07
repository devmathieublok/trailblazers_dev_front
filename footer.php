</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<!-- AOS -->
<script> AOS.init({disable: 'mobile'});</script>
<!-- AOS -->

<script>
    var swiper = new Swiper('.swiper-container', {
// Default parameters
slidesPerView: 2,
centeredSlides: false,
spaceBetween: 20,
grabCursor: true,
// Responsive breakpoints
breakpoints: {
// when window width is <= 499px
500: {
    slidesPerView: 1,
    spaceBetweenSlides: 10
},
}
});
</script>

<!-- Cursor Pointer -->
<script>
    var mouseX=window.innerWidth/2,
    mouseY=window.innerHeight/2;

    var circle = { 
        el:$('#ContactPointer'),
        x:window.innerWidth/2, 
        y:window.innerHeight/2, 
        w:80, 
        h:80, 
        update:function(){
            l = this.x-this.w/2; 
            t = this.y-this.h/2; 
            this.el.css({ 
                'transform':
                'translate3d('+l+'px,'+t+'px, 0)' }); 
        }
    }

    $(window).mousemove (function(e){
        mouseX = e.clientX;
        mouseY = e.clientY;
    })

    setInterval (move,1000/60)
    function move(){
        circle.x = lerp (circle.x, mouseX, 0.1);
        circle.y = lerp (circle.y, mouseY, 0.1);
        circle.update() 
    }

    function lerp (start, end, amt){
        return (1-amt)*start+amt*end
    }
</script>
<!-- Cursor Pointer -->