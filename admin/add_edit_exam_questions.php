<?php 
include "header.php";
include "../connection.php";
 ?>


        <div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Pilih kategori soal untuk menambahkan & edit soal</h1>
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
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Kategori Soal</th>
                                            <th scope="col">Waktu</th>
                                            <th scope="col">Tambahkan Saol</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                            $count=0;
                                            $res=mysqli_query($link, "SELECT * FROM exam_category");
                                            while ($row=mysqli_fetch_array($res)) 
                                            {
                                            $count=$count+1;
                                                ?>

                                                 <tr>
                                                    <th scope="row"><?php echo $count; ?></th>
                                                    <td><?php echo $row["category"]; ?></td>
                                                    <td><?php echo $row["exam_time_in_minutes"]; ?></td>
                                                    <td><a href="add_edit_questions.php?id=<?php echo $row["id"];?>">Tambahkan</a></td>
                                                 </tr>

                                                <?php
                                            }
                                        ?>

                                    </tbody>
                                </table>

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
                                