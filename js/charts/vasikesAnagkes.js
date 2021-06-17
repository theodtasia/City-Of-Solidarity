//Code taken from: https://www.createwithdata.com/getting-started-with-chartjs/
Chart.defaults.global.defaultFontSize = 15;//applying to all charts of the page
var ctx = document.getElementById('vasikesAnagkes').getContext('2d');
var chart = new Chart(ctx, {
  type: 'horizontalBar',
  data: {
    labels: ['Επαρκής θέρμανση', 'Έκτακτες δαπάνες', 'Θρεπτική διατροφή','Δύο ζεύγη παπούτσια','Καινούρια ρούχα','Προσωπικός Η/Υ'],
    datasets: [
      {
        data: [34.1,73.0,37.7,7.4,13.4,6.3],
        backgroundColor: '#c46998',//alternative color: #af90ca
        label: 'Ποσοστά νοικοκυριών'
      },
    
    ]
  },
  options: {
	 
    scales: {
      xAxes: [{
		  scaleLabel: {
        		display: false,
       			labelString: 'Ποσοστό % του φτωχού πληθουσμού'
               },
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});