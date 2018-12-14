function disableSelection(target){
   if(typeof target.onselectstart != 'undefined')   //IE route
      target.onselectstart=function(){ return false; }
   else if(typeof target.style.MozUserSelect != 'undefined')    //Firefox route
      target.style.MozUserSelect = 'none'
   else    //All other route (ie: Opera)
      target.onmousedown = function(){ return false; }
   target.style.cursor = 'default';
}

/* Disable Right Click */
var message="You may not right mouse click this page.";
if (navigator.appName == 'Microsoft Internet Explorer'){
function NOclickIE(e) {
if (event.button == 2 || event.button == 3) {
alert(message);
return false;
}
return true;
}
document.onmousedown=NOclickIE;
document.onmouseup=NOclickIE;
window.onmousedown=NOclickIE;
window.onmouseup=NOclickIE;
}
else {
function NOclickNN(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}}}
if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=NOclickNN; }
document.oncontextmenu=new Function("alert(message);return false")
}

function disableCtrlKeyCombination(e){
//list all CTRL + key combinations you want to disable
var forbiddenKeys = new Array('a', 'c', 's', 'u', 'x');
var key;
var isCtrl;

if(window.event){
   key = window.event.keyCode;   //IE
   if(window.event.ctrlKey) isCtrl = true;
   else isCtrl = false;
}
else{
   key = e.which;   //firefox
   if(e.ctrlKey) isCtrl = true;
   else isCtrl = false;
}

//if ctrl is pressed check if other key is in forbidenKeys array
if(isCtrl){
   for(i=0; i<forbiddenKeys .length; i++){
      //case-insensitive comparation
      if(forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase()){
         alert('Key combination CTRL + '+String.fromCharCode(key)+' has been disabled.');
         return false;
      }
   }
}
return true;
}