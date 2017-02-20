    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
<div class="box" style="width: 500px; height: 120px; box-shadow: 0px 5px 10px #d7d7d7; margin: 250px auto 0; text-align: center; font-size: 32px; padding-top: 80px; background-color:#fff;">
<?php
  $bath=$_POST['bath'];   
  $type=$_POST['type'];

  $yen = 3.587;
  $dall = 0.03;
  $euro = 0.02;

  if ($bath == "") {
    echo "กรุณากรอกจำนวนเงิน (บาท)";
  }else{
    if (is_numeric($bath)) {
  switch ($type) {
    case 1:
    $sum=$bath*$yen;
    echo $bath." Bath = ".($sum)." Yen";
    break;

    case 2: 
    $sum=$bath*$dall;
    echo $bath." Bath = ".($sum)." Dollar";
    break;

    case 3: 
    $sum=$bath*$euro;
    echo $bath." Bath = ".($sum)." Euro";
    break;

    default:
    echo "Try again";
  }
  
}else{
  echo "กรุณากรอกเป็นตัวเลข";
}
}
?>
<br>
<br>
<a href="index.html"><input type="submit" value="Back" style="width:50px; height:20px; clear:both; border-style:none; background-color:#fff; cursor:pointer; color:#adadad; ">
</a>

</div>
