<?php
include '../../config/load-classes.php';
$admin = AdminSessionFilter::authSuper();
$dao = new UsuarioDao();
$user = $dao->retorna($_GET['id']);
?>

<a href="edit.php?id=<?php echo $user->id; ?>">Editar</a><br><br>

Nome: <?php echo $user->nome; ?><br>
Login: <?php echo $user->login; ?><br>
Senha: ****** <br>
Nivel: <?php echo $user->nivel; ?><br>
Ativo: <?php echo $user->ativo; ?><br>





   