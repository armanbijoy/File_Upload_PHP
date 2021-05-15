<?php
$errorMessage = '';


if(isset($_FILES['file'])){

// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>';
$ext = pathinfo($file['name'],PATHINFO_EXTENSION);


$file = $_FILES['filr'];
if($file['size'] > 5*1024*1024)
{
    $errorMessage = 'You Cannt upload file more then 5MB';
}
elseif(!in_array($ext,['png','jpeg','svg','jpg'])){

    $errorMessage="You can only upload images";

}
else{
    move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
}

    

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">

        <input type="file", name="file"><br>
        <button>Submit</button>
    
    </form>
</body>
</html>