(function ($,jQuery) {
  $(document).ready(function(){

var fieldTitle = $('#edit-title-0-value');
var fieldCategory = $('#edit-field-event-category-tags-');
var fieldAges = $('#edit-field-event-recommended-ages');
var fieldStart = $('#edit-field-slr-time-start-0-value-date');
var fieldStartTime = $('#edit-field-slr-time-start-0-value-time');
var fieldEndTime = $('#edit-field-slr-time-end-0-value-time');
var fieldLoc = $('#edit-field-event-loc');
var fieldAud29 = $('#edit-field-cat-ia-29');
var fieldAud32 = $('#edit-field-cat-ia-32');
var fieldAud31 = $('#edit-field-cat-ia-31');





var prevEvent = $('<div></div>');
prevEvent.attr('id','prevEvent');

var prevTitle = $('<h1>' + fieldTitle.val() + '</h1>');
prevTitle.attr('id','prevTitle');

var prevSummary = $('<div></div>');
prevSummary.attr('id','prevSummary');

function getSummary() {
    console.log('getting summary')
$('#prevCat').html('<a href="#">' + $('#edit-field-event-category-tags- option:selected').text() + '</a>');
$.getJSON( "/event_tag_summary.json?tid=" + fieldCategory.val(), function( data ) {

    $.each(data, function(key, val) { 
    $('#prevSummary').html(val.description);
    });

});
}

getSummary()

var prevAges = $('<div></div>');
prevAges.attr('id','prevAges');

function getAges() {

var fieldAgesSelected = $('#edit-field-event-recommended-ages option:selected');
if(fieldAgesSelected.val() == '_none') {
  prevAges.html(' ');
} else {
  prevAges.html(fieldAgesSelected.text());
}
}
getAges()


var prevDate = $('<div><i class="material-icons-outlined">schedule</i><div><span id="prevDateDate"></span> - <span id="prevDateTime"></span> <span id="prevDateTime2"></span></div></div>');
prevDate.attr('id','prevDate');

var prevLoc = $('<div><i class="material-icons-outlined">place</i><div id="prevLoc"></div>');

var prevFree = $('<div>Free and open to the public | Gratis y abierto al público</div>');

var prevTags = $('<div>Tags:<span id="aud29"></span> <span id="aud32"></span> <span id="aud31"></span> <span id="prevCat"></span> <span id="prevTag"></span></div>');
prevTags.attr('id','prevTags');



$(prevEvent).insertBefore(".layout-region--node-footer");
$(prevEvent).append(prevTitle);
$(prevEvent).append(prevSummary);
$(prevEvent).append(prevAges);
$(prevEvent).append(prevDate);
$(prevEvent).append(prevLoc);
$(prevEvent).append(prevFree);
$(prevEvent).append(prevTags);



fieldTitle.change(function() {
  $('#prevTitle').html(fieldTitle.val());
});

fieldCategory.change(function() { getSummary() });

fieldAges.change(function() {

getAges()

});
function getAud29() {
console.log('getting Aud 29')
    if($('#edit-field-cat-ia-29:checked').length) {
        $('#aud29').html('<a href="#">Adult</a>');
    } else {
        $('#aud29').html(' ');
    }
}

function getAud32() {
console.log('getting Aud 32')
    if($('#edit-field-cat-ia-32:checked').length) {
        $('#aud32').html('<a href="#">Children</a>');
    } else {
        $('#aud32').html(' ');
    }
}

function getAud31() {
console.log('getting Aud 31')
    if($('#edit-field-cat-ia-31:checked').length) {
        $('#aud31').html('<a href="#">Teen</a>');
    } else {
        $('#aud31').html(' ');
    }
}

getAud29()

fieldAud29.change(function() {

getAud29()

});

getAud32()

fieldAud32.change(function() {

getAud32()

});

getAud31()

fieldAud31.change(function() {

getAud31()

});
function getDate() {
var myDate = dayjs(fieldStart.val()).format('dddd, MMMM D, YYYY');
  $('#prevDateDate').html(myDate);
}
getDate()

fieldStart.change(function() {
getDate()
});
function getStartTime() {
var myTime = dayjs(fieldStart.val() + ' ' + fieldStartTime.val()).format('h:mm A');
  $('#prevDateTime').html(myTime);
}
getStartTime()
fieldStartTime.change(function() {
getStartTime()
});
function getEndTime (){
var myTime2 = dayjs(fieldStart.val() + ' ' + fieldEndTime.val()).format('h:mm A');
  $('#prevDateTime2').html(' to ' + myTime2);
}
getEndTime()
fieldEndTime.change(function() {
getEndTime()
});

fieldLoc.change(function() {
  myLoc = fieldLoc.val();
  console.log('Location changed:' + myLoc);
  var loc = '';
  switch(myLoc) {
   case "3939": 
   	loc = 'Central Library, 710 W. César Chávez St.';
       break;
   case "194": 
   	loc = 'Carver Branch, 1161 Angelina St. ';
       break;
   case "186": 
   	loc = 'Cepeda Branch, 651 N. Pleasant Valley Rd.';
       break;
   case "195": 
   	loc = 'Hampton Branch at Oak Hill, 5125 Convict Hill Rd.';
       break;
   case "196": 
   	loc = 'Howson Branch, 2500 Exposition Blvd.';
       break;
   case "197": 
   	loc = 'Little Walnut Creek Branch, 835 W. Rundberg Ln.';
       break;
   case "198": 
   	loc = 'Menchaca Road Branch, 5500 Menchaca Rd.';
       break;
   case "199": 
   	loc = 'Milwood Branch, 12500 Amherst Dr.';
       break;
   case "200": 
   	loc = 'North Village Branch, 2505 Steck Ave.';
       break;
   case "202": 
   	loc = 'Old Quarry Branch, 7051 Village Center Dr.';
       break;
   case "4999": 
   	loc = 'Online Event';
       break;
   case "203": 
   	loc = 'Pleasant Hill Branch, 211 E. William Cannon Dr.';
       break;
   case "205": 
   	loc = 'Ruiz Branch, 1600 Grove Blvd.';
       break;
   case "208": 
   	loc = 'Spicewood Springs Branch, 8637 Spicewood Springs Rd.';
       break;
   case "209": 
   	loc = 'Terrazas Branch, 1105 E. César Chávez St.';
       break;
   case "210": 
   	loc = 'Twin Oaks Branch, 1800 S. Fifth St.';
       break;
   case "185": 
   	loc = 'University Hills Branch, 4721 Loyola Ln.';
       break;
   case "201": 
   	loc = 'Willie Mae Kirk Branch, 3101 Oak Springs Dr.';
       break;
   case "184": 
   	loc = 'Windsor Park Branch, 5833 Westminster Dr.';
       break;
   case "211": 
   	loc = 'Yarborough Branch, 2200 Hancock Dr.';
       break;
  }
  $('#prevLoc').html(loc);
});


 
 


$('#edit-group-movie').css('display','none');
$('#edit-field-central-event-location-wrapper').css('display','none');
$('#edit-field-event-loc').change(function() {
  if($( this ).val() == '3939') {
    $('#edit-field-central-event-location-wrapper').css('display','block');
  } else {
    $('#edit-field-central-event-location-wrapper').css('display','none');
  }
});
$('#edit-field-event-category-tags-').change(function() {
  if($( this ).val() == '1993' || $( this ).val() == '2126') {
    $('#edit-group-movie').css('display','block');
  } else {
    $('#edit-group-movie').css('display','none');
  }
});
$( '.node-form' ).submit(function(e) {
	  var titlee = $('#edit-title-0-value').val();

if(document.getElementById('edit-field-canceled-value').checked) {
  console.log('checked');
  console.log(titlee);
  titlee = titlee.replace("Canceled - ", "");
  console.log(titlee);
  titlee = 'Canceled - ' + titlee;
  console.log(titlee);
  $('#edit-title-0-value').val(titlee);

} else {
  console.log('not checked'); 
  console.log(titlee);
  titlee = titlee.replace("Canceled - ", "");
  console.log(titlee);
  $('#edit-title-0-value').val(titlee);
}

  if($('#edit-field-event-loc').val() == '_none') {
  	if(!$('#edit-field-remote-location-0-target-id').val()){
 	 	alert('Please select a Location or add a Remote Location');
 	 	e.preventDefault();
  	}
  } else {
	  	return;
  }
});

});
})(jQuery);

