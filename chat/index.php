<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Chats</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-blue.min.css" />

</head>
<!-- <script src="chat_functions.js"></script>  -->
<script src="chat_functions.js"></script>

<body style="background: #FF4D27;overflow:hidden;">
  &nbsp;
  <div style="overflow: hidden;width:800px; margin:0 auto;display: block;
    margin: 0 auto; ">


    <div style=" width: 190px; border-bottom: lightslategray thin solid;
              height: 520px; float:left; background-color:#E8E8E8;">
      <div style="overflow: auto">
        <h3 style="font-weight: bold; font-size: 16pt; color: black; font-family: verdana, arial;">
          &nbsp;
          <button id="show-dialog" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
            <i class="material-icons">add</i>
          </button> Contacts
        </h3>


        <dialog class="mdl-dialog" id="dialog">
          <h4 class="mdl-dialog__title">New:</h4>
          <div class="mdl-dialog__content">

          </div>


          <button type="button" class="mdl-button" disabled>Group</button>
          <button type="button" class="mdl-button" id="friend" onclick="contact()">Contact</button>
          <button type="button" class="mdl-button close">Cancel</button>

        </dialog>

        <dialog class="mdl-dialog" id="dialog1">

          <div class="mdl-dialog__content">
            <iframe scrolling="no" height="399" id="iframe" width="599"></iframe>
          </div>
          <div class="mdl-dialog__actions">

            <button type="button" class="mdl-button close">Close</button>


          </div>
        </dialog>

        <script>
          var dialog = document.getElementById("dialog");
          var showDialogButton = document.getElementById('show-dialog');
          if (!dialog.showModal) {
            dialogPolyfill.registerDialog(dialog);
          }
          showDialogButton.addEventListener('click', function() {
            dialog.showModal();
          });
          dialog.querySelector('.close').addEventListener('click', function() {
            dialog.close();
          });
          document.getElementById('friend').addEventListener('click', function() {
            dialog.close();
          });


          var dialog1 = document.getElementById("dialog1");
          var showDialogButton1 = document.getElementById('friend');
          if (!dialog1.showModal) {
            dialogPolyfill.registerDialog(dialog1);
          }
          showDialogButton1.addEventListener('click', function() {
            dialog1.showModal();
            document.getElementById("iframe").src = "http://pigeonsent.ueuo.com/contacts/";
          });
          dialog1.querySelector('.close').addEventListener('click', function() {
            dialog1.close();
          });
        </script>


        <p id="unread">

          &nbsp;Total unread messages: <?php session_start();
                                        echo $_SESSION['unread']; ?></p>
        <div style="overflow-y: auto; height:340px; background-color:#E8E8E8" id="contacts">


          <?php
          session_start();
          if (isset($_SESSION['user'])) {
          } else {
            $home = "http://pigeonsent.ueuo.com";
            header("Location: $home");
          }


          include 'dbh_contact.php';

          $uid = $_SESSION['user'];

          $mysql_get_users = mysqli_query($conn1, "SELECT * FROM $uid");

          $get_rows = mysqli_num_rows($mysql_get_users);

          if ($get_rows != 0) {
            if ($_SESSION['list'] == "") {
              echo "&nbsp;Loading...";
            } else {
              echo $_SESSION['list'];
            }
          } else {
            echo "&nbsp;Your Contacts looks empty!";
          }


          //$connection = mysql_connect('localhost', 'username', 'password'); //The Blank string is the password
          //mysql_select_db('dbdb3');

          //$query = "SELECT * FROM $uid"; //You don't need a ; like you do in SQL
          //$result = mysql_query($query);



          //echo "<table>"; // start a table tag in the HTML

          //while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
          //  $name = $row['name'];
          //echo "<tr><td>&nbsp[Off] " ." <a href='personal.php?name=$name'>" . $row['name'] . "</a></td></tr>";  //$row['index'] the index here is a field name
          //}

          //echo "</table>"; //Close the table in HTML

          //mysql_close(); //Make sure to close out the database connection
          ?>

        </div><br>&nbsp;HM &#169; 2017
      </div>
    </div>



    <div style=" width: 500px; border-bottom: lightslategray thin solid;
        height: 520px;  overflow: hidden;background: white;">
      <table style="width:100%; height:100%">
        <tr>
          <td colspan="2" style="font-weight: bold; font-size: 16pt; color: black; font-family: verdana, arial;
                    text-align: center">

            <a href="http://pigeonsent.ueuo.com/login/logout.php" style="float: right;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
              Log Out!
            </a>
          </td>



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
  </div><br>
  <a href="http://cuprous.6te.net" target="_blank"><img alt="Advertisement : Visit 'cuprous.6te.net' to get a point of sales system for startups and new stores! " src="http://pigeonsent.ueuo.com/ads/cuprous_ad.png" style="align:center;height: 100px ;width: 446px;display: block; margin:auto;"></a>


  <!--<div style="background-color:black;height:174;width: 100%;position: fixed; left: 0;bottom: 0;text-align: center;"><br><h7 style="text-align:center; color:white;">All rights reserved. &#169 Hexa Matrix 2017</h7><br>h</div>-->
</body>

</html>