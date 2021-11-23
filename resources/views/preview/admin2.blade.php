<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/ck-editor/build/ckeditor.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light bg-light w-100" style="padding: 20px; position: fixed;">
        <div class="container-fluid">
            <div class="d-flex"></div>

            <div class="d-flex">
                <div style="float: right">

                    <form class="d-flex" style="float: left">
                        <input class="form-control me-2" type="search" placeholder="Digite aqui..." aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Buscar</button>
                    </form>

                    <button class="btn position-relative">
                        ✉
                        <span
                            class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                        </span>
                    </button>

                    <button class="btn position-relative">
                        🔔
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            99+
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="row w-100">
        <div class="col-sm-4 col-lg-2" style="z-index: 3">
            <ul class="sidebar">
                <li>
                    <h2>Logo</h2>
                </li>
                <li>
                    <hr>
                </li>
                <li><button class="btn btn-sidebar">Item</button></li>
                <li><button class="btn btn-sidebar">Item 2</button></li>
                <li><button class="btn btn-sidebar">Item 3</button></li>
                <li><button class="btn btn-sidebar">Item 4</button></li>
                <li>
                    <div class="dropdown">
                        <button class="btn btn-sidebar dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <div class="col-sm-8 col-lg-10" style="margin-top: 5rem">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Dashboard</h1>
                        <hr>
                    </div>
                    <div class="col-md-8">
                        <div class="admin-card">
                            <div class="admin-title">
                                <h5>Exemplo Overview</h5>
                            </div>
                            <div class="admin-content">
                                <canvas id="myChart" width="400" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="admin-card">
                            <div class="admin-title">
                                <h5>Exemplo Overview</h5>
                            </div>
                            <div class="admin-content">
                                <canvas id="myChart2" width="400" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="admin-card">
                            <div class="admin-title">
                                <h5>Exemplo Overview</h5>
                            </div>
                            <div class="admin-content">
                                <div class="progress-item">
                                    <div class="row">
                                        <div class="col-6">
                                            Back-end
                                        </div>
                                        <div class="col-6 text-end">
                                            20%
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="progress-item">
                                    <div class="row">
                                        <div class="col-6">
                                            Front-end
                                        </div>
                                        <div class="col-6 text-end">
                                            40%
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="progress-item">
                                    <div class="row">
                                        <div class="col-6">
                                            Database
                                        </div>
                                        <div class="col-6 text-end">
                                            60%
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<style>
    .admin-card {
        border-radius: 8px;
        -webkit-box-shadow: 3px 3px 14px -1px rgba(0, 0, 0, 0.64);
        box-shadow: 3px 3px 14px -1px rgba(0, 0, 0, 0.64);
        margin: 8px 0;
    }

    .admin-title {
        border-bottom: 1px solid rgba(0, 0, 0, 0.30);
        padding: 15px;
        background-color: #b8dff6c5;
        border-radius: 8px 8px 0 0;
        color: rgb(64, 99, 134);
    }

    .admin-content {
        padding: 15px;
    }

    .sidebar {
        list-style: none;
        padding: 15px 15px;
        -webkit-box-shadow: 5px 0px 11px 3px rgba(0, 0, 0, 0.51);
        box-shadow: 5px 0px 11px 3px rgba(0, 0, 0, 0.51);
        height: 100%;
        margin: 5px 0;
        border-radius: 0 10px 10px 0;
        min-height: 100vh;
        background-color: rgb(93, 121, 151);
        color: white;
    }

    .sidebar li {
        padding: 5px 0;
    }

    .btn-sidebar {
        width: 100%;
        text-align: left;
        padding: 15px 5px;
        color: white;
    }

    .btn-sidebar:hover {
        background-color: rgb(219, 227, 233);
    }

</style>


<script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>

<script>
    const DATA_COUNT = 5;
    const NUMBER_CFG = {
        count: DATA_COUNT,
        min: 0,
        max: 100
    };

    const ctx2 = document.getElementById('myChart2').getContext('2d');

    const data = {
        labels: ['Google Ads', 'Facebook', 'Orgânico'],
        datasets: [{
            label: '# de Visitantes',
            data: [12, 19, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(75, 192, 192, 1)',
            ],
            borderWidth: 1
        }]
    };

    const myChart2 = new Chart(ctx2, {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Origem usuários'
                }
            }
        },
    });
</script>

<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Janeiro', 'Fevereiro', 'Março', 'Maio', 'Abril', 'Junho'],
            datasets: [{
                label: '# de Visitantes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

</html>
