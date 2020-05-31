<?php
function sum($max){
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum(100);
?>


<?php
function print_number() {
    for($i = 0; $i < 100; $i++){
        echo $i;
    }
}
?>

<?php
$string = "ABCDEF";
echo strlen($string);
//=> 6 と表示される
?>

<?php
$string = "I love Ruby!";
$new_string = str_replace("Ruby", "PHP", $string);
echo $new_string;
?>
<?php
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo count($array);
?>
<?php
$array = array(2,5,9,7,3,1,8,6,4);

asort($array);
print_r($array);

arsort($array);
print_r($array);

?>

<?php
function myFunc($arg){
    return $arg*2;
}
echo myFunc(5);
?>

<?php
function f($a, $b){
    return $a + $b;
}
echo f(5, 7);
?>

<?php
$arr = array(1, 3, 5, 7, 9);
echo $arr[0]*$arr[1]*$arr[2]*$arr[3]*$arr[4];
?>
<?php
echo array_product($arr) . "\n";
?>

<?php
function max_array($arr){
    $max_array = $arr[0];
    foreach($arr as $a){
        if($max_array < $a){
            $max_array = $a;
        }
    }
    return $max_array;
}
echo max_array($arr);
?>


