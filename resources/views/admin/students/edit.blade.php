
@extends('admin.layout')

@section('page_title', 'Create Item')

@section('content')
<div class="bg-white border rounded-2xl p-5">
 <h2>Edit Student</h2>

<form method="POST" action="{{ route('admin.students.update', $student) }}">
    @method('PUT')
    @include('admin.students._form', ['student' => $student])
</form>

<p><a href="{{ route('admin.students.index') }}">← Back</a></p>
</div>
@endsection
