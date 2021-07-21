<form action="/simpan" method="POST">
    @csrf
<button type="submit">Submit {{ $nama }}</button>
</form>

<a href="{{ url('Dashboard') }}">ke halaman dashboard</a>