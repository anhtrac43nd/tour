<?php include 'header.php'; ?>
<?php include 'sidebar-left.php'; ?>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Danh sách đặt phòng</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Cài đặt chung</span></li>
                <li><span>Danh sách phòng đã đặt</span></li>
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

            <h2 class="panel-title">Danh sách phòng khách hàng đã đặt</h2>
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
                        <label> phòng</label>
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
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Phòng số</th>
                            <th>Tên khách hàng</th>
                            <th>Thời gian vào</th>
                            <th>Thời gian ra dự kiến</th>
                            <th>Số tiền đặt cọc</th>
                            <th>Nhân viên Checkin</th>
                            <th>Ghi chú</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeX">
                            <td>1</td>
                            <td>P203</td>
                            <td>Nguyễn Văn A</td>
                            <td>25/12/2015 8:46AM</td>
                            <td>25/12/2015 10:45AM</td>
                            <td>50.000</td>
                            <td>Nhân viên A</td>
                            <td></td>
                        </tr>
                        <tr class="gradeX">
                            <td>2</td>
                            <td>P203</td>
                            <td>Nguyễn Văn A</td>
                            <td>25/12/2015 8:46AM</td>
                            <td>25/12/2015 10:45AM</td>
                            <td>50.000</td>
                            <td>Nhân viên A</td>
                            <td></td>
                        </tr>
                        <tr class="gradeX">
                            <td>3</td>
                            <td>P203</td>
                            <td>Nguyễn Văn A</td>
                            <td>25/12/2015 8:46AM</td>
                            <td>25/12/2015 10:45AM</td>
                            <td>50.000</td>
                            <td>Nhân viên A</td>
                            <td></td>
                        </tr>
                        <tr class="gradeX">
                            <td>4</td>
                            <td>P203</td>
                            <td>Nguyễn Văn A</td>
                            <td>25/12/2015 8:46AM</td>
                            <td>25/12/2015 10:45AM</td>
                            <td>50.000</td>
                            <td>Nhân viên A</td>
                            <td></td>
                        </tr>
                        <tr class="gradeX">
                            <td>5</td>
                            <td>P203</td>
                            <td>Nguyễn Văn A</td>
                            <td>25/12/2015 8:46AM</td>
                            <td>25/12/2015 10:45AM</td>
                            <td>50.000</td>
                            <td>Nhân viên A</td>
                            <td></td>
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