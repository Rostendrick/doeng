<?php
function mb_ucfirst($string, $encoding="utf-8")
{
    $firstChar = mb_substr($string, 0, 1, $encoding);
    $then = mb_substr($string, 1, null, $encoding);
    return mb_strtoupper($firstChar, $encoding) . $then;
}

if (isset($_GET['question'])) {
    $number_of_question = $_GET['question'];
} else {
    $number_of_question = 1;
}

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
    $true_word_num = rand(0, 3);
    $true_word = $words_array[$true_word_num];
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$db = null;

$flag = 0;
var_dump($_POST);
$_POST['hi'] = "hi";
?>
        <main>
                <div class="english_study_window_container">
                    
                    <div class="question_box">
                        <div class="question">
                            <? echo ucfirst($true_word['word']) ?>
                        </div>
                    </div>
                    
                    <form action="http://doeng/index.php?page=words-study" name="test" method="POST" id="answersForm" name="answersForm">
                    <div class="variant_container">

                    <div class="variant">
                        <?php 
                                $random_word = array_rand($words_array);
                                $flag=0;
                                if ($words_array[$random_word]['translation'] == $words_array[$true_word_num]['translation']) {
                                    $flag = 1;
                                    }
                        ?>   
                            <button class="variant_button <?php if ($flag==1) {
                                echo 'js_right_answer';
                                } else {
                                    echo 'js_false_answer';
                                }
                                ?>">
                                <div class="number_of_variant inline_for_number_of_variant">1</div>
                                <div class="text_of_variant inline_for_number_of_variant">
                                    <?php 
                                        echo mb_ucfirst($words_array[$random_word]['translation']);
                                        unset($words_array[$random_word]); 
                                    ?>
                                </div>
                            </button>
                        </div>
                        
                        <div class="variant">
                        <?php 
                                $random_word = array_rand($words_array);
                                $flag=0;
                                if ($words_array[$random_word]['translation'] == $words_array[$true_word_num]['translation']) {
                                    $flag = 1;
                                    }
                        ?>   
                            <button class="variant_button <?php if ($flag==1) {
                                echo 'js_right_answer';
                                } else {
                                    echo 'js_false_answer';
                                }
                                ?>">
                                <div class="number_of_variant inline_for_number_of_variant">2</div>
                                <div class="text_of_variant inline_for_number_of_variant">
                                    <?php 
                                        echo mb_ucfirst($words_array[$random_word]['translation']);
                                        unset($words_array[$random_word]); 
                                    ?>
                                </div>
                            </button>
                        </div>

                        <div class="variant">
                        <?php 
                                $random_word = array_rand($words_array);
                                $flag=0;
                                if ($words_array[$random_word]['translation'] == $words_array[$true_word_num]['translation']) {
                                    $flag = 1;
                                    }
                        ?>   
                            <button class="variant_button <?php if ($flag==1) {
                                echo 'js_right_answer';
                                } else {
                                    echo 'js_false_answer';
                                }
                                ?>">
                                <div class="number_of_variant inline_for_number_of_variant">3</div>
                                <div class="text_of_variant inline_for_number_of_variant">
                                    <?php 
                                        echo mb_ucfirst($words_array[$random_word]['translation']);
                                        unset($words_array[$random_word]); 
                                    ?>
                                </div>
                            </button>
                        </div>

                        <div class="variant">
                        <?php 
                                $random_word = array_rand($words_array);
                                $flag=0;
                                if ($words_array[$random_word]['translation'] == $words_array[$true_word_num]['translation']) {
                                    $flag = 1;
                                    }
                        ?>   
                            <button class="variant_button <?php if ($flag==1) {
                                echo 'js_right_answer';
                                } else {
                                    echo 'js_false_answer';
                                }
                                ?>">
                                <div class="number_of_variant inline_for_number_of_variant">4</div>
                                <div class="text_of_variant inline_for_number_of_variant">
                                    <?php 
                                        echo mb_ucfirst($words_array[$random_word]['translation']);
                                        unset($words_array[$random_word]); 
                                    ?>
                                </div>
                            </button>
                        </div>

                    </div>
                    <input type="text">
                    <input type="submit">
                    </form>
                </div>
        </main>
<?php
var_dump($_POST);
?>