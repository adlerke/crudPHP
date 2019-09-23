<?php
include("Includes/header.php"); ?>
<!--<script>-->
<!--    var a = prompt("Qual seu nome? ")-->
<!--    if (a == null || a=="") {-->
<!--        alert(`Bem Vindo João Ninguem`);-->
<!--    } else alert(`Bem Vindo ${a}`);-->
<!---->
<!--</script>-->
<div class="content">
    <?php
    require_once("Class/ClassConexao.php");
    require_once("Class/ClassCrud.php");
    $crud = new ClassCrud();
    // $crud->preparedStatements('opa', array (2,1,2,1,2));
    ?>

    

        <!-- Estrutura de loop -->
        <?php
        $Crud=new ClassCrud();
        $IdUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

        $BFetch=$Crud->selectDB(
            "*",
            "table_contatos",
            "where id=?",
            "i",
            array(
                $IdUser
            )
        );

        while($Result=$BFetch->fetch_all()){
            foreach($Result as $Fetch) {
//                var_dump($Fetch);
                ?>
                
                    <?php echo "<strong>Id : </strong>".$Fetch[0]; ?><br><br>
                    <?php echo"<strong>Name : </strong>". $Fetch[1]; ?><br><br>
                    <?php echo "<strong>Nickname : </strong>".$Fetch[2]; ?><br><br>
                    <?php echo "<strong>Number : </strong>".$Fetch[3]; ?><br><br>
                    <?php echo "<strong>Email : </strong>".$Fetch[4]; ?><br><br>
                    <?php echo "<strong>Adress : </strong>".$Fetch[5]; ?><br><br>

                
                <?php
            }
        }
        ?>
</div>
<?php include("Includes/footer.php"); ?>

