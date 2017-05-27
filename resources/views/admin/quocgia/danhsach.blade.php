    
@extends('admin/layout/index')
@section('action','PHIM MỚI / DANH SÁCH')
@section('content')
<div id="page-wrapper">
    <div class="graphs">
      <h3 class="blank1">DANH SÁCH QUỐC GIA</h3>
      <div class="tab-content" style="overflow-x: auto;">
        <table id="example" class="display nowrap   table-bordered table-hover"  cellspacing="0"  width="100%">
           
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>NAME COUNTRY</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($quocgia as $item)
                <tr class="odd gradeX" align="center">
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['name_country'] }}</td>

                    <td class="center" ><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc muốn xóa')" href="{{ url('admin/quocgia/xoa',$item ->id) }}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ url('admin/quocgia/sua',$item ->id) }}">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@stop
