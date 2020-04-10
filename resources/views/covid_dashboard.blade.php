<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>covid-19 updates </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <style>
        .col-md-4 {
            left: 40px;
            top: 50px;
        }

        .table-group {
            position: relative;
            top: 80px;

        }

        .red_mark {
            background: red;
            color: white;
        }

        .title {
            text-align: center;
            display: inline-block;
            font-size: 1.5em;
            font-weight: bolder;
        }

        .logo_section {
            text-align: center;
            padding-top: 30px;

        }

        .footer {
            width: 100%;
            height: 70px;
            background: #bdbbc9;
            text-align: center;
        }

        .footer > h5 {
            color: black;
            text-align: center;
            padding-top: 4px;

        }

        .container {
            margin-bottom: 80px;
        }

        .navbar {
            height: 60px;
        }

        .nav-custom-color {
            background: #bdbbc9;
        }

        .nav-link {
            color: black;
            font-weight: bold;
        }

        .link {
            padding-top: 10px;
        }
    </style>


</head>

<body>

<nav class="navbar navbar-expand-lg  nav-custom-color">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="https://corona.gov.bd/call_center">Help-Line(BD) <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.who.int/">HealthCare</a>
            </li>
        </ul>

    </div>
</nav>

<div class="container">

    <div class="logo_section">
        <img class="logo" width="100" src="images/logo.png">
        <div class='title'>Corona Updates</div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header">Cases</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $total_cases }}</h5>
                    <p class="card-text">Total case of affected</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem">
                <div class="card-header">Deaths</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $total_deaths}}</h5>
                    <p class="card-text">Total deaths worldwide</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem">
                <div class="card-header">Recoverd</div>
                <div class="card-body">
                    <h5 class="card-titile">{{ $total_recovered }}</h5>
                    <p class="card-text">Total recoverd in worldwide</p>
                </div>
            </div>
        </div>
    </div>

    <div class="table-group">
        <table id="data" class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Country</th>
                <th scope="col">Cases</th>
                <th scope="col">New Cases</th>
                <th scope="col">Total Deaths</th>
                <th scope="col">New Deaths</th>
                <th scope="col">Recoverd</th>
                <th scope="col">Active</th>
                <th scope="col">Critical</th>
            </tr>
            </thead>
            <tbody>
            @foreach($countries_data as $da)
                <tr>
                    <td>{{ $da->country}}</td>
                    <td>{{ $da->cases}}</td>
                    <td>{{ $da->todayCases}}</td>
                    <td>{{ $da->deaths}}</td>
                    <td class="red_mark">{{ $da->todayDeaths}}</td>
                    <td>{{ $da->recovered}}</td>
                    <td>{{ $da->active}}</td>
                    <td>{{ $da->critical}}</td>

                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
</div>
<br>
<div class="footer">
    <div class="link">
        <a href="https://github.com/shreyaIslam" style="color:#1e0cc2;">Github</a> | <a
            href="https://www.linkedin.com/in/shreya-chakma/" style="color:#1e0cc2;">Linkedin</a>
    </div>
    <h5>Developed by Shreya</h5>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#data').DataTable();
    });
</script>


</body>

</html>
