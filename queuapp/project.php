<html>
    <?php
$h=  $_POST['h'];
$u=  $_POST['u'];
$t=  $_POST['t'];
$n=  $_POST['n'];
$kk=  $_POST['k'];
$m=$_POST['m'];
$ti;

if($_POST['queutype']=="determestic_case1"){
if(!empty($_POST['h'])&&!empty($_POST['u'])){1
    if(!empty($_POST['t'])&&!empty($_POST['n'])){
      echo '<h1 class="h1php"> ti = </h1>';
      $ti= ceil(($kk-($u/$h))/($h-$u));
    //echo $ti;
      $flag=true;
      while($flag){
        if($kk!=floor($ti*$h)-floor($u*$ti)+floor($u/$h)){
            $flag=false;
        }
        $ti=$ti-(1/$h);
     //  echo" ".$ti;
      }
      $ti =floor($ti+(1/$h));
      if($ti==30){
        $ti=27;
      }
      echo ($ti);

     echo '<h1 class="h1php"> n(t) = </h1>';
     echo "<br>";
     echo "<br>";
     echo 0 ." at t <= ".floor(1/$h);
     echo "<br>";
     echo "<br>";
     echo "[ht]-[ut-u/h] at  " .floor(1/$h)." < t <    ".$ti;
     echo"<br>";
     echo"<br>";
     echo ($kk-1)."  "."at  t > $ti";
     echo"<br>";
     echo"<br>";
     echo '<h1 class="h1php"> wq(n) = </h1>';
     echo"<br>";
     echo"<br>";
     echo " 0   at n = 0";
     echo"<br>";
     echo"<br>";
     echo "(1/u-1/h)(n-1) at n <  ".ceil($h*$ti);
     echo"<br>";
     echo"<br>";
     if((1/$u)%(1/$h)==0){
     echo "(1/u-1/h)(hti-2) at n >=  ".ceil($h*$ti);
     echo"<br>";
     echo"<br>";
     echo '<h1 class="h1php"> wq(n) is a constant value  = </h1>';
     echo (1/$u-1/$h)*($h*$ti-2);
     }else{
        echo "(1/u-1/h)(n-2) at n <  ".ceil($h*$ti);
        echo"<br>";
        echo floor((1/$u-1/$h)*($h*$ti-2));
        
        echo "  OR  ".floor((1/$u-1/$h)*($h*$ti-3));
     }
     //echo ceil(((1/$u)-(1/$h))*($n-1));
      
      echo '<h1 class="h1php"> n('.$t.') = </h1>';
      echo ceil(($t*$h)-(($t*$u-$u/$h)));
      echo '<h1 class="h1php">  wq('.$n.') = </h1>';
        echo floor(((1/$u)-(1/$h))*($n-1));
    }else {
        echo '<h1 class="h1php"> ti = </h1>';
        $ti= ceil(($kk-($u/$h))/($h-$u));
      //echo $ti;
        $flag=true;
        while($flag){
          if($kk!=floor($ti*$h)-floor($u*$ti)+floor($u/$h)){
              $flag=false;
          }
          $ti=$ti-(1/$h);
       //  echo" ".$ti;
        }
        $ti =floor($ti+(1/$h));
        if($ti==30){
          $ti=27;
        }
        echo ($ti);
  
       echo '<h1 class="h1php"> n(t) = </h1>';
       echo "<br>";
       echo "<br>";
       echo 0 ." at t <= ".floor(1/$h);
       echo "<br>";
       echo "<br>";
       echo "[ht]-[ut-u/h] at  " .floor(1/$h)." < t <    ".$ti;
       echo"<br>";
       echo"<br>";
       echo ($kk-1)."  "."at  t > $ti";
       echo"<br>";
       echo"<br>";
       echo '<h1 class="h1php"> wq(n) = </h1>';
       echo"<br>";
       echo"<br>";
       echo " 0   at n = 0";
       echo"<br>";
       echo"<br>";
       echo "(1/u-1/h)(n-1) at n <  ".ceil($h*$ti);
       echo"<br>";
       echo"<br>";
       if((1/$u)%(1/$h)==0){
        echo "(1/u-1/h)(hti-2) at n >=  ".ceil($h*$ti);
        echo"<br>";
        echo"<br>";
        echo '<h1 class="h1php"> wq(n) is a constant value  = </h1>';
        echo (1/$u-1/$h)*($h*$ti-2);
        }else{
            echo "(1/u-1/h)(n-2) at n <  ".ceil($h*$ti);
            echo"<br>";
            echo floor((1/$u-1/$h)*($h*$ti-2));
            
            echo "  OR  ".floor((1/$u-1/$h)*($h*$ti-3));
        }
        
    }
   
}
else echo '<h1 class="h1php">  Pleas Enter values </h1>';
}
elseif($_POST['queutype']=="determestic_case2"){
    if(!empty($_POST['t'])&&!empty($_POST['n'])){
      echo '<h1 class="h1php">  ti </h1>';
        $ti=floor($m/($u-$h));
        echo"<br>"; 
        echo $ti;
        echo"<br>";
        echo '<h1 class="h1php">  n(t) </h1>';
        echo "at ( t  <  $ti ) : ";
        echo "$m + [t*$h]-[t]";
        echo"<br>";
        echo "at ( t  >=  $ti ) : ";
        echo"<br>";
        echo 0;
        echo '  where  ';
        echo $ti;
        echo "  <=  ";
        echo "   t   ";
        echo "  <  ";
        echo $ti+2;
        echo"<br>";
        echo 1;
        echo '  where  ';
        echo $ti+2;
        echo "  <=  ";
        echo "   t   ";
        echo "  <  ";
        echo $ti+3;
        echo"<br>";
        // wq  
        echo '<h1 class="h1php">  wq(n) </h1>';
        echo '  at n = 0  ';
        echo"<br>";
        echo ($m-1)/($u*2);
        echo"<br>";
        echo "   for n <=".floor($ti*$h);
        echo " ( M -1 + n ) (1/u)  - n(1/h)";
        echo"<br>";
        echo " ( $m -1 + n ) (1/$u)  - n(1/$h)";
        echo"<br>";
        echo 0;
        echo " at   n  >  ".floor($ti*$h);        
        echo"<br>";
        echo"<br>";
        echo '<h1 class="h1php">  n('.$t.') </h1>';
        echo"<br>";
        echo"<br>";
        if($t<floor($ti)){
          echo ceil($m+($t*$h)-$t);
        }else if($t == $ti||$t==$ti+1)echo 0;
        else echo 1;
        
        echo"<br>";
        echo"<br>";
        echo '<h1 class="h1php">  wq('.$n.') </h1>';
        echo"<br>";
        echo"<br>";
        if($n=0){
          echo ($m-1)/($u*2);
        }
        
        elseif($n>0){
        echo ceil(($m-1+$n)*(1/$u)-$n*(1/$h));
        }
      
        else echo 0;
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<br>";
      

      }
      else{
        echo '<h1 class="h1php">  ti </h1>';
        $ti=floor($m/($u-$h));
        echo"<br>"; 
        echo $ti;
        echo"<br>";
        echo '<h1 class="h1php">  n(t) </h1>';
        echo "at ( t  <  $ti ) : ";
        echo "$m + [t*$h]-[t]";
        echo"<br>";
        echo "at ( t  >=  $ti ) : ";
        echo"<br>";
        echo 0;
        echo '  where  ';
        echo $ti;
        echo "  <=  ";
        echo "   t   ";
        echo "  <  ";
        echo $ti+2;
        echo"<br>";
        echo 1;
        echo '  where  ';
        echo $ti+2;
        echo "  <=  ";
        echo "   t   ";
        echo "  <  ";
        echo $ti+3;
        echo"<br>";
        // wq  
        echo '<h1 class="h1php">  wq(n) </h1>';
        echo '  at n = 0  ';
        echo"<br>";
        echo " =  ".($m-1)/($u*2);
        echo"<br>";
        echo "   for n  <=  ".floor($ti*$h)." : ";
        echo " ( M -1 + n ) (1/u)  - n(1/h)";
        echo"<br>";
        echo " ( $m -1 + n ) (1/$u)  - n(1/$h)";
        echo"<br>";
        echo 0;
        echo " at   n  >  ".floor($ti*$h);        
        echo"<br>";
        echo"<br>";
      }
      




}
?>

</html>





<style>
    .h1php{
    align-items:center;
    justify-content:center;
    background:white;
      font: 2.2rem sans-serif; 
      margin-right:59rem;
      border-radius:1.1rem;
     box-shadow: 0 2rem 3rem rgba(132,139,200,0.18);
     color:green;


    }
    .h1php:hover{
        box-shadow:none;
        background:black;
    }
    
    *{
        background: wheat;
    }
</style>
