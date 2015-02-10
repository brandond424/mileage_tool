<!DOCTYPE html>
<html>
  <head>
    <title>Personal Mileage Tool</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div id="content-pane">
      <div id="inputs">
      
        <ul>
          <li>
            <label>Origin: </label><input type="text" id="origin" class="mileage_input">
          </li>
          <li>
            <label>Destination: </label><input type="text" id="destination" class="mileage_input">
          </li>
        </ul>
        <button type="button" onclick="calculateDistances();" class="mileage_button">Calculate distances</button>
      
      </div>
    </div>
    <div id="map-canvas"></div>

    <div id="outputDiv"></div>



    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="scripts.js"></script>
  </body>
</html>