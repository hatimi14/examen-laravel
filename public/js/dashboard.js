const token = localStorage.getItem('token');

if (!token) {
    window.location.href = '/';
}

// FUERA de cargarUsuario para que onclick pueda verla
/*async function cargarProyecto(id) {

    const featured = document.getElementsByClassName('featured')[0];

    const response = await fetch(`/api/projects/${id}`, {
        headers: {
            Authorization: 'Bearer ' + token
        }
    });

    if (!response.ok) {
        console.error('Error cargando proyecto');
        return;
    }

    const proyecto = await response.json();

    featured.innerHTML = `
        <h2>${proyecto.nombre}</h2>
        <p>${proyecto.descripcion}</p>
        <p>${proyecto.fecha_inicio}</p>
        <p>${proyecto.fecha_fin}</p>

        <a href="/editarProyecto/${proyecto.id}">
            Editar proyecto
        </a>
    `;
}

// Necesario para onclick=""
window.cargarProyecto = cargarProyecto;*/

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

    document.getElementById('saludo').innerText =
        'Bienvenido ' + user.name;

    /*const sidebar = document.getElementsByClassName('sidebar')[0];*/
    const header = document.getElementsByTagName('header')[0];

    /*const linka = document.createElement('a');
    linka.href = '/crearProyecto';
    linka.textContent = 'Añade un nuevo proyecto';

    header.appendChild(linka);*/
    const linka = document.createElement('a');
    linka.href = '/nuevoMensaje';
    linka.textContent = 'Añade un nuevo mensaje';

    header.appendChild(linka);

    /*fetch('/api/projects', {
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
    .then(proyectos => {

        if (proyectos.length > 0) {

            sidebar.innerHTML = '<h2>Llistat del meus projectes</h2>';

            proyectos.forEach(proyecto => {

                sidebar.innerHTML += `
                    <a href="#"
                       onclick="cargarProyecto(${proyecto.id})">
                        ${proyecto.nombre}
                    </a>
                    <br>
                `;
            });

            // Mostrar el último proyecto al entrar
            fetch('/api/projects/latest', {
                headers: {
                    'Authorization': 'Bearer ' + token
                }
            })
            .then(r => r.json())
            .then(proyecto => {

                if (proyecto) {
                    cargarProyecto(proyecto.id);
                }

            });

        } else {

            sidebar.innerHTML =
                '<p>No hay proyectos registrados</p>';
        }
    })
    .catch(error => {

        console.error(error);

        sidebar.innerHTML =
            '<p>Error en la consulta</p>';
    });*/
}

cargarUsuario();

document.getElementById('logout')
.addEventListener('click', async () => {

    await fetch('/api/logout', {
        method: 'POST',
        headers: {
            Authorization: 'Bearer ' + token
        }
    });

    localStorage.removeItem('token');

    window.location.href = '/';
});