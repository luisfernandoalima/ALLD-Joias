const barraDePesquisa = () => {
    const searchBar = document.querySelector(".search-bar-forms");
    const inputSearchBar = document.querySelector("#search-bar");

    searchBar.addEventListener("click", () => {
        inputSearchBar.focus()
    })

    const searchBarMobile = document.querySelector(".search-bar-mobile-forms");
    const inputSearchBarMobile = document.querySelector("#search-bar-mobile")

    searchBarMobile.addEventListener('click', () => {
        inputSearchBarMobile.focus()
    })
}

export {
    barraDePesquisa
};