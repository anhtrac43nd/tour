<?php include 'header.php'; ?>
<?php include 'sidebar-left.php'; ?>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Thêm tầng</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Thêm tầng</span></li>
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

                        <h2 class="panel-title">Thêm tầng mới</h2>
                    </header>
                    <div class="panel-body">                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tên tầng: <span class="required">*</span></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Chọn màu: <span class="required">*</span></label>
                            <div class="col-sm-6">
                                <div class="input-group color colorpicker-element" data-color="rgb(255, 146, 180)" data-color-format="rgb" data-plugin-colorpicker="">
                                    <span class="input-group-addon"><i style="background-color: rgb(255, 146, 180);"></i></span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Số phòng: <span class="required">*</span></label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" required min="1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Loại phòng: <span class="required">*</span></label>
                            <div class="col-sm-6">
                                <select id="company" class="form-control" required>
                                    <option value="">Phòng đơn</option>
                                    <option value="">Phòng đôi</option>
                                    <option value="">Phòng đặc biệt</option>
                                </select>
                                <label class="error" for="select"></label>
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