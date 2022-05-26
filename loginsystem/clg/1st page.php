<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d79e4717f3.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b1b425ded7.js" crossorigin="anonymous"></script>
    <title>For-You</title>
    <style>
              *{
    margin: 0;
    padding: 0;
}
body{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    line-height: 1.7em;
}
a{
    text-decoration: none;
    color: #333;
}
#navbar{
    background-color:#333;
    color: white;
    overflow: auto;
}


#navbar a {
    color: #fff;
}

#navbar  h1{
    float: left;
    padding: 20px;
}

#navbar ul{
    list-style: none;
    float: right;   

}

#navbar ul li {
    float: left;
}
input.btn.btn-primary {
    height: 30px;
    width: 60px;
    background-color: cadetblue;
    cursor: pointer;
}

#navbar ul a{
    display: block;
    padding: 14px;
    text-align: center;
}

#navbar ul li a:hover ,
#navbar ul li a.current {   
    background-color: #444;
    color: #f7c08a;
    
}
#showcase{
        background: url("cl.jpg") no-repeat center center/cover;
    height:600px;
}
#showcase .showcase-content{
    color: white;
    text-align: center;
    padding-top: 170px;
}
#showcase .showcase-content h1{
    font-size: 60px;
    line-height: 1.2em;
    padding-bottom: 20px;
}
.line{
    font-size: 20px;
    padding-bottom: 20px;
}
.btn{
    display: inline-block;
    font-size: 18px;
    color: #fff;
    background: #333;
    padding: 13px 20px;
    margin-bottom
    border: none;
    cursor: pointer;
}
.btn:hover{
    background: #f7c08a;
    color: #333;
    height: 20px;
}
.container{
    max-width: 1100px;
    margin: auto;
    padding:0 2rem;
    overflow: hidden;
}
.text-center{
    text-align: center;
    padding: 20px;
    height: 30px;
}
.items{
    display: flex;
}
.item{
    padding-right: 40px;
    flex: 1;
    text-align: center;
    padding: 1rem;
}
#what .items .item i{
    background: orange;
    padding: 1rem;
    border-radius: 50%;
    margin-bottom: 1rem;
}

    </style>
</head>
<body>
    <nav id="navbar">
        <div class="container">
            <h1 class="logo"><a href="#"> <span style="color: orange;">F</span>or <span style="color: orange;">Y</span>ou</a></h1>
            <ul>
                <li><a class="active" href="home1.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="coding.html">Coding</a></li>
                <li><a href="/loginsystem/signup.php">Placements</a></li>
           
           
            </ul>
        </div>
    </nav>
    <div id="showcase">
        <div class="container">
            <div class="showcase-content">
                <h1><span style="color: orange;"> WARM</span> WELCOME TO YOU</h1>
                <p class="line"> In these you are going to explore files related to your academics ,coding and mock test</p>
                <p class="line">Access your academic files</p>
                <a class="btn" href="home1.html">Begin</a>
            </div>

        </div>

    </div>
    <section id="what" class="bg-light-py-1">
        <div class="container">
            <h2 class="m-heading text-center"><span style="color: orange;"> LETS</span> Begin</h2>
            <div class="items">
                <div class="item">
                  <a href="home.html">  <i class="fas fa-university fa-2x"></i></a>
                    
                    <div>
                        <h3>
                            Access Your Academic  Files
                        </h3>
                        <p class="line"> From these you can access your files</p>
                    </div>
                </div>
                <div class="item">
                    <a href="aws link.html"><i class="fas fa-company fa-2x"></i></a>
                    
                    <div>
                        <h3>
                            Access AWS modules
                        </h3>
                        <p class="line"> From these you can access AWS files</p>
                    </div>
                </div>
                <div class="item">
                    <a href="coding.html"><i class="fas fa-laptop fa-2x"></i></a>
                            <div>
                        <h3>
                            Attempt Mock Test
                        </h3>
                        <p class="line"> From these you can access Mock Test</p>
                    </div>
                </div>

            </div>
        </div>

    </section>
</body>
</html>
