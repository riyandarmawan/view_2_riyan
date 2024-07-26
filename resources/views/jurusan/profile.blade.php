<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Jurusan</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col vh-100 ">
                <div class="h-100 d-flex align-items-center">
                    <div class="card w-100">
                        <div class="card-header bg-primary text-white">
                            Jawaban
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    Kompotensi
                                </div>
                                <div class="col-auto">:</div>
                                <div class="col-auto">{{ $nama }}</div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    Ketua Kompetensi
                                </div>
                                <div class="col-auto">:</div>
                                <div class="col-auto">{{ $kajur }}</div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    Jumlah Kelas
                                </div>
                                <div class="col-auto">:</div>
                                <div class="col-auto">{{ $kelas }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>
