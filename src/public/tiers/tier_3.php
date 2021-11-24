<?php

    function print_bar_chart($percentage, $color) {
        $value = $percentage / 100;

        $height = 200 * $value;

        echo '
            <svg class="bar-chart" viewBox="0 0 75 200">
                <path class="top" d="M25, ' . 200-$height . ' l50 0 l-25 25 l-50 0 Z" fill="' . $color .'"></path>
                <path d="M25, ' . 200-$height . ' l50 0 l-25 25 l-50 0 Z" fill="rgba(0, 0, 0, 0.1)"></path>
                <path class="front-side" d="M0 200 L50 200 L50 ' . 225-$height . ' l-50 0 Z" fill="' . $color .'"></path>
                <path class="right-side" d="M50 200 L75 175 L75 ' . 200-$height . ' l-25 25 Z" fill="' . $color .'"></path>
                <path d="M50 200 L75 175 L75 ' . 200-$height . ' l-25 25 Z" fill="rgba(0, 0, 0, 0.2)"></path>
            </svg>
            ';
    }

?>

<div class="data-object">

    <div class="icon">
        <img src="assets/tier-icons/sewing_machine.svg" alt="sewing-machine">
    </div>

    <div class="body">
        <div class="value">Tier 3 - Factory</div>
        <div class="text">Your cap need to be made somewhere, our affiliate Wujiang Headwear has this task</div>
    </div>

</div>
<div class="card-container">
    <div class="card">
        <div class="icon">
            <img src="assets/tier-icons/building.svg" alt="building">
        </div>
        <div class="text">The factory has 27000 mq of production offices, warehouse, canteen and dormitory</div>
    </div>

    <div class="card">
        <div class="icon">
            <img src="assets/tier-icons/clock.svg" alt="clock">
        </div>
        <div class="text">The working plan has two 12-hour shifts with a 2-hour break each (8 hours plus two hours of extras, paid 200% more than the basic pay)</div>
    </div>
</div>

<div class="data-object" style="align-items: center">

    <div class="icon">
        <div class="container">
        <?php print_bar_chart(82, 'pink'); print_bar_chart(18, 'blue');?>
        </div>
    </div>

    <div class="body">
        <div class="text">521 hired employees, of which 83% woman, are of age and receive at least the minimum wage.</div>
    </div>

</div>