

function mostrarModal() {
  $(document).ready(function () {
    $("#modal_edita").on('show.bs.modal', function (e) {
      var idUsuario = $(e.relatedTarget).data('id');
      var url = "./edita.php";
      $('.modal-content').load(url, { idUsuario: idUsuario },
      function (resultado) {
      $('#modal_edita').modal({ show: true });
      }); 
    });
  });
}



