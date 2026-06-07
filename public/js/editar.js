const token = localStorage.getItem('token');
const formulario = document.getElementById('formulario');
const id = document.getElementById('id').value;

fetch(`/api/projects/${id}`, {
    headers: {
        'Authorization': 'Bearer ' + token
    }
})
.then(response => response.json())
.then(proyecto => {
    console.log(proyecto);
    document.getElementById('nombre').value = proyecto.nombre;
    document.getElementById('descripcion').value = proyecto.descripcion;
    document.getElementById('fecha_inicio').value = proyecto.fecha_inicio;
    document.getElementById('fecha_fin').value = proyecto.fecha_fin;
})
.catch(error => console.error('Error:', error));

// Enviar actualización con PATCH
formulario.addEventListener('submit', function(event) {
    event.preventDefault();
    
    const nombre = document.getElementById('nombre').value;
    const descripcion = document.getElementById('descripcion').value;
    const fecha_inicio = document.getElementById('fecha_inicio').value;
    const fecha_fin = document.getElementById('fecha_fin').value;
    
    fetch(`/api/projects/${id}`, {
        method: 'PATCH',  // ← PATCH
        headers: {'Content-Type': 'application/json','Authorization': 'Bearer ' + token},
        
        body: JSON.stringify({ 
            nombre: nombre, 
            descripcion: descripcion, 
            fecha_inicio: fecha_inicio,
            fecha_fin: fecha_fin,
        })
    })
    .then(r => r.json())
    .then(data => console.log(data))
    .catch(error => console.error('Error:', error));
});