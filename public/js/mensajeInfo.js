const token = localStorage.getItem('token');
const id = document.getElementById('id').value;

fetch('/api/mensajeLeido/' + id, {
    method: 'PATCH',
    headers: {
        'Authorization': 'Bearer ' + token,
        'Content-Type': 'application/json'
    }
})
.then(response => response.json())
.then(data => {
    console.log(data);
});

fetch('/api/mensajeInfo/' + id, {
    method: 'GET',
    headers: {
        'Authorization': 'Bearer ' + token,
        'Content-Type': 'application/json'
    }
})
.then(response => response.json())
.then(data => {
    console.log(data);
    const mensajeInfoDiv = document.getElementById('mensajeDetalles');
    mensajeInfoDiv.innerHTML = `
        <p><strong>Destinatario:</strong> ${data.destinatario_id}</p>
        <p><strong>Remitente:</strong> ${data.remitente_id}</p>
        <p><strong>Asunto:</strong> ${data.asunto}</p>
        <p><strong>Contenido:</strong> ${data.mensaje}</p>
    `;
})
.catch(error => console.error('Error:', error));