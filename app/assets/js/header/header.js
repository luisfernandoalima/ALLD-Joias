const menu = document.querySelector("#checkbox-menu")

const verificar_largura = () => {
    let largura = window.innerWidth
    console.log(largura)
    if (largura <= 980) {
        menu.classList.remove('disable')
    } else{
        menu.classList.add('disable')
    }

}

verificar_largura()