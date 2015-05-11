<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Get Directions to and from any Luminant site.">

    <title>Luminant Site Map and Directions</title>

    


<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<link rel="stylesheet" href="style.css">



<!--[if lte IE 8]>
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
  
<![endif]-->
<!--[if gt IE 8]><!-->
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
  
<!--<![endif]-->

</head>
<body>







<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <img src="LuminantLogo.png">
            <h1 class="brand-title">Luminant Sites</h1>
            <h2 class="brand-tagline">Browse or Get Directions</h2>
<!--Here is the form for getting directions. You can edit oor add options, just follow the pattern and make sure you do it in both Control Lists.    -->        
            <form class="pure-form pure-form-stacked" action="index.php" method="POST">
            <fieldset>
                <div class="pure-control-group">
                    <label for="origin">Start From</label>
                    <select id="origin" type="select" name="origin">
                    <option value="">Choose a Location</option>
                    <option value="32.228447,-94.501906">Beckville</option>
                    <option value="31.822903,-96.060271">Big Brown</option>
                    <option value="31.821378,-96.067183">Big Brown / Turlington</option>
                    <option value="31.170008,-96.569783">Bremond</option>
                    <option value="32.872757,-96.947442">COF</option>
                    <option value="32.299793,-97.804630">Comanche Peak</option>
                    <option value="32.404148,-97.703161">DeCordova</option>
                    <option value="32.905496,-97.478685">Eagle Mountain</option>
                    <option value="32.782966,-96.799366">Energy Plaza</option>
                    <option value="32.744376,-96.964688">ERC</option>
                    <option value="33.134811,-98.612509">Graham </option>
                    <option value="31.281481,-96.493819">Kosse</option>
                    <option value="31.466914,-96.986748">Lake Creek</option>
                    <option value="32.833984,-96.544249">Lake Hubbard</option>
                    <option value="32.990556,-95.055833">Leesburg</option>
                    <option value="32.253718,-94.615701">Liberty</option>
                    <option value="32.332000,-95.338000">Luminant Academy</option>
                    <option value="32.261842,-94.574476">Martin Lake</option>
                    <option value="33.094625,-95.040955">Monticello</option>
                    <option value="33.096747,-95.082522">Monticello Admin</option>
                    <option value="32.336451,-100.914381">Morgan Creek</option>
                    <option value="32.951703,-96.974044">North Lake</option>
                    <option value="32.730800,-97.218870">North Main</option>
                    <option value="31.180038,-96.487663">Oak Grove</option>
                    <option value="32.211919,-94.737453">Oak Hill</option>
                    <option value="32.776051,-96.720985">Parkdale</option>
                    <option value="31.581926,-102.962934">Permian Basin</option>
                    <option value="33.401294,-95.151278">River Crest</option>
                    <option value="30.565922,-97.059038">Sandow</option>
                    <option value="30.552206,-97.074483">Sandow</option>
                    <option value="32.285534,-97.750809°">Squaw Creek</option>
                    <option value="32.333531,-97.776279°">Squaw Creek</option>
                    <option value="31.936882,-94.989473">Stryker Creek</option>
                    <option value="32.493312,-100.365944">Sweetwater</option>
                    <option value="32.317514,-94.461617">Tatum</option>
                    <option value="33.097019,-95.549294">Thermo</option>
                    <option value="30.370397,-97.261497">Three Oaks</option>
                    <option value="31.575921,-96.962861">Tradinghouse</option>
                    <option value="32.129185,-96.092027">Trinidad</option>
                    <option value="33.624683,-96.368908">Valley </option>
                    <option value="33.189047,-95.088744">Winfield North</option>
                    <option value="33.129947,-95.093111">Winfield South</option>
                    </select>
                </div>        
                <div class="pure-control-group">
                    <label for="destination">Destination</label>
                    <select id="destination" type="select" name="destination">
                    <option value="">Choose a Location</option>
                    <option value="32.228447,-94.501906">Beckville</option>
                    <option value="31.822903,-96.060271">Big Brown</option>
                    <option value="31.821378,-96.067183">Big Brown / Turlington</option>
                    <option value="31.170008,-96.569783">Bremond</option>
                    <option value="32.872757,-96.947442">COF</option>
                    <option value="32.299793,-97.804630">Comanche Peak</option>
                    <option value="32.404148,-97.703161">DeCordova</option>
                    <option value="32.905496,-97.478685">Eagle Mountain</option>
                    <option value="32.782966,-96.799366">Energy Plaza</option>
                    <option value="32.744376,-96.964688">ERC</option>
                    <option value="33.134811,-98.612509">Graham </option>
                    <option value="31.281481,-96.493819">Kosse</option>
                    <option value="31.466914,-96.986748">Lake Creek</option>
                    <option value="32.833984,-96.544249">Lake Hubbard</option>
                    <option value="32.990556,-95.055833">Leesburg</option>
                    <option value="32.253718,-94.615701">Liberty</option>
                    <option value="32.332000,-95.338000">Luminant Academy</option>
                    <option value="32.261842,-94.574476">Martin Lake</option>
                    <option value="33.094625,-95.040955">Monticello</option>
                    <option value="33.096747,-95.082522">Monticello Admin</option>
                    <option value="32.336451,-100.914381">Morgan Creek</option>
                    <option value="32.951703,-96.974044">North Lake</option>
                    <option value="32.730800,-97.218870">North Main</option>
                    <option value="31.180038,-96.487663">Oak Grove</option>
                    <option value="32.211919,-94.737453">Oak Hill</option>
                    <option value="32.776051,-96.720985">Parkdale</option>
                    <option value="31.581926,-102.962934">Permian Basin</option>
                    <option value="33.401294,-95.151278">River Crest</option>
                    <option value="30.565922,-97.059038">Sandow</option>
                    <option value="30.552206,-97.074483">Sandow</option>
                    <option value="32.285534,-97.750809°">Squaw Creek</option>
                    <option value="32.333531,-97.776279°">Squaw Creek</option>
                    <option value="31.936882,-94.989473">Stryker Creek</option>
                    <option value="32.493312,-100.365944">Sweetwater</option>
                    <option value="32.317514,-94.461617">Tatum</option>
                    <option value="33.097019,-95.549294">Thermo</option>
                    <option value="30.370397,-97.261497">Three Oaks</option>
                    <option value="31.575921,-96.962861">Tradinghouse</option>
                    <option value="32.129185,-96.092027">Trinidad</option>
                    <option value="33.624683,-96.368908">Valley </option>
                    <option value="33.189047,-95.088744">Winfield North</option>
                    <option value="33.129947,-95.093111">Winfield South</option>
                    </select>
                </div>
                
                <div class="pure-controls">
                    
                    <button type="submit" class="mybutton pure-button pure-button-primary">Get Directions</button>
                    <br />
                </div>
            </fieldset>
            </form>
            <form class="pure-form pure-form-stacked" action="index.php" method="POST">
            <input type="text" hidden="true" name="url" value="https://www.google.com/maps/d/embed?mid=ze5y7T3af1No.kV8pJT56GCjk&z=7&ll=35.064191,-103.748679">
            <button type="submit" class="mybutton pure-button pure-button-primary" href="#">Browse All Sites</a>
            </form>
        </div>
        <p class="instructions">These are the instructions. Just in case you can't figure out how to get turn-by-turn directions.</p>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
            
<!--    Begin Logic for determining what to show on the map. Basically, if they hit the "Browse all Sites" button use the url passed from that button, if that's not true, check if the origin is set and if so, display that map, finally if they didn't push the browse all sites button or the get directions button it must be the initial page load, so load up the all sites map.-->
    <?php

    if(isset($_POST['url'])) {
        $URL = $_POST['url'];
    }
    elseif(isset($_POST['origin'])) {
        $Origin = $_POST['origin'];
        $Destination = $_POST['destination'];
        
        $URL = "https://www.google.com/maps/embed/v1/directions?origin=" . $Origin . "&destination=" . $Destination .   "&center=32.782966,-96.799366&zoom=8&key=AIzaSyBtNmVRN8gkOW_ozcMV9B5BX-6NWtWkn3M";
    }
    else {
        $URL = "https://www.google.com/maps/d/embed?mid=ze5y7T3af1No.kV8pJT56GCjk&z=7&ll=35.064191,-103.748679";
    }


//These lines are here for troubleshooting, leave them commented unless you're troubleshooting.
//echo "Origin = " . $Origin . "<br />";
//echo "Destincation = " . $Destination . "<br />";
//echo "URL = " . $URL . "<br />";
//echo "<a href=\"" . $URL . "\" Target=\"_BLANK\">Click Here</a>";
    

//This is what actually shows the map
echo "<iframe id=\"ifm\" style=\"width:100%;\"
src=\"" . $URL . "\"></iframe>";

?>
        </div>
    </div>
</div>

<!--This is a Javascript that resizes the map when the page loads.-->
<script>
var buffer = 20; //scroll bar buffer
var iframe = document.getElementById('ifm');

function pageY(elem) {
    return elem.offsetParent ? (elem.offsetTop + pageY(elem.offsetParent)) : elem.offsetTop;
}

function resizeIframe() {
    var height = document.documentElement.clientHeight;
    height -= pageY(document.getElementById('ifm'))+ buffer ;
    height = (height < 0) ? 0 : height;
    document.getElementById('ifm').style.height = height + 'px';
}

// .onload doesn't work with IE8 and older.
if (iframe.attachEvent) {
    iframe.attachEvent("onload", resizeIframe);
} else {
    iframe.onload=resizeIframe;
}


//window.onresize = resizeIframe;
window.onload = resizeIframe;

</script>

</body>
</html>
