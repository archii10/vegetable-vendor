<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>OTP Verification Form</title>
    <link rel="stylesheet" href="login.css"  >
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
   
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
  <div class="col-md-4">
    <div class="form-outline" data-mdb-input-init>
      <label for="validationDefault02" class="form-label">Last name</label>
      <input type="text" class="form-control" id="validationDefault02" value="Otto" required />
      
    </div>
  </div>

       <div class="col-md-4">
    <div class="form-outline" data-mdb-input-init>
      <label for="validationDefault02" class="form-label">Phone Number</label>
      <input type="nmuber" class="form-control" id="validationDefault02" value="Otto" required />
      
    </div>
  </div>
 
  <div class="col-md-6">
    <div class="form-outline" data-mdb-input-init>
        <label for="validationDefault03" class="form-label">City</label>
        <input type="text" class="form-control" id="validationDefault03" required />
      
    </div>
  </div>

      <div class="col-md-6">
    <div class="form-outline" data-mdb-input-init>
        <label for="validationDefault03" class="form-label">Address</label>
        <input type="text" class="form-control" id="validationDefault03" required />
      
    </div>
  </div>
 
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required />
      <label class="form-check-label" for="invalidCheck2">Agree to terms and conditions</label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" data-mdb-ripple-init>Submit form</button>
  </div>
</form>
</div>
<script>
    // Initialization for ES Users
import { Input, Ripple, initMDB } from "mdb-ui-kit";

initMDB({ Input, Ripple });
</script>
</body>
</html>