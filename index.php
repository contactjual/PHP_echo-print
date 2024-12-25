<?php

print "Hello"; // print means returning a value but echo is not that though output same
echo "Hello"; // echo does not use for retuning any value




// more -------------echo va print-----------------

echo "Hi"; // echo used for only showing
print "Hi"; // print also use for showing data. But it has a vlaue_ 1. we can store it. 

$my_print_value = print "Hi"; // output: Hi
echo "print output: " .$my_print_value; // output: 1


// echo ("Rahim","korim","korim"); // wrong: couse echo is not a funciton

echo "Rahim","korim","korim"; // but echo can take multiple parameters

// print "Rahim","korim","korim"; // wrong: print cann't take multuple arguments. only one argument can take.
// print ("Rahim","korim","korim"); // wrong: print cann't take multuple arguments


$x = 4;
echo " price: $x"; // for print This process not true
echo ' price: '.$x;  // only this true for print
print ' price: $x'; // wrong
print ' price: '.$x;






// html tag .......................................

echo "<h1> Hi I am Jual </h1>";

// echo "<h1 class= "text-color"> Hi I am color text </h1>"; // wrong code
echo '<h1 class= "text-color"> Hi I am color text </h1>'; // right code
echo "<h1 class= \"text-color\"> Hi I am color text </h1>"; // right code



#09 to #13

?>