const mostrarSenha = () => {
    const inputSenha = document.querySelector("#inputSenha")
    const checkSenha = document.querySelector("#checkbox-ShowPassword")

    checkSenha.addEventListener('change',()=>{
        if(checkSenha.checked){
            inputSenha.type = "text"
        } else{
            inputSenha.type = "password"
        }
    })
}

const mostrarConfirmarSenha = () => {
    const inputSenha2 = document.querySelector("#inputConfirmarSenha")
    const checkSenha2 = document.querySelector("#checkbox-ShowPassword2")

    checkSenha2.addEventListener('change', () => {
        if(checkSenha2.checked){
            inputSenha2.type = "text"
        } else{
            inputSenha2.type = "password"
        }
    })
}

export {
    mostrarSenha,
    mostrarConfirmarSenha
}