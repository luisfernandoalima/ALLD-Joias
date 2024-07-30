const showPassword = () => {
    const inputPassword = document.querySelector("#inputPassword")
    const checkBoxPassword = document.querySelector("#checkbox-ShowPassword")
    
    checkBoxPassword.addEventListener('change', () => {
        // Se estiver marcado
        if(checkBoxPassword.checked){
            // Muda o tipo do input para texto
            inputPassword.type = 'text'
        } else{
            // Muda o tipo do input para Senha
            inputPassword.type = 'password'
        }
    })
}

showPassword()