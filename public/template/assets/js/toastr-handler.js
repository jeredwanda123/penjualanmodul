document.addEventListener("DOMContentLoaded", function () {
  // Fungsi untuk menampilkan pesan Toastr
  function showToastr(type, message) {
    if (type === "success") {
      toastr.success(message, "Sukses", {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
      });
    } else if (type === "error") {
      toastr.error(message, "Error", {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
      });
    }
  }

  // Tangkap flashdata dari elemen HTML
  const successMessage = document.getElementById("flashdata-success");
  const errorMessage = document.getElementById("flashdata-error");

  // Tampilkan Toastr jika pesan flashdata ada
  if (successMessage) {
    showToastr("success", successMessage.value);
  }
  if (errorMessage) {
    showToastr("error", errorMessage.value);
  }
});
