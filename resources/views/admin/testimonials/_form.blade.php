@csrf

<div style="display:flex; flex-direction:column; gap:12px; max-width:700px;">
    <div>
        <label>Name (EN)</label><br>
        <input type="text" name="name_en" value="{{ old('name_en', $testimonial->name_en ?? '') }}" style="width:100%; padding:8px;">
        @error('name_en') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Name (AR)</label><br>
        <input type="text" name="name_ar" value="{{ old('name_ar', $testimonial->name_ar ?? '') }}" style="width:100%; padding:8px;">
        @error('name_ar') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Title (EN) (optional)</label><br>
        <input type="text" name="title_en" value="{{ old('title_en', $testimonial->title_en ?? '') }}" style="width:100%; padding:8px;">
        @error('title_en') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Title (AR) (optional)</label><br>
        <input type="text" name="title_ar" value="{{ old('title_ar', $testimonial->title_ar ?? '') }}" style="width:100%; padding:8px;">
        @error('title_ar') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Content (EN)</label><br>
        <textarea name="content_en" rows="6" style="width:100%; padding:8px;">{{ old('content_en', $testimonial->content_en ?? '') }}</textarea>
        @error('content_en') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Content (AR)</label><br>
        <textarea name="content_ar" rows="6" style="width:100%; padding:8px;">{{ old('content_ar', $testimonial->content_ar ?? '') }}</textarea>
        @error('content_ar') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>
            <input type="checkbox" name="is_active" value="1"
                {{ old('is_active', ($testimonial->is_active ?? true)) ? 'checked' : '' }}>
            Active
        </label>
        @error('is_active') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <button type="submit" style="padding:10px 14px;">Save</button>
</div>
