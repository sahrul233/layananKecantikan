<form action="{{ url('/pelanggan/simpan') }}" method="POST">
    @csrf
    <!-- `Input fields -->
    <button type="submit">Simpan</button>
</form>
