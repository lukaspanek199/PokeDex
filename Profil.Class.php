<?php
  class Profil
  {
    private $srvname="mysql.spse-net.com";
    private $username="panelu";
    private $pass="tygr3485";
    private $registername="";
    private $regpass="";
    private $dbname="panelu";



    function __construct($registername, $regpass)
    {
      $this->registername = $registername;
      $this->regpass = $regpass;
    }

    public function Register(){


      $conn =new mysqli($this->srvname,$this->username,$this->pass,$this->dbname);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";

      $hashed=hash("md5",$this->regpass);
      $sql="INSERT INTO profily (registername,pass) VALUES ('$this->registername','$hashed')";

      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
    }
  }



 ?>
