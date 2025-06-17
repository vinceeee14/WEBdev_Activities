<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f1f3f6;
            margin: 0;
            padding: 30px;
        }

        .main {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            max-width: 1200px;
            margin: auto;
        }

        .card {
            background: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            flex: 1;
        }

        h2 {
            margin-top: 0;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form button {
            background: #007bff;
            color: white;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        form button:hover {
            background: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table thead {
            background: #f5f5f5;
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .actions {
            display: flex;
            justify-content: center;
            gap: 8px;
        }

        .edit-btn, .delete-btn {
            padding: 6px 12px;
            border: none;
            color: #fff;
            cursor: pointer;
            font-size: 14px;
            border-radius: 4px;
            text-decoration: none;
        }

        .edit-btn {
            background: #28a745;
        }

        .edit-btn:hover {
            background: #1e7e34;
        }

        .delete-btn {
            background: #dc3545;
        }

        .delete-btn:hover {
            background: #c82333;
        }

        .message {
            margin-bottom: 10px;
            padding: 10px;
            background: #d4edda;
            color: #155724;
            border-left: 5px solid #28a745;
            border-radius: 4px;
        }

        .error {
            background: #f8d7da;
            color: #721c24;
            border-left: 5px solid #dc3545;
        }

    </style>
</head>
<body>

<div class="main">
    <!-- Left: Form -->
    <div class="card">
        <h2>Add Student</h2>

        @if(session('success'))
            <div class="message">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="message error">
                <ul style="padding-left: 20px; margin: 0;">
                    @foreach($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="number" name="age" placeholder="Age" required>
            <input type="text" name="gender" placeholder="Gender" required>
            <button type="submit">Add Student</button>
        </form>
    </div>

    <!-- Right: Table -->
    <div class="card">
        <h2>Student List</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th><th>Age</th><th>Gender</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->gender }}</td>
                        <td class="actions">
                            <a href="{{ route('students.edit', $student->id) }}" class="edit-btn">Edit</a>
                            <form method="POST" action="{{ route('students.destroy', $student->id) }}" onsubmit="return confirm('Are you sure?')" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4">No students found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
