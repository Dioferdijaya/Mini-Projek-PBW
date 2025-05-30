
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User - Dark Theme</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #6d5dfc;
            --primary-dark: #5a4de6;
            --secondary: #b44bff;
            --dark-bg: #121212;
            --card-bg: #1e1e1e;
            --card-hover: #252525;
            --text-primary: #e0e0e0;
            --text-secondary: #a0a0a0;
            --accent: #8742ff;
            --success: #00c896;
            --info: #00a8ff;
            --warning: #ffd43b;
            --danger: #ff5252;
            --border: #333333;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--dark-bg);
            color: var(--text-primary);
            line-height: 1.6;
        }
        
        .navbar {
            background: linear-gradient(135deg, #222, #131313);
            border-bottom: 1px solid var(--border);
            color: white;
            padding: 1em 2em;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        }
        
        .navbar h2 {
            margin: 0;
            font-weight: 600;
            display: flex;
            align-items: center;
            color: var(--accent);
        }
        
        .navbar h2 i {
            margin-right: 10px;
        }
        
        .btn {
            padding: 0.6em 1.2em;
            background-color: rgba(109, 93, 252, 0.2);
            color: var(--text-primary);
            border: 1px solid var(--primary);
            border-radius: 50px;
            cursor: pointer;
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .btn i {
            margin-right: 8px;
        }
        
        .btn:hover {
            background-color: var(--primary);
            color: white;
            transform: translateY(-2px);
        }
        
        .content {
            max-width: 1200px;
            margin: 2em auto;
            padding: 0 2em;
        }
        
        .card {
            background-color: var(--card-bg);
            padding: 1.8em;
            margin-bottom: 1.5em;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid var(--border);
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.3);
            background-color: var(--card-hover);
        }
        
        .card h3 {
            color: var(--primary);
            margin-bottom: 1em;
            font-size: 1.5rem;
            border-bottom: 2px solid #333;
            padding-bottom: 0.5em;
            position: relative;
        }
        
        .card h3::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 60px;
            height: 2px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
        }
        
        .user-info {
            display: flex;
            align-items: center;
            margin-bottom: 1em;
        }
        
        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: var(--primary-dark);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-right: 1.5em;
            box-shadow: 0 0 20px rgba(109, 93, 252, 0.4);
        }
        
        .user-details span {
            font-weight: 600;
            color: var(--primary);
        }
        
        .user-details p {
            margin-bottom: 0.5em;
            font-size: 1.1rem;
            color: var(--text-primary);
        }
        
        .role-badge {
            display: inline-block;
            padding: 0.3em 1em;
            border-radius: 50px;
            background-color: var(--info);
            color: white;
            font-size: 0.9rem;
            font-weight: 500;
        }
        
        .feature-list {
            list-style: none;
            padding: 0;
        }
        
        .feature-item {
            margin-bottom: 1em;
        }
        
        .feature-link {
            display: flex;
            align-items: center;
            padding: 1em;
            background-color: #252525;
            border-radius: 8px;
            text-decoration: none;
            color: var(--text-primary);
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }
        
        .feature-link:hover {
            background-color: var(--primary-dark);
            color: white;
            transform: translateX(5px);
        }
        
        .feature-link i {
            margin-right: 12px;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .feature-link.admin {
            background-color: rgba(255, 212, 59, 0.1);
            border-left: 4px solid var(--warning);
        }
        
        .feature-link.admin:hover {
            background-color: rgba(255, 212, 59, 0.2);
            color: var(--warning);
        }
        
        /* Additional stats cards */
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5em;
            margin-bottom: 1.5em;
        }
        
        .stat-card {
            background-color: var(--card-bg);
            border-radius: 12px;
            padding: 1.5em;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            box-shadow: 0 6px 18px rgba(0,0,0,0.2);
            border: 1px solid var(--border);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.3);
            background-color: var(--card-hover);
        }
        
        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1em;
            font-size: 1.5rem;
            color: white;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
        }
        
        .stat-card:nth-child(1) .stat-icon {
            background-color: var(--primary);
        }
        
        .stat-card:nth-child(2) .stat-icon {
            background-color: var(--success);
        }
        
        .stat-card:nth-child(3) .stat-icon {
            background-color: var(--warning);
        }
        
        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.2em;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .stat-title {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }
        
        /* Dark mode toggle */
        .theme-toggle {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 0 20px rgba(109, 93, 252, 0.4);
            z-index: 1000;
            border: none;
            color: white;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }
        
        .theme-toggle:hover {
            transform: scale(1.1);
        }
        
        /* Responsive design */
        @media (max-width: 768px) {
            .stats-container {
                grid-template-columns: 1fr;
            }
            
            .user-info {
                flex-direction: column;
                text-align: center;
            }
            
            .avatar {
                margin: 0 0 1em 0;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h2><i class="fas fa-tachometer-alt"></i> Dashboard User</h2>
        <a href="login.php" class="btn"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
    
    <div class="content">
        <div class="card">
            <h3>Profil Pengguna</h3>
            <div class="user-info">
                <div class="avatar">
                    <i class="fas fa-user"></i>
                </div>
                <div class="user-details">
                    <p>Selamat datang, <span id="username" name="nama">[Nama Pengguna]</span></p>
                    <p>Peran: <span class="role-badge" name="role" id="userRole">[Peran Pengguna]</span></p>
                    <p>Login terakhir: <span>23 Maret 2025, 10:30 WIB</span></p>
                </div>
            </div>
        </div>
        
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-tasks"></i>
                </div>
                <div class="stat-number">5</div>
                <div class="stat-title">Total Tugas</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="stat-number">5</div>
                <div class="stat-title">Tugas Selesai</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="stat-number">0</div>
                <div class="stat-title">Jadwal Mendatang</div>
            </div>
        </div>
        
        <div class="card">
            <h3>Fitur Akses</h3>
            <ul class="feature-list">
                
                <li class="feature-item">
                    <a href="ubah-profil.html" class="feature-link">
                        <i class="fas fa-user-edit"></i>
                        <span>Ubah Profil</span>
                    </a>
                </li>
                <li class="feature-item">
                    <a href="Daftar Tugas.html" class="feature-link">
                        <i class="fas fa-clipboard-list"></i>
                        <span>Daftar Tugas</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    <button class="theme-toggle" title="Ubah Tema">
        <i class="fas fa-sun"></i>
    </button>

    <script>
document.addEventListener('DOMContentLoaded', function () {
    const isLoggedIn = localStorage.getItem('isLoggedIn');
    const userData = JSON.parse(localStorage.getItem('userData'));

    // Jika belum login atau userData kosong, arahkan ke login
    if (!isLoggedIn || !userData) {
        alert('Silakan login terlebih dahulu.');
        window.location.href = 'login.php';
        return;
    }

    // Ambil bagian depan email
    const emailDepan = userData.email.split('@')[0];

    // Tampilkan nama (dari email) dan role
    document.getElementById('username').textContent = emailDepan;
    document.getElementById('userRole').textContent = userData.role;
});


</script>
</body>
</html>