<h2>Edit Major</h2>

<form method="POST" action="{{ route('admin.majors.update', $major) }}">
    @method('PUT')
    @include('admin.majors._form', ['major' => $major])
</form>

<p><a href="{{ route('admin.majors.index') }}">← Back</a></p>
