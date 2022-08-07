<div class="row">
    @include('admin.partials.errors')
    <div class="col-xs-12 col-md-4">
        
        <form action="" method="POST">
         {{ csrf_field() }}

            <div class="form-group">
                <label for="full_name">Full Name :</label>
                <input type="text" class="form-control" name="full_name" id="full_name" value="{{old('full_name',isset($userItem) ? $userItem->full_name: '')}}">
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" name="email" id="email"value="{{old('email'),isset($userItem) ? $userItem->email: '')}}">
            </div>

            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>

            <div class="form-group">
                <label for="role">User Role :</label>
                <select name="role" id="role" class="form-control">
                    <option value="1" {{isset($userItem) && $userItem->role == 1 ? 'selected' : '')}}>Normal user</option>
                    <option value="2" {{isset($userItem) && $userItem->role == 2 ? 'selected' : '')}}>Operator</option>
                    <option value="3" {{isset($userItem) && $userItem->role == 3 ? 'selected' : '')}}>Management</option>
                </select>
            </div>

            <div class="form-group">
                <label for="wallet">Wallet Balance :</label>
                <input type="text" class="form-control" name="wallet" id="wallet"  value="{{old('wallet',isset($userItem) ? $userItem->wallet:0)}}">
            </div>
            
            <div class="form-group">
                <input class="btn btn-success" type="submit" name="submit-save-user" value="Save Data">
            </div>

            </form>
    </div>
</div>