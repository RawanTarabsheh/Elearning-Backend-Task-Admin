
@extends('admin.layout')

@section('page_title', 'Create Item')

@section('content')
<div class="bg-white border rounded-2xl p-5">
 <h2>Create Testimonial</h2>

<form method="POST" action="{{ route('admin.testimonials.store') }}">
    @include('admin.testimonials._form')
</form>

<p><a href="{{ route('admin.testimonials.index') }}">← Back</a></p>
</div>
@endsection
