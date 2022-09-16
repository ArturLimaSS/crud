<!-- <!?php
/*require_once '../db/db.php';
$numRows = $pesquisarCliente->num_rows;
function geraLista($i){
    require_once '../db/db.php';
    for($i = 0; $i< $numRows; $i++){
        $row = $pesquisarCliente->fetch_assoc();
        echo $row;
    }
}*/;
?-->




<?php 
if (isset($_POST['id'])){
    $idPost = $_POST['id'];
    echo '<div id="modal_edita" class="modal fade" tabindex="-1" aria-labelledby="modal_title">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title">Cadastro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                '.$idPost.'
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary" type="submit">Salvar</button>
            </div>
        </div>
    </div>
</div>';
    
}
