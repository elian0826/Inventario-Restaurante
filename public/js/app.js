// Importar Bootstrap JS (si usas Bootstrap)
import 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js';

// Aquí puedes escribir tus scripts personalizados
document.addEventListener('DOMContentLoaded', function() {
    console.log('Document loaded and ready.');
    
    // Ejemplo: Agregar funcionalidad a un botón (opcional)
    const logoutButton = document.querySelector('.btn-danger');
    if (logoutButton) {
        logoutButton.addEventListener('click', function() {
            alert('Saliendo del sistema...');
        });
    }
});


/////////////////////////////////////////////////////////////
    
document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.getElementById('sidebar');
    const toggleButton = document.querySelector('.btn-custom'); // Si necesitas añadir un botón de toggle

    // Ejemplo: animación para mostrar/ocultar el sidebar
    toggleButton.addEventListener('click', function () {
        sidebar.classList.toggle('active');
    });
});







