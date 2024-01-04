<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<?php
// Helper function to read data from the file
// function readData() {
//     $filename = 'data.txt';
//     if (file_exists($filename)) {
//         $data = file_get_contents($filename);
//         return json_decode($data, true);
//     }
//     return [];
// }

// // Helper function to save data to the file
// function saveData($data) {
//     $filename = 'data.txt';
//     $jsonData = json_encode($data);
//     file_put_contents($filename, $jsonData);
// }

// // CRUD operations
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Create or Update operation
//     $name = $_POST['name'];
//     $max = $_POST['max'];
//     $attend = $_POST['attend'];

//     $records = readData();

//     if (isset($_POST['edit_index']) && $_POST['edit_index'] !== '') {
//         // Update existing record
//         $editIndex = $_POST['edit_index'];
//         $records[$editIndex]['name'] = $name;
//         $records[$editIndex]['max'] = $max;
//         $records[$editIndex]['attend'] = $attend;
//     } else {
//         // Create new record
//         $records[] = ['name' => $name, 'max' => $max, 'attend' => $attend];
//     }

//     saveData($records);
// }

// if (isset($_GET['attendance']) && $_GET['attendance'] === 'delete' && isset($_GET['index'])) {
//     // Delete operation
//     $deleteIndex = $_GET['index'];
//     $records = readData();
//     unset($records[$deleteIndex]);
//     $records = array_values($records);
//     saveData($records);
// }

// // Display records
// $records = readData();
?>

<h2>RSVP</h2>

<!-- Create/Update Form -->
<form method="post">
<input type="hidden" name="attend" required value="<?php echo isset($_GET['attendance']) && $_GET['attendance'] === 'edit' ? $records[$_GET['index']]['attend'] : '0'; ?>">


    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required value="<?php echo isset($_GET['attendance']) && $_GET['attendance'] === 'edit' ? $records[$_GET['index']]['name'] : ''; ?>">

    <label for="max">Max:</label>
    <input type="number" id="max" name="max" min="0" max="5" required value="<?php echo isset($_GET['attendance']) && $_GET['attendance'] === 'edit' ? $records[$_GET['index']]['max'] : ''; ?>">

    <button type="submit"><?php echo isset($_GET['attendance']) && $_GET['attendance'] === 'edit' ? 'Update' : 'Save'; ?></button>
</form>

<!-- Display Records -->
<h2>Records</h2>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Max</th>
            <th>Invitation</th>
            <th>Attendance</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($records as $index => $record) : ?>
            <tr>
                <td><?php echo $record['name']; ?></td>
                <td><?php echo $record['max']; ?></td>
                <td><a id="myInput" href="http://localhost/Wedding%20RSPV%20-%20Copy/index.php?for=<?php echo $index?>" onclick="copyToClipboard(this)">Click to copy</a>
                <button onclick="myFunction()">Copy text</button>
                <td><?php echo $record['attend']; ?></td>
                <td>
                    <a href="?attendance=edit&index=<?php echo $index; ?>">Edit</a> |
                    <a href="?attendance=delete&index=<?php echo $index; ?>" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>

<script>

function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}

</script>
