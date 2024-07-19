const pageUpTextFunction = () => {
    const pageUp = document.querySelector('.voltar-div');
    const pageUpText = document.querySelector('.pageUpText');

    pageUp.addEventListener('mouseover', () => {
        pageUpText.classList.add('pageUpTextHover');
    });

    pageUp.addEventListener('mouseout', () => {
        pageUpText.classList.remove('pageUpTextHover');
    })
}

export {pageUpTextFunction};