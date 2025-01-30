<?php
include '../../../header.php';

if(isset($_GET['numMotCle'])){
    $numMotCle = $_GET['numMotCle'];
    $libMotCle = sql_select("MOTCLE", "libMotCle", "numMotCle = $numMotCle")[0]['libMotCle'];
}
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modification des Mots Cles</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/keywords/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="libMotCle">Nom des Mots Cles</label>
                    <input id="numMotCle" name="numMotCle" class="form-control" style="display: none" type="text" value="<?php echo($numMotCle); ?>" readonly="readonly" />
                    <input id="libMotCle" name="libMotCle" class="form-control" type="text" value="<?php echo($libMotCle); ?>" />
                </div>
                <br />
                <div class="form-group mt-2">
                    <a href="list.php" class="btn btn-primary">List</a>
                    <button type="submit" class="btn btn-danger">Confirmer update ?</button>
                </div>
            </form>
        </div>
    </div>
</div>



