<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Winter Newsletter</title>

    <style>
        .newsletter__header_headline {
            text-align: center;
            margin-top: -6%;
            color: white;
            font-size: 2.5em;
            text-shadow: -1px -1px 0 #ed3192, 1px -1px 0 #ed3192, -1px 1px 0 #ed3192,
            1px 1px 0 #ed3192;
        }

        .newsletter__header_image {
            width: 100%;
        }

        .mail__row {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 3%;
        }

        p {
            line-height: 1.5em;
            font-size: 1.2em;
            width: 50%;
        }
        a {
            width: 50%;
        }
        button {
            padding: 1%;
            border: 1px solid #1dbacc;
            width: 100%;
            border-radius: 55px;
            background-color: #1dbacc;
            color: white;
            font-weight: bold;
     
        }

        .mail__row_right {
            display: flex;
            flex-direction: column;
            width: 50%;
            justify-content: center;
            align-items: center
        }

        .mail__row_last {
            margin-top: 2%;
            background-color: #ffb0c6;
            text-align: center;
            padding: 3%;
            line-height: 1.5em;
            font-size: 1.2em;
        }
        span {
            font-size: xx-small;
        }
    </style>
</head>


<body>
    <img class="newsletter__header_image" src="/newsletter.jpg" alt="Newsletter header image">

    <h1 class="newsletter__header_headline">How can vitamins help you in the Winter?</h1>
    <div class="mail__row">
        <p>
        Vitamin C This vitamin isn't just for fighting off colds and flu. Vitamin C can do a lot for your gut absorption rates. It can improve how your body absorbs iron, which is another vital aspect for gut health and your overall body wellbeing. Taking vitamin C and iron at the same time will improve the amount that you absorb of both. Vitamin C is also good for your mouth. You need to keep your intake of it up so that you can promote healthy teeth and gums. There are lots of ways to get vitamin C into your body, not just by taking a supplement. It is prevalent in all citrus fruits, especially oranges and lemons. And it's found in high quantities in strawberries. You can also get it with your daily vegetable intake by eating peppers and broccoli.</p>
        
        <div class="mail__row_right">
            <h2>{{$test_data[0]->name}}</h2>
            <img src="https://ipillgood.codeboot.cz/images/drugs/{{$test_data[0]->image}}" alt="Pill Image"> 
            <a href="https://ipillgood.codeboot.cz/drugs/{{$test_data[0]->id}}/detail"><button>Discover more</button></a>           
        </div>      
    </div>
    

        <div class="mail__row">
        
        <div class="mail__row_right">
            <h2>{{$test_data[1]->name}}</h2>
            <img src="/images/drugs/{{$test_data[1]->image}}" alt="Pill Image"> 
            <a href="/drugs/{{$test_data[1]->id}}/detail"><button>Discover more</button></a>           
        </div> 
        <p>
        We all know that you get vitamin D from time spent in the sun and that it’s very good for you. This vitamin plays a major role in how well your immune system functions, as well as your muscles and nerves throughout your body. Without proper levels of vitamin D, we cannot absorb calcium properly. Vitamin D has been shown to combat colon cancer, or at least reduce your risk of getting it. The vitamin can help you if you suffer from inflammatory bowel diseases and syndromes. It is often prescribed for those suffering from Irritable Bowel Syndrome or Crohn’s Disease. Our biggest source of vitamin D is the sun’s UV rays. When they hit our skin, our bodies produce vitamin D. You can also include various sources in your diet to ensure that you have enough. Sources include fish, egg yolks, liver, fortified milk and cereal.</p>     
    </div>

    <div class="mail__row_last">
        Every day, your body produces skin, muscle, and bone. It churns out rich red blood that carries nutrients and oxygen to remote outposts, and it sends nerve signals skipping along thousands of miles of brain and body pathways. It also formulates chemical messengers that shuttle from one organ to another, issuing the instructions that help sustain your life. But to do all this, your body requires some raw materials. These include at least 30 vitamins, minerals, and dietary components that your body needs but cannot manufacture on its own in sufficient amounts. Vitamins and minerals are considered essential nutrients—because acting in concert, they perform hundreds of roles in the body. They help shore up bones, heal wounds, and bolster your immune system. They also convert food into energy, and repair cellular damage. But trying to keep track of what all these vitamins and minerals do can be confusing. Read enough articles on the topic, and your eyes may swim with the alphabet-soup references to these nutrients, which are known mainly be their initials (such as vitamins A, B, C, D, E, and K—to name just a few).
        <br>
        <span><a href="#">Unsubscribe</a></span>
    </div>


</body>
</html>