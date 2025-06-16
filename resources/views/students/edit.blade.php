<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>

    <form action="/students/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <input type="text" name="name" value="{{ $student->name }}"><br><br>

        <label>Age:</label>
        <input type="number" name="age" value="{{ $student->age }}"><br><br>

        <label>Gender:</label>
        <input type="text" name="gender" value="{{ $student->gender }}"><br><br>

        <button type="submit">Update Student</button>
    </form>
</body>
</html>
