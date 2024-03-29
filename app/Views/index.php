<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="<?= base_url();?>/public/assets/js/main.js"></script>
    <title>Pixabay Search</title>
  </head>
  <body style="background-color: #EEEEEE;">
    
    <div class="container mt-5">
        <div class=" col-md-8 mx-auto">
            <h5>Filter Search: </h5>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="radio_image" value="image" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Image
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="radio_video" value="video">
                <label class="form-check-label" for="exampleRadios1">
                    Videos
                </label>
            </div>
        </div>
        <div class="col-md-8 mx-auto mt-5">
            <label for="search_pix">Search from Pixabay</label>
            <input type="text" id="search_key" class="form-control" required name="search_pix" placeholder="Input Keyword">
        </div>
    </div> 
    <div class="container-fluid px-3">
        <div class="row mt-3" id="searched_result">
            
        </div>
    </div>
    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>