<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST['title']) && isset($_POST['description'])) {
    //On appelle la fonction getAll()
    $offresDao = new OffresDAO();
    /* @var $alloffers type */

    $offre = new Offres(array('title' => $_POST['title'], 'description' => $_POST['description']));

    //$offre->set_title("JEE Developpeur");
    //$offre->set_description("Super job de développeur");

    $status = $offresDao->add($offre);

    //On affiche le template Twig correspondant
    if ($status) {
        echo $twig->render('creer_offre.html.twig', ['status' => "Ajout OK", 'offre' => $offre]);
    } else {
        echo $twig->render('creer_offre.html.twig', ['status' => "Erreur Ajout"]);
    }
} else {
    echo $twig->render('creer_offre.html.twig');
}
