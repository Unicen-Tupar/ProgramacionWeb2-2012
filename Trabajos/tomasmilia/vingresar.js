<script type="text/javascript">

function vingresar(formulario) {
  if(formulario.email.value.length==0) { //comprueba que no esté vacío
    formulario.email.focus();
    alert('No has escrito tu E-Mail');
    return false;
  }
  if(formulario.password.value.length==0) {  //comprueba que no esté vacío
    formulario.password.focus();
    alert('No has escrito ninguna clave');
    return false;
  }
  return true;
}


</script>