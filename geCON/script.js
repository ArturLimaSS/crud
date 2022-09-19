

function mostrarModal(id) {
  $(document).ready(function () {
    $("#modal_edita").on('show.bs.modal', function(e){
      var idUsuario = id;
      var url = "edita.php";
      $.post(url, {id: idUsuario})
    }).modal('show');
  });
}



