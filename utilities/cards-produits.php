 <?php foreach ($medicaments as $medicament): ?> 
    <div class="col mb-5">
        <div class="card h-100">
            <img src="<?= $medicament['pathImg']?>" class="card-img-top" alt="...">
                <div class="card-body p-4">
                    <div class="text-center">
                        <h5 class="fw-bolder"><?= $medicament['nom'] ?></h5>
                        <span class="text-muted text-decoration-line-through"><?= $medicament['prix'] ?></span>
                        <?= ($medicament['prix'] * 0.85) ?> € 
                        <p class="card-text text-warning"><?= $medicament['note'] . '/10 &nbsp;';?>
                        <?= getStar($medicament['note']); ?>
                        </p>                       
                        <p class="fw-bolder"><?= $medicament['commentaires'] ?></p>
                    </div>
                </div>
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                 <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ajouter</a></div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
