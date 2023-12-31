<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" rype="text/css" href="{{url('/css/cv.css')}}">
    <title>CV saya</title>
</head>

<body>
    <div class="container">

        <div class="side">

            <div class="image">
                <img src="#" alt="">
            </div>
            @foreach ($siswa as $hasil)
            <div class="identity">
                <div class="identity-item">
                    <label for="">Nama</label>
                    <span>{{ $hasil->nama }}</span>
                </div>

                <div class="identity-item">
                    <label for="">Tanggal Lahir</label>
                    <span>{{ $hasil->tanggal }}</span>
                </div>

                <div class="identity-item">
                    <label for="">Alamat</label>
                    <span>{{ $hasil->alamat }}</span>
                </div>

                <div class="identity-item">
                    <label for="">Kontak</label>
                    <Span>No. Telp : {{ $hasil->no_telp }}</Span>
                    <span>Email : fslfsisal17@gmail.com</span>
                    <span>Insstagram : f.</span>
                    <span>Facebook : M Faisal Aktsa</span>
                </div>
            </div>
            @endforeach
            
        </div>

        <div class="main-content">

            <div class="block">
                <div class="title">PENDIDIKAN</div>
                    <div class="box">
                        <div class="box-item">
                            <span>tamat sd</span>
                            <span>2013-2019</span>
                            <span>MI MIFTAHUL HUDA</span>
                        </div>
                        <div class="box-item">
                            <span>tamat smp</span>
                            <span>2019-2022</span>
                            <span>MTS MIMHA</span>
                        </div>
                        <div class="box-item">
                            <span>SMK</span>
                            <span>2022-</span>
                            <span>SMKN 2 BANDUNG</span>
                        </div>
                    </div>
                </div>

            <div class="block">
                <div class="title">PENGALAMAN KERJA</div>
                <div class="box">
                    <div class="box-item">
                        <span>Gapernah kerja</span>
                        <span>2000-2000</span>
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="title">SKILL</div>
                <div class="box">
                    <div class="box-item">
                        <span>C++</span>
                        <span>3/100</span>
                    </div>
                    <div class="box-item">
                        <span>PHP</span>
                        <span>5/100</span>
                    </div>
                    <div class="box-item">
                        <span>HTML</span>
                        <span>8/100</span>
                    </div>
                    <div class="box-item">
                        <span>CSS</span>
                        <span>2/100</span>
                    </div>
                    <div class="box-item">
                        <span>Java</span>
                        <span>1/100</span>
                    </div>
                    <div class="box-item">
                        <span>Python</span>
                        <span>0,5/100</span>
                    </div>
                    <div class="box-item">
                        <span>Javascript</span>
                        <span>0,1/100</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>