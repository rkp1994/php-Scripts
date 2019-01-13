<?php
//code for checking that a givennumber is even or ODD

function check_even_odd($num)
{
  if($num%2==0)
  {
    echo "The Number is an Even number";
  }
  else{
    echo "The Number is odd number";
  }
}

//testing of the above check_even_odd functions

check_even_odd(2341);

 ?>
