

 <?php
//  Variables
$name="Noof";
echo $name;
// Arrays

$name= array("Noof","Mashel");
print_r ($name);
$names=["Noof","Mashel"];
print_r ($names);

define("AGE","33");
echo AGE;
function fun1(){
    echo "Hello Noof";
}
fun1();

// Pulse Check
// function_exists
function_exists(1)
if (function_exists('fun1')) {
    echo "true";
} else {
    echo "false";
}
/////////////////////////////////////////////////
// runkit7_function_remove(2)

if (runkit7_function_remove('fun2')) {
    echo "deleted functiom successfully";
} else {
    echo "deleted functiom unsuccessfully";
}
////////////////////////////
// runkit7_function_rename(3)
function fun2(){
    echo "How are you";
}
fun2()

if (runkit7_function_rename("fun2","greating")) {
    echo "changed name functiom";
}
else{
    echo "name the same";
}
$names=["Noof","Mashel"];
$names=[1,2];
print_r ($names);
?>