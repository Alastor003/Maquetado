const nombre = document.querySelector('#nombre');
const telefono = document.querySelector('#telefono');
const correo = document.querySelector('#correo');
const mensaje = document.querySelector('#mensaje');
const btnEnviar = document.querySelector('#enviar');
const formulario = document.querySelector('.formulario');
const datos = {
    nombre: '',
    correo: '',
    telefono: '',
    mensaje: ''
}

nombre.addEventListener('input', leerTexto);
correo.addEventListener('input', leerTexto);
telefono.addEventListener('input', leerTexto);
mensaje.addEventListener('input', leerTexto);

formulario.addEventListener('submit', function(e)
{
    e.preventDefault();

    const {nombre, correo, telefono, mensaje} = datos;
    if (telefono === '' || correo === '' || nombre === '' || mensaje === ''){
        mostrarError('Hay campos incompletos, no se pudo enviar el mensaje');
        return; 
    }
    
    if (nombre !== '' && correo !== '' && telefono !== '' && mensaje !== ''){
        correcto('El mensaje se envio correctamente');
        return;
    }  
});  


function leerTexto(e) {
      datos[e.target.id] = e.target.value;
  }
    
function mostrarError(mensaje)
{
  const error = document.createElement('P');
  error.textContent = mensaje;
  error.classList.add('error');
  formulario.appendChild(error);

  console.log(error);



  setTimeout(() => {
      error.remove();
  }, 5000);
};

function correcto(mensaje)
{
  const correcto = document.createElement('P');
  correcto.textContent = mensaje;
  correcto.classList.add('correcto');
  formulario.appendChild(correcto);

  console.log(correcto);

 

  setTimeout(() => {
      correcto.remove();
  }, 5000);
};