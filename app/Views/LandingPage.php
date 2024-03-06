<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <title>Beranda</title>
</head>
<body>
    <div>
        <h1 class='font-sans font-bold text-lg py-5'>DAFTAR PESERTA MAGANG</h1>
        <a href="<?= base_url('/tambah-data') ?>" class='bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full'>Tambah Data</a>
        <div class='py-5'>
            <table class="table-fixed border-collapse border border-slate-500 w-1/2">
            <thead>
                <tr>
                    <th class="border border-slate-600 w-8">No</th>
                    <th class="border border-slate-600">Nama</th>
                    <th class="border border-slate-600">Kampus</th>
                    <th class="border border-slate-600">Jurusan</th>
                    <th class="border border-slate-600">Posisi</th>
                    <th class="border border-slate-600">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor = 1;
                foreach ($data_peserta as $i):
                    $id = $i -> id;
                    $nama = $i -> Nama;
                    $kampus = $i -> Kampus;
                    $jurusan = $i -> Jurusan;
                    $posisi = $i -> Posisi;
                ?>
                <tr>
                    <td class="border border-slate-600 w-8 p-2"><?=$nomor?></td>
                    <td class="border border-slate-600 p-2"><?=$nama?></td>
                    <td class="border border-slate-600 p-2"><?=$kampus?></td>
                    <td class="border border-slate-600 p-2"><?=$jurusan?></td>
                    <td class="border border-slate-600 p-2"><?=$posisi?></td>
                    <td class="border border-slate-600 p-2">
                        <div class='flex flex-row gap-1'>
                            <form method='post' action="<?= base_url('/edit-data') ?>">
                                <input type="text" name="id" id="id" autocomplete="id" value="<?=$id?>" hidden>
                                <input type="text" name="Nama" id="Nama" autocomplete="Nama" value="<?=$nama?>" hidden>
                                <input type="text" name="Kampus" id="Kampus" autocomplete="Kampus" value="<?=$kampus?>" hidden>
                                <input type="text" name="Jurusan" id="Jurusan" autocomplete="Jurusan" value="<?=$jurusan?>" hidden>
                                <input type="text" name="Posisi" id="Posisi" autocomplete="Posisi" value="<?=$posisi?>" hidden>
                                <button type='submit' class='text-blue-500 underline'>Edit</button>
                            </form>
                            /
                            <form method='post' action="<?= base_url('/hapus-data') ?>">
                                <input type="text" name="id" id="id" autocomplete="id" value="<?=$id?>" hidden>
                                <button type='submit' class='text-blue-500 underline'>Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php
                $nomor++;
                endforeach; 
                ?>
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>