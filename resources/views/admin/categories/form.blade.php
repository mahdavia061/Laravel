<div class="row">
    @include('admin.partials.errors')
    <div class="col-xs-12 col-md-6">

        <form action="" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="category_name">Package Title :</label>
                <input  class="form-control" name="category_name" id="category_name"
                       value="{{old('category_name',isset($categoryItem) ? $categoryItem->category_name: '')}}">
            </div>


            <div class="form-group">
                <button class="btn btn-success" type="submit">Save Data</button>
            </div>


        </form>
    </div>
</div>
