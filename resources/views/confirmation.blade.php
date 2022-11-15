<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation</title>
    @vite('resources/css/confirmation.scss')
</head>
<body>
    <div class="confirmation">
        <img class="confirmation__image" src="/tick_check.png" alt="confirmation icon">
        <p class="confirmation__paraghraph">Your Order no. <span>{{$order[0]}}</span> was successful.<br>SMS confirmation of your order has been sent to no. <span>+ {{$order[1]}}.</span> <br>Please pick your order until <span>xx.xx.xxxx</span></p>
        <div class="confirmation__buttons">

            {{-- add if condition later, checking ig cart is empty display just the home button --}}
            <a href='#'><button>Cart</button></a>
            <a href="/home"><button>Home</button></a>
        </div>
    </div>
</body>
</html>