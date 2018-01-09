<?php

if ($_SESSION['userId'] == "100" || $_SESSION['userId'] == "34") //Jorge
{
    $_SESSION['userId'] = "34";
    $_SESSION['userType'] = "1";
}
else if($_SESSION['userId'] == "101" || $_SESSION['userId'] == "37" ) //Juan
{
    $_SESSION['userId'] = "37";
    $_SESSION['userType'] = "1";
}
$currAgent = "SELECT * FROM UsersInfo WHERE userId = '" . $_SESSION['userId'] . "'";
$email = $dbConn->prepare($currAgent);
$email->execute();
$agentInfo = $email->fetch();

$activePage = basename($_SERVER['PHP_SELF'], ".php");

$sqlLicense = "SELECT license, mlsId FROM UsersInfo WHERE userId = :userId";

$namedParameters = array();
$namedParameters[':userId'] = $_SESSION['userId'];


$licenseStmt = $dbConn->prepare($sqlLicense);
$licenseStmt->execute($namedParameters);
$licenseResult = $licenseStmt->fetch();




$addedHouses = "SELECT count(*) as added FROM HouseInfo WHERE userId = :userId AND status = :status";
$addedHouseParam = array();
$addedHouseParam[':userId'] = $_SESSION['userId'];
$addedHouseParam[':status'] = "added";

$addedHousesStmt = $dbConn->prepare($addedHouses);
$addedHousesStmt->execute($addedHouseParam);
$addedHouseResults = $addedHousesStmt->fetch();




$sql = "SELECT firstName, lastName, count(*) as sold, AVG(finalComm) as average, SUM(finalComm) AS earnings, AVG(percentage) AS avgPercent FROM commInfo WHERE license = :license GROUP BY license ";
$parameters = array();
$parameters[':license'] = $licenseResult['license'];

$stmt = $dbConn->prepare($sql);
$stmt->execute($parameters);
$result = $stmt->fetch();

$sqlTransactions = "SELECT * FROM transactions WHERE userId = :userId";
$transParameters = array();
$transParameters[':userId'] = $_SESSION['userId'];
$transStmt = $dbConn->prepare($sqlTransactions);
$transStmt->execute($transParameters);
$transResults = $transStmt->fetchAll();
?>



<!-- Main Header -->
<header class="main-header">
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <!-- Temporary button for easy switching -->
        <?php
            if ($_SESSION['userId'] == "100" || $_SESSION['userId'] == "34") //Jorge
            {
                $_SESSION['userId'] = "34";
                $_SESSION['userType'] = "1";
                echo "<a href=\"../index.php\" style=\"margin-top: 8px; margin-left: 10px\" class=\"btn
                btn-admin\">Switch to Admin</a>";
            }
            else if($_SESSION['userId'] == "101" || $_SESSION['userId'] == "37" ) //Juan
            {
                $_SESSION['userId'] = "37";
                $_SESSION['userType'] = "1";
                echo "<a href=\"../index.php\" style=\"margin-top: 8px; margin-left: 10px\" class=\"btn
                btn-admin\">Switch to Admin</a>";
            }
        ?>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- User image in navbar--><img src=<?php if(isset($agentInfo['picture']))
                                                                    echo "\"openhouse/". $agentInfo['picture'] . "\""; 
                                                                else
                                                                    echo "\"../dist/img/user2-160x160.jpg\""; ?> class="user-image"
                                                         alt="User Image"> <span class="hidden-xs"><?php echo $agentInfo['firstName'] . " " . $agentInfo['lastName'] . " #" . $agentInfo['license'];?></span> </a>
                    <ul class="dropdown-menu">
                        <!-- User image in the menu -->
                        <li class="user-header"><img src=<?php if(isset($agentInfo['picture']))
                                                                    echo "\"openhouse/". $agentInfo['picture'] . "\""; 
                                                                else
                                                                    echo "\"../dist/img/user2-160x160.jpg\""; ?> class="img-circle"
                                                     alt="User Image">
                            <p> <?=$_SESSION['username'];?>
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                       
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left"><a href="settings.php" class="btn btn-default btn-flat">Settings</a></div>
                            <div class="pull-right"><a href="../logout.php" class="btn btn-default btn-flat">Sign
                                    out</a></div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li><a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a></li>
            </ul>
        </div>
    </nav>
</header>
