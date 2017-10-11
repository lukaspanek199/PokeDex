<?php
  /**
   *
   */
  class Profil
  {
    $servername="http://mysql.spse-net.cz";
    $username="paneklu";
    $pass="tygr348";


    function __construct(argument)
    {

    }

    public function Register(registername, regpass)
    {
      $conn = mysql_connect($servername,$username,$pass);
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      echo "Connected successfully";
    }




  }



 ?>
