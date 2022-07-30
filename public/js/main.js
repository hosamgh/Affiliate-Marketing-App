$(function(){
    $(".preloader").fadeOut();

    $.ajax({
        url:"/chart",
        success:function(response){
            if(response.data){
                var data = response.data
                var coloR = [];
                var dynamicColors = function() {
                    var r = Math.floor(Math.random() * 255);
                    var g = Math.floor(Math.random() * 255);
                    var b = Math.floor(Math.random() * 255);
                    return "rgb(" + r + "," + g + "," + b + ")";
                 };
                 for (var i in data.labels) {
                    coloR.push(dynamicColors());
                 }
                new Chart(document.getElementById("pie-chart"), {
                    type: 'pie',
                    data: {
                      labels: data.labels,
                      datasets: [{
                        label: "No. Of Registered Users",
                        backgroundColor: coloR,
                        data: data.counters
                      }]
                    },
                    options: {
                      title: {
                        display: true,
                        text: 'No. Of Registered Users'
                      }
                    }
                });
            }
        }
    })



})

function copyToClipboard(elem) {

    var target = elem;



    // select the content
    target.select();
    target.setSelectionRange(0, 99999); /* For mobile devices */
  
     /* Copy the text inside the text field */
    navigator.clipboard.writeText(target.value);

    // copy the selection
   

    $(".copied").animate({ top: -25, opacity: 0 }, 700, function() {
        $(this).css({ top: 0, opacity: 1 });
      });

  }
