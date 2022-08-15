<div class="row">
    @include('admin.partials.errors')
    <div class="col-xs-12 col-md-6">

        <form action="" method="POST" >
            {{ csrf_field() }}

            <div class="form-group">
                <label for="plan_title">Plan Title :</label>
                <input type="text" class="form-control" name="plan_title" id="plan_title" value="{{old('plan_title',isset($planItem) ? $planItem->plan_title: '')}}">
            </div>

            <div class="form-group">
                <label for="plan_limit_download_count">Download limit :</label>
                <input type="text" class="form-control" name="plan_limit_download_count" id="plan_limit_download_count" value="{{old('plan_limit_download_count',isset($planItem) ? $planItem->plan_limit_download_count: '')}}">
            </div>

            <div class="form-group">
                <label for="plan_price"> Price :</label>
                <input type="text" class="form-control" name="plan_price" id="plan_price" value="{{old('plan_price',isset($planItem) ? $planItem->plan_price: '')}}">
            </div>

            <div class="form-group">
                <label for="plan_days_count"> Dead line :</label>
                <input type="text" class="form-control" name="plan_days_count" id="plan_days_count" value="{{old('plan_days_count',isset($planItem) ? $planItem->plan_days_count: '')}}">
            </div>

            <div class="form-group">
                <button class="btn btn-success" type="submit">Save Data</button>
            </div>

        </form>
    </div>
</div>
