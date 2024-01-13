<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Div Center</title>
</head>

<body>

    <div class="center-div">
        <h2>Login untuk melanjutkan</h2>
        <div class="login">
            <input type="number" placeholder="Masukkan Nisn / Nip" required>
            <input type="password" placeholder="Masukkan Password" required>
            <br>
            <input type="submit" value="Login">
        </div>
    </div>

</body>

</html>


<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }

    .center-div {
        width: 300px;
        height: 200px;


        h2 {
            color: var(--Base-Black, #000);
            text-align: center;

            font-family: Inter;
            font-size: 24px;
            font-style: normal;
            font-weight: 600;
            line-height: 32px;
        }

        .login {
            display: block;

            input {
                display: flex;
                width: 100%;
                height: 25px;
                padding: 9px 8px;
                align-items: center;
                gap: 10px;

                width: 100%;
                margin-top: 10px;
            }
        }
    }
</style>