<?php
include'functions.php';
include'config.php';
if (isset($_POST['wert'])) {

    $query = 'select * from kunde';
    showTable($con, $query);


} else{
   echo('nuffin');
}
?>