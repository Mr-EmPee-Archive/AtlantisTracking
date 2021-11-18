<?php

    function print_svg_separator($type) {

        echo '
                <svg class="'. $type .'" viewBox="0 0 345 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="first-line" d="M151.183 40.7031C240.75 64.5391 281.068 35.9336 304.102 25.0117C337.962 8.93359 347 13.0117 347 13.0117V0.703125C312.444 4.31641 252.171 64.5391 179.084 38.168C71.7437 -2.91406 0.151215 28.3945 0.151215 28.3945V42.2422C0.151215 42.2422 52.38 8.31641 151.183 40.7031Z"/>
                    <path class="second-line" d="M110.221 39.539C194.153 62.6172 232.695 64.7578 283.055 44C327.354 21.3828 346.998 24.5 346.998 24.5V12.4609C346.998 12.4609 337.917 8.92187 304.047 25C281.006 35.9219 240.789 64.3359 151.195 40.5C52.4654 8.11328 0.151985 42.1056 0.151985 42.1056V58.6289C0.0509717 58.6289 55.8915 24.539 110.221 39.539Z"/>
                    <path class="background" d="M347 24.2422C347 24.2422 327.142 21.1641 282.855 43.707C232.611 64.5391 193.98 62.3203 110.072 39.2422C55.7579 24.3203 0.151215 58.6289 0.151215 58.6289H347V24.2422Z"/>
                </svg>
        ';

    }
    function print_separator($text) {

        echo '<div class="separator">';
        print_svg_separator("top");
        echo '<p class="body">' . $text . '</p>';
        print_svg_separator("bottom");
        echo '</div>';

    }
    function print_footer($body) {

        echo '<div id="footer" class="separator">';
        print_svg_separator("top");
        echo '<div class="body">' . $body . '</div>';
        echo '</div>';

    }

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

    include_once 'homepage.php';
