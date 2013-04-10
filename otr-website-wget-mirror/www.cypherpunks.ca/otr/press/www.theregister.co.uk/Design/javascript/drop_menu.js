// drop_menu.js
// 
// display/hide drop-down menus at appropriate junctures
// 
// by Smylers


function SetUpDropMenu(BarID, MenuID)
// sets up the menu bar item BarID to display the menu MenuID on mouse-over and
// gaining focus, and to hide it again on the opposite
{
  var Bar = document.getElementById(BarID);
  var Menu = document.getElementById(MenuID);
  var timer = false;

  var show = function() {
    Menu.style.display = 'block';
    if (timer) {
      window.clearTimeout(timer);
      timer = false;
    }
  };

  var hide = function() {
    Menu.style.display = 'none';
    timer = false;
  };

  var delayed_hide = function() {
    timer = window.setTimeout(hide, 300);
  };

  Bar.onfocus = Bar.onmouseover = show;
  Bar.onblur  = Bar.onmouseout  = delayed_hide;
}
