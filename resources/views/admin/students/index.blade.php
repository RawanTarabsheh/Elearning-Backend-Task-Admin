
@extends('admin.layout')

@section('title', 'Students')
@section('page_title', 'Students')

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
<h2>Students</h2>

@if(session('success'))
    <div style="background:#e8ffe8; padding:10px; margin:10px 0;">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('admin.students.create') }}">+ Create New</a>

<table border="1" cellpadding="8" cellspacing="0" style="margin-top:12px; width:100%; max-width:1100px;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name (EN)</th>
            <th>Name (AR)</th>
            <th>Level</th>
            <th>Email</th>
            <th>Active</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name_en }}</td>
                <td>{{ $student->name_ar }}</td>
                <td>{{ $student->academicLevel?->name_en }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->is_active ? 'Yes' : 'No' }}</td>
                <td style="display:flex; gap:8px;">
                    <a href="{{ route('admin.students.edit', $student) }}">Edit</a>

                    <form action="{{ route('admin.students.destroy', $student) }}" method="POST"
                          onsubmit="return confirm('Delete this student?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="7">No records yet.</td></tr>
        @endforelse
    </tbody>
</table>

<div style="margin-top:12px;">
    {{ $students->links() }}
</div>    </tbody>
  </table>

</div>
@endsection
