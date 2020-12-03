<?php
   class vehicle {
      function __call($name,$arg){
         if($name == 'name')
            if( count($arg) == 2) {
               echo "it is a two weeler <br> " ;
            }
            else if( count($arg) == 4 ){
              echo "it is a four wheeler <br>" ;
            }
            
      }
   }
   $bike = new vehicle;
   $bike->name(1,1);
   $car = new vehicle;
   $car->name(1,1,1,1);
?>