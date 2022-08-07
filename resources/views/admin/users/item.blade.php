<tr>
    <td>{{$user->id}}</td>
    <td>{{$user->full_name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->wallet}}</td>
    <td style="text-align: center">
        @include('admin.users.operations',$user)
    </td>
</tr>