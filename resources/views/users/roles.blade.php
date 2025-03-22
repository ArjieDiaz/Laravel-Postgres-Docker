<div class="container">
    <h1>Manage User Roles</h1>
    
    <form action="{{ route('users.roles', $user) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="role">Select Role</label>
            <select name="role" id="role" class="form-control">
                @foreach($roles as $role)
                    <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                        {{ ucfirst($role->name) }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Assign Role</button>
    </form>
</div> 