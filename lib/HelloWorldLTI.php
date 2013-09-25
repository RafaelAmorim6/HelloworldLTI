<?php
  require_once('LTI_Tool_Provider.php');
  
  mysql_connect("localhost", "lti" , "");
  mysql_select_db("lti_test");
 
  $db_connector = LTI_Data_Connector::getDataConnector('', 'MySQL');
  $consumer = new LTI_Tool_Consumer('testing.edu', $db_connector);
  $consumer->name = 'Testing';
  $consumer->secret = 'ThisIsASecret!';
  $consumer->save();
?>