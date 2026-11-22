@csrf
<p><label>Full name</label><br><input name="full_name" value="{{ old('full_name', $customer->full_name ?? '') }}" required></p>
<p><label>Email</label><br><input type="email" name="email" value="{{ old('email', $customer->email ?? '') }}" required></p>
<p><label>Phone</label><br><input name="phone" value="{{ old('phone', $customer->phone ?? '') }}"></p>
@if ($errors->any()) <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>@endif
<button type="submit">Save</button>
