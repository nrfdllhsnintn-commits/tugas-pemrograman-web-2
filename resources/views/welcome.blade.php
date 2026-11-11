<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PendakiRent - Penyewaan Alat Pendakian</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f7f5;
            color: #263b32;
        }

        header {
            background: #244c3b;
            color: white;
            padding: 22px 40px;
        }

        header h2 {
            margin-bottom: 5px;
        }

        header p {
            color: #d5e5dc;
            font-size: 14px;
        }

        nav {
            background: white;
            padding: 15px 40px;
            border-bottom: 1px solid #ddd;
        }

        nav a {
            color: #315b46;
            text-decoration: none;
            margin-right: 25px;
            font-weight: bold;
            font-size: 14px;
        }

        main {
            padding: 30px 40px;
        }

        .judul {
            margin-bottom: 20px;
        }

        .judul p {
            color: #777;
            margin-top: 8px;
        }

        .kartu-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .kartu {
            background: white;
            padding: 25px;
            border-radius: 10px;
            border: 1px solid #e5e5e5;
        }

        .kartu p {
            color: #777;
            margin-bottom: 12px;
        }

        .kartu h2 {
            color: #244c3b;
            font-size: 30px;
        }

        .tabel-container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            overflow-x: auto;
        }

        .tabel-container h3 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 14px;
            text-align: left;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }

        th {
            background: #edf4ef;
            color: #315b46;
        }

        .status {
            background: #fff0ce;
            color: #946400;
            padding: 6px 10px;
            border-radius: 5px;
            font-size: 12px;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #888;
            font-size: 13px;
        }

        @media (max-width: 700px) {

            header,
            nav {
                padding: 20px;
            }

            main {
                padding: 20px;
            }

            .kartu-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <header>
        <h2>PendakiRent</h2>
        <p>Sistem Informasi Penyewaan Alat Pendakian</p>
    </header>

    <nav>
        <a href="/">Dashboard</a>
        <a href="#">Data Alat</a>
        <a href="#">Transaksi Penyewaan</a>
        <a href="#">Pengembalian</a>
    </nav>

    <main>

        <div class="judul">
            <h2>Dashboard</h2>
            <p>Selamat datang di aplikasi PendakiRent!</p>
        </div>

        <div class="kartu-container">

            <div class="kartu">
                <p>Jenis Alat</p>
                <h2>5</h2>
            </div>

            <div class="kartu">
                <p>Total Stok Alat</p>
                <h2>57</h2>
            </div>

            <div class="kartu">
                <p>Sedang Disewa</p>
                <h2>8</h2>
            </div>

        </div>

        <div class="tabel-container">

            <h3>Daftar Alat Pendakian</h3>

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Nama Alat</th>
                        <th>Stok</th>
                        <th>Harga Sewa</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>BRG001</td>
                        <td>Tenda</td>
                        <td>10</td>
                        <td>Rp50.000</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>BRG002</td>
                        <td>Carrier</td>
                        <td>15</td>
                        <td>Rp30.000</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>BRG003</td>
                        <td>Sleeping Bag</td>
                        <td>20</td>
                        <td>Rp25.000</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>BRG004</td>
                        <td>Headlamp</td>
                        <td>12</td>
                        <td>Rp15.000</td>
                    </tr>
                </tbody>
            </table>

        </div>

    </main>

    <footer>
        &copy; 2026 PendakiRent - Aplikasi Penyewaan Alat Pendakian
    </footer>

</body>

</html>
