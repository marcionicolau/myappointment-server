<?php

use Illuminate\Database\Seeder;

class TimingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $timings = [
            '6:00 am','6:30 am',
            '7:00 am','7:30 am',
            '8:00 am','8:30 am',
            '9:00 am','9:30 am',
            '10:00 am','10:30 am',
            '11:00 am','11:30 am',
            '12:00 am','12:30 am',
            '1:00 pm','1:30 pm',
            '2:00 pm','2:30 pm',
            '1:00 pm','1:30 pm',
            '2:00 pm','2:30 pm',
            '3:00 pm','3:30 pm',
            '4:00 pm','4:30 pm',
            '5:00 pm','5:30 pm',
            '6:00 pm','6:30 pm',
            '7:00 pm','7:30 pm',
            '8:00 pm','8:30 pm',
            '9:00 pm','9:30 pm',
            '10:00 pm','10:30 pm'
        ];
//        $timings = [
//            '00:00-00:30','00:00-01:00','00:30-01:00','00:30-01:30',
//            '01:00-01:30','01:00-02:00','01:30-02:00','01:30-02:30',
//            '02:00-02:30','02:00-03:00','02:30-03:00','02:30-03:30',
//            '03:00-03:30','03:00-04:00','03:30-04:00','03:30-04:30',
//            '04:00-04:30','04:00-05:00','04:30-05:00','04:30-05:30',
//            '05:00-05:30','05:00-06:00','05:30-06:00','05:30-06:30',
//            '06:00-06:30','06:00-07:00','06:30-07:00','06:30-07:30',
//            '07:00-07:30','07:00-08:00','07:30-08:00','07:30-08:30',
//            '08:00-08:30','08:00-09:00','08:30-09:00','08:30-09:30',
//            '09:00-09:30','09:00-10:00','09:30-10:00','09:30-10:30',
//            '10:00-10:30','10:00-11:00','10:30-11:00','10:30-11:30',
//            '11:00-11:30','11:00-12:00','11:30-12:00','11:30-12:30',
//            '12:00-12:30','12:00-13:00','12:30-13:00','12:30-13:30',
//            '13:00-13:30','13:30-14:00','13:30-14:00','13:30-14:30',
//            '14:00-14:30','14:30-15:00','14:30-15:00','14:30-15:30',
//            '15:00-15:30','15:30-16:00','15:30-16:00','15:30-16:30',
//            '16:00-16:30','16:30-17:00','16:30-17:00','16:30-17:30',
//            '17:00-17:30','17:30-18:00','17:30-18:00','17:30-18:30',
//            '18:00-18:30','18:30-19:00','18:30-19:00','18:30-19:30',
//            '19:00-19:30','19:30-20:00','19:30-20:00','19:30-20:30',
//            '20:00-20:30','20:30-21:00','20:30-21:00','20:30-21:30',
//            '21:00-21:30','21:30-22:00','21:30-22:00','21:30-22:30',
//            '22:00-22:30','22:30-23:00','22:30-23:00','22:30-23:30',
//            '23:00-23:30','23:30-24:00','23:30-24:00','23:30-00:30',
//        ];
        foreach($timings as $timing) {
            factory(\App\Src\Timing\Timing::class)->create(['time_en'=>$timing]);
        }
    }
}
