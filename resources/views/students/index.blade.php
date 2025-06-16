<tbody>
@foreach($students as $student)
    <tr>
        <td>{{ $student->name }}</td>
        <td>{{ $student->age }}</td>
        <td>{{ $student->gender }}</td>
        <td>
            <a href="/students/{{ $student->id }}/edit">Edit</a>
            |
            <form action="/students/{{ $student->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
</tbody>
