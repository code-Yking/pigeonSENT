//var a = function(){get_chat_msg()};
get_list();
get_chat_msg();
var t = setInterval(function(){get_chat_msg()},5000);
var l = setInterval(function(){get_list()},9000);

//
// General Ajax Call
//
      
var oxmlHttp;

var oxmlHttpSend;
      
  function get_list()
{
  if(typeof XMLHttpRequest != "undefined")
    {
        oxmlHttp = new XMLHttpRequest();
    }
    else if (window.ActiveXObject)
    {
       oxmlHttp = new ActiveXObject("Microsoft.XMLHttp");
    }
    if(oxmlHttp == null)
    {
        alert("Browser does not support XML Http Request");
       return;
    }
    
    oxmlHttp.onreadystatechange = get_list_result;
    oxmlHttp.open("GET","status_mobile.php",true);
    oxmlHttp.send(null);
  
}
  
  function get_list_result()
{
    if(oxmlHttp.readyState==4 || oxmlHttp.readyState=="complete")
    {
        if (document.getElementById("contacts") != null)
        {
            document.getElementById("contacts").innerHTML =  oxmlHttp.responseText;
            oxmlHttp = null;
          
        }
        var scrollDiv = document.getElementById("contacts");
         get_unread();
    }
}

function get_unread()
{
  if(typeof XMLHttpRequest != "undefined")
    {
        oxmlHttp = new XMLHttpRequest();
    }
    else if (window.ActiveXObject)
    {
       oxmlHttp = new ActiveXObject("Microsoft.XMLHttp");
    }
    if(oxmlHttp == null)
    {
        alert("Browser does not support XML Http Request");
       return;
    }
    
    oxmlHttp.onreadystatechange = get_unread_result;
    oxmlHttp.open("GET","unread.php",true);
    oxmlHttp.send(null);
  
}
  
  function get_unread_result()
{
    if(oxmlHttp.readyState==4 || oxmlHttp.readyState=="complete")
    {
        if (document.getElementById("unread") != null)
        {
            document.getElementById("unread").innerHTML =  "&nbsp;Total unread messages: " + oxmlHttp.responseText;
            oxmlHttp = null;
          document.title = "Chats [" + oxmlHttp.responseText + "]";
        }
       
        
    }
}
  
function get_chat_msg()
{

    if(typeof XMLHttpRequest != "undefined")
    {
        oxmlHttp = new XMLHttpRequest();
    }
    else if (window.ActiveXObject)
    {
       oxmlHttp = new ActiveXObject("Microsoft.XMLHttp");
    }
    if(oxmlHttp == null)
    {
        alert("Browser does not support XML Http Request");
       return;
    }
    
    oxmlHttp.onreadystatechange = get_chat_msg_result;
    oxmlHttp.open("GET","chat_recv_ajax.php",true);
    oxmlHttp.send(null);
}
     
function get_chat_msg_result()
{
   var div = document.getElementById("DIV_CHAT").scrollTop - document.getElementById("DIV_CHAT").scrollHeight;
    if(oxmlHttp.readyState==4 || oxmlHttp.readyState=="complete")
    {
        if (document.getElementById("DIV_CHAT") != null)
        {
         
            document.getElementById("DIV_CHAT").innerHTML =  oxmlHttp.responseText;
            oxmlHttp = null;
        }
      if (div == "-383"){
        var scrollDiv = document.getElementById("DIV_CHAT");
        scrollDiv.scrollTop = scrollDiv.scrollHeight;}
      
       if (div == "-444"){
        var scrollDiv = document.getElementById("DIV_CHAT");
        scrollDiv.scrollTop = scrollDiv.scrollHeight;}
      
    }
}

      
function set_chat_msg()
{

    if(typeof XMLHttpRequest != "undefined")
    {
        oxmlHttpSend = new XMLHttpRequest();
    }
    else if (window.ActiveXObject)
    {
       oxmlHttpSend = new ActiveXObject("Microsoft.XMLHttp");
    }
    if(oxmlHttpSend == null)
    {
       alert("Browser does not support XML Http Request");
       return;
    }
    
    var url = "chat_send_ajax.php";
    var strname="noname";
    var strmsg="";
    if (document.getElementById("txtname") != null)
    {
        strname = document.getElementById("txtname").value;
        document.getElementById("txtname").readOnly=true;
    }
    if (document.getElementById("txtmsg") != null)
    {
        strmsg = document.getElementById("txtmsg").value;
        document.getElementById("txtmsg").value = "";
    }
  var date = "[Send]";
  
  url += "?name=" + strname + "&msg=" + strmsg;
    oxmlHttpSend.open("GET",url,true);
    oxmlHttpSend.send(null);
  var div = document.getElementById("DIV_CHAT").scrollTop - document.getElementById("DIV_CHAT").scrollHeight; 

 var input =  document.getElementById("DIV_CHAT").innerHTML;
  document.getElementById("DIV_CHAT").innerHTML = input + "<details>" + date + "&nbsp;" + "<summary>You:&nbsp;" + strmsg + "</summary></details>";
    
   if (div == "-383"){
  var scrollDiv = document.getElementById("DIV_CHAT");
        scrollDiv.scrollTop = scrollDiv.scrollHeight;}
  else{
     if (div == "-444"){
  var scrollDiv = document.getElementById("DIV_CHAT");
        scrollDiv.scrollTop = scrollDiv.scrollHeight;}
    
  }
 
 
  
  get_chat_msg()
  
    
}

 var IDLE_TIMEOUT = 999; //seconds
var _idleSecondsCounter = 0;
document.onclick = function() {
    _idleSecondsCounter = 0;
};
document.onmousemove = function() {
    _idleSecondsCounter = 0;
};
document.onkeypress = function() {
    _idleSecondsCounter = 0;
};
window.setInterval(CheckIdleTime, 1000);

function CheckIdleTime() {
    _idleSecondsCounter++;
    var oPanel = document.getElementById("SecondsUntilExpire");
    if (oPanel)
        oPanel.innerHTML = (IDLE_TIMEOUT - _idleSecondsCounter) + "";
    if (_idleSecondsCounter >= IDLE_TIMEOUT) {
        
        document.location.href = "http://pigeonsent.ueuo.com/login/logout.php";
    }
}





document.getElementById("txtmsg")
    .addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode === 13) {
        document.getElementById("Submit2").click();
    }
});

window.onbeforeunload = function (e) {
  var message = "Log out! Otherwise your status will remail 'Online'",
  e = e || window.event;
  // For IE and Firefox
  if (e) {
  e.returnValue = message;
  }

  // For Safari
  return message;
};
  