<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Atlantis Tracking - Demo</title>

    <link rel="stylesheet" type="text/css" href="style/general.css">
</head>

<body>

<div id="main-container" class="container vertical">

    <div id="alert">You should use the smartphone to surf this website</div>
    <div id="header" class="container center middle">
        <img src="assets/logo.svg" alt="logo">
    </div>

    <?php print_separator('Interact with the map<br>explore the stages of your hat') ?>

    <div class="container vertical">

        <div id="map">
            <img src="assets/map.svg" alt="map">
            <div id="asia" class="continent">
                <img class="pin0" src="assets/icon-pin.svg" alt="pin">
                <div class="pin1" style="transform: translate(0px);">T<span>1</span></div>
                <div class="pin2" style="transform: translate(0px);">T<span>2</span></div>
                <div class="pin3" style="transform: translate(0px);">T<span>3</span></div>
                <div class="pin4" style="transform: translate(0px);">T<span>4</span></div>
            </div>
        </div>

        <script src="js/map-handler.js"></script>

        <div id="data-container" class="container vertical center middle">

            <div class="data-object">
                <div class="icon">
                    <img src="assets/data-icons/H2O.svg" alt="H2O">
                </div>
                <div class="body">
                    <div class="value">-99%</div>
                    <div class="text">We use less then 1 liter of water instead of the 15 used by the average hat</div>
                </div>
            </div>

            <div class="data-object">
                <div class="icon">
                    <img src="assets/data-icons/CO2.svg" alt="CO2">
                </div>
                <div class="body">
                    <div class="value">-17%</div>
                    <div class="text">The hat is produced using 0.62 kg less CO2 than the average hat</div>
                </div>
            </div>

            <div class="data-object">
                <div class="icon">
                    <img src="assets/data-icons/Energy.svg" alt="Energy">
                </div>
                <div class="body">
                    <div class="value">-61%</div>
                    <div class="text">We managed to use only 13.26MJ instead of the 34 used by the average hat</div>
                </div>
            </div>

        </div>

        <?php print_footer('<img alt="icon-how" src="assets/icon-how.svg"> <p>CLICK TO LEARN MORE ABOUT THE TOPIC</p>'); ?>

    </div>

</div>

</body>
</html>
