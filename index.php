<?php 

$foodies= [
    ['Poultry' => 'Broiler', 'color' => 'white', 'location'=> 'Farm', 'shipping status' => 'paid', 'price' => 350.99],
    ['Poultry' => 'Guinea', 'color' => 'black', 'location'=> 'Farm', 'shipping status' => 'paid', 'price' => 270.00],
    ['Poultry' => 'Turkey', 'color' => 'black', 'location'=> 'Farm', 'shipping status' => 'paid', 'price' => 270.00],
    ['Poultry' => 'ducks', 'color' => 'yellow', 'location'=> 'Farm', 'shipping status' => 'paid', 'price' => 220.76],
    ['Poultry' => 'geese', 'color' => 'grey', 'location'=> 'Farm', 'shipping status' => 'free', 'price' => 270.00],
    ['Poultry' => 'quail', 'color' => 'black', 'location'=> 'Farm', 'shipping status' => 'free', 'price' => 380.46],
    ['Poultry' => 'pheasant', 'color' => 'blue', 'location'=> 'Farm', 'shipping status' => 'paid', 'price' => 270.00],
    ['Poultry' => 'patridge', 'color' => 'orange', 'location'=> 'Farm', 'shipping status' => 'free', 'price' => 350.89],
    ['Poultry' => 'peafowl', 'color' => 'black', 'location'=> 'Farm', 'shipping status' => 'paid', 'price' => 270.00],
    ['Poultry' => 'pigeon', 'color' => 'red', 'location'=> 'Farm', 'shipping status' => 'paid', 'price' => 290.77],
    ['Poultry' => 'chicken', 'color' => 'white', 'location'=> 'Farm', 'shipping status' => 'free', 'price' => 270.00],
    ['Poultry' => 'ostrich', 'color' => 'white', 'location'=> 'Farm', 'shipping status' => 'paid', 'price' => 320.99],
    ['Poultry' => 'emurat', 'color' => 'blue', 'location'=> 'Farm', 'shipping status' => 'free', 'price' => 298.06],
    ['Poultry' => 'swans', 'color' => 'white', 'location'=> 'Farm', 'shipping status' => 'paid', 'price' => 270.00],
    ['Poultry' => 'rheas', 'color' => 'brown', 'location'=> 'Farm', 'shipping status' => 'free', 'price' => 270.00],
    ['Poultry' => 'grouse', 'color' => 'white', 'location'=> 'Farm', 'shipping status' => 'free', 'price' => 270.00],
    ['Poultry' => 'ratite', 'color' => 'white', 'location'=> 'Farm', 'shipping status' => 'paid', 'price' => 270.00],
    ['Poultry' => 'poult', 'color' => 'lavender', 'location'=> 'Farm', 'shipping status' => 'free', 'price' => 270.00],
    ['Poultry' => 'hen', 'color' => 'green', 'location'=> 'Farm', 'shipping status' => 'paid', 'price' => 170.00],
    ['Poultry' => 'snood', 'color' => 'pink', 'location'=> 'Farm', 'shipping status' => 'free', 'price' => 240.80],
    ['Poultry' => 'watty', 'color' => 'white', 'location'=> 'Farm', 'shipping status' => 'paid', 'price' => 270.00]
];

// foreach($foodies as $foodie) {
//     if($foodie['price'] < 351.00 && $foodie['price'] > 249.99 ){
//         echo $foodie ['Poultry']; 
//         echo '<br />';
//     }
//     }

?>

<!DOCTYPE html>
<html>
<head>
    <title>FAV'S POULTRY FARM</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<h1>Poultry</h1>

<ul>
    <?php foreach($foodies as $foodie) { ?>

        <?php if ($foodie['price'] < 351.00 && $foodie['price'] > 249.99) { ?>

    <h2><?php echo $foodie['Poultry']; ?> <span>  -  </span><span> $<?php echo $foodie['price']; ?></span></h2>


    <?php } ?>
    <?php } ?>
</ul> 

</body>
</html>