<h2>Edit Student</h2>

<form method="POST" action="{{ route('admin.students.update', $student) }}">
    @method('PUT')
    @include('admin.students._form', ['student' => $student])
</form>

<p><a href="{{ route('admin.students.index') }}">← Back</a></p>
