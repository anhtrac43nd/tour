<?php include 'header.php'; ?>
<?php include 'sidebar-left.php'; ?>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Thêm phiếu thu</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Quản lý thu</span></li>
                <li><span>Thêm phiếu thu</span></li>
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

                        <h2 class="panel-title">Thêm phiếu thu mới</h2>
                    </header>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Thời gian:</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </span>
                                    <input type="text" data-plugin-timepicker class="form-control" data-plugin-options='{ "showMeridian": false }'>
                                    <span class="input-group-addon">phút, ngày</span>
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                    <input type="text" data-plugin-datepicker class="form-control" required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Diễn giải thu: <span class="required">*</span></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Số tiền phải thu: <span class="required">*</span></label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Hình thức trả: <span class="required">*</span></label>
                            <div class="col-sm-6">
                                <select id="company" class="form-control" required>
                                    <option value="">Chọn hình thức trả</option>
                                    <option value="">Tiền mặt</option>
                                    <option value="">Chuyển khoản</option>
                                    <option value="">Thẻ tín dụng</option>
                                </select>
                                <label class="error" for="select"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tên người trả:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Ghi chú:</label>
                            <div class="col-sm-6">
                                <textarea  rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="text-center">
                                <button class="btn btn-primary">Thêm</button>
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