<?php include 'header.php'; ?>
<?php include 'sidebar-left.php'; ?>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Danh sách khách sạn</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Cài đặt chung</span></li>
                <li><span>Danh sách tầng</span></li>
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

            <h2 class="panel-title">Danh sách tầng</h2>
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
                        <label> tầng</label>
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
                <form class="form-inline text-right col-md-12" role="form">                  
                    <div class="form-group">
                        <a href="addnewfloor.php" class="btn btn-primary btn-sm">Thêm tầng</a>
                    </div>
                </form>
            </div>
            <br/>
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                    <thead>
                        <tr>
                            <th>Ẩn tầng</th>
                            <th>STT</th>
                            <th>Tên tầng</th>
                            <th>Số phòng</th>
                            <th>Ghi chú</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeX">
                            <td><input  type="checkbox" class="checkbox-custom chekbox-primary"></td>
                            <td>1</td>
                            <td>Tầng 1</td>
                            <td>8</td>
                            <td></td>
                            <td class="actions">
                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <tr class="gradeX">
                            <td><input  type="checkbox" class="checkbox-custom chekbox-primary"></td>
                            <td>2</td>
                            <td>Tầng 2</td>
                            <td>10</td>
                            <td></td>
                            <td class="actions">
                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <tr class="gradeX">
                            <td><input  type="checkbox" class="checkbox-custom chekbox-primary"></td>
                            <td>3</td>
                            <td>Tầng 6</td>
                            <td>8</td>
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
                    <p>Bạn có chắc muốn xóa tầng này?</p>
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