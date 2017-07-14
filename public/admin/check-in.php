<?php include 'header.php'; ?>
<?php include 'sidebar-left.php'; ?>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Nhận phòng</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Nhận phòng</span></li>
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

                        <h2 class="panel-title">Nhận phòng</h2>
                    </header>
                    <div class="panel-body">
                        <div class="row">                          
                            <div class="col-md-6">
                                <h2 class="panel-title"> Thông tin đăng ký - Phòng đơn</h2>
                                <br/>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Giá: <span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" min="0" required="required"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Ngày vào: <span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <div class="input-group">                                            
                                            <input type="text" data-plugin-datepicker class="form-control" required/>                                          
                                            <span class="input-group-addon">lúc</span>
                                            <input type="text" data-plugin-timepicker class="form-control" data-plugin-options='{ "showMeridian": false }'>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Ngày ra dự kiến:</label>
                                    <div class="col-md-8">
                                        <div class="input-group">                                            
                                            <input type="text" data-plugin-datepicker class="form-control"/>                                          
                                            <span class="input-group-addon">lúc</span>
                                            <input type="text" data-plugin-timepicker class="form-control" data-plugin-options='{ "showMeridian": false }'>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Trả trước:</label>
                                    <div class="col-md-8">
                                        <input type="number" min="0" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Giảm trừ:</label>
                                    <div class="col-md-8">
                                        <input type="number" min="0" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Đăng ký ở: <span class="required">*</span></label>
                                    <div class="col-sm-8">
                                        <select id="company" class="form-control" required>
                                            <option value="">Theo giờ</option>
                                            <option value="">Qua đêm</option>
                                            <option value="">Theo ngày</option>
                                        </select>
                                        <label class="error" for="room"></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Số lượng người: <span class="required">*</span></label>
                                    <div class="col-sm-8">
                                        <select id="company" class="form-control" required>
                                            <option value="">1 người</option>
                                            <option value="">2 người</option>
                                            <option value="">3 người</option>
                                            <option value="">Nhiều hơn 3 người</option>
                                        </select>
                                        <label class="error" for="room"></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Ghi chú:</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" type="text" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h2 class="panel-title"> Thông tin khách hàng</h2>
                                <br/>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Tên khách hàng: <span class="required">*</span></label>
                                    <div class="col-sm-8">                                    
                                        <input type="text" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Số CMND/Passport: <span class="required">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="number" min="0" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Ngày cấp:</label>
                                    <div class="col-sm-8">
                                        <input type="text" data-plugin-datepicker class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-sm-4 control-label">Địa chỉ:</lable>
                                    <div class="col-sm-8">
                                        <input type="text"  class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-sm-4 control-label">Điện thoại:</lable>
                                    <div class="col-sm-8">
                                        <input type="number" min="0" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Giới tính:</label> 
                                    <div class="col-sm-8">
                                        <span class="radio-custom radio-primary">
                                            <input id="datetime" name="choose" type="radio" value="datetime">
                                            <label for="datetime">Nam</label>
                                        </span>&nbsp; &nbsp; 
                                        <span class="radio-custom radio-primary">
                                            <input id="nhanvien" name="choose" type="radio" value="nhanvien">
                                            <label for="nhanvien">Nữ</label>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Quốc tịch:</label>
                                    <div class="col-sm-8">
                                        <select id="company" class="form-control">
                                            <option value="">Việt Nam</option>
                                            <option value="">Khác</option>
                                        </select>
                                        <label class="error" for="room"></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Ghi chú:</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" type="text" rows="6"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="text-center">
                                <button class="btn btn-primary">Nhận phòng</button>
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