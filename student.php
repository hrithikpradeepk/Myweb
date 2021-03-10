<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student form</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-success bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Rajagiri</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="acco.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="College.html">Gallery</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tools
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="employee.html">Employee</a></li>
                  <li><a class="dropdown-item" href="">Students</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">People</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">RCSS</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <table class="table">
        <tr>
            <td>Name</td>
            <td><input class="form-control" type="text"></td>
        </tr>
        <tr>
            <td>Rollno</td>
            <td><input class="form-control"type="text"></td>
        </tr>
        <tr>
            <td>Adm no</td>
            <td><input class="form-control" type="text"></td>
        </tr>
        <tr>
            <td>College</td>
            <td><input class="form-control" type="text"></td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn-dark">Submit</button></td>
        </tr>
    </table>
    
</body>
</html>