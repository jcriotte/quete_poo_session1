<?php require 'inc/head.php'; ?>
<?php
// Réinitialisation du tableau de session
// On le vide intégralement
$_SESSION = array();
// Destruction de la session
session_destroy();
// Destruction du tableau de session
unset($_SESSION);
?>
<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong> Merci de votre visite !</strong>
                </div>
                <div class="panel-footer ">
                    Don't have an account ? <a href="#" onClick="">Too bad !</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'inc/foot.php'; ?>