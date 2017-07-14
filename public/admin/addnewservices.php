<?php include 'header.php'; ?>
<?php include 'sidebar-left.php'; ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Thêm dịch vụ</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Thêm dịch vụ</span></li>
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

                        <h2 class="panel-title">Thêm mới dịch vụ <br/><br/>
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#dichvu">Dịch vụ</a></li>
                                <li><a data-toggle="tab" href="#sanpham">Sản phẩm</a></li>
                            </ul>
                        </h2>
                    </header>

                    <div class="tab-content">
                        <div id="dichvu" class="tab-pane fade in active">
                            <div class="panel-body">
                                <div class=" col-md-12">
                                    <h2 class="panel-title">Danh sách dịch vụ</h2>
                                    <br/>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <div class="checkbox-custom chekbox-primary">
                                                <input id="" value="" type="checkbox" name="for[]">
                                                <label>Wifi</label>
                                            </div>
                                            <div class="checkbox-custom chekbox-primary">
                                                <input id="" value="" type="checkbox" name="for[]">
                                                <label>Máy giặt</label>
                                            </div>
                                            <div class="checkbox-custom chekbox-primary">
                                                <input id="" value="" type="checkbox" name="for[]">
                                                <label>Vận chuyển hành lý</label>
                                            </div>
                                            <div class="checkbox-custom chekbox-primary">
                                                <input id="" value="" type="checkbox" name="for[]">
                                                <label>Thang máy</label>
                                            </div>
                                            <div class="checkbox-custom chekbox-primary">
                                                <input id="" value="" type="checkbox" name="for[]">
                                                <label>Nhà hàng</label>
                                            </div>
                                            <div class="checkbox-custom chekbox-primary">
                                                <input id="" value="" type="checkbox" name="for[]">
                                                <label>Massage</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">                                           
                                            <div class="checkbox-custom chekbox-primary">
                                                <input id="" value="" type="checkbox" name="for[]">
                                                <label>Quầy bar</label>
                                            </div>
                                            <div class="checkbox-custom chekbox-primary">
                                                <input id="" value="" type="checkbox" name="for[]">
                                                <label>Tivi</label>
                                            </div>
                                            <div class="checkbox-custom chekbox-primary">
                                                <input id="" value="" type="checkbox" name="for[]">
                                                <label>Chỗ để xe</label>
                                            </div>
                                            <div class="checkbox-custom chekbox-primary">
                                                <input id="" value="" type="checkbox" name="for[]">
                                                <label>Nóng lạnh</label>
                                            </div>
                                            <div class="checkbox-custom chekbox-primary">
                                                <input id="" value="" type="checkbox" name="for[]">
                                                <label>Thuê xe đạp/máy</label>
                                            </div>
                                            <div class="checkbox-custom chekbox-primary">
                                                <input id="" value="" type="checkbox" name="for[]">
                                                <label>Tủ lạnh</label>
                                            </div>
                                            <label class="error" for="for[]"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="sanpham" class="tab-pane fade in">
                            <div class="panel-body">
                                <div class="col-sm-12">
                                    <h2 class="panel-title">Danh sách dịch vụ</h2>
                                </div>
                                <br/>
                                <div class="col-sm-6">                                  
                                    <div class="form-group form-inline">
                                        <div class="col-sm-3">
                                            <label class="control-label">- Nước ngọt</label>
                                        </div>
                                        <label class="col-sm-8 control-label" style="padding-top: 0;">Số lượng <input type="number" value="1" class="form-control" style="width: 6em;"></label>                                       
                                    </div>
                                    <div class="form-group form-inline">
                                        <div class="col-sm-3">
                                            <label class="control-label">- Hoa quả</label>
                                        </div>
                                        <label class="col-sm-8 control-label" style="padding-top: 0;">Số lượng <input type="number" value="1" class="form-control" style="width: 6em;"></label>                                       
                                    </div>
                                    <div class="form-group form-inline">
                                        <div class="col-sm-3">
                                            <label class="control-label">- Ba cây sung</label>
                                        </div>
                                        <label class="col-sm-8 control-label" style="padding-top: 0;">Số lượng <input type="number" value="1" class="form-control" style="width: 6em;"></label>                                       
                                    </div>
                                    <div class="form-group form-inline">
                                        <div class="col-sm-3">
                                            <label class="control-label">- Khăn tắm</label>
                                        </div>
                                        <label class="col-sm-8 control-label" style="padding-top: 0;">Số lượng <input type="number" value="1" class="form-control" style="width: 6em;"></label>                                       
                                    </div>
                                    <div class="form-group form-inline">
                                        <div class="col-sm-3">
                                            <label class="control-label">- Dầu gội</label>
                                        </div>
                                        <label class="col-sm-8 control-label" style="padding-top: 0;">Số lượng <input type="number" value="1" class="form-control" style="width: 6em;"></label>                                       
                                    </div>
                                </div>
                                <div class="col-md-6">

                                </div>
                            </div>

                        </div>
                        <footer class="panel-footer">
                            <div class="row">
                                <div class="text-center">
                                    <button class="btn btn-primary" type="submit">Thêm</button>
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