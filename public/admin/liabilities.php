<?php include 'header.php'; ?>
<?php include 'sidebar-left.php'; ?>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Quản lý công nợ</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Quản lý công nợ</span></li>
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

            <h2 class="panel-title">Công nợ phải thu</h2>
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
                        <label> công ty</label>
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
                        <a href="" class="btn btn-primary btn-sm" title="">Xem</a>
                    </div>
                </form>
            </div>
            <br/>
            <div class="row">
                <form class="form-inline" role="form">
                    <div class="form-group col-sm-12 text-center">
                        <label class="control-label">Công nợ tổng hợp từ</label>
                        <div class="input-daterange input-group" data-plugin-datepicker>
                            <input type="text" class="form-control" name="start" disabled="disabled">
                        </div>
                        <label>đến</label>
                        <div class="input-daterange input-group" data-plugin-datepicker>
                            <input type="text" class="form-control" name="end" disabled="disabled">
                        </div>
                        <a href="" class="btn btn-primary btn-sm" title="" >Chọn thời gian khác</a>
                    </div>
                </form>
            </div>
            <br/>
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                    <thead>
                        <tr>
                            <th colspan="3"></th>
                            <th colspan="2">Nợ đầu kỳ</th>
                            <th colspan="2">Nợ trong kỳ</th>
                            <th colspan="2">Trả trong kỳ</th>
                            <th colspan="2">Nợ cuối kỳ</th>
                            <th colspan="2"></th>
                        </tr>
                        <tr>
                            <th>STT</th>
                            <th>Mã</th>
                            <th>Tên Cty/Group</th>
                            <th>Số HĐ</th>
                            <th>Số tiền</th>
                            <th>Số HĐ</th>
                            <th>Số tiền</th>
                            <th>Số HĐ</th>
                            <th>Số tiền</th>
                            <th>Số HĐ</th>
                            <th>Số tiền</th>
                            <th>Khách sạn</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeX">
                            <td>1</td>
                            <td>KH000001</td>
                            <td>Công ty A</td>
                            <td>1</td>
                            <td>150.000</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>150.000</td>
                            <td>Khách sạn Minihotel</td>
                            <td class="actions">
                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                <a href="lists-debtbill.php" class="on-default" data-toggle="tooltip" data-trigger="hover" data-original-title="Xem danh sách hóa đơn nợ" id="inputTooltip"><i class="fa fa-list-ol"></i></a>
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