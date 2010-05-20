/**
* phpBB3 forum functions
*/

	/**
	* Find a member
	*/
	function find_username(url)
	{
		popup(url, 760, 570, '_usersearch');
		return false;
	}

/**
* Window popup
*/
function popup(url, width, height, name)
{
	if (!name)
	{
		name = '_popup';
	}

	window.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes, width=' + width);
	return false;
}

/**
* Jump to page
*/
function jumpto()
{
	var page = prompt(jump_page, on_page);

	if (page !== null && !isNaN(page) && page == Math.floor(page) && page > 0)
	{
		if (base_url.indexOf('?') == -1)
		{
			document.location.href = base_url + '?start=' + ((page - 1) * per_page);
		}
		else
		{
			document.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * per_page);
		}
	}
}

function marklist_each(parent_id, each_id_prefix, all_id)
{
	var parent = document.getElementById(parent_id);

	var rb = parent.getElementsByTagName('input');

	var all = true;
	for (var r = 0; r < rb.length; r++) {
		if (rb[r].name.substr(0, each_id_prefix.length) == each_id_prefix) {
			all &= rb[r].checked;
		}
	}
	document.getElementById(all_id).checked = all;
}

function marklist_all(parent_id, each_id_prefix, all_id)
{
	var parent = document.getElementById(parent_id);

	var rb = parent.getElementsByTagName('input');

	var all = document.getElementById(all_id).checked;
	for (var r = 0; r < rb.length; r++) {
		if (rb[r].name.substr(0, each_id_prefix.length) == each_id_prefix) {
			rb[r].checked = all;
		}
	}
}

/**
* Resize viewable area for attached image or topic review panel (possibly others to come)
* e = element
*/
function viewableArea(e, itself) {
	if (!e)
		return;

	if (!itself)
		e = e.parentNode;

	addRemoveClassName(e, 'expanded-view');
}

/**
* Set display of page element
* s[-1,0,1] = hide,toggle display,show
*/
function dE(n, s)
{
	if (n.indexOf('pr') == 0 && s == 1) {
		showIgnoredPost(n);
		return;
	}
	var e = document.getElementById(n);

	if (!s)
	{
		s = (e.style.display == '' || e.style.display == 'block') ? -1 : 1;
	}
	e.style.display = (s == 1) ? 'block' : 'none';
}

function showIgnoredPost(n) {
	var el = document.getElementById(n);
	while (el.className.indexOf('post-ignore') < 0) el = el.parentNode;
	el.className += ' post-ignore-shown';
}

/**
* Alternate display of subPanels
*/
function subPanels(p)
{
	var i, e, t;

	if (typeof(p) == 'string')
	{
		show_panel = p;
	}

	for (i = 0; i < panels.length; i++)
	{
		e = document.getElementById(panels[i]);
		t = document.getElementById(panels[i] + '-tab');

		if (e)
		{
			if (panels[i] == show_panel)
			{
				e.style.display = 'block';
				if (t)
				{
					t.className = 'activetab';
				}
			}
			else
			{
				e.style.display = 'none';
				if (t)
				{
					t.className = '';
				}
			}
		}
	}
}

/**
* Call print preview
*/
function printPage()
{
	if (is_ie)
	{
		printPreview();
	}
	else
	{
		window.print();
	}
}

/**
* Show/hide groups of blocks
* c = CSS style name
* e = checkbox element
* t = toggle dispay state (used to show 'grip-show' image in the profile block when hiding the profiles) 
*/
function displayBlocks(c, e, t)
{
	var s = (e.checked == true) ?  1 : -1;

	if (t)
	{
		s *= -1;
	}

	var divs = document.getElementsByTagName("DIV");

	for (var d = 0; d < divs.length; d++)
	{
		if (divs[d].className.indexOf(c) == 0)
		{
			divs[d].style.display = (s == 1) ? 'none' : 'block';
		}
	}
}

function selectCode(a)
{
	// Get ID of code block
	var e = a.parentNode.parentNode.getElementsByTagName('CODE')[0];

	// Not IE
	if (window.getSelection)
	{
		var s = window.getSelection();
		// Safari
		if (s.setBaseAndExtent)
		{
			s.setBaseAndExtent(e, 0, e, e.innerText.length - 1);
		}
		// Firefox and Opera
		else
		{
			// workaround for bug # 42885
			if (window.opera && e.innerHTML.substring(e.innerHTML.length - 4) == '<BR>')
			{
				e.innerHTML = e.innerHTML + '&nbsp;';
			}

			var r = document.createRange();
			r.selectNodeContents(e);
			s.removeAllRanges();
			s.addRange(r);
		}
	}
	// Some older browsers
	else if (document.getSelection)
	{
		var s = document.getSelection();
		var r = document.createRange();
		r.selectNodeContents(e);
		s.removeAllRanges();
		s.addRange(r);
	}
	// IE
	else if (document.selection)
	{
		var r = document.body.createTextRange();
		r.moveToElementText(e);
		r.select();
	}
}

/**
* Play quicktime file by determining it's width/height
* from the displayed rectangle area
*/
function play_qt_file(obj)
{
	var rectangle = obj.GetRectangle();

	if (rectangle)
	{
		rectangle = rectangle.split(',');
		var x1 = parseInt(rectangle[0]);
		var x2 = parseInt(rectangle[2]);
		var y1 = parseInt(rectangle[1]);
		var y2 = parseInt(rectangle[3]);

		var width = (x1 < 0) ? (x1 * -1) + x2 : x2 - x1;
		var height = (y1 < 0) ? (y1 * -1) + y2 : y2 - y1;
	}
	else
	{
		var width = 200;
		var height = 0;
	}

	obj.width = width;
	obj.height = height + 16;

	obj.SetControllerVisible(true);
	obj.Play();
}

function addRemoveClassName(e, cn) {
	function remove(s) {
		while (c.indexOf(s) > -1)
			c = c.replace(s, ' ');
	}

	var c = ' ' + e.className + ' ';
	remove('\t');
	remove('\r');
	remove('\n');
	remove('  ');

	if (c.indexOf(' ' + cn + ' ') > -1)
		remove(' ' + cn + ' ');
	else
		c += cn + ' ';

	e.className = c.substring(1, c.length - 1);
}

function toggleSort() {
	var sorts = document_getElementsByClassName('display-options');
	for (var i = 0, sort; sort = sorts[i]; i++) {
		sort.style.display = sort.style.display == 'none' ? '' : 'none';
		if (sort.style.display == '')
			scrollToElement(sort);
	}
}

function scrollToElement(el) {
  var elRect = {x: 0, y: 0, w: el.offsetWidth, h: el.offsetHeight};
  for (var pe = el; pe != null; pe = pe.offsetParent) {
    elRect.x += pe.offsetLeft;
    elRect.y += pe.offsetTop;
  }

  var vpRect = {
    x: document.documentElement.scrollLeft,
    y: document.documentElement.scrollTop,
    w: window.innerWidth,
    h: window.innerHeight
  }

  // Move outer interval, so that the inner interval fits inside
  function align(outerLo, outerLen, innerLo, innerLen) {
    var outerHi = outerLo + outerLen;
    var innerHi = innerLo + innerLen;
    if (innerHi > outerHi) outerLo += innerHi - outerHi;
    if (innerLo < outerLo) outerLo -= outerLo - innerLo;
    return outerLo;
  }

  window.scrollTo(
    align(vpRect.x, vpRect.w, elRect.x, elRect.w),
    align(vpRect.y, vpRect.h, elRect.y, elRect.h)
  );
}

function document_getElementsByClassName(searchClass) {
  if (document.getElementsByClassName)
    document.getElementsByClassName(searchClass);
  var els = document.getElementsByTagName("*");
  var pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)");
  var res = [];
  for (var i = 0, el; el = els[i]; i++) {
    if (pattern.test(el.className)) {
      res.push(el);
    }
  }
  return res;
}

function hideSort() {
	if (document_getElementsByClassName('display-options').length) {
		var sorts = document_getElementsByClassName('only-if-sort');
		if (sorts.length) {
			sorts[sorts.length - 1].style.display =  '';
		}
		toggleSort();
	}
}