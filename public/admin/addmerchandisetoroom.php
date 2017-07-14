<?php include 'header.php'; ?>
<?php include 'sidebar-left.php'; ?>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Danh sách hàng hóa</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Tables</span></li>
                <li><span>Danh sách hàng hóa</span></li>
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

            <h2 class="panel-title">Danh sách hàng hóa</h2>
        </header>
        <div class="panel-body">
            <div class="row">
                <h2 class="panel-title text-center">Thêm hàng hóa - phòng 301 - ngày checkin 14/01/2016</h2>
                <br/>
            </div>
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
        <footer class="panel-footer">
            <div class="row">
                <div class="text-center">
                    <button class="btn btn-primary" type="submit">Thêm</button>
                    <button type="reset" class="btn btn-default">Hủy</button>
                </div>
            </div>
        </footer>
    </section>
    <!-- end: page -->
</section>

<?php include 'sidebar-right.php'; ?>