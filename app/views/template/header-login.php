<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <script src="<?= BASEURL; ?>/js/bootstrap.bundle.js"></script>
    <title>Halaman <?= $data['judul'] ?> </title>
    <style>
        
nav
{
    font-size: 20px;
}
.menu-container
{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 70px;
}
.inner-menu 
{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    max-width: 600px;
    flex-wrap: wrap;
}
.menu
{
    margin: 15px;
    padding: 10px;
    max-width: min-content;
    text-align: center;
    font-size: 18px;
}
.menu img
{
    height: 100px;
}
.btn-menu
{
    text-decoration: none;
}
a
{
    text-decoration: none;
}

/* LOGIN*/ 

.login-container
{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url('../img/bg.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}
.login-container:before
{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: inherit;
    filter: brightness(50%); /* Or any other filter */
    z-index: 1;
}
.login-form h1
{
    text-align: center;
}
.login-form
{
    z-index: 2;
    filter: none;
    width: 100%;
    max-width: 500px;
    padding: 30px;
    background-color: #f7f7f7;
    border-radius: 5px;
    box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.1);
}
.login-form input[type=email],
.login-form input[type=password]
{
    width: 90%;
    padding: 15px;
    margin-bottom: 15px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 5px;
}
.login-form button
{
    width: 20%;
    padding: 10px;
    background-color: #64b5f6;
    font-size: 18px;
    border : none;
    border-radius: 5px;
    color: #ffffff;
    cursor: pointer;
    margin-right: 20px;
}
.btn-container
{
    display: flex;
    justify-content: flex-end;
}
  /* Media query untuk tablet */ 
@media screen and (max-width: 1024px) 
{ 

 } 
  /* Media query untuk ponsel */ 
@media screen and (max-width: 767px) 
{ 
    .login-form button
    {
        margin: 0;
        width: 30%;
    }
} 
    </style>
</head>

<body>