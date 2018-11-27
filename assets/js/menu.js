// Menu Functionality
$(document).ready(function(){
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ){
        get=document.getElementsByClassName("sub-menu-handler");
        for(i=0; i<get.length; i++){
            get[i].removeEventListener("mouseenter", showSubMenu, false);
            get[i].removeEventListener("mouseleave", hideSubMenu, false);
        }
    }
	if(msie()){
		$("body").addClass("IE");
	}
});
function toggleSubMenu(){
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ){
        $(".sub-menu-wrap").slideToggle();
    }
}
function showSubMenu(){
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ){
        
    }
    else{
        $(".sub-menu-wrap").stop(true).slideDown();
    }
}
function hideSubMenu(){
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ){
        
    }
    else{
        $(".sub-menu-wrap").stop(true).slideUp();
    }
}

function openNav() {
    document.getElementById("sideBar").style.width = "280px";
    $(".menu").toggle(300);
}

function closeNav() {
    document.getElementById("sideBar").style.width = "0";
    $(".menu").toggle(300);
}
$('html').click(function() {
    if(document.getElementById("sideBar").style.width == "280px"){
        closeNav(); 
    }
});

$('#sideBar').click(function(event){
    event.stopPropagation();
});
$('.menu').click(function(event){
    event.stopPropagation();
});

function msie() {

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))  // If Internet Explorer, return version number
    {
        return true;
    }

    return false;
}