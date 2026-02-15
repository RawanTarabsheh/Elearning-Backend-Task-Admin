@csrf

<div style="display:flex; flex-direction:column; gap:12px; max-width:520px;">
    <div>
        <label>English Name</label><br>
        <input type="text" name="name_en" value="{{ old('name_en', $major->name_en ?? '') }}" style="width:100%; padding:8px;">
        @error('name_en') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Arabic Name</label><br>
        <input type="text" name="name_ar" value="{{ old('name_ar', $major->name_ar ?? '') }}" style="width:100%; padding:8px;">
        @error('name_ar') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>
            <input type="checkbox" name="is_active" value="1"
                {{ old('is_active', ($major->is_active ?? true)) ? 'checked' : '' }}>
            Active
        </label>
        @error('is_active') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <button type="submit" style="padding:10px 14px;">Save</button>
</div>
