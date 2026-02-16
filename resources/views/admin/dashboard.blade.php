@extends('admin.layout')

@section('title','Admin Dashboard')
@section('page_title','Dashboard')

@section('content')

  <!-- Stats -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
    <div class="bg-white border border-slate-200 rounded-2xl p-4">
      <div class="text-slate-500 text-sm">News</div>
      <div class="text-3xl font-extrabold">{{ $stats['news'] }}</div>
    </div>

    <div class="bg-white border border-slate-200 rounded-2xl p-4">
      <div class="text-slate-500 text-sm">Majors</div>
      <div class="text-3xl font-extrabold">{{ $stats['majors'] }}</div>
    </div>

    <div class="bg-white border border-slate-200 rounded-2xl p-4">
      <div class="text-slate-500 text-sm">Testimonials</div>
      <div class="text-3xl font-extrabold">{{ $stats['testimonials'] }}</div>
    </div>

    <div class="bg-white border border-slate-200 rounded-2xl p-4">
      <div class="text-slate-500 text-sm">Applications</div>
      <div class="text-3xl font-extrabold">{{ $stats['applications'] }}</div>
    </div>

    <div class="bg-white border border-slate-200 rounded-2xl p-4">
      <div class="text-slate-500 text-sm">Users</div>
      <div class="text-3xl font-extrabold">{{ $stats['users'] }}</div>
    </div>
  </div>

  <!-- Quick Links -->
  <div class="mt-6 bg-white border border-slate-200 rounded-2xl p-4">
    <div class="font-extrabold mb-3">Quick Actions</div>
    <div class="flex flex-wrap gap-3">
      <a class="px-4 py-2 rounded-xl bg-slate-900 text-white text-sm" href="{{ route('admin.news.create') }}">+ Add News</a>
      <a class="px-4 py-2 rounded-xl bg-slate-900 text-white text-sm" href="{{ route('admin.testimonials.create') }}">+ Add Testimonial</a>
      <a class="px-4 py-2 rounded-xl bg-slate-900 text-white text-sm" href="{{ route('admin.majors.create') }}">+ Add Major</a>
      <a class="px-4 py-2 rounded-xl bg-slate-100 text-slate-900 text-sm" href="{{ route('admin.career-submissions.index') }}">View Applications</a>
    </div>
  </div>

  <!-- Latest Applications -->
  <div class="mt-6 bg-white border border-slate-200 rounded-2xl p-4">
    <div class="font-extrabold mb-3">Latest Applications</div>

    <div class="overflow-x-auto">
      <table class="w-full text-sm">
        <thead class="text-slate-500">
          <tr class="border-b">
            <th class="text-right py-2">Name</th>
            <th class="text-right py-2">Phone</th>
            <th class="text-right py-2">Created</th>
            <th class="text-right py-2">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse($latestApplications as $app)
            <tr class="border-b">
              <td class="py-2 font-semibold">{{ $app->name ?? '-' }}</td>
              <td class="py-2">{{ $app->phone ?? '-' }}</td>
              <td class="py-2">{{ optional($app->created_at)->format('Y-m-d') }}</td>
              <td class="py-2">
                <a class="text-blue-700 font-bold" href="{{ route('admin.career-submissions.index', $app->id) }}">View</a>
              </td>
            </tr>
          @empty
            <tr><td class="py-3 text-slate-500" colspan="4">No applications yet.</td></tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

@endsection
