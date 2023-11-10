<?php

// $age = 20;

// if ($age >= 18) {
//     echo 'You are good to roll in';
// } else {
//     echo 'You are not yet good to roll in';
// }

//MULTIPLE conditions

$t = date("H");


// if($t < 12){
//     echo 'Good Morning';
// }elseif( $t < 17) {
//     echo 'Good Afternoon';
// }
// else{
//     echo 'Good Evening';
// }


$posts = ['First post'];

// if(!empty($posts)){
//     echo $posts[0];
// }else{
//     echo 'No posts';
// }


//------------- TERNARY OPERATOR

// echo !empty($posts) ? $posts[0] : 'No posts';

//------------- Coelcing

// $firstPost = $posts[0] ?? null;

// echo $firstPost;



//-------------- Switch 

$favBand= 'Justin Bieber';


switch($favBand){

    case 'Cannibal Corpse':
        echo 'Your favourtie band is Cannibal Corpse';
        break;
    case 'Suffocation':
       echo 'Your favourtie band is Suffocation';
       break;
    case 'Justin Bieber':
        echo "The hell are you doing here??";
        break;
    default:
        echo 'None of these bands are your fav';
}