<?php

    require_once "header.php";
    $students = [];
    $classes=toutClasses();
    if(!isset($_POST['SearchEtudiantsClass']))
        $students = toutEtudiants();
    else 
        $students = toutEtudiantsClass($_POST['idClass']);


?>
<div class="container">
    <div class="col-md-12">
        <div class="col-md-6 centerDiv">
            <h3>Liste des étudiants</h3>
            <div class="divFormClasses">
                <form class="search-form d-flex align-items-center" method="POST" action="etudiants.php">
                    <div class="col-md-6">
                        <div class="form-group c1">
                            <label for="">Classe</label>
                            <select name="idClass" class="form-control">
                                <?php
                                    foreach($classes as $class){
                                ?>
                                    <option value="<?=$class['idClass']?>" <?php if((isset($_POST['idClass']) && $class['idClass']==$_POST['idClass'])) echo "selected"; ?>>
                                        <?=$class['libelleClass']?>
                                    </option>
                                <?php } ?>
                            </select>
                            <button type="submit" title="SearchEtudiantsClass" name="SearchEtudiantsClass" class="searchIcon">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <table class="table">
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>CNE</th>
                <th>Tél</th>
                <th>Email</th>
                <th>Class</th>
                <th>Date naissance</th>
                <th>Action</th>
                <?php 
                    if(isset($_SESSION["type"]) && $_SESSION["type"] == "admin" ):
                    echo "<th>Modifier</th>"; 
                    endif
                    ?>
            </tr>
            <?php foreach($students as $s): ?>
            <tr>
                <td><?=$s["id"] ?></td>
                <td><a href="etudiant.php?id=<?=$s['id'] ?>"><?=$s["nom"] ?></a></td>
                <td><a href="etudiant.php?id=<?=$s['id'] ?>"><?=$s["prenom"] ?></a></td>
                <td><?=$s["cne"] ?></td>
                <td><?=$s["telephone"] ?></td>
                <td><?=$s["email"] ?></td>
                <td><?=$s["libelleClass"] ?></td>
                <td><?=$s["date_naissance"] ?></td>
                <td><a href="marquer_absence.php?id=<?=$s['id'] ?>" class="btn btn-sm btn-warning"><i class="fa fa-flag-o"></i> Marquer absence</a></td>
                <?php 
                   if(isset($_SESSION["type"]) && $_SESSION["type"] == "admin" ):
                   echo "<td><a href='modifier_etudiant.php?id=".$s['id']."' class='btn btn-sm btn-primary'><i class='fa fa-cog'></i> Modifier infos</a></td>"; 
                   endif
                ?>

            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<?php require_once "footer.php" ?>
