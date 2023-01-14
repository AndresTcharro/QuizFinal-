<?php
    
    include "header.php";
    include "../connection.php";

    $id=$_GET["id"];
    $id1=$_GET["id1"];
    $question="";
    $opt1="";
    $opt2="";
    $opt3="";
    $opt4="";
    $answer="";

    $res = mysqli_query($link, "SELECT * FROM  questions WHERE id=$id");
    WHILE($row=mysqli_fetch_array($res))
    {
        $question = $row["question"];
        $opt1 = $row["opt1"];
        $opt2 = $row["opt2"];
        $opt3 = $row["opt3"];
        $opt4 = $row["opt4"];
        $answer = $row["answer"];
    }

?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Actualizar preguntas</h1>
            </div>
        </div>
    </div>

</div>

<div class="content mt-3">
    <div class="animated fadeIn">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">

                        <div class="col-lg-12">

                            <form name="form1" action="" method="post" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-header"><strong>Actualizar preguntas del
                                        </strong><small>
                                            Quiz</small></div>
                                    <div class="card-body card-block">
                                        <div class="form-group"><label for="company" class=" form-control-label">Añadir
                                                Pregunta</label><input type="text" name="question"
                                                placeholder="Añada pregunta" class="form-control"
                                                value="<?php echo $question; ?>"></div>

                                        <div class="form-group"><label for="company" class=" form-control-label">
                                                Opt1</label><input type="text" name="opt1" placeholder="Añada opt1"
                                                class="form-control" value="<?php echo $opt1; ?>"></div>

                                        <div class="form-group"><label for="company" class=" form-control-label">
                                                Opt2</label><input type="text" name="opt2" placeholder="Añada opt2"
                                                class="form-control" value="<?php echo $opt2; ?>"></div>

                                        <div class="form-group"><label for="company" class=" form-control-label">
                                                Opt3</label><input type="text" name="opt3" placeholder="Añada opt3"
                                                class="form-control" value="<?php echo $opt3; ?>"></div>

                                        <div class="form-group"><label for="company" class=" form-control-label">
                                                Opt4</label><input type="text" name="opt4" placeholder="Añada opt4"
                                                class="form-control" value="<?php echo $opt3; ?>"></div>

                                        <div class="form-group"><label for="company" class=" form-control-label"> Añadir
                                                Respuesta</label><input type="text" name="answer"
                                                placeholder="Añada respuesta" class="form-control"
                                                value="<?php echo $answer; ?>"></div>

                                        <div class="form-group">
                                            <input type="submit" name="submit1" value="Añadir pregunta"
                                                class="btn btn-success">

                                        </div>

                                    </div>
                                </div>
                            </form>

                        </div>


                    </div>
                </div>
            </div>




        </div>
    </div>
</div>

<?php


if(isset($_POST["submit1"])){


    mysqli_query($link, "UPDATE  questions SET question='$_POST[question]', opt1='$_POST[opt1]', opt2='$_POST[opt2]', opt3='$_POST[opt3]', opt4='$_POST[opt4]', answer='$_POST[answer]' WHERE id=$id") or die(mysqli_error($link));


    ?>
    <script type="text/javascript">
        alert("Quiz actualizado con éxito");
        window.location="add_edit_questions.php?id=<?php echo $id1 ?>";
    </script>
        

    <?php

   
}


?>



<?php
    
    include "footer.php";
?>