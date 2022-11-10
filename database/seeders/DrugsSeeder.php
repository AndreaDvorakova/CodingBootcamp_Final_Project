<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Drugs;

class DrugsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        $drug = new Drugs(["name"=> "Nature Love® Buffered Plant-Based Vitamin C" ,"description" => "Excellent value for money: buffered plant-based Vitamin C from the fermentation of corn (GMO free). A daily dose contains 1000 mg vitamin C (500 mg per capsule). 365 vegan capsules, 6-month supply. Vitamin C contributes to the normal functioning of the immune system, the protection of cells from oxidative stress, the reduction of fatigue and normal collagen formation Premium raw materials: due to the buffering with alkaline calcium ions, our vitamin C is pH neutral and therefore acid-free. Our vitamin C is thus stomach-friendly and particularly well tolerated Made in strictly controlled plants without undesirable additives and 100% vegan: they are free from flavouring and colouring agents, undesirable stabilisers and are of course lactose-free, gluten-free, free from preservatives and genetically modified ingredients (GMO-free). Made in Germany in strictly controlled, HACCP-certified facilities (as required by the food regulations) Every production batch is laboratory-tested: many manufacturers rely on the specifications of their raw material suppliers. A few get their products tested by a laboratory now and then. Nature Love goes one step further: we get the raw material or products from each individual production batch tested by an independent German laboratory" , "image" => "vitamin_c.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "Vitamin D3 Tablets - 2000 IU" ,"description" => "Pure Vitamin D3 - Vit D is known as sun vitamin and supports your whole family. Vitamin D contributes to normal calcium levels in the blood and to the maintenance of normal bones and teeth. In addition, vitamin D contributes to the normal functioning of the immune system. Easy to use - A vitamin D tablet contains 2000 IU. Cholecalciferol. The recommended daily dose for Germany is 1000 IU, so you only need one tablet every 2 days. They are particularly small and therefore easy to swallow. With 400 tablets per pack, they have a particularly long supply. Good for the environment – quality comes first. Our natural products are therefore safe to use. They are free from synthetic flavours, dyes or sweeteners. We do not use unnecessary packaging and our containers are recyclable. We strive to reduce our carbon footprint." , "image" => "vitamin_d.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "Vitamin B Complex Capsules " ,"description" => "High-dosage vitamin B complex: High-dose vitamin B complex with all 8 B vitamins. We use bio-active forms for our vitamin B complex such as vitamin B12 in the form of methylcobalamin and adenosylcobalamin, and vitamin B6 in the form of pyridoxal 5'-phosphate and D-biotin. Our product contains 180 capsules and therefore corresponds to a practical 6-month supply. Laboratory-tested and without any unwanted additives: Our vitamin B12 tablets are tested by certified independent German laboratories. They check for arsenic, lead and cadmium, amongst other things (see laboratory report in product images – cannot guarantee English language). In addition, our product contains no undesirable additives: it is free from release agents, magnesium stearate, flavours, colourants or preservatives. Of course, our product is also GMO-free, lactose-free and gluten-free. 100% vegan. This product is suitable for vegans and vegetarians, as we use a vegan capsule shell (not gelatine-based) and do not use any animal ingredients. Made in Germany: Our dietary supplements are manufactured in strictly tested and certified facilities in Germany." , "image" => "vitamin_b.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "Magnesium capsules - 365 pieces" ,"description" => "High-dose magnesium: 664 mg marine magnesium oxide, of which 400 mg elementary magnesium per capsule. 365 capsules, year’s supply. Magnesium obtained from the dead sea in Israel. Studies show that the recyclability and bioequivalence of magnesium oxide and magnesium citrate are the same. The scientific study by Shechter et al. (2012) shows that after several weeks there is a significantly better intracellular storage of magnesium from magnesium oxide compared to magnesium citrate 100% vegan: This product is suitable for vegans and vegetarians, as we use a vegan capsule shell (not gelatine-based) and do not use any animal ingredients. Free from undesirable additives: free from unwanted additives such as release agents, magnesium stearate, flavours, colourants or preservatives. Only contains what matters: Magnesium oxide and vegetable capsule shell." , "image" => "magnesium.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "Nature's Way Zinc Gummies with Berry Flavour" ,"description" => "High dosage: zinc is an essential trace element for our body. With just one rubber a day, you can cover 110% of your daily requirement of zinc, in times of increased needs, two rubbers provide you with 22 mg elementary zinc high dosage. Fruity delicious: high-dose zinc supplement in the form of a rubber. Thanks to the delicious berry taste, it is particularly easy for you to think about your daily portion of zinc. The clever alternative to zinc effervescent tablets. Full power for your immune system: zinc rubberies from Nature's Way support the normal function of your immune system. Zinc for skin, hair and nails: zinc supports healthy skin, beautiful hair and firm nails. Suitable for use on blemished skin. No unnecessary additives: our zinc gummies are vegetarian, free from artificial sweetness, artificial colours and preservatives, gelatine, gluten and lactose free. Independently laboratory tested in Germany." , "image" => "zinc.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "Kala Health vitamin E-8" ,"description" => "Kala Health vitamin E-8 60 capsules - contains all 8 known forms of vitamin E, including 4 tocopherols and 4 tocotrienols of excellent quality and not synthetic. The patented EVNol SupraBio system is a self-emulsifying system that increases the absorption of fat-soluble plant nutrients. A known problem with vitamin E is that tocotrienols can often be difficult to absorb by the body. After years of research, Kala Health has succeeded in developing a so-called self-emulsifying system called SupraBio. This system ensures that the tocotrienols and tocopherols form into small fat balls that increase absorption in the body and make it more efficient. Tocotrienol absorption increases by 250%, in addition tocopherols are better absorbed. This vitamin E composition is a natural dietary supplement that has been scientifically tested by multiple studies as the best available vitamin E dietary supplement." , "image" => "vitamin_e.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "Iron 40 mg + 40 mg natural vitamin C" ,"description" => "Combination abilities and energy change – essential iron – iron has a function in cell division, contributes to a normal cognitive function, normal energy metabolism and to maintain a normal function of the immune system. In addition, iron contributes to the normal formation of red blood cells and hemoglobin, as well as to normal oxygen transport in the body. It also helps to reduce fatigue and fatigue. Laboratory tested premium quality – 100% vegan and without unwanted additives – our high-quality vitamin B12 is produced without artificial additives, genetic engineering or other animal components. Free from magnesium stearate, release agents, flavours, dyes, stabilisers, lactose free, gluten-free and preservatives. Laboratory tested for zinc content, purity, all types of pollutants and much more from independent accredited testing laboratories. Brand quality made in Germany: our products are made in Germany under the highest quality standards and the strictest quality controls; every GloryFeel product is subject to continuous tests performed by accredited test laboratories." , "image" => "iron.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "Centrum Generation 50+" ,"description" => "Micronutrients as a daily supplement for Best Ager > 50 years: vitamin C, selenium and zinc support immune system and defences, iron supports the brain and vitamin A the eyes A-Z multimineral booster: calcium, magnesium and vitamin D support the preservation of bones, vitamin B6, B12 and manganese the energy metabolism. Also with: vitamin E, K, biotin, folic acid and iodine The Centrum formulations are developed on the basis of scientific research and formulated by nutrient experts. All micronutrients are tested and certified for safety High-quality all-rounder for complete supply of micronutrients: Centrum is the partner for immune protection, concentration and general well-being / 1 tablet per day Box contents: 1 x 126 g, 100 tablets Centrum Generation 50+ / micronutrient formula especially for over 50 years old / covers the daily needs of many vitamins, minerals and trace elements" , "image" => "multivitamin.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "Vitamin A Drops High Dose" ,"description" => "Esterified vitamin A or Retinol as a Retinyl palmitate (dissolved in MCT oil from coconut). This form is stable and, unlike beta-carotene (the precursor of vitamin A), can be easily metabolised to bioactive vitamin A. No use of synthetic Retinyl acetate. High dose with 500 μg vitamin A per drop. 1,700 drops per bottle. With no undesirable additives such as alcohol, magnesium stearate, release agents, flavours, dyes, gelatin and of course also GMO-free, lactose-free and gluten-free. 100% vegan: Our vitamin A drops or our Retinyl palmitate is completely vegan and is not made from animal sources. It is therefore also suitable for vegans and vegetarians." , "image" => "vitamin_a.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "Kappa Vitamin K2 Drops" ,"description" => "Premium raw materials: High dose 200μg vitamin K2 MK7 (99.7+ % All-Trans) per daily dose (10 drops). Premium: K2Vital from Kappa, the vitamin K2 produced in Europe (Norway) with guaranteed All-Trans content of min. 99,7 %. For improved absorption dissolved in high quality MCT oil from coconut. 1700 drops (50 ml). Caution: Many vitamin K2 preparations do not keep what they promise. Please pay attention to laboratory-tested All-Trans values. Vegan and without undesirable additives: Vitamin K2 derived from plant origin. Free from magnesium stearate, release agents, flavours, colourants, stabilisers, fillers, gelatine and of course, also GMO-free, lactose-free, gluten-free and without preservatives. Very high bioverability and stability: Vitamin K2 is fat-soluble so we have dissolved it from coconut for optimal bioavailability in MCT oil. The very high stability of our Vitamin K2 makes it easily available for the body." , "image" => "vitamin_k.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "STREPSILS HONEY & LEMON LOZENGES" ,"description" => "Strepsils Honey and Lemon Lozenges, contain a combination of two effective antiseptics (2, 4-Dichlorobenzyl alcohol 1.2mg, Amylmetacresol 0.6mg) to relieve the discomfort of sore throats in the soothing honey and lemon Lozenge format." , "image" => "STREPSILS_HONEY_LEMON.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "Strepsils Extra Blackcurrant Lozenges" ,"description" => "If suffering from painful sore throat try Strepsils Extra Blackcurrant Lozenges containing Hexylresorcinol 2.4mg - an ingredient which is both antiseptic to fight throat infections but also has local anaesthetic properties to numb throat pain." , "image" => "STREPILS_EXTRA_BLACKCURRENT.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "STREPSILS PLUS ANAESTHETIC THROAT SPRAY
        " ,"description" => "Plus Anaesthetic Throat Spray containing Lidocaine, a powerful local anaesthetic which rapidly numbs the pain and a combination of 2 antiseptics (Amylmetacresol 0.29mg/spray
        2,4-Dichlorobenzyl Alcohol 0.58mg/spray) to help kill the bacteria which can cause sore throats infections. For fast and targeted relief.
        Suitable for? Plus Anaesthetic Throat Spray can be used to relieve severe sore throats in adults over the age of 18 years.
        How to take? For Oromucosal use. For optimum use rotate the nozzel 90 degrees. Spray the affected area 2 times and swallow gently. Repeat every 2 hours as required, up to a maximum of 8 times (16 sprays) in 24 hours. Plus Anaesthetic Throat Spray is available in 20ml. Ask your pharmacist. Always read the label." , "image" => "STREPSILS_PLUS_ANAESTHETIC_THROAT_SPRAY.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "Strepsils Intensive Orange Sugar Free Lozenges" ,"description" => "If you require a sugar free lozenge, try our Strepsils Intensive Orange Sugar-Free Lozenges.Intensive Orange Sugar Free lozenges are the only sugar free lozenges containing flurbiprofen for fast, targeted, and long lasting relief. Suitable for? Intensive can be used to relieve sore throats in adults and children over the age of 12 years. How to take? One lozenge should be sucked every 3-6 hours as required. To avoid any local irritation, it is a good idea to move it around the mouth while sucking. No more than five lozenges should be taken in a 24 hour period, for a maximum of three days.
        Intensive Orange Sugar Free Lozenges are available in pack sizes of 16 lozenges. Ask your pharmacist. Always read the label.
        Did you know? 85% of sore throats are caused by virus, not bacteria, therefore antibiotics are not relevant.* Viruses trigger inflammation. Infammation causes the pain and difficulty swallowing. Viruses can trigger inflammation and cause pain and difficulty swallowing. Our survey shows that almost one in five sore throat sufferers experienced an inflamed sore throat in the last 12 month prior to the survey.***Worrall GJ. Acute Sore Throat.Canadian Family Physician 2007; 53: 1961-1962. **survey of 403 UK adults" , "image" => "Strepsils_Intensive_Orange_Sugar_Free_Lozenges.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "Strepsils Soothing Throat Spray" ,"description" => "
        Try Strepsils Soothing Throat Spray to soothe your throat. - With Polysac-activeTM , containing natural honey which can help soothe a sore throat. Spray & Go Format – Spray is a great on-the-go format to take anywhere. - Use Day & Night – Suitable from the moment you wake up, during the day, just before bed and throughout the night.
        Suitable for:
        Strepsils Soothing Throat Spray can be used by adults and children from 3 years old. The spray always needs to be administered by an adult or under supervision of an adult. During pregnancy or breastfeeding or when you are suffering from diabetes, it is recommended to consult your doctor or pharmacist before using the spray.
        How to use:
        Read the Instructions for Use carefully before using the product. Shake well before use. Use the nozzle on top of the bottle to spray directly towards the back of the throat. Spray 2 to 3 times every 3 hours, or as required.
        Always read the label" , "image" => "Strepsils_Soothing_Throat_Spray.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "COLDREX pills, 12 pcs." ,"description" => "Short-term tablets for relieving symptoms of the common cold and flu, including headache, sore throat, nasal breathing difficulties, sinusitis, and acute sinusoidal." , "image" => "coldrex_tabletes_12_gab.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "COLDREX HotRem Lemon sachets, 10 pcs." ,"description" => "Powder for oral solution to temporarily relieve flu and cold symptoms. For example, headache, high fever, chills, sore throat, aching and sharp pain, difficulty breathing through the nose, sinusitis and associated pain and acute runny nose." , "image" => "coldrex_hotrem_lemon_pacinas_10_gab.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "COLDREX Maxgrip Lemon powder, 10 pcs." ,"description" => "Powder for preparation of oral solution. Almost white powder with a lemon scent. For the temporary relief of symptoms of the flu and colds, including fever, chills, headache, sore throat, nasal breathing difficulties, sinusitis and associated pain, acute inflammation of the nasal mucosa." , "image" => "coldrex_maxgrip_lemon_pulveris10_gab.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "COLDREX HotRem Honey & Lemon sachets, 10 pcs." ,"description" => "For the temporary relief of severe cold and flu symptoms, including fever, chills, headache, limb pain, nasal congestion, sore throat, sinusitis and associated pain, and coryza." , "image" => "coldrex_hotrem_honey_lemon_pacinas_10_gab.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "COLDREX MAXGRIP LEMON sachets, 5 pcs." ,"description" => "Powder for preparation of oral solution. Almost white powder with a lemon scent. For the temporary relief of symptoms of the flu and colds, including fever, chills, headache, sore throat, nasal breathing difficulties, sinusitis and associated pain, acute inflammation of the nasal mucosa." , "image" => "coldrex_maxgrip_lemon_pacinas_5_gab.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "PANADOL 120 mg/5 ml suspension, 100 ml" ,"description" => "The active ingredient in this medicine is paracetamol. Panadol is used to relieve mild to moderate pain and reduce fever. Suitable for babies and children from 1 month to 12 years old." , "image" => "panadol_120_mg_5_ml_suspensija_100_ml.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "NUROFEN Chldren suspension, 100 ml" ,"description" => "Nurofen relieves the condition by altering the body's response to heat, pain and swelling.
        Nurofen contains the active substance ibuprofen, which belongs to the group of non-steroidal anti-inflammatory drugs (NSAIDs). Its action is directed at the source of heat and pain.
        Nurofen is indicated for infants from 3 months of age and children.
        Taken internally
        * Quickly and effectively lower the temperature of the child (including during immunization),
        * Relieve toothache, toothache, ear pain, neck pain, headache and mild sprain pain.
        Your doctor may also prescribe this medication for other conditions. Follow your doctor's instructions on how often and how much to give your baby." , "image" => "nurofen_berniem_suspensija_100_ml.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "NUROFEN FORTE pills, 12 pcs." ,"description" => "The mechanism of action of ibuprofen, a propionic acid derivative from the NSAID group, is due to the inhibition of the synthesis of PGs - mediators of pain, inflammation and hyperthermic reaction. Indiscriminately blocks COX-1 and COX-2, as a result of which it inhibits the synthesis of GHGs. It has a fast directed action against pain (analgesic), antipyretic and anti-inflammatory action. In addition, ibuprofen reversibly inhibits platelet aggregation. The analgesic effect of the drug lasts up to 8 hours." , "image" => "nurofen_forte_tabletes_12_gab.jpg" ]); 
        $drug->save();


        $drug = new Drugs(["name"=> "NUROFEN FORTE EXPRESS 400 mg pills, 24 pcs." ,"description" => "Nurofen Forte Express contains ibuprofen, which belongs to a group of medicines called non-steroidal anti-inflammatory drugs (NSAIDs). NSAIDs relieve the condition by altering the body's response to pain, swelling, and fever.

        Nurofen Forte Express soothes:

        headache, back pain, painful periods, toothache, neuralgia (nerve pain), and migraine;
        muscle pain, rheumatic pain, and mild arthritis pain;
        cold and flu symptoms, fever." , "image" => "nurofen_forte_express_400_mg_tabletes_24_gab.jpg" ]);
        $drug->save();

        $drug = new Drugs(["name"=> "NUROFEN FORTE EXPRESS 400 mg pills, 12 pcs." ,"description" => "Nurofen Forte Express contains ibuprofen, which belongs to a group of medicines called non-steroidal anti-inflammatory drugs (NSAIDs). NSAIDs relieve the condition by altering the body's response to pain, swelling, and fever.
        Nurofen Forte Express soothes:

        headache, back pain, painful periods, toothache, neuralgia (nerve pain) and migraine;
        muscle pain, rheumatic pain and mild arthritis pain;    
        symptoms of colds and flu, fever." , "image" => "nurofen_forte_express_400_mg_tabletes_12_gab.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "ASPIRIN 500 mg pills, 20 pcs." ,"description" => "Aspirin 500 mg is indicated for the relief of symptoms of headache, toothache, herpes, back pain, menstrual pain, muscle and joint pain, and mild arthritis pain. Aspirin 500 mg is also used to relieve pain and fever symptoms from colds and flu." , "image" => "aspirin_500_mg_tabletes_20_gab.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "ASPIRIN 500 mg pills, 100 pcs." ,"description" => "Aspirin 500 mg is indicated for the relief of symptoms of headache, toothache, herpes, back pain, menstrual pain, muscle and joint pain, and mild arthritis pain. Aspirin 500 mg is also used to relieve pain and fever symptoms from colds and flu." , "image" => "aspirin_500_mg_tabletes_100_gab.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "ASPIRIN Cardio 100 mg pills, 28 pcs." ,"description" => "Aspirin Cardio tablets are indicated for the following cardiovascular use: reduction of the risk of morbidity and mortality in patients with a history of myocardial infarction, secondary stroke prevention, reduction of the risk of transient ischemic attacks and stroke in patients with transient ischaemia, morbidity and mortality in patients with to prevent thromboembolism after vascular surgery or surgery, to reduce the risk of deep vein thrombosis and pulmonary embolism after long-term immobilisation, to reduce the risk of first myocardial infarction in people with cardiovascular risk factors." , "image" => "aspirin-cardio_100_mg_tabletes_28_gab.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "ASPIRIN Cardio 100 mg pills, 98 pcs." ,"description" => "Aspirin Cardio tablets are intended for the following cardiovascular use: Reducing the risk of mortality in patients with suspected acute myocardial infarction. Reducing the risk of morbidity and mortality in patients with previous myocardial infarction. Secondary prevention of stroke. Reducing the risk of temporary ischemic attacks and stroke in patients with transient ischemia. Reducing the risk of morbidity and mortality in patients with stable and unstable angina. Prevention of thromboembolism after blood vessel surgery or surgery such as PTCA, CABG, carotid endarterectomy, arteriovenous shunting. Reducing the risk of deep vein thrombosis and pulmonary embolism after prolonged immobility, such as after major surgeries. Reducing the risk of first myocardial infarction in people with cardiovascular risk factors, for example, diabetes mellitus, hyperlipidemia, hypertension, obesity, in smokers, in the elderly." , "image" => "aspirin_cardio_100_mg_tabletes_98_gab.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "ASPIRIN-C effervescent tablets, 10 pcs." ,"description" => "Aspirin C is an analgesic and antipyretic agent used to relieve symptoms of headache, toothache, cervical, menstrual, muscle and joint pain, back pain, and mild arthritis pain. To relieve pain and fever in case of colds and fevers." , "image" => "aspirin_c_putojosas_tabletes_10_gab.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "JONAX Antistress + B pills, 25 pcs." ,"description" => "Food supplement. It has a calming, cardiotonic and tonic effect. The medicinal herbs included in the composition have a beneficial effect on the body in case of nervous tension, irritability, sleep problems and heart rhythm disturbances" , "image" => "jonax_antistress_b_tabletes_25_gab.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "STOP STRESS (1 + 1) capsules, 30 pcs." ,"description" => "STOP. STRESS® - a stress protection formula - contains 17 components useful for the human body: vitamins, amino acids, trace elements and plant extracts.
        STOP. STRESS® reduces irritability, normalizes sleep, and nervous system function. This can be facilitated by the following: extracts of valerian and passion fruit. Peppermint helps to relax, valerian helps to improve the quality of sleep and promotes the normal functioning of the nervous system." , "image" => "stop_stress_1_1_kapsulas_30_gab.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "STOP STRESS Night (1 + 1) capsules, 30 pcs.","description" => "STOP STRESS Night is a natural keeper of your sleep. The product consists of medicinal herbs, essential amino acids and a natural bioregulator.

        The overnight formula will relieve you of insomnia and normalize your sleep, because valerian, together with hops, acts on receptors in the brain, which are responsible for sleep and for the calming action of the nervous system in their natural form, promote healthy sleep and help you fall asleep. Passion flower extract helps to relax, calm down and fall asleep. Melatonin shortens the time it takes to fall asleep, and is beneficial when taken at least 1 mg of melatonin shortly before bedtime." , "image" => "stop_stress_night_1_1_kapsulas_30_gab.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "NERVOSTRONG capsules, 30 pcs." ,"description" => "Anxiety, anxiety, bad mood, increased irritability and nervousness, nervous exhaustion, apathy, tearfulness, poor sleep and sleep disturbances are just some of the signs that indicate that our nervous system is weakened, overworked and needs help.

        Nervostrong® is a natural product that calms the nerves, relieves tension, irritability, reduces nervousness and other effects of stress, relaxes the nervous system, improves mood and sleep. When taken regularly, Nervostrong® strengthens the nervous system and improves the emotional state of a person, increases resistance to stress and nervous overload. Nervostrong® contains magnesium with B vitamins (B2 or riboflavin, B3 or niacin, B6, B12), which contribute to the normal functioning of the nervous system and reduce fatigue and weakness, folic acid (folate), which is necessary for normal psychological function, is indispensable amino acid L-tryptophan and extracts of medicinal plants (valerian, lemon balm, etc.), which have a calming and relaxing effect. Nervostrong® - weak nerves of the feet!" ,"image" => "nervostrong_kapsulas_30_gab.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "HERBASTRESS pills, 30 pcs." ,"description" => "HERBASTRESS® is a complex of five herbal extracts and vitamins B6 and B12. Vitamin B6 and Vitamin B12 contribute to the normal functioning of the nervous system and the immune system, contribute to normal psychological functions, help to maintain normal energy metabolism, and help reduce fatigue and weakness. The plants included in the complex, in addition to those already mentioned, have the following properties. Hop flower extract has a calming effect on the nervous system. Passionflower helps to find emotional comfort and maintain a good mental shape, while chamomile flowers help to maintain healthy sleep. On the other hand, oat seed extract has a tonic effect, promotes energy production, while Siberian ginseng increases the physiological endurance of the body in adverse conditions and is recommended to support the body's defense systems. The complex has a calming and balancing effect on the body. Does not cause drowsiness." , "image" => "herbastress_tabletes_30_gab.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "DOPPELHERZ Aktiv Stress-Gute Nerven pills, 30 pcs." ,"description" => "Vitamins B1, B2, B6, B12, niacin and biotin contribute to the normal functioning of the nervous system and also help to ensure normal energy metabolism. Pantothenic Acid (Vitamin B5) helps support mental performance. In addition, vitamin B6, vitamin B12 and folic acid contribute to the normal functioning of the immune system. One tablet allows you to take all the necessary amount of B vitamins per day. It also contains 50 mg of ginkgo leaf extract and 40 mg of lemon balm leaf extract. In Asia, ginkgo biloba is associated with vitality and vitality. Ginkgo biloba improves blood circulation in the brain, helps maintain cognitive function, stimulates memory and mental abilities. Ginkgo improves blood circulation in the legs and reduces the feeling of tiredness in the legs. Melissa (Melissa officinalis) comes from the eastern Mediterranean. But it is currently found throughout Europe. Due to its characteristic fresh lemon scent, it is also known as lemon mint." , "image" => "doppelherz_aktiv_stress_gute_nerven_tabletes_30_gab.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "JONAX Nervo Max pills, 30 pcs." ,"description" => "The herbs in the composition have a beneficial effect on sleep quality, mental health, cardiovascular system, lemon balm and hop extracts act as antioxidants.

        The B vitamins in the composition have a beneficial effect on the nervous system, as well as promote normal psychological functions and energy metabolism, help reduce fatigue and weakness:

        Vitamins B1 (thiamine), B2, B3 (niacin), B6 ​​promote normal energy metabolism;

        Vitamins B1 (thiamine), B2, B3 (niacin), B6 ​​promote the normal functioning of the nervous system;

        Vitamins B1 (thiamine), B3 (niacin), B6 ​​and folic acid promote normal psychological functions;

        Vitamins B2, B3 (niacin), B6 ​​and folic acid help reduce fatigue and weakness.

        Valerian extract improves sleep quality and mental health, helps with insomnia, has a beneficial effect on the heart and circulatory system. Valerian and hop extracts promote healthy sleep. Melissa extract acts as an antioxidant - protects the body's cells from free radicals, has a beneficial effect on mental health and promotes healthy sleep.

        Hop extract has antioxidant properties, fights free radicals in the body and slows down its aging. Melatonin helps to relieve the disruption of the circadian rhythm (take at least 0.5 mg melatonin or 1 tablet on the first day of travel, shortly before bedtime and in the first days after arrival) and helps to reduce the time needed to fall asleep (beneficial effect of 1 mg melatonin or 2 tablets shortly before bedtime).

        " , "image" => "jonax_nervo_max_tabletes_30_gab.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "RELAXEN Caps capsules, 30 pcs." ,"description" => "RELAXEN CAPS is a natural herbal complex with a calming effect, promotes emotional balance and stabilizes mood." , "image" => "relaxen_caps_kapsulas_30_gab.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "RELAXEN Forte pills, 20 pcs." ,"description" => "Relaxen Forte medicinal herbs soothe and balance the nervous system. Melissa and hawthorn contribute to relaxation and rest. Valerian and hops naturally reduce irritability, help you fall asleep, and maintain good sleep quality. Motherwort improves the functioning of the nervous system." , "image" => "relaxen_forte_tabletes_20_gab.jpg" ]); 
        $drug->save();

        $drug = new Drugs(["name"=> "SEDANORM capsules, 30 pcs." ,"description" => "Sedanorm - Griffonia Seed Extract helps maintain normal nervous system and brain function." , "image" => "sedanorm_kapsulas_30_gab.jpg" ]); $drug->save();


    }
}
