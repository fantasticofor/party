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
        $active_tab = 'Padre';
        require("inc_tabbednav.php")
    ?>

    <div class="row pt-3">
      <div class="col-lg-12">
        <h2>Inserisci i dati del padre</h2>
      </div>
    </div>
    <form id="datiMadreForm">
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputNome">Nome</label>
          <input type="text" class="form-control" id="inputNome" placeholder="Nome (max 20 caratteri)">
        </div>
        <div class="form-group col-md-4">
          <label for="inputCognome">Cognome</label>
          <input type="text" class="form-control" id="inputCognome" placeholder="Cognome da Nubile (max 30 caratteri)">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-lg-6">
          <label for="inputCodiceFiscale">Codice Fiscale</label>
          <input type="text" class="form-control" id="inputCodiceFiscale" placeholder="Codice Fiscale">
        </div>
        <div class="form-group col-lg-6">
          <label for="inputSDO">SDO</label>
          <input type="text" class="form-control" id="inputSDO" placeholder="numero Scheda di Dimissione Ospedaliera">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-2">
          <label for="inputDataNascita">Data di nascita</label>
          <input type="text" id="inputDataNascita" class="form-control calendario">
          <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
          </div>
        </div>

        <div class="form-group col-md-3">
          <label for="inputComuneNascita">comuneNascita</label>
          <select class="form-control" id="inputComuneNascita">
            <option value="1001">Agliè</option>
            <option value="1002">Airasca</option>
            <option value="1003">Ala di Stura</option>
            <option value="1004">Albiano d'Ivrea</option>
            <option value="1006">Almese</option>
            <option value="1007">Alpette</option>
            <option value="1008">Alpignano</option>
            <option value="1009">Andezeno</option>
            <option value="1010">Andrate</option>
            <option value="1011">Angrogna</option>
            <option value="1012">Arignano</option>
            <option value="1013">Avigliana</option>
            <option value="1014">Azeglio</option>
            <option value="1015">Bairo</option>
            <option value="1016">Balangero</option>


            <option value="999999">.........</option>

            <option value="111096">Villacidro</option>
            <option value="111097">Villamar</option>
            <option value="111098">Villamassargia</option>
            <option value="111099">Villanova Tulo</option>
            <option value="111100">Villanovaforru</option>
            <option value="111101">Villanovafranca</option>
            <option value="111102">Villaperuccio</option>
            <option value="111103">Villaputzu</option>
            <option value="111104">Villasalto</option>
            <option value="111105">Villasimius</option>
            <option value="111106">Villasor</option>
            <option value="111107">Villaspeciosa</option>
          </select>
        </div>
      <div class="form-group col-md-3">
        <label for="inputCittadinanza">Nazione cittadinanza</label>
        <select class="form-control" id="inputCittadinanza">
          <option value="100">Italia</option>
          <option value="201">Albania</option>
          <option value="202">Andorra</option>
          <option value="203">Austria</option>
          <option value="206">Belgio</option>
          <option value="209">Bulgaria</option>
          <option value="212">Danimarca</option>
          <option value="214">Finlandia</option>
          <option value="215">Francia</option>
          <option value="216">Germania</option>
          <option value="219">Regno Unito</option>
          <option value="220">Grecia</option>
          <option value="221">Irlanda</option>
          <option value="223">Islanda</option>
          <option value="225">Liechtenstein</option>
          <option value="226">Lussemburgo</option>
          <option value="227">Malta</option>
          <option value="229">Monaco</option>
          <option value="231">Norvegia</option>
          <option value="232">Paesi Bassi</option>
          <option value="233">Polonia</option>
          <option value="234">Portogallo</option>
          <option value="235">Romania</option>
          <option value="236">San Marino</option>
          <option value="239">Spagna</option>
          <option value="240">Svezia</option>
          <option value="241">Svizzera</option>
          <option value="243">Ucraina</option>
          <option value="244">Ungheria</option>
          <option value="245">Federazione russa</option>
          <option value="246">Stato della Città del Vaticano</option>
          <option value="247">Estonia</option>
          <option value="248">Lettonia</option>
          <option value="249">Lituania</option>
          <option value="250">Croazia</option>
          <option value="251">Slovenia</option>
          <option value="252">Bosnia-Erzegovina</option>
          <option value="253">Ex Repubblica Jugoslava di Macedonia</option>
          <option value="254">Moldova</option>
          <option value="255">Slovacchia</option>
          <option value="256">Bielorussia</option>
          <option value="257">Repubblica ceca</option>
          <option value="270">Montenegro</option>
          <option value="271">Serbia</option>
          <option value="272">Kosovo</option>
          <option value="301">Afghanistan</option>
          <option value="302">Arabia Saudita</option>
          <option value="304">Bahrein</option>
          <option value="305">Bangladesh</option>
          <option value="306">Bhutan</option>
          <option value="307">Myanmar/Birmania</option>
          <option value="309">Brunei Darussalam</option>
          <option value="310">Cambogia</option>
          <option value="311">Sri Lanka</option>
          <option value="314">Cina</option>
          <option value="315">Cipro</option>
          <option value="319">Corea del Nord</option>
          <option value="320">Corea del Sud</option>
          <option value="322">Emirati Arabi Uniti</option>
          <option value="323">Filippine</option>
          <option value="324">Palestina</option>
          <option value="326">Giappone</option>
          <option value="327">Giordania</option>
          <option value="330">India</option>
          <option value="331">Indonesia</option>
          <option value="332">Iran</option>
          <option value="333">Iraq</option>
          <option value="334">Israele</option>
          <option value="335">Kuwait</option>
          <option value="336">Laos</option>
          <option value="337">Libano</option>
          <option value="338">Timor Leste</option>
          <option value="339">Maldive</option>
          <option value="340">Malaysia</option>
          <option value="341">Mongolia</option>
          <option value="342">Nepal</option>
          <option value="343">Oman</option>
          <option value="344">Pakistan</option>
          <option value="345">Qatar</option>
          <option value="346">Singapore</option>
          <option value="348">Siria</option>
          <option value="349">Thailandia</option>
          <option value="351">Turchia</option>
          <option value="353">Vietnam</option>
          <option value="354">Yemen</option>
          <option value="356">Kazakhstan</option>
          <option value="357">Uzbekistan</option>
          <option value="358">Armenia</option>
          <option value="359">Azerbaigian</option>
          <option value="360">Georgia</option>
          <option value="361">Kirghizistan</option>
          <option value="362">Tagikistan</option>
          <option value="363">Taiwan</option>
          <option value="364">Turkmenistan</option>
          <option value="401">Algeria</option>
          <option value="402">Angola</option>
          <option value="404">Costa d'Avorio</option>
          <option value="406">Benin</option>
          <option value="408">Botswana</option>
          <option value="409">Burkina Faso</option>
          <option value="410">Burundi</option>
          <option value="411">Camerun</option>
          <option value="413">Capo Verde</option>
          <option value="414">Repubblica Centrafricana</option>
          <option value="415">Ciad</option>
          <option value="417">Comore</option>
          <option value="418">Congo</option>
          <option value="419">Egitto</option>
          <option value="420">Etiopia</option>
          <option value="421">Gabon</option>
          <option value="422">Gambia</option>
          <option value="423">Ghana</option>
          <option value="424">Gibuti</option>
          <option value="425">Guinea</option>
          <option value="426">Guinea-Bissau</option>
          <option value="427">Guinea equatoriale</option>
          <option value="428">Kenya</option>
          <option value="429">Lesotho</option>
          <option value="430">Liberia</option>
          <option value="431">Libia</option>
          <option value="432">Madagascar</option>
          <option value="434">Malawi</option>
          <option value="435">Mali</option>
          <option value="436">Marocco</option>
          <option value="437">Mauritania</option>
          <option value="438">Maurizio</option>
          <option value="440">Mozambico</option>
          <option value="441">Namibia</option>
          <option value="442">Niger</option>
          <option value="443">Nigeria</option>
          <option value="446">Ruanda</option>
          <option value="448">Sao Tomé e Principe</option>
          <option value="449">Seychelles</option>
          <option value="450">Senegal</option>
          <option value="451">Sierra Leone</option>
          <option value="453">Somalia</option>
          <option value="454">Sudafrica</option>
          <option value="455">Sudan</option>
          <option value="456">Eswatini</option>
          <option value="457">Tanzania</option>
          <option value="458">Togo</option>
          <option value="460">Tunisia</option>
          <option value="461">Uganda</option>
          <option value="463">Repubblica Democratica del Congo</option>
          <option value="464">Zambia</option>
          <option value="465">Zimbabwe</option>
          <option value="466">Eritrea</option>
          <option value="467">Sud Sudan</option>
          <option value="503">Antigua e Barbuda</option>
          <option value="505">Bahamas</option>
          <option value="506">Barbados</option>
          <option value="507">Belize</option>
          <option value="509">Canada</option>
          <option value="513">Costa Rica</option>
          <option value="514">Cuba</option>
          <option value="515">Dominica</option>
          <option value="516">Repubblica Dominicana</option>
          <option value="517">El Salvador</option>
          <option value="518">Giamaica</option>
          <option value="519">Grenada</option>
          <option value="523">Guatemala</option>
          <option value="524">Haiti</option>
          <option value="525">Honduras</option>
          <option value="527">Messico</option>
          <option value="529">Nicaragua</option>
          <option value="530">Panama</option>
          <option value="532">Santa Lucia</option>
          <option value="533">Saint Vincent e Grenadine</option>
          <option value="534">Saint Kitts e Nevis</option>
          <option value="536">Stati Uniti d'America</option>
          <option value="602">Argentina</option>
          <option value="604">Bolivia</option>
          <option value="605">Brasile</option>
          <option value="606">Cile</option>
          <option value="608">Colombia</option>
          <option value="609">Ecuador</option>
          <option value="612">Guyana</option>
          <option value="614">Paraguay</option>
          <option value="615">Perù</option>
          <option value="616">Suriname</option>
          <option value="617">Trinidad e Tobago</option>
          <option value="618">Uruguay</option>
          <option value="619">Venezuela</option>
          <option value="701">Australia</option>
          <option value="703">Figi</option>
          <option value="708">Kiribati</option>
          <option value="712">Isole Marshall</option>
          <option value="713">Stati Federati di Micronesia</option>
          <option value="715">Nauru</option>
          <option value="719">Nuova Zelanda</option>
          <option value="720">Palau</option>
          <option value="721">Papua Nuova Guinea</option>
          <option value="725">Isole Salomone</option>
          <option value="727">Samoa</option>
          <option value="730">Tonga</option>
          <option value="731">Tuvalu</option>
          <option value="732">Vanuatu</option>
          <option value="718">Nuova Caledonia</option>
          <option value="542">Saint-Martin (FR)</option>
          <option value="n.d.">Sahara occidentale</option>
          <option value="541">Saint-Barthélemy</option>
          <option value="508">Bermuda</option>
          <option value="702">Isole Cook (NZ)</option>
          <option value="218">Gibilterra</option>
          <option value="511">Isole Cayman</option>
          <option value="502">Anguilla</option>
          <option value="724">Polinesia francese</option>
          <option value="213">Isole Fær Øer</option>
          <option value="273">Jersey</option>
          <option value="603">Aruba</option>
          <option value="621">Sint Maarten (NL)</option>
          <option value="520">Groenlandia</option>
          <option value="n.d.">Sark</option>
          <option value="274">Guernsey</option>
          <option value="610">Isole Falkland (Malvine)</option>
          <option value="228">Isola di Man</option>
          <option value="528">Montserrat</option>
          <option value="620">Curaçao</option>
          <option value="723">Isole Pitcairn</option>
          <option value="535">Saint Pierre e Miquelon</option>
          <option value="447">Sant'Elena</option>
          <option value="806">Terre australi e antartiche francesi</option>
          <option value="537">Isole Turks e Caicos</option>
          <option value="539">Isole Vergini britanniche</option>
          <option value="734">Wallis e Futuna</option>
        </select>
      </div>
      </div>
      
      <div class="row">
        <div class="col-lg-4 text-left">
          <button type="submit" class="btn btn-primary disabled">Indietro</button>
        </div>
        <div class="col-lg-4 text-center">
          <button type="submit" class="btn btn-primary">Salva</button>
        </div>
        <div class="col-lg-4 text-right">
          <button type="submit" class="btn btn-primary">Salva e continua</button>
        </div>
      </div>
    </form>

  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="scripts.js"></script>

</body>

</html>
