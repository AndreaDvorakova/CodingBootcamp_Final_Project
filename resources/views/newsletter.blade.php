<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>How vitamins can help you in the Winter</h1>
    <div class="mail__row">
        <p>
        Vitamin C This vitamin isn't just for fighting off colds and flu. Vitamin C can do a lot for your gut absorption rates. It can improve how your body absorbs iron, which is another vital aspect for gut health and your overall body wellbeing. Taking vitamin C and iron at the same time will improve the amount that you absorb of both. Vitamin C is also good for your mouth. You need to keep your intake of it up so that you can promote healthy teeth and gums. There are lots of ways to get vitamin C into your body, not just by taking a supplement. It is prevalent in all citrus fruits, especially oranges and lemons. And it's found in high quantities in strawberries. You can also get it with your daily vegetable intake by eating peppers and broccoli.</p>
        @foreach ($test_data as $item) 
            <div>
            <h2>{{$item->name}}</h2>
            <img src="{{ Vite::asset('/images/drugs/'.$item->image) }}" alt="Pill Image">            
        </div>
        
            
        @endforeach
        
    </div>
    
</body>
</html>