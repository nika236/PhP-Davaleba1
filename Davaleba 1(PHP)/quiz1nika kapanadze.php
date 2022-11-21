<?php
$Num = readline();
$Int = intval($Num);
$Num2 = readline();
$Int2 = intval($Num2);
$sum = 0;

if($Int  === 0 || $Int2  === 0 ){

}else if($Int > 100 || $Int2 > 100 ){
    do{
        echo "higher than 100 Try Again \n";
        $Num = readline();
        $Num2 = readline();
        if($Num == 0 || $Num2 == 0){
            
            break;}
        else{
            $Int = intval($Num);
            $Int2 = intval($Num2);
        }
        if($Int2 < 100 && $Int < 100){

            $sum = $Int * $Int2;

            echo $sum ;

        }

    }while($Int >= 100 || $Int2 >= 100);
}else{

  echo  $sum = $Int2 * $Int;
}

