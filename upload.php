<?php
if(isset($_FILES['file'])){
    $file = $_FILES['file'];
    $allowed = ['jpg', 'png', 'gif', 'pdf']; // Types autorisés
    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);

    if(in_array($ext, $allowed)){
        move_uploaded_file($file['tmp_name'], "uploads/" . $file['name']);
        echo "Fichier uploadé avec succès !";
    } else {
        echo "Type de fichier interdit !";
    }

    if (!in_array($ext, $allowed) || strpos($file['name'], '.php') !== false) {
        die("Fichier interdit !");
    }
}



?>
