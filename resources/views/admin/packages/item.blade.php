<tr>

    <td>{{$package->$package_title}}</td>
    <td>{{$package->$package_price}}</td>

    <td style="text-align: center">

        <a href="{{route('admin.packages.edit.edit',[$package->$package_id])}}"><i class="fa fa-edit px-2"></i></a>
        <a href="{{route('admin.packages.delete.delete',[$package->$package_id])}}"><i class="fa fa-trash"></i></a>
    </td>

</tr>
