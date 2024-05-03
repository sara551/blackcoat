function buttonHover(x,y){
	document.getElementById(y).style.bottom = "10%";
	document.getElementById(x).style.transform = "scale(1.1)";
}
function buttonHidden(x,y){
	document.getElementById(y).style.bottom = "-13.5%";
	document.getElementById(x).style.transform = "none";
}

function openProduct(source1,source2,source3){
	document.getElementById("productImage").src = "images/productimages/"+source1;
	document.getElementById("product-img1").src = "images/productimages/"+source1;
	document.getElementById("product-img2").src = "images/productimages/"+source2;
	document.getElementById("product-img3").src = "images/productimages/"+source3;
	document.getElementById("product").style.visibility = "visible";
	document.getElementById("product").style.position = "fixed";
}
function closeProduct(){
	document.getElementById("product").style.visibility = "hidden";
}

function counterup(){
	x = document.getElementById("itemsNumber").value;
	x++;
	document.getElementById("itemsNumber").value = x;
}
function counterdown(){
	x = document.getElementById("itemsNumber").value;
	if(x > 1){
		x--;
		document.getElementById("itemsNumber").value = x;
	}
}

function text(textName,priceValue,productDetails,id){
	document.getElementById('productName').innerHTML = textName;
	document.getElementById('productPrice').innerHTML = priceValue;
	document.getElementById('details').innerHTML = productDetails;
	document.getElementById('productid').value=id;
}

function separate(x){
	var c;
	for(var i=0;i<x.length;i++){
		c +=x.charAt(i);
	}
	return c;
}

$(document).ready(function(){
		
		url = window.location.href;
		a = url.match(/Women/g);
		b = url.match(/Men/g);
		c = url.match(/Belts/g);
		d = url.match(/Bags/g);
		e = url.match(/Watches/g);
		f = url.match(/Accessories/g);
		
	
		w = $(window).width();
		h = $(window).height();
		pWidth = $(".view").width();
		cardHeight = $(".view").height();
		cardWidth = $(".card").width();
		
		$(".view").css("left",((w-pWidth)/2));
		$("#product").css("height",h);
		$("#product").css("width",w);
		$("#product").css("padding-top",(((h-cardHeight)/2)));
		
		
		if(w > 1200){
			$(".card").css("margin","0px "+((w-(cardWidth*4))/8.3)+"px");
		}
		else if(w >= 800){
			$(".card").css("margin","0px "+((w-(cardWidth*2))/4.09)+"px");
		}
		else{
			$(".card").css("margin","0px "+((w-(cardWidth))/2)+"px");
		}
		
		if(a!=null){
			$(".card").hide();
			$("#all,#men,#bags,#belts,#watches,#accessories").removeClass("all");
			$(".women").show(1000);
			$("#women").addClass("all");
		}
		else if(b!=null){
			$(".card").hide();
			$("#all,#women,#bags,#belts,#watches,#accessories").removeClass("all");
			$(".men").show(1000);
			$("#men").addClass("all");
		}
		else if(c!=null){
			$(".card").hide();
			$("#all,#women,#bags,#accessories,#watches,#men").removeClass("all");
			$(".belts").show(1000);
			$("#belts").addClass("all");
		}
		else if(d!=null){
			$(".card").hide();
			$("#all,#women,#accessories,#belts,#watches,#men").removeClass("all");
			$(".bags").show(1000);
			$("#bags").addClass("all");
		}
		else if(e!=null){
			$(".card").hide();
			$("#all,#women,#bags,#belts,#accessories,#men").removeClass("all");
			$(".watches").show(1000);
			$("#watches").addClass("all");
		}
		else if(f!=null){
			$(".card").hide();
			$("#all,#women,#bags,#belts,#watches,#men").removeClass("all");
			$(".accessories").show(1000);
			$("#accessories").addClass("all");
		}
		
		
		$("#women,#men,#bags,#belts,#watches,#accessories").click(function(){
			$(".card").hide();
		});
		$("#women").click(function(){
			$("#all,#men,#bags,#belts,#watches,#accessories").removeClass("all");
			$(".women").show(1000);
			$("#women").addClass("all");
		});
		$("#all").click(function(){
			$("#women,#men,#bags,#belts,#watches,#accessories").removeClass("all");
			$(".card").show(1000);
			$("#all").addClass("all");
		});
		$("#men").click(function(){
			$("#all,#women,#bags,#belts,#watches,#accessories").removeClass("all");
			$(".men").show(1000);
			$("#men").addClass("all");
		});
		$("#bags").click(function(){
			$("#all,#women,#accessories,#belts,#watches,#men").removeClass("all");
			$(".bags").show(1000);
			$("#bags").addClass("all");
		});
		$("#belts").click(function(){
			$("#all,#women,#bags,#accessories,#watches,#men").removeClass("all");
			$(".belts").show(1000);
			$("#belts").addClass("all");
		});
		$("#watches").click(function(){
			$("#all,#women,#bags,#belts,#accessories,#men").removeClass("all");
			$(".watches").show(1000);
			$("#watches").addClass("all");
		});
		$("#accessories").click(function(){
			$("#all,#women,#bags,#belts,#watches,#men").removeClass("all");
			$(".accessories").show(1000);
			$("#accessories").addClass("all");
		});
		
	});

function change(x){
	src = document.getElementById(x).src;
	document.getElementById("productImage").src = src;
}

