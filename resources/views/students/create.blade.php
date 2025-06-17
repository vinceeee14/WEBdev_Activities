@extends('layouts.app')

@section('content')
<style>
    .form-container {
        max-width: 500px;
        margin: 50px auto;
        padding: 30px;
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 25px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="number"],
    select {
        width: 100%;
        padding: 8px 10px;
        border-radius: 4px;
        border: 1px solid #ced4da;
    }

    .btn-submit {
        background-color: #007bff;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
    }

    .btn-submit:hover {
        background-color: #0056b3;
    }
</style>

<div class="form-container">
    <h2>Add Student</h2>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" required value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" required value="{{ old('age') }}">
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" required>
                <option value="" disabled selected>Select gender</option>
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>

        <button type="submit" class="btn-submit">Submit</button>
    </form>
</div>
@endsection
