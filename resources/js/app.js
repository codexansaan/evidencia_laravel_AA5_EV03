import './bootstrap';// resources/js/app.js
import '@fortawesome/fontawesome-free/js/all.js';


    function confirmDelete() {
        if (confirm('¿Estás seguro de eliminar este registro?')) {
            document.getElementById('btn-eliminar').submit();
        }
    }

