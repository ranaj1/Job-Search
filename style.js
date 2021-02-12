var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Noida", "Gurgaon" , "Delhi" , "Chandigarh", "Banglore", "Mumbai"],
            datasets: [
               { label: 'Post Covid Blue Collar Jobs',
               data: [800,1200,1000,500,1500,1300],
               backgroundColor :['rgba(255, 129, 102, 1)',
               'rgba(234, 162, 235, 1)',
               'rgba(255, 206, 36, 1)',
               'rgba(75, 192, 192, 1)',
               'rgba(153, 102, 255, 1)',
               'rgba(15, 206, 47, 1)',
            ],
         }
      ]
   },
   options: {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
       yAxes: [{
          ticks: {
             beginAtZero:true
          }
       }]
    }
 }
});
ctx.onclick = function(e) {
    var slice = myChart.getElementAtEvent(e);
    if (!slice.length) return; // return if not clicked on slice
    var label = slice[0]._model.label;
    switch (label) {
       // add case for each label/slice
       case 'Noida':
        window.open('job-details-construction1.php');
        //   <a href = "job-details-construction1.php"></a>
          break;
          case 'Gurgaon':
            window.open('job-details-construction2.php');
          break;
          case 'Delhi':
            window.open('job-details-construction3.php');
          break;
       // add rests ...
    }
 }