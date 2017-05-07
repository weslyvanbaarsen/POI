<?php

require_once('php/builder.php');
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="author" content="Weslyvanbaarsen" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AI Home</title>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html, body {
      padding: 0;
      margin: 0;
    }
  </style>
</head>
<body>
  <!--Shows the ai console  -->
  <div class='w3-container w3-mobile w3-black'id='aiConsole'>
    <?php aiConsole(); ?>
  </div>
  <!--shows the ai visual presentation   -->
  <div id='aiVisual'>
    <?php aiVisual(); ?>
  </div>
  <!-- Shows the ai output -->
  <div id='aiOutput'>
    <?php aiOutput(); ?>
  </div>
  <!-- Shows the ai data usage -->
  <div id='aiData'>
    <?php aiData(); ?>
  </div>
  <script>
  var intr = setInterval(consoleUpdate(), 1000);
  function consoleUpdate(){
          if (window.XMLHttpRequest) {
              // code for IE7+, Firefox, Chrome, Opera, Safari
              xmlhttp = new XMLHttpRequest();
          } else {
              // code for IE6, IE5
              xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
          }
          xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  document.getElementById('aiConsole').innerHTML = this.responseText;
              }
          };
          xmlhttp.open('GET','php/aiConsole/aiConsole.php',true);
          xmlhttp.send();
        }
  </script>
</body>
</html>
