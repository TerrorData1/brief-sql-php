<?php include './utilities/header.php';?>
<?php require_once __DIR__ . ('/function/medicaments.fn.php');?>
<?php $medicaments = order($db, $_POST['selection']);?>
<div class="p-5 d-flex justify-content-center">
    <div class="col-3">
        <form action="produits.php" method="post" class="d-flex">
            <select name="selection" class="form-select" aria-label="default select example">
                <option value="prix DESC">prix décroissant</option>
                <option value="prix ASC">prix croissant</option>
                <option value="note DESC">+ note -</option>
                <option value="nom">nom</option>
            </select>
            <input type="submit" value="Envoyer" class="btn btn-secondary ms-1">
        </form>
    </div>
</div>
<div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <?php include './utilities/cards-produits.php';?>
    </div>
</div>
<?php include './utilities/footer.php';?>
