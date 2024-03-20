var modal = document.getElementById("myModal");
var btn = document.getElementById("cart");
var close = document.getElementsByClassName("close")[0];


var closefooter = document.getElementsByClassName("close-footer")[0];
var order = document.getElementsByClassName("order")[0];
btn.onClick = function () {
  modal.style.display = "block";
}
close.onClick = function () {
  modal.style.display = "none";
}
closefooter.onClick = function () {
  modal.style.display = "none";
}
order.onClick = function () {
  alert("Merci  de votre achat ")
}
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



var fullImgBox = document.getElementById("fullImgBox")
var fullImg = document.getElementById("fullImg")
function openFullImg(pic){
    fullImgBox.style.display = "flex"
    fullImg.src = pic
}
function closeFullImg(){
        fullImgBox.style.display = "none";
}

var removecart = document.getElementsByClassName("btn-danger");
for (var i = 0; i < removecart.length; i++) {
  var button = removecart[i]
  button.addEventListener("click", function () {
    var buttonremove = event.target
    buttonremove.parentElement.parentElement.remove()
    updatecart();
  })
}

function updatecart() {
    var cartitem = document.getElementsByClassName("cart-items")[0];
    var cartrows = cartitem.getElementsByClassName("cart-row");
    var total = 0;
    for (var i = 0; i < cartrows.length; i++) {
      var cartrow = cartrows[i]
      var priceitem = cartrow.getElementsByClassName("cart-price ")[0]
      var quantityitem = cartrow.getElementsByClassName("cart-quantity-input")[0]
      var price = parseFloat(priceitem.innerText)
      var quantity = quantityitem.value 
      total = total + (price * quantity)
    }
    document.getElementsByClassName("cart-total-price")[0].innerText = total + '$'
    
}
var quantityinput = document.getElementsByClassName("cart-quantity-input");
for (var i = 0; i < quantityinput.length; i++) {
  var input = quantityinput[i];
  input.addEventListener("change", function (event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
      input.value = 1;
    }
    updatecart()
  })
}


var addcart = document.getElementsByClassName("btn-cart");
for (var i = 0; i < addcart.length; i++) {
  var add = addcart[i];
  add.addEventListener("click", function (event) {

    var button = event.target;
    var product = button.parentElement.parentElement;
    var img = product.parentElement.getElementsByClassName("img-prd")[0].src
    var title = product.getElementsByClassName("content-product-h3")[0].innerText
    var price = product.getElementsByClassName("price")[0].innerText
    addItemToCart(title, price, img)
  
    modal.style.display = "block";
    
    updatecart()
  })
}

function addItemToCart(title, price, img) {
  var cartRow = document.createElement('div')
  cartRow.classList.add('cart-row')
  var cartItems = document.getElementsByClassName('cart-items')[0]
  var carttitle = cartItems.getElementsByClassName('cart-item-title')
  
  for (var i = 0; i < carttitle.length; i++) {
    if (carttitle[i].innerText == title) {
      alert('Item already in the cart')
      return
    }
  }

  var cartRowContents = `
  <div class="cart-item cart-column">
      <img class="cart-item-image" src="${img}" width="100" height="100">
      <span class="cart-item-title">${title}</span>
  </div>
  <span class="cart-price cart-column">${price}</span>
  <div class="cart-quantity cart-column">
      <input class="cart-quantity-input" type="number" value="1">
      <button class="btn btn-danger" type="button">Delete</button>
  </div>`
  cartRow.innerHTML = cartRowContents
  cartItems.append(cartRow)
  cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', function () {
    var buttonremove = event.target
    buttonremove.parentElement.parentElement.remove()
    updatecart()
  })
  cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', function (event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
      input.value = 1;
    }
    updatecart()
  })
}