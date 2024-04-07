<?php
    $idleague = 302;
    require __DIR__ . "/../getapi.php";
?>

<h1 class="mt-4 mb-3">La Liga</h1>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                <th scope="col">Position</th>
                <th scope="col">Team</th>
                <th scope="col">Play</th>
                <th scope="col">Points</th>
                <th scope="col">Win</th>
                <th scope="col">Lose</th>
                <th scope="col">Draw</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $standings): ?>
                    <tr>
                        <td class="text-center"><?php echo $standings['overall_league_position']; ?></td>
                        <td>
                            <img src="<?php echo $standings['team_badge']; ?>" alt="Logo team" width="30px">
                            <?php echo $standings['team_name']; ?>
                        
                        </td>
                        <td class="text-center"><?php echo $standings['overall_league_payed']; ?></td>
                        <td class="text-center"><?php echo $standings['overall_league_PTS']; ?></td>
                        <td class="text-center"><?php echo $standings['overall_league_W']; ?></td>
                        <td class="text-center"><?php echo $standings['overall_league_L']; ?></td>
                        <td class="text-center"><?php echo $standings['overall_league_D']; ?></td>
                    </tr>
                <?php endforeach; ?> 
            </tbody>
        </table>
    </div>
</div>