
@extends('admin.layout')

@section('page_title', 'Create Item')

@section('content')
<div class="bg-white border rounded-2xl p-5">
 <h2>Edit News</h2>

<form method="POST" action="{{ route('admin.news.update', $news) }}" enctype="multipart/form-data">
    @method('PUT')
    @include('admin.news._form', ['news' => $news])
</form>

<p><a href="{{ route('admin.news.index') }}">← Back</a></p>
</div>
@endsection
