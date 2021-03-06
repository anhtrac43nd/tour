@extends('admin.index')
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>List Services</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Services</span></li>
                <li><span>List</span></li>
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

            <h2 class="panel-title">List Services</h2>
        </header>
        <div class="panel-body">           
            <div class="row" style="margin-bottom: 1em;">
            </div>
            <br/>
            <div class="row" style="margin-bottom: 1em;">
                <form class="form-inline text-left col-md-12" role="form">                  
                    <div class="form-group">
                        <a href="{{asset('admin/services/add')}}" class="btn btn-primary btn-sm">Add Services</a>
                    </div>
                </form>
            </div>
            <br/>
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
            <div class="table-responsive">
            <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Services Name</th>
                        <th>Details</th>
                        <th>Icon</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $sv)
                    <tr class="gradeX">
						<td>{{$sv->service_id}}</td>
						<td>{{$sv->service_name}}</td>
						<td>{{$sv->detail}}</td>
                        <td><img width="150px;" src="<?php echo urlAdmin(); ?>upload/icon/{{$sv->service_icon}}"></td>
                        <td class="actions">
                            <a href="edit/{{$sv->service_id}}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                            <a href="delete/{{$sv->service_id}}" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    @endforeach
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
@endsection