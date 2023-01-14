<?php
    
    include "header.php";
    include "../connection.php";


    $id=$_GET["id"];
    $exam_category='';

    $res = mysqli_query($link, "SELECT * FROM exam_category WHERE id=$id");

    WHILE($row = mysqli_fetch_array($res))
    {
        $exam_category = $row["category"];

    }


?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Añadir preguntas dentro del Quiz de <?php echo "<font color='red'>  $exam_category </font>"; ?></h1>
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

                        <div class="col-lg-6">

                            <form name="form1" action="" method="post" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-header"><strong>Añadir nuevas pregustas de texto al
                                        </strong><small>
                                            Quiz</small></div>
                                    <div class="card-body card-block">
                                        <div class="form-group"><label for="company" class=" form-control-label">Añadir
                                                Pregunta</label><input type="text" name="question"
                                                placeholder="Añada pregunta" class="form-control"></div>

                                        <div class="form-group"><label for="company" class=" form-control-label">Añadir
                                                Opt1</label><input type="text" name="opt1" placeholder="Añada opt1"
                                                class="form-control"></div>

                                        <div class="form-group"><label for="company" class=" form-control-label">Añadir
                                                Opt2</label><input type="text" name="opt2" placeholder="Añada opt2"
                                                class="form-control"></div>

                                        <div class="form-group"><label for="company" class=" form-control-label">Añadir
                                                Opt3</label><input type="text" name="opt3" placeholder="Añada opt3"
                                                class="form-control"></div>

                                        <div class="form-group"><label for="company" class=" form-control-label">Añadir
                                                Opt4</label><input type="text" name="opt4" placeholder="Añada opt4"
                                                class="form-control"></div>

                                        <div class="form-group"><label for="company" class=" form-control-label"> Añadir
                                                Respuesta</label><input type="text" name="answer"
                                                placeholder="Añada respuesta" class="form-control"></div>

                                        <div class="form-group">
                                            <input type="submit" name="submit1" value="Añadir pregunta"
                                                class="btn btn-success">

                                        </div>

                                    </div>
                                </div>


                        </div>
                        <!-- --------------------------------Añadimos preguntas con imagenes ------------------- -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header"><strong>Añadir nuevas pregustas de imagenes al </strong><small>
                                        Quiz</small></div>
                                <div class="card-body card-block">
                                    <div class="form-group"><label for="company"
                                            class=" form-control-label">Pregunta</label><input type="text"
                                            name="fquestion" placeholder="Añada pregunta" class="form-control"></div>

                                    <div class="form-group"><label for="company" class=" form-control-label">Añadir
                                            Opt1</label><input type="file" name="fopt1" class="form-control"
                                            style="padding-bottom: 40px">
                                    </div>

                                    <div class="form-group"><label for="company" class=" form-control-label">Añadir
                                            Opt2</label><input type="file" name="fopt2" class="form-control"
                                            style="padding-bottom: 40px">
                                    </div>

                                    <div class="form-group"><label for="company" class=" form-control-label">Añadir
                                            Opt3</label><input type="file" name="fopt3" class="form-control"
                                            style="padding-bottom: 40px">
                                    </div>

                                    <div class="form-group"><label for="company" class=" form-control-label">Añadir
                                            Opt4</label><input type="file" name="fopt4" class="form-control"
                                            style="padding-bottom: 40px">
                                    </div>

                                    <div class="form-group"><label for="company" class=" form-control-label">Añadir
                                            Respuesta</label><input type="file" name="fanswer" class="form-control"
                                            style="padding-bottom: 40px">
                                    </div>


                                    <div class="form-group">
                                        <input type="submit" name="submit2" value="Añadir pregunta"
                                            class="btn btn-success">

                                    </div>

                                </div>
                            </div>


                        </div>
                        </form>

                    </div>
                </div>
            </div>




        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">


                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Preguntas</th>
                                <th>Opt1</th>
                                <th>Opt2</th>
                                <th>Opt3</th>
                                <th>Opt4</th>
                                <th>Editar</th>
                                <th>Borrar</th>

                            </tr>

                            <?php

                        $res = mysqli_query($link, "SELECT * FROM questions WHERE category='$exam_category' ORDER BY question_no ASC");

                        WHILE($row= mysqli_fetch_array($res))
                        {
                            echo "<tr>";
                            echo "<td>"; echo $row["question_no"]; echo "</td>";
                            echo "<td>"; echo $row["question"]; echo "</td>";
                            
                            echo "<td>";
                           
                            if(strpos($row["opt1"], 'opt_images/') !== false)
                           {

                            ?>
                            <img src="<?php echo $row["opt1"];  ?>" height="50" widht="50">
                            <?php

                           }
                           else 
                           {
                                echo $row["opt1"];

                           }

                           echo "</td>";

                           echo "<td>";

                           if(strpos($row["opt2"], 'opt_images/') !== false)
                           {

                            ?>

                            <img src="<?php echo $row["opt2"];  ?>" height="50" widht="50">

                            <?php

                           }
                           else 
                           {
                                echo $row["opt2"];

                           }
                           echo "</td>";
                           echo "<td>";

                           if(strpos($row["opt3"], 'opt_images/') !== false)
                           {

                            ?>

                            <img src="<?php echo $row["opt3"];  ?>" height="50" widht="50">

                            <?php

                           }
                           else 
                           {
                                echo $row["opt3"];

                           }
                           echo "</td>";
                           echo "<td>";

                           if(strpos($row["opt4"], 'opt_images/') !== false)
                           {

                            ?>

                            <img src="<?php echo $row["opt4"];  ?>" height="50" widht="50">

                            <?php

                           }
                           else 
                           {
                                echo $row["opt4"];

                           }
                    
                           echo "</td>";


                           echo "<td>";

                           if(strpos($row["opt4"], 'opt_images/') !== false)
                           {

                            ?>

                            <a href="edit_option_images.php?id=<?php echo $row["id"]; ?>&id1=<?php echo $id; ?>">Editar</a>

                            <?php

                           }
                           else 
                           {
                            ?>

                            <a href="edit_option.php?id=<?php echo $row["id"]; ?>&id1=<?php echo $id; ?>">Editar</a>

                            <?php
                           }

                           echo "</td>";
                           echo "<td>";

                           ?>

                           <a href="delete_option.php?id=<?php echo $row["id"]; ?>&id1=<?php echo $id; ?>">Borrar</a>

                           <?php
                           echo "</td>";

                            echo "</tr>";
                        }

                        ?>

                        </table>


                    </div>
                </div>
            </div>
        </div>



    </div>
</div>

<!-- submit para el boton de preguntas de texto  -->
<?php

if(isset($_POST["submit1"]))
{
    $loop=0;
    $count=0;

    $res = mysqli_query($link, "SELECT * FROM questions WHERE category='$exam_category' ORDER BY id ASC") or die (mysqli_error($link));

    $count = mysqli_num_rows($res);
    //
    if($count == 0 )
    {

    }
    else
    {
        WHILE($row = mysqli_fetch_array($res))
        {
            $loop=$loop+1;
            mysqli_query($link, "UPDATE questions SET question_no='$loop' WHERE id=$row[id]");
        }

    }


    $loop=$loop+1;
    mysqli_query($link, "INSERT INTO questions VALUES(NULL, '$loop','$_POST[question]', '$_POST[opt1]', '$_POST[opt2]', '$_POST[opt3]', '$_POST[opt4]', '$_POST[answer]', '$exam_category')") or die (mysqli_error($link));
    //para cuando se refresque la página despues del submit
    ?>
<script type="text/javascript">
alert("Pregunta añadida con éxito")
window.location.href = window.location.href;
</script>
<?php

}

?>

<!-- submit para el boton de preguntas de imagenes  -->

<?php

if(isset($_POST["submit2"]))
{
    $loop=0;
    $count=0;

    $res = mysqli_query($link, "SELECT * FROM questions WHERE category='$exam_category' ORDER BY id ASC") or die (mysqli_error($link));

    $count = mysqli_num_rows($res);
    //
    if($count == 0 )
    {

    }
    else
    {
        WHILE($row = mysqli_fetch_array($res))
        {
            $loop=$loop+1;
            mysqli_query($link, "UPDATE questions SET question_no='$loop' WHERE id=$row[id]");
        }

    }


    $loop=$loop+1;

    $tm = md5(time());

    $fnm1 = $_FILES["fopt1"]["name"];
    //esto es para subir la imagen
    $dst1 = "./opt_images/".$tm.$fnm1;
    //para explorar la imagen 
    $dst_db1= "opt_images/".$tm.$fnm1;
    move_uploaded_file($_FILES["fopt1"]["tmp_name"], $dst1);


    $fnm2 = $_FILES["fopt2"]["name"];
    //esto es para subir la imagen
    $dst2 = "./opt_images/".$tm.$fnm2;
    //para explorar la imagen 
    $dst_db2= "opt_images/".$tm.$fnm2;
    move_uploaded_file($_FILES["fopt2"]["tmp_name"], $dst2);


    $fnm3 = $_FILES["fopt3"]["name"];
    //esto es para subir la imagen
    $dst3="./opt_images/".$tm.$fnm3;
    //para explorar la imagen 
    $dst_db3= "opt_images/".$tm.$fnm3;
    move_uploaded_file($_FILES["fopt3"]["tmp_name"], $dst3);


    $fnm4 = $_FILES["fopt4"]["name"];
    //esto es para subir la imagen
    $dst4 = "./opt_images/".$tm.$fnm4;
    //para explorar la imagen 
    $dst_db4= "opt_images/".$tm.$fnm4;
    move_uploaded_file($_FILES["fopt4"]["tmp_name"], $dst4);


    $fnm5 = $_FILES["fanswer"]["name"];
    //esto es para subir la imagen
    $dst5 = "./opt_images/".$tm.$fnm5;
    //para explorar la imagen 
    $dst_db5= "opt_images/".$tm.$fnm5;
    move_uploaded_file($_FILES["fanswer"]["tmp_name"], $dst5);



    mysqli_query($link, "INSERT INTO questions VALUES(NULL, '$loop','$_POST[fquestion]', '$dst_db1', '$dst_db2', '$dst_db3', '$dst_db4', '$dst_db5', '$exam_category')") or die (mysqli_error($link));
    //para cuando se refresque la página despues del submit
    ?>
<script type="text/javascript">
alert("Pregunta añadida con éxito")
window.location.href = window.location.href;
</script>
<?php

}

?>


<?php
    
    include "footer.php";
?>