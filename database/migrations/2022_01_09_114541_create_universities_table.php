<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('namaUniversiti', 240);
            $table->string('negeriUniversiti', 50);
            $table->string('lokasiUniversiti', 50);
            $table->timestamps();
        });

        DB::table('universities')->insert([
            ['namaUniversiti' => 'International Islamic University Malaysia (IIUM) ', 'negeriUniversiti' => 'Wilayah Persekutuan Kuala Lumpur', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'International Islamic University Malaysia (IIUM) ', 'negeriUniversiti' => 'Pahang ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'National Defence University of Malaysia ', 'negeriUniversiti' => 'Wilayah Persekutuan Kuala Lumpur ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Sultan Idris Education University (UPSI) ', 'negeriUniversiti' => 'Perak ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Kebangsaan Malaysia (UKM) (Bangi) ', 'negeriUniversiti' => 'Selangor ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Kebangsaan Malaysia (UKM) (Cheras) ', 'negeriUniversiti' => 'Wilayah Persekutuan Kuala Lumpur ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Kebangsaan Malaysia (UKM) (Kuala Lumpur) ', 'negeriUniversiti' => 'Wilayah Persekutuan Kuala Lumpur ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Malaysia Kelantan (UMK) ', 'negeriUniversiti' => 'Kelantan ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Malaysia Kelantan (UMK) ', 'negeriUniversiti' => 'Kelantan ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Malaysia Pahang (UMP)', 'negeriUniversiti' => 'Pahang ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Malaysia Perlis (UniMAP)', 'negeriUniversiti' => 'Perlis ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Malaysia Sabah (UMS) ', 'negeriUniversiti' => 'Sabah ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Malaysia Sarawak (UNIMAS) (Kota Samarahan) ', 'negeriUniversiti' => 'Sarawak ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Malaysia Sarawak (UNIMAS) (Kuching) ', 'negeriUniversiti' => 'Sarawak ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Malaysia Terengganu (UMT)', 'negeriUniversiti' => 'Terengganu ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Putra Malaysia (UPM) ', 'negeriUniversiti' => 'Selangor ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Sains Islam Malaysia (USIM)', 'negeriUniversiti' => 'Negeri Sembilan ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Sains Malaysia (USM) (Health Campus) (Kubang Kerian) ', 'negeriUniversiti' => 'Kelantan ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Sains Malaysia (USM) (Minden) ', 'negeriUniversiti' => 'Penang ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Sains Malaysia (USM) (NibongTebal) ', 'negeriUniversiti' => 'Penang ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Sultan Zainal Abidin (UniSZA)', 'negeriUniversiti' => 'Terengganu ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Sultan Zainal Abidin (UniSZA) (Gong Badak Campus) ', 'negeriUniversiti' => 'Terengganu ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Sultan Zainal Abidin (UniSZA) (Kampus Tembila) ', 'negeriUniversiti' => 'Terengganu ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknikal Malaysia Melaka (UTeM)', 'negeriUniversiti' => 'Malacca ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi Malaysia (UTM) ', 'negeriUniversiti' => 'Johor ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Johor Kampus Pasir Gudang ', 'negeriUniversiti' => 'Johor ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Johor Kampus Segamat ', 'negeriUniversiti' => 'Johor ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Kedah Kampus Sungai Petani ', 'negeriUniversiti' => 'Kedah ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Kelantan Kampus Kota Bharu ', 'negeriUniversiti' => 'Kelantan ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Kelantan Kampus Machang ', 'negeriUniversiti' => 'Kelantan ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Melaka Kampus Alor Gajah ', 'negeriUniversiti' => 'Malacca ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Melaka Kampus Bandaraya Melaka ', 'negeriUniversiti' => 'Malacca ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Melaka Kampus Jasin ', 'negeriUniversiti' => 'Malacca ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Negeri Sembilan Kampus Kuala Pilah ', 'negeriUniversiti' => 'Negeri Sembilan ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Negeri Sembilan Kampus Rembau ', 'negeriUniversiti' => 'Negeri Sembilan ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Negeri Sembilan Kampus Seremban ', 'negeriUniversiti' => 'Negeri Sembilan ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Pahang Kampus Jengka ', 'negeriUniversiti' => 'Pahang ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Pahang Kampus Kuantan ', 'negeriUniversiti' => 'Pahang ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Pahang Kampus Raub ', 'negeriUniversiti' => 'Pahang ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Perak Kampus Seri Iskandar ', 'negeriUniversiti' => 'Perak ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Perak Kampus Tapah ', 'negeriUniversiti' => 'Perak ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Perlis Kampus Arau ', 'negeriUniversiti' => 'Perlis ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Pulau Pinang Kampus Balik Pulau ', 'negeriUniversiti' => 'Penang ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Pulau Pinang Kampus Bertam ', 'negeriUniversiti' => 'Penang ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Pulau Pinang Kampus Permatang Pauh ', 'negeriUniversiti' => 'Penang ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Sabah Kampus Kota Kinabalu ', 'negeriUniversiti' => 'Sabah ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Sabah Kampus Tawau ', 'negeriUniversiti' => 'Sabah ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Sarawak Kampus Mukah ', 'negeriUniversiti' => 'Sarawak ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Sarawak Kampus Samarahan ', 'negeriUniversiti' => 'Sarawak ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Sarawak Kampus Samarahan 2 ', 'negeriUniversiti' => 'Sarawak ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Selangor Kampus Puncak Alam ', 'negeriUniversiti' => 'Selangor ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Selangor Kampus Puncak Perdana ', 'negeriUniversiti' => 'Selangor ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Selangor Kampus Sungai Buloh ', 'negeriUniversiti' => 'Selangor ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Terengganu Kampus Dungun ', 'negeriUniversiti' => 'Terengganu ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Cawangan Terengganu Kampus Kuala Terengganu ', 'negeriUniversiti' => 'Terengganu ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA (UiTM) Shah Alam ', 'negeriUniversiti' => 'Selangor ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA Cawangan Johor Kampus Johor Bahru ', 'negeriUniversiti' => 'Johor ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA Cawangan Johor Kampus Larkin ', 'negeriUniversiti' => 'Johor ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA Cawangan Kedah Kampus Alor Setar ', 'negeriUniversiti' => 'Kedah ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA Cawangan Negeri Sembilan Kampus Kuala Pilah (Beting) ', 'negeriUniversiti' => 'Negeri Sembilan ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA Cawangan Pahang Kampus Bukit Sekilau ', 'negeriUniversiti' => 'Pahang ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA Cawangan Pulau Pinang Kampus Bukit Mertajam ', 'negeriUniversiti' => 'Penang ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA Cawangan Sarawak Kampus Mukah 2 ', 'negeriUniversiti' => 'Sarawak ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA Cawangan Selangor Kampus Dengkil ', 'negeriUniversiti' => 'Selangor ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA Cawangan Selangor Kampus Seksyen 17 ', 'negeriUniversiti' => 'Selangor ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Teknologi MARA Cawangan Terengganu Kampus Kuala Terengganu (Cendering) ', 'negeriUniversiti' => 'Terengganu ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Tun Hussein Onn Malaysia (UTHM)', 'negeriUniversiti' => 'Johor ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Tun Hussein Onn Malaysia (UTHM) ', 'negeriUniversiti' => 'Johor ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'Universiti Utara Malaysia (UUM) ', 'negeriUniversiti' => 'Kedah ', 'lokasiUniversiti' => 'domestik'],
            ['namaUniversiti' => 'University of Malaya ', 'negeriUniversiti' => 'Wilayah Persekutuan Kuala Lumpur ', 'lokasiUniversiti' => 'domestik'],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('universities');
    }
}
