function addToCart(el) {
    const xhr = new XMLHttpRequest()
    xhr.open('POST', '/item/add', true)
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    xhr.onload = function() {
        document.getElementById('cart').innerHTML = '' +
            '<i class="fa fa-shopping-cart"></i><span>Корзина</span><div class="qty">'+this.responseText+'</div>'
        el.innerHTML = '<div class="cart-stepper">'
            + '<input onclick="minCart(this)" type="button" size="50" class="btn-qty" value="-">'
            + '<input type="text" id="'+el.children[1].value+'" class="text-qty" value="1" disabled>'
            + '<input onclick="plusCart(this)" type="button" size="50"  class="btn-qty" value="+">'
            +'</div>'
        el.removeAttribute("onclick")
    }
    let params = "id="+document.getElementById('name'+(el.children[1].value)).value  // Параметр id для POST запроса
    xhr.send(params)
}

function minCart(el) {

    if (el.nextElementSibling.value > 1) {
        const xhr = new XMLHttpRequest()
        xhr.open('POST', '/item/delete', true)
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
        xhr.onload = function () {
            el.nextElementSibling.value--
            document.getElementById('cart').innerHTML = '' +
                '<i class="fa fa-shopping-cart"></i><span>Корзина</span><div class="qty">'+this.responseText+'</div>'
        }
        let params = "id=" + el.nextElementSibling.id
        xhr.send(params)
    }else {
        const xhr = new XMLHttpRequest()
        xhr.open('POST', '/item/delete', true)
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
        xhr.onload = function () {
            document.getElementById('cart').innerHTML = '' +
                '<i class="fa fa-shopping-cart"></i><span>Корзина</span><div class="qty">'+this.responseText+'</div>'
        }
        let params = "id=" + el.nextElementSibling.id
        xhr.send(params)

        let id = el.nextElementSibling.id
        el.parentElement.innerHTML = '<div onclick="addToCart(this)" class="btn-cart">'
            +'<input type="hidden" id="name'+id+'" name="id" value="'+id+'">'
            +'<button class="add-to-cart-btn" value="'+id+'" type="button"><i class="fa fa-shopping-cart"></i>В КОРЗИНУ</button>'
            +'</div>'
    }
}

function plusCart(el) {
    const xhr = new XMLHttpRequest()
    xhr.open('POST', '/item/add', true)
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    xhr.onload = function () {
        el.previousElementSibling.value++
        document.getElementById('cart').innerHTML = '' +
            '<i class="fa fa-shopping-cart"></i><span>Корзина</span><div class="qty">'+this.responseText+'</div>'
    }
    let params = "id=" + el.previousElementSibling.id
    xhr.send(params)
}