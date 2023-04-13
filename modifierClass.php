<?php

    require_once "header.php";

?>
<div class="container ajoutClassCon">
    <?php
        $class=getInfoClass($_GET['idClass']);
        if(isset($_GET['modifier'])){ ?>
            <div class="alert alert-info col-md-8" >
                la classe est modifiée
            </div>
    <?php }
    ?>
    <div class="col-md-12">
        <div class="col-xl-12 hautPage">
            <div class="card cardProduit p-4">
                <form action="" method="post">
                    <div class="card-body d-flex justify-content-center">
                        <h5 class="card-title">Modifier une classe<h5>
                    </div>

                    <div class="row gy-4">

                        <div class="col-md-8 marginTop">
                        <input type="hidden" name="idClass" value="<?=$class['idClass']?>" placeholder="libelle" required>
                            <input type="text" class="form-control arabic" name="libelle" value="<?=$class['libelleClass']?>" placeholder="libelle" required>
                        </div>

                        <div class="col-md-8 marginTop">
                            <input type="number" class="form-control arabic" name="nbEtudiants" value="<?=$class['nbEtudiants']?>" placeholder="nbEtudiants" required>
                        </div>

                        <div class="col-md-8 marginTop">
                            <input type="text" class="form-control arabic" name="annee" value="<?=$class['annee']?>" placeholder="annee" required>
                        </div>

                        <div class="col-md-8 marginTop text-center">
                            <button type="submit" name="modifierClass" class="btn btn-success">Modifier</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?php 

    if(isset($_POST['modifierClass'])){
        $idClass=$_POST['idClass'];
        $libelle=$_POST['libelle'];
        $nbEtudiants=$_POST['nbEtudiants'];
        $annee=$_POST['annee'];
        $modifier = modifierClass($idClass,$libelle,$nbEtudiants,$annee);
        if($modifier)
        header("Location: modifierClass.php?idClass=$idClass&modifier=done");
    }

?>

