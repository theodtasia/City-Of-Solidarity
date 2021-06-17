var ctx = document.getElementById('kindinosFtoxeias').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [' 2008','2009','2010','2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018','2019'],
        datasets: [{
            label: 'Πληθυσμός σε κίνδυνο φτώχειας',
            //backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [20.0, 19.7, 20.1,21.4, 23.1, 23.1,22.1,21.4,21.2,20.2,18.5,17.9]
        }]
    },

    // Configuration options go here
    options: {
		scales:{
			yAxes: [{
				scaleLabel: {
        		display: false,
       			labelString: 'Ποσοστό % του πληθουσμού'
               },
                ticks: {					
                    suggestedMin: 0,
                    suggestedMax: 30
                }
            }]
		}
		 
	}
});