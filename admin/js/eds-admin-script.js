document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('#eds_menu .eds-menu-item > a');

    menuItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();

            const parent = this.parentElement; // Élément parent (.eds-menu-item)
            const submenu = parent.querySelector('.eds-submenu-2d'); // Sous-menu du parent
            const currentlyActive = document.querySelector('#eds_menu .eds-menu-item.active');

            // Si un autre menu est actif, le fermer
            if (currentlyActive && currentlyActive !== parent) {
                const activeSubmenu = currentlyActive.querySelector('.eds-submenu-2d');
                if (activeSubmenu) {
                    activeSubmenu.style.minHeight = null; // Réinitialise la hauteur
                    activeSubmenu.classList.remove('active'); // Supprime la classe active
                }
                currentlyActive.classList.remove('active'); // Supprime la classe active
            }

            // Activer ou désactiver le menu actuel
            if (parent.classList.contains('active')) {
                submenu.style.minHeight = null; // Fermer le sous-menu
                submenu.classList.remove('active'); // Supprime la classe active
                parent.classList.remove('active');
            } else {
                // Recalculer la hauteur totale du sous-menu
                const totalHeight = calculateSubmenuHeight(submenu);

                // Ajuster la hauteur du sous-menu
                submenu.style.minHeight = totalHeight + 'px';
                submenu.classList.add('active'); // Ajoute la classe active
                parent.classList.add('active');
            }
        });
    });

    function calculateSubmenuHeight(submenu) {
        const submenuItems = submenu.querySelectorAll('li');
        let totalHeight = 0;
        submenuItems.forEach(submenuItem => {
            totalHeight += submenuItem.offsetHeight;
        });
        return totalHeight;
    }
});
