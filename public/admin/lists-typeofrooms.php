<?php include 'header.php'; ?>
<?php include 'sidebar-left.php'; ?>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Danh sách các loại phòng</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Cài đặt chung</span></li>
                <li><span>Danh sách các loại phòng</span></li>
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

            <h2 class="panel-title">Danh sách các loại phòng</h2>
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
                        <label> loại phòng</label>
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
            <br/>
            <div class="row" style="margin-bottom: 1em;">
                <form class="form-inline text-left col-md-12" role="form">                  
                    <div class="form-group">
                        <a href="addnewtypeofrooms.php" class="btn btn-primary btn-sm">Thêm loại phòng</a>
                    </div>
                </form>
            </div>
            <br/>
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                    <thead>
                        <tr style="vertical-align: middle; text-align: center">
                            <th>STT</th>
                            <th>Loại phòng</th>
                            <th>Giá phòng</th>
                            <th>Cài đặt giá</th>
                            <th>Quy định phụ trội</th>
                            <th>Số giờ</th>
                            <th>Số người</th>
                            <th>Ghi chú</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeX">
                            <td>1</td>
                            <td>1 phòng đơn</td>
                            <td>200.000</td>
                            <td>
                                <ul>
                                    <li>1 ngày giá: <strong>200.000</strong></li>
                                    <li>Qua đêm giá: <strong>180.000</strong></li>
                                    <li><strong>Tính theo giờ:</strong>
                                        <ul>
                                            <li>Giờ thứ <strong>1</strong> giá: <strong>70.000</strong></li>
                                            <li>Giờ thứ <strong>2</strong> giá: <strong>90.000</strong></li>
                                            <li>Giờ thứ <strong>3</strong> giá: <strong>110.000</strong></li>
                                            <li>Giờ thứ <strong>4</strong> giá: <strong>130.000</strong></li>
                                            <li>Giờ thứ <strong>5</strong> giá: <strong>150.000</strong></li>
                                            <li>Giờ thứ <strong>6</strong> giá: <strong>170.000</strong></li>
                                            <li>Giờ thứ <strong>7</strong> giá: <strong>190.000</strong></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li><span class="text-danger">Phụ trội quá giờ Checkout ở ngày</span>
                                        <ul>
                                            <li>Giờ thứ <strong>1 -> 2: Miễn phí</strong></li>
                                            <li>Giờ thứ <strong>3 -> 6</strong> Phụ trội: <strong>140.000</strong></li>
                                            <li>Quá quy định trên sẽ tính thành 1 ngày</li>
                                        </ul>
                                    </li>
                                    <li><span class="text-danger">Phụ trội quá giờ Checkout ở qua đêm</span>
                                        <ul>
                                            <li>Giờ thứ <strong>1 -> 4</strong> Phụ trội: <strong>20.000</strong></li>
                                            <li>Quá quy định trên sẽ tính thành 1 ngày</li>
                                        </ul>
                                    </li>
                                    <li><span class="text-danger">Phụ trội vào sớm giờ Checkin ở ngày</span>
                                        <ul>
                                            <li>Giờ thứ <strong>1 -> 3: Miễn phí</strong></li>
                                            <li>Giờ thứ <strong>4 -> 7</strong> Phụ trội: <strong>100.000</strong></li>
                                            <li>Quá quy định trên sẽ tính thành 1 ngày</li>
                                        </ul>
                                    </li>
                                    <li><span class="text-danger">Phụ trội quá số lượng người ở</span>
                                        <ul>
                                            <li>Phụ trội mỗi người tiếp theo: <strong>50.000</strong></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                            <td>1</td>
                            <td>2</td>
                            <td></td>
                            <td class="actions">
                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <tr class="gradeX">
                            <td>2</td>
                            <td>1 phòng đơn</td>
                            <td>200.000</td>
                            <td>
                                <ul>
                                    <li>1 ngày giá: <strong>200.000</strong></li>
                                    <li>Qua đêm giá: <strong>180.000</strong></li>
                                    <li><strong>Tính theo giờ:</strong>
                                        <ul>
                                            <li>Giờ thứ <strong>1</strong> giá: <strong>70.000</strong></li>
                                            <li>Giờ thứ <strong>2</strong> giá: <strong>90.000</strong></li>
                                            <li>Giờ thứ <strong>3</strong> giá: <strong>110.000</strong></li>
                                            <li>Giờ thứ <strong>4</strong> giá: <strong>130.000</strong></li>
                                            <li>Giờ thứ <strong>5</strong> giá: <strong>150.000</strong></li>
                                            <li>Giờ thứ <strong>6</strong> giá: <strong>170.000</strong></li>
                                            <li>Giờ thứ <strong>7</strong> giá: <strong>190.000</strong></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li><span class="text-danger">Phụ trội quá giờ Checkout ở ngày</span>
                                        <ul>
                                            <li>Giờ thứ <strong>1 -> 2: Miễn phí</strong></li>
                                            <li>Giờ thứ <strong>3 -> 6</strong> Phụ trội: <strong>140.000</strong></li>
                                            <li>Quá quy định trên sẽ tính thành 1 ngày</li>
                                        </ul>
                                    </li>
                                    <li><span class="text-danger">Phụ trội quá giờ Checkout ở qua đêm</span>
                                        <ul>
                                            <li>Giờ thứ <strong>1 -> 4</strong> Phụ trội: <strong>20.000</strong></li>
                                            <li>Quá quy định trên sẽ tính thành 1 ngày</li>
                                        </ul>
                                    </li>
                                    <li><span class="text-danger">Phụ trội vào sớm giờ Checkin ở ngày</span>
                                        <ul>
                                            <li>Giờ thứ <strong>1 -> 3: Miễn phí</strong></li>
                                            <li>Giờ thứ <strong>4 -> 7</strong> Phụ trội: <strong>100.000</strong></li>
                                            <li>Quá quy định trên sẽ tính thành 1 ngày</li>
                                        </ul>
                                    </li>
                                    <li><span class="text-danger">Phụ trội quá số lượng người ở</span>
                                        <ul>
                                            <li>Phụ trội mỗi người tiếp theo: <strong>50.000</strong></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                            <td>1</td>
                            <td>2</td>
                            <td></td>
                            <td class="actions">
                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <tr class="gradeX">
                            <td>3</td>
                            <td>1 phòng đơn</td>
                            <td>200.000</td>
                            <td>
                                <ul>
                                    <li>1 ngày giá: <strong>200.000</strong></li>
                                    <li>Qua đêm giá: <strong>180.000</strong></li>
                                    <li><strong>Tính theo giờ:</strong>
                                        <ul>
                                            <li>Giờ thứ <strong>1</strong> giá: <strong>70.000</strong></li>
                                            <li>Giờ thứ <strong>2</strong> giá: <strong>90.000</strong></li>
                                            <li>Giờ thứ <strong>3</strong> giá: <strong>110.000</strong></li>
                                            <li>Giờ thứ <strong>4</strong> giá: <strong>130.000</strong></li>
                                            <li>Giờ thứ <strong>5</strong> giá: <strong>150.000</strong></li>
                                            <li>Giờ thứ <strong>6</strong> giá: <strong>170.000</strong></li>
                                            <li>Giờ thứ <strong>7</strong> giá: <strong>190.000</strong></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li><span class="text-danger">Phụ trội quá giờ Checkout ở ngày</span>
                                        <ul>
                                            <li>Giờ thứ <strong>1 -> 2: Miễn phí</strong></li>
                                            <li>Giờ thứ <strong>3 -> 6</strong> Phụ trội: <strong>140.000</strong></li>
                                            <li>Quá quy định trên sẽ tính thành 1 ngày</li>
                                        </ul>
                                    </li>
                                    <li><span class="text-danger">Phụ trội quá giờ Checkout ở qua đêm</span>
                                        <ul>
                                            <li>Giờ thứ <strong>1 -> 4</strong> Phụ trội: <strong>20.000</strong></li>
                                            <li>Quá quy định trên sẽ tính thành 1 ngày</li>
                                        </ul>
                                    </li>
                                    <li><span class="text-danger">Phụ trội vào sớm giờ Checkin ở ngày</span>
                                        <ul>
                                            <li>Giờ thứ <strong>1 -> 3: Miễn phí</strong></li>
                                            <li>Giờ thứ <strong>4 -> 7</strong> Phụ trội: <strong>100.000</strong></li>
                                            <li>Quá quy định trên sẽ tính thành 1 ngày</li>
                                        </ul>
                                    </li>
                                    <li><span class="text-danger">Phụ trội quá số lượng người ở</span>
                                        <ul>
                                            <li>Phụ trội mỗi người tiếp theo: <strong>50.000</strong></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                            <td>1</td>
                            <td>2</td>
                            <td></td>
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