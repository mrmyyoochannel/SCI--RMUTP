<?php
include('_Php_Script/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // ตรวจสอบว่ามีข้อมูลครบ
    if (empty($username) || empty($email) || empty($password)) {
        $error = "กรุณากรอกข้อมูลให้ครบถ้วน";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // ตรวจสอบว่า Email ถูกต้องหรือไม่
        $error = "อีเมลไม่ถูกต้อง";
    } else {
        $email = mysqli_real_escape_string($conn, $email);
        $username = mysqli_real_escape_string($conn, $username);
        
        // ตรวจสอบว่าอีเมลมีอยู่ในระบบหรือไม่
        $checkEmail = "SELECT e_mail FROM user_profile WHERE e_mail = '$email'";
        $result = $conn->query($checkEmail);

        if ($result->num_rows > 0) {
            $error = "อีเมลนี้ถูกใช้งานแล้ว";
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // เข้ารหัสรหัสผ่าน

            // เพิ่มข้อมูลลงฐานข้อมูล
            $sql = "INSERT INTO user_profile (u_name, e_mail, p_word) VALUES ('$username', '$email', '$hashedPassword')";
            
            if ($conn->query($sql) === TRUE) {
                $success = "สมัครสมาชิกสำเร็จ! กรุณาเข้าสู่ระบบ";
            } else {
                $error = "เกิดข้อผิดพลาด: " . $conn->error;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก | สโมสรนักศึกษา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
        /* พื้นหลังแบบ Gradient */
        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* กล่องสมัครสมาชิก */
        .register-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        /* ปุ่ม */
        .btn-custom {
            background-color: #28a745;
            color: white;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background-color: #218838;
        }

        /* ช่องใส่ข้อมูล */
        .form-control {
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="register-container text-center">
                    <h2 class="mb-4">📝 สมัครสมาชิก</h2>
                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label">👤 ชื่อผู้ใช้</label>
                            <input type="text" name="username" class="form-control" placeholder="ตั้งชื่อผู้ใช้" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">📧 อีเมล</label>
                            <input type="email" name="email" class="form-control" placeholder="กรอกอีเมล" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">🔑 รหัสผ่าน</label>
                            <input type="password" name="password" class="form-control" placeholder="ตั้งรหัสผ่าน" required>
                        </div>
                        <button type="submit" class="btn btn-custom btn-block w-100">สมัครสมาชิก</button>
                    </form>
                    <hr>
                    <a href="login.php" class="text-decoration-none">📌 เข้าสู่ระบบ</a>
                </div>
            </div>
        </div>
    </div>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(isset($success)) { ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'สมัครสมาชิกสำเร็จ!',
                text: '<?php echo $success; ?>',
                confirmButtonColor: '#28a745'
            }).then(() => {
                window.location.href = 'login.php';
            });
        </script>
    <?php } elseif(isset($error)) { ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'เกิดข้อผิดพลาด!',
                text: '<?php echo $error; ?>',
                confirmButtonColor: '#d33'
            });
        </script>
    <?php } ?>
</body>
</html>
