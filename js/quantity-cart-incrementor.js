let input = document.querySelector('.input-text.qty.text');
let btnAdd = document.querySelector('.btnAdd.btn-product-quantity');
let btnLess = document.querySelector('.btnLess.btn-product-quantity');

btnAdd.addEventListener('click' , increaseQuantity);
btnLess.addEventListener('click' , reduceQuantity);

function increaseQuantity() {
	input.stepUp();
}

function reduceQuantity() {
	input.stepDown();
}

