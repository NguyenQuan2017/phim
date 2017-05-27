    
@extends('admin/layout/index')
@section('action','PHIM MỚI / DANH SÁCH')
@section('content')
<div id="page-wrapper">
    <div class="graphs">
      <h3 class="blank1">DANH SÁCH DIỄN VIÊN</h3>
      <div class="tab-content" >
        <table id="example" class="display nowrap   table-bordered table-hover"  cellspacing="0"  width="100%">
           
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>TÊN PHIM</th>
                    <th>TÊN DIỄN VIÊN </th>
                    <th>TÊN VAI DIỄN </th>
                    <th>HÌNH ẢNH </th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dienvien as $dv)
                <tr class="odd gradeX" align="center">
                    <td>{{ $dv['id'] }}</td>
                    <td>{{$dv->film->name_film}}</td>
                    <td>{{ $dv['name_actor'] }}</td>
                    <td>{{ $dv['role_name'] }}</td>
                    <td>{{ $dv['image'] }}</td>
                    <td class="center" ><i class="fa fa-trash-o  fa-fw"></i><a href="{{ url('admin/dienvien/xoa',$dv ->id) }}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ url('admin/dienvien/sua',$dv ->id) }}">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@stop
