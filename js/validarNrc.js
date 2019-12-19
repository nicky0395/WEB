function validar() 
{
    nrc = document.getElementById('nrc').value;
    if( nrc == null || nrc.length == 0) {
        alert('Error, en el campo NRC');
        return false;
    }

  return true;
}