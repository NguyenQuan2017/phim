
@extends('admin/layout/index')
@section('action','PHIM MỚI / DANH SÁCH')
@section('content')
<div id="page-wrapper">
    <div class="graphs">
      <h3 class="blank1">DANH SÁCH VIDEO</h3>
      
      <div class="tab-content" style="overflow-x: auto;">
        <table id="example" class="display nowrap   table-bordered table-hover"  cellspacing="0"  width="100%">
           
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>TÊN VIDEO</th>
                    <th>VIDEO</th>
                    <th>TẬP</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($video as $item)
                <tr class="odd gradeX" align="center">
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item->film->name_film }}</td>
                    <td>{{ $item['link'] }}</td>
                    <td>{{ $item['episode'] }}</td>
                    <td class="center" ><i class="fa fa-trash-o  fa-fw"></i><a href="{{ url('admin/video/xoa',$item ->id) }}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ url('admin/video/sua',$item ->id) }}">Edit</a></td>
                </tr>   
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@stop
