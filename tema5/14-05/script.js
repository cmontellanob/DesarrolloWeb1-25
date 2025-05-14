var asente = "asc";
var modal = document.getElementById("myModal");
var openModalBtn = document.getElementById("openModalBtn");
var closeBtn = document.getElementsByClassName("close")[0];

mostrar = function () {
  modal.style.display = "block";
};

closeBtn.onclick = function () {
  modal.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

function cargarContenido(abrir) {
  var contenedor;
  contenedor = document.getElementById("contenido");
  fetch(abrir)
    .then((response) => response.text())
    .then((data) => (contenedor.innerHTML = data));
}

function crearPersona() {
  var datos = new FormData(document.querySelector("#form-crear"));

  fetch("create.php", { method: "POST", body: datos })
    .then((response) => response.text())
    .then((data) => (document.querySelector("#contenido").innerHTML = data));
}

function cargarPagina(pagina, buscar, orden, ascendente) {
  var url = `read.php?pagina=${pagina}&buscar=${buscar}&orden=${orden}&asendente=${ascendente}`;
  var contenedor = document.getElementById("contenido");
  fetch(url)
    .then((response) => response.text())
    .then((data) => (contenedor.innerHTML = data));
}

function editar(id) {
  var url = `formeditar.php?id=${id}`;
  var contenedor = document.getElementById("contenido");
  fetch(url)
    .then((response) => response.text())
    .then((data) => {
		  document.querySelector("#titulo-modal").innerHTML = "Editar"
		  document.querySelector("#contenido-modal").innerHTML = data
		  document.getElementById("myModal").style.display = "block";
		  });|
}

function guardarEditar() {
  var datos = new FormData(document.querySelector("#form-edit"));

  fetch("edit.php", { method: "POST", body: datos })
    .then((response) => response.text())
	  .then((data) => {
		  document.querySelector("#titulo-modal").innerHTML = "Mensaje"
		  document.querySelector("#contenido-modal").innerHTML = data
		  mostrar();
		  }
	  	  );
}

function eliminar(id) {
  var url = `delete.php?id=${id}`;
  var contenedor = document.getElementById("contenido");
  fetch(url)
    .then((response) => response.text())
    .then((data) => {
      contenedor.innerHTML = data;
      cargarContenido("read.php");
    });
}

function listar() {
  var contenedor;
  contenedor = document.getElementById("contenido");
  fetch("read.php")
    .then((response) => response.text())
    .then((data) => {
      objeto = JSON.parse(data);
      contenedor.innerHTML = renderizarTablaRead(objeto);
    });
}

function renderizarTablaRead(objeto) {
  let lista = objeto.datos;
  let buscar = objeto.buscar;
  let pagina = objeto.pagina;
  let orden = objeto.orden;

  let nropaginas = objeto.nropaginas;

  let html = `<table style="border-collapse: collapse" border="1" >
			<thead>
        	<tr>
            <th >Fotografia</th>
            <th ><a href="read.php?orden=nombres&asendente=${asente} ">Nombres</a></th>
            <th ><a href="read.php?orden=apellidos&asendente=${asente} ">Apellidos</a></th>
            <th ><a href="read.php?orden=fecha_nacimiento&asendente=${asente} ">Fec.Nacimiento</a></th>
            <th ><a href="read.php?orden=sexo&asendente=${asente} ">Sexo</a></th>
            <th ><a href="read.php?orden=correo&asendente=${asente} ">Correo</a></th>
            <th><a href="read.php?orden=profesion&asendente=${asente} ">Profesion</a> </th>
            <th>Operaciones</th>
        	</tr>
    		</thead>`;

  for (var i = 0; i < lista.length; i++) {
    html += `<tr>
        <td><img src="images/${lista[i].fotografia}" width="50px"></td>
        <td>${lista[i].nombres}</td>
        <td>${lista[i].apellidos} </td>
        <td>${lista[i].fecha_nacimiento}</td>
        <td>${lista[i].sexo} </td>
        <td>${lista[i].correo} </td>
        <td>${lista[i].profesion} </td>
    
        <td><a href="javascript:editar('${lista[i].id} ')">Editar</a>  <a href="javascript:eliminar('${lista[i].id} ')">Eliminar</a> </td>
        
    </tr>`;
  }
  html += "</table>";
  // navegacion

  html += `<ul style="display: flex; list-style: none; gap=5px">
    <li style="width: 10px;margin:5px" ><a href="javascript:cargarPagina(1,'${buscar}','${orden}','${asente}')">&lt&lt</a></li>  
    <li style="width: 10px;margin:5px" ><a href="javascript:cargarPagina(${
      pagina - 1
    };?>,'${buscar} ,'${orden} , '${asente} ')">&lt </a></li>`;
  for (i = 1; i <= pagina; i++) {
    html += `<li style="width: 10px;margin:5px"><a href="javascript:cargarPagina(${i},'${buscar}','${orden}', '${asente}')">${i}</a></li>`;
  }
  html += `<li style="width: 10px;margin:5px" ><a href="javascript:cargarPagina(${
    pagina + 1
  },'${buscar}','${orden}', '${asente}')">&gt </a></li>  
          <li style="width: 10px;margin:5px" ><a href="javascript:cargarPagina(${nropaginas},'${buscar},'${orden}, '${asente}')">&gt&gt </a></li>  
	</ul>`;

  return html;
}
