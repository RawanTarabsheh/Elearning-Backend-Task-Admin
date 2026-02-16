<h2>Edit News</h2>

<form method="POST" action="{{ route('admin.news.update', $news) }}" enctype="multipart/form-data">
    @method('PUT')
    @include('admin.news._form', ['news' => $news])
</form>

<p><a href="{{ route('admin.news.index') }}">← Back</a></p>
