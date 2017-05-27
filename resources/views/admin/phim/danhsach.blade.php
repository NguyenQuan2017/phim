@extends('admin/layout/index')
@section('action','PHIM MỚI / DANH SÁCH')
@section('content')
<div id="page-wrapper">
    <div class="graphs">
        <h3 class="blank1">DANH SÁCH PHIM</h3>
        <div class="tab-content"  >
            <div class="row" style="padding:5px">
                <div class="col-md-12">
                    <table id="example" class="display nowrap   table-bordered table-hover"  cellspacing="0"  width="100%">
                        <thead>
                            <tr >
                                <th>ID</th>
                                <th>NAME CATEGORY</th>
                                <th>NAME </th>
                                <th>ALIAS</th>
                                <th>NAME ENGLISH</th>
                                <th>TITLE </th>
                                <th>IMAGE</th>
                                <th>STATUS</th>
                                <th>COUNTRY</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($phim as $ph)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $ph['id'] }}</td>
                                <td>{{ $ph->category->name_category }}</td>
                                <td>{{ $ph['name_film'] }}</td>
                                <td>{{ $ph['alias']}}</td>
                                <td>{{ $ph['name_english'] }}</td>
                                <td>{{ $ph['title'] }}</td>
                                <td>{{ $ph['image'] }}</td>
                                <td>{{ $ph['status'] }}</td>
                                <td>{{$ph->country->name_country}}</td>
                                <td class="center" ><i class="fa fa-trash-o  fa-fw"></i><a  onclick="return xacnhanxoa('Bạn có chắc muốn xóa')" href="{{ url('admin/phim/xoa',$ph ->id) }}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ url('admin/phim/sua',$ph ->id) }}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>
@stop