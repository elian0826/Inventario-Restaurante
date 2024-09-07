document.addEventListener('DOMContentLoaded', function () {
    // Confirmación para eliminar
    document.querySelectorAll('form[data-confirm]').forEach(function (form) {
        form.addEventListener('submit', function (e) {
            const message = form.getAttribute('data-confirm') || '¿Estás seguro de que deseas eliminar este elemento?';
            if (!confirm(message)) {
                e.preventDefault();
            }
        });
    });

    // Confirmación para editar
    document.querySelectorAll('a[data-confirm]').forEach(function (link) {
        link.addEventListener('click', function (e) {
            const message = link.getAttribute('data-confirm') || '¿Estás seguro de que deseas EDITAR ESTE PRODUCTO?';
            if (!confirm(message)) {
                e.preventDefault();
            }
        });
    });

    // Agregar confirmación al formulario de edición
    window.confirmEdit = function () {
        return confirm('¿Estás seguro de que deseas editar este producto?');
    };
});



// custom.js
document.addEventListener('DOMContentLoaded', function () {
    window.confirmEdit = function () {
        return confirm('¿Estás seguro de que deseas editar este producto?');
    };
});


