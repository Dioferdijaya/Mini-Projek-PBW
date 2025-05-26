
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="styles.css">
    
    <style>
        .popup-overlay {
          position: fixed;
          top: 0; left: 0;
          width: 100vw; height: 100vh;
          background: rgba(0, 0, 0, 0.5);
          display: flex;
          align-items: center;
          justify-content: center;
          z-index: 9999;
        }
      
        .popup {
          background: #fff;
          padding: 40px 60px;
          border-radius: 10px;
          text-align: center;
          box-shadow: 0 5px 20px rgba(0,0,0,0.3);
          animation: fadeIn 0.3s ease;
          max-width: 300px;
          width: 100%;
        }
      
        .popup button {
          margin-top: 15px;
          padding: 8px 16px;
          background-color: #007bff;
          border: none;
          color: white;
          border-radius: 5px;
          cursor: pointer;
        }
      
        @keyframes fadeIn {
          from { opacity: 0; transform: scale(0.9); }
          to { opacity: 1; transform: scale(1); }
        }
      </style>
      
    
</head>
<body class="bodylogin">
    <div class="kata_login">
        <h1>Selamat Datang!</h1>
        <p>Silakan login untuk melanjutkan ke dashboard Anda.</p>
    </div>
    <div class="cardlogin">
        <h4 class="titlelogin">Log In!</h4>
        <form id="loginForm">
            <div class="fieldlogin">
                <input type="email" id="email" placeholder="Email" class="input-fieldlogin" required>
            </div>
            <div class="fieldlogin">
                <input type="password" id="password" placeholder="Password" class="input-fieldlogin" required>
            </div>
            <button class="btnlogin" type="submit">Login</button>
            <p class="btn-linklogin2">Belum punya akun?<a href="daftar.php" >Daftar</a></p>
            <a href="#" class="btn-linklogin">Forgot your password?</a>
        </form>
    </div>
    
    <div id="popupOverlay" class="popup-overlay" style="display: none;">
        <div class="popup">
          <p id="popupMessage"></p>
          <button onclick="closePopup()">Tutup</button>
        </div>
      </div>
      
    <script src="login.js"></script>
</body>
</html>
