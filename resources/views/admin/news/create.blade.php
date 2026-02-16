<h2>Create News</h2>

<form method="POST" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
    @include('admin.news._form')
</form>

<p><a href="{{ route('admin.news.index') }}">← Back</a></p>
