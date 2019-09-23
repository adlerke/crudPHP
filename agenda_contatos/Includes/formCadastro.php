<?php
require_once("Class/ClassConexao.php");
require_once 'Class/ClassCrud.php';
$crud = new ClassCrud();

if(isset($_GET['id'])){
    $acao="Editar";

    $crud=new ClassCrud();
    $BFetch=$crud->selectDB("*","table_contatos","where Id=?","i",array($_GET['id']));
    $fetch=$BFetch->fetch_all();
    foreach($fetch as $fetchs){
        $id=$fetchs[0];
        $name=$fetchs[1];
        $nickname=$fetchs[2];
        $number=$fetchs[3];
        $email=$fetchs[4];
        $adress=$fetchs[5];
    }
}

/* Cadastro novo */
else{
    $acao="Cadastrar";
    $id=0;
    $name="";
    $nickname="";
    $number=0;
    $email = "";
    $adress = "";
}
?>
<div align='center'><h2>Cadastro</h2></div>

<div class="resultado-success" id="resultado-success"></div>
<div class="resultado-fail"></div>
<div class="forms">
    <form method="post" name="formularioCadastro" id="formularioCadastro" action="Controllers/CadastroController.php">
        <h1 align="center">Cadastro de Contato</h1>
        <br/>
        <input type="hidden" id="acao" name="acao" value="<?php echo $acao?>">
        <input type="hidden" id="id" name="id" value="<?php echo $id?>">
        <label for="name">Nome : </label><input id="name" name="name" type="text" value="<?php echo $name; ?>"/> <br/><br/>
        <label for="nickname">Nickname : </label><input id="nickname" name="nickname" type="text" value="<?php echo $nickname; ?>"/> <br/><br/>
        <label for="number">Number: </label><input id="number" name="number" type="text" value="<?php echo $number; ?>"/> <br/><br/>
        <label for="email">Email: </label><input id="email" name="email" type="text" value="<?php echo $email; ?>"/> <br/><br/>
        <label for="adress">Adress: </label><input id="adress" name="adress" type="text" value="<?php echo $adress; ?>"/> <br/><br/>
        <input type="submit" class="btn-primary" value="<?php echo $acao; ?>">

        <input type="reset" class="btn-danger" value="Cancelar">
    </form>


</div>