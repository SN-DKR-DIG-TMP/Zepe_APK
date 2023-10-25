<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.5.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.5.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo5.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Zepe app MAJ</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.all.min.js"></script>
  
  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="form3 cid-sV7mBS1Au6 mbr-fullscreen" id="form3-3">

    

    

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-12">
                <div class="image-wrapper">
                    <img class="w-100" src="assets/images/jeremy-bezanger-9k-gcyloh2g-unsplash.jpg" alt="Mobirise">
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 mbr-form">
                <form action="index.php" method="post" class="mbr-form form-with-styler" enctype="multipart/form-data">
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="mbr-section-title mb-4 display-2">
                                <strong>Téléverser la nouvelle version</strong></h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                        </div>
                        <div data-for="name" class="col-lg-12 col-md col-sm-12 form-group mb-3">
                            <input type="file" name="fileToUpload" id="fileToUpload" data-form-field="name" class="form-control" value="" id="name-form3-3">
                        </div>
                        
                        <div class="col-md-auto col-12 mbr-section-btn"><button type="submit" class="btn btn-success display-4">Téléverser</button></div>
                    </div>
                </form>
            </div>
            <div class="offset-lg-1"></div>
        </div>
    </div>
</section><section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/j" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;">This <a href="https://mobirise.site/e" style="color:#aaa;">website</a> was made with Mobirise</p></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  

</body>

</html>
<?php
    $target_dir = "app/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
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
      echo "Sorry, only APK files are allowed.";
      $uploadOk = 0;
    }
    
    // // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, incorrect file type, try again with an apk";
    // if everything is ok, try to upload file
    }
     else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
?>