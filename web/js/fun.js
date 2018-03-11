//функции для слайдера
 var next = document.getElementById("next");
    var prev = document.getElementById("prev");
    var slides = document.getElementsByClassName("slide");
    for (var i = 0; i<slides.length; i++) {
        slides[i].style.zIndex = slides.length - i;}

    next.onclick = function () {
        var activEl = document.querySelector(".active");
        if (activEl.nextElementSibling) {
            activEl.style.top = "-100%";
            activEl.classList.remove("active");
            activEl.nextElementSibling.classList.add("active");
            this.classList.remove("no_active");
            prev.classList.remove("no_active");
            if (!activEl.nextElementSibling.nextElementSibling) {
                this.classList.add("no_active");  }
        }
    }   

     prev.onclick = function () {
        var activEl = document.querySelector(".active");
        if (activEl.previousElementSibling) {
            activEl.previousElementSibling.style.top = "0%";
            activEl.classList.remove("active");
            activEl.previousElementSibling.classList.add("active");
            this.classList.remove("no_active");
            next.classList.remove("no_active");
            if (!activEl.previousElementSibling.previousElementSibling) {
                this.classList.add("no_active");  }
        }
    }   
  // Выпадание маленького меню при нажатии на кнопку
    var buttom_men=document.getElementById("buttom_menu"),
        small_menu=document.getElementsByClassName("menu");
    buttom_men.onclick=function() {
        if (small_menu[0].style.visibility == 'visible') 
                {small_menu[0].style.visibility = 'hidden';}
        else
                {small_menu[0].style.visibility = 'visible';}}

        document.getElementById("button_main_page").onclick=function (){
                      window.document.location='#page_techno';    }

 /* скрипт фиксации меню га больших экранах */
    function getTopOffset(e) { 
        var y = 0;
        do { y += e.offsetTop; } while (e = e.offsetParent);
        return y; }
        var block = document.querySelector(".page_menu"); 
        if ( null != block ) {
        var topPos = getTopOffset( block );
        window.onscroll = function() {
        var newcss = (topPos < window.pageYOffset) ? 
            'top:20px; right:10px; position: fixed;' : 'position:static;';

        block.setAttribute( 'style', newcss );//добавляет новый атрибут диву с классом page_menu
    }
}
