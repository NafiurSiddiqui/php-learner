<?php


//We can pass data through URLs and forms using the $_GET and $_POST superglobals.

// echo $_GET['name'];
// echo $_GET['age'];

//FOR POST
// echo $_POST['name'];
// echo $_POST['age'];


//👇 This way you do not show erros on the page, in case you return to the page without the values set.

if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
}

?>



<!-- By default it is GET but use POST anytime you want to submit any value -->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
    <label for="name">Name:</label>
    <input type="text" name="name">
</div>
<div>
    <label for="age">age</label>
    <input type="text" name="age">
</div>

<input type="submit" value="submit" name="submit">
</form>