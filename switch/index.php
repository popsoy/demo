<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Switch</title>
  </head>
  <body>
    <?php
      $a = 2;
      
      switch ($a) {
        case 0:
          echo "a equals 0<br />";
          break;
        case 1:
          echo "a equals 1<br />";
          break;
        case 2:
          echo "a equals 2<br />";
          break;
        case 3:
          echo "a equals 3<br />";
          break;
        default:
          echo "a is not 0, 1, 2, or 3<br />";
          break;
      }
    
    ?>
    
    <?php
    // Chinesemonth
    // whitespace doesn't matter
    // colons, semicolons and breaks do
    $year = date('Y');
    switch (($year - 3) % 12) {
      case  1: $month = 'January';   
          break;
      case  2: $month = 'February'; 
        break;
      case  3: $month = 'March';
         break;
      case  4: $month = 'April';
         break;
      case  5: $month = 'May'; 
        break;
      case  6: $month = 'June';  
       break;
      case  7: $month = 'July';   
        break;
      case  8: $month = 'August'; 
       break;
      case  9: $month = 'September';
       break;
      case 10: $month = 'October';    
       break;
      case 11: $month = 'November';  
         break;
      case 12: $month = 'December';
        break;
      default: $month = '';
        break;
    }
    if(!empty($month)){

      echo "{$month} {$year} is my lucy year .<br />";

    }
    
   

          
    ?>
    
    <?php // case with multiple values

      $user_type = 'customer';
      
      switch ($user_type) {
        case 'student':
          echo "Welcome!";
          break;
        case 'press':
        case 'customer':
        case 'admin':
          echo "Hello!";
          break;
      }
    ?>
    
  </body>
</html>
