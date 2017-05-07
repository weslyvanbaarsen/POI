<?php
//required files
require_once'aiConsole/aiConsole.php';
// this is the main builder file, this is where the final content gets created and outputed in the 4 main build fann_get_cascade_activation_functions
function aiConsole(){
//ajax script
echo"
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
";
}
function aiVisual(){}
function aiOutput(){}
function aiData(){}
?>
