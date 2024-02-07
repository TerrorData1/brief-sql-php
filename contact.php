<?php include 'utilities/header.php'; ?>
<h2 class="d-flex justify-content-center mt-5">Formulaire de contact</h2>
<section class="py-5 ">
    <div class="container g-0">
        <!-- formulaire de contact-->
        <form class="row text-uppercase">
            <?php include './utilities/form.php';?>
            <div class="col-12 mb-4">
                <div>
                    <input type="text" name="Sujet" id="inputSujet" class="form-control rounded-0 text-uppercase"
                        placeholder="Sujet">
                    <div class="invalid-feedback">
                        Veuillez saisir un sujet dans le champ de texte
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4">
                <div>
                    <textarea name="message" id="InputMessage" class="form-control rounded-0 text-uppercase"
                        placeholder="Votre Message"></textarea>
                    <div class="invalid-feedback">
                        Veuillez saisir un message dans la zone de texte.
                    </div>
                </div>
            </div>
            <div class="col-12 bg d-flex justify-content-center mt-2">
                <button class="btn btn-secondary ms-1" name="sub"
                    type="submit">Envoyer</button>
            </div>
        </form>
</section>
<?php include './utilities/footer.php';?>
