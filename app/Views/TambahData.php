<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <title>Tambah Data</title>
</head>
<body>
    <div>
        <h1 class='font-sans font-bold text-lg py-5'>TAMBAH PESERTA</h1>
        <a href="<?= base_url('/') ?>" class='bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full'>Kembali</a>
        <form action="<?= base_url('/tambah-data-simpan') ?>" method="post">
            <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="Nama" class="block font-sans">Nama</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input type="text" name="Nama" id="Nama" autocomplete="Nama" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <label for="Kampus" class="block font-sans">Kampus</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input type="text" name="Kampus" id="Kampus" autocomplete="Kampus" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <label for="Jurusan" class="block font-sans">Jurusan</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input type="text" name="Jurusan" id="Jurusan" autocomplete="Jurusan" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <label for="Posisi" class="block font-sans">Posisi</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input type="text" name="Posisi" id="Posisi" autocomplete="Posisi" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="mt-2">
                    <button type='submit' class='bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full'>Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>