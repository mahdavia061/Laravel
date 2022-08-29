<div class="row">
    @include('admin.partials.errors')
    <div class="col-xs-12 col-md-6">

        <form action="" method="POST" >
            {{ csrf_field() }}

            <div class="form-group">
                <label for="package_title">Package Title :</label>
                <input type="text" class="form-control" name="package_title" id="package_title" value="{{old('package_title',isset($packageItem) ? $packageItem->package_title: '')}}">
            </div>


            <div class="form-group">
                <label for="package_price"> Price :</label>
                <input type="text" class="form-control" name="package_price" id="package_price" value="{{old('package_price',isset($packageItem) ? $packageItem->package_price: '')}}">
            </div>

            <div class="form-group">
                <label for="package_price"> Categories :</label>
                <select name="categories[]" class="select2 form-control" id="categories" multiple>
                    @foreach($categories as $category)
                            <option value="{{$category->category_id}}" {{isset($package_categories) && in_array($category->category_id,$package_categories) ? 'selected' : ''}}>{{$category->category_name}}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <button class="btn btn-success" type="submit">Save Data</button>
            </div>


        </form>
    </div>
</div>


