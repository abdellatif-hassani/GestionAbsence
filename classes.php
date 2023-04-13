<?php

    require_once "header.php";
    $classes = [];

    $classes = toutClasses();


?>
<div class="container">
    <div class="col-md-12">
        <h3 class="listClass">Liste des classes </h3>
        <?php if($_SESSION["type"] == "admin"){ ?>
            <a href="ajoutClass.php" class="addClassLink btn btn-primary">ajouter une classe </a>
         <?php } ?>
        <table class="table">
            <tr>
                <th>#</th>
                <th>Libelle</th>
                <th>nombre des étudiants</th>
                <th>annee</th>
                <?php 
                    if(isset($_SESSION["type"]) && $_SESSION["type"] == "admin" ):
                    echo "<th>Modifier</th>"; 
                    endif
                    ?>
            </tr>
            <?php foreach($classes as $s): ?>
            <tr>
                <td><?=$s["idClass"] ?></td>
                <td><?=$s["libelleClass"] ?></td>
                <td><?=$s["nbEtudiants"] ?></td>
                <td><?=$s["annee"] ?></td>
                <?php if($_SESSION["type"] == "admin"){ ?>
                <td>
                    <a href="modifierClass.php?idClass=<?=$s['idClass'] ?>" class="btn btn-sm btn-warning">
                    <i class="bi bi-pen"></i> modifier
                    </a>
                </td>
                <?php } ?>

            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<?php require_once "footer.php" ?>
