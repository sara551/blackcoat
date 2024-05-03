function verifyAll(){
	var a = checkName();
	var b = checkPrice();
	var c = checkDescription();
	var d = checkCategory();
	if(a==true && b==true && c==true && d==true){
		document.getElementById("submitButton").type = "submit";
	}
}

function checkName(){
	var name = document.getElementById('productName').value;
	var x = /^([\w]{2,20}[\s]?){1,4}$/;
	if(x.test(name)){
		document.getElementById('productName').style.borderColor = "green";
		return true;
	}
	else{
		document.getElementById('productName').style.borderColor = "red";
		return false;
	}
}
function checkPrice(){
	var price = document.getElementById("price").value;
	if(price.length>0){
		document.getElementById('price').style.borderColor = "green";
		return true;
	}
	else{
		document.getElementById('price').style.borderColor = "red";
		return false;
	}
}
function checkDescription(){
	var details = document.getElementById("details").value;
	if(details.length>0){
		document.getElementById('details').style.borderColor = "green";
		return true;
	}
	else{
		document.getElementById('details').style.borderColor = "red";
		return false;
	}
}
function checkCategory(){
	var category = document.getElementById("category").value;
	if(category.length>0){
		document.getElementById('category').style.borderColor = "green";
		return true;
	}
	else{
		document.getElementById('category').style.borderColor = "red";
		return false;
	}
}