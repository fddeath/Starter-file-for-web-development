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
            --background: rgb(32, 32, 32);
            --color: rgb(255, 255, 255);
            --color_2: rgb(30, 162, 195);
            --color_3: rgba(0, 255, 123, 0.4);
            --shadow: rgba(30, 162, 195, 0.5);
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
            background: var(--background);
            color: var(--color);
        }
        .cont {
            position: absolute;
            top: 50%;
            left: 50%;
            translate: -50% -50%;
            width: fit-content;
        }
        h2 {
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 1rem;
            &::before {
                content: "\2601";
                font-size: 50px;
                filter: drop-shadow(0 0 10px var(--shadow));
            }
        }
        h3 {
            font-weight: 400;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .cat_cont {
            display: flex;
            flex-direction: column;
            gap: 0.2rem;
        }
        .cat_input_cont {
            display: flex;
            gap: 0.5rem;
        }
        .input_cont {
            display: flex;
            position: relative;
            height: 1rem;
        }
        input {
            color: var(--color);
            background: none;
            width: 100%;
            height: 100%;
            padding: 4px;
            outline: none;
            border: none;
            border-bottom: 1px solid var(--color);
            transition: 0.2s;

            &:focus {
                border-color: var(--color_2);
            }

            &:focus + label,
            &:not(:placeholder-shown) + label {
                color: var(--color_2);
                background: var(--background);
                padding-inline: 2px;
                bottom: -60%;
                font-size: calc(var(--font-size) / 2);
            }

            &:not(:placeholder-shown, :focus) {
                border-color: var(--color_3);
            }

            &:not(:placeholder-shown, :focus) + label {
                color: var(--color_3);
                background: var(--background);
                padding-inline: 2px;
                bottom: -60%;
                font-size: calc(var(--font-size) / 2);
            }
        }
        label {
            color: var(--color);
            position: absolute;
            left: 0.4rem;
            bottom: -4px;
            z-index: 1;
            transition: 0.2s;
            font-size: calc(var(--font-size) / 1.4);
            font-weight: 300;

            &:hover {
                cursor: text;
            }
        }
        #btn {
            color: var(--color);
            width: 10rem;
            height: 1.5rem;
            background: none;
            border: 1px solid var(--color);
            margin-top: 1rem;

            &:hover {
                cursor: pointer;
                color: var(--color_2);
                border-color: var(--color_2);
                transition: 0.1s;
            }
        }
    </style>
</head>
<body>
    <div class="cont">
        <h2>Cloud space</h2>
        <form action="/index.php" method="POST">
            <div class="cat_cont">
                <h3>Site settings</h3>
                <div class="cat_input_cont">
                    <div class="input_cont">
                        <input
                            type="text"
                            name="site_name"
                            id="site_name"
                            placeholder=" "
                        >
                        <label for="site_name">Site name</label>
                    </div>
                </div>
            </div>
            <div class="cat_cont">
                <h3>DataBase</h3>
                <div class="cat_input_cont">
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
                </div>
            </div>
            <input id="btn" type="submit" value="Create">
        </form>
    </div>
</body>
</html>