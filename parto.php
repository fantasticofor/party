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
        $active_tab = 'Parto';
        require("inc_tabbednav.php")
    ?>

    <form id="gestioneTravaglioForm"></form>

      <div class="form-row py-3" id="partoDiv1">
        <div class="form-group col-auto pr-3">
          <label class="h5" for="inputEsitoParto">Esito parto</label>
          <select class="form-control" id="inputEsitoParto">
            <option selected value="0">Parto vaginale</option>
            <option value="1">VO</option>
            <option value="2">Forcipe</option>
            <option value="3">Taglio cesareo</option>
          </select>
        </div>
      </div><!--partoDiv1 END-->

      <div class="form-row py-3" id="partoDiv2">

        <div class="form-group col-auto">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Durata periodo espulsivo:</span>
            </div>
            <input type="text" class="form-control col-2" id="periodoEspulsivo" name="periodoEspulsivo">
            <div class="input-group-append">
              <span class="input-group-text">minuti</span>
            </div>
          </div>
        </div>

      </div><!--partoDiv2 END-->

      <div class="form-row py-3" id="partoDiv3">

        <div class="form-group col-auto pr-3">
          <label for="inputPosizMadre">Posizione materna</label>
          <select class="form-control" id="inputPosizMadre">
            <option selected value="0">Litotomica</option>
            <option value="1">Carponi</option>
            <option value="2">Fianco</option>
            <option value="3">Accovacciata</option>
            <option value="4">In piedi</option>
            <option value="5">H20</option>
            <option value="6">Sgabello</option>
            <option value="7">Semiseduta</option>
          </select>
        </div>

        <div class="form-group col-auto pr-3">
          <label for="inputPosizFeto">Posizione fetale</label>
          <select class="form-control" id="inputPosizFetale">
              <option selected value="0">Litotomica</option>
              <option value="1">OISA</option>
              <option value="2">OIDA</option>
              <option value="3">OISP</option>
              <option value="4">OIDP</option>
              <option value="5">Sacrale</option>
              <option value="6">Bregma ant</option>
              <option value="7">Bregma post</option>
              <option value="8">Faccia ant</option>
              <option value="9">Faccia post</option>
              <option value="10">Fronte ant</option>
              <option value="11">Fronte post</option>
            </select>
          </select>
        </div>        
      </div><!--partoDiv3 END-->


      <div class="form-row py-3" id="partoDiv4">

        <div class="form-group col-auto pr-3">
          <label for="inputPosizMadre">Liquido Amniotico al parto</label>
          <select class="form-control" id="inputPosizMadre">
            <option selected value="0">Limpido</option>
            <option value="1">T1</option>
            <option value="2">T2</option>
            <option value="3">T3</option>
            <option value="4">Ematico</option>
            <option value="5">Assente</option>
          </select>
        </div>     
      </div><!--partoDiv4 END-->      

      <div class="form-row align-items-end py-3" id="partoDiv5">
        <div class="form-group col-auto pr-3">
          <label>Kristeller &nbsp;</label>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="ossitocinaSi" name="ossitocina" class="custom-control-input" checked>
            <label class="custom-control-label" for="ossitocinaSi">Si</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="ossitocinaNo" name="ossitocina" class="custom-control-input">
            <label class="custom-control-label" for="ossitocinaNo">No</label>
          </div>
        </div>
      </div><!--partoDiv5 END-->



      <div class="row">
        <div class="col-lg-12">
          <button type="button" id="perineoDivButton" data-toggle="collapse" href="#perineoDiv" role="button" aria-expanded="false" aria-controls="perineoDiv" class="text-left btn btn-light btn-lg btn-block">
          <span class="pr-2" id="perineoDivToggle">-</span> Perineo</button>
        </div>
      </div>

      <div class="form-row form-inline collapse show mt-2 pb-2" id="perineoDiv">
        <div class="form-group col-lg-12">
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="perineoIntegro" name="perineoIntegro" value="perineoIntegro">
            <label class="custom-control-label" for="oltreTermine">Perineo integro</label>
          </div>
        </div>

        <div class="form-group col-auto pr-3 pb-2">
          <label for="inputLacerazPerineo">Lacerazione perineo &nbsp;</label>
          <select class="form-control" id="inputLacerazPerineo">
            <option selected value="0">I Grado</option>
            <option value="1">II Grado</option>
            <option value="2">III Grado</option>
            <option value="3">III Grado A</option>
            <option value="4">III Grado B</option>
            <option value="5">III Grado C</option>
            <option value="6">IV Grado</option>
          </select>
        </div>

        <div class="w-100"></div>

        <div class="form-group col-auto pr-3 pb-2">
          <label>Episiotomia</label>
          <div class="w-100"></div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="episiotomiaMed" name="episiotomia" class="custom-control-input" checked>
            <label class="custom-control-label" for="episiotomiaMed">Mediana</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="episiotomiaParamed" name="episiotomia" class="custom-control-input">
            <label class="custom-control-label" for="episiotomiaParamed">Paramediana</label>
          </div>
        </div>

        <div class="form-group col-lg-12">
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="ninforraffia" name="ninforraffia" value="ninforraffia">
            <label class="custom-control-label" for="oltreTermine">Ninforraffia</label>
          </div>
        </div>
        
      </div>

      <div class="row">
        <div class="col-lg-12">
          <button type="button" id="partoDiv2Button" data-toggle="collapse" href="#partoDiv2" role="button" aria-expanded="false" aria-controls="partoDiv2" class="text-left btn btn-light btn-lg btn-block">
          <span class="pr-2" id="partoDiv2Toggle">-</span> Nome altra sezione</button>
        </div>
      </div>

      <div class="form-row collapse show mt-2 pb-2" id="partoDiv2">
        <div class="form-group col-auto pr-3 pb-2">
          <label for="inputProfilassiPPH">Profilassi PPH</label>
          <select class="form-control" id="inputProfilassiPPH">
            <option selected value="0">10 UI Syntocinon i.m.</option>
            <option value="1">Syntocinon + methergin i.m.</option>
            <option value="2">Syntocinon 5UI e.v.</option>
            <option value="3">Syntocinon 10UI e.v.</option>
            <option value="4">No</option>
          </select>
        </div>

        <div class="w-100"></div>

        <div class="form-group col-auto pr-3 pb-2">
          <label for="inputSecondamento">Secondamento</label>
          <select class="form-control" id="inputSecondamento">
            <option selected value="0">Spontaneo</option>
            <option value="1">Manuale</option>
            <option value="2">Per spremitura</option>
            <option value="3">Con manovra di Credè</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <button type="button" id="partoDiv3Button" data-toggle="collapse" href="#partoDiv3" role="button" aria-expanded="false" aria-controls="partoDiv3" class="text-left btn btn-light btn-lg btn-block">
          <span class="pr-2" id="partoDiv3Toggle">-</span> Autonomia ostetrica</button>
        </div>
      </div>
      <div class="form-row collapse show mt-2 pb-2" id="partoDiv3">

        <div class="form-group col-auto pr-3 pb-2">
          <label for="inputAutonmOstetrica">Autonomia ostetrica parto (lg)</label>
          <select class="form-control" id="inputAutonmOstetrica">
            <option selected value="0">Si</option>
            <option value="1">Esclusione all'ingresso</option>
            <option value="2">Epidurale</option>
            <option value="3">Rischio emergente 1° stadio</option>
            <option value="4">Rischio emergente 2° stadio</option>
            <option value="5">Rischio emergente 3° stadio</option>
            <option value="6">Richiesta medico</option>
            <option value="7">Episiotomia</option>
          </select>
        </div>

      </div>

      <div class="form-row form-inline mt-2" id="partoDiv4">
        <div class="col-lg-12">
          <h5>Anomalie funicolo/placenta</h5>
        </div>
        <div class="form-group col-12">
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="brevFunicolo" name="brevFunicolo" value="brevFunicolo">
            <label class="custom-control-label" for="brevFunicolo">Brevità funicolo</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="giroCollo" name="giroCollo" value="giroCollo">
            <label class="custom-control-label" for="giroCollo">Giro collo</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="giroBandoliera" name="giroBandoliera" value="giroBandoliera">
            <label class="custom-control-label" for="giroBandoliera">Giro bandoliera</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="nodoVero" name="nodoVero" value="nodoVero">
            <label class="custom-control-label" for="nodoVero">Nodo vero</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="cotiledoneSuccentur" name="cotiledoneSuccentur" value="cotiledoneSuccentur">
            <label class="custom-control-label" for="cotiledoneSuccentur">Cotiledone succenturato</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="vasiPrevi" name="vasiPrevi" value="vasiPrevi">
            <label class="custom-control-label" for="vasiPrevi">Vasi previ</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="altroMotivoAnomalie" name="altroMotivoAnomalie" value="altroMotivoAnomalie">
            <label class="custom-control-label" for="altroMotivoAnomalie">Altro:&nbsp;</label>
            <input type="text" id="inputSettGestaz" class="form-control form-control-sm" placeholder="specificare">
          </div>
        </div>
      </div><!--partoDiv4 END-->


      <div class="form-row form-inline mt-2" id="partoDiv5">
        <div class="col-lg-12">
          <h5>Perdite ematiche</h5>
        </div>
        <div class="form-group col-12">

          <div class="input-group input-group-sm py-2">
            <input type="text" class="form-control col-md-4" id="perditeEmatiche" name="perditeEmatiche">
            <div class="input-group-append">
              <span class="input-group-text">ml</span>
            </div>
          </div>

          <div class="w-100"></div>
          
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="ossitocina" name="ossitocina" value="ossitocina">
            <label class="custom-control-label" for="ossitocina">Ossitocina 20-40UI</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="sulprostone" name="sulprostone" value="sulprostone">
            <label class="custom-control-label" for="sulprostone">Sulprostone</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="misoprostolo" name="misoprostolo" value="misoprostolo">
            <label class="custom-control-label" for="misoprostolo">Misoprostolo</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="baloon" name="baloon" value="baloon">
            <label class="custom-control-label" for="baloon">Baloon</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="bLynch" name="bLynch" value="bLynch">
            <label class="custom-control-label" for="bLynch">B-Lynch/Hayman</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="isterectomia" name="isterectomia" value="isterectomia">
            <label class="custom-control-label" for="isterectomia">Isterectomia</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="trasfusione" name="trasfusione" value="trasfusione">
            <label class="custom-control-label" for="trasfusione">Trasfusione</label>
          </div>
        </div>

        
      </div><!--partoDiv5 END-->

      <div class="form-row form-inline mt-2 bottomRow" id="partoDiv6">

          <div class="form-group col-12">
            <div class="custom-control custom-checkbox custom-control-inline pb-2">
              <input type="checkbox" class="custom-control-input" id="trasferitaUTI" name="trasferitaUTI" value="trasferitaUTI">
              <label class="custom-control-label h5" for="trasferitaUTI">Trasferita in UTI</label>
            </div>
          </div>

      </div><!--partoDiv6 END-->

      <div class="form-row">
          <div class="form-group col-12">
            &nbsp;
          </div>
      </div>

      <div class="row mt-3 pb-5">
        <div class="col-lg-4 text-right">
          <a href="travaglio.php" id="backBtn" class="btn btn-outline-primary">Indietro</a>
        </div>
        <div class="col-lg-4 text-center">
          <a href="#" id="salvaBtn" class="btn btn-outline-primary">Salva</a>
        </div>
        <div class="col-lg-4 text-left">
          <a href="neonati.php" id="avantiBtn" class="btn btn-primary">Salva e continua</a>
        </div>
      </div>
      


    </form>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="scripts.js"></script>
</body>

</html>
