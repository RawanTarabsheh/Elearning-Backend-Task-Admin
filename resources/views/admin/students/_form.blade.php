@csrf

<div style="display:flex; flex-direction:column; gap:12px; max-width:520px;">
    <div>
        <label>Academic Level</label><br>
        <select name="academic_level_id" style="width:100%; padding:8px;">
            <option value="">-- Select --</option>
            @foreach($levels as $level)
                <option value="{{ $level->id }}"
                    {{ (string)old('academic_level_id', $student->academic_level_id ?? '') === (string)$level->id ? 'selected' : '' }}>
                    {{ $level->name_en }} / {{ $level->name_ar }}
                </option>
            @endforeach
        </select>
        @error('academic_level_id') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>English Name</label><br>
        <input type="text" name="name_en" value="{{ old('name_en', $student->name_en ?? '') }}" style="width:100%; padding:8px;">
        @error('name_en') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Arabic Name</label><br>
        <input type="text" name="name_ar" value="{{ old('name_ar', $student->name_ar ?? '') }}" style="width:100%; padding:8px;">
        @error('name_ar') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Email (optional)</label><br>
        <input type="email" name="email" value="{{ old('email', $student->email ?? '') }}" style="width:100%; padding:8px;">
        @error('email') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Phone (optional)</label><br>
        <input type="text" name="phone" value="{{ old('phone', $student->phone ?? '') }}" style="width:100%; padding:8px;">
        @error('phone') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>
            <input type="checkbox" name="is_active" value="1"
                {{ old('is_active', ($student->is_active ?? true)) ? 'checked' : '' }}>
            Active
        </label>
        @error('is_active') <div style="color:red;">{{ $message }}</div> @enderror
    </div>

    <button type="submit" style="padding:10px 14px;">Save</button>
</div>
