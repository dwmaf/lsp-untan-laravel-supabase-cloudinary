<?php

namespace Database\Seeders;

use App\Models\Alamat;
use App\Models\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nowa;
use App\Models\User;

class Baru extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Nowa::create([
        //     'key' => 'FB',
        //     'value' => 'kosong'
        // ]);
        // Nowa::where('id', 2)
        //     ->update([
        //         'value'=>'62895707091605'
        //     ]);
        // Nowa::destroy(['id'=>1]);
        // Alamat::where('id',1)->update([
        //     'alamat' => 'Laboratorium Keilmuan Dasar Jl. Profesor Dokter H. Hadari Nawawi, Bansir Laut, Pontianak Tenggara, Pontianak, West Kalimantan 78124'
        // ]);
        
        // Berita::create(['link_foto'=>'berita-images/uwdO2lg4qXslmCuFv3mPAx85wDbAmz9zrCbLHD7j.jpg',
        //     'judul_berita'=>'berita baru',
        //     'konten_berita'=>'<div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores asperiores aperiam eligendi, veritatis odio eaque ut laudantium, quos sapiente blanditiis placeat mollitia officia commodi voluptas libero. Alias deleniti voluptatum temporibus?</div><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur dolorum in molestias non animi soluta quisquam suscipit consectetur aperiam, maiores molestiae possimus odio sed, eaque laboriosam et omnis, perferendis illum unde. Earum aliquam soluta iste quos, corrupti veniam rerum voluptatum, fugiat neque quibusdam perspiciatis. Est voluptas nihil quo tenetur iure laborum totam recusandae eius distinctio. Necessitatibus cupiditate, nam et deleniti in esse officia sunt possimus soluta quaerat, quo cumque, enim tenetur assumenda? Repudiandae ad, non maxime quae voluptate excepturi corrupti officia. Saepe iste iure quibusdam at voluptates, reprehenderit rerum asperiores provident praesentium nemo mollitia voluptatibus perferendis nulla sequi amet enim. Nesciunt sit voluptatem asperiores maxime quia sequi soluta earum eum, esse impedit temporibus? Iste atque officiis alias ex adipisci ab reiciendis quis commodi assumenda temporibus quos, quidem qui dolor, necessitatibus magni excepturi eaque. Blanditiis minima voluptate id cum, ad dicta exercitationem non deleniti eveniet esse debitis earum cumque eaque sed ducimus adipisci nam aspernatur modi distinctio. Consequuntur error enim magni porro facere corporis quos reiciendis beatae nisi qui quia et iure, provident itaque velit debitis minima quas rerum? Animi, dolor harum. Suscipit assumenda error harum! Optio facere beatae sunt error cupiditate deleniti et iure labore? Enim quidem eum amet?</div>',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores asperiores aperiam eligendi, veritatis odio eaque ut laudantium, quos sapiente blanditiis placeat mollitia officia commodi voluptas li...']);
        // Berita::create(['link_foto'=>'berita-images/BTxK7MLnrRtyIKXRd8s49f22LX93nPpVW4ohXsJw.jpg',
        //     'judul_berita'=>'berita baru',
        //     'konten_berita'=>'<div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores asperiores aperiam eligendi, veritatis odio eaque ut laudantium, quos sapiente blanditiis placeat mollitia officia commodi voluptas libero. Alias deleniti voluptatum temporibus?</div><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur dolorum in molestias non animi soluta quisquam suscipit consectetur aperiam, maiores molestiae possimus odio sed, eaque laboriosam et omnis, perferendis illum unde. Earum aliquam soluta iste quos, corrupti veniam rerum voluptatum, fugiat neque quibusdam perspiciatis. Est voluptas nihil quo tenetur iure laborum totam recusandae eius distinctio. Necessitatibus cupiditate, nam et deleniti in esse officia sunt possimus soluta quaerat, quo cumque, enim tenetur assumenda? Repudiandae ad, non maxime quae voluptate excepturi corrupti officia. Saepe iste iure quibusdam at voluptates, reprehenderit rerum asperiores provident praesentium nemo mollitia voluptatibus perferendis nulla sequi amet enim. Nesciunt sit voluptatem asperiores maxime quia sequi soluta earum eum, esse impedit temporibus? Iste atque officiis alias ex adipisci ab reiciendis quis commodi assumenda temporibus quos, quidem qui dolor, necessitatibus magni excepturi eaque. Blanditiis minima voluptate id cum, ad dicta exercitationem non deleniti eveniet esse debitis earum cumque eaque sed ducimus adipisci nam aspernatur modi distinctio. Consequuntur error enim magni porro facere corporis quos reiciendis beatae nisi qui quia et iure, provident itaque velit debitis minima quas rerum? Animi, dolor harum. Suscipit assumenda error harum! Optio facere beatae sunt error cupiditate deleniti et iure labore? Enim quidem eum amet?</div>',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores asperiores aperiam eligendi, veritatis odio eaque ut laudantium, quos sapiente blanditiis placeat mollitia officia commodi voluptas li...']);
        // User::create([
        //     'username'=>'admin',
        //     'password'=>bcrypt('4321')
        // ]);
        User::destroy(['id'=>1]);
    }
}
