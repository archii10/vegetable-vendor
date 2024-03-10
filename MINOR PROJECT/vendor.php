<?php include('vendordb.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkbox Dropdown</title>
  <link rel="stylesheet" href="vendor.css">
</head>
<body>
    <div class="container">
        <form class="row g-3" >
            <div class="col-md-4">
                <div class="form-outline" data-mdb-input-init>
                  <label for="validationDefault01" class="form-label">First name</label>
                  <input type="text" class="form-control" id="validationDefault01" value="Mark" required />
                </div>
            </div>
            <br>
            <div class="col-md-4">
                <div class="form-outline" data-mdb-input-init>
                  <label for="validationDefault02" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="validationDefault02" value="Otto" required />
                </div>
            </div>
            <br>
            <div class="col-md-6">
                <div class="form-outline" data-mdb-input-init>
                  <label for="validationDefault03" class="form-label">Phone Number</label>
                  <input type="number" class="form-control" id="validationDefault03" required />
                </div>
            </div>
            <br>
    
            <div class="dropdown">
                <button class="dropbtn" id="vegetable_btn">Select Vegetables</button>
                <div class="dropdown-content">
                  <label><input type="checkbox" name="option1"> Lady Finger</label>
                  <label><input type="checkbox" name="option2"> Tomato</label>
                  <label><input type="checkbox" name="option3"> Potato</label>
                  <!-- Add more options as needed -->
                </div>
            </div>
            <br><br>
            <div class="dropdown">
                <button class="dropbtn" id="fruits_btn">Select Fruits</button>
                <div class="dropdown-content">
                  <label><input type="checkbox" name="option4">Banana</label>
                  <label><input type="checkbox" name="option5">Apple</label>
                  <label><input type="checkbox" name="option6">Orange</label>
                  <!-- Add more options as needed -->
                </div>
            </div>
            <br>
            

           <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required />
                <label class="form-check-label" for="invalidCheck2">Agree to terms and conditions</label>
              </div>
            </div>
            <br>
            <div class="col-12">
                <button class="btn btn-primary" type="submit" data-mdb-ripple-init>Submit form</button>
            </div>
        </form>
      </div>
</body>
</html>