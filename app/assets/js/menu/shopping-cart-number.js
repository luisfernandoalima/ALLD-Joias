const itemShoppingCart = () => {
    // Input de quantidade do carrinho
    const btnMais = document.querySelectorAll(".shop-cart-plus");
    const btnMenos = document.querySelectorAll(".shop-cart-minus");

    const inputQuant = document.querySelectorAll(".shop-cart-quant-input");

    btnMais.forEach((btnMais, index) => {
        btnMais.addEventListener('click', () => {
            inputQuant[index].value = parseInt(inputQuant[index].value) + 1
        })
    });

    btnMenos.forEach((btnMenos, index) => {
        btnMenos.addEventListener('click', () => {
            inputQuant[index].value = parseInt(inputQuant[index].value) - 1
        })
    })

}

export {itemShoppingCart};