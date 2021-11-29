document.addEventListener('DOMContentLoaded', function() {

  document.querySelector('#btnEditar').addEventListener('click', (e) => {
    let inputNombre = document.querySelector('#nombre');
    let inputMail = document.querySelector('#mail');

    let nombre = e.target.parentElement.parentElement.querySelector('.card-title').innerHTML;
    let mail = e.target.parentElement.parentElement.querySelector('.card-text').innerHTML;

    inputNombre.value = nombre;
    inputMail.value = mail;

    let inputEdit = document.createElement('input');
    inputEdit.setAttribute('hidden', "");
    inputEdit.setAttribute('name', 'editar');
    inputEdit.value = mail;
    document.querySelector('#formulario').appendChild(inputEdit);
    console.log(inputEdit);
  });

  document.querySelector('#btnEliminar').addEventListener('click', (e) => {});
});
