@extends('admin/layout/index')
@section('content')
<div id="page-wrapper">
    <div class="graphs">
        <h3 class="blank1">DANH SÁCH THÔNG TIN PHIM</h3>
        <div class="tab-content" >
            <div class="row">
                <div class="col-md-12">
                    <table id="example" class="display nowrap   table-bordered table-hover"  cellspacing="0"  width="100%">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th >NAME FILM</th>
                                <th>IMDB</th>
                                <th style="width: 400px;">CONTENT</th>
                                <th>YEAR</th>
                                <th>TIME</th>
                                <th>IMAGE</th>
                                <th>EPISODE</th>
                                <th>QUALITY</th>
                                <th>RESOLUTION</th>
                                <th style="width: 200px;">TYPE</th>
                                <th>DIRECTORY</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($thongtinphim as $ttp)
                            <tr>
                                <td>{{ $ttp->id }}</td>
                                <td>{{ $ttp->film->name_film}}</td>
                                <td>{{ $ttp->imdb}}</td>
                                <td>{{ $ttp->content }}</td>
                                <td>{{ $ttp->year}}</td>
                                <td>{{ $ttp->time }}</td>
                                <td>{{$ttp->image}}</td>
                                <td>{{ $ttp->episode }}</td>
                                <td>{{ $ttp->quality }}</td>
                                <td>{{ $ttp->resolution }}</td>
                                <td>{{ $ttp->type }}</td>
                                <td>{{ $ttp->directory}}</td>
                                <td class="center" ><i class="fa fa-trash-o  fa-fw"></i><a  onclick="return xacnhanxoa('Bạn có chắc muốn xóa')" href="{{ url('admin/thongtinphim/xoa',$ttp ->id) }}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ url('admin/thongtinphim/sua',$ttp ->id) }}">Edit</a></td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop