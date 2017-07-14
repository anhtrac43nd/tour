<?php include 'header.php'; ?>
<?php include 'sidebar-left.php'; ?>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Quản lý thu</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Quản lý thu</span></li>
                <li><span>Danh sách phiếu thu</span></li>
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

            <h2 class="panel-title">Danh sách phiếu thu</h2>
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
                        <label> phiếu thu</label>
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
            <div class="row" style="margin-bottom: 1em;">
                <form class="form-inline" role="form">
                    <div class="form-group col-sm-9 text-left">
                        <label class="control-label">Từ ngày</label>
                        <div class="input-daterange input-group" data-plugin-datepicker>
                            <input type="text" class="form-control" name="start">
                        </div>
                        <label>đến ngày</label>
                        <div class="input-daterange input-group" data-plugin-datepicker>
                            <input type="text" class="form-control" name="end">
                        </div>
                        <a href="" class="btn btn-primary btn-sm" title="" data-toggle="tooltip" data-trigger="hover" data-original-title="Tính phiếu thu theo thời gian" id="inputTooltip">Tổng kết</a>
                    </div>
                    <div class="form-group col-sm-3 text-right">
                        <a href="addnewreceipts.php" class="btn btn-primary btn-sm">Thêm phiếu thu</a>
                    </div>
                </form>
            </div>
            <br/>
            <h2 class="panel-title text-center">Danh sách phiếu thu</h2>
            <br/>
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Số CT</th>
                            <th>Ngày, giờ tạo</th>
                            <th>Diễn giải phiếu thu</th>
                            <th>Số tiền</th>
                            <th>Người trả</th>
                            <th>Tạo bởi</th>
                            <th>Ghi chú</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeX">
                            <td>1</td>
                            <td>PT000001</td>
                            <td>15/08/2015 8:45</td>
                            <td>Tiền phòng</td>
                            <td>150.000VNĐ</td>
                            <td>Nguyễn Văn A</td>
                            <td>Nhân viên A</td>
                            <td>Đã thanh toán</td>
                            <td class="actions">
                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <tr class="gradeC">
                            <td>2</td>
                            <td>PT000001</td>
                            <td>15/08/2015 8:45</td>
                            <td>Tiền phòng</td>
                            <td>150.000VNĐ</td>
                            <td>Nguyễn Văn A</td>
                            <td>Nhân viên A</td>
                            <td>Đã thanh toán</td>
                            <td class="actions">
                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>3</td>
                            <td>PT000001</td>
                            <td>15/08/2015 8:45</td>
                            <td>Tiền phòng</td>
                            <td>150.000VNĐ</td>
                            <td>Nguyễn Văn A</td>
                            <td>Nhân viên A</td>
                            <td>Đã thanh toán</td>
                            <td class="actions">
                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                            </td>
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
<div id="dialog" class="modal-block mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Bạn có chắc?</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-text">
                    <p>Bạn có chắc muốn xóa dòng này?</p>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button id="dialogConfirm" class="btn btn-primary">Xóa</button>
                    <button id="dialogCancel" class="btn btn-default">Hủy</button>
                </div>
            </div>
        </footer>
    </section>
</div>
<?php include 'sidebar-right.php'; ?>