<?php
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
try {
    $db = new PDO("mysql:host=$servername; dbname=doeng", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT word, translation FROM words ORDER BY rand() LIMIT 4";
    $result = $db->query($sql);

    foreach($result as $line) {
        $words_array[] = array('word' => $line['word'], 'translation' => $line['translation']);
    }

    $trueWord = $words_array[rand(0, 3)];
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$db = null;
?>

        <main>
                <div class="english_study_window_container">
                    
                    <div class="question_box">
                        <div class="question">
                            <? echo ucfirst($trueWord['word']) ?>
                        </div>
                    </div>
                   
                    <div class="variant_container">
                        <div class="variant">
                            <button class="variant_button">
                                <div class="number_of_variant inline_for_number_of_variant">1</div>
                                <div class="text_of_variant inline_for_number_of_variant">variant</div>
                            </button>
                        </div>
                        <div class="variant">
                            <button class="variant_button">
                                <div class="number_of_variant inline_for_number_of_variant">2</div>
                                <div class="text_of_variant inline_for_number_of_variant">variant</div>
                            </button>
                        </div>
                        <div class="variant">
                            <button class="variant_button">
                                <div class="number_of_variant inline_for_number_of_variant">3</div>
                                <div class="text_of_variant inline_for_number_of_variant">variant</div>
                            </button>
                        </div>
                        <div class="variant">
                            <button class="variant_button">
                                <div class="number_of_variant inline_for_number_of_variant">4</div>
                                <div class="text_of_variant inline_for_number_of_variant">variant</div>
                            </button>
                        </div>
                    </div>
                </div>
        </main>