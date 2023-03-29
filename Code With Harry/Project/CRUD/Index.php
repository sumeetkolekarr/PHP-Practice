<?php
// INSERT INTO `notes` (`S.No.`, `title`, `description`, `dt`) VALUES (NULL, 'Buy Books', 'Get the Books', current_timestamp()); 
$insert = false;

// Connecting to a DataBase 
$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";

// Create a Connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if Connection was not successful
if (!$conn) {
  die("Sorry we failed to connect: " . mysqli_connect_error());
}

// echo $_POST['update'];
// echo $_GET['snoEdit'];
// exit();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset( $_POST['snoEdit'])) {
    echo "yes";
    // Update the record
      $sno = $_POST["snoEdit"];
      $title = $_POST["titleEdit"];
      $description = $_POST["descriptionEdit"];

    // Sql query to be executed
    $sql = "UPDATE `notes` SET `title` = '$title' , `description` = '$description' WHERE `notes`.`sno` = $sno";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "We updated the record successfully";
    } else {
      echo "We could not update the record successfully";
      // echo mysqli_connect_error($result($sql));
    }
  } 
  else {

    // Variables 
    $title = $_POST["title"];
    $description = $_POST["description"];
    // SQL Query to be executed
    $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      $insert = true;
    } else {
      $insert = false;
    }
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

  <link rel="stylesheet" href="Style.css" />
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <title>PHP CRUD</title>
</head>

<body>


  <!-- Edit modal -->
  <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
      Edit Modal
    </button> -->

  <!--Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit this Note</h1>

        </div>
        <div class="modal-body">
          <form class="mb-3 ml-3 mr-3 mt-3" action="/PHP/CODE WITH HARRY/Project/CRUD/Index.php" method="post">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <h2>Add a Note</h2>
            <div class="mb-3">
              <label for="=titleEdit" class="form-label">Note Title</label>
              <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp" title="Note Title" />
            </div>
            <div class="mb-3">
              <label for="descriptionEdit" class="form-label">Note Description</label>
              <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Note</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Image and text -->
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <!-- <img
        src="/PHP/CODE WITH HARRY/Project/CRUD/sticky-note.php"
        width="30"
        height="30"
        class="d-inline-block align-top"
        alt=""
        /> -->
      MemoNexus
    </a>
  </nav>
  <?php
  if ($insert) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your Note' . ' has been submitted Successfully.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
  }
  ?>

  <form class="mb-3 ml-3 mr-3 mt-3" action="/PHP/CODE WITH HARRY/Project/CRUD/Index.php" method="post">
    <h2>Add a Note</h2>
    <div class="mb-3">
      <label for="=title" class="form-label">Note Title</label>
      <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" title="Note Title" />
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Note Description</label>
      <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add Note</button>
  </form>

  <div class="container">
    <?php
    $sql = "SELECT * FROM `notes`";
    $result = mysqli_query($conn, $sql);
    ?>
  </div>

  <table class="table mb-3" id="myTable">
    <thead>
      <tr>
        <th scope="col">S.No.</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sno = 0;
      while ($row = mysqli_fetch_assoc($result)) {
        $sno = $sno + 1;
        echo "<tr>
        <th scope='row'>" . $sno . "</th>
          <td>" . $row['title'] . "</td>
          <td>" . $row['description'] . "</td>
          <td><button class='edit btn btn-sm btn-primary' id=" . $row['description'] . " >Edit</button> <a href='/del'>Delete</a> </td>
          </tr>";
        // echo $row['S.No.'] . ". Title " . $row['title'] . ", Desc was " . $row['description']; 
        // echo "<br>";
      }

      ?>
    </tbody>
  </table>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit", );
        tr = e.target.parentNode.parentNode;
        title = tr.getElementsByTagName("td")[0].innerText;
        description = tr.getElementsByTagName("td")[1].innerText;
        console.log(title, description);
        titleEdit.value = title;
        descriptionEdit.value = description;
        snoEdit.value = e.target.id;
        $('#editModal').modal('toggle');
      })
    })
  </script>
</body>

</html>