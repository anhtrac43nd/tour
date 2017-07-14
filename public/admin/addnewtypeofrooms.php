<?php include 'header.php'; ?>
<?php include 'sidebar-left.php'; ?>
<script>
    var numberPriceTime = 1;

    function deletePriceTime(idDelete)
    {
        $("#" + idDelete).remove();
    }

//    function addCheck(idCheck)
//    {
//        numberPriceTime++;
//        var chuoi = '<div id="priceTime' + numberPriceTime + '" class="form-group form-inline"><label class="col-sm-4 control-label" style="padding-top:0;"><span>Giờ thứ <input type="number" class="form-control" min="0" style="width:4em;"> </span></label><div class="col-sm-8"><input type="number" class="form-control"  min="0" /> <button onclick="deletePriceTime(\'priceTime' + numberPriceTime + '\')"><i class="fa fa-trash-o"></i></button></div></div>';
//
//        $("#" + idCheck).append(chuoi);
//
//    }
</script>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Thêm mới loại phòng</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Thêm mới loại phòng</span></li>
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

                        <h2 class="panel-title">Thêm mới loại phòng <br/><br/>
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#thongtinchung">Thông tin chung</a></li>
                                <li><a data-toggle="tab" href="#ngaythuong">Ngày thường</a></li>
                                <li><a data-toggle="tab" href="#ngaycuoituan">Ngày cuối tuần</a></li>
                                <li><a data-toggle="tab" href="#ngayle">Ngày lễ</a></li>
                                <li><a data-toggle="tab" href="#hanghoa">Hàng hóa</a></li>
                            </ul>
                        </h2>
                    </header>

                    <div class="tab-content">
                        <div id="thongtinchung" class="tab-pane fade in active">
                            <div class="panel-body">
                                <div class=" col-md-6">
                                    <h2 class="panel-title text-center">Thông tin chung</h2>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Loại phòng: <span class="required">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="roomtype" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Số giường: <span class="required">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="number" name="" class="form-control" required min="0"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Số người:</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Giá ngày: <span class="required">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Giá qua đêm:</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Giá theo tháng:</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Hình đại diện</label>
                                        <div class="col-md-8">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="input-append">
                                                    <div class="uneditable-input">
                                                        <i class="fa fa-file fileupload-exists"></i>
                                                        <span class="fileupload-preview"></span>
                                                    </div>
                                                    <span class="btn btn-default btn-file">
                                                        <span class="fileupload-exists">Thay đổi</span>
                                                        <span class="fileupload-new">Chọn ảnh</span>
                                                        <input type="file">
                                                    </span>
                                                    <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Xóa</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="ngaythuong" class="tab-pane fade in">
                            <div class="panel-body">
                                <div class="col-md-6" id="priceHour">	
                                    <h2 class="panel-title">Giá theo giờ</h2><a href="javascript:void( 0 );" onclick="addPriceHour();"><img src="images/images.png" alt="" title=""/></a>
                                    <script>
                                        function addPriceHour()
                                        {
                                            numberPriceTime++;
                                            var chuoi = '<div id="priceTime' + numberPriceTime + '" class="form-group form-inline"><label class="col-sm-4 control-label" style="padding-top:0;"><span>Giờ thứ <input type="number" class="form-control" min="0" style="width:4em;"> </span></label><div class="col-sm-8"><input type="number" class="form-control"  min="0" /> <button onclick="deletePriceTime(\'priceTime' + numberPriceTime + '\')"><i class="fa fa-trash-o"></i></button></div></div>';

                                            $("#priceHour").append(chuoi);

                                        }
                                    </script>
                                    <br/>
                                    <div class="form-group form-inline">

                                        <label class="col-sm-4 control-label" style="padding-top: 0;">Giờ thứ <input type="number" value="1" class="form-control" style="width: 4em;"></label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" />
                                        </div>
                                    </div>   

                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2 class="panel-title">Giá theo ngày</h2>  <br/>                                  
                                            <div class="form-group form-inline">
                                                <label class="col-sm-3 control-label" style="padding-top: 0;">Giá</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" min="0" style="width: 100%;"/>
                                                </div>
                                            </div> 
                                        </div>

                                        <div class="col-sm-6">
                                            <h2 class="panel-title">Giá qua đêm</h2>      <br/>                              
                                            <div class="form-group form-inline">
                                                <label class="col-sm-3 control-label" style="padding-top: 0;">Giá</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" min="0" style="width: 100%;"/>
                                                </div>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="panel-body">
                                <div class="col-md-6" id="checkout">
                                    <h2 class="panel-title">Phụ trội quá giờ Checkout (theo ngày)</h2><a href="javascript:void( 0 );" onclick="addcheckout();"><img src="images/images.png" alt="" title=""/></a>
                                    <script>
                                        function addcheckout()
                                        {
                                            numberPriceTime++;
                                            var chuoi = '<div id="priceTime' + numberPriceTime + '" class="form-group form-inline"><label class="col-sm-4 control-label" style="padding-top:0;"><span>Giờ thứ <input type="number" class="form-control" min="0" style="width:4em;"> </span></label><div class="col-sm-8"><input type="number" class="form-control"  min="0" /> <button onclick="deletePriceTime(\'priceTime' + numberPriceTime + '\')"><i class="fa fa-trash-o"></i></button></div></div>';

                                            $("#checkout").append(chuoi);

                                        }
                                    </script>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-sm-12"><span class="text-danger">Nếu ở quá quy định dưới đây thì tính thành 1 ngày</span></label>
                                    </div>                                    
                                    <div class="form-group form-inline">

                                        <label class="col-sm-4 control-label" style="padding-top: 0;">Giờ thứ <input type="number" value="1" class="form-control" style="width: 4em;"></label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" />
                                        </div>
                                    </div>   

                                </div>


                                <div class="col-md-6" id="checkoutnight">
                                    <h2 class="panel-title">Phụ trội quá giờ Checkout (qua đêm)</h2><a href="javascript:void( 0 );" onclick="addcheckoutnight();"><img src="images/images.png" alt="" title=""/></a>
                                    <script>
                                        function addcheckoutnight()
                                        {
                                            numberPriceTime++;
                                            var chuoi = '<div id="priceTime' + numberPriceTime + '" class="form-group form-inline"><label class="col-sm-4 control-label" style="padding-top:0;"><span>Giờ thứ <input type="number" class="form-control" min="0" style="width:4em;"> </span></label><div class="col-sm-8"><input type="number" class="form-control"  min="0" /> <button onclick="deletePriceTime(\'priceTime' + numberPriceTime + '\')"><i class="fa fa-trash-o"></i></button></div></div>';

                                            $("#checkoutnight").append(chuoi);

                                        }
                                    </script>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-sm-12"><span class="text-danger">Nếu ở quá quy định dưới đây thì tính thành 1 ngày</span></label>
                                    </div> 
                                    <div class="form-group form-inline">

                                        <label class="col-sm-4 control-label" style="padding-top: 0;">Giờ thứ <input type="number" value="1" class="form-control" style="width: 4em;"></label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" />
                                        </div>
                                    </div>                                       
                                </div>  
                            </div>
                            <br/>
                            <div class="panel-body">
                                <div class="col-md-6" id="checkinearly">
                                    <h2 class="panel-title">Phụ trội Ckeckin sớm (theo ngày)</h2><a href="javascript:void( 0 );" onclick="addcheckinearly();"><img src="images/images.png" alt="" title=""/></a>
                                    <script>
                                        function addcheckinearly()
                                        {
                                            numberPriceTime++;
                                            var chuoi = '<div id="priceTime' + numberPriceTime + '" class="form-group form-inline"><label class="col-sm-4 control-label" style="padding-top:0;"><span>Giờ thứ <input type="number" class="form-control" min="0" style="width:4em;"> </span></label><div class="col-sm-8"><input type="number" class="form-control"  min="0" /> <button onclick="deletePriceTime(\'priceTime' + numberPriceTime + '\')"><i class="fa fa-trash-o"></i></button></div></div>';

                                            $("#checkinearly").append(chuoi);

                                        }
                                    </script>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-sm-12"><span class="text-danger">Nếu ở quá quy định dưới đây thì tính thành 1 ngày</span></label>
                                    </div> 
                                    <div class="form-group form-inline">
                                        <label class="col-sm-4 control-label" style="padding-top: 0;">Giờ thứ <input type="number" value="1" class="form-control" style="width: 4em;"></label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" />
                                        </div>
                                    </div>                                                                        

                                </div>

                                <div class="col-md-6" id="checkinnight">
                                    <h2 class="panel-title">Phụ trội Checkin sớm (qua đêm)</h2><a href="javascript:void( 0 );" onclick="addcheckinnight();"><img src="images/images.png" alt="" title=""/></a>
                                    <script>
                                        function addcheckinnight()
                                        {
                                            numberPriceTime++;
                                            var chuoi = '<div id="priceTime' + numberPriceTime + '" class="form-group form-inline"><label class="col-sm-4 control-label" style="padding-top:0;"><span>Giờ thứ <input type="number" class="form-control" min="0" style="width:4em;"> </span></label><div class="col-sm-8"><input type="number" class="form-control"  min="0" /> <button onclick="deletePriceTime(\'priceTime' + numberPriceTime + '\')"><i class="fa fa-trash-o"></i></button></div></div>';

                                            $("#checkinnight").append(chuoi);

                                        }
                                    </script>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-sm-12"><span class="text-danger">Nếu ở quá quy định dưới đây thì tính thành 1 ngày</span></label>
                                    </div> 
                                    <div class="form-group form-inline">

                                        <label class="col-sm-4 control-label" style="padding-top: 0;">Giờ thứ <input type="number" value="1" class="form-control" style="width: 4em;"></label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" />
                                        </div>
                                    </div>                                     
                                </div>                                
                            </div>
                            <br/>
                            <div class="panel-body">
                                <div class="col-md-6">
                                    <h2 class="panel-title">Phụ trội thêm khách - Extra Bed</h2>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Tiếp mỗi người: <span class="required">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="panel-title">Ghi chú</h2>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Ghi chú:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" type="text" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="ngaycuoituan" class="tab-pane fade in">
                            <div class="panel-body">
                                <div class="col-md-6" id="priceHour1">	
                                    <h2 class="panel-title">Giá theo giờ</h2><a href="javascript:void( 0 );" onclick="addPriceHour1();"><img src="images/images.png" alt="" title=""/></a>
                                    <script>
                                        function addPriceHour1()
                                        {
                                            numberPriceTime++;
                                            var chuoi = '<div id="priceTime' + numberPriceTime + '" class="form-group form-inline"><label class="col-sm-4 control-label" style="padding-top:0;"><span>Giờ thứ <input type="number" class="form-control" min="0" style="width:4em;"> </span></label><div class="col-sm-8"><input type="number" class="form-control"  min="0" /> <button onclick="deletePriceTime(\'priceTime' + numberPriceTime + '\')"><i class="fa fa-trash-o"></i></button></div></div>';

                                            $("#priceHour1").append(chuoi);

                                        }
                                    </script>
                                    <br/>
                                    <div class="form-group form-inline">

                                        <label class="col-sm-4 control-label" style="padding-top: 0;">Giờ thứ <input type="number" value="1" class="form-control" style="width: 4em;"></label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" style="width: 100%;"/>
                                        </div>
                                    </div>                                  
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2 class="panel-title">Giá theo ngày</h2>  <br/>                                  
                                            <div class="form-group form-inline">
                                                <label class="col-sm-3 control-label" style="padding-top: 0;">Giá</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" min="0" style="width: 100%;"/>
                                                </div>
                                            </div> 
                                        </div>

                                        <div class="col-sm-6">
                                            <h2 class="panel-title">Giá qua đêm</h2>      <br/>                              
                                            <div class="form-group form-inline">
                                                <label class="col-sm-3 control-label" style="padding-top: 0;">Giá</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" min="0" style="width: 100%;"/>
                                                </div>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="panel-body">
                                <div class="col-md-6" id="checkout1">
                                    <h2 class="panel-title">Phụ trội quá giờ Checkout (theo ngày)</h2><a href="javascript:void( 0 );" onclick="addcheckout1();"><img src="images/images.png" alt="" title=""/></a>
                                    <script>
                                        function addcheckout1()
                                        {
                                            numberPriceTime++;
                                            var chuoi = '<div id="priceTime' + numberPriceTime + '" class="form-group form-inline"><label class="col-sm-4 control-label" style="padding-top:0;"><span>Giờ thứ <input type="number" class="form-control" min="0" style="width:4em;"> </span></label><div class="col-sm-8"><input type="number" class="form-control"  min="0" /> <button onclick="deletePriceTime(\'priceTime' + numberPriceTime + '\')"><i class="fa fa-trash-o"></i></button></div></div>';

                                            $("#checkout1").append(chuoi);

                                        }
                                    </script>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-sm-12"><span class="text-danger">Nếu ở quá quy định dưới đây thì tính thành 1 ngày</span></label>
                                    </div>                                    
                                    <div class="form-group form-inline">

                                        <label class="col-sm-4 control-label" style="padding-top: 0;">Giờ thứ <input type="number" value="1" class="form-control" style="width: 4em;"></label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" />
                                        </div>
                                    </div>   

                                </div>


                                <div class="col-md-6" id="checkoutnight1">
                                    <h2 class="panel-title">Phụ trội quá giờ Checkout (qua đêm)</h2><a href="javascript:void( 0 );" onclick="addcheckoutnight1();"><img src="images/images.png" alt="" title=""/></a>
                                    <script>
                                        function addcheckoutnight1()
                                        {
                                            numberPriceTime++;
                                            var chuoi = '<div id="priceTime' + numberPriceTime + '" class="form-group form-inline"><label class="col-sm-4 control-label" style="padding-top:0;"><span>Giờ thứ <input type="number" class="form-control" min="0" style="width:4em;"> </span></label><div class="col-sm-8"><input type="number" class="form-control"  min="0" /> <button onclick="deletePriceTime(\'priceTime' + numberPriceTime + '\')"><i class="fa fa-trash-o"></i></button></div></div>';

                                            $("#checkoutnight1").append(chuoi);

                                        }
                                    </script>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-sm-12"><span class="text-danger">Nếu ở quá quy định dưới đây thì tính thành 1 ngày</span></label>
                                    </div> 
                                    <div class="form-group form-inline">

                                        <label class="col-sm-4 control-label" style="padding-top: 0;">Giờ thứ <input type="number" value="1" class="form-control" style="width: 4em;"></label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" />
                                        </div>
                                    </div>                                       
                                </div>  
                            </div>
                            <br/>
                            <div class="panel-body">
                                <div class="col-md-6" id="checkinearly1">
                                    <h2 class="panel-title">Phụ trội Ckeckin sớm (theo ngày)</h2><a href="javascript:void( 0 );" onclick="addcheckinearly1();"><img src="images/images.png" alt="" title=""/></a>
                                    <script>
                                        function addcheckinearly1()
                                        {
                                            numberPriceTime++;
                                            var chuoi = '<div id="priceTime' + numberPriceTime + '" class="form-group form-inline"><label class="col-sm-4 control-label" style="padding-top:0;"><span>Giờ thứ <input type="number" class="form-control" min="0" style="width:4em;"> </span></label><div class="col-sm-8"><input type="number" class="form-control"  min="0" /> <button onclick="deletePriceTime(\'priceTime' + numberPriceTime + '\')"><i class="fa fa-trash-o"></i></button></div></div>';

                                            $("#checkinearly1").append(chuoi);

                                        }
                                    </script>

                                    <div class="form-group">
                                        <label class="col-sm-12"><span class="text-danger">Nếu ở quá quy định dưới đây thì tính thành 1 ngày</span></label>
                                    </div> 
                                    <div class="form-group form-inline">

                                        <label class="col-sm-4 control-label" style="padding-top: 0;">Giờ thứ <input type="number" value="1" class="form-control" style="width: 4em;"></label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" />
                                        </div>
                                    </div>                                                                         

                                </div>

                                <div class="col-md-6" id="checkinnight1">
                                    <h2 class="panel-title">Phụ trội Checkin sớm (qua đêm)</h2><a href="javascript:void( 0 );" onclick="addcheckinnight1();"><img src="images/images.png" alt="" title=""/></a>
                                    <script>
                                        function addcheckinnight1()
                                        {
                                            numberPriceTime++;
                                            var chuoi = '<div id="priceTime' + numberPriceTime + '" class="form-group form-inline"><label class="col-sm-4 control-label" style="padding-top:0;"><span>Giờ thứ <input type="number" class="form-control" min="0" style="width:4em;"> </span></label><div class="col-sm-8"><input type="number" class="form-control"  min="0" /> <button onclick="deletePriceTime(\'priceTime' + numberPriceTime + '\')"><i class="fa fa-trash-o"></i></button></div></div>';

                                            $("#checkinnight1").append(chuoi);

                                        }
                                    </script>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-sm-12"><span class="text-danger">Nếu ở quá quy định dưới đây thì tính thành 1 ngày</span></label>
                                    </div> 
                                    <div class="form-group form-inline">

                                        <label class="col-sm-4 control-label" style="padding-top: 0;">Giờ thứ <input type="number" value="1" class="form-control" style="width: 4em;"></label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" />
                                        </div>
                                    </div>                                     
                                </div>                                
                            </div>
                            <br/>
                            <div class="panel-body">
                                <div class="col-md-6">
                                    <h2 class="panel-title">Phụ trội thêm khách - Extra Bed</h2>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Tiếp mỗi người: <span class="required">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="panel-title">Ghi chú</h2>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Ghi chú:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" type="text" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="ngayle" class="tab-pane fade in">
                            <div class="panel-body">
                                <div class="col-md-6" id="priceHour2">	
                                    <h2 class="panel-title">Giá theo giờ</h2><a href="javascript:void( 0 );" onclick="addPriceHour2();"><img src="images/images.png" alt="" title=""/></a>
                                    <script>
                                        function addPriceHour2()
                                        {
                                            numberPriceTime++;
                                            var chuoi = '<div id="priceTime' + numberPriceTime + '" class="form-group form-inline"><label class="col-sm-4 control-label" style="padding-top:0;"><span>Giờ thứ <input type="number" class="form-control" min="0" style="width:4em;"> </span></label><div class="col-sm-8"><input type="number" class="form-control"  min="0" /> <button onclick="deletePriceTime(\'priceTime' + numberPriceTime + '\')"><i class="fa fa-trash-o"></i></button></div></div>';

                                            $("#priceHour2").append(chuoi);

                                        }
                                    </script>
                                    <br/>
                                    <div class="form-group form-inline">

                                        <label class="col-sm-4 control-label" style="padding-top: 0;">Giờ thứ <input type="number" value="1" class="form-control" style="width: 4em;"></label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" />
                                        </div>
                                    </div>   

                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2 class="panel-title">Giá theo ngày</h2>  <br/>                                  
                                            <div class="form-group form-inline">
                                                <label class="col-sm-3 control-label" style="padding-top: 0;">Giá</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" min="0" style="width: 100%;"/>
                                                </div>
                                            </div> 
                                        </div>

                                        <div class="col-sm-6">
                                            <h2 class="panel-title">Giá qua đêm</h2>      <br/>                              
                                            <div class="form-group form-inline">
                                                <label class="col-sm-3 control-label" style="padding-top: 0;">Giá</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" min="0" style="width: 100%;"/>
                                                </div>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="panel-body">
                                <div class="col-md-6" id="checkout2">
                                    <h2 class="panel-title">Phụ trội quá giờ Checkout (theo ngày)</h2><a href="javascript:void( 0 );" onclick="addcheckout2();"><img src="images/images.png" alt="" title=""/></a>
                                    <script>
                                        function addcheckout2()
                                        {
                                            numberPriceTime++;
                                            var chuoi = '<div id="priceTime' + numberPriceTime + '" class="form-group form-inline"><label class="col-sm-4 control-label" style="padding-top:0;"><span>Giờ thứ <input type="number" class="form-control" min="0" style="width:4em;"> </span></label><div class="col-sm-8"><input type="number" class="form-control"  min="0" /> <button onclick="deletePriceTime(\'priceTime' + numberPriceTime + '\')"><i class="fa fa-trash-o"></i></button></div></div>';

                                            $("#checkout2").append(chuoi);

                                        }
                                    </script>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-sm-12"><span class="text-danger">Nếu ở quá quy định dưới đây thì tính thành 1 ngày</span></label>
                                    </div>                                    
                                    <div class="form-group form-inline">

                                        <label class="col-sm-4 control-label" style="padding-top: 0;">Giờ thứ <input type="number" value="1" class="form-control" style="width: 4em;"></label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" />
                                        </div>
                                    </div>   

                                </div>


                                <div class="col-md-6" id="checkoutnight2">
                                    <h2 class="panel-title">Phụ trội quá giờ Checkout (qua đêm)</h2><a href="javascript:void( 0 );" onclick="addcheckoutnight2();"><img src="images/images.png" alt="" title=""/></a>
                                    <script>
                                        function addcheckoutnight2()
                                        {
                                            numberPriceTime++;
                                            var chuoi = '<div id="priceTime' + numberPriceTime + '" class="form-group form-inline"><label class="col-sm-4 control-label" style="padding-top:0;"><span>Giờ thứ <input type="number" class="form-control" min="0" style="width:4em;"> </span></label><div class="col-sm-8"><input type="number" class="form-control"  min="0" /> <button onclick="deletePriceTime(\'priceTime' + numberPriceTime + '\')"><i class="fa fa-trash-o"></i></button></div></div>';

                                            $("#checkoutnight2").append(chuoi);

                                        }
                                    </script>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-sm-12"><span class="text-danger">Nếu ở quá quy định dưới đây thì tính thành 1 ngày</span></label>
                                    </div> 
                                    <div class="form-group form-inline">

                                        <label class="col-sm-4 control-label" style="padding-top: 0;">Giờ thứ <input type="number" value="1" class="form-control" style="width: 4em;"></label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" />
                                        </div>
                                    </div>                                       
                                </div>  
                            </div>
                            <br/>
                            <div class="panel-body">
                                <div class="col-md-6" id="checkinearly2">
                                    <h2 class="panel-title">Phụ trội Ckeckin sớm (theo ngày)</h2><a href="javascript:void( 0 );" onclick="addcheckinearly2();"><img src="images/images.png" alt="" title=""/></a>
                                    <script>
                                        function addcheckinearly2()
                                        {
                                            numberPriceTime++;
                                            var chuoi = '<div id="priceTime' + numberPriceTime + '" class="form-group form-inline"><label class="col-sm-4 control-label" style="padding-top:0;"><span>Giờ thứ <input type="number" class="form-control" min="0" style="width:4em;"> </span></label><div class="col-sm-8"><input type="number" class="form-control"  min="0" /> <button onclick="deletePriceTime(\'priceTime' + numberPriceTime + '\')"><i class="fa fa-trash-o"></i></button></div></div>';

                                            $("#checkinearly2").append(chuoi);

                                        }
                                    </script>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-sm-12"><span class="text-danger">Nếu ở quá quy định dưới đây thì tính thành 1 ngày</span></label>
                                    </div> 
                                    <div class="form-group form-inline">

                                        <label class="col-sm-4 control-label" style="padding-top: 0;">Giờ thứ <input type="number" value="1" class="form-control" style="width: 4em;"></label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" />
                                        </div>
                                    </div>                                                                        

                                </div>

                                <div class="col-md-6" id="checkinnight2">
                                    <h2 class="panel-title">Phụ trội Checkin sớm (qua đêm)</h2><a href="javascript:void( 0 );" onclick="addcheckinnight2();"><img src="images/images.png" alt="" title=""/></a>
                                    <script>
                                        function addcheckinnight2()
                                        {
                                            numberPriceTime++;
                                            var chuoi = '<div id="priceTime' + numberPriceTime + '" class="form-group form-inline"><label class="col-sm-4 control-label" style="padding-top:0;"><span>Giờ thứ <input type="number" class="form-control" min="0" style="width:4em;"> </span></label><div class="col-sm-8"><input type="number" class="form-control"  min="0" /> <button onclick="deletePriceTime(\'priceTime' + numberPriceTime + '\')"><i class="fa fa-trash-o"></i></button></div></div>';

                                            $("#checkinnight2").append(chuoi);

                                        }
                                    </script>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-sm-12"><span class="text-danger">Nếu ở quá quy định dưới đây thì tính thành 1 ngày</span></label>
                                    </div> 
                                    <div class="form-group form-inline">

                                        <label class="col-sm-4 control-label" style="padding-top: 0;">Giờ thứ <input type="number" value="1" class="form-control" style="width: 4em;"></label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" />
                                        </div>
                                    </div>                                      
                                </div>                                
                            </div>
                            <br/>
                            <div class="panel-body">
                                <div class="col-md-6">
                                    <h2 class="panel-title">Phụ trội thêm khách - Extra Bed</h2>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Tiếp mỗi người: <span class="required">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" min="0" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="panel-title">Ghi chú</h2>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Ghi chú:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" type="text" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="hanghoa" class="tab-pane fade in active">
                            <div class="panel-body">
                                <h2 class="panel-title text-center">Danh sách hàng hóa</h2>
                                <br/>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên hàng</th>
                                                <th>Loại hàng</th>
                                                <th>Số lượng</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="gradeX">
                                                <td>1</td>
                                                <td>Hàng 1</td>
                                                <td>Dễ vỡ</td>
                                                <td><input type="number" class="form-control" min="0" /></td>
                                                <td class="actions">
                                                    <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                    <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                    <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>2</td>
                                                <td>Hàng 2</td>
                                                <td>Hàng nhập khẩu</td>
                                                <td><input type="number" class="form-control" min="0"/></td>
                                                <td class="actions">
                                                    <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                    <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                    <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>3</td>
                                                <td>Hàng 3</td>
                                                <td>Hàng Tàu</td>
                                                <td><input type="number" class="form-control" min="0"/></td>
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