const mobileMenu = () => {
    const menuHamburguer = document.querySelector(".label-menu");
    const menuLateral = document.querySelector('.menu-mobile');
    const closeButton = document.querySelector('.close-button-menu');
    // Altera a classe disable no menu lateral
    const disableMenu = () => {
        if (menuLateral.classList.contains('disable')) {
            menuLateral.classList.remove('disable');
        } else {
            menuLateral.classList.add('disable');
        }
        console.log("OI3")
    }

    // Ativa e desativa o menu lateral
    const useMenu = () => {
        const inputMenu = document.querySelector("#checkbox-menu")
        inputMenu.checked = false
        if (menuLateral.classList.contains('disable')) {
            disableMenu();
            menuLateral.classList.remove('scale-out-hor-right');
            // Adicionando a animação de entrada
            menuLateral.classList.add('scale-in-hor-right');
            console.log("OI1")
        } else {
            // Adicionando a animação de saída
            menuLateral.classList.add('scale-out-hor-right');
            menuLateral.classList.remove('scale-in-hor-right');
            // Timer para quando a animação acamar, o carrinho receber a classe "Disable"
            setTimeout(disableMenu, 500);
            console.log("OI2")
        }
        console.log("OI4")
    }

    menuHamburguer.addEventListener('click', useMenu);
    closeButton.addEventListener('click', useMenu);
}

export {
    mobileMenu
};