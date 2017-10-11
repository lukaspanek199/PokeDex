<?php
  class Pokemon{
    $servername="http://mysql.spse-net.cz";
    $username="paneklu";
    $password="tygr348";
    $dbname = "paneklu";

    $conn = new mysqli($servername, $username, $password);

    function __construct($argument){
      
    }
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function NewPokemon(){
  $sql = "INSERT INTO pokemoni (nazev, popis, obrazek)
VALUES ($nazev, $popis,$obrazek)";

if ($conn->query($sql) === TRUE) {
    echo "Nový pokémon přidán";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
  }
?>
