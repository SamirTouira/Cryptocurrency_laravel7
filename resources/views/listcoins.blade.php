<html>
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
       <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Bree Serif:200,600" rel="stylesheet">

        <!-- Styles -->
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

            /*------------------CSS PURE-----------------*/

                    .modal {
            opacity: 0;
            visibility: hidden;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            text-align: left;
            background: rgba(0,0,0, .9);
            transition: opacity .25s ease;
        }
        .modal__bg {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            cursor: pointer;
        }
        .modal-state {
            display: none;
        }
        .modal-state:checked + .modal {
            opacity: 1;
            visibility: visible;
        }
        .modal-state:checked + .modal .modal__inner {
            top: 0;
        }
        .modal__inner {
            transition: top .25s ease;
            position: absolute;
            top: -20%;
            right: 0;
            bottom: 0;
            left: 0;
            width: 50%;
            margin: auto;
            overflow: auto;
            background: #fff;
            border-radius: 5px;
            padding: 1em 2em;
            height: 40%;
        }
        .modal__close {
            position: absolute;
            right: 1em;
            top: 1em;
            width: 1.1em;
            height: 1.1em;
            cursor: pointer;
        }
        .modal__close:after,
        .modal__close:before {
            content: '';
            position: absolute;
            width: 2px;
            height: 1.5em;
            background: #ccc;
            display: block;
            transform: rotate(45deg);
            left: 50%;
            margin: -3px 0 0 -1px;
            top: 0;
        }
        .modal__close:hover:after,
        .modal__close:hover:before {
            background: #aaa;
        }
        .modal__close:before {
            transform: rotate(-45deg);
        }
        body {
            padding: 1%;
            font: 1/1.5em sans-serif;
        }
        .button-success {
            color: white;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
            background: rgb(28, 184, 65);
        }
        .button-right {
            float: right;
        }
        input, textarea {
            width: 100% !important;
        }
        .pure-form-message {
            color: red;
        }
        .input-invalid {
            border-color: red !important;
        }
        .alert {
            padding: 20px;
            background-color: green;
            color: white;
            margin-top: 30px;
            margin-bottom: 15px;
        }
    </style>
        </style>
        
        <div class="links">
<a style="font-size:60px; color:black;" href="{{ url('') }}">Coin Master<img style="width:113px; position:absolute; left:470px;" src="{{url('/storage/coinmaster.png')}}" alt="Image"/></a>
</div>

<h1 style="text-align:center; margin:auto;">Market capitalisation</h1><hr>
<h3 style="display:block; height:150px; width:30%; position:absolute; margin-top:150px; margin-left:30px; text-align:justify;">As you can see, the evolution of theses monneys are always amazing.
Remember when Bitcoin weren't expensive almost since more 5 years, and we can now look that it upgrading faster than we could think.
Yes, Bitcoin (BTC) and Ethereum (ETH) are currently now the 'leaders' of the marketcap. Let's see the graphics now !<br>
@foreach($data as $item)

<p>Lastest 24H market capitalisation percentage change :<br>
<p style="color:red;" id="market_cap_percentage">({{$item['market_cap_change_percentage_24h_usd']}}%)</p></p>
<div class="links">
@endforeach

@foreach($data as $bitcoins)
<form action="{{ route('post.bitcoingraphic') }}" method="get" id="display-graphic">
<div class="links" id="displaygraphic">
    <button id="bitcoin-graphic" type="submit">View Bitcoin, Ethernum and Ripple Graphics</button>
    </div>
</form>

@endforeach
</div>

</h3>
<ul>
@foreach($data as $item)
<div style="text-align: right; margin-right:100px; position:absolute;">
<b>Total market cap : &ensp;<img style="width:18px; top:4px; right:2px; position:relative;" src="{{url('/storage/bitcoin.jpg')}}" alt="Image"/>BTC : {{$item['total_market_cap']['btc']}} USD<br>
<div style="position:relative;"> <img style="width:32px; top:10px; left:6px; position:relative;" src="{{url('/storage/ethereum.png')}}" alt="Image"/>ETH : {{$item['total_market_cap']['eth']}} USD</b></div>
</div>
@endforeach

</ul>

    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChartTwo);
      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Total market cap');
        
        data.addRows([
          ['BTC', {{$item['total_market_cap']['btc']}}],
          ['ETH', {{$item['total_market_cap']['eth']}}],
        ]);

        // Set chart options
        var options = {'title':'Total market cap for BTC and ETH',
                       'width':1200,
                       'height':600};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
      
      function drawChartTwo() {

// Create the data table.
var data = new google.visualization.DataTable();
data.addColumn('string', 'Topping');
data.addColumn('number', 'Total market cap');

data.addRows([
  ['BTC', {{$item['total_market_cap']['btc']}}],
  ['ETH', {{$item['total_market_cap']['eth']}}],
]);

// Set chart options
var options = {'title':'Total market cap for BTC and ETH',
               'width':1200,
               'height':600};

// Instantiate and draw our chart, passing in some options.
var chart = new google.visualization.BarChart(document.getElementById('chart_div_two'));
chart.draw(data, options);
}
    </script>
    </head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <body>
    <!--Div that will hold the pie chart-->
    <div style="margin-left: auto; margin-right: auto; width: 30%;" id="chart_div"></div>


    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>