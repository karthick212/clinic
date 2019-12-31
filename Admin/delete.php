

<?php

require_once ('db.php');

$get_id=$_REQUEST['tbl_image_id'];
$sql = "DELETE from y_image WHERE tbl_image_id = '$get_id' ";

$conn->exec($sql);
echo "<script>alert('successfully deleted!!!'); window.location='welcome.php'</script>";
?>