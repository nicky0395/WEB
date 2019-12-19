function validar() {


    nrc = document.getElementById('nrc').value;
    if( nrc == null || nrc.length == 0) {
        alert('Error, en el campo NRC');
        return false;
    }

    cedula = document.getElementById('cedula').value;
    if( cedula == null || (cedula.length == 0 || cedula.length > 10)) {
        alert('Error, en el campo Cedula');
        return false;
    }

    nombre = document.getElementById('nombre').value;
    if( nombre == null || nombre.length == 0) {
        alert('Error, en el campo Nombre');
        return false;
    }

    apellido = document.getElementById('apellido').value;
    if( apellido == null || apellido.length == 0) {
        alert('Error, en el campo Apellido');
        return false;
    }

    edad = document.getElementById('edad').value;
    if( edad == null || edad.length == 0 || edad.value > 100 || edad.value < 1) {
        alert('Error, en el campo Edad');
        return false;
    }

  return true;
}