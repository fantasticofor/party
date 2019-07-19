<!DOCTYPE html>
<html lang="it">

<?php require("inc_header.php"); ?>

<body>
    <!-- Navigation -->
    <?php 
        $active_menu = 'Inserimento';
        require("inc_navigation.php")
    ?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="mt-5">Inserimento nuovo CEDAP</h1>
      </div>
    </div>
    
    <!-- Tabbed navigation -->
    <?php 
        $active_tab = 'Gestione travaglio';
        require("inc_tabbednav.php")
    ?>

    <form id="gestioneTravaglioForm"></form>

      <div class="form-row" id="gestTravaglioDiv1">
        <div class="form-group col-auto pr-3">
          <label for="inputRottura">Rottura delle membrane</label>
          <select class="form-control col-auto" id="inputRottura" onchange="inputRotturaSelected(this);">
            <option selected value="0">Seleziona valore</option>
            <option value="1">PROM</option>
            <option value="2">Spontanea in travaglio</option>
            <option value="3">Amnioressi</option>
            <option value="4">Membrana integra</option>
          </select>
        </div>
        <div class="w-100"></div>
      </div><!--gestTravaglioDiv1 END-->

      <div class="form-row collapse hide" id="dataOraRotturaMembr">
        <div class="form-group col-md-2">
          <label for="inputDataRotturaMembr">Data</label>
          <input type="text" id="inputRotturaMembr" class="form-control calendario">
          <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
          </div>
        </div>

        <div class="form-group col-md-2">
          <label for="inputOraRotturaMembr">Ora</label>
          <input type="text" class="form-control" id="inputOraRotturaMembr" placeholder="12:54">
        </div>
      </div>

      <div class="form-row" id="gestTravaglioDiv2">
        <div class="form-group col-auto pr-3">
          <label for="inputLiquidoAmn">Liquido amniotico</label>
          <select class="form-control col-auto" id="inputLiquidoAmn">
            <option selected value="0">Seleziona valore</option>
            <option value="1">Limpido</option>
            <option value="2">T1</option>
            <option value="3">T2</option>
            <option value="4">T3</option>
            <option value="5">Ematico</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-lg-2 col-md-3 col-sm-4 col-xs-4 mr-2">
          <label for="durataFaseLatente">Durata fase latente:</label>
          <div class="input-group">
            <input type="text" class="form-control" id="durataFaseLatente" name="durataFaseLatente" >
            <div class="input-group-append">
              <span class="input-group-text">ore</span>
            </div>
          </div>
        </div>

        <div class="form-group col-lg-2 col-md-3 col-sm-4 col-xs-4 mr-2">
          <label for="durataFaseAttiva">Durata fase attiva:</label>
          <div class="input-group">
            <input type="text" class="form-control" id="durataFaseAttiva" name="durataFaseAttiva" >
            <div class="input-group-append">
              <span class="input-group-text">ore</span>
            </div>
          </div>
        </div>
      </div>

      <div class="form-row">

        <div class="form-group col-auto pr-3">
          <label>Temperatura materna > 37.5°C</label>
          <div class="custom-control custom-radio ml-5">
            <input type="radio" id="tempMaternaAltaSi" name="tempMaternaAlta" class="custom-control-input" checked>
            <label class="custom-control-label" for="tempMaternaAltaSi">Si</label>
          </div>
          <div class="custom-control custom-radio ml-5">
            <input type="radio" id="tempMaternaAltaNo" name="tempMaternaAlta" class="custom-control-input">
            <label class="custom-control-label" for="tempMaternaAltaNo">No</label>
          </div>
        </div>

      </div>

      <div class="form-row">

        <div class="form-group col-auto pr-3">
          <label>Tachicardia fetale (FHR>160 bpm)</label>
          <div class="custom-control custom-radio ml-5">
            <input type="radio" id="tachFetaleSi" name="tachFetale" class="custom-control-input" checked>
            <label class="custom-control-label" for="tachFetaleSi">Si</label>
          </div>
          <div class="custom-control custom-radio ml-5">
            <input type="radio" id="tachFetaleNo" name="tachFetale" class="custom-control-input">
            <label class="custom-control-label" for="tachFetaleNo">No</label>
          </div>
        </div>

      </div>

      <div class="form-row align-items-end">

        <div class="form-group col-auto">

          <label>G.B. > 14000/&mu;L</label>
          <div class="custom-control custom-radio ml-5">
            <input type="radio" id="gb14000Si" name="gb14000" class="custom-control-input" checked>
            <label class="custom-control-label" for="gb14000Si">Si</label>
          </div>
          <div class="custom-control custom-radio ml-5">
            <input type="radio" id="gb14000No" name="gb14000" class="custom-control-input">
            <label class="custom-control-label" for="gb14000No">No</label>
          </div>

        </div>

        <div class="form-group col-auto pb-1" id="specGB">

          <div class="input-group">
            <label class="pt-1" for="gbMg">Specificare:&nbsp;</label>
            <input type="text" class="form-control col-4" id="gbMg" name="gbMg">
            <div class="input-group-append">
              <span class="input-group-text">/&mu;L</span>
            </div>
          </div>

        </div>

      </div>

      <div class="form-row align-items-end">

        <div class="form-group col-auto">

          <label>PCR > 1.5mg/dL</label>
          <div class="custom-control custom-radio ml-5">
            <input type="radio" id="pcrSi" name="pcr" class="custom-control-input" checked>
            <label class="custom-control-label" for="pcrSi">Si</label>
          </div>
          <div class="custom-control custom-radio ml-5">
            <input type="radio" id="pcrNo" name="pcr" class="custom-control-input">
            <label class="custom-control-label" for="pcrNo">No</label>
          </div>

        </div>

        <div class="form-group col-auto pb-1" id="specPCR">

          <div class="input-group">
            <label class="pt-1" for="pcrMg">Specificare:&nbsp;</label>
            <input type="text" class="form-control col-4" id="pcrMg" name="pcrMg">
            <div class="input-group-append">
              <span class="input-group-text">/&mu;L</span>
            </div>
          </div>

        </div>

      </div>

      <!--gestTravaglioDiv2 END-->

      <div class="form-row align-items-end py-3" id="gestTravaglioDiv3">
        <div class="form-group col-auto pr-3">
          <label>Ossitocina &nbsp;</label>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="ossitocinaSi" name="ossitocina" class="custom-control-input" checked>
            <label class="custom-control-label" for="ossitocinaSi">Si</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="ossitocinaNo" name="ossitocina" class="custom-control-input">
            <label class="custom-control-label" for="ossitocinaNo">No</label>
          </div>
        </div>
        <div class="form-group col-lg-12">
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="ossitocinaStadio1" name="ossitocinaStadio1" value="ossitocinaStadio1">
            <label class="custom-control-label" for="ossitocinaStadio1">Primo Stadio</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="ossitocinaStadio2" name="ossitocinaStadio2" value="ossitocinaStadio2">
            <label class="custom-control-label" for="ossitocinaStadio2">Secondo Stadio</label>
          </div>
        </div>
      </div><!--gestTravaglioDiv3 END-->

      <div class="form-row align-items-end py-3" id="gestTravaglioDiv4">
        <div class="form-group col-12 pt-3">
          <label for="inputPosizMadre" class="font-weight-bold">Posizione materna</label>
        </div>
        <div class="form-group pt-1 pl-3">
          <select class="form-control form-control-sm col-auto" id="inputPosizMadre" name="inputPosizMadre">
            <option selected value="0">Attiva (libera)</option>
            <option value="1">Passiva (supina)</option>
            <option value="2">Semiseduta/Seduta</option>
          </select>
        </div>

        <div class="form-group col-12 pt-3">
          <label for="inputPosizTroncoFetale" class="font-weight-bold">Posizione tronco fetale</label>
        </div>
        <div class="form-group pt-1 pl-3">
          <select class="form-control form-control-sm col-auto" id="inputPosizTroncoFetale" name="inputPosizTroncoFetale">
            <option selected value="0">Anteriore</option>
            <option value="1">Posteriore</option>
          </select>
        </div>

        <div class="form-group col-lg-12 pt-3">
          <label for="empatiaConOstetrica" class="font-weight-bold">Empatia con ostetrica (da 1 a 10): <span class="font-italic" id="empatiaVal">5</span></label>
          <div class="w-100"></div>
          <input type="range" class="custom-range col-lg-4 col-md-5 col-sm-12" min="1" max="10" id="empatiaConOstetrica" name="empatiaConOstetrica" onchange="updateEmpatiaVal(this.value)">
        </div>
      </div><!--gestTravaglioDiv4 END-->


      <div class="form-row form-inline mt-2" id="gestTravaglioDiv5">
        <div class="col-lg-12">
          <h5>Analgesia:</h5>
        </div>
        <div class="form-group col-lg-12">
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="nulla" name="nulla" value="nulla">
            <label class="custom-control-label" for="nulla">Nulla</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="doccia" name="doccia" value="doccia">
            <label class="custom-control-label" for="doccia">Doccia</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="protossido" name="protossido" value="protossido">
            <label class="custom-control-label" for="protossido">Protossido d'azoto</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="vasca" name="vasca" value="vasca">
            <label class="custom-control-label" for="vasca">Vasca</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="epidurale" name="epidurale" value="epidurale">
            <label class="custom-control-label" for="epidurale">Epidurale</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="petidina" name="petidina" value="petidina">
            <label class="custom-control-label" for="petidina">Petidina</label>
          </div>
        </div>
      </div><!--gestTravaglioDiv5 END-->

      <div class="form-row form-inline mt-2" id="gestTravaglioDiv6">
        <div class="col-lg-12">
          <h5>Monitoraggio FHR:</h5>
        </div>
        <div class="form-group col-lg-12">
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="ctgInt" name="ctgInt" value="ctgInt">
            <label class="custom-control-label" for="ctgInt">CTG intermittenza</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="ctgCont" name="ctgCont" value="ctgCont">
            <label class="custom-control-label" for="ctgCont">CTG Continuo</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="ecgScalp" name="ecgScalp" value="ecgScalp">
            <label class="custom-control-label" for="ecgScalp">ECG scalp</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="vasca" name="vasca" value="vasca">
            <label class="custom-control-label" for="vasca">STAN</label>
          </div>
        </div>
      </div><!--gestTravaglioDiv6 END-->

      <div class="form-row form-inline mt-2" id="gestTravaglioDiv7">
        <div class="col-lg-12">
          <h5>CTG 1° Stadio (ACOG 2009):</h5>
        </div>
        <div class="form-group col-lg-12">
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="clI" name="clI" value="clI">
            <label class="custom-control-label" for="clI">Classe I</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="clII" name="clII" value="clII">
            <label class="custom-control-label" for="clII">Classe II</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="clIII" name="clIII" value="clIII">
            <label class="custom-control-label" for="clIII">Classe III</label>
          </div>
        </div>
      </div><!--gestTravaglioDiv7 END-->



      <div class="form-row form-inline mt-2" id="gestTravaglioDiv8">
        <div class="col-lg-12">
          <h5>CTG 2° Stadio (PIQUARD):</h5>
        </div>
        <div class="form-group col-lg-12">
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="tipo0" name="tipo0" value="tipo0">
            <label class="custom-control-label" for="clI">Tipo 0</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="tipo1" name="tipo1" value="tipo1">
            <label class="custom-control-label" for="tipo1">Tipo 1</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="tipo2a" name="tipo2a" value="tipo2a">
            <label class="custom-control-label" for="tipo2a">Tipo 2A</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="tipo2b" name="tipo2b" value="tipo2b">
            <label class="custom-control-label" for="tipo2b">Tipo 2B</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="tipo3" name="tipo3" value="tipo3">
            <label class="custom-control-label" for="tipo3">Tipo 3</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="tipo4" name="tipo4" value="tipo4">
            <label class="custom-control-label" for="tipo4">Tipo 4</label>
          </div>
        </div>
      </div><!--gestTravaglioDiv8 END-->


      <div class="form-row align-items-end py-3" id="gestTravaglioDiv9">
        <div class="form-group col-auto pr-3">
          <h5>Antibiotico:</h5>
          <select class="form-control col-auto" id="inputInsorgTravaglio">
            <option selected value="0">Nessuno</option>
            <option value="1">Ampicillina</option>
            <option value="2">Gentamicina</option>
            <option value="3">Azitromicina</option>
            <option value="4">Clindamicina</option>
            <option value="5">Altro</option>
          </select>
        </div>

        <div class="w-100"></div>

        <div class="form-group col-auto pr-3">
          <label for="grAntibiotico">Grammi somministrati:</label>
          <input type="text" class="form-control" id="grAntibiotico" placeholder="1">
        </div>
      </div><!--gestTravaglioDiv9 END-->

      <div class="row mt-3 mb-5">
        <div class="col-lg-4 text-right">
          <a href="travaglio.php" id="backBtn" class="btn btn-outline-primary">Indietro</a>
        </div>
        <div class="col-lg-4 text-center">
          <a href="#" id="salvaBtn" class="btn btn-outline-primary">Salva</a>
        </div>
        <div class="col-lg-4 text-left">
          <a href="parto.php" id="avantiBtn" class="btn btn-primary">Salva e continua</a>
        </div>
      </div>
    </form>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="scripts.js"></script>
  
</body>

</html>
