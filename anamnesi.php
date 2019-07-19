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
        $active_tab = 'Anamnesi';
        require("inc_tabbednav.php")
    ?>

    <form id="datiAnamnesiForm" v-on:submit.prevent>
    <div class="row">
      <div class="col-lg-12">
        <button type="button" id="datiMadreDivButton" data-toggle="collapse" href="#datiMadreDiv" role="button" aria-expanded="false" aria-controls="datiMadreDiv" class="text-left btn btn-light btn-lg btn-block"> <span class="pr-2" id="datiMadreDivToggle">-</span> Dati Madre</button>
      </div>
    </div>
    <div class="row collapse show mb-2" id="datiMadreDiv">
      <div class="col-lg-12">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputNome">Nome:</label>
              <input type="text" class="form-control" id="inputNome" v-model="madre.inputNome">
            </div>
            <div class="form-group col-md-4">
              <label for="inputCognome">Cognome:</label>
              <input type="text" class="form-control" id="inputCognome" v-model="madre.inputCognome">
            </div>
            <div class="form-group col-md-4">
              <label for="inputCognomeAcq">Codice Fiscale:</label>
              <input type="text" class="form-control" id="inputCognomeAcq" v-model="madre.inputCognomeAcq">
            </div>
          </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputDataNascita">Data di nascita:</label>
              <vuejs-datepicker input-class="form-control" name="inputDataNascita" id="inputDataNascita" v-model="madre.inputDataNascita"></vuejs-datepicker>
            </div>
            <div class="form-group col-md-2">
              <!-- <label for="inputDataNascita">Peso:</label>
              <input type="text" class="form-control" id="inputDataNascita" placeholder="58 Kg" disabled>
              <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">Kg</span>
              </div> -->
              <label for="inputDataNascita">Peso:</label>
              <div class="input-group" id="inputDataNascita">
                <input type="text" class="form-control" placeholder="58" aria-label="Peso:">
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">Kg</span>
                </div>
              </div>


            </div>
            <div class="form-group col-md-2">
              <label for="inputAltezza">Altezza:</label>
              <div class="input-group" id="inputAltezza">
                <input type="text" class="form-control" placeholder="168" aria-label="Peso:">
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">cm</span>
                </div>
              </div>
            </div>
            <div class="form-group col-md-2">
              <label for="inputCognome">Indice BMI:</label>
              <input type="text" class="form-control" id="inputCognome" placeholder="26" disabled>
            </div>
            <div class="form-group col-md-4 pt-4 text-center">
              <button type="submit" class="btn btn-outline-primary">Cambia madre selezionata</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="dropdown-divider"></div>

  <div class="row">
    <div class="col-lg-12">
      <button type="button" id="datiPartoDivButton" data-toggle="collapse" href="#datiPartoDiv" role="button" aria-expanded="false" aria-controls="datiPartoDiv" class="text-left btn btn-light btn-lg btn-block"> <span class="pr-2" id="datiPartoDivToggle">-</span> Dati Parto</button>
    </div>
  </div>
  <div class="row collapse show" id="datiPartoDiv">
    <div class="col-lg-12">

      <div class="form-row">
        <div class="form-group col-md-2">
          <label for="inputPartoNumero">Parto Numero</label>
          <input type="text" class="form-control" id="inputPartoNumero" placeholder="1">
        </div>

        <div class="form-group col-md-2">
          <label for="inputDataNascita">Data</label>
          <input type="text" id="inputDataNascita" class="form-control calendario">
          <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
          </div>
        </div>

        <div class="form-group col-md-2">
          <label for="inputCognomeAcq">Ora</label>
          <input type="text" class="form-control" id="inputCognomeAcq" placeholder="12:54">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-2">
          <label for="inputPartoNumero">Inc. Ponderale</label>
          <input type="text" class="form-control" id="inputPartoNumero">
        </div>

        <div class="col-md-2">
          <div class="row">
            <div class="col">
              <p>&nbsp;</p>
            </div>
          </div>
          <div class="row text-right">
            <div class="col">
              <p><strong>Epoca Gestazionale:</strong></p>
            </div>
          </div>
        </div>

        <div class="form-group col-md-2">
          <label for="inputSettGestaz">Settimane</label>
          <input type="text" id="inputSettGestaz" class="form-control">
        </div>

        <div class="form-group col-md-2">
          <label for="inputGiorniGestaz">Giorni</label>
          <input type="text" id="inputGiorniGestaz" class="form-control">
        </div>

        <div class="form-group col-md-3">
          <label for="inputInsorgGravid">Insorgenza Gravidanza</label>
          <select class="form-control" id="inputInsorgGravid">
            <option selected value="1001">Spontanea</option>
            <option value="1002">IUI</option>
            <option value="1003">ICSI/FIVET</option>
            <option value="1004">Ovodonazione</option>
            <option value="1006">Embriodonazione</option>
          </select>
        </div>

      </div>
    </div>
  </div>

  <div class="dropdown-divider"></div>

  <div class="row">
    <div class="col-lg-12">
      <button type="button"id="datiGravPrecDivButton" data-toggle="collapse" href="#datiGravPrecDiv" role="button" aria-expanded="false" aria-controls="datiGravPrecDiv" class="text-left btn btn-light btn-lg btn-block">
        <span class="pr-2" id="datiGravPrecDivToggle">-</span> Gravidanze Precedenti</button>
    </div>
  </div>
    <div class="row collapse show" id="datiGravPrecDiv">
      <div class="col-lg-12">
        <div class="form-row">
          <div class="form-group col-lg-2">
            <label for="inputNumeroParti">Numero Parti</label>
            <input type="text" class="form-control" id="inputNumeroParti">
          </div>
          <div class="form-group col-lg-2">
            <label for="inputTC">TC</label>
            <input type="text" class="form-control" id="inputTC">
          </div>
          <div class="form-group col-lg-2">
            <label for="inputABS">ABS</label>
            <input type="text" class="form-control" id="inputABS">
          </div>
          <div class="form-group col-lg-2">
            <label for="inputIVG">IVG</label>
            <input type="text" class="form-control" id="inputIVG">
          </div>
          <div class="form-group col-lg-2">
            <label for="inputGEU">GEU</label>
            <input type="text" class="form-control" id="inputGEU">
          </div>
          <div class="form-group col-md-3">
            <label for="inputPregressi">Pregressi sfavorevoli</label>
            <select class="form-control" id="inputPregressi">
              <option selected value="NO">No</option>
              <option value="IPE">Ipertensione gestazionale</option>
              <option value="INF">Infezione</option>
              <option value="PPL">Preclampsia placentare</option>
              <option value="MAL">Malformazione</option>
              <option value="PMA">Preclampsia matemogenica</option>
              <option value="PPR">Placenta previa</option>
              <option value="COL">Colestasi</option>
              <option value="P34">PP &lt; 34</option>
              <option value="DIA">Diabete gestazionale</option>
              <option value="DPL">Distacco placentare</option>
              <option value="IUG">IUGR</option>
              <option value="MEF">MEF</option>
            </select>
          </div>
        </div>
      </div>
    </div>

  <div class="dropdown-divider"></div>


<div class="row">
  <div class="col-lg-12">
    <button type="button"id="datiGravAttDivButton" data-toggle="collapse" href="#datiGravAttDiv" role="button" aria-expanded="false" aria-controls="datiGravAttDiv" class="text-left btn btn-light btn-lg btn-block"> <span class="pr-2" id="datiGravAttDivToggle">-</span> Gravidanza attuale</button>
  </div>
</div>
  <div class="row collapse show" id="datiGravAttDiv">
    <div class="col-lg-12">

      <div class="row mt-2">
        <div class="form-group col-md-12 col-lg-6">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1" onchange="checkGravMultipl();">
            <label class="custom-control-label" for="customCheck1"><strong>Gravidanza multipla</strong></label>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-lg-2">
          <label for="inputNumeroFeti">Numero Feti</label>
          <input type="text" class="form-control gravMultiplRow" id="inputNumeroFeti" value="1" disabled>
        </div>
      </div>

      <div class="form-row" id="numFetiRow">
        <div class="form-group col-auto">
          <label for="inputPresFetale3">Presentazione fetale 1</label>
          <select class="form-control gravMultiplRow" id="inputPresFetale3" name="inputPresFetale3">
            <option selected value="1001">Cefalico</option>
            <option value="1002">Podalico</option>
            <option value="1003">Situazione trasversa</option>
            <option value="1004">Obliquo</option>
          </select>
        </div>
      </div>



      <div class="form-row">
        <div class="form-group col-auto">
          <label for="inputPregressi">Patologie attuale gravidanza</label>
          <select class="form-control" id="inputPregressi">
            <option selected value="NO">Nessuna</option>
            <option value="IPE">Ipertensione gestazionale</option>
            <option value="INF">Infezione</option>
            <option value="PPL">Preclampsia placentare</option>
            <option value="MAL">Malformazione</option>
            <option value="PMA">Preclampsia matemogenica</option>
            <option value="PPR">Placenta previa</option>
            <option value="COL">Colestasi</option>
            <option value="P34">PP < 34</option>
            <option value="DIA">Diabete gestazionale</option>
            <option value="DPL">Distacco placentare</option>
            <option value="IUG">IUGR</option>
            <option value="MEF">MEF</option>
          </select>
        </div>
      </div>
    </div>
  </div>

      <div class="row mt-3 mb-5">
        <div class="col-lg-4 text-right">
          <a href="#" id="backBtn" class="btn btn-outline-secondary disabled">Indietro</a>
        </div>
        <div class="col-lg-4 text-center">
          <button class="btn btn-outline-primary" id="salvaBtn" @click='populate()'>Salva Anamnesi</button>
        </div>
        <div class="col-lg-4 text-left">
          <a href="travaglio.php" id="avantiBtn" class="btn btn-primary">Salva e continua</a>
        </div>
      </div>

    </form>

  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="scripts.js"></script>

  <script>
    var idmMadreFromUrl = getAllUrlParams().idm;
    var idmPartoFromUrl = getAllUrlParams().idp;
    console.log("Url parameter idm: " + idmMadreFromUrl);
    var app = new Vue({
      el: '#datiAnamnesiForm',
      components: {
        vuejsDatepicker
      },
      
      beforeMount(){
        console.log("idmMadreFromUrl: " + idmMadreFromUrl)
        console.log("idmPartoFromUrl: " + idmPartoFromUrl)
        if(idmMadreFromUrl!=undefined) {
          this.populate(idmMadreFromUrl)
        }
      },

      methods : {
        processForm: function() {
          var madreDaInserire = "madre da inserire";
          console.log({ inputNome: this.madre.inputNome, inputCognome: this.madre.inputCognome, inputDataNascita: this.madre.inputDataNascita });
        },

        allRecords: function(){
          axios.post('ajaxfile.php', {
            request: 1
          })
          .then(function (response) {
            console.log("sono nel .then")
            app.madre = response.data;
            console.log(app.madre);
          })
          .catch(function (error) {
            console.log(error);
          });
        },

        populate: function(idmMadreFromUrl){
          axios.post('ajaxfile.php', {
            request: 5,
            idm: idmMadreFromUrl
          })
          .then(function(response) {
            console.log(response.data[0]);
            this.app.madre.inputNome = response.data[0].nome;
            this.app.madre.inputCognome = response.data[0].cognome;
            this.app.madre.inputCognomeAcq = response.data[0].cognome_acquisito;
            this.app.madre.inputCodiceFiscale = response.data[0].codice_fiscale;
            this.app.madre.inputSDO = response.data[0].sdo;
            this.app.madre.inputDataNascita = response.data[0].data_nascita;
            this.app.madre.inputComuneNascita = response.data[0].comune_nascita;
            this.app.madre.inputCittadinanza = response.data[0].cittadinanza;
          })
          .catch(function(error) {
            console.log(error);
          });
        },

        addRecord: function(){
          if(this.madre.inputNome != '' && this.madre.inputCognome != '' && this.madre.inputCognomeAcq != '') {
            axios.post('ajaxfile.php', {
              request: 2,
              nome: this.madre.inputNome,
              cognome: this.madre.inputCognome,
              cognome_acquisito: this.madre.inputCognomeAcq,
              codice_fiscale: this.madre.inputCodiceFiscale,
              sdo : this.madre.inputSDO,
              data_nascita : this.madre.inputDataNascita,
              comune_nascita: this.madre.inputComuneNascita,
              cittadinanza: this.madre.inputCittadinanza
            })
            .then(function (response) {

              // Fetch records
              app.allRecords();

              // Empty values
              app.username = '';
              app.name = '';
              app.email = '';

              alert(response.data);
            })
            .catch(function (error) {
              console.log(error);
            });
          } else{
            alert('Riempire i campi contrassegnati con "*"');
          }

        },
      },
      data: {
          madre : 
          {
            inputNome : "Noaaaaaaame",
            inputCognome : "Cognome",
            inputCognomeAcq : "Cognome acquisito",
          }
      }
  })
  </script>

</body>

</html>
