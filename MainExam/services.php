<?php

include "db.php";
include "navbar.php";

$host = "localhost";
$dbname = "Sandis_Sarguns";
$username = "skolnieks";
$password = "pQcM10ClEn3lSWy";
?>

<html>
<link rel="stylesheet" href="servicestyle.css">
<head>
    <title>Pakalpojumu saraksts</title>
</head>
<body>
    <div class="big-container first">
        <img src="lamp.jpg" style="width:100%; height:70%">
        <div class="container_text">
            <?php
            try {
                $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $conn->query("SELECT pakalpojumi FROM pakalpojumi WHERE ID = 1");
                $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($services as $service) {
                    echo "<p>" . $service['pakalpojumi'] . "</p>";
                }
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
            ?>
        </div>
                     <button id="myBtn3" onclick="openModal('myModal')">Informācija par pakalpojumu</button>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal('myModal')">&times;</span>
                    <h2>Pakalpojuma apraksts</h2>
                    <div class="modal-body">
                        <?php
                        try {
                            $stmt = $conn->query("SELECT apraksts FROM pakalpojumi WHERE ID = 1");
                            $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($services as $service) {
                                echo "<p>" . $service['apraksts'] . "</p>";
                            }
                        } catch (PDOException $e) {
                            echo 'Error: ' . $e->getMessage();
                        }
                        ?>
                        <h3>Cena sākot no:  <?php try {
                                $stmt = $conn->query("SELECT cena FROM pakalpojumi WHERE ID = 1");
                                $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                foreach ($services as $service) {
                                    echo "<p>" . $service['cena'] . "</p>";
                                }
                            } catch (PDOException $e) {
                                echo 'Error: ' . $e->getMessage();
                            }
                            ?> </h3>
                    </div>
                </div>
            </div>
            <div class="big-container second">
                <img src="bilde.jpg" style="width:100%; height:70%">
                <div class="container_text"> <?php
                    try {
                        $stmt = $conn->query("SELECT pakalpojumi FROM pakalpojumi WHERE ID = 2");
                        $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($services as $service) {
                            echo "<p>" . $service['pakalpojumi'] . "</p>";
                        }
                    } catch (PDOException $e) {
                        echo 'Error: ' . $e->getMessage();
                    }
                    ?>
                </div>
                    <button id="myBtn2" onclick="openModal('myModal1')">Informācija par pakalpojumu</button>
                    <div id="myModal1" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeModal('myModal1')">&times;</span>
                            <h2>Pakalpojuma apraksts</h2>
                            <div class="modal-body">
                                <?php
                                try {
                                    $stmt = $conn->query("SELECT apraksts FROM pakalpojumi WHERE ID = 2");
                                    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($services as $service) {
                                        echo "<p>" . $service['apraksts'] . "</p>";
                                    }
                                } catch (PDOException $e) {
                                    echo 'Error: ' . $e->getMessage();
                                }
                                ?>
                                <h3>Cena sākot no:  <?php try {
                                        $stmt = $conn->query("SELECT cena FROM pakalpojumi WHERE ID = 2");
                                        $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($services as $service) {
                                            echo "<p>" . $service['cena'] . "</p>";
                                        }
                                    } catch (PDOException $e) {
                                        echo 'Error: ' . $e->getMessage();
                                    }
                                    ?> </h3>

                            </div>
                        </div>
                    </div>
                </div>
            <div class="big-container third">
                <img src="bilde2.jpg" style="width:100%; height:70%">
                <div class="container_text"> <?php
                    try {
                        $stmt = $conn->query("SELECT pakalpojumi FROM pakalpojumi WHERE ID = 3");
                        $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($services as $service) {
                            echo "<p>" . $service['pakalpojumi'] . "</p>";
                        }
                    } catch (PDOException $e) {
                        echo 'Error: ' . $e->getMessage();
                    }
                    ?>

                </div>
                    <button id="myBtn1" onclick="openModal('myModal2')">Informācija par pakalpojumu</button>
                    <div id="myModal2" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeModal('myModal2')">&times;</span>
                            <h2>Pakalpojuma apraksts</h2>
                            <div class="modal-body">
                                <?php
                                try {
                                    $stmt = $conn->query("SELECT apraksts FROM pakalpojumi WHERE ID = 3");
                                    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($services as $service) {
                                        echo "<p>" . $service['apraksts'] . "</p>";
                                    }
                                } catch (PDOException $e) {
                                    echo 'Error: ' . $e->getMessage();
                                }
                                ?>
                                <h3>Cena sākot no:  <?php try {
                                        $stmt = $conn->query("SELECT cena FROM pakalpojumi WHERE ID = 3");
                                        $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($services as $service) {
                                            echo "<p>" . $service['cena'] . "</p>";
                                        }
                                    } catch (PDOException $e) {
                                        echo 'Error: ' . $e->getMessage();
                                    }
                                    ?> </h3>

                            </div>
                        </div>
                    </div>
                </div>
            <div class="big-container fourth">
                <img src="paint.jpg" style="width:100%; height:70%">
                <div class="container_text"> <?php
                    try {
                        $stmt = $conn->query("SELECT pakalpojumi FROM pakalpojumi WHERE ID = 4");
                        $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($services as $service) {
                            echo "<p>" . $service['pakalpojumi'] . "</p>";
                        }
                    } catch (PDOException $e) {
                        echo 'Error: ' . $e->getMessage();
                    }
                    ?>
                </div>
                    <button id="myBtn4" onclick="openModal('myModal3')">Informācija par pakalpojumu</button>
                    <div id="myModal3" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeModal('myModal3')">&times;</span>
                            <h2>Pakalpojuma apraksts</h2>
                            <div class="modal-body">
                                <?php
                                try {
                                    $stmt = $conn->query("SELECT apraksts FROM pakalpojumi WHERE ID = 4");
                                    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($services as $service) {
                                        echo "<p>" . $service['apraksts'] . "</p>";
                                    }
                                } catch (PDOException $e) {
                                    echo 'Error: ' . $e->getMessage();
                                }
                                ?>
                                <h3>Cena sākot no:  <?php try {
                                        $stmt = $conn->query("SELECT cena FROM pakalpojumi WHERE ID = 4");
                                        $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($services as $service) {
                                            echo "<p>" . $service['cena'] . "</p>";
                                        }
                                    } catch (PDOException $e) {
                                        echo 'Error: ' . $e->getMessage();
                                    }
                                    ?> </h3>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="big-container fifth">
                <img src="chem.jpg" style="width:100%; height:70%">
                <div class="container_text"> <?php
                    try {
                        $stmt = $conn->query("SELECT pakalpojumi FROM pakalpojumi WHERE ID = 5");
                        $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($services as $service) {
                            echo "<p>" . $service['pakalpojumi'] . "</p>";
                        }
                    } catch (PDOException $e) {
                        echo 'Error: ' . $e->getMessage();
                    }
                    ?>
                </div>
                    <button id="myBtn5" onclick="openModal('myModal4')">Informācija par pakalpojumu</button>

                    <div id="myModal4" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeModal('myModal4')">&times;</span>
                            <h2>Pakalpojuma apraksts</h2>
                            <div class="modal-body">
                                <?php
                                try {
                                    $stmt = $conn->query("SELECT apraksts FROM pakalpojumi WHERE ID = 5");
                                    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($services as $service) {
                                        echo "<p>" . $service['apraksts'] . "</p>";
                                    }
                                } catch (PDOException $e) {
                                    echo 'Error: ' . $e->getMessage();
                                }
                                ?>
                                <h3>Cena sākot no:  <?php try {
                                        $stmt = $conn->query("SELECT cena FROM pakalpojumi WHERE ID = 5");
                                        $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($services as $service) {
                                            echo "<p>" . $service['cena'] . "</p>";
                                        }
                                    } catch (PDOException $e) {
                                        echo 'Error: ' . $e->getMessage();
                                    }
                                    ?> </h3>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="big-container sixth">
                <img src="polish.jpg" style="width:100%; height:70%">
                <div class="container_text"> <?php
                    try {
                        $stmt = $conn->query("SELECT pakalpojumi FROM pakalpojumi WHERE ID = 6");
                        $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($services as $service) {
                            echo "<p>" . $service['pakalpojumi'] . "</p>";
                        }
                    } catch (PDOException $e) {
                        echo 'Error: ' . $e->getMessage();
                    }
                    ?>
                </div>
                    <button id="myBtn6" onclick="openModal('myModal5')">Informācija par pakalpojumu</button>

                    <div id="myModal5" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeModal('myModal5')">&times;</span>
                            <h2>Pakalpojuma apraksts</h2>
                            <div class="modal-body">
                                <?php
                                try {
                                    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->query("SELECT apraksts FROM pakalpojumi WHERE ID = 6");
                                    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($services as $service) {
                                        echo "<p>" . $service['apraksts'] . "</p>";
                                    }
                                } catch (PDOException $e) {
                                    echo 'Error: ' . $e->getMessage();
                                }
                                ?>
                                <h3>Cena sākot no:  <?php try {
                                        $stmt = $conn->query("SELECT cena FROM pakalpojumi WHERE ID = 6");
                                        $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($services as $service) {
                                            echo "<p>" . $service['cena'] . "</p>";
                                        }
                                    } catch (PDOException $e) {
                                        echo 'Error: ' . $e->getMessage();
                                    }
                                    ?> </h3>
                            </div>
                        </div>
                    </div>
                </div>
            <script>
                function openModal(modalId) {
                    document.getElementById(modalId).style.display = "block";
                }
                function closeModal(modalId) {
                    document.getElementById(modalId).style.display = "none";
                }
            </script>

</body>

</html>