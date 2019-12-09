
<?php
//Script coded by Niclxs1337 | Copyright: niclas.host
if(isset($_POST['field1'])) {
    $data = $_POST['field1'] .  "\r\n";
    $ret = file_put_contents('./Datei.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('FILE SAVE FAILED! PLEASE TRY AGAIN');
    }
    else {
        echo "$ret bytes have been written";
    }
}
?>