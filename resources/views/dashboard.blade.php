<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark px-3">
        <span class="navbar-brand">My Dashboard</span>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-outline-light btn-sm">Logout</button>
        </form>
    </nav>

    <div class="container mt-4">
        <h1 class="mb-4">Welcome, {{ Auth::user()->name }}</h1>
        <div class="row">
            <div class="col-md-4">
                <!-- Sidebar / Stats -->
                <div class="card">
                    <div class="card-header">Quick Stats</div>
                    <div class="card-body">
                        <p><strong>Users:</strong> 100+</p>
                        <p><strong>Messages:</strong> 230</p>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <!-- Main content -->
                <div class="card">
                    <div class="card-header">Activity Feed</div>
                    <div class="card-body">
                        <p>No recent activities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
