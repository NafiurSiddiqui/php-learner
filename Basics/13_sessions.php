<?php


//sessions store information (in variables) to be used across pages. unlike cookies, sessions are stored on the server. More SECURED.


//YOU NEED TO START THE SESSION

session_start();


if(isset($_POST['submit'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    echo $username;

    if($username == 'Nafi' && $password == 'password'){
     

        $_SESSION['username'] = $username;
        
   
        //Redirect page

        header('Location: extras/dashboard.php');
    }else{
        echo 'Invalid login';
    }
}


?>



<!-- By default it is GET but use POST anytime you want to submit any value -->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
    <label for="username">username: </label>
    <input type="text" name="username">
</div>
<div>
    <label for="password">Password: </label>
    <input type="password" name="password">
</div>

<input type="submit" value="Submit" name="submit">
</form>


