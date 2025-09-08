<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Eva Marie Libraries:Login
  </title>
  <!-- Fonts and icons -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <style>
    /* Enhanced professional styles */
    :root {
      --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
      --success-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
      --card-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      --hover-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    body {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
      font-family: 'Roboto', sans-serif;
    }

    .page-header {
      background: linear-gradient(135deg, rgba(102, 126, 234, 0.9) 0%, rgba(118, 75, 162, 0.9) 100%), 
                  url('https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3') center/cover;
      position: relative;
      overflow: hidden;
    }

    .page-header::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(45deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
      animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-20px); }
    }

    .login-card {
      backdrop-filter: blur(20px);
      background: rgba(255, 255, 255, 0.95);
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: var(--card-shadow);
      border-radius: 20px;
      transition: all 0.3s ease;
      overflow: hidden;
      position: relative;
    }

    .login-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: var(--primary-gradient);
    }

    .login-card:hover {
      transform: translateY(-5px);
      box-shadow: var(--hover-shadow);
    }

    .logo-container {
      padding: 2rem 0 1rem;
      position: relative;
    }

    .logo-container img {
      filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.1));
      transition: transform 0.3s ease;
    }

    .logo-container:hover img {
      transform: scale(1.05);
    }

    .brand-title {
      font-size: 1.5rem;
      font-weight: 700;
      background: var(--primary-gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-top: 1rem;
      text-align: center;
    }

    .form-group-enhanced {
      position: relative;
      margin-bottom: 1.5rem;
    }

    .input-enhanced {
      width: 100%;
      padding: 1rem 1rem 1rem 3rem;
      border: 2px solid #e9ecef;
      border-radius: 12px;
      font-size: 1rem;
      transition: all 0.3s ease;
      background: rgba(255, 255, 255, 0.9);
    }

    .input-enhanced:focus {
      border-color: #667eea;
      box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
      outline: none;
      background: white;
    }

    .input-icon {
      position: absolute;
      left: 1rem;
      top: 50%;
      transform: translateY(-50%);
      color: #6c757d;
      transition: color 0.3s ease;
    }

    .input-enhanced:focus + .input-icon {
      color: #667eea;
    }

    .btn-enhanced {
      background: var(--primary-gradient);
      border: none;
      border-radius: 12px;
      padding: 1rem 2rem;
      font-weight: 600;
      font-size: 1rem;
      letter-spacing: 0.5px;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .btn-enhanced::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: left 0.5s;
    }

    .btn-enhanced:hover::before {
      left: 100%;
    }

    .btn-enhanced:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
    }

    .remember-me-enhanced {
      display: flex;
      align-items: center;
      margin: 1.5rem 0;
    }

    .remember-me-enhanced input[type="checkbox"] {
      width: 18px;
      height: 18px;
      accent-color: #667eea;
      margin-right: 0.75rem;
    }

    .error-message-enhanced {
      background: linear-gradient(135deg, #ff6b6b, #feca57);
      color: white;
      padding: 0.75rem 1rem;
      border-radius: 8px;
      margin-bottom: 1rem;
      text-align: center;
      font-weight: 500;
      display: none;
    }

    .loader {
      display: none;
      position: fixed;
      z-index: 999;
      left: 50%;
      top: 50%;
      width: 60px;
      height: 60px;
      margin: -30px 0 0 -30px;
      border: 4px solid rgba(255, 255, 255, 0.3);
      border-top: 4px solid #667eea;
      border-radius: 50%;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    .footer-enhanced {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-top: 1px solid rgba(255, 255, 255, 0.2);
    }

    .floating-shapes {
      position: absolute;
      width: 100%;
      height: 100%;
      overflow: hidden;
      pointer-events: none;
    }

    .shape {
      position: absolute;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      animation: float-shape 15s infinite linear;
    }

    .shape:nth-child(1) {
      width: 80px;
      height: 80px;
      left: 10%;
      animation-delay: -2s;
    }

    .shape:nth-child(2) {
      width: 120px;
      height: 120px;
      left: 20%;
      animation-delay: -4s;
    }

    .shape:nth-child(3) {
      width: 60px;
      height: 60px;
      left: 70%;
      animation-delay: -6s;
    }

    .shape:nth-child(4) {
      width: 100px;
      height: 100px;
      left: 80%;
      animation-delay: -8s;
    }

    @keyframes float-shape {
      0% {
        transform: translateY(100vh) rotate(0deg);
        opacity: 0;
      }
      10% {
        opacity: 1;
      }
      90% {
        opacity: 1;
      }
      100% {
        transform: translateY(-100px) rotate(360deg);
        opacity: 0;
      }
    }

    /* Responsive design */
    @media (max-width: 768px) {
      .login-card {
        margin: 1rem;
        border-radius: 15px;
      }
      
      .brand-title {
        font-size: 1.25rem;
      }
      
      .input-enhanced {
        padding: 0.875rem 0.875rem 0.875rem 2.5rem;
      }
    }
  </style>
</head>

<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content mt-0">
    <div class="page-header align-items-start min-vh-100">
      <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
      </div>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card login-card z-index-0 fadeIn3 fadeInBottom">
              <!-- Logo -->
              <div class="logo-container text-center">
                <img src="./assets/img/logos.png" alt="Eva Marie Libraries Logo" width="120">
                <div class="brand-title">Eva Marie Libraries</div>
                <p class="text-muted mb-0">Professional Library Management</p>
              </div>
              
              <div class="card-body px-4 pb-4">
                <form id="loginForm" role="form" class="text-start">
                  <div class="form-group-enhanced">
                    <input type="email" id="email" class="input-enhanced" placeholder="Email Address" required>
                    <i class="material-icons input-icon">email</i>
                  </div>
                  
                  <div class="form-group-enhanced">
                    <input type="password" id="password" class="input-enhanced" placeholder="Password" required>
                    <i class="material-icons input-icon">lock</i>
                  </div>
                  
                  <div class="remember-me-enhanced">
                    <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                    <label class="form-check-label" for="rememberMe">Remember me for 30 days</label>
                  </div>
                  
                  <div id="error-message" class="error-message-enhanced"></div>
                  
                  <div class="text-center">
                    <button type="submit" class="btn btn-enhanced w-100 text-white my-2">
                      <span class="btn-text">Sign In</span>
                      <i class="material-icons ms-2">arrow_forward</i>
                    </button>
                  </div>
                  
                  <div class="text-center mt-3">
                    <p class="text-muted small">
                      Secure access to your library dashboard
                    </p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <footer class="footer-enhanced position-absolute bottom-0 py-3 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center">
              <p class="text-white small mb-0">
                © 2024 Eva Marie Libraries. Empowering communities through knowledge.
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!-- Loader -->
  <div class="loader" id="loader"></div>
  <!-- Core JS Files -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
  <script>
  document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const errorMessage = document.getElementById('error-message');
    const loader = document.getElementById('loader');
    const submitBtn = event.target.querySelector('button[type="submit"]');

    // Enhanced UI feedback
    errorMessage.style.display = 'none';
    errorMessage.textContent = '';
    loader.style.display = 'block';
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<span class="btn-text">Signing In...</span><i class="material-icons ms-2">hourglass_empty</i>';

    // Send the email as a query parameter
    fetch(`https://admin.evamarielibraries.org/api/users?filters[email][$eq]=${encodeURIComponent(email)}`, {
      method: 'GET',
      headers: {
        'Authorization': 'Bearer d68ab99a384e85007a4588d4f9c6cfcb438b2e1bf3298a057a93175310e642dfc7e8bd304d1e34cab68ad1e1b98a7745f60ddf0254f71c258f6bda92a8e3e9a6ffa3daa8ca4c4ccce8dff5435b9f4180e22de31961ca0a3729232633a9bb415b5ed03624662dd8b4b09551bd3b458ec051e5957c617955a69bdec568c1967d5b',
        'Content-Type': 'application/json'
      }
    })
    .then(response => {
      loader.style.display = 'none';
      submitBtn.disabled = false;
      submitBtn.innerHTML = '<span class="btn-text">Sign In</span><i class="material-icons ms-2">arrow_forward</i>';
      
      if (!response.ok) {
        throw new Error('User not found or server error');
      }
      return response.json();
    })
    .then(data => {
      if (data.length === 0) {
        showError('Invalid email or password. Please try again.');
        return;
      }

      const user = data[0];
      console.log('Stored password (user.pwd):', user.pwd);
      console.log('Entered password (password):', password);
      
      if (user.pwd && user.pwd === password) {
        // Success animation
        submitBtn.innerHTML = '<span class="btn-text">Success!</span><i class="material-icons ms-2">check_circle</i>';
        submitBtn.style.background = 'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)';
        
        setTimeout(() => {
          window.location.href = './pages/dashboard.php';
        }, 1000);
      } else {
        showError('Invalid email or password. Please try again.');
      }
    })
    .catch(error => {
      console.error('Error:', error);
      showError('Connection error. Please check your internet and try again.');
      loader.style.display = 'none';
      submitBtn.disabled = false;
      submitBtn.innerHTML = '<span class="btn-text">Sign In</span><i class="material-icons ms-2">arrow_forward</i>';
    });

    function showError(message) {
      errorMessage.textContent = message;
      errorMessage.style.display = 'block';
      // Add shake animation
      errorMessage.style.animation = 'shake 0.5s ease-in-out';
      setTimeout(() => {
        errorMessage.style.animation = '';
      }, 500);
    }
  });

  // Add shake animation for errors
  document.head.insertAdjacentHTML('beforeend', `
    <style>
      @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
      }
    </style>
  `);
</script>
</body>

</html>
