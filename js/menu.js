(() => {

    var button = document.querySelector('#button');
    var burgerCon = document.querySelector('#burgerCon');
    
    function hamburgerMenu() {
        burgerCon.classList.toggle("slideToggle");
        button.classList.toggle("expanded");
    }
    

    button.addEventListener("click", hamburgerMenu, false);

})();