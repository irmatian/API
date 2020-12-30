<?php 
session_start();
include "header.php";
include "../connection.php";
 ?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Daftar Hasil Soal</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <!-- Credit Card -->
                                 <center><h2 style="margin-bottom: 9px;">Hasil Akhir</h2></center>

                                 <!-- menampilkan hasil akhir dari table -->
                                   <?php 
                                   $count=0;
                                   $res=mysqli_query($link, "select * from exam_results order by id desc");
                                    $count=mysqli_num_rows($res);

                                    if ($count==0) 
                                    {
                                        ?>
                                        <center><h1>No Result Found</h1></center>
                                        <?php
                                    }
                                    else{
                                        echo "<table class='table table-bordered'>";

                                        echo "<tr style='background-color: #006df0; color: white'>";
                                        echo "<th>"; echo "Usernama"; echo "</th>";
                                        echo "<th>"; echo "Kategori Soal"; echo "</th>";
                                        echo "<th>"; echo "Jumlah Soal"; echo "</th>";
                                        echo "<th>"; echo "Jawaban Benar"; echo "</th>";
                                        echo "<th>"; echo "Jawaban Salah"; echo "</th>";
                                        echo "<th>"; echo "Tanggal"; echo "</th>";
                                        echo "</tr>";

                                        while($row=mysqli_fetch_array($res))
                                        {
                                            echo "<tr>";
                                            echo "<td>"; echo $row["username"]; echo "</td>";
                                            echo "<td>"; echo $row["exam_type"]; echo "</td>";
                                            echo "<td>"; echo $row["total_question"]; echo "</td>";
                                            echo "<td>"; echo $row["correct_answer"]; echo "</td>";
                                            echo "<td>"; echo $row["wrong_answer"]; echo "</td>";
                                            echo "<td>"; echo $row["exam_time"]; echo "</td>";
                                            echo "</tr>";
                                        }

                                        echo "</table>";
                                    }


                                    ?> 
                                
                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

<?php 
include "footer.php";
?>
                                