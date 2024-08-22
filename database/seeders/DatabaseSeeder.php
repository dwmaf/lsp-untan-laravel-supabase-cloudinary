<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Number;
use App\Models\Asesor;
use App\Models\User;
use App\Models\Jadwal;
use App\Models\Berita;
use App\Models\Unitkompetensi;
use App\Models\PenerimaSertif;
use App\Models\Skema;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'password' =>bcrypt('lsp1234')
        ]);
        Asesor::create([
            'skema_id' => 1,
            'nama_asesor' => 'Budi Cahyano'
        ]);
        Asesor::create([
            'skema_id' => 2,
            'nama_asesor' => 'Candra Kusuma'
        ]);
        Asesor::create([
            'skema_id' => 3,
            'nama_asesor' => 'Bambang Waluyo'
        ]);
        Asesor::create([
            'skema_id' => 4,
            'nama_asesor' => 'Rendra Cahyadi'
        ]);
        Asesor::create([
            'skema_id' => 5,
            'nama_asesor' => 'Asep Kusuma'
        ]);
        User::create([
            'username' => 'lspbomo',
            'password' =>bcrypt('12345')
        ]);
        Skema::create(['nama_skema' => 'Skema Pendamping UMKM']);
        Skema::create(['nama_skema' => 'Skema Ahli K3 UMUM']);
        Skema::create(['nama_skema' => 'Skema Teknisi Penginderaan Jauh']);
        Skema::create(['nama_skema' => 'Skema Penyuluh Kehutanan Fasilitator']);
        Skema::create(['nama_skema' => 'Skema Analis Sumber Daya Manusia (SDM)']);
        Skema::create(['nama_skema' => 'Skema Pengoperasian PLC (Programmable Logic Controller)']);
        Skema::create(['nama_skema' => 'Skema Penerapan K3-Laboratorium']);
        Skema::create(['nama_skema' => 'Skema Programmer']);
        Unitkompetensi::create([
            'skema_id' => 1,
            'kode_unit' => 'M.70PEN00.008.1',
            'judul_unit' => 'Melakukan identifikasi permasalahan dan analisis kebutuhan (Needs Assessment) pendampingan UMKM.'
        ]);
        Unitkompetensi::create([
            'skema_id' => 1,
            'kode_unit' => 'M.70PEN00.009.1',
            'judul_unit' => 'Membuat rencana pendampingan UMKM'
        ]);
        Unitkompetensi::create([
            'skema_id' => 1,
            'kode_unit' => 'M.70PEN00.032.1',
            'judul_unit' => 'Membuat laporan penilaian hasil pendampingan UMKM'
        ]);
        Unitkompetensi::create([
            'skema_id' => 1,
            'kode_unit' => 'N.78SPS02.028.2',
            'judul_unit' => 'Melaksanakan Pelatihan Tatap Muka (face to Face)'
        ]);
        Unitkompetensi::create([
            'skema_id' => 1,
            'kode_unit' => 'M.70PEN00.019.1',
            'judul_unit' => 'Melakukan Pendampingan Penerapan Manajemen Dasar Pengelolaan Usaha Mikro dan Kecil (UMK)'
        ]);
        Unitkompetensi::create([
            'skema_id' => 1,
            'kode_unit' => 'M.70PEN00.021.1',
            'judul_unit' => 'Melakukan Pendampingan Penyusunan Rencana Usaha (Bussiness Planning) UMKM'
        ]);
        Unitkompetensi::create([
            'skema_id' => 1,
            'kode_unit' => 'M.702090.020.01',
            'judul_unit' => 'Melakukan Pendampingan Penyusunan Rencana Usaha (Bussiness Planning) UMKM'
        ]);
        Unitkompetensi::create([
            'skema_id' => 1,
            'kode_unit' => 'M.70PEN00.028.01',
            'judul_unit' => 'Melakukan Pendampingan Penyusunan Studi Kelayakan Usaha'
        ]);
        // k3
        Unitkompetensi::create([
            'skema_id' => 2,
            'kode_unit' => 'M.71KKK00.001.1',
            'judul_unit' => 'Menerapkan Peraturan Perundang-undangan dan Standar dalam Pengujian Keselamatan dan Kesehatan Kerja (K3)'
        ]);
        Unitkompetensi::create([
            'skema_id' => 2,
            'kode_unit' => 'M.71KKK00.002.1',
            'judul_unit' => 'Melakukan Survei Potensi Bahaya Keselamatan dan Kesehatan Kerja'
        ]);
        Unitkompetensi::create([
            'skema_id' => 2,
            'kode_unit' => 'M.71KKK01.002.1',
            'judul_unit' => 'Merancang Sistem Tanggap Darurat'
        ]);
        Unitkompetensi::create([
            'skema_id' => 2,
            'kode_unit' => 'M.71KKK01.003.1',
            'judul_unit' => 'Melakukan Komunikasi Keselamatan dan Kesehatan Kerja (K3)'
        ]);
        Unitkompetensi::create([
            'skema_id' => 2,
            'kode_unit' => 'M.71KKK01.009.1',
            'judul_unit' => 'Menerapkan Program Pelayanan Kesehatan Kerja'
        ]);
        Unitkompetensi::create([
            'skema_id' => 2,
            'kode_unit' => 'M.71KKK01.010.1',
            'judul_unit' => 'Mengelola Sistem Dokumentasi Keselamatan dan Kesehatan Kerja (K3)'
        ]);
        Unitkompetensi::create([
            'skema_id' => 2,
            'kode_unit' => 'M.71KKK01.011.1',
            'judul_unit' => 'Menerapkan Manajemen Risiko Keselamatan dan Kesehatan Kerja (K3)'
        ]);
        Unitkompetensi::create([
            'skema_id' => 2,
            'kode_unit' => 'M.71KKK01.001.1',
            'judul_unit' => 'Merancang Strategi Pengendalian Risiko Keselamatan dan Kesehatan Kerja (K3) di Tempat Kerja'
        ]);
        Unitkompetensi::create([
            'skema_id' => 2,
            'kode_unit' => 'M.71KKK01.012.1',
            'judul_unit' => 'Mengevaluasi Pemenuhan Persyaratan dan Prosedur K3'
        ]);
        Unitkompetensi::create([
            'skema_id' => 2,
            'kode_unit' => 'M.71KKK01.013.1',
            'judul_unit' => 'Melakukan Investigasi Kecelakaan Kerja'
        ]);

        // penginderaan jauh
        Unitkompetensi::create([
            'skema_id' => 3,
            'kode_unit' => 'M.71IGN00.094.3',
            'judul_unit' => 'Melakukan Koreksi Geometrik Citra'
        ]);
        Unitkompetensi::create([
            'skema_id' => 3,
            'kode_unit' => 'M.71IGN00.171.2',
            'judul_unit' => 'Melakukan Interpretasi Visual Citra untuk Penutup/Penggunaan Lahan/Tema Tertentu'
        ]);
        Unitkompetensi::create([
            'skema_id' => 3,
            'kode_unit' => 'M.711GN00.093.2',
            'judul_unit' => 'Melakukan Koreksi Radiometrik Inisial pada Citra Optik'
        ]);
        Unitkompetensi::create([
            'skema_id' => 3,
            'kode_unit' => 'M.71IGN00.166.3',
            'judul_unit' => 'Menyusun Mozaik Citra Digital'
        ]);
        Unitkompetensi::create([
            'skema_id' => 3,
            'kode_unit' => 'M.71IGN00.167.3',
            'judul_unit' => 'Melakukan Pengukuran Spektrometri Lapangan untuk Menyusun Spectral Library'
        ]);
        
        Berita::create([
            'judul_berita' => 'Lorem ipsum dolor sit.',
            'link_foto' => 'Lorem ipsum dolor sit.',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dolorum cumque vitae repellat doloribus natus! Temporibus officia, voluptatem inventore distinctio ab consequuntur sequi? Ipsum, quae.',
            'konten_berita' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo mollitia nihil iure maxime magni sint animi quod, nostrum qui ducimus blanditiis nesciunt asperiores repellat harum, quo architecto perferendis sapiente laboriosam ratione velit explicabo sit cumque assumenda? Cum adipisci maiores magni ullam non, maxime sunt ab. Culpa rerum sit modi tempora, natus veritatis voluptas repellendus dicta doloremque ducimus nobis enim repudiandae itaque laudantium soluta id nostrum est minus blanditiis cumque? Perspiciatis rerum, ipsa maiores nesciunt earum blanditiis numquam explicabo sapiente dolorum dolores magni facere culpa officiis placeat, unde assumenda reprehenderit nihil animi quaerat deleniti quia asperiores. Ex in earum hic impedit?'
        ]);
        Berita::create([
            'judul_berita' => 'Lorem ipsum dolor sit.',
            'link_foto' => 'Lorem ipsum dolor sit.',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dolorum cumque vitae repellat doloribus natus! Temporibus officia, voluptatem inventore distinctio ab consequuntur sequi? Ipsum, quae.',
            'konten_berita' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo mollitia nihil iure maxime magni sint animi quod, nostrum qui ducimus blanditiis nesciunt asperiores repellat harum, quo architecto perferendis sapiente laboriosam ratione velit explicabo sit cumque assumenda? Cum adipisci maiores magni ullam non, maxime sunt ab. Culpa rerum sit modi tempora, natus veritatis voluptas repellendus dicta doloremque ducimus nobis enim repudiandae itaque laudantium soluta id nostrum est minus blanditiis cumque? Perspiciatis rerum, ipsa maiores nesciunt earum blanditiis numquam explicabo sapiente dolorum dolores magni facere culpa officiis placeat, unde assumenda reprehenderit nihil animi quaerat deleniti quia asperiores. Ex in earum hic impedit?'
        ]);
        Berita::create([
            'judul_berita' => 'Lorem ipsum dolor sit.',
            'link_foto' => 'Lorem ipsum dolor sit.',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dolorum cumque vitae repellat doloribus natus! Temporibus officia, voluptatem inventore distinctio ab consequuntur sequi? Ipsum, quae.',
            'konten_berita' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo mollitia nihil iure maxime magni sint animi quod, nostrum qui ducimus blanditiis nesciunt asperiores repellat harum, quo architecto perferendis sapiente laboriosam ratione velit explicabo sit cumque assumenda? Cum adipisci maiores magni ullam non, maxime sunt ab. Culpa rerum sit modi tempora, natus veritatis voluptas repellendus dicta doloremque ducimus nobis enim repudiandae itaque laudantium soluta id nostrum est minus blanditiis cumque? Perspiciatis rerum, ipsa maiores nesciunt earum blanditiis numquam explicabo sapiente dolorum dolores magni facere culpa officiis placeat, unde assumenda reprehenderit nihil animi quaerat deleniti quia asperiores. Ex in earum hic impedit?'
        ]);
        
        Jadwal::create([
            'skema_id' => 1,
            'asesor_id' => 2,
            'kapasitas' => 5,
            'daftar_mulai' => '2023-11-19',
            'daftar_berakhir' => '2023-11-25',
            'tanggal_mulai' => '2023-11-26',
            'tanggal_berakhir' => '2023-11-29',
            'biaya' => 500000,
        ]);
        Jadwal::create([
            'skema_id' => 2,
            'asesor_id' => 1,
            'kapasitas' => 5,
            'daftar_mulai' => '2023-12-3',
            'daftar_berakhir' => '2023-12-9',
            'tanggal_mulai' => '2023-11-10',
            'tanggal_berakhir' => '2023-11-13',
            'biaya' => 500000,
        ]);
        Jadwal::create([
            'skema_id' => 3,
            'asesor_id' => 3,
            'kapasitas' => 5,
            'daftar_mulai' => '2023-12-17',
            'daftar_berakhir' => '2023-12-23',
            'tanggal_mulai' => '2023-12-24',
            'tanggal_berakhir' => '2023-12-27',
            'biaya' => 500000,
        ]);
    }
}
