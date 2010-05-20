jQuery(document).ready(function($) {
  $('#hb-searchinput').val('search for...');
  $('#hb-searchinput').focus(onInputFocus).blur(onInputBlur);
  $('#content .tabbox').each(mcsTBInit);
});

/* Boxes */
function onInputFocus(e) {
  var elem = e.target
  var modified = elem.getAttribute('modified');
  if (modified != 'true') {
    elem.setAttribute('modified', 'true');
    elem.setAttribute('initstate', elem.value)
    elem.value = '';
  }
}

function onInputBlur(e) {
  var elem = e.target
  var value = elem.value.replace(/^\s+|\s+$/g, '');
  if (value.length == 0) {
    elem.value = elem.getAttribute('initstate');
    elem.setAttribute('modified', 'false');
  }
}

/* tabbox */

/*
  This function displays given tab

  handler - handler to tabbox or event object
  num - card you want to switch to
*/
function mcsTBSelectTab(handler, num, instant) {
  if (num !== undefined) {
    var tabbox = $(handler);
    var num = parseInt(num);
  } else {
    var tabbox = $(handler.target).parent().parent();
    var num = parseInt($(handler.target).attr('mcsTBi'));
  }

  var oldnum = parseInt(tabbox.attr('mcsTBindex'));
  if (oldnum === num)
    return true;

  if (oldnum !== null)
    tabbox.children().slice(1,2).children().slice(oldnum,oldnum+1).fadeOut('fast');
  tabbox.attr('mcsTBindex', num);

  var newheight = $(tabbox).children().slice(1,2).children().slice(num,num+1).height();

  if (instant) {
    tabbox.children().slice(1,2).height(newheight+30);
    tabbox.children().slice(1,2).children().slice(num,num+1).css("display","block");
  }
  else {
    tabbox.children().slice(1,2).animate({'height':newheight+30}, 'fast');
    tabbox.children().slice(1,2).children().slice(num,num+1).fadeIn('fast'); // how the hell can I get single, selected children?
  }

  tabbox.children().slice(0,1).children().slice(num,num+1).addClass('current');
  tabbox.children().slice(0,1).children().slice(oldnum,oldnum+1).removeClass('current');
}

/*
  This function attaches event listeners to tab buttons
*/
function mcsTBInit() {
  var tabbox = $(this);
  tabbox.children().slice(0,1)
          .children()
          .each(function(i){
            $(this).click(mcsTBSelectTab);
            $(this).attr('mcsTBi',i);
           }
          );
  mcsTBSelectTab(this, 0, true)
}
