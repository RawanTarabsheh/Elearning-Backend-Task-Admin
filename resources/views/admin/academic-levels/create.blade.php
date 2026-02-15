<h2>Create Academic Level</h2>

<form method="POST" action="{{ route('admin.academic-levels.store') }}">
    @include('admin.academic-levels._form')
</form>

<p><a href="{{ route('admin.academic-levels.index') }}">← Back</a></p>
