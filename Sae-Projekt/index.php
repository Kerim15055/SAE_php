<?php
    require './classes/pc.php';
    require './DBConnector.php';
    require './DBAdapterPCs.php';


    $dbAdapter = new DBAdapterPCs();

    $index = 0;
    $anzahl = $dbAdapter->getAnzahlPC();

    $pc = $dbAdapter->get_PC_by_index($index);
    //$pc = new pc();
    //$pc->setHdd(1000);
    //$pc->setId(1);
    //$pc->setRam(16);
    //$pc->setTakt(4.6);

    $ds_anzeiger=($index+1)." / ".$anzahl;

    require './gui_PCVerwaltung.php';
?>