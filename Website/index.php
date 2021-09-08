<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFT Your FACE</title>
    <!-- links  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <!-- nav bar -->
    <nav>

    </nav>

    <!-- headline -->

    <div class="container headline text-center">
        <div class="row">
            <h1>YOUR FACE NFT</h1>
            <h2>Create yout uniqe and personal face nft</h2>
        </div>
    </div>

    <!-- wallet connect -->

    <div class="container text-center">
        <h3>connect your wallet</h3>
        <div class="wallet">
            <button type="button" class="btn btn-primary">wallet connect</button>
        </div>

    </div>



<!-- uoload nft  -->
    <div class="container text-center">

    <!-- select upload type -->
        <div class="row">
        <h4>ouw to upload your image ?</h4>
        <button type="button" class="btn btn-primary">upload image</button>
        <button type="button" class="btn btn-primary">gravatar</button>
        <button type="button" class="btn btn-primary">instagram profile</button>
        <button type="button" class="btn btn-primary">tweeter profile</button>
        </div>
      

    <!-- manual upload  -->
        <div class=" row upload-image">
            <h2>upload image</h2>
            <p>upload your face or profile image</p>
            <form action="/file-upload" class="dropzone">
                <div class="fallback">
                    <input name="file" type="file" multiple />
                </div>
            </form>
        </div>

        <!-- gravatar upload  -->

        <div class="row gravatar">


        </div>


        <!-- instagram profile upload -->

        <div class="row instagram-profile">

        </div>

        <!-- twitter profile upload  -->

        <div class="row twiiter">


        </div>



    </div>




</body>

</html>