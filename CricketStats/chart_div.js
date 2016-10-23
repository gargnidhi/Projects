google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          [ 'Team', 'Matches'],
          [ 'India', 866],
          [ 'Australia',838 ],
          ['Pakistan', 823],
          ['Sri Lanka', 729],
					['West Indies',719],
          ['New Zealand',659],
          ['England',626],
          ['South Africa',518],
          ['Zimbabwe',432],
          ['Bangladesh',289]
        ]);

        var options = {
          chart: {
            title: 'ODIs-ALL TEAM- Matches ',
            subtitle: '2014',
          },
          bars: 'horizontal', // Required for Material Bar Charts.
          hAxis: {format: 'decimal'},
          height: 250,
          colors: ['#7570b3']
        };

        var chart = new google.charts.Bar(document.getElementById('chart_div'));

        chart.draw(data, google.charts.Bar.convertOptions(options));

        var btns = document.getElementById('btn-group');

        btns.onclick = function (e) {

          if (e.target.tagName === 'BUTTON') {
            options.hAxis.format = e.target.id === 'none' ? '' : e.target.id;
            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
        }
      }