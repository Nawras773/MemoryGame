<?php
class mijn_public {
    public $vari = 'Nawras';
    public $vara = '04-10-1998';
    public $varx = 'Almousa';


    public function printvari() {
        echo $this->vari;
        echo "<br>";
        echo $this->varx;
        echo "<br>";
        echo $this->vara;

    }

    public function printhallo() {
        $this->printvari();

    }
}

$obj = new mijn_public;
$obj->printvari();
echo "<br>";
echo "<br>";
 ?>


<?php
// Private

class mijn2_public {
    private $vari = 'Nawras';
    private $varz = 'Almousa';
    private $vara = '04-10-1998';

    private function printvari() {
        echo $this->vari;
        echo "<br>";
        echo $this->varz;
        echo "<br>";
        echo $this->vara;

    }

    public function printhallo() {
        $this->printvari();
    }
}

$obj = new mijn2_public;
$obj->printhallo();
echo "<br>";
echo "<br>";
?>


<?php
//Protected

class mijn3_public {
    protected $vari = '';

    protected function printvari() {
        echo $this->vari;
        newline(1);
    }

    public function printhallo() {
        $this->printvari();
    }
}

class mijn_tweede {
    protected $var2 = '';

    protected function printhallo() {
        $this->printvari();
    }
}
?>
