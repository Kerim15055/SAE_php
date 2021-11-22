<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/gui_PCVerwaltung.css">
  <title>.: PC Verwaltung :.</title>
</head>

<body>
  <form>
    <div id="main">
      <h1>PC-Verwaltung</h1>
      <div id="dateneingabe">
        <h4>Dateneingabe</h4>
        <table>
          <tr>
            <td><label>ID</label></td>
            <td><input type="text" name="txtid" value="<?php echo $pc->getId();?>"></td>
          </tr>
          <tr>
            <td><label>Arbeitsspeicher in GB</label></td>
            <td><input type="text" name="txtram" value="<?php echo $pc->getRam();?>"></td>
          </tr>
          <tr>
            <td><label>Prozessortakt in GHz</label></td>
            <td><input type="text" name="txthdd" value="<?php echo $pc->getTakt();?>"></td>
          </tr>
          <tr>
            <td><label>Festplattenkapazität in GB</label></td>
            <td><input type="text" name="txttakt" value="<?php echo $pc->getHdd();?>"></td>
          </tr>
          <tr class="tdbutton">
            <td><button type="submit">DS übernehmen</td>
            <td><button type="submit">DS löschen</td>
          </tr>
        </table>
      </div>

      <div id="ein_ds_anzeige">
        <h4>Datenausgabe</h4>
        <textarea id="datenausgabe" name="" readonly="readonly">
          <?php echo $pc->getAusgabeString(); ?>
        </textarea>
      </div>

      <div class="clear"></div>
      <div id="datensatzsteuerung">
        <h4>Datensatzsteuerung</h4>
        <div class="leftScroll">
          <button type="submit" name="btn_first">|<</button>
          <button type="submit" name="btn_prev"><</button>
        </div>
        <div class="rightScroll">
          <button type="submit" name="btn_next">></button>
          <button type="submit" name="btn_last">>|</button>
          <button type="submit" name="btn_new">>*</button>
        </div>
        <div class="centerScroll">
          <label><?php echo $ds_anzeiger; ?></label>
        </div>
      </div>
    </div>
  </form>
</body>

</html>