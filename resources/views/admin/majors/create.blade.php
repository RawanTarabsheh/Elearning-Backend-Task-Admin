<h2>Create Major</h2>

<form method="POST" action="{{ route('admin.majors.store') }}">
    @include('admin.majors._form')
</form>

<p><a href="{{ route('admin.majors.index') }}">← Back</a></p>
