<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pharmacy;

class PharmacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pharmacy = new Pharmacy(["name"=> "Dr. Max" ,"city" => "Prague 4" , "address_line" => "U Plynárny 1432/64" , "telephone_number" => "420 225 574 076" , "work_hours_open_at" => "8:00" , "work_hours_close_at" => "20:00" , "lat" => "50.05637628137641" , "long" => "14.470278573517929" ]);  
        $pharmacy->save();
        $pharmacy = new Pharmacy(["name"=> "Dr. Max" ,"city" => "Prague 10" , "address_line" => "U Slavie 1527/3"  , "telephone_number" => "420 225 574 303", "work_hours_open_at" => "9:00" , "work_hours_close_at" => "21:00" , "lat" => "50.06812675776045" , "long" => "14.46935593437492" ]);  
        $pharmacy->save();
        $pharmacy = new Pharmacy(["name"=> "Dr. Max" ,"city" => "Prague" , "address_line" => "Kutnohorská 531" , "telephone_number" => "420 225 574 542" , "work_hours_open_at" => "8:00" , "work_hours_close_at" => "20:00" , "lat" => "50.06784245288346" , "long" => "14.546891341913996" ]);  
        $pharmacy->save();
        $pharmacy = new Pharmacy(["name"=> "Dr. Max" ,"city" => "Prague 3" , "address_line" => "Vinohradská 2577/178" , "telephone_number" => "420 225 574 372", "work_hours_open_at" => "8:00" , "work_hours_close_at" => "18:00" , "lat" => "50.07826460797702" , "long" => "14.470283313479115" ]);  
        $pharmacy->save();
        $pharmacy = new Pharmacy(["name"=> "Lékárna Benu" ,"city" => "Prague 11" , "address_line" => "Opatovská 1753/12"  , "telephone_number" => "420 703 462 214" , "work_hours_open_at" => "8:00" , "work_hours_close_at" => "19:00" , "lat" => "50.02529384153999" , "long" => "14.51710007299976"]);  
        $pharmacy->save();
        $pharmacy = new Pharmacy(["name"=> "Lékárna Benu" ,"city" => "Prague 10" , "address_line" => "Nákupní 3" , "telephone_number" => "420 731 638 119" , "work_hours_open_at" => "9:00" , "work_hours_close_at" => "21:00" , "lat" => "50.07256287234655" , "long" => "14.542937113478851" ]); 
        $pharmacy->save();
        $pharmacy = new Pharmacy(["name"=> "Lékárna Benu" ,"city" => "Prague 1" , "address_line" => "Národní 339"  , "telephone_number" => "420 731 638 116", "work_hours_open_at" => "7:30" , "work_hours_close_at" => "19:30" , "lat" => "50.081915656579845" , "long" => "14.415949382792487" ]);  
        $pharmacy->save();
        $pharmacy = new Pharmacy(["name"=> "Dr. Max" ,"city" => "Brno - Bystrc" , "address_line" => "Jakuba Obrovského 1389/1b" , "telephone_number" => "420 547 385 319" ,"work_hours_open_at" => "7:30" , "work_hours_close_at" => "18:00" , "lat" => "49.2254664040336" , "long" => "16.53242826115172" ]);  
        $pharmacy->save();
        $pharmacy = new Pharmacy(["name"=> "Dr. Max" ,"city" => "Brno" , "address_line" => "Stará osada 4257/13" , "telephone_number" => "420 225 574 602" , "work_hours_open_at" => "7:30" , "work_hours_close_at" => "18:00" , "lat" => "49.20561907086141" , "long" => "16.642119879826573" ]);  
        $pharmacy->save();
        $pharmacy = new Pharmacy(["name"=> "Dr. Max" ,"city" => "Brno" , "address_line" => "Masarykova 444/1" , "telephone_number" => "420 542 211 639", "work_hours_open_at" => "7:30" , "work_hours_close_at" => "18:30" , "lat" => "49.19698243301275" , "long" => "16.60881757435802" ]);  
        $pharmacy->save();
        $pharmacy = new Pharmacy(["name"=> "Chytrá lékárna" ,"city" => "Brno" , "address_line" => "Oblá 518/75A" , "telephone_number" => "420 547 246 719", "work_hours_open_at" => "7:30" , "work_hours_close_at" => "18:00" , "lat" => "49.17913297564591" , "long" => "16.552340968829448" ]);  
        $pharmacy->save();
        $pharmacy = new Pharmacy(["name"=> "Lékárna Benu" ,"city" => "Brno" , "address_line" => "Skandinávská 128/2" , "telephone_number" => "420 731 638 124", "work_hours_open_at" => "9:00" , "work_hours_close_at" => "21:00" , "lat" => "49.15994059378975" , "long" => "16.627700309554683" ]); 
        $pharmacy->save();
        $pharmacy = new Pharmacy(["name"=> "Lékárna Hornmed" ,"city" => "Brno" , "address_line" => "Charbulova 296/8" , "telephone_number" => "420 602 651 150", "work_hours_open_at" => "7:30" , "work_hours_close_at" => "18:30" , "lat" => "49.191923763749685" , "long" => "16.63130519829097" ]);  
        $pharmacy->save();
        $pharmacy = new Pharmacy(["name"=> "Dr. Max" ,"city" => "Ostrava" , "address_line" => "Vítkovická 3278/3" , "telephone_number" => "420 595 627 234", "work_hours_open_at" => "8:00" , "work_hours_close_at" => "20:00" , "lat" => "49.8321288807007" , "long" => "18.281381422233874" ]);  
        $pharmacy->save();
        $pharmacy = new Pharmacy(["name"=> "Dr. Max" ,"city" => "Ostrava" , "address_line" => "Grmelova 2032/2" , "telephone_number" => "420 596 614 809", "work_hours_open_at" => "8:00" , "work_hours_close_at" => "20:00" , "lat" => "49.83943628502916" , "long" => "18.248594100870502" ]);  
        $pharmacy->save();
        $pharmacy = new Pharmacy(["name"=> "Dr. Max" ,"city" => "Ostrava" , "address_line" => "Horní 298/65a" , "telephone_number" => "420 595 781 987", "work_hours_open_at" => "8:00" , "work_hours_close_at" => "18:00" , "lat" => "49.783717142825296" , "long" => "18.253400619185552" ]);  
        $pharmacy->save();
        $pharmacy = new Pharmacy(["name"=> "Dr. Max" ,"city" => "Ostrava" , "address_line" => "Polská 6191/21" , "telephone_number" => "420 596 966 883", "work_hours_open_at" => "8:00" , "work_hours_close_at" => "20:00" , "lat" => "49.82315919365202" , "long" => "18.189714249080545" ]);  
        $pharmacy->save();
        $pharmacy = new Pharmacy(["name"=> "Dr. Max" ,"city" => "Olomouc" , "address_line" => "Horní lán 1310/10a" , "telephone_number" => "420 225 574 187", "work_hours_open_at" => "8:00" , "work_hours_close_at" => "16:00" , "lat" => "49.57849742910085" , "long" => "17.230955956629014" ]);  
        $pharmacy->save();
        $pharmacy = new Pharmacy(["name"=> "Dr. Max" ,"city" => "Karlovy Vary" , "address_line" => "Chebská 370/81a" , "telephone_number" => "420 353 542 392" , "work_hours_open_at" => "8:00" , "work_hours_close_at" => "20:00" , "lat" => "50.22611532612328" , "long" => "12.822726483804825" ]);  
        $pharmacy->save();
        $pharmacy = new Pharmacy(["name"=> "Lékárna Benu" ,"city" => "Karlovy Vary" , "address_line" => "Solokovská 1019/148" , "telephone_number" => "420 703 462 218", "work_hours_open_at" => "8:00" , "work_hours_close_at" => "20:00" , "lat" => "50.23462577060796" , "long" => "12.841265911591444" ]);  
        $pharmacy->save();
        $pharmacy = new Pharmacy(["name"=> "Central Apotheke" ,"city" => "Karlovy Vary" , "address_line" => "Stará Louka 20" , "telephone_number" => "420 607 079 649", "work_hours_open_at" => "9:00" , "work_hours_close_at" => "19:00" , "lat" => "50.22331478320602" , "long" => "12.881949657124823" ]);  
        $pharmacy->save();

    }
}
