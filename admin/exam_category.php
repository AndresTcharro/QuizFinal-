<?php
    
    include "header.php";
    include "../connection.php";
?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Añadir categoría Quiz</h1>
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
                                    <div class="card-header"><strong>Añadir categoría</strong><small> Quiz</small></div>
                                    <div class="card-body card-block">
                                        <div class="form-group"><label for="company" class=" form-control-label">Nuevo
                                                Quiz</label><input type="text" name="examname"
                                                placeholder="Introduzca un tema" class="form-control"></div>

                                        <div class="form-group"><label for="vat" class=" form-control-label">Quiz tiempo
                                            </label><input type="text" placeholder="Introduzaca tiempo"
                                                class="form-control" name="examtime">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit1" value="Añadir Quiz"
                                                class="btn btn-success">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Quiz Categorías</strong>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Nombre Quiz</th>
                                                    <th scope="col">Timepo Quiz</th>
                                                    <th scope="col">Editar</th>
                                                    <th scope="col">Borrar</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <?php
                                                $count=0;

                                                $res= mysqli_query($link, "SELECT * FROM exam_category");
                                                    WHILE ($row = mysqli_fetch_array($res))
                                                    {

                                                        $count=$count+1;

                                                        ?>
                                                <tr>
                                                    <th scope="row"><?php echo $count; ?></th>
                                                    <td><?php echo $row["category"]; ?></td>
                                                    <td><?php echo $row["exam_time_in_minutes"]; ?></td>
                                                    <td><a href="edit_exam.php?id=<?php echo $row["id"];?>">Editar</a>
                                                    </td>
                                                    <td><a href="delete.php?id=<?php echo $row["id"];?>">Borrar</a></td>
                                                </tr>
                                                <?php

                                                    }


                                                ?>
                                            </tbody>
                                        </table>
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


    mysqli_query($link, "INSERT INTO exam_category VALUES (NULL, '$_POST[examname]', '$_POST[examtime]')") or die(mysqli_error($link));


    ?>
<script type="text/javascript">
alert("Quiz añadido con éxito");
//redirigimos a la misma página pero ya con el nuevo quiz añadido a la tabla 
window.location.href = window.location.href;
</script>


<?php

   
}

?>


<?php
    
    include "footer.php";
?>