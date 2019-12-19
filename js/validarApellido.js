function validar() 
{
    apellido = document.getElementById('apellido').value;
    if( apellido == null || apellido.length == 0) {
        alert('Error, en el campo Apellido');
        return false;
    }

  return true;
}