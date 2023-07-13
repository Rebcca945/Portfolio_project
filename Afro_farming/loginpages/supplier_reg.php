<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afro farmming </title>
    <!-- boot strap link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
     crossorigin="anonymous">
    <!-- boot strap link  -->
    <!--  font alwsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
     crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <!--font alwsome end -->
    <!-- css file link-->
    <link rel="stylesheet" href="style.css">
   <style>
    /* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: #ecf0f3;
    background-image: url(../background_images/uaslSe7liivcKjyOvEZt--1--fwo87.jpg);
    background-size: contain;
}

.wrapper {
    max-width: 850px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}

.logo {
    width: 80px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    /* border: 1px solid red; */
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {
    color: #555;
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1,
        -3px -3px 3px #fff;
    letter-spacing: 1.3px;
}

.wrapper .btn:hover {
    background-color: #039BE5;
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4;
}

.wrapper a:hover {
    color: #039BE5;
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}
   </style>   
</head>
<body>
<div class="wrapper">
        <div class="logo">
            <img src="../background_images/login.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Supplier Registration
        </div>
        <form class="p-3 mt-3" method="post" enctype="multipart/form-data" action="account.php">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="f_name" id="f_name" placeholder="first name">
            </div>
            
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="l_name" id="l_name" placeholder="last name ">
            </div>
            
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="S_phone_number" id="S_phone_number" placeholder="S_phone_number">
            </div>
            
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="S_email" id="S_email" placeholder="S_email">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
               <!-- <input type="file" name="profile_image1" id="profile_image1" placeholder="profile image">-->
               <input type="file" name="profile_image1"
            id="profile_image1" class="form-control"
            required="required">
        </input>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="S_password" id="S_password" placeholder="S_password">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="S_house_no" id="S_house_no" placeholder="S_house_no">
            </div>
            
            
            
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="S_state" id="S_state" placeholder="S_state">
            </div>
            
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="S_city" id="S_city" placeholder="S_city">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="S_subcity" id="S_subcity" placeholder="S_subcity">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="S_woreda" id="S_woreda" placeholder="S_woreda">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="S_kebele" id="S_kebele" placeholder="S_kebele">
            </div>

        <button class="btn mt-3" name="insert_supplier">register</button>
        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="supplier.php">log in </a>
        </div>
    </div>                                 

        <!-- boot strap javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>
    <!-- boot strap  javascript  link-->
    
</body>
</html>