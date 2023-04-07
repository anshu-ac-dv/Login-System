<!DOCTYPE html>
<html>
<head>
  <title>Header Example</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php
      include "Header.php";
    ?>
    <div class="container mt-5">
      <div class="row mt-5">
        <div class="col-md-6 mt-5">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_KEahK5k9Mf.json"  background="transparent"  speed="1"  style="width: 500px; height: 500px;"  loop  autoplay></lottie-player>
        </div>
        <div class="col-md-5 mt-5">
          <div class="card">
            <div class="card-header">
              Enquiry Form
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
