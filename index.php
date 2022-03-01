<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css" >
    <title>Le Bon Appart</title>
</head>

<header>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="homepage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="appart.php">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
    </div>
  </div>
</nav>
</header>

<body>
<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Title</label>
      <input type="text" class="form-control" id="title" placeholder="title" value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
      <span class="text-danger"><?=empty($error['title'])?'':$error['title']?></span>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Description</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="description" value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">City</label>
      <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>
    </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>type</option>
    <option value="1">T1</option>
    <option value="2">T2</option>
    <option value="3">T3</option>
  </select>
</div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Zip</label>
      <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
      <div class="invalid-tooltip">
      </div>
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">reservation message</label>
    <textarea class="form-control" id="reservation" rows="3"></textarea>
  </div>
  </div>
  <button class="btn btn-dark" type="submit">Submit form</button>
</form>
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</html>