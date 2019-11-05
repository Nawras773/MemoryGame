<h1>Huis heeft:</h1>
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

  $huis= new Huis("  2", "  1","  ja","  tra","  250","  50","  Assen","  222CM","  sas");
  echo "Aantal kamers  :".$huis->set_kamers();
  echo "<br>";
  echo "Aantal toiletten :".$huis->get_toiletten();
  echo "<br>";
  echo "Verwarming  :".$huis->set_Verwarming();
  echo "<br>";
  echo "Soortverwarmin :".$huis->get_Soortverwarmin();
  echo "<br>";
  echo "Straatnaam :".$huis->set_Straatnaam();
  echo "<br>";
  echo "Huisnummer :".$huis->get_Huisnummer();
  echo "<br>";
  echo "Plaats :".$huis->set_Plaats();
  echo "<br>";
  echo "Vierkant meter grond  :".$huis->get_Vierkantmetergrond();
  echo "<br>";
  echo "Woz waarde  :".$huis->set_Wozwaarde();



//   function set_name($kamers ) {
//     $this->kamers  = $kamers ;
//   }
//   function get_name() {
//     return $this->kamers ;
//   }
//   function set_color($toiletten) {
//     $this->toiletten = $toiletten;
//   }
//   function get_color() {
//     return $this->toiletten;
//   }
// }
//
// $k2 = new \();
// $k2->set_name('2');
// $k2->set_color('1');
// echo "Aantal kamers  : " . $k2->get_name();
// echo "<br>";
// echo "Aantal toiletten  : " .  $k2->get_color();
?>
