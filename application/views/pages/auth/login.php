<!DOCTYPE html>
<html>

<head>

    <style>
        .row {
            background-attachment: fixed;
            border: 4px solid #D8BFD8;
            border-radius: 10px;
            opacity: 80%;
        }

        .card-header {
            opacity: 90%;
        }

        .notereg {
            padding: 400px;
            padding-left: 80px;
        }

        .clickreg {
            border: 4px solid #FB0404;
            border-radius: 15px;
            opacity: 82%;
            background-color: #FB0404;
            width: fit-content;
            padding-right: 0%;
        }
    </style>
</head>

<body>

    <main role="main" class="container">

        <div class="row">
            <div class="col-md-8 mx-auto">
                <?php $this->load->view('layouts/_alert') ?>
            </div>
        </div>
        <p>
            <center>
                <font color="green"><b>SELAMAT DATANG DI COFFEE SHOP ABC</b></font>
            </center>
        </p>
        <div class="row">
            <table border="0" width="1300 px" cellpadding="35" bgcolor="#D8BFD8">
                <tr>
                    <td>
                        <div class="col-md-8 mx-auto">
                            <div class="card">
                                <div class="card-header">
                                    <font color="red"><b>LOGIN FOR ORDER</b></font>

                                </div>
                                <div class="card-body">
                                    <?= form_open('login', ['method' => 'POST']) ?>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Masukan email', 'required' => true]) ?>
                                        <?= form_error('email') ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Masukkan password', 'required' => true]) ?>
                                        <?= form_error('password') ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Login</button>
                                    <?= form_close() ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </main>
    <div class="notereg">
        <font color="#FD2929">Apabila Anda belum memiliki account, silahkan <font><b>
                    <div class="clickreg">
                        <table border="0">
                            <a href="<?= base_url('register') ?>" class="nav-link">
                                <font color="white"><b>CLICK REGISTER</b></font>
                            </a>
                        </table>
                    </div>
                </b></font>
        </font>
        </h6>
    </div>
</body>

</html>