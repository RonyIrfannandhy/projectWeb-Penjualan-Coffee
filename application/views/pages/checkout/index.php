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

        .card-body {
            /* background-color: #FBEEF9; */
            background-image: url("bgtokoabc.png");
            background-attachment: fixed;
            background-size: 1300px;
            border: 0px solid #D6D7D4;
            border-radius: 30px;
        }

        .bolder {
            background-color: green;
            border: 0px solid #D6D7D4;
            border-radius: 30px;
            margin-left: 250px;
            opacity: 90%;
        }
    </style>
</head>

<body>


    <main role="main" class="container">

        <div class="row">
            <div class="col-md-8">
                <?php $this->load->view('layouts/_alert') ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Alamat Pengiriman Orderan
                        <br>
                        <font color="#EE161A">
                            <font size="1">
                                <h>Cek kembali pesanan Anda seebelum melakukan
                                    <font color="#F60A1D"><b>Pembayaran</b></font>
                                </h>
                            </font>
                        </font>
                    </div>

                    <div class="card-body">
                        <form action="<?= base_url('checkout/create') ?>" method="POST">
                            <div class="form-group">
                                <label for="">Customer Name</label>
                                <input type="text" class="form-control" name="name" placeholder="
Fill in the recipient's name" value="<?= $input->name ?>">
                                <?= form_error('name') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Address</label>
                                <textarea name="address" cols="30" rows="5" class="form-control" placeholder="
Fill in the ur Address"><?= $input->address ?></textarea>
                                <?= form_error('address') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Phone Number</label>
                                <input type="text" class="form-control" name="phone" placeholder="Fill in the Phone Number" value="<?= $input->phone ?>">
                                <?= form_error('phone') ?>
                            </div>
                            <div class="bolder">
                                <div class="inborder">
                                    <button class="btn btn-primary" type="submit">
                                        <font color="yellow">Submit</font>
                                    </button>
                                    <h>
                                        <font color="white">
                                            Check kembali & Click Submit untuk Pembayaran
                                        </font>
                                    </h>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                Category Orderan Anda
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                        </tr>
                                    <tbody>
                                        <?php foreach ($cart as $row) : ?>
                                            <tr>
                                                <td><?= $row->title ?></td>
                                                <td><?= $row->qty ?></td>
                                                <td>Rp.<?= number_format($row->price, 0, ',', '.') ?>,-</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Subtotal Order</td>
                                                <td>Rp.<?= number_format($row->subtotal, 0, ',', '.') ?>,-</td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="2">Total Order</th>
                                            <th>Rp.<?= number_format(array_sum(array_column($cart, 'subtotal')), 0, ',', '.') ?>,-</th>
                                        </tr>
                                    </tfoot>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>