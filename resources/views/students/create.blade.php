<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h1>Add New Student</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/students" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name"><br><br>

        <label>Age:</label>
        <input type="number" name="age"><br><br>

        <label>Gender:</label>
        <input type="text" name="gender"><br><br>

        <button type="submit">Add Student</button>
    </form>
</body>
</html>
