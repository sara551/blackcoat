function changebannercolorw(x,y){
    document.getElementById(x).style.color="white";
    document.getElementById(y).style.color="white";
}
function changebannercolorb(x,y){
    document.getElementById(x).style.color="black";
    document.getElementById(y).style.color="rgb(87, 86, 86)";
}
function gotoshoppingWomen(){
    window.location="products.php#Women";
}
function gotoshoppingMen(){
    window.location="products.php#Men";
}
function gotoshoppingBags(){
    window.location="products.php#Bags";
}
function gotoshoppingBelts(){
    window.location="products.php#Belts";
}
function gotoshoppingAccessories(){
    window.location="products.php#Accessories";
}
function gotoshoppingWatches(){
    window.location="products.php#Watches";
}
$(document).ready(function(){
    
    $('#sliderimg1').animate({"opacity":"1"},2000,function(){
        $('#sliderimg1').animate({"opacity":"0"},2000,function(){
            $('#sliderimg2').animate({"opacity":"1"},2000,function(){
                $('#sliderimg2').animate({"opacity":"0"},2000,function(){
                    $('#sliderimg3').animate({"opacity":"1"},2000,function(){
                        $('#sliderimg3').animate({"opacity":"0"},2000,function(){
                            $('#sliderimg4').animate({"opacity":"1"},2000);
                        });
                    });
                });
            });
        });
    });
    
});