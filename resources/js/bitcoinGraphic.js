//-----------------------------------------------------------------------------------
//Mes excuses par avance si je n'ai pas tout dynamisé dans les graphiques.
$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  


$(document).ready(function() {
    $('#hide').on('click', async function() {
        $('#show-hide').toggle();
    });

    $('.money').on('click', async function() {
      // $('#chart_div_two').toggle();
     let crypto = $(this).data('money');
       $.ajax({
        url : 'http://127.0.0.1:8000/crypto',
        method: 'POST',
        data:{ cryptocurrency: crypto},
        success: function(data){
            console.log(data);
           
            var yesterday = new Date(new Date().setDate(new Date().getDate()-1));
            console.log(yesterday);  

fetch('https://api.coingecko.com/api/v3/coins/'+crypto+'/history?date=15-08-2020&localization=false')
.then((res) => res.json())
.then((dater) => {
  
  drawChartTwo(data, dater);
  $('#chart_div_two').show();
  
  // google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallbackdrawChartTwo;
  
function drawChartTwo(data, dater) {
      // console.log(dater.prices);
      
      // document.addEventListener('touchstart', dater, {capture: true});
      
      // dater.forEach(function(item) {
        // console.log(item);
    // if (item === 
    // var datas = new google.visualization.DataTable();
    // datas.addColumn('string', 'Topping');
  
    // datas.addColumn('number', 'Slices');
 
    // datas.addRows([
    //   ['current', data.market_data.current_price.eur],
    //   ['test', item[1]]
    
    // ]);
    // var date = new Date();
    var datas = google.visualization.arrayToDataTable([
      ['Time', 'Prices', 'Expenses'],
      ['Current price',  data.market_data.current_price.eur,     data.market_data.current_price.btc],
      ['24h lastest prices',  dater.market_data.current_price.eur,    dater.market_data.current_price.btc]
    ]);


    console.log(dater);

    var options = {
      title: `${data.id[0].toUpperCase() +
            data.id.slice(1)} Perfomance`,
      width:1800,
      height: 500,
      right:200,
      legend: {position: 'right', maxLines: 3},
      hAxis: {title: 'Year',  titleTextStyle: {color: '#333', fontSize: 20}},
      vAxis: {minValue: 0, gridlines:{count:20}},
      areaOpacity: 0.7,
      colors:['red','black'],
      explorer: { actions: ['dragToZoom', 'rightClickToReset']}
    };

    var chart = new google.visualization.AreaChart(document.getElementById('chart_div_two'));
    chart.draw(datas, options);
  // });

  }
  
})

        },
        error: function(err){
            console.log(err);
        }
    
    })
    })



});
