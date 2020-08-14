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
            $('#chart_div_two').show();
            drawChartTwo(data);

        },
        error: function(err){
            console.log(err);
        }
    
    })
    })
});

function drawChartTwo(data) {
                
    var datas = google.visualization.arrayToDataTable([
      ['Year', 'Current price','Price change 24h'],
      ['Current', data.market_data.current_price.eur, data.market_data.price_change_24h],
      ['2019',   187.23465887218802,  0], 
    ]);

    var options = {
      title: `${data.id[0].toUpperCase() +
            data.id.slice(1)} Perfomance`,
      width:1800,
      height: 500,
      right:200,
      legend: {position: 'right', maxLines: 3},
      hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
      vAxis: {minValue: 0},
      titleTextStyle: {fontSize: 20},
      areaOpacity: 0.7,
      colors:['red','black']
    };

    var chart = new google.visualization.AreaChart(document.getElementById('chart_div_two'));
    chart.draw(datas, options);
  }