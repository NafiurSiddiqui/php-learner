<?php

//To get pass any hacky tacky

//*----- htmlspecialchars

// if(isset($_POST['submit'])){

//     $name = htmlspecialchars($_POST['name']);
//     $age= htmlspecialchars($_POST['age']);
//     // echo $_POST['name'];
//     // echo $_POST['age'];
//     echo $name;
//     echo $age;
// }


//*----- or  use PHP filters like, filter_input and more. 
if (isset($_POST['submit'])) {

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    //we can also sanitize variables by htmlspecialchars, previously filter_Var was used.

    $someText = "<h1>Some text</h1>";
    // $textSanitized = filter_var($someText, FILTER_SANITIZE_STRING);
    $textSanitized = htmlspecialchars($someText);





    echo $textSanitized;
    echo $name;
    echo $age;
}


?>



<!-- By default it is GET but use POST anytime you want to submit any value -->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
    </div>
    <br>
    <div>
        <label for="age">age</label>
        <input type="text" name="age">
    </div>
    <br>
    <input type="submit" value="submit" name="submit">
</form>