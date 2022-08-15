<tr>
    <td>{{$file->file_id}}</td>
    <td>{{$file->file_title}}</td>
    <td>{{$file->file_type}}</td>
    <td>{{$file->file_size}}</td>
    <td>{{$file->file_name}}</td>
    <td style="text-align: center">

        <a href="{{route('admin.files.edit',[$file->file_id])}}"><i class="fa fa-edit px-2"></i></a>
        <a href="#"><i class="fa fa-trash"></i></a>
    </td>

</tr>
