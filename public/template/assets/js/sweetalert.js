// Fungsi untuk menampilkan konfirmasi penghapusan
function confirmDelete(id) {
  Swal.fire({
    title: "Apakah Anda yakin?",
    text: "Data akan dihapus secara permanen!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Ya, hapus!",
    cancelButtonText: "Batal",
  }).then((result) => {
    if (result.isConfirmed) {
      // Redirect ke controller delete
      window.location.href = "/kategori/delete/" + id;
    }
  });
}

// Fungsi untuk menampilkan pesan setelah operasi
function showAlertMessage(message, isSuccess = true) {
  Swal.fire({
    title: isSuccess ? "Berhasil" : "Gagal",
    text: message,
    icon: isSuccess ? "success" : "error",
    confirmButtonText: "OK",
  });
}
