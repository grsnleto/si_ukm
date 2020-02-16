
            <div class="col">
                <div class="panel panel-default" style = "width : 83%">
                  <div class="panel-body ">
                    <form action="" method="post" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label for="exampleInputFile">Pilih Foto</label>
                        <input type="file" name="file" id="exampleInputFile">
                    </div>
                        <input class="btn btn-info btn-sm" type="submit" id="btn" value="Kirim Foto" name="submit" >
                    </form>
                  </div>
                </div>
                <div class="table-responsive">
                    <h2>Foto Terupload</h2>
                    <table class="table table-bordered table-hover" style = "width : 83%">
                            <?php 
                                if($up->getAll()): 
                            ?>             
                            <?php $no=1; foreach ($up->getAll() as $row) : ?>
                        <tr>
                            <td><img src="images/<?= $row['gambar'] ?>" width="50%"></td>
                        </tr>
                            <?php endforeach; ?>
                            <?php else: ?>
                                <?php 
                                    $up->save();
                                 ?>
                        <tr>
                            <td colspan="4">
                                <div class="alert-warning"><b>DATA KOSONG!!</b></div>
                            </td>
                        </tr>
                            <?php endif; ?>   
                    </table>
                </div>
            </div>