<?php

    require_once "header.php";

    $alerts = alertsAbsence();


?>
<div class="container">

    <div class="text-center">
        <h2 class="titreAbs">Gestion d'absence</h2>
    </div>

    <!-- Professeur -->
    <?php if(isset($_SESSION["type"]) && $_SESSION["type"] == "professeur" ): ?>
        <div class="row">
            <div class="col-xs-4 marginButtomButton">
                <div class="form-group">
                    <a href="classes.php" class="btn btn-success btn-lg"><i class="fa fa-user-circle-o"></i> Liste des classes</a>
                </div>
            </div>
            <div class="col-xs-4 marginButtomButton">
                <div class="form-group">
                    <a href="etudiants.php" class="btn btn-primary btn-lg"><i class="fa fa-user-circle-o"></i> Liste des étudiants</a>
                </div>
            </div>
            <div class="col-xs-4 marginButtomButton">
                <div class="form-group">
                    <a href="absences_par_prof.php" class="btn btn-warning btn-lg"><i class="fa fa-check-circle-o"></i>Absences que j'ai marqué</a>
                </div>
            </div>
            <div class="col-xs-4 marginButtomButton">
                <div class="form-group">
                    <a href="absences.php" class="btn colorTobutton1 btn-lg"><i class="fa fa-list"></i> Les absences</a>
                </div>
            </div>
            <div class="col-xs-4 marginButtomButton">
                <div class="form-group">
                    <a href="oldAbsences.php" class="btn btn-lg colorTobutton">Les anciennes absences</a>
                </div>
            </div>
            <?php endif ?>

            <!-- Administrateur -->
            <?php if(isset($_SESSION["type"]) && $_SESSION["type"] == "admin" ): ?>
                <div class="col-xs-4 marginButtomButton">
                    <div class="form-group">
                        <a href="classes.php" class="btn btn-success btn-lg"><i class="fa fa-user-circle-o"></i> Liste des classes</a>
                    </div>
                </div>
                <div class="col-xs-4 marginButtomButton">
                    <div class="form-group">
                        <a href="etudiants.php" class="btn btn-primary btn-lg"><i class="fa fa-user-circle-o"></i> Liste des étudiants</a>
                    </div>
                </div>
                <div class="col-xs-4 marginButtomButton">
                    <div class="form-group">
                        <a href="absences_par_prof.php" class="btn btn-warning btn-lg"><i
                                    class="fa fa-check-circle-o"></i>
                            Absences que j'ai marqué</a>
                    </div>
                </div>
                <div class="col-xs-4 marginButtomButton">
                    <div class="form-group">
                        <a href="absences.php" class="btn btn-info btn-lg"><i class="fa fa-list"></i> Les absences</a>
                    </div>
                </div>
                <div class="col-xs-4 marginButtomButton">
                    <div class="form-group">
                        <a href="zeroAbsences.php" class="btn btn-danger btn-lg">Remettre à zéro les absences</a>
                    </div>
                </div>
                <div class="col-xs-4 marginButtomButton">
                    <div class="form-group">
                        <a href="oldAbsences.php" class="btn colorTobutton btn-lg">Les anciennes absences</a>
                    </div>
                </div>

            <?php endif ?>
    
            <!-- Etudiant -->
            <?php if(isset($_SESSION["type"]) && $_SESSION["type"] == "etudiant" ): ?>
                <a href="etudiant.php?id=<?=$_SESSION['id_etudiant'] ?>" class="btn btn-lg btn-primary">Mes absences</a>
            <?php endif ?>

            <?php if(!isset($_SESSION["id"])) :?>
                <div class="text-center">
                    <a href="login.php" class="btn btn-lg btn-primary">Se connecter</a>
                    <a href="signup.php" class="btn btn-lg btn-default">S'inscrire</a>
                </div>
            <?php endif ?>
        </div>
</div>

<?php require_once "footer.php" ?>
