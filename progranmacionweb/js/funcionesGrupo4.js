function validarFormulario() {
    'use strict'
    
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          } else{
            confirmEnvio()
            event.preventDefault()
            return;
          }
          form.classList.add('was-validated')
        }, false)
      })
      
  }
  function enviar_formulario(){ 
    document.Registro.submit()}



function mostrarDatos(){
  const nombre2=document.getElementById("nombre2")
  new URL(location.href).searchParams.get('name')
  const params =new URL(location.href).searchParams
  const nombre =params.get('name')
  nombre2.show

  const apellido2=document.getElementById("apellido2")
  new URL(location.href).searchParams.get('apellido')
  const params= new URL(location.href).searchParams
  const apellido=params.get('apellido')

  const fechaNac2=document.getElementById("fechaNac2")
  new URL(location.href).searchParams.get('Fechadenacimiento')
  const params= new URL(location.href).searchParams
  const fechaNaci2=params.get('fechaNaci2')

  const correo2=document.getElementById("correo2")
  new URL(location.href).searchParams.get('email')
  const params= new URL(location.href).searchParams
  const correo=params.get('correo')

  const contr2=document.getElementById("contr2")
  new URL(location.href).searchParams.get('contraseña')
  const params= new URL(location.href).searchParams
  const contra=params.get('contraseña')

  nombre2.innerHTML='Su nombre es ${nombre}'
  apellido2.innerHTML='Su apellido es ${apellido}'
  fechaNac2.innerHTML='Su Fecha de Nacimiento es ${Fechadenacimiento}'
  correo2.innerHTML='Su direccion de email es ${email}'

  contr2.innerHTML='Su contraseña  es ${email}'

}