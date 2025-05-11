function cargarContenido(abrir) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	fetch(abrir)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}

function crearPersona() {
    var datos = new FormData(document.querySelector('#form-crear'));

    fetch("create.php",
		{method:"POST",
		body:datos})
		.then(response => response.text())
		.then(data => document.querySelector("#contenido").innerHTML=data);
}

function cargarPagina(pagina,buscar,orden,ascendente) {
    var url = `read.php?pagina=${pagina}&buscar=${buscar}&orden=${orden}&asendente=${ascendente}`
	var contenedor = document.getElementById('contenido');
	fetch(url)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}

function editar(id) {
    var url = `formeditar.php?id=${id}`
	var contenedor = document.getElementById('contenido');
	fetch(url)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}

function guardarEditar(){
    var datos = new FormData(document.querySelector('#form-edit'));

    fetch("edit.php",
		{method:"POST",
		body:datos})
		.then(response => response.text())
		.then(data => document.querySelector("#contenido").innerHTML=data);
}

function eliminar(id) {
    var url = `delete.php?id=${id}`
	var contenedor = document.getElementById('contenido');
	fetch(url)
		.then(response => response.text())
        .then(data => {
            contenedor.innerHTML = data 
            cargarContenido('read.php');
        });
    
}