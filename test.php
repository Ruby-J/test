<!DOCTYPE html>
<html>
<body>

<?php
  //output
  $color = 'red';
  $x = 5;
  $y = 10;
  
  echo "hello world.<br>";
  echo "this is the second line.<br>";
  echo "my fav color is " . $color . "! do you like $color?<br>";
  #echo "math = " . $x + $y . "";
  
  function myTest() {
    global $x, $y;
    echo $x + $y;
  }
  
  myTest();
  
  #comment
?>

</body>
</html>
