<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class WebinarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('webinars')->insert([
            [
                'title' => 'Gelecekte Web Teknolojileri',
                'description' => 'Gelecekte Web teknolojileri nereye gidecek?',
                'date' => Carbon::parse('2024-11-12 21:00:00'),
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'title' => 'İnternet Nedir?',
                'description' => 'İnternet geçmişi ve geleceği hakkında seminer',
                'date' => Carbon::parse('2024-11-13 11:00:00'),
                'status' => 0,
                'created_at' => Carbon::now(),
            ],
            [
                'title' => 'Veribilimi ve Veri Madenciliği Semineri',
                'description' => 'Veri Madenciliği nedir? Neden gereklidir?',
                'date' => Carbon::parse('2024-11-14 12:00:00'),
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'title' => 'Yapay Zeka Gelişimi',
                'description' => 'Yapay Zeka hakkında merak edilenler. CHATGPT nedir?',
                'date' => Carbon::parse('2024-11-15 17:00:00'),
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'title' => 'Amazon Web Services',
                'description' => 'Aws nedir? Neden Aws kullanırız? Gelecekte Bulut Sunucuları nereye evrilecek?',
                'date' => Carbon::parse('2024-11-17 15:00:00'),
                'status' => 0,
                'created_at' => Carbon::now(),
            ],
            [
                'title' => 'Azure Vs Aws',
                'description' => 'Aws ve Azure nedir? Hangisi daha çok tercih edilir?',
                'date' => Carbon::parse('2024-11-20 20:00:00'),
                'status' => 0,
                'created_at' => Carbon::now(),
            ],
            [
                'title' => 'Siber Güvenlil',
                'description' => 'Siber Güvenlik nedir? İnternet ne kadar güvenilirdir? Siber Güvenlik kavramı nasıl oluştu?',
                'date' => Carbon::parse('2024-11-22 14:00:00'),
                'status' => 0,
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
