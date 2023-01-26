<?php


//$user=$_POST['name'];

if(isset($_POST['submit']) && isset($_FILES['file'])){
    
 $file=$_FILES['file'];
 print_r($file);
    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];

    $fileextend=explode('.',$fileName);
    $fileActualExtension = strtolower(end($fileextend));
    $allowed = ['jpg','jpeg','png'];
    
    if(in_array($fileActualExtension,$allowed)){
if($fileError===0){
    if($fileSize<5000000){
        
        $fileNewName=$firstname.".".$fileActualExtension;
        $fileNewDistination='uploads/personsimg/'.$fileNewName;
        move_uploaded_file($fileTmpName,$fileNewDistination);
       echo "Succeful";
       echo "<script>alert(`${firstname}`)</script>";
    
    }else{
 echo "File size not allowed";
    }}
else{
    echo "Some thing went wrong";
}

}}
else{
    echo"Not set";
}


?>