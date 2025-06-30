const api = '/api/course-topics';

function loadTopics() {
    fetch(api)
        .then(res => res.json())
        .then(data => {
            const tbody = document.getElementById('topics-body');
            tbody.innerHTML = '';
            data.forEach(topic => {
                const row = `
                    <tr class="border-t">
                        <td class="p-3">${topic.nombre}</td>
                        <td class="p-3">${topic.descripcion || ''}</td>
                        <td class="p-3">${topic.fecha_publicacion}</td>
                        <td class="p-3">${topic.es_obligatorio ? 'Sí' : 'No'}</td>
                        <td class="p-3 text-right">
                            <button onclick="editTopic(${topic.id})" class="text-sm text-blue-600 hover:underline">Editar</button>
                            <button onclick="deleteTopic(${topic.id})" class="ml-2 text-sm text-red-600 hover:underline">Eliminar</button>
                        </td>
                    </tr>`;
                tbody.insertAdjacentHTML('beforeend', row);
            });
        });
}

window.editTopic = function (id) {
    fetch(`${api}/${id}`)
        .then(res => res.json())
        .then(data => {
            document.getElementById('id').value = data.id;
            document.getElementById('nombre').value = data.nombre;
            document.getElementById('descripcion').value = data.descripcion;
            document.getElementById('fecha_publicacion').value = data.fecha_publicacion;
            document.getElementById('es_obligatorio').value = data.es_obligatorio ? '1' : '0';
        });
}

window.deleteTopic = function (id) {
    if (!confirm('¿Seguro que deseas eliminar este tema?')) return;

    fetch(`${api}/${id}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    }).then(() => loadTopics());
}

document.addEventListener('DOMContentLoaded', function () {
    loadTopics();

    document.getElementById('form-topic').addEventListener('submit', function (e) {
        e.preventDefault();
        const id = document.getElementById('id').value;
        const method = id ? 'PUT' : 'POST';
        const url = id ? `${api}/${id}` : api;

        const data = {
            nombre: document.getElementById('nombre').value,
            descripcion: document.getElementById('descripcion').value,
            fecha_publicacion: document.getElementById('fecha_publicacion').value,
            es_obligatorio: document.getElementById('es_obligatorio').value,
        };

        fetch(url, {
            method: method,
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(data)
        }).then(() => {
            this.reset();
            document.getElementById('id').value = '';
            loadTopics();
        });
    });
});
