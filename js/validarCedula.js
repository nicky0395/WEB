function validar() 
{

    cedula = document.getElementsByName('cedula').value;
    if( cedula == null || (cedula.length == 0 || cedula.length > 10)) {
        alert('Error, en el campo Cedula');
        return false;
    }

  return true;
}