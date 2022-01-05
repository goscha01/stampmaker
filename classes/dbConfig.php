<?php
  const db_host = 'stampmaker.ciyq4ufpar8z.us-east-1.rds.amazonaws.com'; //old DB
  // //  $db_host = 'aa100xgok1nbrz5.ciyq4ufpar8z.us-east-1.rds.amazonaws.com'; //production DB 
  const db_name = 'stampmaker';
  const db_username = 'admin';
  const db_password = 'admin12345';
  const port = 'admin12345';

  function consoleLog($msg) {
    echo '<script type="text/javascript">' .
      'console.log(' . $msg . ');</script>';
}

consoleLog('classes dbConfig php');
?>
