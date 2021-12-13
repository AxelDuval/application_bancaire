<?php
include('templates/header.php');
include('templates/nav.php');
include('data/acounts_thomas.php');
include('templates/footer.php');
include('templates/connexion.php');
?>

<div class="row mt-4 p-3">

    <?php
    $accounts = get_accounts();

    for ($i = 0; $i < count($accounts); $i++) {
        echo "<div class='col-xl-3 col-md-6'>" .
            "<div class='card bg-primary text-white mb-4'>" .
            "<div class='card-body'>";
        echo "<p class='card-text'>" . $accounts[$i]["name"] . "</p>";
        echo "<p class='card-text'>" . $accounts[$i]["number"] . "</p>";
        echo "<p class='card-text'>" . $accounts[$i]["owner"] . "</p>";
        echo "<p class='card-text'>" . "Solde : " . $accounts[$i]["amount"] . "€" . "</p>";
        echo "<p class='card-text'>" . "Dernière opération : " . $accounts[$i]["last_operation"] . "</p>";
        echo
        "</div>" .
            "<div class='card-footer d-flex align-items-center justify-content-between'>" .
            "<a class='small text-white stretched-link' href='account_detail.php?"
             . "number=" . $accounts[$i]["number"] . '&' 
             . "name=" . $accounts[$i]["name"] . '&'  
             . "owner=" . $accounts[$i]["owner"] . '&'  
             . "amount=" . $accounts[$i]["amount"] . '&'  
             . "last_operation=" . $accounts[$i]["last_operation"] 
             ."'>Voir le détail</a>" .
            "<div class='small text-white'><i class='fas fa-angle-right'></i></div>" .
            "</div>" .
            "</div>" .
            "</div>";
    }


    ?>
</div>