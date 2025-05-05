function obtenerDepartamentos()
{
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "departamento.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            lista = JSON.parse(ajax.responseText);
            var select = document.querySelector('#departamento');
            select.innerHTML = ''; // Limpiar el contenido actual del select
            for (var i = 0; i < lista.length; i++) {
                var option = document.createElement('option');
                option.value = lista[i].id;
                option.textContent = lista[i].nombre;
                select.appendChild(option);
            }
            
        }
    }
    ajax.send();
    
}

function obtenerProvincias()

{
    var departamento_id=document.getElementById('departamento').value;
    url = `provincia.php?id=${departamento_id}`;
    var ajax = new XMLHttpRequest();
    ajax.open("GET",url , true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            lista = JSON.parse(ajax.responseText);
            var select = document.querySelector('#provincia');
            select.innerHTML = ''; // Limpiar el contenido actual del select
            for (var i = 0; i < lista.length; i++) {
                var option = document.createElement('option');
                option.value = lista[i].id;
                option.textContent = lista[i].nombre;
                select.appendChild(option);
            }
            
            
            
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}
function obtenerMunicipios()
{
    var provincia_id=document.getElementById('provincia').value;
    url = `municipio.php?id=${provincia_id}`;
    var ajax = new XMLHttpRequest();
    ajax.open("GET",url , true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
                
                lista = JSON.parse(ajax.responseText);
                var select = document.querySelector('#municipio');
                select.innerHTML = ''; // Limpiar el contenido actual del select
                for (var i = 0; i < lista.length; i++) {
                    var option = document.createElement('option');
                    option.value = lista[i].id;
                    option.textContent = lista[i].nombre;
                    select.appendChild(option);
                }
            
           
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}