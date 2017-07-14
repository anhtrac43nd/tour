<?php include 'header.php'; ?>
<?php include 'sidebar-left.php'; ?>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Thanh toán trả phòng</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Trả phòng</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->

    <div class="row">
        <div class="col-md-12">
            <form id="summary-form" action="forms-validation.html" class="form-horizontal">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Trả phòng - 101</h2>
                    </header>
                    <div class="panel-body">
                        <div class="row">    
                            <div class="col-sm-6">
                                <h2 class="panel-title">Thông tin phòng</h2>
                                <br/>
                                <div class="form-group">
                                    <label class="col-md-4">Tên khách hàng:</label>
                                    <div class="col-md-8">
                                        <label ><strong>Nguyễn Văn A</strong></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4">Vào lúc:</label>
                                    <div class="col-md-8">
                                        <label><strong>21:45 27/12/2015</strong></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4">Trả lúc:</label>
                                    <div class="col-md-8">
                                        <label><strong>00:45 28/12/2015</strong></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4">Loại phòng:</label>
                                    <div class="col-md-8">
                                        <label><strong>Phòng đơn</strong></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4">Mã HĐ:</label>
                                    <div class="col-md-8">
                                        <label><strong>HĐ-00001</strong></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4">Giá:</label>
                                    <div class="col-md-8">
                                        <label><strong>200.000</strong></label>
                                    </div>
                                </div>                               
                            </div>
                            <div class="col-sm-6">
                                <h2 class="panel-title"> Tiền phòng</h2>
                                <br/>
                                <div class="form-group">
                                    <label class="col-sm-4">Hình thức ở:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control">
                                            <option value="">Theo giờ</option>
                                            <option value="">Theo ngày</option>
                                            <option value="">Qua đêm</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4">Thời gian đã ở:</label>
                                    <div class="col-sm-8">
                                        <label><strong>1 đêm</strong> 21:45 27/12/2015 - 00:45 28/12/2015</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4">Thành tiền:</label>
                                    <div class="col-sm-8">
                                        <label><strong>200.000</strong></label> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-sm-6">
                                <h2 class="panel-title">Tiền dịch vụ</h2>
                                <br/>
                                <div class="form-group">
                                    <label class="col-md-4">Dịch vụ đã dùng:</label>
                                    <div class="col-md-8">
                                        <label ><strong>3 chai nước lọc</strong></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4">Thành tiền:</label>
                                    <div class="col-md-8">
                                        <label ><strong>60.000</strong></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h2 class="panel-title">Phụ thu</h2>
                                <br/>
                                <div class="form-group">
                                    <label class="col-md-4">Giảm trừ:</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4">Trả trước:</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4">Thành tiền:</label>
                                    <div class="col-md-8">
                                        <label ><strong>60.000</strong></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">                          
                            <h2 class="panel-title" style="margin-left: 13px;">Tổng cộng</h2>
                            <br/>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-md-4">Phải thanh toán:</label>
                                    <label class="col-md-8"><strong>320.000</strong></label>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4">Trạng thái:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control">
                                            <option value="">Đã thanh toán</option>
                                            <option value="">Chưa thanh toán</option>
                                            <option value="">Đang checkin</option>
                                            <option value="">Đưa vào công nợ</option>
                                            <option value="">Chuyển hóa đơn vào phòng khác</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">                               
                                <div class="form-group">
                                    <label class="col-sm-4">Hình thức thanh toán:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control">
                                            <option value="">Tiền mặt</option>
                                            <option value="">Chuyển khoản</option>
                                            <option value="">Thẻ tín dụng</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label class="col-sm-2">Ghi chú:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" type="text" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="text-center">
                                <button class="btn btn-primary">Trả phòng</button>
                                <button type="reset" class="btn btn-default">Hủy</button>
                            </div>
                        </div>
                    </footer>
                </section>
            </form>
        </div>
    </div>
    <!-- end: page -->
</section>
</div>
<?php include 'sidebar-right.php'; ?>