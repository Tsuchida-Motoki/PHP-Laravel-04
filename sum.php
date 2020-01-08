<?php
//"課題1"
function la($nw) {
    
        
         return $nw * 2 ;
}
echo la();

//"課題2"
function ab($a, $b){
    
    return $a + $b;
    
}
echo ab();
//"課題3"
 function php3(){
     
 	$arr =array( 1, 3, 5, 7, 9) ;
    // 	$sa = $arr[0] * $arr[1] * $arr[2] * $arr[3] * $arr[4];
    $sa = 1;
    for ($i = 0;$i < count($arr);$i++){
        $sa = $sa * $arr[$i];
    }
    return $sa;
}
echo php3();
	
//"課題4"
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($a > $max_number){
        //  echo $max_number;
        $max_number = $a;
       } 
       }
       
 return $max_number;
 }
 $arr = array(1,3,7,5);
 max_array($arr);
 
 //課題5
 $aa = "<h1>あいう</h1>"
 . "<p>えお</p>";
 echo strip_tags($aa)."";
 
 $block = ['a', 'b', 'c'];
 array_push($block, 'd', 'e');
 print_r($block);
 
 $ss1 = [11, 22, 33];
$ss2 = [44, 55, 66];
$ss3 = [77, 88, 99];
$ss = array_merge($ss1, $ss2, $ss3);
print_r($ss);

echo '1月タイプスタンプ：'.time();
$stamp = mktime(1, 43, 50, 2, 3, 2020);
echo $stamp;

echo date('y/m/d');

?>

