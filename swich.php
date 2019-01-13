<?php
#php script for the implementation of the switch (variable)

function weekDay($day)
{
  switch ($day) {
    case 'sunday':
      echo "Today is sunday. Enjoy the Holiday";
      break;
    case 'monday':
       echo "Today is monday";
       break;
       case 'tuesday':
       echo "Today is Tuesday";
       break;

       case 'wednesday':
       echo "Today is wednesday";
       break;

       case 'thursday':
       echo "Today is Thursday";
       break;

       case 'friday':
       echo "Today is friday";
       break;

       case 'saturday':
       echo "Today is Saturday";
       break;

    default:
      echo "Wrong Input";
      break;
  }
}

//testing of the functions

weekDay("monday");

 ?>
