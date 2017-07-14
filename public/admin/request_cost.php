<?php include 'header.php'; ?>
<?php include 'sidebar-left.php'; ?>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Yêu cầu báo giá</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Forms</span></li>
                <li><span>Yêu cầu báo giá</span></li>
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

                        <h2 class="panel-title">Yêu cầu báo giá</h2>              
                    </header>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Họ và tên <span class="required">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="fullname" class="form-control" placeholder="" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Email <span class="required">*</span></label>
                                <div class="col-sm-8">
                                    <input type="email" name="email" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Số điện thoại</label>
                                <div class="col-sm-8">
                                    <input type="number" name="cellphone" min="0" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Chủ đề</label>
                                <div class="col-sm-8">
                                    <input type="text"  class="form-control" value="Yêu cầu báo giá" readonly />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Nội dung</label>
                                <div class="col-sm-8">
                                    <textarea type="text" class="form-control" rows="5"></textarea>
                                </div>
                            </div>                                                      
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Tỉnh thành</label>
                                <div class="col-sm-8">
                                    <select id="company" class="form-control">
                                        <option value="">Chọn tỉnh/thành phố</option>
                                        <option value="">Hà Nội</option>
                                        <option value="">Tp. Hồ Chí Minh</option>
                                        <option value="">Vũng Tàu</option>
                                        <option value="">Nha Trang</option>
                                    </select>
                                    <label class="error" for="city"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Khu vực</label>
                                <div class="col-sm-8">
                                    <select id="company" class="form-control">
                                        <option>Gần biển</option>
                                        <option>Gần chợ</option>
                                        <option>Gần khu vui chơi giải trí</option>
                                        <option>Gần bến xe, ga tàu</option>
                                    </select>
                                    <label class="error" for="city"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Loại khách sạn</label>
                                <div class="col-sm-8">
                                    <select id="company" class="form-control" required>
                                        <option value="">Chọn loại khách sạn</option>
                                        <option value="">Khách sạn 1 sao</option>
                                        <option value="">Khách sạn 2 sao</option>
                                        <option value="">Khách sạn 3 sao</option>
                                        <option value="">Khách sạn 5 sao</option>
                                    </select>
                                    <label class="error" for="hoteltype"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Tiện nghi <span class="required">*</span></label>
                                <div class="col-sm-8 convenient">
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" value="" type="checkbox" name="for[]"/>
                                        <label> Wifi</label>
                                    </div>
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" value="" type="checkbox" name="for[]" />
                                        <label> Máy giặt</label>
                                    </div>                                    
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" value="" type="checkbox" name="for[]" />
                                        <label> Nhà hàng</label>
                                    </div>
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" value="" type="checkbox" name="for[]" />
                                        <label> Massage</label>
                                    </div>
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" value="" type="checkbox" name="for[]" />
                                        <label> Quầy bar</label>
                                    </div>
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" value="" type="checkbox" name="for[]" />
                                        <label> Tivi</label>
                                    </div>
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" value="" type="checkbox" name="for[]" />
                                        <label> Chỗ để xe</label>
                                    </div>
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" value="" type="checkbox" name="for[]" />
                                        <label> Nóng lạnh</label>
                                    </div>                                   
                                    <label class="error" for="for[]"></label>
                                </div>
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