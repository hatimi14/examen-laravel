const token = localStorage.getItem('token');
const boton = document.getElementById("boton");
const formulario = document.getElementById("formulario");

fetch('/api/mensajes/destinatarios', {
    method: 'GET',
    headers: { 'Content-Type': 'application/json' , 'Authorization': 'Bearer ' + token}
})
.then(r => r.json())
.then(usuarios => {
    const select = document.getElementById('selectDestinatarios');
    console.log(usuarios);
    usuarios.forEach(user => {
        console.log(user);
        const option = document.createElement('option');
        option.value = user.id;
        option.textContent = user.name;
        select.appendChild(option);
    });
})
.catch(error => console.error('Error:', error));


formulario.addEventListener("submit", function(event) {
    event.preventDefault()
    const destinatario = document.getElementById('selectDestinatarios').value;
    const assumpte = document.getElementById('assumpte').value;
    const missatge = document.getElementById('missatge').value;
    console.log(destinatario, assumpte, missatge);
    console.log("hola");
    fetch('/api/mensajes/create', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' , 'Authorization': 'Bearer ' + token},
        body: JSON.stringify({ destinatario_id: destinatario, asunto: assumpte, mensaje: missatge })
    })
    .then(r => r.json())
    .then(data => {
        console.log(data);
        setTimeout(() => {
            window.location.href = '/dashboard';
        }, 500);
    })
    .catch(error => console.error('Error:', error));
});

