<?php 
include 'utilities/utilities_data.php';
foreach ($medecin as $value) {
echo'
<div class="col-md-4 mb-3">
    <div class="card">
    <img class="img-fluid" alt="100%x280" src="' . $value['path_img'] .'">
        <div class="card-body align-self-center">
            <h4 class="card-title text-dark">' . $value['title'] . '</h4>
            <p class="card-text text-secondary">' . $value['description'] . '</p>
        </div>
    </div>
</div>' ;
}

