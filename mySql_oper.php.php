<?php 
    $serverName = "localhost" ;
    $userName = "username" ;
    $dbname = "shivamdb" ;
    $password = "" ;
    
    $conn = new mysqli( $serverName , $userName , $password , $dbname  ) ;
    
    if( $conn->connect_error ){
        die("connection failed: " . $conn->connect_error) ;

    }
    $sql = "INSERT INTO student(sid , sname , section  , college )" ; 
    VALUES(1 , "Anupam" , "B" , "KIET") ; 
    if( $conn-> query($sql)== True ){
        echo "record inserted sucessfully " ;
    }
    else{
        echo " Error" . $sql . "<br>" .$conn->error ;

    }
    $conn ->close() ;
?> 