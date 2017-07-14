<?php include 'header.php'; ?>
<?php include 'sidebar-left.php'; ?>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Báo cáo doanh thu</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Doanh thu</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->

    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Báo cáo doanh thu</h2>
        </header>
        <div class="panel-body">           
            <div class="row" style="margin-bottom: 1em;">
                <form class="form-inline" role="form">
                    <div class="form-group col-sm-6 text-left">
                        <label  for="selectreceipts">Hiển thị </label>
                        <select id="selectreceipts" class="form-control">
                            <option value="">5</option>
                            <option value="">10</option>
                            <option value="">20</option>
                            <option value="">50</option>
                            <option value="">100</option>
                        </select>
                        <label> hóa đơn</label>
                    </div>
                    <div class="form-group col-sm-6 text-right">
                        <div class="input-group">
                            <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row" style="margin-top: 1em;">
                <form class="form-inline" role="form">
                    <div class="form-group col-sm-12">
                        <div class="input-group">
                            <span>
                                <label>Chọn loại thống kê hóa đơn:</label> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;     
                                <span class="radio-custom radio-primary">
                                    <input id="datetime" name="choose" type="radio" value="datetime"/>
                                    <label for="datetime">Theo thời gian</label>
                                </span>&nbsp; &nbsp; 
                                <span class="radio-custom radio-primary">
                                    <input id="nhanvien" name="choose" type="radio" value="nhanvien"/>
                                    <label for="nhanvien">Theo nhân viên</label>
                                </span>

                            </span>
                        </div>
                    </div>
                </form>     
            </div>
            <br/>
            <h2 class="panel-title text-center">Thống kê các hóa đơn theo thời gian/nhân viên</h2>
            <br/>
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã hóa đơn</th>
                            <th>Phòng</th>
                            <th>Tên khách hàng</th>
                            <th>Trả lúc</th>
                            <th>Khoản khác</th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái</th>
                            <th>Hình thức trả</th>
                            <th>Nv Checkin</th>
                            <th>Nv Checkout</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeX">
                            <td>1</td>
                            <td>HĐ-001</td>
                            <td>207</td>
                            <td>Nguyễn Văn A</td>
                            <td>25/12/2015 8:46AM</td>
                            <td class="text-danger">+50.000</td>
                            <td>250.000</td>
                            <td>Đã thanh toán</td>
                            <td>Tiền mặt</td>
                            <td>Nhân viên A</td>
                            <td>Nhân viên A</td>
                        </tr>
                        <tr class="gradeX">
                            <td>2</td>
                            <td>HĐ-001</td>
                            <td>207</td>
                            <td>Nguyễn Văn A</td>
                            <td>25/12/2015 8:46AM</td>
                            <td class="text-danger">+50.000</td>
                            <td>250.000</td>
                            <td>Đã thanh toán</td>
                            <td>Tiền mặt</td>
                            <td>Nhân viên A</td>
                            <td>Nhân viên A</td>
                        </tr>
                        <tr class="gradeX">
                            <td>3</td>
                            <td>HĐ-001</td>
                            <td>207</td>
                            <td>Nguyễn Văn A</td>
                            <td>25/12/2015 8:46AM</td>
                            <td class="text-danger">+50.000</td>
                            <td>250.000</td>
                            <td>Đã thanh toán</td>
                            <td>Tiền mặt</td>
                            <td>Nhân viên A</td>
                            <td>Nhân viên A</td>
                        </tr>
                        <tr class="gradeX">
                            <td>4</td>
                            <td>HĐ-001</td>
                            <td>207</td>
                            <td>Nguyễn Văn A</td>
                            <td>25/12/2015 8:46AM</td>
                            <td class="text-danger">+50.000</td>
                            <td>250.000</td>
                            <td>Đã thanh toán</td>
                            <td>Tiền mặt</td>
                            <td>Nhân viên A</td>
                            <td>Nhân viên A</td>
                        </tr>
                        <tr class="gradeX">
                            <td>5</td>
                            <td>HĐ-001</td>
                            <td>207</td>
                            <td>Nguyễn Văn A</td>
                            <td>25/12/2015 8:46AM</td>
                            <td class="text-danger">+50.000</td>
                            <td>250.000</td>
                            <td>Đã thanh toán</td>
                            <td>Tiền mặt</td>
                            <td>Nhân viên A</td>
                            <td>Nhân viên A</td>
                        </tr>                  
                    </tbody>
                </table>
            </div>
            <br/>
            <h2 class="panel-title text-center">Tổng doanh thu theo các hóa đơn thống kê trong bảng trên</h2>
            <br/>
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Số lượt thuê</th>
                            <th>Tiền phòng</th>
                            <th>Tiền dịch vụ</th>
                            <th>Phụ thu</th>
                            <th>Giảm trừ</th>
                            <th>Doanh thu</th>                      
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Tổng cộng:</strong></td>
                            <td><strong>5</strong></td>
                            <td><strong>23.000.000</strong></td>
                            <td><strong>1.000.000</strong></td>
                            <td><strong>500.000</strong></td>
                            <td><strong>2.000.000</strong></td>
                            <td><strong>22.500.000</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="margin-top: 1em;">
                <form class="form-inline" role="form">
                    <div class="form-group col-sm-12 text-right">
                        <button class="btn btn-default" type="submit"><i class="fa fa-file-excel-o"></i> Xuất Excel</button>
                        <button class="btn btn-default" type="submit"><i class="fa fa-print"></i> In File</button>                        
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- end: page -->
</section>
</div>
<?php include 'sidebar-right.php'; ?>