function myFunc() {
  //Some code here...
  return $someVariable;
}

// Calling the function
$result = myFunc();

//Further use of the result
if ((bool)$result === true) { //Solution: Explicit type casting
    //Some code to be executed when the result is true
}
