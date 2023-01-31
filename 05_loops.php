<?php


//------------ FOR LOOP


// for($x = 0; $x <= 10; $x++){
//     echo $x;
// }


// $x = 1;

// while ($x <= 10) {
    
//     echo 'Number '. $x. '<br>';
//     $x++;
// }


//_______________ DO WHILE


// $y = 1;

// do {
//     echo 'Number '. $y. '<br>';
//     $y++;
// }while($y <= 5);


//____________________ ForEach


$posts = ['First Post ', 'Second Post ', 'Third post '];


// for($x= 0; $x < count($posts); $x++){
//     echo $posts[$x];
// }

// foreach($posts as $post){
//     echo $post;
// }

//WITH INDEX

// foreach($posts as $index => $post){
//     echo $index . ': ' . $post . '<br>';
// }

//------FOR ASSOCIATIVE ARRAY INDEXING

// $user = [
//     'first_name'=> 'Dan',
//     'last_name' => 'Whisky',
//     'email' => 'Dan@ban.com'
// ];

// foreach($user as $key => $value){
//     echo "$key: $value<br>";
// }