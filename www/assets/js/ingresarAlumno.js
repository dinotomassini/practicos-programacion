document.addEventListener('DOMContentLoaded', e => {
  let botones = document.querySelectorAll('.btnEditar');
  botones.forEach(boton => boton.addEventListener('click', editar));
});


function editar(element) {
  const inputNombre = document.querySelector('#nombre');
  const inputMail = document.querySelector('#mail');

  const nombre = element.target.parentElement.parentElement.querySelector('.card-title').innerHTML;
  const mail = element.target.parentElement.parentElement.querySelector('.card-text').innerHTML;

  inputNombre.value = nombre;
  inputMail.value = mail;

  const inputEdit = document.createElement('input');
  inputEdit.setAttribute('hidden', "");
  inputEdit.setAttribute('name', 'editar');
  inputEdit.value = mail;
  inputMail.focus();

  document.querySelector('#formulario').appendChild(inputEdit);
}
