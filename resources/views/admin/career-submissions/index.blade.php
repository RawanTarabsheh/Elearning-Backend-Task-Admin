@extends('admin.layout')

@section('title', 'Submissions')
@section('page_title', 'Submissions')

@section('content')
<div class="bg-white border border-slate-200 rounded-2xl p-5">

  <div class="flex justify-between items-center mb-5">
    <h2 class="text-lg font-extrabold">All Items</h2>

    <a href="#" class="px-4 py-2 bg-slate-900 text-white rounded-lg text-sm">
      + Add New
    </a>
  </div>

  <table class="w-full text-sm">
    <thead class="text-slate-500 border-b">
      <tr>
        <th class="py-2 text-right">#</th>
        <th class="py-2 text-right">Name</th>
        <th class="py-2 text-right">Actions</th>
      </tr>
    </thead>

    <tbody>
<h2>Career Submissions</h2>

<table border="1" cellpadding="8" cellspacing="0" style="margin-top:12px; width:100%; max-width:1100px;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Job</th>
            <th>Years</th>
            <th>Major</th>
            <th>Name</th>
            <th>Phone</th>
            <th>CV</th>
            <th>Submitted At</th>
        </tr>
    </thead>
    <tbody>
        @forelse($submissions as $s)
            <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->job }}</td>
                <td>{{ $s->years_of_experience }}</td>
                <td>{{ $s->major?->name_en }}</td>
                <td>{{ $s->name }}</td>
                <td>{{ $s->phone }}</td>
                <td>
                    <a href="{{ route('admin.career-submissions.cv', $s) }}">Download CV</a>
                </td>
                <td>{{ $s->created_at }}</td>
            </tr>
        @empty
            <tr><td colspan="8">No submissions yet.</td></tr>
        @endforelse
    </tbody>
</table>

<div style="margin-top:12px;">
    {{ $submissions->links() }}
</div>    </tbody>
  </table>

</div>
@endsection
