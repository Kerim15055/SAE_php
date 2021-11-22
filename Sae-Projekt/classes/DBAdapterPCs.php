<?php

private $connector = null;
private $dbName = "pcverwaltung";

public function __construct() {
    $this->connector = DBConnector::getConnector();
    $this->connector->select_db($this->dbName);
}

public function get_PC_by_index($index) {
    $pc = new PC();
    $anzahl_pc = $this->getAnzahlPC();

    if ($index >= 0 && index < $anzahl_pc) {
        $sql = "select id, hdd, takt, ram from tblpcs "
            . "limit " . $index . ",1";

        $result = $this->connector->query($sql);

        if ($result->num_rows == 1) {
            $row = mysqli_fetch_array($result);
            $pc->setId($row["id"]);
            $pc->setHdd($row["hdd"]);
            $pc->setTakt($row["takt"]);
            $pc->setRam($row["ram"]);
        }

        mysqli_free_result($result);
    }

    return $pc;
}