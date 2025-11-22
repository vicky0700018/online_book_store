<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Create New User</h2>

    <div class="card p-4">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Name :</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email :</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password :</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Save User</button>
        </form>
    </div>
</div>

</body>
</html>
