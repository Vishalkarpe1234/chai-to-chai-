<style>
    
</style>
<div class="col-lg-12 py-5">
    <div class="contain-fluid">
        <div class="card card-outline card-dark shadow rounded-0">
            <div class="card-body rounded-0">
                <div class="container-fluid">
                    <h3 class="text-center">Welcome</h3> 
                 
                    <hr>
                    <div class="welcome-content">
                        <?php include("welcome.html") ?>
                    </div>
                </div>
            </div>
        </div>
    
 
                </div>
            </div>
        </div>
        <div class="clear-fix mb-3"></div>
        <h3 class="text-center"><b>Products</b></h3>
        <center><hr class="w-25"></center>
        <div class="row" id="product_list">
            <?php 
            $products = $conn->query("SELECT p.*, v.shop_name as vendor, c.name as `category` FROM `product_list` p inner join vendor_list v on p.vendor_id = v.id inner join category_list c on p.category_id = c.id where p.delete_flag = 0 and p.`status` =1 order by RAND() limit 4");
            while($row = $products->fetch_assoc()):
            ?>
            <div class="col-lg-3 col-md-6 col-sm-12 product-item">
                <a href="./?page=products/view_product&id=<?= $row['id'] ?>" class="card shadow rounded-0 text-reset text-decoration-none">
                <div class="product-img-holder position-relative">
                    <img src="<?= validate_image($row['image_path']) ?>" alt="Product-image" class="img-top product-img bg-gradient-gray">
                </div>
                    <div class="card-body border-top border-gray">
                        <h5 class="card-title text-truncate w-100"><?= $row['name'] ?></h5>
                        <div class="d-flex w-100">
                            <div class="col-auto px-0"><small class="text-muted">Vendor: </small></div>
                            <div class="col-auto px-0 flex-shrink-1 flex-grow-1"><p class="text-truncate m-0"><small class="text-muted"><?= $row['vendor'] ?></small></p></div>
                        </div>
                        <div class="d-flex">
                            <div class="col-auto px-0"><small class="text-muted">Category: </small></div>
                            <div class="col-auto px-0 flex-shrink-1 flex-grow-1"><p class="text-truncate m-0"><small class="text-muted"><?= $row['category'] ?></small></p></div>
                        </div>
                        <div class="d-flex">
                            <div class="col-auto px-0"><small class="text-muted">Price: </small></div>
                            <div class="col-auto px-0 flex-shrink-1 flex-grow-1"><p class="m-0 pl-3"><small class="text-primary"><?= format_num($row['price']) ?></small></p></div>
                        </div>
                        <p class="card-text truncate-3 w-100"><?= strip_tags(html_entity_decode($row['description'])) ?></p>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="clear-fix mb-2"></div>
        <div class="text-center">
            <a href="./?page=products" class="btn btn-large btn-primary rounded-pill col-lg-3 col-md-5 col-sm-12">Explore More Products</a>
        </div>
    </div>
</div>


<div class="col-lg-12 py-5">
    <div class="contain-fluid">
        <div class="card card-outline card-dark shadow rounded-0">
            <div class="card-body rounded-0">
                <div class="container-fluid">
                    <h3 class="text-center">Team Members</h3> 
                    <!DOCTYPE html>
<html>
<head>
	<title>Team Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Our Team</h1>
		<div class="team-member">
			<img src="rohit.jpg">
			<h2>Rohit Jadhav</h2>
			<p>Position: Team Member</p>
		</div>
		<div class="team-member">
			<img src="h.jpeg">
			<h2>Vishal Karpe</h2>
			<p>Position: Team Member</p>
		</div>
		<div class="team-member">
			<img src="rohit1.jpg">
			<h2>Rohit Chavan</h2>
			<p>Position: Team Member</p>
		</div>
	</div>
</body>
</html>








<div class="col-lg-12 py-5">
    <div class="contain-fluid">
        <div class="card card-outline card-dark shadow rounded-0">
            <div class="card-body rounded-0">
                <div class="container-fluid">
                    <h3 class="text-center">Contact Us</h3> 
                    <!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Contact Me</title>
    <style>
      form {
        max-width: 600px;
        margin: 0 auto;
        font-family: Arial, sans-serif;
      }
      label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
      }
      input[type=text], textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 16px;
        font-family: Arial, sans-serif;
      }
      input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
      }
      input[type=submit]:hover {
        background-color: #45a049;
      }
      .success-message {
        color: green;
        font-weight: bold;
        margin-top: 20px;
      }
      .error-message {
        color: red;
        font-weight: bold;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <form action="submit-form.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Your name" required>

      <label for="email">Email:</label>
      <input type="text" id="email" name="email" placeholder="Your email" required>

      <label for="subject">Subject:</label>
      <input type="text" id="subject" name="subject" placeholder="Subject" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" placeholder="Your message" style="height:200px" required></textarea>

      <input type="submit" value="Submit">

      <div class="success-message" style="display:none;">
        Your message has been sent successfully.
      </div>

      
    </form>

    <script>
      const form = document.querySelector('form');
      const successMessage = document.querySelector('.success-message');
      const errorMessage = document.querySelector('.error-message');

      form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const formData = new FormData(event.target);
        const response = await fetch(event.target.action, {
          method: 'POST',
          body: formData,
          headers: {
            'Accept': 'application/json'
          }
        });

        if (response.ok) {
          form.reset();
          successMessage.style.display = 'block';
          errorMessage.style.display = 'none';
        } else {
          successMessage.style.display = 'none';
          errorMessage.style.display = 'block';
        }
      });
    </script>
  </body>
</html>

