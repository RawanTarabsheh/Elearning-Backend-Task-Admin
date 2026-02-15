<h2>Create Student</h2>

<form method="POST" action="{{ route('admin.students.store') }}">
    @include('admin.students._form')
</form>

<p><a href="{{ route('admin.students.index') }}">← Back</a></p>
