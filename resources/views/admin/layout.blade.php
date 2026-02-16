<!doctype html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Admin')</title>

  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-900">

<div class="min-h-screen flex">

  <!-- Sidebar -->
  <aside class="w-64 bg-white border-l border-slate-200 p-4">
    <div class="font-extrabold text-lg mb-6">Admin Panel</div>

    <nav class="space-y-1 text-sm font-semibold">
      <a class="block px-3 py-2 rounded-lg hover:bg-slate-100" href="{{ route('admin.dashboard') }}">Dashboard</a>
      <a class="block px-3 py-2 rounded-lg hover:bg-slate-100" href="{{ route('admin.academic-levels.index') }}">Academic Levels</a>
      <a class="block px-3 py-2 rounded-lg hover:bg-slate-100" href="{{ route('admin.students.index') }}">Students</a>
      <a class="block px-3 py-2 rounded-lg hover:bg-slate-100" href="{{ route('admin.majors.index') }}">Majors</a>
      <a class="block px-3 py-2 rounded-lg hover:bg-slate-100" href="{{ route('admin.news.index') }}">News</a>
      <a class="block px-3 py-2 rounded-lg hover:bg-slate-100" href="{{ route('admin.testimonials.index') }}">Testimonials</a>
      <a class="block px-3 py-2 rounded-lg hover:bg-slate-100" href="{{ route('admin.career-submissions.index') }}">Career Submissions</a>
    </nav>
  </aside>

  <!-- Main -->
  <main class="flex-1 p-6">
    <div class="flex items-center justify-between mb-6">
      <h1 class="text-2xl font-extrabold">@yield('page_title', 'Admin')</h1>

      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="px-4 py-2 rounded-lg bg-slate-900 text-white text-sm">Logout</button>
      </form>
    </div>

    <!-- Flash messages -->
    @if(session('success'))
      <div class="mb-4 p-3 rounded-lg bg-green-50 text-green-800 border border-green-200">
        {{ session('success') }}
      </div>
    @endif

    @if($errors->any())
      <div class="mb-4 p-3 rounded-lg bg-red-50 text-red-800 border border-red-200">
        <ul class="list-disc pr-5">
          @foreach($errors->all() as $e) <li>{{ $e }}</li> @endforeach
        </ul>
      </div>
    @endif

    @yield('content')
  </main>

</div>
</body>
</html>
