<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Chats</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-blue.min.css" />
    <script type="text/javascript">
        var t = setInterval(function() {
            get_chat_msg()
        }, 5000);

        var l = setInterval(function() {
            get_list()
        }, 5000);
        //
        // General Ajax Call
        //

        var oxmlHttp;
        var oxmlHttpSend;

        function get_list() {
            if (typeof XMLHttpRequest != "undefined") {
                oxmlHttp = new XMLHttpRequest();
            } else if (window.ActiveXObject) {
                oxmlHttp = new ActiveXObject("Microsoft.XMLHttp");
            }
            if (oxmlHttp == null) {
                alert("Browser does not support XML Http Request");
                return;
            }

            oxmlHttp.onreadystatechange = get_list_result;
            oxmlHttp.open("GET", "status.php", true);
            oxmlHttp.send(null);

        }

        function get_list_result() {
            if (oxmlHttp.readyState == 4 || oxmlHttp.readyState == "complete") {
                if (document.getElementById("contacts") != null) {
                    document.getElementById("contacts").innerHTML = oxmlHttp.responseText;
                    oxmlHttp = null;
                }
                var scrollDiv = document.getElementById("contacts");
                scrollDiv.scrollTop = scrollDiv.scrollHeight;
            }
        }


        function get_chat_msg() {

            if (typeof XMLHttpRequest != "undefined") {
                oxmlHttp = new XMLHttpRequest();
            } else if (window.ActiveXObject) {
                oxmlHttp = new ActiveXObject("Microsoft.XMLHttp");
            }
            if (oxmlHttp == null) {
                alert("Browser does not support XML Http Request");
                return;
            }

            oxmlHttp.onreadystatechange = get_chat_msg_result;
            oxmlHttp.open("GET", "chat_recv_ajax.php", true);
            oxmlHttp.send(null);
        }

        function get_chat_msg_result() {
            if (oxmlHttp.readyState == 4 || oxmlHttp.readyState == "complete") {
                if (document.getElementById("DIV_CHAT") != null) {
                    document.getElementById("DIV_CHAT").innerHTML = oxmlHttp.responseText;
                    oxmlHttp = null;
                }
                var scrollDiv = document.getElementById("DIV_CHAT");
                scrollDiv.scrollTop = scrollDiv.scrollHeight;
            }
        }


        function set_chat_msg() {

            if (typeof XMLHttpRequest != "undefined") {
                oxmlHttpSend = new XMLHttpRequest();
            } else if (window.ActiveXObject) {
                oxmlHttpSend = new ActiveXObject("Microsoft.XMLHttp");
            }
            if (oxmlHttpSend == null) {
                alert("Browser does not support XML Http Request");
                return;
            }

            var url = "chat_send_ajax.php";
            var strname = "noname";
            var strmsg = "";
            if (document.getElementById("txtname") != null) {
                strname = document.getElementById("txtname").value;
                document.getElementById("txtname").readOnly = true;
            }
            if (document.getElementById("txtmsg") != null) {
                strmsg = document.getElementById("txtmsg").value;
                document.getElementById("txtmsg").value = "";
            }

            url += "?name=" + strname + "&msg=" + strmsg;
            oxmlHttpSend.open("GET", url, true);
            oxmlHttpSend.send(null);
        }
    </script>
    <script>
        function contact() {
            window.open("http://pigeonsent.ueuo.com/contacts", "_blank", "toolbar=no,scrollbars=no,resizable=no,top=500,left=500,width=400,height=400");
        }
    </script>
</head>

<body style="background: #FF4D27;overflow:hidden;">
    &nbsp;
    <div style="overflow: hidden;width:800px; margin:0 auto;">


        <div style="border-right: none; border-top: lightslategray thin solid;
        border-left: lightslategray thin solid; width: 190px; border-bottom: lightslategray thin solid;
              height: 520px; float:left;background: white;">
            <h1 style="font-weight: bold; font-size: 16pt; color: black; font-family: verdana, arial;
                    text-align: center">
                Contacts
            </h1><br>
            <div style="overflow: auto">


                &nbsp
                <!-- Accent-colored raised button with ripple -->
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="contact()">
                    Add Contact
                </button>
                <br><br>
                <div id="contacts">


                    <?php
                    session_start();
                    if (isset($_SESSION['user'])) {
                    } else {
                        $home = "http://pigeonsent.ueuo.com";
                        header("Location: $home");
                    }


                    include 'dbh_contact.php';

                    $uid = $_SESSION['user'];

                    $connection = mysql_connect('localhost', 'username', 'password'); //The Blank string is the password
                    mysql_select_db('dbdb3');

                    $query = "SELECT * FROM $uid"; //You don't need a ; like you do in SQL
                    $result = mysql_query($query);

                    echo "<table>"; // start a table tag in the HTML

                    while ($row = mysql_fetch_array($result)) {   //Creates a loop to loop through results
                        $name = $row['name'];
                        echo "<tr><td>&nbsp<a href='personal.php?name=$name'>" . $row['name'] . "</a></td></tr>";  //$row['index'] the index here is a field name
                    }

                    echo "</table>"; //Close the table in HTML

                    mysql_close(); //Make sure to close out the database connection
                    ?>

                </div>
            </div>
        </div>


        <div style="border-right: lightslategray thin solid; border-top: lightslategray thin solid;
        border-left: lightslategray thin solid; width: 500px; border-bottom: lightslategray thin solid;
        height: 520px;  overflow: hidden;background: white;">
            <table style="width:100%; height:100%">
                <tr>
                    <td colspan="2" style="font-weight: bold; font-size: 16pt; color: black; font-family: verdana, arial;
                    text-align: center">

                        <button onclick="myFunction()" style="float: right;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                            Log Out!
                        </button>
                    </td>
                    <script>
                        function myFunction() {
                            window.location.href = "http://pigeonsent.ueuo.com/login/logout.php";
                        }
                    </script>


                </tr>
                <tr>
                    <td colspan="2" style="font-weight: bold; font-size: 16pt; color: blue; font-family: verdana, arial;
                    text-align: left">
                        <table style="font-size: 12pt; color: black; font-family: Verdana, Arial">
                            <?php session_start();
                            echo $_SESSION['full_name']; ?>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;" valign="middle" colspan="2">
                        <div style="width: 480px; height: 400px; border-right: darkslategray thin solid; border-top: darkslategray thin solid; font-size: 10pt; border-left: darkslategray thin solid; border-bottom: darkslategray thin solid; font-family: verdana, arial; overflow:scroll; text-align: left;" id="DIV_CHAT">
                            <?php
                            if ($_SESSION['full_name'] == "") {
                                echo "Select a contact to chat with.";
                            } else {
                                echo "Loading Chats...";
                            }

                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width: 310px">

                        <input class="mdl-textfield__input" id="txtmsg" style="width: 350px" type="text" name="msg" spellcheck="true">

                    </td>
                    <td style="width: 85px">
                        <button id="Submit2" type="button" value="Send" onclick="set_chat_msg()" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                            Send
                        </button>
                    </td>
                    <script>
                        document.getElementById("txtmsg")
                            .addEventListener("keyup", function(event) {
                                event.preventDefault();
                                if (event.keyCode === 13) {
                                    document.getElementById("Submit2").click();
                                }
                            });
                    </script>


                </tr>
                <tr>
                    <td colspan="1" style="font-family: verdana, arial; text-align: center; width: 350px;">
                    </td>
                    <td colspan="1" style="width: 85px; font-family: verdana, arial; text-align: center">
                    </td>
                </tr>
            </table>
        </div>
    </div><br><br><br><br><br>


    <div style="background-color:black;height:174;text-align:center;"><br>
        <h7 style="text-align:center; color:white;">All rights reserved. © Hexa Matrix 2017</h7><br>h
    </div>
</body>

</html>


<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Chats</title>
   
<script type="text/javascript">

var t = setInterval(function(){get_chat_msg()},5000);


//
// General Ajax Call
//
      
var oxmlHttp;
var oxmlHttpSend;
      
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
    if(oxmlHttp.readyState==4 || oxmlHttp.readyState=="complete")
    {
        if (document.getElementById("DIV_CHAT") != null)
        {
            document.getElementById("DIV_CHAT").innerHTML =  oxmlHttp.responseText;
            oxmlHttp = null;
        }
        var scrollDiv = document.getElementById("DIV_CHAT");
        scrollDiv.scrollTop = scrollDiv.scrollHeight;
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
    
    url += "?name=" + strname + "&msg=" + strmsg;
    oxmlHttpSend.open("GET",url,true);
    oxmlHttpSend.send(null);
}

</script>
<script>
function contact() {
    window.open("http://pigeonsent.ueuo.com/contacts", "_blank", "toolbar=no,scrollbars=no,resizable=no,top=500,left=500,width=400,height=400");
}
</script>
</head>
<body style="background: #bfbfbf;overflow:hidden;">
    &nbsp;
  <div style="overflow: hidden;width:800px; margin:0 auto;">
    
  
  <div style="border-right: none; border-top: lightslategray thin solid;
        border-left: lightslategray thin solid; width: 190px; border-bottom: lightslategray thin solid;
              height: 500px; float:left;background: white;">
   <h1 style="font-weight: bold; font-size: 16pt; color: blue; font-family: verdana, arial;
                    text-align: center">
     <u>Contacts</u>
    </h1><br>
    <div style="overflow: auto">
      
    
    &nbsp<a onclick="contact()" class="button">New Contact</a><br><br>
    <?php /*
session_start();
    if(isset($_SESSION['user'])){
      
      
    }else{
      $home = "http://pigeonsent.ueuo.com";
      header("Location: $home");
      
    }
    
    
    include 'dbh_contact.php';
    
    $uid = $_SESSION['user'];
    
 $connection = mysql_connect('localhost', 'username', 'password'); //The Blank string is the password
mysql_select_db('dbdb3');

$query = "SELECT * FROM $uid"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
  $name = $row['name'];
echo "<tr><td>&nbsp<a href='personal.php?name=$name'>" . $row['name'] . "</a></td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

mysql_close(); //Make sure to close out the database connection
    ?>
    
    
    </div>
    </div>
    
    
    <div style="border-right: lightslategray thin solid; border-top: lightslategray thin solid;
        border-left: lightslategray thin solid; width: 500px; border-bottom: lightslategray thin solid;
        height: 500px;  overflow: hidden;background: white;">
        <table style="width:100%; height:100%">
            <tr>
                <td colspan="2" style="font-weight: bold; font-size: 16pt; color: blue; font-family: verdana, arial;
                    text-align: center"><u>
                  Chats</u> <input onclick="myFunction()" type="button" value="Log Out" style="float: right;"></td>
              <script>
function myFunction() {
    window.location.href = "http://pigeonsent.ueuo.com/login/logout.php";
}
</script>

              
            </tr>
            <tr>
                <td colspan="2" style="font-weight: bold; font-size: 16pt; color: blue; font-family: verdana, arial;
                    text-align: left">
                    <table style="font-size: 12pt; color: black; font-family: Verdana, Arial">
                        <?php session_start(); echo $_SESSION['full_name'];?>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="vertical-align: middle;" valign="middle" colspan="2">
                    <div style="width: 480px; height: 400px; border-right: darkslategray thin solid; border-top: darkslategray thin solid; font-size: 10pt; border-left: darkslategray thin solid; border-bottom: darkslategray thin solid; font-family: verdana, arial; overflow:scroll; text-align: left;" id="DIV_CHAT">
                    <?php 
                      if($_SESSION['full_name'] == ""){
                        echo "Select a contact to chat with.";
                        
                      }else{
                        echo "Loading Chats...";
                      }
                      
                      ?>
                  </div>
                </td>
            </tr>
            <tr>
                <td style="width: 310px">
                  
                    <input id="txtmsg" style="width: 350px" type="text" name="msg" spellcheck="true" /></td>
                <td style="width: 85px">
                    <input id="Submit2" style="font-family: verdana, arial" type="button" value="Send" onclick="set_chat_msg()"/></td>
              <script>
              document.getElementById("txtmsg")
    .addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode === 13) {
        document.getElementById("Submit2").click();
    }
});
              </script>
              
              
            </tr>
            <tr>
                <td colspan="1" style="font-family: verdana, arial; text-align: center; width: 350px;">
                    </td>
                <td colspan="1" style="width: 85px; font-family: verdana, arial; text-align: center">
                </td>
            </tr>
        </table>
    </div>
  </div><br><br><br><br><br>
  <div style="background-color:black;height:174;text-align:center;"><br><h7 style="text-align:center; color:white;">All rights reserved. © Hexa Matrix 2017</h7><br>h</div>
</body>
</html>-->
