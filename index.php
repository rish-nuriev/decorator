<?php

use Decorator\{BaseComponent, Mocco, Sugar, Milk};

require_once 'vendor/autoload.php';

// create base price that we can decorate
$basePrice = new BaseComponent();

// decorate base price with decorator Mocco
$decorator = new Mocco($basePrice);

// decorate Mocco with decorator Sugar 3 times
for($i=0; $i<3; $i++){
    $decorator = new Sugar($decorator);
}

// decorate Sugar with decorator Milk 2 times
for($i=0; $i<2; $i++){
    $decorator = new Milk($decorator);
}

// calculate final price by calling calculate method
$finalPrice = $decorator->calculate();

echo $finalPrice;