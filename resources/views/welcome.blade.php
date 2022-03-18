<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Documentation</title>
    <style>
        pre {
            background-color: grey;
            color: white;
            border-radius: 5px;
            border: 1px solid rgb(155, 155, 155);
        }

        .content {
            margin-bottom: 40px;
        }

    </style>
</head>

<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Menus
                    </div>
                    <div class="card-body">
                        <div class="content">
                            <h5 class="title">
                                Deskripsi
                            </h5>
                            <p>Mengambil semua data menu</p>
                        </div>
                        <div class="content">
                            <h5 class="title">
                                HTTP Request
                            </h5>
                            <pre class="pt-3 ps-2">
GET http://127.0.0.1:8000/api/menus
                            </pre>
                        </div>
                        <div class="content">
                            <h5 class="title">
                                Response
                            </h5>
                            <pre class="pt-3 ps-2">
{
    "status_code": 200,
    "datas": [
        {
            "id": 1,
            "nama": "cecek",
            "harga": 10000,
            "tipe": "makanan",
            "gambar": "cecek.jpg"
        },
        {
            "id": 2,
            "nama": "kadal",
            "harga": 10000,
            "tipe": "makanan",
            "gambar": "kadal.jpg"
        },
        {
            "id": 3,
            "nama": "es campor",
            "harga": 10000,
            "tipe": "minuman",
            "gambar": "escampor.jpg"
        },
        {
            "id": 4,
            "nama": "es degan",
            "harga": 5000,
            "tipe": "minuman",
            "gambar": "esdegan.jpg"
        },
        {
            "id": 5,
            "nama": "sego",
            "harga": 10000,
            "tipe": "makanan",
            "gambar": "sego.jpg"
        }
    ]
}
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Vouchers
                    </div>
                    <div class="card-body">
                        <div class="content">
                            <h5 class="title">
                                Deskripsi
                            </h5>
                            <p>Mengambil semua data Voucher jika memiliki parameter maka akan mencari seluruh data
                                sesuai dengan kode, jika tidak ada parameter maka menampilkan semua data</p>
                        </div>
                        <div class="content">
                            <h5 class="title">
                                HTTP Request
                            </h5>
                            <pre class="pt-3 ps-2">
GET http://127.0.0.1:8000/api/vouchers
                            </pre>
                        </div>
                        <div class="content">
                            <h5 class="title">
                                Request
                            </h5>
                            <pre class="pt-3 ps-2">
{
    "kode": "puas" //optional
}
                            </pre>
                        </div>
                        <div class="content">
                            <h5 class="title">
                                Response
                            </h5>
                            <i>Jika memiliki parameter</i>
                            <pre class="pt-3 ps-2">
{
    "status_code": 200,
    "datas": [
        {
            "id": 1,
            "kode": "puas",
            "gambar": "tes.jpg",
            "nominal": 100000,
            "status": "non_aktif",
            "created_at": "2022-03-17T08:05:13.000000Z",
            "updated_at": "2022-03-17T09:20:46.000000Z"
        }
    ]
}
                            </pre>
                            <i>Jika tidak memiliki parameter</i>
                            <pre class="pt-3 ps-2">
{
    "status_code": 200,
    "datas": [
        {
            "id": 1,
            "kode": "puas",
            "gambar": "tes.jpg",
            "nominal": 100000,
            "created_at": "2022-03-17T08:05:13.000000Z",
            "updated_at": "2022-03-17T09:20:46.000000Z"
        },
        {
            "id": 2,
            "kode": "hemat",
            "gambar": "tes.jpg",
            "nominal": 50000,
            "created_at": "2022-03-17T08:05:13.000000Z",
            "updated_at": "2022-03-17T09:55:44.000000Z"
        }
    ]
}
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Order
                    </div>
                    <div class="card-body">
                        <div class="content">
                            <h5 class="title">
                                Deskripsi
                            </h5>
                            <p>Mengirim data order akan menyimpan pada tabel orders dan detail_order</p>
                        </div>
                        <div class="content">
                            <h5 class="title">
                                Request
                            </h5>
                            <table class="table">
                                <tr>
                                    <th>Param</th>
                                    <th>Tipe Data</th>
                                    <th>Tipe</th>
                                    <th>Keterangan</th>
                                </tr>
                                <tr>
                                    <td>voucher_id</td>
                                    <td>int</td>
                                    <td class="text-danger">required</td>
                                    <td>ID voucher yang akan dipakai</td>
                                </tr>
                                <tr>
                                    <td>nominal_diskon</td>
                                    <td>int</td>
                                    <td class="text-danger">required</td>
                                    <td>Diskon</td>
                                </tr>
                                <tr>
                                    <td>nominal_pesanan</td>
                                    <td>int</td>
                                    <td class="text-danger">required</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>items</td>
                                    <td>array</td>
                                    <td class="text-danger">required</td>
                                    <td>Berisi kumpulan object yang mengandung id dan harga menu yang masing masing bertipe data int</td>
                                </tr>
                            </table>
                        </div>
                        <div class="content">
                            <h5 class="title">
                                HTTP Request
                            </h5>
                            <pre class="pt-3 ps-2">
GET http://127.0.0.1:8000/api/order
                            </pre>
                        </div>
                        <div class="content">
                            <h5 class="title">
                                Request
                            </h5>
                            <pre class="pt-3 ps-2">
{
    "voucer_id": "1",
    "nominal_diskon": "50",
    "nominal_pesanan": "100000",
    "items": [
        { "id": 1, "harga": 10000 },
        { "id": 2, "harga": 10000 },
        { "id": 3, "harga": 10000 }
    ]
}
                            </pre>
                        </div>
                        <div class="content">
                            <h5 class="title">
                                Response
                            </h5>
                            <pre class="pt-3 ps-2">
                                
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>
