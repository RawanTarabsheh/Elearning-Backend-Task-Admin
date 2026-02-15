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
</div>
