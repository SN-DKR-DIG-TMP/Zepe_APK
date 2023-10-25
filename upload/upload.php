<?php
    $target_dir = "app/";
    $target_file = $target_dir . basename($_FILES["image_file"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // echo "post:";
    // print_r($_POST);
    // echo "\n Files:";
    // print_r($_FILES);
    // echo "target_dir:";
    // echo ($target_dir);
    // echo "target_file:";
    // echo ($target_file);
    // echo "imagetype:";
    // echo ($fileType);
    
    // // Allow certain file formats
    if($fileType != "apk" ) {
      // echo "Sorry, only APK files are allowed.";
      $uploadOk = 0;
    }
    
    // // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Fichier non téléverser pour cause d'erreurs !";
    // if everything is ok, try to upload file
    }
     else {
      if (move_uploaded_file($_FILES["image_file"]["tmp_name"], $target_file)) {
        htmlspecialchars( basename( $_FILES["image_file"]["name"]));
        echo "Fichier téléverser avec succès !";
      } else {
        // echo "Sorry, there was an error uploading your file.";
      }
    }
?>