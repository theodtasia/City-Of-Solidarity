//Code taken from: https://www.createwithdata.com/getting-started-with-chartjs/
Chart.defaults.global.defaultFontSize = 15;//applying to all charts of the page
var ctx = document.getElementById('vasikesAnagkesEN').getContext('2d');
var chart = new Chart(ctx, {
  type: 'horizontalBar',
  data: {
    labels: ['Sufficient heating', 'Εmergency expenses', 'Nutritious diet','Two pairs of shoes','New clothes ','PC occupation'],
    datasets: [
      {
        data: [34.1,73.0,37.7,7.4,13.4,6.3],
        backgroundColor: '#c46998',//alternative colour: #af90ca
        label: 'Percentage of households'
      },
    
    ]
  },
  options: {
	  
    scales: {
      xAxes: [{
		  scaleLabel: {
        		display: false,
       			labelString: 'Percentage of poor population'
               },
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});