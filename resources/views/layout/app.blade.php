<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PendakiRent')</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f3e9;
            color: #263b2b;
        }

        .container {
            max-width: 900px;
            margin: 15px auto;
            padding: 20px 25px;
            box-sizing: border-box;
        }

        /* CSS NAVBAR */
        nav {
            background-color: #254734;
            color: white;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h2 {
            margin: 0;
            font-size: 24px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 25px;
            margin: 0;
            padding: 0;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #c5d6b8;
        }

        /* JUDUL HALAMAN */
        h1 {
            color: #254734;
            margin-bottom: 10px;
        }

        /* TABEL DATA */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            margin-top: 15px;
            table-layout: auto;
            font-size: 13px;
        }

        table th {
            background-color: #254734;
            color: white;
            padding: 5px;
            text-align: center;
            border: 1px solid #d5ddd2;
            white-space: nowrap;
        }

        table td {
            padding: 2px 5px;
            border: 1px solid #d5ddd2;
            font-size: 13px;
            line-height: normal;
            text-align: center;
        }

        table tr:hover {
            background-color: #f1f5ed;
        }

        /* TOMBOL */
        button {
            background-color: #254734;
            color: white;
            padding: 10px 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #3d6b50;
        }

        /* LINK DI AREA KONTEN */
        .container a {
            display: inline-block;
            background-color: #789477;
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 6px;
            margin: 5px 0;
        }

        .container a:hover {
            background-color: #5e7b5d;
        }

        /* FORM INPUT */
        input,
        select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 15px;
            border: 1px solid #c5d6b8;
            border-radius: 6px;
            box-sizing: border-box;
        }

        /* LABEL FORM */
        label {
            display: block;
            font-weight: bold;
            color: #254734;
            margin-bottom: 5px;
        }

        /* PESAN BERHASIL */
        .alert-success {
            background-color: #dcebd8;
            color: #254734;
            padding: 12px 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            border-left: 5px solid #527a52;
        }

        /* TOMBOL EDIT DAN DELETE */
        .aksi {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .aksi form {
            margin: 0;
        }

        .aksi .btn-edit {
            background-color: #f2c94c;
            color: #302600;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            margin: 0;
        }

        .aksi .btn-delete {
            background-color: #d94a4a;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            border: none;
        }
    </style>
</head>

<body>
    @include('components.navbar')


    <div class="container">
        @yield('content')
    </div>

</body>

</html>
