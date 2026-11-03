<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: url('../background.jpg') no-repeat center center/cover;
            background-attachment: fixed;
        }

        /* CENTER PANEL */
        form{
            width: min(100%, 560px);
            padding: clamp(20px, 4vh, 40px) clamp(16px, 3vw, 40px);

            display: flex;
            flex-direction: column;
            align-items: center;

            border-radius: 20px;
            background: rgba(23, 22, 22, 0.35);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 0 30px rgba(255,255,255,0.2);
        }

        /* LOGO */
        #header{
            width: 100%;
            display: flex;
            justify-content: center;
            margin-bottom: clamp(10px, 2vh, 25px);
        }

        #logo{
            display: block;
            width: clamp(150px, 25vh, 260px);
            height: auto;
            object-fit: contain;
        }

        /* BUTTON GRID */
        #menu{
            width: 100%;
            display: grid;
            grid-template-columns: 1fr;
            gap: 14px;
        }

        button{
            width: 100%;
            height: clamp(70px, 10vh, 100px);
            padding: 1rem;

            font-family: Copperplate, "Copperplate Gothic Light", fantasy;
            font-weight: bold;
            font-size: clamp(17px, 2.2vh, 22px);

            border-radius: 10px;
            border: none;

            background-image: linear-gradient(to right, #629dfa 0%, #c2e9fb 51%, #629dfa 100%);
            background-size: 200% auto;

            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 0 20px #eeeeee;
        }

        button i{
            margin-right: 10px;
        }

        button:hover{
            background-position: right center;
            transform: translateY(-5px) scale(1.03);
            box-shadow: 0 10px 20px #0372bd;
        }

        /* DESKTOP / TABLET: 2 columns */
        @media (min-width: 768px){
            form{
                width: min(92vw, 900px);
            }

            #menu{
                grid-template-columns: 1fr 1fr;
                gap: 20px;
            }

            /* logout button spans both columns */
            #menu button:last-child{
                grid-column: 1 / -1;
                justify-self: center;
                width: 50%;
            }
        }
    </style>
</head>
<body>
<form method="POST">
    <div id="header">
        <img id="logo" src="../logo.png" alt="Logo">
    </div>

    <div id="menu">
        <button type="button" onclick="location.href='admin_acc.php'"><i class="fa-solid fa-users"></i>ADMINS ACCOUNT</button>
        <button type="button" onclick="location.href='admin_emp_acc.php'"><i class="fa-solid fa-users"></i>EMPLOYEES ACCOUNT</button>
        <button type="button" onclick="location.href='admin_emp_pay.php'"><i class="fa-solid fa-file-pen"></i>EDIT PAYROLL</button>
        <button type="button" onclick="location.href='admin_emp_history.php'"><i class="fa-solid fa-clipboard-user"></i>PAYOUT RECORDS</button>
        <button type="button" onclick="location.href='admin_login.php'"><i class="fa-solid fa-right-from-bracket"></i>LOGOUT</button>
    </div>
</form>
</body>
</html>