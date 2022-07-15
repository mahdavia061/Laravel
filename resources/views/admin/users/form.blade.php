<div class="row">
    @include('admin.partials.errors')
    <div class="col-xs-12 col-md-4">
        
        <form action="" method="POST">
         {{ csrf_field() }}

            <div class="form-group">
                <label for="full_name">Full Name :</label>
                <input type="text" class="form-control" name="full_name" id="full_name" value="{{old('full_name')}}">
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" name="email" id="email"value="{{old('email')}}">
            </div>

            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>

            <div class="form-group">
                <label for="role">User Role :</label>
                <select name="role" id="role" class="form-control">
                    <option value="1">Normal user</option>
                    <option value="2">Operator</option>
                    <option value="3">Management</option>
                </select>
            </div>

            <div class="form-group">
                <label for="wallet">Wallet Balance :</label>
                <input type="text" class="form-control" name="wallet" id="wallet"  value="{{old('wallet',0)}}">
            </div>
            
            <div class="form-group">
                <input class="btn btn-success" type="submit" name="submit-save-user" value="Save Data">
            </div>

            </form>
    </div>
</div>