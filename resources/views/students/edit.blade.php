<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f1f3f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            width: 400px;
        }

        h2 {
            margin-top: 0;
            color: #333;
            text-align: center;
        }

        form input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        form button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        form button:hover {
            background-color: #0056b3;
        }

        .back-link {
            display: inline-block;
            margin-top: 15px;
            text-align: center;
            width: 100%;
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .error {
            background: #f8d7da;
            color: #721c24;
            padding: 10px;
            margin-bottom: 15px;
            border-left: 5px solid #dc3545;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Edit Student</h2>

        @if ($errors->any())
            <div class="error">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="text" name="name" value="{{ old('name', $student->name) }}" placeholder="Full Name" required>
            <input type="number" name="age" value="{{ old('age', $student->age) }}" placeholder="Age" required>
            <input type="text" name="gender" value="{{ old('gender', $student->gender) }}" placeholder="Gender" required>

            <button type="submit">Update Student</button>
        </form>

        <a href="{{ route('students.index') }}" class="back-link">← Back to Student List</a>
    </div>

</body>
</html>
