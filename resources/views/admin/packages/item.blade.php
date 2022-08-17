<tr>

    <td>{{$package->package_title}}</td>
    <td>{{$package->package_price}}</td>
    <td>{{$package->files()->get()->count();}}</td>


    <td style="text-align: center">

        <a href="{{route('admin.packages.edit',[$package->package_id])}}"><i class="fa fa-edit px-2"></i></a>
        <a href="{{route('admin.packages.delete',[$package->package_id])}}"><i class="fa fa-trash"></i></a>
        <a href="{{route('admin.packages.sync_files',[$package->package_id])}}"><i></i> files </a>
    </td>

</tr>
