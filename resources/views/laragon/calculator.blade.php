<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASIC CALCULATOR</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>


<body>
    <h1 class="font-bold text-center uppercase mb-10">ARITHMETIC CALCULATOR</h1>
    <div class="mx-auto bg-line-500 mt-5">
        <form action="">
           <label for="num1" class="">Butang ang unang numero: </label>

           <input type="number" min="0" name="number1" id="num1" class="mb-2">
           <br>

           <label for="num2">Butang ang ika-duhang numero: </label>

           <input type="number" min="0" name="number2" id="num2">
           <br>
            <button class="flex-justify-center bg-orange-500 text-orange px-2 hover:bg-blue-500 mx-auto mt-5">Calculate</button>

         </form>
    </div>

</body>
</html>