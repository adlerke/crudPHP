<?php
require_once("../Includes/variaveis.php");
require_once("../Class/ClassCrud.php");


$crud = new ClassCrud();
if ($acao == 'Cadastrar') {
    $crud->insertDB("table_contatos",
        "?,?,?,?,?,?",
        "ississ",
        array(
            $id,
            $name,
            $nickname,
            $number,
            $email,
            $adress

        )
    );
} else {
//    var_dump($nickname);
    $crud->updateDB("table_contatos",
        "name= ?, nickname= ?, number= ?, email= ?, adress= ?",
        "where id=?",
        "ssissi",
        array(

            $name,
            $nickname,
            $number,
            $email,
            $adress,
            $id

        )
    );

}
?>
<script>
    alert("Operação Realizada com Sucesso !");
</script>

<meta HTTP-EQUIV="Refresh"
      CONTENT="0; URL=http://localhost/agenda_contatos">




