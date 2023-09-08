const submenuItems = document.querySelectorAll(".submenu");

submenuItems.forEach(submenuItem => {
    const submenuLinks = submenuItem.querySelectorAll("ul li a");

    submenuLinks.forEach(submenuLink => {
        submenuLink.addEventListener("click", (event) => {            
            // Supprimer la classe "active" de tous les sous-menus
            event.target.classList.toggle("active");
            submenuItems.forEach(item => {
                item.classList.remove("active");
            });

            // Ajouter la classe "active" au parent du lien cliqué
            submenuItem.classList.add("active");
        });
    });
});
