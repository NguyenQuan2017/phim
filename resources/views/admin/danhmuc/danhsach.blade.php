
@extends('admin/layout/index')
@section('action','PHIM MỚI / DANH SÁCH')
@section('content')
<div id="page-wrapper">
  <div class="graphs">
    <h3 class="blank1">DANH SÁCH DANH MỤC</h3>
    <div class="tab-content"  >
      <table id="example" class="display nowrap   table-bordered table-hover"  cellspacing="0"  width="100%">
       
        <thead>
          <tr align="center" >
            <th>ID</th>
            <th>Tên </th>
            <th>TÊN KHÔNG DẤU</th>
            <th>PARENT_CATOGERY_ID</th>
            <th>Delete</th>  
            <th>Edit</th>            
          </tr>
        </thead>
        <tbody>
          @foreach ($danhmuc as $dm)
          <tr >
            <td>{{ $dm['id'] }}</td>
            <td>{{ $dm['name_category'] }}</td>
            <th>{{ $dm['alias'] }}</th>
            <td>{{ $dm['parent_category_id']}}</td>
            <td class="center" ><i class="fa fa-trash-o  fa-fw"></i><a  onclick=" return xacnhanxoa('Bạn có chắc muốn xóa')" href="{{ url('admin/danhmuc/xoa',$dm ->id) }}"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ url('admin/danhmuc/sua',$dm ->id) }}">Edit</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
     
    </div>
  </div>
</div>
@stop

