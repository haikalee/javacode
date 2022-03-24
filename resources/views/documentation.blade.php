<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Documentation</title>
    <style>
        pre {
            background-color: grey;
            color: white;
            border-radius: 5px;
            border: 1px solid rgb(155, 155, 155);
        }

        .content {
            margin-bottom: 2rem;
        }
        .content:last-child {
            margin-bottom: 0rem;
        }

        .title {
            color: #0d6efd;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="card" style="margin: 2rem 0rem;">
            <div class="card-header">
                Venturo - Dokumentasi Api Mobile
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="menus-tab" data-bs-toggle="tab" data-bs-target="#menus" type="button" role="tab" aria-controls="menus" aria-selected="true">Menus</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="vouchers-tab" data-bs-toggle="tab" data-bs-target="#vouchers" type="button" role="tab" aria-controls="vouchers" aria-selected="false">Vouchers</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="order-tab" data-bs-toggle="tab" data-bs-target="#order" type="button" role="tab" aria-controls="order" aria-selected="false">Order</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="cancel-tab" data-bs-toggle="tab" data-bs-target="#cancel" type="button" role="tab" aria-controls="cancel" aria-selected="false">Cancel Order</button>
                    </li>
                </ul>
                <div class="tab-content" style="padding: 1rem 0rem;" id="myTabContent">
                    <div class="tab-pane fade show active" id="menus" role="tabpanel" aria-labelledby="menus-tab">
                        <div class="row">
                            <div class="col-6">
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
GET https://tes-mobile.landa.id/api/menus
                            </pre>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        Response
                                    </h5>
                                    <i>Jika memiliki data</i>
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
                                    <i>Jika data kosong</i>
                                    <pre class="pt-3 ps-2">
{
    "status_code": 204,
    "message": 'Data tidak ditemukan'
}
                            </pre>
                                    <i>Jika terjadi masalah pada server</i>
                                    <pre class="pt-3 ps-2 pb-0 mb-0">
{
    "status_code": 400,
    "message": 'Data gagal ditemukan'
}
                            </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="vouchers" role="tabpanel" aria-labelledby="vouchers-tab">
                        <div class="row">
                            <div class="col-6">
                                <div class="content">
                                    <h5 class="title">
                                        Deskripsi
                                    </h5>
                                    <p>
                                        Mengambil data sesuai dengan nama voucher yang ada di dalam database
                                    </p>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        Request
                                    </h5>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Param</th>
                                            <th width='100'>Tipe Data</th>
                                            <th>Tipe</th>
                                            <th>Keterangan</th>
                                        </tr>
                                        <tr>
                                            <td>kode</td>
                                            <td>string</td>
                                            <td class="text-danger">required</td>
                                            <td>kode voucher yang akan dipakai</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        HTTP Request
                                    </h5>
                                    <pre class="pt-3 ps-2">
POST https://tes-mobile.landa.id/api/vouchers
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

                                    <i>Jika data kosong</i>
                                    <pre class="pt-3 ps-2">
{
    "status_code": 204,
    "message": 'Data tidak ditemukan'
}
                            </pre>
                                    <i>Jika terjadi masalah pada server</i>
                                    <pre class="pt-3 ps-2 pb-0 mb-0">
{
    "status_code": 400,
    "message": 'Data gagal ditemukan'
}
                            </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="order-tab">
                        <div class="row">
                            <div class="col-6">
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
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Param</th>
                                            <th width='100'>Tipe Data</th>
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
                                            <td>Berisi kumpulan object yang mengandung id [int], harga menu [int] dan catatan
                                                [string]</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        HTTP Request
                                    </h5>
                                    <pre class="pt-3 ps-2">
POST https://tes-mobile.landa.id/api/order
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
        { "id": 1, "harga": 10000, "catatan": "Tes" },
        { "id": 2, "harga": 10000, "catatan": "Tes" },
        { "id": 3, "harga": 10000, "catatan": "Tes" }
    ]
}                                
                            </pre>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        Response
                                    </h5>
                                    <i>Jika order berhasil</i>
                                    <pre class="pt-3 ps-2">
{
    "status_code": 200,
    "message": "Order berhasil dibuat"
}
                            </pre>
                                    <i>Jika terjadi masalah pada server</i>
                                    <pre class="pt-3 ps-2 pb-0 mb-0">
{
    "status_code": 400,
    "message": 'Data gagal ditemukan'
}
                            </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cancel" role="tabpanel" aria-labelledby="cancel-tab">
                        <div class="row">
                            <div class="col-6">
                                <div class="content">
                                    <h5 class="title">
                                        Deskripsi
                                    </h5>
                                    <p>Menghapus data order dan data detail order tabel orders dan detail_order</p>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        Request
                                    </h5>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Param</th>
                                            <th width='100'>Tipe Data</th>
                                            <th>Tipe</th>
                                            <th>Keterangan</th>
                                        </tr>
                                        <tr>
                                            <td>id</td>
                                            <td>int</td>
                                            <td class="text-danger">required</td>
                                            <td>ID order yang akan dihapus</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        HTTP Request
                                    </h5>
                                    <pre class="pt-3 ps-2">
POST https://tes-mobile.landa.id/api/order/cancel/{id}
                            </pre>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        Response
                                    </h5>
                                    <pre class="pt-3 ps-2">
{
    "status_code": 200,
    "message": "Data berhasil dihapus"
}
                            </pre>
                                    <i>Jika data tidak ditemukan</i>
                                    <pre class="pt-3 ps-2">
{
    "status_code": 204,
    "message": 'Data tidak ditemukan'
}
                            </pre>
                                    <i>Jika terjadi masalah pada server</i>
                                    <pre class="pt-3 ps-2 pb-0 mb-0">
{
    "status_code": 400,
    "message": 'Data gagal ditemukan'
}
                            </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>