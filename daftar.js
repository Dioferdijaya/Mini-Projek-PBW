
 
  document.getElementById('registerForm').addEventListener('submit', function (e) {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if (!validateEmail(email)) {
      showError("Format email tidak valid. Contoh: nama@email.com");
      e.preventDefault();
      return;
    }

    if (!validatePassword(password)) {
      showError("Password minimal 6 karakter, harus ada huruf besar, huruf kecil, dan angka.");
      e.preventDefault();
      return;
    }

    // kalau valid, sembunyikan error
    document.getElementById("error-message").style.display = "none";
  });

  function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
  }

  function validatePassword(password) {
    const re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{6,}$/;
    return re.test(password);
  }

  function showError(message) {
    const errorDiv = document.getElementById("error-message");
    errorDiv.textContent = message;
    errorDiv.style.display = "block";
  }
