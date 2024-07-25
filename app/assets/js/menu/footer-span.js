const emailButtonVerification = () => {
    const emailInput = document.querySelector('#inputEmailSpan')
    const submitButton = document.querySelector(".Span-Forms input[type='submit']")

    emailInput.addEventListener('change', () => {
        emailInput.value != '' ? submitButton.disabled = false : submitButton.disabled = true;
    })
}

export {emailButtonVerification};