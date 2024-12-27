<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">

</head>
    <body>
    <div class="teks-bar"><a href="/admin">BACK</div></a>
<div class="container light-style flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-4">Edit Profile</h4>
    <div class="card">
        <div class="row no-gutters row-bordered row-border-light">
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


            <!-- Content Section -->
            <div class="col-md-9">
                <div class="tab-content">
                    <!-- General Settings Tab -->
                    <div class="tab-pane fade active show" id="account-general">
                        <hr class="border-light m-0">
                        <div class="card-body">
                            <form action="{{ route('admin.update-profile') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <!-- Name -->
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                                </div>

                                <!-- Email -->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                                </div>

                                <!-- Current Password -->
                                <div class="form-group">
                                    <label for="current_password">Current Password</label>
                                    <input type="password" class="form-control" id="current_password" name="current_password">
                                    <small class="form-text text-muted">Leave blank if you don't want to change the password.</small>
                                </div>

                                <!-- New Password -->
                                <div class="form-group">
                                    <label for="new_password">New Password</label>
                                    <input type="password" class="form-control" id="new_password" name="new_password">
                                    <small class="form-text text-muted">Leave blank if you don't want to change the password.</small>
                                </div>

                                <!-- Confirm New Password -->
                                <div class="form-group">
                                    <label for="new_password_confirmation">Confirm New Password</label>
                                    <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">
                                </div>

                                <div class="text-right mt-3">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                                
                            </form>
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" class="btn btn-danger">Log Out</button>
</form>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>