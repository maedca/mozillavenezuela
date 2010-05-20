jQuery(document).ready(function($) {
  createLoginBox('testuser');
  loginType('login');
  $('.mct-login-box-activator').click(onLoginBoxActivatorClick);
});

function createLoginBox(username) {
  $ = jQuery.create;
  $('div',
    {'id': 'mcs-login-box', 'class': 'mcs-login-box'},
    Array($('div',
            {'class': 'login'},
            $('form',
              {'method': 'post', 'action': '#', 'id': 'mcs-login-box-form', 'name': 'loginform'},
              Array($('p',
                      {'class': 'openid'},
                      Array($('input',
                              {'type': 'checkbox', 'id': 'mcs-loginbox-openid-checkbox'}
                              ).click(loginTypeOpenID),
                            $('label',
                              {'for': 'mcs-loginbox-openid-checkbox'},
                              'OpenID'
                              )
                            )
                      ),
                    $('p',
                      {'class': 'normal-login'},
                      Array($('input',
                              {'type': 'text', 'id': 'mcs-login-box-name', 'name': 'log', 'value': 'username'}
                              ).focus(onInputFocus).blur(onInputBlur),
                            $('input',
                              {'type': 'password', 'id': 'mcs-login-box-pass', 'name': 'pwd', 'value': 'password'}
                              ).focus(onInputFocus).blur(onInputBlur)
                            )
                      ),
                    $('p',
                      {'class': 'openid-login'},
                      Array($('input',
                              {'type': 'text', 'id': 'mcs-login-box-openid', 'name': 'openid_identifier', 'value': 'http://'}
                              )
                            )
                      ),
                    $('a', {'class': 'create-account'}, 'create account'),
                    $('div', {'class': 'button'}, 'ok').click(onLoginBoxOkClicked),
                    $('input', {'type': 'hidden', 'name': 'redirect_to', 'value': 'http://www.onet.pl'}),
                    $('input', {'type': 'hidden', 'name': 'testcookie', 'value': '1'}),
                    $('input', {'type': 'submit', 'id': 'wp-submit', 'name': 'wp-submit', 'value': 'Log In', 'class': 'submit'}),
                    $('input', {'type': 'hidden', 'name': 'rememberme', 'value': 'forever'}),
                    $('div', {'class': 'working-icon'}, $('img', {'src': './img/loading-anim.gif', 'alt': 'Loading...'}))
                  )
            )
          ),
          $('div',
            {'class': 'logout'},
            Array($('p',
                    {},
                    Array(
                          'you\'re logged in as ',
                          $('span',{'class':'username'}, username)
                          )
                    ),
                  $('button', {}, 'logout').click(onLoginBoxLogoutClicked)
                 )
            )
          )
  ).appendTo('body')
}

function loginType(type) {
  $ = jQuery;
  switch (type) {
    case 'login':
      $('#mcs-login-box > .logout').addClass('hide');
      $('#mcs-login-box > .login').removeClass('hide');
      $('#mcs-login-box').css({'height': '85px'});
      break;
    case 'logout':
      $('#mcs-login-box > .login').addClass('hide');
      $('#mcs-login-box > .logout').removeClass('hide');
      $('#mcs-login-box').css({'height': '65px'});
      break;
  }
}

function loginTypeOpenID(e) {
  if (jQuery('#mcs-login-box > .login .openid').hasClass('current')) {
    jQuery('#mcs-login-box > .login .openid-login').slideUp('fast');
    jQuery('#mcs-login-box > .login .normal-login').slideDown('slow');
    jQuery('#mcs-login-box').animate({'height': '85px'}, 'slow');
    jQuery('#mcs-login-box > .login .openid').removeClass('current');
    jQuery('#mcs-loginbox-openid-checkbox').blur();
  } else {
    jQuery('#mcs-login-box > .login .normal-login').slideUp('fast');
    jQuery('#mcs-login-box > .login .openid-login').slideDown('slow');
    jQuery('#mcs-login-box').animate({'height': '65px'}, 'slow');
    jQuery('#mcs-login-box > .login .openid').addClass('current');
  }
}

function onLoginBoxActivatorClick(e) {
  var elem = jQuery('#mcs-login-box')[0];
  var state = elem.getAttribute('visible');
  if (state != 'true') {
    var pos = jQuery('.mct-login-box-activator').position()
    jQuery('#mcs-login-box')
    .css({"top": (pos.top+28)+'px', "left": (pos.left-7)+'px'})
    .fadeIn('fast');
  } else
    jQuery('#mcs-login-box').fadeOut('fast');
  elem.setAttribute('visible', state!='true'?'true':'false');
  return false;
}

function boxWorkingSwitch(id, force) {
  if ((force==undefined && !jQuery(id).hasClass('working')) || force==true) {
    jQuery(id).addClass('working');
    jQuery(id+' input').attr('disabled', 'disabled');
  } else {
    jQuery(id).removeClass('working');
    jQuery(id+' input').attr('disabled', '');
  } 
}

function onLoginBoxOkClicked(e) {
  jQuery('#mcs-login-box-form').submit();
  if (!jQuery('#mcs-login-box').hasClass('working')) {
    boxWorkingSwitch('#mcs-login-box');
  }
}

function onLoginBoxLogoutClicked(e) {
  document.location.href = './wp-login.php?action=logout&redirect_to='+logoutUrl;
}

function onLoggedIn(e) {
  boxWorkingSwitch('#mcs-login-box');
  onLoginBoxActivatorClick();
}
