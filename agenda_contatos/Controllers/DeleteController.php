<?php
require_once("../Class/ClassCrud.php");
$crud = new ClassCrud();
$IdUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
$BFetch=$crud->deleteDB(
    "table_contatos",
    "id=?",
    "i",
    array(
        $IdUser
    )
);
?>
<script>
    alert("Deletado Com Sucesso !");
</script>

<META HTTP-EQUIV="Refresh"
      CONTENT="0; URL=http://localhost/agenda_contatos">
