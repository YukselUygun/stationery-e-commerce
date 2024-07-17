function increase() {
    let quantity = parseInt(document.getElementById("quantity").value);
    quantity = quantity + 1;
    document.getElementById("quantity").value = quantity;
}


function decrease(){
    let quantity=parseInt(document.querySelector('#quantity').value);
    if (quantity>0) {
        quantity-=1;
    }
    document.querySelector("#quantity").value=quantity;
}

function increase2() {
    let quantity = parseInt(document.getElementById("quantity2").value);
    quantity = quantity + 1;
    document.getElementById("quantity2").value = quantity;
}


function decrease2(){
    let quantity=parseInt(document.querySelector('#quantity2').value);
    if (quantity>0) {
        quantity-=1;
    }
    document.querySelector("#quantity2").value=quantity;
}

function increase3() {
    let quantity = parseInt(document.getElementById("quantity3").value);
    quantity = quantity + 1;
    document.getElementById("quantity3").value = quantity;
}


function decrease3(){
    let quantity=parseInt(document.querySelector('#quantity3').value);
    if (quantity>0) {
        quantity-=1;
    }
    document.querySelector("#quantity3").value=quantity;
}