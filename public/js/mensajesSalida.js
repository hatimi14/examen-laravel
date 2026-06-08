const token = localStorage.getItem('token');
const tablaMensajes = document.getElementById('mensajesSalida');
async function cargarUsuario() {

    const response = await fetch('/api/user', {
        headers: {
            Authorization: 'Bearer ' + token
        }
    });

    if (!response.ok) {

        localStorage.removeItem('token');
        window.location.href = '/';
        return;
    }

    const user = await response.json();
    console.log(user);
    fetch('/api/mensajes/salida', {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + token
        }
    })
    .then(response => {
        if (!response.ok) throw new Error('Error del servidor');
        return response.json();
    })
    .then(mensajes => {
        console.log(mensajes)
        mensajes.forEach(mensaje => {
            const fechaISO = mensaje.created_at;
            const fechaObj = new Date(fechaISO);

            // Opciones para mostrar solo el día, mes y año
            const opciones = { day: '2-digit', month: '2-digit', year: 'numeric' };
            const fechaFormateada = fechaObj.toLocaleDateString('es-ES', opciones);
            console.log(mensaje);
            if (mensaje.remitente_id == user.id){
                console.log(mensaje);
                tablaMensajes.innerHTML += `
                    
                    <td>${fechaFormateada}</td>
                    <td>${mensaje.destinatario_id}</td>
                    <td>${mensaje.asunto}</td>
                    <td><a href="/mensajesInfo/${mensaje.id}">Ver</a></td>
                    
                `;
            }
            

        });
    })
    .catch(error => {

        console.error(error);

        tablaMensajes.innerHTML =
            '<p>Error en la consulta</p>';
    });
}
cargarUsuario();
