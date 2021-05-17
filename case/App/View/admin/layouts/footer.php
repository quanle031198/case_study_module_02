

  <script src="http://localhost/case/App/View/admin/layouts/modules/jquery.min.js"></script>
  <script src="http://localhost/case/App/View/admin/layouts/modules/popper.js"></script>
  <script src="http://localhost/case/App/View/admin/layouts/modules/tooltip.js"></script>
  <script src="http://localhost/case/App/View/admin/layouts/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="http://localhost/case/App/View/admin/layouts/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="http://localhost/case/App/View/admin/layouts/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="http://localhost/case/App/View/admin/layouts/js/sa-functions.js"></script>
  
  <script src="App/View/admin/layouts/modules/chart.min.js"></script>
  <script src="App/View/admin/layouts/modules/summernote/summernote-lite.js"></script>

  <script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      datasets: [{
        label: 'Statistics',
        data: [460, 458, 330, 502, 430, 610, 488],
        borderWidth: 2,
        backgroundColor: 'rgb(87,75,144)',
        borderColor: 'rgb(87,75,144)',
        borderWidth: 2.5,
        pointBackgroundColor: '#ffffff',
        pointRadius: 4
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            stepSize: 150
          }
        }],
        xAxes: [{
          gridLines: {
            display: false
          }
        }]
      },
    }
  });
  </script>
  <script src="http://localhost/case/App/View/admin/layouts/js/scripts.js"></script>
  <script src="http://localhost/case/App/View/admin/layouts/js/custom.js"></script>
 
</body>
</html>