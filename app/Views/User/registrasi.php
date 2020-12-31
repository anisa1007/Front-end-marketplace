<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registrasi | JehaShop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->
</head>

<body>
    <div class="bs-example">
        <h1>Register</h1>
        <form class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-xs-2" for="inputEmail">Email:</label>
                <div class="col-xs-9">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-2" for="inputPassword">Kata Sandi:</label>
                <div class="col-xs-9">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Masukan Kata Sandi">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-2" for="Nama">Nama:</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="Nama" placeholder="Nama Anda">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-2" for="telp">No. Telp:</label>
                <div class="col-xs-9">
                    <input type="tel" class="form-control" id="telp" placeholder="Nomor Telepon / Handphone">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-2">Tanggal Lahir</label>
                <div class="col-xs-3">
                    <select class="form-control">
                        <option>Tanggal</option>
                    </select>
                </div>
                <div class="col-xs-2">
                    <select class="form-control">
                        <option>Bulan</option>
                    </select>
                </div>
                <div class="col-xs-2">
                    <select class="form-control">
                        <option>Tahun</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-2" for="Alamat">Alamat:</label>
                <div class="col-xs-9">
                    <textarea rows="3" class="form-control" id="Alamat" placeholder="Masukan Alamat Lengkap"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-2" for="KodePos">Kode Pos:</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="KodePos" placeholder="Kode Pos">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-2">Jenis Kelamin:</label>
                <div class="col-xs-2">
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="Laki-laki"> Laki-laki
                    </label>
                </div>
                <div class="col-xs-2">
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="Perempuan"> Perempuan
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-9">
                    <label class="checkbox-inline">
                        <input type="checkbox" value="Setuju"> Saya Setuju dengan <a href="#">Kebijakan dan Ketentuan</a> yang berlaku.
                    </label>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-9">
                    <input type="submit" class="btn btn-primary" value="Kirim">
                    <input type="reset" class="btn btn-default" value="Reset">
                </div>
            </div>
        </form>
    </div>
</body>

</html>