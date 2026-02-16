<h2>Edit Testimonial</h2>

<form method="POST" action="{{ route('admin.testimonials.update', $testimonial) }}">
    @method('PUT')
    @include('admin.testimonials._form', ['testimonial' => $testimonial])
</form>

<p><a href="{{ route('admin.testimonials.index') }}">← Back</a></p>
