<?php 
require_once '../db/db.php';

if ($pesquisarTodosOsDados->num_rows > 0) {
    // output data of each row
    while($row = $pesquisarTodosOsDados->fetch_assoc()) {
        $id = $row['id'];
        $update = ('UPDATE users SET status = 0 where id ='.$id.';');
        $sql = $conn->query($update);
  }
}
?>