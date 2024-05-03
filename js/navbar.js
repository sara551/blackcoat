window.addEventListener("scroll",function(){
    var header=document.querySelector("header");
    header.classList.toggle("sticky",window.scrollY >0);
});
function gotocart(){
    window.location="cart.php";
}
$(document).ready(function(){
    $(".optionsbtn").click(function(){
        $(".optionslider").animate({"right":"0%"},500);
        $(".exit").animate({"right":"3%"},500);
        
    });
    $(".exit").click(function(){
        $(".optionslider").animate({"right":"-100%"},500);
        $(".exit").animate({"right":"-90%"},500);

    });


})