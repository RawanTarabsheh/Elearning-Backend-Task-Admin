@csrf

<div style="display:flex; flex-direction:column; gap:12px; max-width:700px;">
    <div>
        <label>Title (EN)</label><br>
        <input type="text" name="title_en" value="{{ old('title_en', $news->title_en ?? '') }}" style="width:100%; padding:8px;">
        @error('title_en') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Title (AR)</label><br>
        <input type="text" name="title_ar" value="{{ old('title_ar', $news->title_ar ?? '') }}" style="width:100%; padding:8px;">
        @error('title_ar') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Content (EN)</label><br>
        <textarea name="content_en" rows="6" style="width:100%; padding:8px;">{{ old('content_en', $news->content_en ?? '') }}</textarea>
        @error('content_en') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Content (AR)</label><br>
        <textarea name="content_ar" rows="6" style="width:100%; padding:8px;">{{ old('content_ar', $news->content_ar ?? '') }}</textarea>
        @error('content_ar') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Image (optional)</label><br>
        <input type="file" name="image" accept="image/*">
        @error('image') <div style="color:red;">{{ $message }}</div> @enderror

        @if(!empty($news?->image_path))
            <div style="margin-top:8px;">
                <div style="font-size:12px; color:#444;">Current image:</div>
                <img src="{{ asset('storage/'.$news->image_path) }}" alt="News Image" style="max-width:260px; border:1px solid #ddd; padding:4px;">
            </div>
        @endif
    </div>

    <div>
        <label>Published At (optional)</label><br>
        <input type="datetime-local" name="published_at"
               value="{{ old('published_at', isset($news?->published_at) ? $news->published_at->format('Y-m-d\TH:i') : '') }}"
               style="padding:8px;">
        @error('published_at') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>
            <input type="checkbox" name="is_active" value="1"
                {{ old('is_active', ($news->is_active ?? true)) ? 'checked' : '' }}>
            Active
        </label>
        @error('is_active') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <button type="submit" style="padding:10px 14px;">Save</button>
</div>
