<h2>Create Testimonial</h2>

<form method="POST" action="{{ route('admin.testimonials.store') }}">
    @include('admin.testimonials._form')
</form>

<p><a href="{{ route('admin.testimonials.index') }}">← Back</a></p>
