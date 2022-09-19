<?php
session_start();
if (!isset($_SESSION['id_logado'])) {
  header('Location: ../index.php');
}
require_once '../db/db.php';

include './cabecalho.php';
?>
<div id="modal_cadastro" class="modal fade" tabindex="-1" aria-labelledby="modal_title">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_title">Cadastro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="cadastro" id="cadastro" action="insert.php" method="post">
        <div class="modal-body">
          <div class="nome">
            <label for="nome" class="label-form">Nome</label>
            <input id="nome" name="nome" type="text" class="form-control form-control-lg">
            <label for="data_nasc" class="label-form">Nascimento</label>
            <input type="date" name="data_nasc" class="form-control form-control-lg" id="data_nasc">
            <label for="estado_civil_select" class="form-label">Estado Civil</label>
            <?php require_once '../db/db.php'; ?>
            <select class="form-select form-select-lg" name="estado_civil" id="estado_civil_select">
              <?php while ($resultado = mysqli_fetch_array($queryEstadoCivil)) {
              ?>
                <option value="<?= $resultado['id'] ?>"><?php echo $resultado['descricao'] ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button class="btn btn-primary" type="submit">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<div id="modal_listagem" class="modal fade" tabindex="-1" aria-labelledby="modal_title">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(248,249,250)">
        <h5 class="modal-title" id="modal_title">Listagem</h5>
        <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <?php
        require_once '../db/db.php';


        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        } else {
        ?>
          <table class="table table-hover table-bordered" style="text-align:center">
            <thead class="thead-dark">
              <tr>
                <th>NOME </th>
                <th>DATA DE NASCIMENTO </th>
                <th>ESTADO_CIVIL </th>
                <th>AÇÕES </th>
              </tr>
            </thead>
            <tbody>
            <?php }
          if ($pesquisarCliente->num_rows > 0) {
            // output data of each row
            while ($row = $pesquisarCliente->fetch_array()) {
              echo "<tr>";
              //echo "<td>".$row["id"]."</td>";
              echo "<td>" .                       $row["nome"]            . "</td>";
              echo '<td><input type="date" readonly style="text-align: center" class="form-control" value="' . $row["data_nasc"] . '"></input></td>';
              echo '<td>' .                       $row["descricao"]       . '</td>';
              echo '<td>
              <form action="edita.php" method="POST">
                  <input type="hidden" name="idEdita" value="' . $row['id'] . '">
                  <button class="btn btn-link" type="submit">Editar</button>
              </form>
              <form action="desativa.php" method="POST">
                  <input type="hidden" name="idCliente" value="' .$row['id'].'"></input>
                  <button class="btn btn-link" type="submit">Desativar</button>
              </form>   
              </td>';
            }
          } else {
            echo "";
          }

          $conn->close();

            ?>
      </div>
    </div>
  </div>
</div>
</body>
<script>
  function editUsuario(row) {
    $('#nome').val(row.nome)
    $('#data_nasc').val(row.data_nasc)
    $('#estadoCivil').val(row.estadoCivil)
  }
</script>

</html>