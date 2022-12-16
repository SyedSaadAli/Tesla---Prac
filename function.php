<?php 
// First type of function
function Add1(){ 
    echo 'Working';

}
// Second type of function
function Add2($x){
    echo $x;

}
// Third type of function
function Add3($x){
    echo 'Working';
    return $x+8;

}
// Fourth type of function
function Add4(){
    return 'Working';

}



// Add1();
// Add2(7);
// $y = Add3(8);
// echo $y;
$z =Add4();
echo  $z;

?>
