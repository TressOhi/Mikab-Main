function beginning(){
    var historyH= document.getElementById("about-brief-history");
    var abPhoto= window.getComputedStyle(historyH, null).getPropertyValue("height");
    document.getElementById("about-photo").style.height=abPhoto;
    
    if(window.innerWidth < 890){
        bar.style.display="block";
    }
    else{
        bar.style.display="none"; 
    }
}
var barcon= document.getElementById("side-nav");
var bar= document.getElementById("side-nav-open");
function openSideNav(){
    barcon.style.width="15em";
    bar.style.display="none";
}
function closeSideNav(){
    barcon.style.width="0em";
    bar.style.display="block";
}