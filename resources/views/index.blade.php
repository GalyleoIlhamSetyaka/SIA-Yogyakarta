<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yogyakarta Airport</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 bg-blue-200 p-4 rounded-t-lg">
                <h1 class="text-2xl font-bold text-blue-800">Yogyakarta</h1>
            </div>
            <div class="col-span-12 text-center py-8">
            <img src="{{ asset('img/index/YIA.png') }}" alt="Yogyakarta Airport" class="w-full rounded-lg">
                <h2 class="text-4xl font-bold">YOGYAKARTA</h2>
                <h2 class="text-3xl font-semibold">INTERNATIONAL</h2>
                <h2 class="text-3xl font-semibold">AIRPORT</h2>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 relative">
                <img src="{{ asset('img/index/Plane.png') }}" alt="Airplane" class="absolute bottom-[-50px] right-10 w-1/3">
            </div>
            <div class="col-span-12 mt-8">
                <p class="text-gray-700">
                    Bandar Udara Internasional Yogyakarta (IATA: YIA, ICAO: WAHI) adalah sebuah Bandar Udara Internasional yang terletak 45 kilometer dari Kota Yogyakarta tepatnya di Kapanewon Temon, Kulon Progo. YIA menggantikan Bandar Udara Internasional Adisucipto (JOG) yang dinilai sudah tidak mampu lagi menampung kapasitas penumpang dan pesawat. Bandar YIA melayani penerbangan domestik ke beberapa kota-kota di Indonesia serta penerbangan internasional ke Kuala Lumpur dan Singapura. Per 29 April 2024, bandar udara ini merupakan satu-satunya bandar udara internasional untuk Daerah Istimewa Yogyakarta dan seluruh Provinsi Jawa Tengah.
                </p>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 bg-blue-200 p-4 rounded-b-lg mt-8">
                <h1 class="text-2xl font-bold text-blue-800">Yogyakarta</h1>
                <p>KULON PROGO</p>
            </div>
            <div class="col-span-12 mt-4 text-sm text-gray-600">
                <p>Kulon Progo, Temon</p>
                <p>Yogyakarta, Indonesia</p>
                <p>Kode Pos: 55654</p>
                <p>Telp: (0274) 6606073</p>
                <p>Fax: (0274) 460000</p>
            </div>
        </div>
    </div>
</body>
</html>
