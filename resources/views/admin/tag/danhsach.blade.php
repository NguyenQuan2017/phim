    
@extends('admin/layout/index')
@section('action','PHIM MỚI / DANH SÁCH')
@section('content')
<div id="page-wrapper">
    <div class="graphs">
      <h3 class="blank1">DANH SÁCH DANH MỤC</h3>
      <div class="tab-content" >
        <table id="example" class="display nowrap   table-bordered table-hover"  cellspacing="0"  width="100%">
           
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>TÊN TAG</th>
                    <th>ALIAS </th>
                    <th>DELETE</th>
                    <th>EDIT</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tag as $item)
                <tr class="odd gradeX" align="center">
                    <td>{{ $item['id'] }}</td>
                    <td>{{$item['name_tag']}}</td>
                    <td>{{ $item['alias'] }}</td>
                    <td class="center" ><i class="fa fa-trash-o  fa-fw"></i><a href="{{ url('admin/tag/xoa',$item ->id) }}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ url('admin/tag/sua',$item ->id) }}">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@stop
