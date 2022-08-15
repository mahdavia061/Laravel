<div class="row">
    @include('admin.partials.errors')
    <div class="col-xs-12 col-md-6">

        <form action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="file_title">File Title :</label>
                <input type="text" class="form-control" name="file_title" id="file_title" value="{{old('file_title',isset($fileItem) ? $fileItem->file_title: '')}}">
            </div>

            <div class="form-group">
                <label for="file_description">Description:</label>
                <textarea class="form-control" name="file_description" id="file_description" cols="30" rows="10">{{old('file_description',isset($fileItem) ? $fileItem->file_description: '')}}</textarea>
            </div>

            <div class="form-group">
                <label for="fileItem">File :</label>
                <input type="file" name="fileItem" id="fileItem">
            </div>

            <div class="form-group">
                <button class="btn btn-success" type="submit">Save Data</button>
            </div>

        </form>
    </div>
</div>
