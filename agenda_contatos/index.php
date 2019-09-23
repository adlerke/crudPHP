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
    <div align="center">
            <a href="cadastro.php">
                <button class="btn-add"><i class="fas fa-plus"></i></button>
            </a>

        <table class="content-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Nickname</th>
                <th>Number</th>
                <th>Email</th>
                <th>Adress</th>
                <th>Ações</th>
            </tr>

            </thead>

            <!-- Estrutura de loop -->
            <?php
            $Crud = new ClassCrud();
            $BFetch = $Crud->selectDB(
                "*",
                "table_contatos",
                "",
                "",
                array()
            );

            while ($Result = $BFetch->fetch_all()) {
                foreach ($Result as $Fetch) {
//                var_dump($Fetch);
                    ?>
                    <tbody>
                    <tr>
                        <td><?php echo $Fetch[0]; ?></td>
                        <td><?php echo $Fetch[1]; ?></td>
                        <td><?php echo $Fetch[2]; ?></td>
                        <td><?php echo $Fetch[3]; ?></td>
                        <td><?php echo $Fetch[4]; ?></td>
                        <td><?php echo $Fetch[5]; ?></td>
                        <td>
                            <a href="<?php echo "details.php?id={$Fetch[0]}"; ?>">
                                <button class="btn-primary">Details</button>
                            </a>
                            <a href="<?php echo "cadastro.php?id={$Fetch[0]}"; ?>">
                                <button class="btn-default">Update</button>
                            </a>
                            <a href="<?php echo "Controllers/DeleteController.php?id={$Fetch[0]}"; ?>">
                                <button id="clickMe" class="btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                    <?php
                }
            }
            ?>
        </table>
    </div>

</div>

<?php include("Includes/footer.php"); ?>


