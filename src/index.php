<!DOCTYPE html>
<html>
<head>
<title>Creating Dynamic Data Graph using PHP and Chart.js</title>
<style type="text/css">
BODY {
    width: 550PX;
}

#chart-container {
    width: 100%;
    height: auto;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>


</head>
<body>
    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>

    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                    console.log(data);
                    var name = [];
                    var marks = [];

                    name.push("Marcos");
                    marks.push("10");

                    name.push("Jonathan");
                    marks.push("7");

                    name.push("Matheus");
                    marks.push("4.5");

                    name.push("Rafael");
                    marks.push("6");

                    name.push("Sergio");
                    marks.push("5");

                    // for (var i in data) {
                    //     name.push(data[i].student_name);
                    //     marks.push(data[i].marks);

                    // }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Notas',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: marks
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>

</body>
</html>