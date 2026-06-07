// GET - Listar todos
fetch('/api/telefonos', {
    method: 'GET',
    headers: { 'Content-Type': 'application/json' }
})
.then(r => r.json())
.then(data => console.log(data))
.catch(error => console.error('Error:', error));


// GET - Obtener uno por ID
fetch('/api/telefonos/5', {
    method: 'GET',
    headers: { 'Content-Type': 'application/json' }
})
.then(r => r.json())
.then(data => console.log(data))
.catch(error => console.error('Error:', error));


// POST - Crear
fetch('/api/telefonos', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ numero: '612345678', tipo: 'móvil' })
})
.then(r => r.json())
.then(data => console.log(data))
.catch(error => console.error('Error:', error));


// PUT - Reemplazar entero
fetch('/api/telefonos/5', {
    method: 'PUT',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ numero: '699999999', tipo: 'fijo' })
})
.then(r => r.json())
.then(data => console.log(data))
.catch(error => console.error('Error:', error));


// PATCH - Actualizar parcial
fetch('/api/telefonos/5', {
    method: 'PATCH',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ numero: '611000000' })
})
.then(r => r.json())
.then(data => console.log(data))
.catch(error => console.error('Error:', error));


// DELETE - Eliminar
fetch('/api/telefonos/5', {
    method: 'DELETE',
    headers: { 'Content-Type': 'application/json' }
})
.then(r => r.json())
.then(data => console.log(data))
.catch(error => console.error('Error:', error));