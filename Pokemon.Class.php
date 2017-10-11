<?php
  class Pokemon{
    private $servername="mysql.spse-net.cz";
    private $username="paneklu";
    private $password="tygr348";
    private $dbname = "paneklu";

    $conn = new mysqli($servername, $username, $password);

    function __construct($argument){

    }
if ($conn->connect_error) {
    die("Připojení selhalo: " . $conn->connect_error);
}
function NewPokemon(){
  $sql = "INSERT INTO pokemoni (nazev, popis, obrazek)
VALUES ('$this->$nazev', '$this->$popis','$this->$obrazek')";

if ($conn->query($sql) === TRUE) {
    echo "Nový pokémon přidán";
} else {
    echo "Chyba: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
  }
?>
