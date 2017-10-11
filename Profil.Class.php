<?php
  /**
   *
   */
  class Profil
  {
    $servername=" mysql.spse-net.cz";
    $username="paneklu";
    $pass="tygr348";
    $registername="";
    $regpass="";
    $dbname="paneklu";


    function __construct($registername, $regpass)
    {
      $this->registername = $registername;
      $this->regpass = $regpass;
    }

    public function Register(){


      $conn =new mysqli($servername,$username,$pass,$dbname);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";

      $hashed=hash("ripemd5",$this->regpass);
      $sql="INSERT INTO profily (registername,pass) VALUES ($this->registername,$hashed)";

      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
    }
  }



 ?>
