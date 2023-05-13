<!doctype html>
<head>
    <meta charset="utf-8">
    <title>food delievering website</title>
    <style>
        .main{
            background-image:url(R.jpg);
            background-size: 100% 50%;
            border-style: groove;
            border-width: 10px;
            border-color: black;
        }
        .main_logo{
            background-color: gold;
            font-family: Edwardian Script ITC;
            font-size:300%;
            background:linear-gradient(to left,yellow,red);
            margin:10px;
           border-radius: 10px;
           border-width:10px;
           border-color: crimson;
           border-style:groove;
           width: fit-content;
           height:300px;
        }
        #image_logo{
            transform: translate(900px,-200px);
        
        }
        h2{
            color:aliceblue;
            
        }
        p{
            color:gold;
            font-size:2em;
        }
        .price{
            transform: translate(900px,-500px);
            border-color: black;
            border-width:10px;
            border-style:double;
            color:darkorange;
            width:fit-content;
            background:linear-gradient(white,green);
            font-size: 2em;
            font-weight:bold;
            color: olive;
            height:400px;
            border-radius: 50px;
            

        }
        #price_value{
            color:darkred
        }
        #food_item{
            border-width: 10px;
            border-style: groove;
            border-radius: 50px;
            background-color: black;
            width:fit-content;
        }
        #niche{
        
            font-size: 2em;
            width:500px;
            transform: translate(300px,-900px);
            background:linear-gradient( to right ,red, white);
            border-style:groove;
            border-radius:50px;
           
            
        }
        h3{
            color:rgba(33, 10, 10, 0.816);
            font-family:Apple Chancery, cursive;
        }
        .hidden_doc{
            visibility: hidden;
        }
        .main_menu{
            color:darkblue;
            font-style: italic;
            font-family: 'Times New Roman', Times, serif;
            background: linear-gradient(to left,black,green);
            font-size:2em;
        }

    </style>
</head>
<body>
 <div class="main">
    <div class="main_logo">
        <h1 id="logo">food delievering</h1>
        <div id="image_logo">
            <img src="C:\Users\91981\Desktop\xampp\htdocs\food ordering website\foodiction (1).webp" height="100%" width="20%" >
        </div>
    </div>
    <div id="food_item">
        <h2>food items available</h2>
        <ol type="1">
            <li><p>chhole bhature</p></li>
            <li><p>pizza</p></li>
            <li><p>burger</p></li>
            <li><p>french fry</p></li>
            <li><p>macroni</p></li>
            <li><p>water balls</p></li>
            <li><p>papri chat</p></li>

        </ol>
    </div>
    <div class="price">
        <table>
            <tr><th>food item</th><th>price of the food item</th></tr>
            <tr><td>chhole bhature</td><td><span id="price_value">200rs</span></td></tr>
            <tr><td>pizza</td><td><span id="price_value">300rs</span></td></tr>
            <tr><td>burger</td><td><span id="price_value">80rs</span></td></tr>

            <tr><td>french fry</td><td><span id="price_value">100rs</span></td></tr>
            <tr><td>macroni</td><td><span id="price_value">100rs</span></td></tr>
            <tr><td>water balls</td><td><span id="price_value">30rs</span></td></tr>
            <tr><td>papri chat</td><td><span id="price_value">120rs</span></td></tr>
        </table>
    </div>
    <div id="niche">
        <h3>To make your meal delicious check down and select the food item </h3>
    </div>
   <div class="main_menu">
    
        <table>
            <tr><th>food item</th><th>price</th><th>place your order</th></tr>
            <tr><td>chole bhature</td><td>200rs</td><td><form action="/food ordering website/processing.php" method="post"><input type="submit" value="place order"><div class="hidden_doc"><select name="food_item"><option value="1">chhole bhature</option></select></div></form> </td></tr>
            <tr><td>pizza</td><td>300rs</td><td><form action="/food ordering website/processing.php" method="post"><input type="submit" value="place order"><div class="hidden_doc"><select name="food_item"><option value="2">pizza</option></select></div></form> </td></tr>
            <tr><td>burger</td><td>80rs</td><td><form action="/food ordering website/processing.php" method="post"><input type="submit" value="place order"><div class="hidden_doc"><select name="food_item"><option value="3">burger</option></select></div></form> </td></tr>
            <tr><td>french fry</td><td>100rs</td><td><form action="/food ordering website/processing.php" method="post"><input type="submit" value="place order"><div class="hidden_doc"><select name="food_item"><option value="4">french fry</option></select></div></form> </td></tr>
            <tr><td>macroni</td><td>100rs</td><td><form action="/food ordering website/processing.php" method="post"><input type="submit" value="place order"><div class="hidden_doc"><select name="food_item"><option value="5">macroni</option></select></div></form> </td></tr>
            <tr><td>water balls</td><td>30rs</td><td><form action="/food ordering website/processing.php" method="post"><input type="submit" value="place order"><div class="hidden_doc"><select name="food_item"><option value="6">water balls</option></select></div></form> </td></tr>
            <tr><td>papri chat</td><td>120rs</td><td><form action="/food ordering website/processing.php" method="post"><input type="submit" value="place order"><div class="hidden_doc"><select name="food_item"><option value="7">papri chat</option></select></div></form> </td></tr>
            
        </table>




   </div>
 </div>   



</body>
</html>
