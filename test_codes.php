<?php 

$word =strtoupper("accord");
echo substr($word,2,3) . "<br>";
echo "<br>";

?>


<!--sorting array-->

<?php 

$bikes = array("ducati","bmw","aprillia");
sort($bikes);
print_r($bikes);
echo "<br>";


?>

<!--checking duplicates and then removing them-->
<?php 

$numArray =array(2,3,4,5,6,5,7,8,8,9,9,2);
$newNumArray=array();

echo "<br>";
echo "Array before checking duplicates";
echo "<br>";

print_r($numArray) ;
echo "<br>";

foreach ($numArray as $key=> $value){
  $newNumArray[$value]=$value;
}

echo "after checking for duplicates and removing them";
echo "<br>";

print_r($newNumArray);


?>