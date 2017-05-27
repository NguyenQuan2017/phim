
 @extends('admin/layout/index')
@section('action','PHIM MỚI / DANH SÁCH')
@section('content')
       <div id="page-wrapper">
        <div class="graphs">
          <h3 class="blank1">DANH SÁCH NGƯỜI DÙNG</h3>
            <div class="tab-content" style="overflow-x: auto;">
                <table id="example" class="display nowrap   table-bordered table-hover"  cellspacing="0"  width="100%">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên </th>
                                 <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($danhmuc as $dm)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $dm['ID'] }}</td>
                                <td>{{ $dm['TEN_DANH_MUC'] }}</td>
                                <td class="center" ><i class="fa fa-trash-o  fa-fw"></i><a href="{{ url('admin/danhmuc/xoa',$dm ->ID) }}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ url('admin/danhmuc/sua',$dm ->ID) }}">Edit</a></td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
          </div>
      </div>
</div>
@stop
