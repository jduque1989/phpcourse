<?php

$countries = [
    'Venezuela' => ['Caracas','Portuguesa','Guarane'],
    'Colombia' => ['Bogota','Medellin','Cartagena'],
    'Argentina' => ['Buenos Aires', 'Santa Fe','La Plata'],

];
foreach ($countries as $country => $cities){
    echo '<b>'.$country.'</b>:<br>';
    echo '<ul>';
        foreach ($cities as $city) {
            print'<li>'.$city.'</li>';
        }
        echo'</ul>';
}

?>