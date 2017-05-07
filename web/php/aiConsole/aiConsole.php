<?php
/*
*how it work:
*the console messages are read from a csv file which represents the ai consolelog;
*then through ajax the message gets displayed in the aiConsole
*/
buildMessage();
function buildMessage(){
  $data = getMessage();
  echo"
  <div id='".$data[0]['id']."'>
    <h2>".$data[0]['message']."</h2>
  </div>
  ";
}
function getMessage(){
  $message = [];
  $data = csv2array('../../csv/consolelog.csv', ',');
  if(count($data) >= 1){
    array_push($message, $data[0]);
  }
  return $message;
}
function csv2array($filename, $delimiter )
{
    // read the CSV lines into a numerically indexed array
    $all_lines = @file( $filename );
    if( !$all_lines ) {
        return FALSE;
    }
    $csv = array_map( function( &$line ) use ( $delimiter ) {
        return str_getcsv( $line, $delimiter );
    }, $all_lines );

    // use the first row's values as keys for all other rows
    array_walk( $csv, function( &$a ) use ( $csv ) {
        $a = array_combine( $csv[0], $a );
    });
    array_shift( $csv ); // remove column header row

    return $csv;
}
?>
