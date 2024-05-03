
 function addone(count,price,total){
    x=document.getElementById(count).value;
    x++;
    document.getElementById(count).value=x;
    p=document.getElementById(price).value;
    t1=document.getElementById('endsubtotal').value;
    document.getElementById(total).innerHTML='$'+(p*x);
    document.getElementById('endsubtotal').value=((t1-(-p)));
    document.getElementById('endtotal').value=((t1-(-p)));
}
function dropone(count,price,total){
    x=document.getElementById(count).value;
    if(x>0){
        x--;
        document.getElementById(count).value=x;
        p=document.getElementById(price).value;
        t1=document.getElementById('endsubtotal').value;
        document.getElementById(total).innerHTML='$'+(p*x);
        document.getElementById('endsubtotal').value=(t1-p);
        document.getElementById('endtotal').value=(t1-p);
    }
}