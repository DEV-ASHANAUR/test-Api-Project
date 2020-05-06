<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Covid 19</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    </head>
    <body>

        <div class="container-fluid">
            <h2 class="text-center mt-2">Update Covid_19 Infomation</h2>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <thead class="table-danger text-center">
                            <tr>
                                <th colspan="2">Bangladesh</th>
                            </tr>
                        </thead>
                        <tbody id="bangladesh">
                            
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <thead class="table-danger text-center">
                            <tr>
                                <th colspan="2">Global</th>
                            </tr>
                        </thead>
                        <tbody id="global-wise">
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <h3 class="text-center">All Country</h3>
                    <table class="table table-bordered table-striped m-auto">
                        <thead class="table-danger text-center">
                            <tr>
                                <th>Si.</th>
                                <th>Country</th>
                                <th>NewConfirmed</th>
                                <th>TotalConfirmed</th>
                                <th>NewDeaths</th>
                                <th>TotalDeaths</th>
                                <th>NewRecovered</th>
                                <th>TotalRecovered</th>
                                <th>TotalRecovered</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody id="all">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        


        <!-- js here -->
        
        <script>
            $.ajax({
                url:"https://api.covid19api.com/summary",
                type:"GET",
                dataTpe:"JSON",
                success:function(data){
                    console.log(data);
                    $.each(data.Countries[18], function(key, value){
                        //console.log(key + " : " + value);
                        $("#bangladesh").append("<tr>"+
                                "<td>"+key+"</td>"+
                                "<td>"+value+"</td>"+
                            "</tr>");
                    });
                    $.each(data.Global, function(key, value){
                        //console.log(key + " : " + value);
                        $("#global-wise").append("<tr>"+
                                "<td>"+key+"</td>"+
                                "<td>"+value+"</td>"+
                            "</tr>");
                    });
                    //all country
                    var si = 1;
                    $.each(data.Countries, function(key, value){
                        $("#all").append("<tr>"+
                                "<td>"+si+"</td>"+
                                "<td>"+value.Country+"</td>"+
                                "<td>"+value.NewConfirmed+"</td>"+
                                "<td>"+value.TotalConfirmed+"</td>"+
                                "<td>"+value.NewDeaths+"</td>"+
                                "<td>"+value.TotalDeaths+"</td>"+
                                "<td>"+value.NewRecovered+"</td>"+
                                "<td>"+value.TotalRecovered+"</td>"+
                                "<td>"+value.TotalRecovered+"</td>"+
                                "<td>"+value.Date+"</td>"+
                            "</tr>");
                            si++;
                    });
                    // var si = 1;
                    // $.each(data.Global, function(key, value){
                    //     $("#global-wise").append("<tr>"+
                    //                                 "<td>"+si+"</td>"+
                    //                                 "<td>"value+"</td>"+
                    //                                 // "<td>"+value.NewDeaths+"</td>"+
                    //                                 // "<td>"+value.NewRecovered+"</td>"+
                    //                                 // "<td>"+value.TotalConfirmed+"</td>"+
                    //                                 // "<td>"+value.TotalDeaths+"</td>"+
                    //                                 // "<td>"+value.TotalRecovered+"</td>"+
                    //                             "</tr>");
                    //                             si++;
                    // });
                }
            });
        </script>
    </body>
</html>
