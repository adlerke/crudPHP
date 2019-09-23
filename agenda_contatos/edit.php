<?php include("Includes/header.php"); ?>

<div class="content">

    <?php
    require_once("Class/ClassConexao.php");
    require_once 'Class/ClassCrud.php';
    $crud = new ClassCrud();
    echo "<div align='center'><h2>Cadastro</h2></div>"
    ?>

    <div class="resultado-success" id="resultado-success"></div>
    <div class="resultado-fail"></div>
    <div class="forms">
        <form method="post" name="formularioCadastro" id="formularioCadastro"  action="Controllers/CadastroController.php">
            <h1 align="center">Cadastro de Contato</h1>
            <br/>
            <label for="name">Nome : </label><input id="name" name="name" type="text"/> <br/><br/>
            <label for="nickname">Nickname : </label><input id="nickname"name="nickname" type="text"/> <br/><br/>
            <label for="number">Number: </label><input id="number" name="number" type="text"/> <br/><br/>
            <label for="email">Email: </label><input id="email" name="email" type="text"/> <br/><br/>
            <label for="adress">Adress: </label><input id="adress" name="adress" type="text"/> <br/><br/>
            <input type="submit" class="btn-primary" value="Salvar">
            <input type="reset" class="btn-danger" value="Cancelar">
        </form>


    </div>
</div>


<?php include("Includes/footer.php"); ?>
