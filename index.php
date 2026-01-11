<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud space</title>
    <link rel="shortcut icon" href="/">

    <style>

    </style>
</head>
<body>
    <h2>Cloud space</h2>
    <form action="/index.php" method="POST">
        <div class="dir_list">
            <button type="button" id="add_input">+</button>
        </div>
        <input type="submit" value="Создать">
    </form>

    <script>
        const add_input = document.querySelector('#add_input');
        const dir_list = document.querySelector('.dir_list');

        add_input.addEventListener('click', () => {
            dir_list.insertAdjacentHTML('afterbegin', '<input type="text" name="">');
        });
    </script>
</body>
</html>