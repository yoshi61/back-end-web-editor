    @include('wdt.layouts.basic-bottom-scripts')

    <!-- page related script -->
    <script src="{{ asset('js/wdt/regulatory-environment-scripts.js') }}"></script>

    {{--TODO delete file--}}

    <script>
        new Chart(document.getElementById("chartjs-1"),
            {"type":"bar","data":{"labels":["January","February","March","April","May","June","July"],"datasets":[{"label":"Demo Table","data":[65,59,80,81,56,55,40],"fill":false,
                        "backgroundColor":[
                            "rgb(30, 131, 58, 0.2)",
                            "rgb(167, 217, 122, 0.2)",
                            "rgb(30, 131, 58, 0.2)",
                            "rgb(167, 217, 122, 0.2)",
                            "rgb(30, 131, 58, 0.2)",
                            "rgb(167, 217, 122, 0.2)",
                            "rgb(30, 131, 58, 0.2)"],
                        "borderColor":[
                            "rgb(30, 131, 58)",
                            "rgb(75, 192, 192)",
                            "rgb(30, 131, 58)",
                            "rgb(75, 192, 192)",
                            "rgb(30, 131, 58)",
                            "rgb(75, 192, 192)",
                            "rgb(30, 131, 58)"],
                        "borderWidth":1}]},
                "options":{
                    "scales":{
                        "yAxes":[{"ticks":{"beginAtZero":true}}]
                    },
                    legend: {
                        display: false
                    },
                }
            });
    </script>