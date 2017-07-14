<?php include 'header.php'; ?>
<?php include 'sidebar-left.php'; ?>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Xem chi tiết phòng</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Xem chi tiết phòng</span></li>
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

                        <h2 class="panel-title">Chi tiết phòng - 101</h2>
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
                                    <label class="col-md-4">Thời gian trả dự kiến:</label>
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
                            </div>
                            <div class="col-sm-6">
                                <h2 class="panel-title"> Giá phòng</h2>
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
                                    <label class="col-sm-4">Giá:</label>
                                    <div class="col-sm-8">
                                        <label><strong>200.000</strong></label> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-sm-6">
                                <h2 class="panel-title">Dịch vụ</h2>
                                <br/>
                                <div class="form-group">
                                    <label class="col-md-4">Dịch vụ có sẵn:</label>
                                    <div class="col-md-8">
                                        <label ><strong>- 3 chai nước lọc</strong></label><br/>
                                        <label ><strong>- Tivi LCS 21 inch</strong></label><br/>
                                        <label ><strong>- Điều hòa 2 chiều</strong></label><br/>
                                        <label ><strong>- Tủ lạnh mini</strong></label><br/>
                                        <label ><strong>- Bình tắm nóng lạnh</strong></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h2 class="panel-title">Dịch vụ sử dụng thêm</h2>
                                <br/>
                                <div class="form-group">
                                    <label class="col-md-4">Dịch vụ sử dụng thêm:</label>
                                    <div class="col-md-8">
                                        <label><strong>- Thuê xe</strong></label><br/>
                                        <label><strong>- Ăn sáng</strong></label>
                                    </div>
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