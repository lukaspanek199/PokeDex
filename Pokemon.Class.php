<?php
  class Pokemon{
    private $servername="mysql.spse-net.com";
    private $username="panelu";
    private $password="tygr3485";
    private $dbname = "panelu";

    function __construct($nazev, $popis, $obrazek){
      $this->nazev = $nazev;
      $this->popis = $popis;
      $this->obrazek = $obrazek;

    }

function NewPokemon(){
  $conn = new mysqli($this->servername, $this->username, $this->password,$this->dbname);

if ($conn->connect_error) {
  die("Připojení selhalo: " . $conn->connect_error);
}
  $sql = "INSERT INTO pokemoni (nazev, popis, obrazek)
VALUES ('$this->nazev', '$this->popis','$this->obrazek')";

if ($conn->query($sql) === TRUE) {
    echo "Nový pokémon přidán";
} else {
    echo "Chyba: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
  }
?>
