<?php 
include "header.php";
include "../connection.php";
 ?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Kategori Soal</h1>
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
                            <form name="form1" action="" method="post">
                            
                        <div class="card-body">
                        <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Tambah Kategori</strong></div>
                            <div class="card-body card-block">
                                    <div class="form-group"><label for="company" class=" form-control-label">Tambah Kategori</label><input type="text" name="examname" placeholder="Tambah Kategori" class="form-control"></div>

                                    <div class="form-group"><label for="vat" class=" form-control-label">Tambahkan waktu</label><input type="text" placeholder="Tambahkan waktu" class="form-control" name="examtime"></div>

                                     <div class="form-group">
                                         <input type="submit" name="submit1" value="Add Exam" class="btn btn-success">
                                     </div>
                                </div>
                            </div>

                        </div>

                         <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Daftar Kategori Soal</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Kategori</th>
                                            <th scope="col">Durasi Waktu</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Hapus</th>
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
                                                    <td><a href="edit_exam.php?id=<?php echo $row["id"];?>">Edit</a></td>
                                                    <td><a href="delete.php?id=<?php echo $row["id"];?>">Delete</a></td>
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
            </div> <!-- .card -->
        </div>
    </div>
</div><!-- .animated -->
</div><!-- .content -->

<?php 
if (isset($_POST["submit1"])) 
{
    mysqli_query($link, "INSERT INTO exam_category values (NULL, '$_POST[examname]','$_POST[examtime]')") or die (mysqli_error($link));

    ?>
    <script type="text/javascript">
        alert("kategori soal berhasil di tambahkan");
        window.location.href=window.location.href;
    </script>
    <?php
}

 ?>


<?php 
include "footer.php";
?>
                                