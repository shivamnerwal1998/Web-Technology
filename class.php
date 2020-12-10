
<?php 
  abstract class A { 
      function __construct() { 
          echo " this is parent class  "; 
      }  
      abstract function printdata(); 
  } 
  class Derived extends A { 
      function __construct() { 
          echo " Derived class constructor <br>"; 
      } 
      function printdata() { 
          echo " Derived class printdata function <br>"; 
      } 
      
  } 
  $obj = new Derived; 
  $obj->printdata();
 
  ?> 