<tr>
    <td>{{$plan->plan_id}}</td>
    <td>{{$plan->plan_title}}</td>
    <td>{{$plan->plan_limit_download_count}}</td>
    <td>{{$plan->plan_price}}</td>
    <td>{{$plan->plan_days_count}}</td>
    <td style="text-align: center">

        <a href="{{route('admin.plans.edit',[$plan->plan_id])}}"><i class="fa fa-edit px-2"></i></a>
        <a href="#"><i class="fa fa-trash"></i></a>
    </td>

</tr>
