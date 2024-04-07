<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Standings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        .section {
            background-color: #DEF4FA;
            display: flex;
            height: 100%;
        }

        .sidebar {
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar .list-group {
            list-style: none;
            padding: 0;
        }

        .sidebar .list-group-item {
            border: none;
        }

        .sidebar .list-group-item a.nav-link {
            color: #495057;
            font-weight: 500;
        }

        .sidebar .list-group-item a.nav-link.active {
            color: #007bff;
            font-weight: bold;
        }

        .sidebar .list-group-item a.nav-link:hover {
            color: #007bff;
            text-decoration: none;
        }

        .tab {
            flex: 1;
            height: 100%;
        }

        .container {
            height: 100%;
            overflow-y: auto;
        }

    </style>
</head>
<body>
    <div class="section">
        <div class="sidebar">
            <ul class="list-group">
                <li class="list-group-item">
                    <a class="nav-link <?php echo (isset($_GET['league']) && $_GET['league'] == 'premierleague') ? 'active' : ''; ?>" href="index.php?league=premierleague">Premier League</a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link <?php echo (isset($_GET['league']) && $_GET['league'] == 'championship') ? 'active' : ''; ?>" href="index.php?league=championship">Championship</a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link <?php echo (isset($_GET['league']) && $_GET['league'] == 'eurocups') ? 'active' : ''; ?>" href="index.php?league=eurocups">UEFA Champions League</a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link <?php echo (isset($_GET['league']) && $_GET['league'] == 'laliga') ? 'active' : ''; ?>" href="index.php?league=laliga">La Liga</a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link <?php echo (isset($_GET['league']) && $_GET['league'] == 'seriaa') ? 'active' : ''; ?>" href="index.php?league=seriaa">Serie A</a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link <?php echo (isset($_GET['league']) && $_GET['league'] == 'worldcup') ? 'active' : ''; ?>" href="index.php?league=worldcup">World Cup</a>
                </li>
            </ul>
        </div>

        <div class="tab">
            <div class="container">
                <?php
                    if(isset($_GET['league'])) {
                        $league = $_GET['league'];
    
                        if($league === 'premierleague') {
                            include 'standings/premierleague.php';
                        } elseif ($league === 'championship') {
                            include 'standings/championship.php';
                        } elseif ($league === 'eurocups') {
                            include 'standings/europaleague.php';
                        } elseif ($league === 'laliga') {
                            include 'standings/laliga.php';
                        } elseif ($league === 'seriaa') {
                            include 'standings/serieA.php';
                        } elseif ($league === 'worldcup') {
                            include 'standings/worldcup.php';
                        }
                    } else {
                        include 'standings/premierleague.php'; 
                    }
                ?>
                </div>
            </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>

