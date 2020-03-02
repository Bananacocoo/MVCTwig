<?php

if (isset($_POST['id'])) {

    $offresDao = new OffresDAO();
    $offre = $offresDao->getOne($_POST['id']);
    $status = $offresDao->deleteOne($_POST['id']);

    //On affiche le template Twig correspondant
    if ($status) {
        echo $twig->render('delete_offre.html.twig', ['status' => "SUPPR OK", 'offre' => $offre]);
    } else {
        echo $twig->render('delete_offre.html.twig', ['status' => "Erreur SUPPR"]);
    }
} else {
    echo $twig->render('delete_offre.html.twig');
}
