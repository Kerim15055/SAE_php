<?php 

class pc {

private $id=0;
private $Hdd = 0;
private $Takt = 0;
private $Ram= 0;
private $AusgabeString = "";
private $Leistungsindex = "";

public function setId($id) {
    $this->id=$id;
}

public function getId() {
    return $this->id;
}

public function setHdd($Hdd) {
    $this->Hdd=$Hdd;
}

public function getHdd() {
    return $this->Hdd;
}

public function setTakt($Takt) {
    $this->Takt=$Takt;
}

public function getTakt() {
    return $this->Takt;
}

public function setRam($Ram) {
    $this->Ram=$Ram;
}

public function getRam() {
    return $this->Ram;
}

public function getAusgabeString() {
    return $this->AusgabeString = $Ram + $Takt;
}

public function getLeistungsindex() {
    $Leistungsindex = $Hdd * $Ram * $Takt;
    return $this->Leistungsindex;
}
}
?>