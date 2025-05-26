document.getElementById('loginForm').addEventListener('submit', async function(event) {
    event.preventDefault();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();

    // Validasi email
    if (!validateEmail(email)) {
        showPopup('Masukkan email yang valid.');
        return;
    }

    // Validasi password
    if (!validatePassword(password)) {
        showPopup('Password harus minimal 6 karakter dan mengandung setidaknya satu huruf besar, satu huruf kecil, dan satu angka.');
        return;
    }

    // Kirim ke auth.php
    try {
        const response = await fetch('auth.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams({ email, password })
        });

        const result = await response.json();
        const userData = { email: email, role: result.role };
        localStorage.setItem('userData', JSON.stringify(userData));
        
        if (result.success) {
            const userData = { email: email, role: result.role };
            localStorage.setItem('isLoggedIn', 'true');
            localStorage.setItem('userRole', result.role);
            localStorage.setItem('userData', JSON.stringify(userData));

            showPopup('Login berhasil!');
            setTimeout(() => {
                window.location.href = result.role === 'admin' ? 'admin.php' : 'user.php';
            }, 1500);
        } else {
            showPopup('Email atau password salah.');
        }
    } catch (error) {
        console.error('Gagal login:', error);
        showPopup('Terjadi kesalahan saat login.');
    }
});

function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function validatePassword(password) {
    const re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{6,}$/;
    return re.test(password);
}

function showPopup(message) {
    document.getElementById('popupMessage').innerText = message;
    document.getElementById('popupOverlay').style.display = 'flex';
}

function closePopup() {
    document.getElementById('popupOverlay').style.display = 'none';
}
