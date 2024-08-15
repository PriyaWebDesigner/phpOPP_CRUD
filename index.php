<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation in PHP OOP</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
</head>
<body>
    <h1 class="text-center text-info">CRUD Operation in PHP Using OOP</h1>
    <div class="container">
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>

            <div class="form-group">
                <label for="roll">Roll</label>
                <input type="text" name="roll" class="form-control" id="roll" required>
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" class="form-control" id="subject" required>
            </div>

            <div class="form-group">
                <label for="marks">Marks</label>
                <input type="text" name="marks" class="form-control" id="marks" required>
            </div>

            <div class="form-group">
                <label for="grade">Grade</label>
                <input type="text" name="grade" class="form-control" id="grade" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form><br>
        <h4 class="text-center text-danger">Display Records</h4>
        <table class="table table-bordered">
            <tr class="bg-primary text-center">
                <th>id</th>
                <th>name</th>
                <th>roll</th>
                <th>subject</th>
                <th>marks</th>
                <th>grade</th>
                <th>action</th>
            </tr>
        </table>
    </div>
</body>
</html>