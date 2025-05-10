
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Routine Generator</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/reg.css">
</head>
<body>
    <?php include 'nav.php'; ?>
    <div class="register-container">
        <h2 class="text-center">Create Account</h2>
        <form action="register.php" method="POST">
            <div class="mb-4">
                <label for="username" class="form-label">Username</label>
                <div class="input-group">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter username" required>
                    <i class="fas fa-user input-icon"></i>
                </div>
            </div>
            <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter email" required>
                    <i class="fas fa-envelope input-icon"></i>
                </div>
            </div>
            <div class="mb-4">
                <label for="role" class="form-label">Role</label>
                <div class="input-group">
                    <select id="role" name="role" class="form-select" required>
                        <option value="">Select Role</option>
                        <option value="admin">Admin</option>
                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>
                    </select>
                    <i class="fas fa-user-tag input-icon"></i>
                </div>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required>
                    <i class="fas fa-eye input-icon toggle-password"></i>
                </div>
            </div>
            <div class="mb-4">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <div class="input-group">
                    <input type="password" id="confirm-password" name="confirm_password" class="form-control" placeholder="Confirm password" required>
                    <i class="fas fa-eye input-icon toggle-password"></i>
                </div>
            </div>
            <button type="submit" class="btn btn-register w-100 text-white">Create Account</button>
            <p class="text-center mt-4">Already have an account? <a href="login.html">Login</a></p>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle password visibility
        document.querySelectorAll('.toggle-password').forEach(icon => {
            icon.addEventListener('click', function() {
                const input = this.previousElementSibling;
                if (input.type === 'password') {
                    input.type = 'text';
                    this.classList.remove('fa-eye');
                    this.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    this.classList.remove('fa-eye-slash');
                    this.classList.add('fa-eye');
                }
            });
        });
    </script>
</body>
</html>