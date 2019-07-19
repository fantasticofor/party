function getAllUrlParams(url) {

    // get query string from url (optional) or window
    var queryString = url ? url.split('?')[1] : window.location.search.slice(1);
  
    // we'll store the parameters here
    var obj = {};
  
    // if query string exists
    if (queryString) {
  
      // stuff after # is not part of query string, so get rid of it
      queryString = queryString.split('#')[0];
  
      // split our query string into its component parts
      var arr = queryString.split('&');
  
      for (var i = 0; i < arr.length; i++) {
        // separate the keys and the values
        var a = arr[i].split('=');
  
        // set parameter name and value (use 'true' if empty)
        var paramName = a[0];
        var paramValue = typeof (a[1]) === 'undefined' ? true : a[1];
  
        // (optional) keep case consistent
        paramName = paramName.toLowerCase();
        if (typeof paramValue === 'string') paramValue = paramValue.toLowerCase();
  
        // if the paramName ends with square brackets, e.g. colors[] or colors[2]
        if (paramName.match(/\[(\d+)?\]$/)) {
  
          // create key if it doesn't exist
          var key = paramName.replace(/\[(\d+)?\]/, '');
          if (!obj[key]) obj[key] = [];
  
          // if it's an indexed array e.g. colors[2]
          if (paramName.match(/\[\d+\]$/)) {
            // get the index value and add the entry at the appropriate position
            var index = /\[(\d+)\]/.exec(paramName)[1];
            obj[key][index] = paramValue;
          } else {
            // otherwise add the value to the end of the array
            obj[key].push(paramValue);
          }
        } else {
          // we're dealing with a string
          if (!obj[paramName]) {
            // if it doesn't exist, create property
            obj[paramName] = paramValue;
          } else if (obj[paramName] && typeof obj[paramName] === 'string'){
            // if property does exist and it's a string, convert it to an array
            obj[paramName] = [obj[paramName]];
            obj[paramName].push(paramValue);
          } else {
            // otherwise add the property
            obj[paramName].push(paramValue);
          }
        }
      }
    }
  
    return obj;
  };

$( "#inputNumeroFeti" ).change(function() {
    $inputVal = $("#inputNumeroFeti").val();
    $("#numFetiRow").html(
        '<div class="form-group col-auto">\n\
        <label for="inputPresFetale1">Presentazione fetale 1</label>\n\
        <select class="form-control gravMultiplRow" id="inputPresFetale1" name="inputPresFetale1">\n\
        <option selected value="1001">Cefalico</option>\n\
        <option value="1002">Podalico</option>\n\
        <option value="1003">Situazione trasversa</option>\n\
        <option value="1004">Obliquo</option>\n\
        </select>\n\
    </div>');


    for (i = 2; i <=$inputVal; i++) {
        $("#numFetiRow").append(
            '<div class="form-group col-auto">\n\
            <label for="inputPresFetale'+i+'">Presentazione fetale '+i+'</label>\n\
            <select class="form-control gravMultiplRow" id="inputPresFetale'+i+'" name="inputPresFetale'+i+'">\n\
            <option selected value="'+i+'001">Cefalico</option>\n\
            <option value="'+i+'002">Podalico</option>\n\
            <option value="'+i+'003">Situazione trasversa</option>\n\
            <option value="'+i+'004">Obliquo</option>\n\
            </select>\n\
        </div>');
    }
});

function checkGravMultipl() {
    if($('#customCheck1:checkbox:checked').length > 0)
        $('.gravMultiplRow').prop('disabled', false);
    else
        $('.gravMultiplRow').prop('disabled', true);
};

//enableDisabledGroup
function enableInputGroup(e, classToEnable) {
    if(e.checked)
        $('.'+classToEnable).prop('disabled', false);
    else
        $('.'+classToEnable).prop('disabled', true);
};

//aggiorna valore empatia ostetrica
function updateEmpatiaVal(empVal) {
    $("#empatiaVal").html(empVal);
};

//selezionata la rottura delle mambrane attiva/disattiva i div
function inputRotturaSelected(empVal) {
    if(this.value==1) {
        $('#dilatazRotturaMembr').collapse("hide");
        $('#dataOraRotturaMembr').collapse("show");
    }
    else {
        $('#dilatazRotturaMembr').collapse("show");
        $('#dataOraRotturaMembr').collapse("hide");
    }
};

//Show-Hide Divs
$('#inputInsorgTravaglio').on('change', function (e) {
    if(this.value==1) {
        $('#justIfIndotto').collapse("hide");
        $('#autonomiaOstetricaGroup').collapse("show");
    }
    else if(this.value==2) {
        console.log("2!!!!!!!!");
        $('#justIfIndotto').collapse("show");
        $('#autonomiaOstetricaGroup').collapse("hide");
    }
    else if(this.value==3) {
        console.log("3!!!!!!!!");
        $('#justIfIndotto').collapse("hide");
        $('#autonomiaOstetricaGroup').collapse("hide");
    }
});

$('input:radio[name="autonomiaOstetrica"]').change(
function(){
    if ($(this).is(':checked') && $(this).val() == 'autonomOstSi')
        $('#inputRischioOstetrica').collapse("hide");
    else
        $('#inputRischioOstetrica').collapse("show");
});

$('#inputComplInduz').on('change', function (e) {
    //se viene selezinoato "Altro" mostra input testo
    if(this.value==4)
    $('#divAltreComplicanze').collapse("show");
    else
    $('#divAltreComplicanze').collapse("hide");
});


//Accordions
$('#datiMadreDiv').on('hide.bs.collapse', function () {
    $('#datiMadreDivToggle').html('+');
    $('#datiMadreDivButton').button('toggle');
});
$('#datiMadreDiv').on('show.bs.collapse', function () {
    $('#datiMadreDivToggle').html('-');
    $('#datiMadreDivButton').button('toggle');
});
$('#datiPartoDiv').on('hide.bs.collapse', function () {
    $('#datiPartoDivToggle').html('+');
    $('#datiPartoDivButton').button('toggle');
});
$('#datiPartoDiv').on('show.bs.collapse', function () {
    $('#datiPartoDivToggle').html('-');
    $('#datiPartoDivButton').button('toggle');
});
$('#datiGravPrecDiv').on('hide.bs.collapse', function () {
    $('#datiGravPrecDivToggle').html('+');
    $('#datiGravPrecDivButton').button('toggle');
});
$('#datiGravPrecDiv').on('show.bs.collapse', function () {
    $('#datiGravPrecDivToggle').html('-');
    $('#datiGravPrecDivButton').button('toggle');
});
$('#datiGravAttDiv').on('hide.bs.collapse', function () {
    $('#datiGravAttDivToggle').html('+');
    $('#datiGravAttDivButton').button('toggle');
});
$('#datiGravAttDiv').on('show.bs.collapse', function () {
    $('#datiGravAttDivToggle').html('-');
    $('#datiGravAttDivButton').button('toggle');
});
