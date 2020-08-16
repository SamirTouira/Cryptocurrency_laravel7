<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <style>
 html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            a{
                color: black;
            }

            #hide{
                display:flex;
                width:200px;
                flex-direction:row;
                margin: 0;
                margin-left:47%;
                text-align:center;
                position: absolute;
                align-items:center;
                justify-content:center
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }

            .box1{
                padding: 10px;
                margin-left:10px;
                width:15%;
                height:17%;
                display:flex;
                justify-content:center;
                align-items:center;
              border: 1px solid #d3d3d3;
                -webkit-background-clip: padding-box; 
                background-clip: padding-box;
                border-radius: 10px;
                box-shadow: 1px 3px gray, -0em 0 .4em black;
                text-align:center;
            }

            .box2{
                padding: 10px;
                margin-right: 60px;
                width:15%;
                height:17%;
                display:flex;
                justify-content:center;
                align-items:center;
                border-radius: 10px;
                border: 1px solid #d3d3d3;
                -webkit-background-clip: padding-box; 
                background-clip: padding-box;
                box-shadow: 1px 3px gray, -0em 0 .4em black;
                text-align:center;
            }

            .box3{
                padding: 10px;
                width:15%;
                height:17%;
                display:flex;
                justify-content:right;
                align-items:right;
                border: 1px solid #d3d3d3;
                -webkit-background-clip: padding-box; 
                background-clip: padding-box;
                border-radius: 10px;
                box-shadow: 1px 3px gray, -0em 0 .4em black;
                justify-content:center;
                align-items:center; 
            }


            .flex-box{
                margin:10px;
                width:100%;
                display:inline-flex;
                flex-direction:row;
                justify-content: space-around;
            }

            .text-center{
                text-align:center;
            }

            .hr-style{
                margin:0;
                position:relative;
                right:60px;
                border-color: #d3d3d3;
                
            }

            .hr-style2{
                margin:0;
                position:relative;
                right:-10px;
                border-color: #d3d3d3;
            }

            a.button1{
                 display:inline-block;
                 padding:0.35em 1.2em;
                 border:0.1em solid #FFFFFF;
                 margin:0 0.3em 0.3em 0;
                 border-radius:0.12em;
                 box-sizing: border-box;
                 text-decoration:none;
                 font-family:'Roboto',sans-serif;
                 font-weight:300;
                 color:#FFFFFF;
                 text-align:center;
                 transition: all 0.2s;
                }
                a.button1:hover{
                 color:#000000;
                 background-color:#FFFFFF;
                }
                @media all and (max-width:30em){
                a.button1{
                  display:block;
                  margin:0.4em auto;
                 }
                }

                button#ethereum-graphic.button1{
                    margin-left:697px;
                }
    </style>

    <style>

        </style>

<script type="text/javascript">

</script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

                  


google.charts.load('current', {'packages':['corechart']});
// google.charts.setOnLoadCallback(drawChartTwo);


     // Si une partie des fonctions des graphiques ne sont pas encore dynamique, c'est parce que je n'ai plus trouvé le temps
     //de tout faire, je m'en excuse par avance.
      
    </script>

  </head>
  <body>
  <div class="links">
<a style="font-size:60px; color:black;" href="{{ url('') }}">Coin Master<img style="width:113px; position:absolute; left:430px;" src="{{url('/storage/coinmaster.png')}}" alt="Image"/></a>
</div>
  <hr>
  <div class="flex-box">
  <div class="box1"><h2 class="text-center">

  Current price &nbsp;&nbsp;<hr><span style="font-size:20px;">{{$data['market_data']['current_price']['eur']}} €</span><br></h2>
  </div><br><hr class="hr-style2">
  <br><br><br><br><br><br>&nbsp;&nbsp;
  <div class="box2"><h2 class="text-center">
  Total volume <hr>{{$data['market_data']['total_volume']['eur']}} €<br></h2>
  </div><br>
  <br><hr class="hr-style">
  <div class="box3"><h2 class="text-center">
  Price change in 24h <hr style='margin-left:25px;'>{{$data['market_data']['price_change_24h']}} €</h2>
  </div><br>
  <br>
  </div>

    <!--<div id="chart_div" class="chart_bitcoin money" data-money="bitcoin" style="width: 95%; height: 500px; display:block; position:relative;"></div>-->
   
    <button class="button3 money" id="ethereum-graphic" data-money="bitcoin" style=""><h3 style="text-align:center; width:100%;">Bitcoin graphic</h3></button>
    <button class="button1 money" id="ethereum-graphic" data-money="ethereum"><h3 style="text-align:center; width:100%;">Ethereum graphic</h3></button>
    <button class="button2 money" id="ethereum-graphic" data-money="ripple"><h3 style="text-align:center; width:100%;">Ripple graphic</h3></button>
    <div id="show-eth-graphic">
    <div id="chart_div_two" class="chart_bitcoin" style="width: 95%; height: 500px; display:block; position:relative; display:none;" hidden></div>
    </div>
    <hr>
    <div id="bitcoin_desciption" style="width:95%; border: border: 1px solid #d3d3d3; -webkit-background-clip: padding-box; background-clip: padding-box; border-radius: 10px; box-shadow: 1px 3px gray, -0em 0 .4em black; margin-top: 25px; margin-right:15px; padding:40px; font-size:20px;">
    <button class="button1" id="hide"><h3 style="text-align:center; width:100%;">What is Bitcoin ?</h3></button>

    <br>
    <div id="show-hide" style="text-align:justify;" hidden>
    <br><span style="font-size:50px; float:left; position:relative; bottom:10px;">B</span>itcoin is the first successful internet money based on peer-to-peer technology; whereby no central bank or authority is involved in the transaction and production of the Bitcoin currency. It was created by an anonymous individual/group under the name, Satoshi Nakamoto. The source code is available publicly as an open source project, anybody can look at it and be part of the developmental process. Bitcoin is changing the way we see money as we speak. The idea was to produce a means of exchange, independent of any central authority, that could be transferred electronically in a secure, verifiable and immutable way. It is a decentralized peer-to-peer internet currency making mobile payment easy, very low transaction fees, protects your identity, and it works anywhere all the time with no central authority and banks. Bitcoin is design to have only 21 million BTC ever created, thus making it a deflationary currency. Bitcoin uses the <a href="https://www.coingecko.com/en?hashing_algorithm=SHA-256">SHA-256</a> hashing algorithm with an average transaction confirmation time of 10 minutes. Miners today are mining Bitcoin using ASIC chip dedicated to only mining Bitcoin, and the hash rate has shot up to peta hashes. Being the first successful online cryptography currency, Bitcoin has inspired other alternative currencies such as <a href="https://www.coingecko.com/en/coins/litecoin">Litecoin</a>, <a href="https://www.coingecko.com/en/coins/peercoin">Peercoin</a>, <a href="https://www.coingecko.com/en/coins/primecoin">Primecoin</a>, and so on. The cryptocurrency then took off with the innovation of the turing-complete smart contract by <a href="https://www.coingecko.com/en/coins/ethereum">Ethereum</a> which led to the development of other amazing projects such as <a href="https://www.coingecko.com/en/coins/eos">EOS</a>, <a href="https://www.coingecko.com/en/coins/tron">Tron</a>, and even crypto-collectibles such as <a href="https://www.coingecko.com/buzz/ethereum-still-king-dapps-cryptokitties-need-1-billion-on-eos">CryptoKitties</a>.
        </div>
    </div>



    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
