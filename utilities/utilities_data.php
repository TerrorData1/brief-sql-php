<?php
$medecin =  [
    [
        'title' => 'Docteur John Doe',
        'description' => 'Expert médical dédié à votre bien-être, diagnostique et traite les insomnies.',
        'path_img' => 'assets/docteur1.webp',
    ],
    [
        'title' => 'Docteur Jack The Ripper',
        'description' => 'Expert médical dédié à votre bien-être, diagnostique et traite les affections.',
        'path_img' => 'assets/docteur2.webp',
    ],
    [
        'title' => 'Docteur Jason Murder',
        'description' => 'Expert médical dédié à votre bien-être, diagnostique et traite les troubles psychiques.',
        'path_img' => 'assets/docteur3.webp',
    ]
];

$civilite =  [
    [
        'id' => 'lname',
        'type' => 'text',
        'class' => 'form-control border-1 rounded-0 bg-lightgrey',
        'placeholder' => 'Votre Nom',
        'name' => 'nom'     
    ],
    [
        'id' => 'fname',
        'type' => 'text',
        'class' => 'form-control border-1 rounded-0 bg-lightgrey',
        'placeholder' => 'votre prénom',
        'name' => 'prenom'     
    ],

];

$coordonnées =  [
    [
        'id' => 'Tel',
        'type' => 'text',
        'class' => 'form-control border-1 rounded-0 bg-lightgrey',
        'placeholder' => 'Votre Téléphone',
        'name' => 'tel'      
    ],
    [
        'id' => 'emailInput',
        'type' => 'text',
        'class' => 'form-control border-1 rounded-0 bg-lightgrey',
        'placeholder' => 'Votre email',
        'name' => 'email'
    ],
];

$text =  [
    [
        'id' => 'subject',
        'type' => 'text',
        'class' => 'form-control border-1 rounded-0 bg-lightgrey',
        'placeholder' => 'Sujet',
        'name' => 'sujet'  
    ],
    [
        'id' => 'message',
        'type' => 'text',
        'class' => 'form-control border-1 rounded-0 bg-lightgrey',
        'placeholder' => 'votre message',
        'name' => 'msg'
    ],
];