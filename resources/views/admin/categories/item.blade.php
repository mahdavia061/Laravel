<tr>


    <td>{{$category->category_id}}</td>
    <td>{{$category->category_name}}</td>


    <td style="text-align: center">

        <a href="{{route('admin.categories.edit',[$category->category_id])}}"><i class="fa fa-edit px-2"></i></a>
        <a href="{{route('admin.categories.delete',[$category->category_id])}}"><i class="fa fa-trash"></i></a>
    </td>

</tr>
