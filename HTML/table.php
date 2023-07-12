<?php
session_start();
include_once('../PHP/config.php');
    $sql = "SELECT * FROM funcionario ORDER BY id DESC  ";
    $result = $conexao -> query($sql);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/estilocad1.css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="shortcut icon" href="../Imagens/favicon.ico" type="image/x-icon">
    <title>Dados - Funcionários</title>
</head>
<nav id="menu">
        <ul class="nav-list">
            <li><a href="admin.php">Inicio</a></li>
            <li><a href="table.php">Dados</a></li>
            <li><a href="funcionario.php">Cadastrar</a></li>
        </ul>
</nav>
<body>
    <div>
    <table class="table text-white table-bg">
    <thead>
    <tr>
    <th scope="col">Id</th>
    <th scope="col">Nome</th>
    <th scope="col">Area</th>
    <th scope="col">Telefone</th>
    <th scope="col">E-mail</th>
    <th scope="col">Função</th>
    <th scope="col">Endereço</th>
    <th scope="col">Idade</th>
    <th scope="col">....</th>
    </tr>
    </thead>
    <tbody>
    <?php
        //Dados inseridos
                        while($user_data = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            echo "<td>" .$user_data['id']."</td>";
                            echo "<td>" .$user_data['nome']."</td>";
                            echo "<td>" .$user_data['area']."</td>";
                            echo "<td>" .$user_data['telefone']."</td>";
                            echo "<td>" .$user_data['email']."</td>";
                            echo "<td>" .$user_data['funcao']."</td>";
                            echo "<td>" .$user_data['endereco']."</td>";
                            echo "<td>" .$user_data['idade']."</td>";
                            echo "<td>
    <a class ='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>
    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
    </svg>
    </a>
    <a class ='btn btn-sm btn-danger' href='../PHP/delete.php?id=$user_data[id]'>
    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
    <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z''/>
    </svg>
    </td>";
    echo "</tr>";
    }
    ?>
    </tbody>
    </table>
    </div>
</body>
</html>