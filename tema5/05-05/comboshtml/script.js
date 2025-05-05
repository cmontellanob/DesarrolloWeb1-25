function obtenerDepartamentos()
{
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "departamento.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.querySelector('#departamento').innerHTML = ajax.responseText;
            document.querySelector('#provincia').innerHTML = '';
            document.querySelector('#municipio').innerHTML = '';
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
            
            document.querySelector('#provincia').innerHTML = ajax.responseText;
            document.querySelector('#municipio').innerHTML = '';
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
            
            document.querySelector('#municipio').innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}