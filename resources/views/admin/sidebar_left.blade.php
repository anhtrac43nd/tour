<div class="inner-wrapper">
    <!-- start: sidebar -->
    <aside id="sidebar-left" class="sidebar-left">

        <div class="sidebar-header">
            <div class="sidebar-title">
                Menu
            </div>
            <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <div class="nano">
            <div class="nano-content">
                <nav id="menu" class="nav-main" role="navigation">
                    <ul class="nav nav-main">
                        <li>
                            <a href="{{ asset('admin/index') }}">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span>Trang chủ</span>
                            </a>
                        </li>
                        <li class="nav-parent nav-expanded nav-active">
                            <a>
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <span>Employees</span>
                            </a>
                            <ul class="nav nav-children">
                                <li class="nav-active">
                                    <a href="{{ asset('admin/employees/add') }}">Add employee</a>
                                </li>
                                <li>
                                    <a href="{{ asset('admin/employees/list') }}">List employees</a>
                                </li>                               
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <span>Services</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{ asset('admin/services/add') }}">Add services</a>
                                </li>
                                <li>
                                    <a href="{{ asset('admin/services/list') }}">List services</a>
                                </li>

                            </ul>
                        </li>   
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-suitcase" aria-hidden="true"></i>
                                <span>Vehicles</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{ asset('admin/vehicles/add') }}">Add vehicles</a>
                                </li>
                                <li>
                                    <a href="{{ asset('admin/vehicles/list') }}">List vehicles</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-suitcase" aria-hidden="true"></i>
                                <span>Places</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{ asset('admin/places/add') }}">Add Places</a>
                                </li>
                                <li>
                                    <a href="{{ asset('admin/places/list') }}">List Places</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-suitcase" aria-hidden="true"></i>
                                <span>Discount</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{ asset('admin/discount/add') }}">Add discount</a>
                                </li>
                                <li>
                                    <a href="{{ asset('admin/discount/list') }}">List discount</a>
                                </li>

                            </ul>
                        </li>                  
                                                
                        <li>
                            <a href="lists-dayoff.php">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <span>Ngày lễ</span>
                            </a>
                        </li>
                        <li>
                            <a href="staff-list.php">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <span>Nhân viên</span>
                            </a>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <span>Quản lý thu/chi</span>
                            </a>
                            <ul class="nav nav-children">
                                <li class="nav-parent">
                                    <a>Quản lý thu</a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="lists-receipts.php">Danh sách phiếu thu</a>
                                        </li>
                                        <li>
                                            <a href="addnewreceipts.php">Thêm phiếu thu</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a>Quản lý chi</a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="lists-paymentvoucher.php">Danh sách phiếu chi</a>
                                        </li>
                                        <li>
                                            <a href="addnewpaymentvoucher.php">Thêm phiếu chi</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="liabilities.php">
                                <i class="fa  fa-fax" aria-hidden="true"></i>
                                <span>Quản lý công nợ</span>
                            </a>
                        </li>
                        <li>
                            <a href="revenue.php">
                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                                <span>Doanh thu</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>

    </aside>
    <!-- end: sidebar -->