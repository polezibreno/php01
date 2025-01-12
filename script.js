function validarFormulario(event) {
  var form = event.currentTarget;
  if (!form.checkValidity()) {
    event.preventDefault();
    event.stopPropagation();
  }
  form.classList.add('was-validated');
}
