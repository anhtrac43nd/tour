@extends('admin.index')
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Add Employees</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Add Employees</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->

    <div class="row">
        <div class="col-md-12">
            @if (count($errors) > 0 )
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
            @endif
            @if(session('report'))
                <div class="alert alert-success">
                    {{session('report')}}
                </div>
            @endif
            <form id="summary-form" action="add" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <input type="hidden" name="_token" value="{{csrf_token()}}" >

                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Add Employees</h2>
                    </header>
                    <div class="panel-body">                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email: <span class="required">*</span></label>
                            <div class="col-sm-6">
                                <input type="email" name="email" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">password: <span class="required">*</span></label>
                            <div class="col-sm-6">
                                <input type="password" name="password" class="form-control" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Level</label>

                            <div class="col-sm-6">
                                Admin:<input type="radio" name="level" value="1"  required />
                                Nhân viên<input type="radio" name="level" value="2"  required />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">DoB:</label>
                            <div class="col-sm-6">
                                <input type="date" name="dob" class="form-control" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">gender:</label>
                            <div class="col-sm-6">
                                Male:<input type="radio" name="gender" value="1"  required />
                                Female<input type="radio" name="gender" value="2"  required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Phone number: <span class="required">*</span></label>
                            <div class="col-sm-6">
                                <input type="text" name="phone_number" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Address: <span class="required">*</span></label>
                            <div class="col-sm-6">
                                <input type="text" name="address" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Employee name: <span class="required">*</span></label>
                            <div class="col-sm-6">
                                <input type="text" name="employee_name" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Avatar: <span class="required">*</span></label>
                            <div class="col-sm-6">
                                <input type="file" name="avatar" class="form-control" required/>

                            </div>
                        </div>

                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="text-center">
                                <button class="btn btn-primary" type="submit" >Thêm</button>
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
@endsection