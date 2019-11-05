<h1>Huis heeft:</h1>
<?php require_once('Klass.php') ?>
<?php
class Huis {
  // Properties
  public $kamers ;
  public $toiletten;
  public $Verwarming;
  public $Soortverwarmin;
  public $Straatnaam ;
  public $Huisnummer ;
  public $Plaats;
  public $Vierkantmetergrond;
  public $Wozwaarde;
    function __construct($kamers, $toiletten,$Verwarming,$Soortverwarmin,$Straatnaam,$Huisnummer,$Plaats,$Vierkantmetergrond,$Wozwaarde) {
      $this->kamers = $kamers;
      $this->toiletten = $toiletten;
      $this->Verwarming = $Verwarming;
      $this->Soortverwarmin = $Soortverwarmin;
      $this->Straatnaam = $Straatnaam;
      $this->Huisnummer = $Huisnummer;
      $this->Plaats = $Plaats;
      $this->Vierkantmetergrond = $Vierkantmetergrond;
      $this->Wozwaarde = $Wozwaarde;
    }
    function set_kamers() {
      return $this->kamers;
    }
    function get_toiletten() {
      return $this->toiletten;
    }

    function set_Verwarming() {
      return $this->Verwarming;
    }
    function get_Soortverwarmin() {
      return $this->Soortverwarmin;
    }
    function set_Straatnaam() {
      return $this->Straatnaam;
    }
    function get_Huisnummer() {
      return $this->Huisnummer;
    }
    function set_Plaats() {
      return $this->Plaats;
    }
    function get_Vierkantmetergrond() {
      return $this->Vierkantmetergrond;
    }
    function set_Wozwaarde() {
      return $this->Wozwaarde;
    }


  }
?>
<h2>Overheid heeft bepaald dat er een extra belasting komt op huizen.</h2>
<?php

  class belasting {
    public $name;
    public $color;

    function __construct($name) {
      $this->name = $name;
    }
    function __destruct() {
      echo " {$this->name}";
    }
  }


?>
