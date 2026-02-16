
@extends('admin.layout')

@section('page_title', 'Create Item')

@section('content')
<div class="bg-white border rounded-2xl p-5">
 <h2>Edit Academic Level</h2>

<form method="POST" action="{{ route('admin.academic-levels.update', $academicLevel) }}">
    @method('PUT')
    @include('admin.academic-levels._form', ['academicLevel' => $academicLevel])
</form>

<p><a href="{{ route('admin.academic-levels.index') }}">← Back</a></p>
</div>
@endsection
