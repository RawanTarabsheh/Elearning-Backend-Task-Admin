
@extends('admin.layout')

@section('title', 'Majors')
@section('page_title', 'Majors')

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
<h2>Majors</h2>

@if(session('success'))
    <div style="background:#e8ffe8; padding:10px; margin:10px 0;">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('admin.majors.create') }}">+ Create New</a>

<table border="1" cellpadding="8" cellspacing="0" style="margin-top:12px; width:100%; max-width:900px;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name (EN)</th>
            <th>Name (AR)</th>
            <th>Active</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($majors as $major)
            <tr>
                <td>{{ $major->id }}</td>
                <td>{{ $major->name_en }}</td>
                <td>{{ $major->name_ar }}</td>
                <td>{{ $major->is_active ? 'Yes' : 'No' }}</td>
                <td style="display:flex; gap:8px;">
                    <a href="{{ route('admin.majors.edit', $major) }}">Edit</a>

                    <form action="{{ route('admin.majors.destroy', $major) }}" method="POST"
                          onsubmit="return confirm('Delete this item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5">No records yet.</td></tr>
        @endforelse
    </tbody>
</table>

<div style="margin-top:12px;">
    {{ $majors->links() }}
</div>    </tbody>
  </table>

</div>
@endsection
