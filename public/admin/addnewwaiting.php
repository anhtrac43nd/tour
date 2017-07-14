<?php include 'header.php'; ?>
<?php include 'sidebar-left.php'; ?>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Thêm khách chờ</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Thêm khách chờ</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->

    <div class="row">
        <div class="col-md-12">
            <form id="" action="" class="form-horizontal">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Thêm khách chờ mới</h2>
                    </header>
                    <div class="panel-body">                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Họ và tên: <span class="required">*</span></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Số CMND: <span class="required">*</span></label>
                            <div class="col-sm-6">
                                <input type="number" min="0" class="form-control" required />
                            </div>
                        </div>                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Địa chỉ:</label>
                            <div class="col-sm-6">
                                <textarea  rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Ngày sinh:</label>
                            <div class="col-sm-6">
                                <input type="text" data-plugin-datepicker="" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Điện thoại: </label>
                            <div class="col-sm-6">
                                <input type="number" min="0" class="form-control" />
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