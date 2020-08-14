<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      google.load("visualization", "1", {packages:["corechart"]});
    
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Current price', 'Bitcoin current price'],
          ['2020', {{$data['market_data']['current_price']['eur']}},      400],
          ['2014',  1170,      460],
          ['2015',  660,       1120],
          ['2016',  1030,      540],
          ['2017',  {{$data['market_data']['current_price']['eur']}}, 100] 
        ]);

        var options = {
          title: 'Bitcoin Performance',
          height: 500,
          right:200,
          legend: {position: 'right', maxLines: 3},
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>