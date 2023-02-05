<!-- EXAMPLE: 1 -->

<?php



// if(isset($_POST['submit'])){

//     if(!empty($_FILES['upload']['name'])){

//         //check for image

//         $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

//         //check what the file contains
//         // print_r($_FILES);

//         //let destrucutre the files.
//         $file_name = $_FILES['upload']['name'];
//         $file_size= $_FILES['upload']['size'];
//         $file_tmp = $_FILES['upload']['tmp_name'];

//         //where do  you wanna upload?       
//         $target_dir = "uploads/$file_name";


//         //GET THE FILE EXTENSION

//         $file_ext = explode('.', $file_name);
//         $file_ext = strtolower(end($file_ext));

//         //echo out the ext[ TEST]

//         echo $file_name;

//         echo $file_ext;

//         //VALIDATE

//         if(in_array($file_ext, $allowed_ext)){

//             //LIMIT the file size as well

//             if($file_size <= 3000000){

//                 //upload the file

//                 move_uploaded_file($file_tmp, $target_dir);
//                  $message = '<p style="color:green"> Succesfully uploaded! </p>';
//             }else{
//                  $message = '<p style="color:red;"> File is too large! </p>';
//             }

//         }else{
//              $message = '<p style="color:red;"> Invalid file type </p>';
//         }




//     }else{
//         $message = '<p style="color:red;"> Please choose a file</p>';

//     }
// }






//* EXAMPLE : 2 (make sure to comment out example 1)


//upload destination

$uploadDir = "./uploads";

//file to upload
$image = $uploadDir . basename($_FILES["upload"]["name"]);

//get the type

$fileType = pathinfo($image, FILEINFO_EXTENSION);








?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>
<body>
    <!-- enctype: without this attribute the file upload won't work -->
    <?php echo $message ?? null; ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    Select your image:
    <br>
    <br>
    <input type="file" name="upload" id="upload"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html> 