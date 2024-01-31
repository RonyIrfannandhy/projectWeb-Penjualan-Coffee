<!-- <!DOCTYPE html>
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
    </style>
</head> -->

<body>
    <main role="main" class="container">

        <div class="row">
            <div class="col-md-12">
                <?php $this->load->view('layouts/_alert') ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Checkout berhasil
                        <br>
                        <font color="#EE161A">
                            <font size="1">
                                <h>Pilih Transaksi yang akan di lakukan dan orderan Anda segera kami proses
                                </h>
                            </font>
                        </font>
                    </div>
                    <div class="card-body">
                        <h5>Nomor order: <?= $content->invoice ?></h5>
                        <p>Terima kasih sudah berbelanja.</p>
                        <p>Silahkan lakukan pembayaran untuk bisa kami proses selanjutnya dengan cara:</p>
                        <ol>
                            <li>Apabila Anda memilih Transfer lakukan pembayaran pada rekening <strong>BCA 123901249421</strong> a/n Coffee Shop ABC</li>
                            <li>Sertakan keterangan dengan nomor order: <strong><?= $content->invoice ?></strong></li>
                            <li>Total pembayaran: <strong>Rp.<?= number_format($content->total, 0, ',', '.') ?>,-</strong></li>
                        </ol>
                        <form>
                            Pilih Transaksi : <br>
                            COD <input type="radio" name="jenis_pembayaran" value="L">
                            <!--TYPE RADIO => HANYA BISA PILIH SALAH SATU-->
                            Transfer Bank <input type="radio" name="jenis_pembayaran" value="P">
                        </form>
                        <p>Jika sudah silahkan upload bukti transaksi atau click <a href="<?= base_url("myorder/detail/$content->invoice") ?>">klik disini</a></p>
                        <a href="<?= base_url('home') ?>" class="btn btn-primary"><i class="fas fa-angle-left"></i> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- </body>

</html> -->