<form action="/register-pelanggan" method="POST">
  @csrf
  <input type="text" name="nama" placeholder="Nama" required>
  <input type="email" name="email" placeholder="Email" required>
  <input type="text" name="telepon" placeholder="Telepon" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit">Register</button>
</form>
