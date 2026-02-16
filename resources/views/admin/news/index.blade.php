<h2>News</h2>

@if(session('success'))
    <div style="background:#e8ffe8; padding:10px; margin:10px 0;">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('admin.news.create') }}">+ Create New</a>

<table border="1" cellpadding="8" cellspacing="0" style="margin-top:12px; width:100%; max-width:1200px;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title (EN)</th>
            <th>Title (AR)</th>
            <th>Published</th>
            <th>Active</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($items as $news)
            <tr>
                <td>{{ $news->id }}</td>
                <td>{{ $news->title_en }}</td>
                <td>{{ $news->title_ar }}</td>
                <td>{{ $news->published_at?->format('Y-m-d H:i') }}</td>
                <td>{{ $news->is_active ? 'Yes' : 'No' }}</td>
                <td>
                    @if($news->image_path)
                        <a href="{{ asset('storage/'.$news->image_path) }}" target="_blank">View</a>
                    @else
                        -
                    @endif
                </td>
                <td style="display:flex; gap:8px;">
                    <a href="{{ route('admin.news.edit', $news) }}">Edit</a>

                    <form action="{{ route('admin.news.destroy', $news) }}" method="POST"
                          onsubmit="return confirm('Delete this item?');">
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
    {{ $items->links() }}
</div>
