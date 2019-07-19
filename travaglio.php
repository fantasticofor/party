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
        $active_tab = 'Insorgenza travaglio';
        require("inc_tabbednav.php")
    ?>

    <form id="insorgTravaglioForm">

      <div class="form-row py-3" id="insorgTravaglioDiv">

        <div class="form-group col-auto pr-3">
          <label for="inputInsorgTravaglio">Insorgenza travaglio</label>
          <select class="form-control col-auto" id="inputInsorgTravaglio">
            <option selected value="1">Spontaneo</option>
            <option value="2">Induzione</option>
            <option value="3">TC fuori travaglio</option>
          </select>
        </div>

        <div class="form-group collapse show col-auto pr-3" id="autonomiaOstetricaGroup">
          <label>Autonomia Ostetrica ingresso &nbsp;</label>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="autonomiaOstetricaSi" name="autonomiaOstetrica" class="custom-control-input" value="autonomOstSi" checked>
            <label class="custom-control-label" for="autonomiaOstetricaSi">Si</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="autonomiaOstetricaNo" name="autonomiaOstetrica" class="custom-control-input"  value="autonomOstNo">
            <label class="custom-control-label" for="autonomiaOstetricaNo">No</label>
          </div>
          <select class="form-control collapse hide col-auto" id="inputRischioOstetrica">
            <option selected value="0">Seleziona rischio</option>
            <option value="1">Rischio medio-alto</option>
            <option value="2">Richiestra medico</option>
            <option value="3">TC fuori travaglio</option>
          </select>
        </div>

        <div class="form-group col-auto pr-3">
          <label for="inputTampone">Tampone - TVR (per SBEB)</label>
          <select class="form-control col-auto" id="inputTampone" name="inputTampone">
            <option selected value="0">Non noto</option>
            <option value="1">Negativo</option>
            <option value="2">Positivo</option>
            <option value="3">TC fuori travaglio</option>
          </select>
        </div>

      </div>

      <div class="dropdown-divider"></div>

      <div class="collapse hide" id="justIfIndotto">
        <div class="row">
          <div class="col-lg-12">
            <button type="button" id="induzioneDivButton" data-toggle="collapse" href="#induzioneDiv" role="button" aria-expanded="false" aria-controls="induzioneDiv" class="text-left btn btn-light btn-lg btn-block">
            <span class="pr-2" id="induzioneDivToggle">-</span> Induzione</button>
          </div>
        </div>
        <div class="form-row form-inline collapse show mt-2" id="induzioneDiv">
          <div class="col-lg-12">
            <h5>Motivo:</h5>
          </div>
          <div class="form-group col-lg-12">
            <div class="custom-control custom-checkbox custom-control-inline pb-2">
              <input type="checkbox" class="custom-control-input" id="oltreTermine" name="oltreTermine" value="oltreTermine">
              <label class="custom-control-label" for="oltreTermine">Oltre il termine</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline pb-2">
              <input type="checkbox" class="custom-control-input" id="oligoidramnios" name="oligoidramnios" value="oligoidramnios">
              <label class="custom-control-label" for="oligoidramnios">Oligoidramnios</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline pb-2">
              <input type="checkbox" class="custom-control-input" id="iugr" name="iugr" value="iugr">
              <label class="custom-control-label" for="iugr">IUGR</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline pb-2">
              <input type="checkbox" class="custom-control-input" id="anidramnios" name="anidramnios" value="anidramnios">
              <label class="custom-control-label" for="anidramnios">Anidramnios</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline pb-2">
              <input type="checkbox" class="custom-control-input" id="prom" name="prom" value="prom">
              <label class="custom-control-label" for="prom">PROM</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline pb-2">
              <input type="checkbox" class="custom-control-input" id="ipertensPreclamps" name="ipertensPreclamps" value="ipertensPreclamps">
              <label class="custom-control-label" for="ipertensPreclamps">Ipertensione/Preclampsia</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline pb-2">
              <input type="checkbox" class="custom-control-input" id="colestasi" name="colestasi" value="colestasi">
              <label class="custom-control-label" for="colestasi">Colestasi</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline pb-2">
              <input type="checkbox" class="custom-control-input" id="patMaterna" name="patMaterna" value="patMaterna">
              <label class="custom-control-label" for="patMaterna">Patologia materna</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline pb-2">
              <input type="checkbox" class="custom-control-input" id="patolFetale" name="patolFetale" value="patolFetale">
              <label class="custom-control-label" for="patolFetale">Patologia fetale</label>
            </div>
          
            <div class="custom-control custom-checkbox custom-control-inline pb-2">
              <input type="checkbox" class="custom-control-input" id="altroMotivo" name="altroMotivo" value="altroMotivo">
              <label class="custom-control-label" for="altroMotivo">Altro:&nbsp;</label>
              <input type="text" id="inputSettGestaz" class="form-control form-control-sm" placeholder="specificare motivo">
            </div>
          </div>
        
          <div class="col-lg-12 pt-4">
            <h5>Metodo:</h5>
          </div>

          <div class="form-group col-lg-12 pt-2">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="inputCheckMys" name="inputCheckMys" value="Cytotec" onchange="enableInputGroup(this, 'cytoMethod');">
              <label class="form-check-label font-weight-bold" for="inputCheckMys">Cytotec</label>
            </div>
          </div>
          <div class="form-group col-lg-12 pt-1">
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Num. dosi</span>
              </div>
              <input type="text" class="form-control cytoMethod" placeholder="1" id="numDosiCyt" name="numDosiCyt" disabled>
            </div>
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Data Inizio</span>
              </div>
              <input type="text" class="form-control calendario cytoMethod" id="inputDataInizioCyt" name="inputDataInizioCyt" disabled>
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Ora Inizio</span>
              </div>
              <input type="text" class="form-control cytoMethod" placeholder="10:10" id="inputOraInizioCyt" name="inputOraInizioCyt" disabled>
            </div>
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Bishop Inizio</span>
              </div>
              <input type="text" class="form-control cytoMethod" id="inputBishopInizioCyt" name="inputBishopInizioCyt" disabled>
            </div>
          </div>

          <div class="form-group col-lg-12 pt-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inputCheckMys" name="inputCheckMys" value="Mysodelle" onchange="enableInputGroup(this, 'mysoMethod');">
              <label class="form-check-label font-weight-bold" for="inputCheckMys">Mysodelle</label>
            </div>
          </div>
          <div class="form-group col-lg-12 pt-1">
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Num. dosi</span>
              </div>
              <input type="text" class="form-control mysoMethod" placeholder="1" id="numDosiMys" name="numDosiMys" disabled>
            </div>
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Data Inizio</span>
              </div>
              <input type="text" class="form-control calendario mysoMethod" id="inputDataInizioMys" name="inputDataInizioMys" disabled>
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Ora Inizio</span>
              </div>
              <input type="text" class="form-control mysoMethod" placeholder="10:10" id="inputOraInizioMys" name="inputOraInizioMys" disabled>
            </div>
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Bishop Inizio</span>
              </div>
              <input type="text" class="form-control mysoMethod" id="inputBishopInizioMys" name="inputBishopInizioMys" disabled>
            </div>
          </div>

          <!--Dinoprosterone pessario-->
          <div class="form-group col-lg-12 pt-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inputCheckDinoPess" name="inputCheckDinoPess" value="DinoPess" onchange="enableInputGroup(this, 'dinoMethod');">
              <label class="form-check-label font-weight-bold" for="inputCheckDinoPess">Dinoprosterone pessario</label>
            </div>
          </div>
          <div class="form-group col-lg-12 pt-1">
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Num. dosi</span>
              </div>
              <input type="text" class="form-control dinoMethod" placeholder="1" id="numDosiDinoPess" name="numDosiDinoPess" disabled>
            </div>
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Data Inizio</span>
              </div>
              <input type="text" class="form-control calendario dinoMethod" id="inputDataInizioDinoPess" name="inputDataInizioDinoPess" disabled>
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Ora Inizio</span>
              </div>
              <input type="text" class="form-control dinoMethod" placeholder="10:10" id="inputOraInizioDinoPess" name="inputOraInizioDinoPess" disabled>
            </div>
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Bishop Inizio</span>
              </div>
              <input type="text" class="form-control dinoMethod" id="inputBishopInizioDinoPess" name="inputBishopInizioDinoPess" disabled>
            </div>
          </div><!--Dinoprosterone pessario-END-->

          <!--Dinoprosterone gel-->
          <div class="form-group col-lg-12 pt-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inputCheckDinoGel" name="inputCheckDinoGel" value="DinoGel" onchange="enableInputGroup(this, 'dinoGelMethod');">
              <label class="form-check-label font-weight-bold" for="inputCheckDinoGel">Dinoprosterone gel</label>
            </div>
          </div>
          <div class="form-group col-lg-12 pt-1">
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Num. dosi</span>
              </div>
              <input type="text" class="form-control dinoGelMethod" placeholder="1" id="numDosiDinoGel" name="numDosiDinoGel" disabled>
            </div>
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Data Inizio</span>
              </div>
              <input type="text" class="form-control calendario dinoGelMethod" id="inputDataInizioDinoGel" name="inputDataInizioDinoGel" disabled>
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Ora Inizio</span>
              </div>
              <input type="text" class="form-control dinoGelMethod" placeholder="10:10" id="inputOraInizioDinoGel" name="inputOraInizioDinoGel" disabled>
            </div>
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Bishop Inizio</span>
              </div>
              <input type="text" class="form-control dinoGelMethod" id="inputBishopInizioDinoGel" name="inputBishopInizioDinoGel" disabled>
            </div>
          </div><!--Dinoprosterone gel-END-->

          <!--Aminioressi-->
          <div class="form-group col-lg-12 pt-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inputCheckAmnio" name="inputCheckAmnio" value="Amnioressi" onchange="enableInputGroup(this, 'amnioMethod');">
              <label class="form-check-label font-weight-bold" for="inputCheckAmnio">Amnioressi &lt; 3 cm</label>
            </div>
          </div>
          <div class="form-group col-lg-12 pt-1">
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Data Inizio</span>
              </div>
              <input type="text" class="form-control calendario amnioMethod" id="inputDataInizioAmnio" name="inputDataInizioAmnio" disabled>
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Ora Inizio</span>
              </div>
              <input type="text" class="form-control amnioMethod" placeholder="10:10" id="inputOraInizioAmnio" name="inputOraInizioAmnio" disabled>
            </div>
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Bishop Inizio</span>
              </div>
              <input type="text" class="form-control amnioMethod" id="inputBishopInizioAmnio" name="inputBishopInizioAmnio" disabled>
            </div>
          </div><!--Aminioressi-END-->

          <!--Ossitocina-->
          <div class="form-group col-lg-12 pt-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inputCheckOssit" name="inputCheckOssit" value="Ossitocina" onchange="enableInputGroup(this, 'ossitoMethod');">
              <label class="form-check-label font-weight-bold" for="inputCheckOssit">Ossitocina &lt; 3 cm</label>
            </div>
          </div>
          <div class="form-group col-lg-12 pt-1">
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Data Inizio</span>
              </div>
              <input type="text" class="form-control calendario ossitoMethod" id="inputDataInizioOssit" name="inputDataInizioOssit" disabled>
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Ora Inizio</span>
              </div>
              <input type="text" class="form-control ossitoMethod" placeholder="10:10" id="inputOraInizioOssit" name="inputOraInizioOssit" disabled>
            </div>
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Bishop Inizio</span>
              </div>
              <input type="text" class="form-control ossitoMethod" id="inputBishopInizioOssit" name="inputBishopInizioOssit" disabled>
            </div>
          </div><!--Ossitocina-END-->

          <!--Palloncino di Cook-->
          <div class="form-group col-lg-12 pt-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inputCheckPalCook" name="inputCheckPalCook" value="PalloncinoDiCook" onchange="enableInputGroup(this, 'cookMethod');">
              <label class="form-check-label font-weight-bold" for="inputCheckPalCook">Palloncino di Cook</label>
            </div>
          </div>
          <div class="form-group col-lg-12 pt-1">
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Data Inizio</span>
              </div>
              <input type="text" class="form-control calendario cookMethod" id="inputDataInizioPalCook" name="inputDataInizioPalCook" disabled>
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Ora Inizio</span>
              </div>
              <input type="text" class="form-control cookMethod" placeholder="10:10" id="inputOraInizioPalCook" name="inputOraInizioPalCook" disabled>
            </div>
            <div class="input-group input-group-sm col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Bishop Inizio</span>
              </div>
              <input type="text" class="form-control cookMethod" id="inputBishopInizioPalCook" name="inputBishopInizioPalCook" disabled>
            </div>
          </div><!--Palloncino di Cook-END-->

          <div class="form-group col-lg-12 dropdown-divider"></div>

          <!--Durata induzione-->
          <div class="form-group col-lg-12 pt-3">
            <label for="inputDurataInduz" class="font-weight-bold">Durata induzione (da prima somministrazione ad inizio travaglio)</label>
          </div>
          <div class="form-group col-lg-12 pt-1">
            <div class="input-group input-group-sm col-lg-2 col-md-3 col-sm-6 pb-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Ore:&nbsp;</span>
              </div>
              <input type="text" class="form-control" id="inputDurataInduz" name="inputdurataInduz" >
            </div>
          </div><!--Durata induzione-END-->

          <!--Complicanze induzione-->
          <div class="form-group col-12 pt-3">
            <label for="inputComplInduz" class="font-weight-bold">Complicanze induzione</label>
          </div>
          <div class="form-group col-lg-12 pt-1 pl-3">
            <select class="form-control form-control-sm col-auto" id="inputComplInduz" name="inputComplInduz">
              <option selected value="0">Nessuna</option>
              <option value="1">Tachisistolia</option>
              <option value="2">Ipertono</option>
              <option value="3">Ipertono + Alterazioni CTG</option>
              <option value="4">Altro</option>
            </select>
          </div><!--Complicanze induzione-END-->

          <div class="form-group col-sm-6 col-xs-12 py-1 pl-3 collapse hide" id="divAltreComplicanze">
            <input class="form-control col-lg-12" type="text" id="inputAltreComplicanze" name="inputAltreComplicanze" placeholder="specificare altre complicanze" >
          </div>

        </div><!--induzioneDiv-END-->
      </div>
      <div class="row mt-3 mb-5">
        <div class="col-lg-4 text-right">
          <a href="anamnesi.php" id="backBtn" class="btn btn-outline-primary">Indietro</a>
        </div>
        <div class="col-lg-4 text-center">
          <a href="#" id="salvaBtn" class="btn btn-outline-primary">Salva</a>
        </div>
        <div class="col-lg-4 text-left">
          <a href="gestione.php" id="avantiBtn" class="btn btn-primary">Salva e continua</a>
        </div>
      </div>
    </form>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="scripts.js"></script>

</body>

</html>
