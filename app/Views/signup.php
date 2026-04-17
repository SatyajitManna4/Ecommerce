<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - Supropriyo Enterprise</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --leaf-green: #3D9970;
            --teal: #48B4A0;
            --light-bg: #F0F8F0;
            --dark: #2C3E50;
            --success: #A8E6CF;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--light-bg), #e8f5e8);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .signup-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(61, 153, 112, 0.15);
            padding: 40px;
            max-width: 420px;
            width: 100%;
        }

        .signup-brand {
            text-align: center;
            margin-bottom: 30px;
        }

        .signup-brand i {
            font-size: 48px;
            color: var(--leaf-green);
            margin-bottom: 12px;
        }

        .signup-brand h2 {
            color: var(--dark);
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .signup-brand p {
            font-size: 13px;
            color: #666;
        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
        }

        .input-group input {
            width: 100%;
            padding: 16px 20px 16px 50px;
            border: 2px solid #e1e5e9;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #fafbfc;
        }

        .input-group input:focus {
            outline: none;
            border-color: var(--leaf-green);
            box-shadow: 0 0 0 3px rgba(61, 153, 112, 0.1);
            background: white;
        }

        .input-group i {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
            font-size: 18px;
        }

        .login-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, var(--leaf-green), var(--teal));
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(61, 153, 112, 0.4);
        }

        .login-help {
            margin: 20px 0;
            font-size: 13px;
        }

        .login-help label {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            cursor: pointer;
            line-height: 1.4;
        }

        .login-help a {
            color: var(--teal);
            text-decoration: none;
        }

        .divider {
            position: relative;
            text-align: center;
            margin: 30px 0;
            color: #888;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #e1e5e9;
        }

        .divider span {
            background: white;
            padding: 0 20px;
            font-size: 14px;
        }

        .new-user {
            text-align: center;
            font-size: 14px;
            color: #666;
        }

        .new-user a {
            color: var(--leaf-green);
            font-weight: 600;
            text-decoration: none;
        }

        @media (max-width: 480px) {
            .signup-container {
                padding: 30px 24px;
                margin: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="signup-container">
        <div class="signup-brand">
            <i class="fas fa-user-plus"></i>
            <h2>Create Account</h2>
            <p style="font-size: 13px; color: #666; margin: 4px 0 0 0;">Join 10M+ happy customers</p>
        </div>

        <form class="signup-form">
            <div class="input-group">
                <input type="text" placeholder="Full Name" required>
                <i class="fas fa-user"></i>
            </div>
            <div class="input-group">
                <input type="tel" placeholder="Mobile Number" required>
                <i class="fas fa-phone"></i>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email Address" required>
                <i class="fas fa-envelope"></i>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Create Password" required minlength="6">
                <i class="fas fa-lock"></i>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" required minlength="6">
                <i class="fas fa-lock"></i>
            </div>
            <button type="submit" class="login-btn">Continue</button>
        </form>

        <div class="login-help">
            <label>
                <input type="checkbox" required>
                I agree to the <a href="#">Terms</a> & <a href="#">Privacy Policy</a>
            </label>
        </div>

        <div class="divider"><span>OR</span></div>

        <!-- NEW - No redirect, just closes/returns -->
        <p class="new-user">
            Already have an account?
            <a href="#" onclick="handleLoginClick(); return false;" class="login-link">Login</a>
        </p>
        </p>

    </div>

   <script>
function handleLoginClick() {
    if (confirm('Return to main page?')) {
        window.location.href = 'Home.html';  // or 'Home.html'
    }
    return false;
}

// Form submission - FIXED timing issue
document.addEventListener('DOMContentLoaded', function() {
    const signupForm = document.querySelector('.signup-form');
    if (signupForm) {
        signupForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Account created successfully!');
            window.location.href = 'Home.html';
        });
    }
});
</script>


</body>

</html>