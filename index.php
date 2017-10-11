<?php
  require 'Profil.Class.php';
  require 'Pokemon.Class.php';

  $profil = new Profil("kamarad","Heslo123");
  //$profil->Register();

  $pokemon = new Pokemon("Pikachu", "Pikachu (Japanese: ピカチュウ Pikachu) is an Electric-type Pokémon introduced in Generation I.","https://cdn.bulbagarden.net/upload/0/0d/025Pikachu.png");
  $pokemon->NewPokemon();
?>
