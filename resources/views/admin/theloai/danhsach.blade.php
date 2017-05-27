
@extends('admin/layout/index')
@section('action','PHIM MỚI / DANH SÁCH')
@section('content')
<div id="page-wrapper">
    <div class="graphs">
      <h3 class="blank1">DANH SÁCH THỂ LOẠI</h3>
      <div class="tab-content" >
        <table id="example" class="display nowrap   table-bordered table-hover"  cellspacing="0"  width="100%">
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>TÊN </th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($theloai as $tl)
                <tr >
                    <td>{{ $tl['id'] }}</td>
                    <td>{{ $tl['name_type'] }}</td>
                    <td class="center" ><i class="fa fa-trash-o  fa-fw"></i><a  onclick="return xacnhanxoa('Bạn có chăc muốn xóa')" href="{{ url('admin/theloai/xoa',$tl ->id) }}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ url('admin/theloai/sua',$tl ->id) }}">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>  
@stop
