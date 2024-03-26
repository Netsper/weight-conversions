<?php

declare(strict_types=1);

use Netsper\WeightConversions\WeightConversionsClass;

it('can convert kilograms to pounds', function () {
    $pounds = WeightConversionsClass::kilograms(100)->toPound();

    expect($pounds)->toEqual(220.46);
});
