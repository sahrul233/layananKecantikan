<form action="{{ url('/karyawan/simpan') }}" method="POST">
    @csrf
    <!-- Input fields -->
    <button type="submit">Simpan</button>
</form>
