var w = window.innerWidth;
var h = window.innerHeight;
var pad = (h-700)/2;
var panel = 1;
var panel_opacity = 1;
var autochange = setTimeout("panel_fadeout_right();", 9000);

function random_range(min, max) {
		return Math.floor( Math.random() * ( 1 + max - min ) ) + min;
}

function updatePanel() { //Add new panels in here.  Remember to increase the max amounts in panel_ left and right.
	switch(panel){
		case 0:
			document.getElementById('panel_link').href="http://www.burningfreak.com/nightmare";
			document.getElementById('panel_image').src="./images/panel_blockhead.png";
		break;
		case 1:
			document.getElementById('panel_link').href="http://scoopsmeatland.blogspot.com";
			document.getElementById('panel_image').src="./images/panel_2012a.png";
		break;
		case 2:
			document.getElementById('panel_link').href="http://scoopsmeatland.blogspot.com";
			document.getElementById('panel_image').src="./images/panel_2011.png";
		break;
		case 3:
			document.getElementById('panel_link').href="http://www.burningfreak.com/emptyspace";
			document.getElementById('panel_image').src="./images/panel_white.png";
		break;
		case 4:
			document.getElementById('panel_link').href="http://scoopsmeatland.blogspot.com";
			document.getElementById('panel_image').src="./images/panel_2010.png";
		break;
	}
}
function panel_left() {
	panel--;
	if(panel<0){panel=4;}
	updatePanel();
}

function panel_right() {
	panel++;
	if (panel>4){panel=0;}
	updatePanel();
}

function panel_fadeout_left () {
	var fade1 = setTimeout("panel_opacity -= .2; document.getElementById('panel_image').style.opacity = panel_opacity;",  50);
	var fade2 = setTimeout("panel_opacity -= .2; document.getElementById('panel_image').style.opacity = panel_opacity;", 100);
	var fade3 = setTimeout("panel_opacity -= .2; document.getElementById('panel_image').style.opacity = panel_opacity;", 150);
	var fade4 = setTimeout("panel_opacity -= .2; document.getElementById('panel_image').style.opacity = panel_opacity;", 200);
	var fade5 = setTimeout("panel_opacity =   0; document.getElementById('panel_image').style.opacity = panel_opacity; panel_left(); panel_fadein();", 250);
  }

function panel_fadeout_right () {
	var fade1 = setTimeout("panel_opacity -= .2; document.getElementById('panel_image').style.opacity = panel_opacity;",  50);
	var fade2 = setTimeout("panel_opacity -= .2; document.getElementById('panel_image').style.opacity = panel_opacity;", 100);
	var fade3 = setTimeout("panel_opacity -= .2; document.getElementById('panel_image').style.opacity = panel_opacity;", 150);
	var fade4 = setTimeout("panel_opacity -= .2; document.getElementById('panel_image').style.opacity = panel_opacity;", 200);
	var fade5 = setTimeout("panel_opacity =   0; document.getElementById('panel_image').style.opacity = panel_opacity; panel_right(); panel_fadein();", 250);
}

function panel_fadein() {
	var fade1 = setTimeout("panel_opacity += .2; document.getElementById('panel_image').style.opacity = panel_opacity;",  50);
	var fade2 = setTimeout("panel_opacity += .2; document.getElementById('panel_image').style.opacity = panel_opacity;", 100);
	var fade3 = setTimeout("panel_opacity += .2; document.getElementById('panel_image').style.opacity = panel_opacity;", 150);
	var fade4 = setTimeout("panel_opacity += .2; document.getElementById('panel_image').style.opacity = panel_opacity;", 200);
	var fade5 = setTimeout("panel_opacity =   1; document.getElementById('panel_image').style.opacity = panel_opacity;", 250);
	clearTimeout (autochange);
	autochange = setTimeout("panel_fadeout_right();", 9000);
}
			
//////////////////////////////////////////////////

$(document).ready (function ()
  {
  $("#music_link").click (function ()
    {
    $("#music").slideToggle("fast", "linear");
    });
  });
