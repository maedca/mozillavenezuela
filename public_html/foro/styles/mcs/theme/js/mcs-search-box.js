jQuery(document).ready(function($) {
  $('#hb-searchinput').attr('autocomplete', 'off');
  createSearchBox();
  $('#hb-searchinput').keyup(onSearchBoxKeyPressed).focus(onSearchBoxActive).blur(onSearchBoxBlur);
});


function createSearchBox() {
  jQuery.create('ul' ,
           {'id': 'mcs-search-box', 'class': 'mcs-search-box'}
          )
          .appendTo('body')
}

function onSearchBoxKeyPressed(e) {
  var value = jQuery('#hb-searchinput')[0].value
  if (value.length > 5) {
    var pos = jQuery('#hb-searchinput').position()
    jQuery('#mcs-search-box').css({"top": (pos.top+27)+'px', "left": (pos.left-20)+'px'})
    searchBoxToggle(true);
    startSearch(value);
  } else {
    searchBoxToggle(false);
  }
}

function searchBoxToggle(open, callback) {
  if (open) {
    if (jQuery('#mcs-search-box')[0].getAttribute('vis') != 'true') {
      jQuery('#mcs-search-box')[0].setAttribute('vis', 'true');
      jQuery('#mcs-search-box').fadeIn('fast');
    }
  } else {
    if (jQuery('#mcs-search-box')[0].getAttribute('vis') != 'false') {
      jQuery('#mcs-search-box')[0].setAttribute('vis', 'false');
      jQuery('#mcs-search-box').fadeOut('fast');
    }
  }
}

function onSearchBoxActive(e) {
  onInputFocus(e);
  var value = jQuery('#hb-searchinput')[0].value
  if (value.length > 5) {
    searchBoxToggle(true);
  }
}

function onSearchBoxBlur(e) {
  jQuery('#mcs-search-box').fadeOut('fast');
  jQuery('#mcs-search-box')[0].setAttribute('vis', 'false');
  onInputBlur(e);  
}

var Inter = null;
var searchc = null;

function startSearch() {
  searchc = Array('Mozilla ico busca logotipo', 'Firefox 3.0 released in ab-CD', 'How to build a new toolbar', 'Where is my mind?', 'Installing Thunderbird 3.0 on Mac');
  jQuery('#mcs-search-box').empty();
  jQuery('#hb-searchinput').addClass('working');
  setTimeout(showResults, 1000);
}

function showResults () {
  if (Inter)
    Inter = clearTimeout(Inter);
  Inter = setTimeout(showResults2, 400);
}

function showResults2 () {
  var elem = searchc.pop();
  addEntry(elem, '#');
  if (searchc.length == 0) {
    jQuery('#hb-searchinput').removeClass('working');
    Inter = clearTimeout(Inter);
    addEntry('find more »', '#', 'more');
  } else {
    Inter = setTimeout(showResults2, 50+Math.floor(Math.random()*300));
  }
}

function addEntry (val, url, cl) {
  if (cl)
    jQuery.create('li',{'class': cl}, jQuery.create('a', {'href': url}, val)).appendTo(jQuery('#mcs-search-box')).fadeIn('fast')
  else
    jQuery.create('li',{}, jQuery.create('a', {'href': url}, val)).appendTo(jQuery('#mcs-search-box')).fadeIn('fast')
}
