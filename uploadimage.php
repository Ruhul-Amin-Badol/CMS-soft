<?Php
    $target_dir = "upload/";

    $imagename = basename($_FILES["image"]["name"]);
    $imagepath = $target_dir . $imagename;
    $imageFileType = strtolower(pathinfo($imagename,PATHINFO_EXTENSION));
    $newimagepath = $target_dir . time() . "." . $imageFileType;
    
    move_uploaded_file($_FILES["image"]["tmp_name"], $newimagepath);
?>