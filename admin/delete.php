<?php


include "../connection.php";
$id=$_GET["id"];
mysqli_query($link, "DELETE FROM exam_category WHERE id=$id");

?>

<script type="text/javascript">

    window.location="exam_category.php";
</script>