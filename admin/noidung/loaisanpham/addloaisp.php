                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại Sản Phẩm
                            <small>Thêm Mới</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form id="formthemloai" id="formthemloai" action="process.php" method="POST">
                            <div class="form-group">
                                <label><h4>Chủng Loại</h4></label>
                                <select class="form-control" name="chungloai" id="chungloai">
                                <?php
                                    $kq=mysqli_query($con, "select idCL, TenCL from nncms_chungloai");
                                    while ($d=mysqli_fetch_array($kq)) {
                                ?>
                                    <option value="<?php echo $d['idCL'];?>" <?php if(isset($_GET['idCL'])&&$_GET['idCL']==$d['idCL']) echo "selected='selected'";?> ><?php echo $d['TenCL'];?></option>
                                <?php } ?>
                                </select>
                                <input type="hidden" name="key" value="dsloaisp">
                            </div>
                            <div class="form-group">
                                <label>Tên Loại Sản Phẩm</label>
                                <input class="form-control" name="txtloai" required placeholder="Nhập loại sản phẩm mới" />
                            </div>
                            <div class="form-group">
                                <label>Thứ Tự</label>
                                <input class="form-control" type="number" min="1" name="txtthutu" placeholder="Nhập bằng số" />
                            </div>
                            <div class="form-group">
                                <label>Ẩn Hiện</label>
                                <label class="radio-inline">
                                    <input name="txtanhien" value="0" checked="" type="radio">Ẩn
                                </label>
                                <label class="radio-inline">
                                    <input name="txtanhien" value="1" type="radio">Hiện
                                </label>
                            </div>
                         
                            <input type="submit" name="themlsp" id="themlsp" value="Thêm" />
                            <input type="reset" name="reset" id="reset" value="Reset" />
                        <form>
                    </div>
                </div>
                <!-- /.row -->