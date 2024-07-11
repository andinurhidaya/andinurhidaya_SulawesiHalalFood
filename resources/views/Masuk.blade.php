<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        text-align: center;
        margin-top: 50px;
    }

    h2 {
        color: red;
        /* Ubah warna judul menjadi merah */
    }

    form {
        width: 300px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        text-align: left;
        margin-bottom: 10px;
        color: #333;
    }

    input[type="text"],
    input[type="password"] {
        width: calc(100% - 20px);
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button[type="submit"] {
        background-color: red;
        /* Ubah warna background tombol submit menjadi merah */
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #c70000;
        /* Efek hover tombol submit */
    }

    .error-message {
        color: red;
        margin-top: 10px;
        text-align: left;
    }
    </style>
</head>

<body>
    <h2>Login</h2>
    <form action="{{ route('masuk') }}" method="POST">
        @csrf
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Masuk</button>
    </form>

    @if ($errors->any())
    <div class="error-message">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</body>

</html>