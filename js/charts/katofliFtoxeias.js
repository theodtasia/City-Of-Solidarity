var ctx = document.getElementById('katofliFtoxeias').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018','2019'],
        datasets: [{
            label: 'Κατώφλι Κινδύνου Φτώχειας',
            //backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [13841, 11986, 10547, 9677, 9475, 9450, 9576,9908,10326]
        }]
    },

    // Configuration options go here
    options: {
		scales:{
			yAxes: [{
				scaleLabel: {
        		display: false,
       			labelString: 'Ετήσιο εισόδημα σε €'
               }
            }]
		}
	}
});