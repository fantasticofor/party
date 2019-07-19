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
        $active_tab = 'Complicanze';
        require("inc_tabbednav.php")
    ?>

    <form id="complicanzeForm">

      <div class="form-row form-inline mt-2" id="complicanzeDiv1">
        <div class="col-lg-12">
          <h5>Anomalie funicolo/placenta</h5>
        </div>
        <div class="form-group col-12">
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="distorciSp" name="distorciSp" value="distorciSp">
            <label class="custom-control-label" for="distorciSp">Distorci spalla</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="ematoma" name="ematoma" value="ematoma">
            <label class="custom-control-label" for="ematoma">Ematoma</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="dstPlacenta" name="dstPlacenta" value="dstPlacenta">
            <label class="custom-control-label" for="dstPlacenta">Distacco placenta</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="lacerazCerv" name="lacerazCerv" value="lacerazCerv">
            <label class="custom-control-label" for="lacerazCerv">Lacerazione cervicale</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="crisiEspl" name="crisiEspl" value="crisiEspl">
            <label class="custom-control-label" for="crisiEspl">Crisi esclamptica</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="rottUtero" name="rottUtero" value="rottUtero">
            <label class="custom-control-label" for="rottUtero">Rottura utero</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="ressiVert" name="ressiVert" value="ressiVert">
            <label class="custom-control-label" for="ressiVert">Ressi vescicale</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="morteMat" name="morteMat" value="morteMat">
            <label class="custom-control-label" for="morteMat">Morte materna</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="diastasiSutura" name="diastasiSutura" value="diastasiSutura">
            <label class="custom-control-label" for="diastasiSutura">Diastasi sutura</label>
          </div>
          
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="distaccoPlacenta" name="distaccoPlacenta" value="distaccoPlacenta">
            <label class="custom-control-label" for="distaccoPlacenta">Morte materna</label>
          </div>

          <div class="w-100"></div>

          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="altroComplicanze" name="altroComplicanze" value="altroComplicanze">
            <label class="custom-control-label" for="altroComplicanze">Altro:&nbsp;</label>
            <input type="text" id="inputSettGestaz" class="form-control form-control-sm" placeholder="specificare">
          </div>
        </div>
      </div><!--complicanzeDiv1 END-->      

      <div class="row mt-3 pb-5">
        <div class="col-lg-4 text-right">
          <a href="neonati.php" id="backBtn" class="btn btn-outline-primary">Indietro</a>
        </div>
        <div class="col-lg-4 text-center">
          <a href="#" id="salvaBtn" class="btn btn-outline-primary">Salva</a>
        </div>
        <div class="col-lg-4 text-left">
          <a href="operatori.php" id="avantiBtn" class="btn btn-primary">Salva e continua</a>
        </div>
      </div>
      


    </form>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="scripts.js"></script>

</body>

</html>
