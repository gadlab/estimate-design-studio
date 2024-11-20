// Exemple : Ajouter une alerte lors du clic sur un bouton.
document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('#eds-button')?.addEventListener('click', () => {
        alert('Bouton cliqué !');
    });
});
