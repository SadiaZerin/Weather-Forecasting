<?php
 
  if(array_key_exists('Submit',$_GET)){
      if(!$_GET['city']){
        $x[]="Input is empty!";
      }
      if($_GET['city']){
        $url=file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".$_GET['city']."&appid=dfdaad726881854425f8e2cf04887290");

        $array= json_decode($url,true);
    
        $temp[]=$array['main']['temp']-273;
        $condition[]=$array['weather']['0']['description'];
        
        $date[]=date("F j, y, g:i a");
      }
  }





?>

<?php
     if(array_key_exists('Submit',$_GET)){
      if(!$_GET['city']){
        $x[]="Input is empty!";
      }
      if($_GET['city']){
        $url2=file_get_contents("https://api.openweathermap.org/data/2.5/forecast?q=".$_GET['city']."&appid=ddbcfd934f9a143940d3611043357c8f");
      
        $array2= json_decode($url2,true);
      
       
        $temp2[]=$array2['list']['8']['main']['temp']-273;
        $temp3[]=$array2['list']['16']['main']['temp']-273;
        $temp4[]=$array2['list']['24']['main']['temp']-273;
        $temp5[]=$array2['list']['32']['main']['temp']-273;

        $condition[]=$array2['list']['8']['weather']['0']['description'];
        $date2[]=$array2['list']['8']['dt_txt'];
        $date3[]=$array2['list']['16']['dt_txt'];
        $date4[]=$array2['list']['24']['dt_txt'];
        $date5[]=$array2['list']['32']['dt_txt'];
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="weather.css">
    
    <title>Document</title>
</head>
<body>


 <div class="outercontainer">

    <div class="container">
        <div class="container1">
        <img src="weather.jpg" alt="">
       </div>
       
       <div class="container2">
         <h2>FORECAST</h2>


         <div class="innercontainer">
         <h1>The Only Weather Forecast You Need</h1>
         
         <form action="" method="GET">
           
           <input  type="text" name="city" placeholder="Enter City Name"><br>
           <input type="submit" value="submit" class="btn btn-success" name="Submit">
         </form>
         <h3><?php  
         if(isset($x)){
            foreach($x as $x){
              echo $x;
            }
        } 
        ?></h3>
         </div>
        
       </div>
     
    </div>
        
    
   

    <div class="container3">

    <h1>Five Days Weather</h1>
<div class="inner">
      <div class="innercontainer3">
        <h2>Temperature:</h2>
       <h1> <?php
       if(isset($temp)){
        foreach($temp as $temp){
          echo$temp."&deg c";
        }
        } 
           ?></h1>
           <h2><?php
        if(isset( $condition)){
          foreach( $condition as  $condition){
            echo "<br>".$condition;
          }
          } 
          
        ?>
      </h2>
      <h3> 
      <?php
           if(isset( $date)){
            foreach( $date as  $date){
              echo "<br>".$date;
            }
            } 
          
        ?>
      </h3>

      </div>










 <div class="fivedays">
         <div class="fivedaystemp">
         <h2>Temperature:</h2><br>
          <?php
           if(isset($temp2)){
            foreach($temp2 as $temp2){
              echo $temp2."&deg c";
            }
        } ?>
        
         <br>
         <?php
            if(isset( $date2)){
              foreach( $date2 as  $date2){
                echo "<br>".$date2;
              }
              } 
          
        ?>
        

      </div>
         <div class="fivedaystemp"> <h2>Temperature:</h2><?php
           if(isset($temp3)){
            foreach($temp3 as $temp3){
              echo $temp3."&deg c";
            }
        } ?>
        <br>
         <?php
            if(isset( $date3)){
              foreach( $date3 as  $date3){
                echo "<br>".$date3;
              }
              } 
          
        ?></div>
         <div class="fivedaystemp"> <h2>Temperature:</h2><?php
           if(isset($temp4)){
            foreach($temp4 as $temp4){
              echo $temp4."&deg c";
            }
        } ?>
        <br>
         <?php
            if(isset( $date4)){
              foreach( $date4 as  $date4){
                echo "<br>".$date4;
              }
              } 
          
        ?></div>
         <div class="fivedaystemp"><h2>Temperature:</h2> <?php
           if(isset($temp5)){
            foreach($temp5 as $temp5){
              echo $temp5."&deg c";
            }
        } ?>
        <br>
         <?php
            if(isset( $date5)){
              foreach( $date5 as  $date5){
                echo "<br>".$date5;
              }
              } 
          
        ?></div>
         
     </div>
</div>

      
      

    </div>
    

    

</div>



</body>
</html>