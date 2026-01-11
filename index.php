<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud space</title>
    <link rel="shortcut icon" href="/">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        :root {
            --font-size: 26px;
        }
        * {
            margin: 0;
            padding: 0;
            user-select: none;
        }
        html {
            font-size: var(--font-size);
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }
        .cont {
            position: absolute;
            top: 50%;
            left: 50%;
            translate: -50% -50%;
            width: fit-content;
        }
        h2 {
            font-weight: 400;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 1rem;
            &::before {
                content: "\2601";
                font-size: 50px;
                filter: drop-shadow(0 0 10px #44cad4);
            }
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .input_cont {
            display: flex;
            position: relative;
            height: 1rem;
        }
        input {
            width: 100%;
            height: 100%;
            padding: 2px 4px;
            outline: none;
            border: none;
            border-bottom: 1px solid #000;
            transition: 0.2s;

            &:focus {
                border-color: #44cad4;
            }
            &:focus + label,
            &:not(:placeholder-shown) + label {
                color: #44cad4;
                background: #fff;
                padding-inline: 2px;
                bottom: -0.45rem;
                font-size: calc(var(--font-size) / 2);
            }
        }
        label {
            color: var(--color);
            position: absolute;
            left: 0.4rem;
            bottom: 0;
            z-index: 1;
            transition: 0.2s;
            font-size: calc(var(--font-size) / 1.4);

            &:hover {
                cursor: text;
            }
        }
        #btn {
            width: 100%;
            height: 100%;
            background: #fff;
            border: 1px solid #000;

            &:hover {
                cursor: pointer;
                color: #44cad4;
                border-color: #44cad4;
                transition: 0.1s;
            }
        }
    </style>
</head>
<body>
    <div class="cont">
        <h2>Cloud space</h2>
        <form action="/index.php" method="POST">
            <div class="input_cont">
                <input
                    type="text"
                    name="site_name"
                    id="site_name"
                    placeholder=" "
                >
                <label for="site_name">Site name</label>
            </div>
            <div class="input_cont">
                <input
                    type="text"
                    name="db_login"
                    id="db_login"
                    placeholder=" "
                >
                <label for="db_login">DB Login</label>
            </div>
            <div class="input_cont">
                <input
                    type="text"
                    name="db_password"
                    id="db_password"
                    placeholder=" "
                >
                <label for="db_password">DB Password</label>
            </div>
            <div class="input_cont">
                <input
                    type="text"
                    name="db_name"
                    id="db_name"
                    placeholder=" "
                >
                <label for="db_name">DB Name</label>
            </div>
            <div class="input_btn">
                <input id="btn" type="submit" value="Create">
            </div>
        </form>
    </div>
</body>
</html>