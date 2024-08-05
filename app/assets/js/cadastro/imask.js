const mascaraCPF = () => {
    var inputCPF = document.querySelector("#inputCPF")

    var inputCPF = IMask(inputCPF, {
        mask: '000.000.000-00'
    })
}

export {
    mascaraCPF
}