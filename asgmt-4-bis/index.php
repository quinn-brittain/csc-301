<?php
require_once './utils/csv-utils.php';
require_once './utils/json-utils.php';

$test = [
  ['firstname' => 'Paul', 'lastname' => 'McCartney'],
  ['firstname' => 'Ringo', 'lastname' => 'Star'],
  ['firstname' => 'Modify', 'lastname' => 'Me'],
  ['firstname' => 'Delete', 'lastname' => 'Me'],
];

$testWrite = ['firstname' => 'George', 'lastname' => 'Harrison'];

$testMod = ['firstname' => 'John', 'lastname' => 'Lennon'];

?>

<!doctype html>
<html lang="en">

<?php
$title = 'Database Test';
require_once 'head.php'
?>

<body>
  <main>
    <h1>Super 1337 Debugger Webpage</h1>
    <a href=""><button>Reload Page</button></a>
    <pre class="csv">
    <?php
    //CSV
    echo "---CSV Test---\n";
    writeAllCSV('./data/test.csv', $test);
    print_r(readCSV('./data/test.csv'));
    writeCSV('./data/test.csv', $testWrite);
    echo "---After Single Add---\n";
    print_r(readCSV('./data/test.csv'));
    deleteCSV('./data/test.csv', 3);
    echo "---After Delete---\n";
    print_r(readCSV('./data/test.csv'));
    modifyCSV('./data/test.csv', 2, $testMod);
    echo "---After Mod---\n";
    print_r(readCSV('./data/test.csv'));
    ?>
    </pre>
    <pre class="json">
    <?php
    //JSON
    echo "---JSON Test---\n";
    writeAllJSON('./data/test.json', $test);
    print_r(readJSON('./data/test.json'));
    writeJSON('./data/test.json', $testWrite);
    echo "---After Single Add---\n";
    print_r(readJSON('./data/test.json'));
    deleteJSON('./data/test.json', 3);
    echo "---After Delete---\n";
    print_r(readJSON('./data/test.json'));
    modifyJSON('./data/test.json', 2, $testMod);
    echo "---After Mod---\n";
    print_r(readJSON('./data/test.json'));
    ?>
    </pre>
  </main>
  <?php
  require_once 'script.php'
  ?>
</body>

</html>