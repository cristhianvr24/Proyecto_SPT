document.getElementById("button-up").addEventListener("click", scrollup);
function scrollup(){
    var currentscroll= document.documentElement.scrollTop || document.body.scrollTop;
    if (currentscroll > 0) {
        window.requestAnimationFrame(scrollup);
        window.scrollTo (0, currentscroll - (currentscroll/10));
    }

}

buttonup = document.getElementById("button-up");
window.onscroll = function() {
    var scroll = document.documentElement.scrollTop;
    if (scroll > 300) {
        buttonup.style.transform = "scale(1)";
    }else if(scroll < 300){
        buttonup.style.transform = "scale(0)";
    }
}