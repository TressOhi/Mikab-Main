var nav = document.getElementById("navbar");
var sticky = nav.offsetTop;

window.onscroll = function(){
    if(window.pageYOffset >= sticky){
        nav.classList.add("sticky");
    }
    else{
        nav.classList.remove("sticky")
    }
}