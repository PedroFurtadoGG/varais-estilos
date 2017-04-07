$(document).ready(function() {
  // *
  // *
  // affixHeader();
  // *
  // *
  // *
  // *
  // if (!!document.querySelector('.parallax')) {
  // 	$(window).stellar();
  // }

  if (!!document.querySelector('#formAvalicao')) {
    $('#formAvalicao').validate({
      debug: false,
      errorClass: "error",
      errorElement: "div",
      onkeyup: false,
      rules: {
        nome: {
          required: true,
          minlength: 4
        },
        rating: {
          required: true
        },
        mensagem: {
          required: true,
          minlength: 10
        }
      }
    });
  }
});
