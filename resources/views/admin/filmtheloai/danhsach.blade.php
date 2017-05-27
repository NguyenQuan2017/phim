    
@extends('admin/layout/index')
@section('action','PHIM MỚI / DANH SÁCH')
@section('content')
<div id="page-wrapper">
    <div class="graphs">
      <h3 class="blank1">DANH SÁCH PHIM THỂ LOẠI</h3>
      <div class="tab-content" >
        <table id="example" class="display nowrap   table-bordered table-hover"  cellspacing="0"  width="100%">
           
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>NAME FILM </th>
                    <th>NAME TYPE </th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($filmtheloai as $type)
                    @foreach($type->types as $item)
                <tr class="odd gradeX" align="center">
                    <td>{{ $type['id'] }}</td>
                    <td>{{ $type['name_film'] }}</td>
                    <td>{{ $item['name_type'] }}</td>  
                    <td class="center" ><i class="fa fa-trash-o  fa-fw"></i><a href="{{ url('admin/filmtheloai/xoa',$item->id) }}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ url('admin/filmtheloai/sua',$item->id) }}">Edit</a></td>
               
                   </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@stop
