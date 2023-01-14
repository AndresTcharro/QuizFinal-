<?php
    
    include "header.php";
    include "../connection.php";

    $id=$_GET["id"];
    $res = mysqli_query($link, "SELECT * FROM  exam_category WHERE id=$id");
    WHILE($row=mysqli_fetch_array($res))
    {
        $exam_category=$row["category"];
        $exam_time=$row["exam_time_in_minutes"];
    }

?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Editar categoría Quiz</h1>
            </div>
        </div>
    </div>

</div>

<div class="content mt-3">
    <div class="animated fadeIn">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">


                    <form name="form1" action="" method="post">

                        <div class="card-body">

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header"><strong>Editar categoría</strong><small> Quiz</small></div>
                                    <div class="card-body card-block">
                                        <div class="form-group"><label for="company" class=" form-control-label">Editar Quiz
                                                Quiz</label><input type="text" name="examname"
                                                placeholder="Introduzca un tema" class="form-control" value="<?php echo $exam_category;  ?>"></div>

                                        <div class="form-group"><label for="vat" class=" form-control-label">Editar quiz tiempo
                                            </label><input type="text" placeholder="Introduzca tiempo " class="form-control" name="examtime" value="<?php echo $exam_time;  ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit1" value="Actualizar Quiz" class="btn btn-success">

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>




        </div>
    </div>
</div>

<?php


if(isset($_POST["submit1"])){


    mysqli_query($link, "UPDATE  exam_category SET category='$_POST[examname]' ,exam_time_in_minutes='$_POST[examtime]' WHERE id=$id") or die(mysqli_error($link));


    ?>
    <script type="text/javascript">
        alert("Quiz actualizado con éxito");
        window.location.href="exam_category.php";
    </script>
        

    <?php

   
}

?>


<?php
    
    include "footer.php";
?>