@csrf
<p><label>Username</label><br><input name="username" value="{{ old('username', $user->username ?? '') }}" required></p>
<p><label>Full name</label><br><input name="full_name" value="{{ old('full_name', $user->full_name ?? '') }}" required></p>
@if ($showAvatar ?? false)<p><label>Profile picture</label><br><input type="file" name="avatar" accept="image/*"></p>@endif
@if ($errors->any()) <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>@endif
<button type="submit">Save</button>
