document.addEventListener('DOMContentLoaded', function() {

// PROBAR CON FOR PARA AGREGAR ESCUCHADORES A TODOS LOS CARD,

  let botones = document.querySelectorAll('.btnEditar');
  console.log(botones);
  botones.forEach( boton => {
    console.log("hay un ");
    console.log(boton);
    boton.addEventListener('click', editar);
  });
  //(e) => {
    // let inputNombre = document.querySelector('#nombre');
    // let inputMail = document.querySelector('#mail');
    //
    // let nombre = e.target.parentElement.parentElement.querySelector('.card-title').innerHTML;
    // let mail = e.target.parentElement.parentElement.querySelector('.card-text').innerHTML;
    //
    // inputNombre.value = nombre;
    // inputMail.value = mail;
    //
    // let inputEdit = document.createElement('input');
    // inputEdit.setAttribute('hidden', "");
    // inputEdit.setAttribute('name', 'editar');
    // inputEdit.value = mail;
    // document.querySelector('#formulario').appendChild(inputEdit);
    // console.log(inputEdit);
  // });

  document.querySelector('.formBorrar').addEventListener('submit', (e) => {
    const id = e.target.querySelector('input[name]=id').value;
    console.log(id);
  });

});


function editar(element) {
  let inputNombre = document.querySelector('#nombre');
  let inputMail = document.querySelector('#mail');

  let nombre = element.target.parentElement.parentElement.querySelector('.card-title').innerHTML;
  let mail = element.target.parentElement.parentElement.querySelector('.card-text').innerHTML;

  inputNombre.value = nombre;
  inputMail.value = mail;

  let inputEdit = document.createElement('input');
  inputEdit.setAttribute('hidden', "");
  inputEdit.setAttribute('name', 'editar');
  inputEdit.value = mail;
  document.querySelector('#formulario').appendChild(inputEdit);
  console.log(inputEdit);
}
