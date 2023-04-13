<?php

    require_once "header.php";

?>
<div class="container ajoutClassCon">
    <?php
        if(isset($_GET['addClass'])){ ?>
            <div class="alert alert-info col-md-8" >
                la classe est ajoutée 
            </div>
    <?php }
    ?>
    <div class="col-md-12">
        <div class="col-xl-12 hautPage">
            <div class="card cardProduit p-4">
                <form action="" method="post">

                        <div class="card-body d-flex justify-content-center">
                            <h5 class="card-title">Ajouter une class<h5>
                        </div>

                        <div class="row gy-4">

                            <div class="col-md-8 marginTop">
                                <input type="text" class="form-control arabic" name="libelle" placeholder="libelle" required>
                            </div>

                            <div class="col-md-8 marginTop">
                                <input type="number" class="form-control arabic" name="nbEtudiants" placeholder="nbEtudiants" required>
                            </div>

                            <div class="col-md-8 marginTop">
                                <input type="text" class="form-control arabic" name="annee" placeholder="annee" required>
                            </div>

                            <div class="col-md-8 marginTop text-center">
                                <button type="submit" name="ajoutClass" class="btn btn-success">Ajouter</button>
                            </div>
                         </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?php 
    if(isset($_POST['ajoutClass'])){
        $libelle=$_POST['libelle'];
        $nbEtudiants=$_POST['nbEtudiants'];
        $annee=$_POST['annee'];
        ajoutClassFunction($libelle,$nbEtudiants,$annee);
    }

?>

