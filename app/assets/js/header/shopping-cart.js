const shoppingCartFunction = () => {
    const shoppingCart = document.querySelector(".shop-cart");
    const shoppingCartButton = document.querySelector(".cart-div");
    const closeShoppingCartButton = document.querySelector(".close-button")
    const mobileShoppingCart = document.querySelector(".shopping-cart-mobile")
    // Coloca a classe "Disable" no carrinho para que ele não apareça
    const disableShoppingCart = () => {
        if (shoppingCart.classList.contains('disable')) {
            shoppingCart.classList.remove('disable');
            console.log('disable')
        } else {
            shoppingCart.classList.add('disable');
            console.log('disablex')
        }
    }

    // Ativa e desativa o carrinho
    const useShoppingCart = () => {
        if (shoppingCart.classList.contains('disable')) {
            disableShoppingCart();
            shoppingCart.classList.remove('scale-out-hor-right');
            // Adicionando a animação de entrada
            shoppingCart.classList.add('scale-in-hor-right');
        } else {
            // Adicionando a animação de saída
            shoppingCart.classList.add('scale-out-hor-right');
            shoppingCart.classList.remove('scale-in-hor-right');
            // Timer para quando a animação acamar, o carrinho receber a classe "Disable"
            setTimeout(disableShoppingCart, 500);
        }
    }

    shoppingCartButton.addEventListener('click', useShoppingCart);
    mobileShoppingCart.addEventListener('click', useShoppingCart);
    closeShoppingCartButton.addEventListener('click', useShoppingCart);
}

export {
    shoppingCartFunction
}