<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            /* background-color: #FBEEF9; */
            background-image: url("bgtokoabc.png");
            background-attachment: fixed;
            background-size: 1300px;
        }
    </style>
</head>

<body>
    <main role="main" class="container">

        <div class="row">
            <div class="col-md-12">
                <?php $this->load->view('layouts/_alert') ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-header">
                        Keranjang Belanja
                        <br>
                        <font color="#EE161A">
                            <font size="1">
                                <h>Cek kembali pesanan Anda sebelum melakukan
                                    <font color="#F60A1D"><b>Pembayaran</b></font>
                                    non tunai
                                </h>
                            </font>
                        </font>
                    </div>
                    <div class="card-body">
                        <table border="0" width="370 px" cellpadding="35" bgcolor="#D8BFD8" class="table">
                            <thead>
                                <tr>
                                    <th>Produk</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">qty</th>
                                    <th class="text-center">Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($content as $row) : ?>
                                    <tr>
                                        <td>
                                            <p><img src="<?= $row->image ? base_url("images/product/$row->image") : base_url('images/product/default.png') ?>" alt="" height="50"> <strong><?= $row->title ?></strong></p>
                                        </td>
                                        <td class="text-center">Rp.<?= number_format($row->price, 0, ',', '.') ?>,-</td>
                                        <td>
                                            <form action="<?= base_url("cart/update/$row->id") ?>" method="POST">
                                                <input type="hidden" name="id" value="<?= $row->id ?>">
                                                <div class="input-group">
                                                    <input type="number" name="qty" class="form-control text-center" value="<?= $row->qty ?>">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-info"><i class="fas fa-check"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        <td class="text-center">Rp.<?= number_format($row->subtotal, 0, ',', '.') ?>,-</td>
                                        <td>
                                            <form action="<?= base_url("cart/delete/$row->id") ?>" method="POST">
                                                <input type="hidden" name="id" value="<?= $row->id ?>">
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                                <tr>
                                    <td colspan="3"><strong>Total:</strong></td>
                                    <td class="text-center"><strong>Rp.<?= number_format(array_sum(array_column($content, 'subtotal')), 0, ',', '.') ?>,-</strong></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url('checkout') ?>" class="btn btn-success float-right">Pembayaran <i class="fas fa-angle-right"></i></a>
                        <a href="<?= base_url('home') ?>" class="btn btn-warning text-white"><i class="fas fa-angle-left"></i> Kembali belanja</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>