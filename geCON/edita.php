<?php
session_start();
include_once './cabecalho.php';
require_once '../db/db.php';


$sql 													  = 'SELECT C.id, C.nome, C.data_nasc,C.imagem, ec.descricao, ec.id as "estado_id" FROM cliente C JOIN estado_civil ec ON c.estado_civil = ec.id WHERE C.id="' . $_POST['idEdita'] . '"';
$retorno                                                  = $conn->query($sql);
$array                                                    = $retorno->fetch_assoc();
$nome                                                     = $array['nome'];
$data                                                     = $array['data_nasc'];
$estadoCivil                                              = $array['descricao'];
$foto                                                     = $array['imagem'];
$idEdita 												  = $array['id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
	<!--  All snippets are MIT license http://bootdey.com/license -->
	<title>account setting or edit profile - Bootdey.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="edita.css">
</head>

<body>
	<?php 
	if(isset($_POST['idEdita'])){
		echo '<div class="container">
		<div class="row gutters">
			<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
				<div class="card h-100">
					<div class="card-body">
						<div class="account-settings">
							<div class="user-profile">
								<div class="user-avatar">
									<img src="'.$foto.'" alt="Maxwell Admin">
								</div>
								<h5 class="user-name">'. $nome .'</h5>
								<h6 class="user-email">teste</h6>
							</div>
							<div class="about">
								<h5>About</h5>
								<p>Im Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
				<div class="card h-100">
					<form action="update.php" method="POST">
						<input type="hidden" name="idEdita" value="'. $array['id'] .'">
						<div class="card-body">
							<div class="row gutters">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<h6 class="mb-2 text-primary">Personal Details</h6>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="fullName">Full Name</label>
										<input type="text" class="form-control" id="nome" name="nome" value="'.$nome.'">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="eMail">Email</label>
										<input type="email" class="form-control" id="eMail" placeholder="Enter email ID">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="phone">Phone</label>
										<input type="text" class="form-control" id="phone" placeholder="Enter phone number">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="data_nasc">Data de Nascimento</label>
										<input type="date" class="form-control" name="data_nasc" id="data_nasc" value="'. $data.'">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="foto">Foto</label>
										<input type="text" class="form-control" id="foto" name="foto" value="'.$foto.'">
									</div>
								</div>
							</div>
							<div class="row gutters">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<h6 class="mt-3 mb-2 text-primary">Address</h6>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="Street">Street</label>
										<input type="name" class="form-control" id="Street" placeholder="Enter Street">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="ciTy">City</label>
										<input type="name" class="form-control" id="ciTy" placeholder="Enter City">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="sTate">State</label>
										<input type="text" class="form-control" id="sTate" placeholder="Enter State">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="zIp">Zip Code</label>
										<input type="text" class="form-control" id="zIp" placeholder="Zip Code">
									</div>
								</div>
							</div>
							<div class="row gutters">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="text-right">
										<button type="submit" id="submit" name="submit" class="btn btn-primary">Salvar</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>'
	;}
	
	
	?>
</body>

</html>