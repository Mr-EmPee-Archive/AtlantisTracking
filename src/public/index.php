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
    function print_footer() {

        echo '<div id="footer" class="separator">';
        print_svg_separator("top");
        echo '
        <div class="body">
            <img src="assets/icon-how.svg" alt="how">
            <a href="https://atlantisheadwear.com/it/sostenibilita/" target="_blank"><p>LEARN MORE<br>ABOUT THE TOPIC</p></a>
        </div>';
        echo '</div>';

    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Atlantis Tracking - Demo</title>

        <link rel="stylesheet" type="text/css" href="style/general.css">
    </head>

    <body>

        <div id="loader-wrapper">
            <span class="loader"><span class="loader-inner"></span></span>
        </div>
        <div id="main-container" class="container vertical">

            <div id="header" class="container center middle">
                <img src="assets/logo.svg" alt="logo">

                <div class="menu">
                    <div class="content">
                        <button class="close-menu"></button>
                        <ul class="links">
                            <li>
                                <a href="https://atlantisheadwear.com/faq">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <?php print_separator('Interact with the map<br>explore the stages of your hat') ?>

            <div class="container vertical">

                <div id="map">
                    <img src="assets/map.svg" alt="map">
                    <div id="italy" class="pin" onclick="selectTier(this, 'tier_4')">
                        <svg viewBox="0 0 235 324" xmlns="http://www.w3.org/2000/svg">
                            <path d="M234.523 108.285C234.523 48.9219 186.434 0.8125 127.09 0.8125C67.75 0.8125 19.6367 48.9219 19.6367 108.285C19.6367 127.188 24.9062 140.188 24.9062 140.188C29.4102 151.273 33.0352 160.359 32.9375 160.359C32.8438 160.359 37.6758 168.855 43.6719 179.227L69.0508 223.195C75.0273 233.566 84.8242 250.559 90.8203 260.926L116.203 304.879C122.184 315.246 131.977 315.246 137.977 304.879L163.336 260.926C169.332 250.559 179.129 233.566 185.105 223.195L210.504 179.227C216.484 168.855 221.312 160.359 221.219 160.359C221.121 160.359 224.746 151.273 229.25 140.188C229.25 140.188 234.523 127.188 234.523 108.285Z"/>
                            <path d="M202.148 108.285C202.148 149.758 168.527 183.371 127.09 183.371C85.6289 183.371 52.0273 149.758 52.0273 108.285C52.0273 66.8086 85.6289 33.1992 127.09 33.1992C168.527 33.1992 202.148 66.8086 202.148 108.285Z" fill="white"/>
                            <path d="M112.234 315.48C111.203 315.473 110.117 315.164 108.871 314.301C107.633 313.441 106.277 311.984 105.031 309.824L79.6484 265.871C73.6524 255.504 63.8555 238.516 57.8789 228.141L32.5 184.176V184.172C29.5313 179.043 26.8516 174.375 24.918 170.973C23.9531 169.277 23.1719 167.891 22.6406 166.941C22.3789 166.473 22.1797 166.105 22.0586 165.875C22.0234 165.77 21.9883 165.676 21.9492 165.566C21.7461 165.016 21.4102 164.152 20.9414 162.949C19.5352 159.367 16.957 152.949 13.9961 145.664V145.66H13.9922C13.9922 145.66 13.9922 145.66 13.9961 145.66C13.8594 145.34 9.02345 132.996 9.03126 115.355C9.03517 86.8281 20.5781 61.0508 39.2617 42.3594C43.0742 38.5469 47.1797 35.0391 51.543 31.8594C31.8399 51.3398 19.6367 78.3789 19.6367 108.285C19.6367 127.188 24.9063 140.188 24.9063 140.188C29.4102 151.273 33.0352 160.359 32.9375 160.359C32.8438 160.359 37.6758 168.855 43.6719 179.227L69.0508 223.195C75.0274 233.566 84.8242 250.559 90.8203 260.926L116.203 304.879C117.262 306.711 118.438 308.223 119.695 309.406L119.453 309.82C118.203 311.98 116.844 313.438 115.605 314.297C114.352 315.164 113.27 315.473 112.234 315.48Z" fill="white"/>
                            <path d="M119.695 309.406C118.438 308.223 117.262 306.711 116.203 304.879L90.8203 260.926C84.8242 250.559 75.0273 233.566 69.0508 223.195L43.6719 179.227C37.6758 168.855 32.8438 160.359 32.9375 160.359C33.0352 160.359 29.4102 151.273 24.9062 140.188C24.9062 140.188 19.6367 127.188 19.6367 108.285C19.6367 78.3789 31.8398 51.3398 51.543 31.8594C68.5781 19.4492 89.543 12.1289 112.242 12.1289C140.754 12.1289 166.523 23.6719 185.211 42.3594C203.891 61.0508 215.43 86.8281 215.43 115.355C215.43 124.41 214.168 132.07 212.906 137.426C212.277 140.102 211.656 142.203 211.191 143.613C210.961 144.316 210.773 144.852 210.645 145.195C210.582 145.371 210.535 145.496 210.504 145.574L210.473 145.656L210.469 145.66H210.473C208.246 151.137 206.234 156.129 204.777 159.789C204.047 161.617 203.453 163.113 203.039 164.184C202.832 164.715 202.672 165.145 202.551 165.473C202.496 165.625 202.449 165.754 202.402 165.887C202.344 166 202.262 166.148 202.168 166.316C201.516 167.504 200.16 169.91 198.375 173.031C196.598 176.152 194.379 180.012 191.98 184.18L191.984 184.176L166.582 228.137V228.141C160.605 238.516 150.809 255.504 144.812 265.871V265.875L119.695 309.406ZM105.711 36.2852C86.418 37.8633 69.0586 46.3477 56.1641 59.2539C41.8203 73.5977 32.9375 93.457 32.9375 115.355C32.9375 137.25 41.8203 157.109 56.1641 171.453C70.4961 185.797 90.3477 194.684 112.234 194.684C112.234 194.684 112.238 194.684 112.242 194.684C112.242 194.684 112.246 194.684 112.25 194.684C134.129 194.684 153.973 185.797 168.312 171.453C168.707 171.055 169.102 170.652 169.492 170.246C189.207 156.719 202.148 134.012 202.148 108.285C202.148 66.8086 168.527 33.1992 127.09 33.1992C119.664 33.1992 112.484 34.2773 105.711 36.2852Z"/>
                            <path d="M169.492 170.246C183.141 156.008 191.543 136.645 191.543 115.355C191.543 93.457 182.656 73.5977 168.312 59.2539C153.973 44.9062 134.121 36.0195 112.242 36.0234H112.234C110.039 36.0234 107.863 36.1094 105.711 36.2852C112.484 34.2773 119.664 33.1992 127.09 33.1992C168.527 33.1992 202.148 66.8086 202.148 108.285C202.148 134.012 189.207 156.719 169.492 170.246Z" fill="white"/>
                            <path d="M112.262 323.969C112.254 323.969 112.242 323.969 112.234 323.969C112.227 323.969 112.215 323.969 112.207 323.969C109.305 323.969 106.453 322.98 104.004 321.258C101.535 319.531 99.4258 317.09 97.6797 314.066L72.3008 270.121L72.3047 270.125C66.3008 259.746 56.5039 242.758 50.5273 232.387L25.1484 188.418L25.1523 188.426C21.2109 181.609 17.7734 175.605 15.8867 172.258C15.2578 171.133 14.8086 170.32 14.5352 169.812C14.4609 169.672 14.3984 169.555 14.332 169.418C14.293 169.34 14.2578 169.27 14.1914 169.113C14.1563 169.027 14.1133 168.934 14.0391 168.699C14.0234 168.648 14.0078 168.594 13.9883 168.523C13.9766 168.492 13.9648 168.453 13.9492 168.41C13.8555 168.16 13.7031 167.758 13.5039 167.25C13.1055 166.227 12.5234 164.742 11.8008 162.93C10.3555 159.297 8.35156 154.32 6.13281 148.855H6.12891C6.00391 148.523 0.554689 135.051 0.546876 115.355C0.54297 84.5117 13.0547 56.5547 33.2617 36.3555C50.6875 18.9219 73.8828 7.21484 99.7188 4.33203C81.25 9.18359 64.7188 18.832 51.543 31.8594C47.1797 35.0391 43.0742 38.5469 39.2617 42.3594C20.5781 61.0508 9.03516 86.8281 9.03125 115.355C9.02344 132.996 13.8594 145.34 13.9961 145.66V145.664C16.957 152.949 19.5352 159.367 20.9414 162.949C21.4102 164.152 21.7461 165.016 21.9492 165.566C21.9883 165.676 22.0234 165.77 22.0586 165.875C22.1797 166.105 22.3789 166.473 22.6406 166.941C23.1719 167.891 23.9531 169.277 24.918 170.973C26.8516 174.375 29.5312 179.043 32.5 184.172V184.176L57.8789 228.141C63.8555 238.516 73.6523 255.504 79.6484 265.871L105.031 309.824C106.277 311.984 107.633 313.441 108.871 314.301C110.117 315.164 111.203 315.473 112.234 315.48C113.27 315.473 114.352 315.164 115.605 314.297C116.844 313.438 118.203 311.98 119.453 309.82L119.695 309.406C121.984 311.57 124.535 312.656 127.082 312.656C127.266 312.656 127.445 312.648 127.629 312.641L126.805 314.066V314.07C125.055 317.094 122.938 319.531 120.469 321.262C118.016 322.98 115.164 323.969 112.262 323.969ZM14 166.297H14.0039H14ZM16.7695 163.395L16.7734 163.398L16.7695 163.395Z" fill="#231F20"/>
                            <path d="M127.082 312.656C124.535 312.656 121.984 311.57 119.695 309.406L144.812 265.875V265.871C150.809 255.504 160.605 238.516 166.582 228.141V228.137L191.984 184.176L191.98 184.18C194.379 180.012 196.598 176.152 198.375 173.031C200.16 169.91 201.516 167.504 202.168 166.316C202.262 166.148 202.344 166 202.402 165.887C202.449 165.754 202.496 165.625 202.551 165.473C202.672 165.145 202.832 164.715 203.039 164.184C203.453 163.113 204.047 161.617 204.777 159.789C206.234 156.129 208.246 151.137 210.473 145.66H210.469L210.473 145.656L210.504 145.574C210.535 145.496 210.582 145.371 210.645 145.195C210.773 144.852 210.961 144.316 211.191 143.613C211.656 142.203 212.277 140.102 212.906 137.426C214.168 132.07 215.43 124.41 215.43 115.355C215.43 86.8281 203.891 61.0508 185.211 42.3594C166.523 23.6719 140.754 12.1289 112.242 12.1289C89.543 12.1289 68.5781 19.4492 51.543 31.8594C64.7188 18.832 81.25 9.1836 99.7188 4.33203C103.828 3.8711 108.004 3.63672 112.234 3.63672C112.234 3.63672 112.238 3.63672 112.242 3.63672C143.074 3.63281 171.016 16.1445 191.215 36.3555C211.414 56.5586 223.918 84.5117 223.918 115.355C223.91 135.051 218.465 148.523 218.336 148.855C216.508 153.344 214.832 157.508 213.488 160.863C212.145 164.219 211.133 166.785 210.664 168.012C210.582 168.219 210.52 168.395 210.477 168.512C210.434 168.676 210.398 168.773 210.371 168.855C210.312 169.023 210.273 169.105 210.246 169.176C210.187 169.309 210.148 169.379 210.113 169.453C210.043 169.594 209.977 169.723 209.895 169.875C209.73 170.18 209.52 170.57 209.242 171.07C208.687 172.066 207.895 173.461 206.926 175.176C204.98 178.598 202.301 183.277 199.336 188.418L199.332 188.422L173.934 232.391L173.938 232.387C167.957 242.758 158.16 259.746 152.16 270.125L152.164 270.121L127.629 312.641C127.445 312.648 127.266 312.656 127.082 312.656Z" fill="#1F1103"/>
                            <path d="M112.242 186.195C92.6719 186.191 74.9922 178.273 62.1641 165.445C49.3438 152.617 41.4258 134.934 41.4258 115.355C41.4258 95.7734 49.3438 78.0938 62.1641 65.2617C65.3594 62.0664 68.8477 59.1797 72.5938 56.6445C59.8477 70.1016 52.0273 88.2812 52.0273 108.285C52.0273 149.758 85.6289 183.371 127.09 183.371C129.02 183.371 130.934 183.297 132.828 183.152C126.316 185.129 119.406 186.191 112.242 186.195Z"/>
                            <path d="M127.09 183.371C85.6289 183.371 52.0273 149.758 52.0273 108.285C52.0273 88.2812 59.8477 70.1016 72.5938 56.6445C83.9102 48.9844 97.543 44.5156 112.242 44.5117C131.805 44.5156 149.48 52.4336 162.309 65.2617C175.133 78.0938 183.055 95.7734 183.055 115.355C183.055 134.934 175.133 152.617 162.309 165.445C154.18 173.574 144.098 179.734 132.828 183.152C130.934 183.297 129.02 183.371 127.09 183.371Z" fill="white"/>
                            <path d="M112.234 194.684C90.3477 194.684 70.4961 185.797 56.1641 171.453C41.8203 157.109 32.9375 137.25 32.9375 115.355C32.9375 93.457 41.8203 73.5977 56.1641 59.2539C69.0586 46.3477 86.418 37.8633 105.711 36.2852C92.9102 40.0859 81.543 47.1992 72.5938 56.6445C68.8477 59.1797 65.3594 62.0664 62.1641 65.2617C49.3438 78.0938 41.4258 95.7734 41.4258 115.355C41.4258 134.934 49.3438 152.617 62.1641 165.445C74.9922 178.273 92.6719 186.191 112.242 186.195C119.406 186.191 126.316 185.129 132.828 183.152C146.367 182.129 158.906 177.512 169.492 170.246C169.102 170.652 168.707 171.055 168.312 171.453C153.973 185.797 134.129 194.684 112.25 194.684C112.246 194.684 112.242 194.684 112.242 194.684C112.238 194.684 112.234 194.684 112.234 194.684Z" fill="#1F1103"/>
                            <path d="M132.828 183.152C144.098 179.734 154.18 173.574 162.309 165.445C175.133 152.617 183.055 134.934 183.055 115.355C183.055 95.7734 175.133 78.0938 162.309 65.2617C149.48 52.4336 131.805 44.5156 112.242 44.5117C97.543 44.5156 83.9102 48.9844 72.5938 56.6445C81.543 47.1992 92.9102 40.0859 105.711 36.2852C107.863 36.1094 110.039 36.0234 112.234 36.0234H112.242C134.121 36.0195 153.973 44.9063 168.312 59.2539C182.656 73.5977 191.543 93.457 191.543 115.355C191.543 136.645 183.141 156.008 169.492 170.246C158.906 177.512 146.367 182.129 132.828 183.152Z" fill="#231F20"/>
                        </svg>
                    </div>
                    <div id="asia" class="continent pin">
                        <svg viewBox="0 0 235 324" xmlns="http://www.w3.org/2000/svg">
                            <path d="M234.523 108.285C234.523 48.9219 186.434 0.8125 127.09 0.8125C67.75 0.8125 19.6367 48.9219 19.6367 108.285C19.6367 127.188 24.9062 140.188 24.9062 140.188C29.4102 151.273 33.0352 160.359 32.9375 160.359C32.8438 160.359 37.6758 168.855 43.6719 179.227L69.0508 223.195C75.0273 233.566 84.8242 250.559 90.8203 260.926L116.203 304.879C122.184 315.246 131.977 315.246 137.977 304.879L163.336 260.926C169.332 250.559 179.129 233.566 185.105 223.195L210.504 179.227C216.484 168.855 221.312 160.359 221.219 160.359C221.121 160.359 224.746 151.273 229.25 140.188C229.25 140.188 234.523 127.188 234.523 108.285Z"/>
                            <path d="M202.148 108.285C202.148 149.758 168.527 183.371 127.09 183.371C85.6289 183.371 52.0273 149.758 52.0273 108.285C52.0273 66.8086 85.6289 33.1992 127.09 33.1992C168.527 33.1992 202.148 66.8086 202.148 108.285Z" fill="white"/>
                            <path d="M112.234 315.48C111.203 315.473 110.117 315.164 108.871 314.301C107.633 313.441 106.277 311.984 105.031 309.824L79.6484 265.871C73.6524 255.504 63.8555 238.516 57.8789 228.141L32.5 184.176V184.172C29.5313 179.043 26.8516 174.375 24.918 170.973C23.9531 169.277 23.1719 167.891 22.6406 166.941C22.3789 166.473 22.1797 166.105 22.0586 165.875C22.0234 165.77 21.9883 165.676 21.9492 165.566C21.7461 165.016 21.4102 164.152 20.9414 162.949C19.5352 159.367 16.957 152.949 13.9961 145.664V145.66H13.9922C13.9922 145.66 13.9922 145.66 13.9961 145.66C13.8594 145.34 9.02345 132.996 9.03126 115.355C9.03517 86.8281 20.5781 61.0508 39.2617 42.3594C43.0742 38.5469 47.1797 35.0391 51.543 31.8594C31.8399 51.3398 19.6367 78.3789 19.6367 108.285C19.6367 127.188 24.9063 140.188 24.9063 140.188C29.4102 151.273 33.0352 160.359 32.9375 160.359C32.8438 160.359 37.6758 168.855 43.6719 179.227L69.0508 223.195C75.0274 233.566 84.8242 250.559 90.8203 260.926L116.203 304.879C117.262 306.711 118.438 308.223 119.695 309.406L119.453 309.82C118.203 311.98 116.844 313.438 115.605 314.297C114.352 315.164 113.27 315.473 112.234 315.48Z" fill="white"/>
                            <path d="M119.695 309.406C118.438 308.223 117.262 306.711 116.203 304.879L90.8203 260.926C84.8242 250.559 75.0273 233.566 69.0508 223.195L43.6719 179.227C37.6758 168.855 32.8438 160.359 32.9375 160.359C33.0352 160.359 29.4102 151.273 24.9062 140.188C24.9062 140.188 19.6367 127.188 19.6367 108.285C19.6367 78.3789 31.8398 51.3398 51.543 31.8594C68.5781 19.4492 89.543 12.1289 112.242 12.1289C140.754 12.1289 166.523 23.6719 185.211 42.3594C203.891 61.0508 215.43 86.8281 215.43 115.355C215.43 124.41 214.168 132.07 212.906 137.426C212.277 140.102 211.656 142.203 211.191 143.613C210.961 144.316 210.773 144.852 210.645 145.195C210.582 145.371 210.535 145.496 210.504 145.574L210.473 145.656L210.469 145.66H210.473C208.246 151.137 206.234 156.129 204.777 159.789C204.047 161.617 203.453 163.113 203.039 164.184C202.832 164.715 202.672 165.145 202.551 165.473C202.496 165.625 202.449 165.754 202.402 165.887C202.344 166 202.262 166.148 202.168 166.316C201.516 167.504 200.16 169.91 198.375 173.031C196.598 176.152 194.379 180.012 191.98 184.18L191.984 184.176L166.582 228.137V228.141C160.605 238.516 150.809 255.504 144.812 265.871V265.875L119.695 309.406ZM105.711 36.2852C86.418 37.8633 69.0586 46.3477 56.1641 59.2539C41.8203 73.5977 32.9375 93.457 32.9375 115.355C32.9375 137.25 41.8203 157.109 56.1641 171.453C70.4961 185.797 90.3477 194.684 112.234 194.684C112.234 194.684 112.238 194.684 112.242 194.684C112.242 194.684 112.246 194.684 112.25 194.684C134.129 194.684 153.973 185.797 168.312 171.453C168.707 171.055 169.102 170.652 169.492 170.246C189.207 156.719 202.148 134.012 202.148 108.285C202.148 66.8086 168.527 33.1992 127.09 33.1992C119.664 33.1992 112.484 34.2773 105.711 36.2852Z"/>
                            <path d="M169.492 170.246C183.141 156.008 191.543 136.645 191.543 115.355C191.543 93.457 182.656 73.5977 168.312 59.2539C153.973 44.9062 134.121 36.0195 112.242 36.0234H112.234C110.039 36.0234 107.863 36.1094 105.711 36.2852C112.484 34.2773 119.664 33.1992 127.09 33.1992C168.527 33.1992 202.148 66.8086 202.148 108.285C202.148 134.012 189.207 156.719 169.492 170.246Z" fill="white"/>
                            <path d="M112.262 323.969C112.254 323.969 112.242 323.969 112.234 323.969C112.227 323.969 112.215 323.969 112.207 323.969C109.305 323.969 106.453 322.98 104.004 321.258C101.535 319.531 99.4258 317.09 97.6797 314.066L72.3008 270.121L72.3047 270.125C66.3008 259.746 56.5039 242.758 50.5273 232.387L25.1484 188.418L25.1523 188.426C21.2109 181.609 17.7734 175.605 15.8867 172.258C15.2578 171.133 14.8086 170.32 14.5352 169.812C14.4609 169.672 14.3984 169.555 14.332 169.418C14.293 169.34 14.2578 169.27 14.1914 169.113C14.1563 169.027 14.1133 168.934 14.0391 168.699C14.0234 168.648 14.0078 168.594 13.9883 168.523C13.9766 168.492 13.9648 168.453 13.9492 168.41C13.8555 168.16 13.7031 167.758 13.5039 167.25C13.1055 166.227 12.5234 164.742 11.8008 162.93C10.3555 159.297 8.35156 154.32 6.13281 148.855H6.12891C6.00391 148.523 0.554689 135.051 0.546876 115.355C0.54297 84.5117 13.0547 56.5547 33.2617 36.3555C50.6875 18.9219 73.8828 7.21484 99.7188 4.33203C81.25 9.18359 64.7188 18.832 51.543 31.8594C47.1797 35.0391 43.0742 38.5469 39.2617 42.3594C20.5781 61.0508 9.03516 86.8281 9.03125 115.355C9.02344 132.996 13.8594 145.34 13.9961 145.66V145.664C16.957 152.949 19.5352 159.367 20.9414 162.949C21.4102 164.152 21.7461 165.016 21.9492 165.566C21.9883 165.676 22.0234 165.77 22.0586 165.875C22.1797 166.105 22.3789 166.473 22.6406 166.941C23.1719 167.891 23.9531 169.277 24.918 170.973C26.8516 174.375 29.5312 179.043 32.5 184.172V184.176L57.8789 228.141C63.8555 238.516 73.6523 255.504 79.6484 265.871L105.031 309.824C106.277 311.984 107.633 313.441 108.871 314.301C110.117 315.164 111.203 315.473 112.234 315.48C113.27 315.473 114.352 315.164 115.605 314.297C116.844 313.438 118.203 311.98 119.453 309.82L119.695 309.406C121.984 311.57 124.535 312.656 127.082 312.656C127.266 312.656 127.445 312.648 127.629 312.641L126.805 314.066V314.07C125.055 317.094 122.938 319.531 120.469 321.262C118.016 322.98 115.164 323.969 112.262 323.969ZM14 166.297H14.0039H14ZM16.7695 163.395L16.7734 163.398L16.7695 163.395Z" fill="#231F20"/>
                            <path d="M127.082 312.656C124.535 312.656 121.984 311.57 119.695 309.406L144.812 265.875V265.871C150.809 255.504 160.605 238.516 166.582 228.141V228.137L191.984 184.176L191.98 184.18C194.379 180.012 196.598 176.152 198.375 173.031C200.16 169.91 201.516 167.504 202.168 166.316C202.262 166.148 202.344 166 202.402 165.887C202.449 165.754 202.496 165.625 202.551 165.473C202.672 165.145 202.832 164.715 203.039 164.184C203.453 163.113 204.047 161.617 204.777 159.789C206.234 156.129 208.246 151.137 210.473 145.66H210.469L210.473 145.656L210.504 145.574C210.535 145.496 210.582 145.371 210.645 145.195C210.773 144.852 210.961 144.316 211.191 143.613C211.656 142.203 212.277 140.102 212.906 137.426C214.168 132.07 215.43 124.41 215.43 115.355C215.43 86.8281 203.891 61.0508 185.211 42.3594C166.523 23.6719 140.754 12.1289 112.242 12.1289C89.543 12.1289 68.5781 19.4492 51.543 31.8594C64.7188 18.832 81.25 9.1836 99.7188 4.33203C103.828 3.8711 108.004 3.63672 112.234 3.63672C112.234 3.63672 112.238 3.63672 112.242 3.63672C143.074 3.63281 171.016 16.1445 191.215 36.3555C211.414 56.5586 223.918 84.5117 223.918 115.355C223.91 135.051 218.465 148.523 218.336 148.855C216.508 153.344 214.832 157.508 213.488 160.863C212.145 164.219 211.133 166.785 210.664 168.012C210.582 168.219 210.52 168.395 210.477 168.512C210.434 168.676 210.398 168.773 210.371 168.855C210.312 169.023 210.273 169.105 210.246 169.176C210.187 169.309 210.148 169.379 210.113 169.453C210.043 169.594 209.977 169.723 209.895 169.875C209.73 170.18 209.52 170.57 209.242 171.07C208.687 172.066 207.895 173.461 206.926 175.176C204.98 178.598 202.301 183.277 199.336 188.418L199.332 188.422L173.934 232.391L173.938 232.387C167.957 242.758 158.16 259.746 152.16 270.125L152.164 270.121L127.629 312.641C127.445 312.648 127.266 312.656 127.082 312.656Z" fill="#1F1103"/>
                            <path d="M112.242 186.195C92.6719 186.191 74.9922 178.273 62.1641 165.445C49.3438 152.617 41.4258 134.934 41.4258 115.355C41.4258 95.7734 49.3438 78.0938 62.1641 65.2617C65.3594 62.0664 68.8477 59.1797 72.5938 56.6445C59.8477 70.1016 52.0273 88.2812 52.0273 108.285C52.0273 149.758 85.6289 183.371 127.09 183.371C129.02 183.371 130.934 183.297 132.828 183.152C126.316 185.129 119.406 186.191 112.242 186.195Z"/>
                            <path d="M127.09 183.371C85.6289 183.371 52.0273 149.758 52.0273 108.285C52.0273 88.2812 59.8477 70.1016 72.5938 56.6445C83.9102 48.9844 97.543 44.5156 112.242 44.5117C131.805 44.5156 149.48 52.4336 162.309 65.2617C175.133 78.0938 183.055 95.7734 183.055 115.355C183.055 134.934 175.133 152.617 162.309 165.445C154.18 173.574 144.098 179.734 132.828 183.152C130.934 183.297 129.02 183.371 127.09 183.371Z" fill="white"/>
                            <path d="M112.234 194.684C90.3477 194.684 70.4961 185.797 56.1641 171.453C41.8203 157.109 32.9375 137.25 32.9375 115.355C32.9375 93.457 41.8203 73.5977 56.1641 59.2539C69.0586 46.3477 86.418 37.8633 105.711 36.2852C92.9102 40.0859 81.543 47.1992 72.5938 56.6445C68.8477 59.1797 65.3594 62.0664 62.1641 65.2617C49.3438 78.0938 41.4258 95.7734 41.4258 115.355C41.4258 134.934 49.3438 152.617 62.1641 165.445C74.9922 178.273 92.6719 186.191 112.242 186.195C119.406 186.191 126.316 185.129 132.828 183.152C146.367 182.129 158.906 177.512 169.492 170.246C169.102 170.652 168.707 171.055 168.312 171.453C153.973 185.797 134.129 194.684 112.25 194.684C112.246 194.684 112.242 194.684 112.242 194.684C112.238 194.684 112.234 194.684 112.234 194.684Z" fill="#1F1103"/>
                            <path d="M132.828 183.152C144.098 179.734 154.18 173.574 162.309 165.445C175.133 152.617 183.055 134.934 183.055 115.355C183.055 95.7734 175.133 78.0938 162.309 65.2617C149.48 52.4336 131.805 44.5156 112.242 44.5117C97.543 44.5156 83.9102 48.9844 72.5938 56.6445C81.543 47.1992 92.9102 40.0859 105.711 36.2852C107.863 36.1094 110.039 36.0234 112.234 36.0234H112.242C134.121 36.0195 153.973 44.9063 168.312 59.2539C182.656 73.5977 191.543 93.457 191.543 115.355C191.543 136.645 183.141 156.008 169.492 170.246C158.906 177.512 146.367 182.129 132.828 183.152Z" fill="#231F20"/>
                        </svg>
                        <div onclick="selectTier(this, 'tier_1')" style="transform: translate(0px);">T<span>1</span></div>
                        <div onclick="selectTier(this, 'tier_2')" style="transform: translate(0px);">T<span>2</span></div>
                        <div onclick="selectTier(this, 'tier_3')" style="transform: translate(0px);">T<span>3</span></div>
                    </div>
                </div>

                <div id="data-container" class="container vertical center middle"></div>

                <?php print_footer(); ?>
            </div>

        </div>

        <script src="js/website_loader.js"></script>
        <script src="js/menu_handler.js"></script>
        <script src="js/data_handler.js"></script>
        <script src="js/map_handler.js"></script>

    </body>
</html>

