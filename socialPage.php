<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
            .sect-1 {
                background: #000;
            }
            .img1{
                border: 5px solid #000;
                border-radius: 50%;
                width: 20%
                align-items: center;
            }
            .fab{
                padding: 4px;
            }
            hr { 
                display: block;
                margin-top: 0.5em;
                margin-bottom: 0.5em;
                margin-left: auto;
                margin-right: auto;
                border-style: inset;
                border-width: 1px;
            }
            .div-2{margin-left: 30px;}
            ul {
                list-style-type: none;
            }
            .active{color: whitesmoke}
            .fab{color: white}

            li a, .s-link {
                color: lightgrey; 
                text-decoration: none;
            }
            li a:hover{color: white; text-decoration: none;}
            a[href*="stories"] {color: red;}
            a[href*="about"], a[href*="address"] {color: whitesmoke;}
            .image-upload > input {display: none;}
            .image-upload i{cursor: pointer; font-size: 30px}
            #but{float: right; }
            .clearfix {overflow: auto;}
            .radius{border-radius: 2%;}
            textarea{border-style:none; width: 100%; margin-bottom: -5px}

        </style>
    </head>

    <body class="container-fluid">
        <header>

        </header>
        <main>
            <div class="container">
                <div class="row mt-5">
                    <section class="sect-1 col-xs-12 col-sm-12 col-md-3 col-lg-3 bg-mute">
                            <div class="mt-5 text-center">
                                <img class="img-1 img-fluid rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8EH11coBfcf4tihV3nhwBSPOP2Bytw9CfaBE8GX8z3XM2V7Nn" alt="avatar">
                                <p class="text-light">
                                    Oyedele Ridwan <br />
                                    Software Developer <br />
                                    <a class="s-link" href="#">Hotel.ng</a> <br />
                                </p>
                                <p class="bg-mute">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-medium"></i></a>
                                    <a href="#"><i class="fab fa-github"></i></a>
                                </p>
                            </div>
                            <hr />
                            <div class="div-2 mt-4">
                                <h4 style="color: Tomato;"><a href="#"><i class="fas fa-paste" style='font-size:36px'></i> Stories</a></h4>
                                <ul class="text-muted">
                                    <li class="active"><a href="#">Latest</a></li>
                                    <li><a href="#">Web Technology</a></li>
                                    <li><a href="#">Designs</a></li>
                                    <li><a href="#">Mobile Development</a></li>
                                    <li><a href="|">Machine Learning</a></li>
                                </ul>
                            </div>

                            <div class="div-2 mt-4">
                                <h4><a href="#"><i class="text-success fas fa-user" style='font-size:36px'></i> About</a></h4>
                                <ul class="text-muted">
                                    <li><a href="#">Post</a></li>
                                    <li><a href="#">Likes</a></li>
                                    <li><a href="#">Setting</a></li>
                                </ul>
                            </div>
                            <div class="div-2 mt-4">
                                <h4><a href="#"><i class="text-primary far fa-envelope" style='font-size:36px'></i> Address</a></h4>
                                <ul class="text-muted">
                                    <li><a href="#">Phones</a></li>
                                    <li><a href="#">Socila Network</a></li>
                                    <li><a href="#">Email</a></li>
                                </ul>
                            </div>
                    </section>
                    
                    <section class="col-xs-12 col-sm-12 col-md-3 col-lg-9 bg-mute" style="padding-left:30px">
                        <div class="border radius" style="margin:5% 0px 5% 20px">                            
                            <div class="media p-3" style="width:100%; height:auto">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8EH11coBfcf4tihV3nhwBSPOP2Bytw9CfaBE8GX8z3XM2V7Nn" alt="Ridwan Oyedele" class="mr-3 rounded-circle" style="width:60px;">
                                <div class="media-body mt-1 border radius p-2">
                                    <textarea type="text" name="blog_title" id="blog_title" class="blog_title" placeholder="Title ..." rows="1" wrap="soft"></textarea>
                                    <textarea name="blog_content" id="blog_content" class="blog_content" cols="2" rows="5" placeholder="Story content ..."></textarea>
                                </div>
                            </div>
                            <div class="image-upload mb-3" style="margin-left: 15%">
                                <label for="file-input">
                                    <i class="fas fa-image"></i> upload image
                                    <!-- <i class="fas fa-video"></i> -->
                                </label>                                  
                                <input id="file-input" type="file" />

                                <button type="button" class="btn btn-success clearfix mr-3" id="but">Ready to publish</button>                    
                            </div>
                        </div>

                        <div class="media border p-3 radius" style="margin:5% 0px 5% 20px">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8EH11coBfcf4tihV3nhwBSPOP2Bytw9CfaBE8GX8z3XM2V7Nn" alt="Ridwan Oyedele" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                            <div class="card-body">
                                    <h4 style="padding:0px; margin:0px 0px 8px 0px;" class="card-title">CSS Animation Story </h4>
                                    <p style="line-height:0px; font-size:12px" class="card-text text-muted font-italic">by Mark Essien</p>
                                    <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p> 
                                    
                                    <p class="text-right text-muted small font-italic">comments</p>      
                                    
                            </div>
                        </div>

                        <div class="media border p-3 radius" style="margin:5% 0px 5% 20px">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8EH11coBfcf4tihV3nhwBSPOP2Bytw9CfaBE8GX8z3XM2V7Nn" alt="Ridwan Oyedele" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                                <div class="card-body">
                                        <h4 style="padding:0px; margin:0px 0px 8px 0px;" class="card-title">CSS Animation Story </h4>
                                        <!-- <small style="font-size:12px" class="text-muted small font-italic " >Posted on April 06, 2019</small> -->
                                        <p style="line-height:0px; font-size:12px" class="card-text text-muted font-italic">by Mark Essien</p>
                                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p> 
                                        
                                        <p class="text-right text-muted small font-italic">comments</p>      
                                        
                                </div>
                            </div>

                            <div class="media border p-3 radius" style="margin:5% 0px 5% 20px">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8EH11coBfcf4tihV3nhwBSPOP2Bytw9CfaBE8GX8z3XM2V7Nn" alt="Ridwan Oyedele" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                                    <div class="card-body">
                                            <h4 style="padding:0px; margin:0px 0px 8px 0px;" class="card-title">CSS Animation Story </h4>
                                            <p style="line-height:0px; font-size:12px" class="card-text text-muted font-italic">by Mark Essien</p>
                                            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p> 
                                            
                                            <p class="text-right text-muted small font-italic">comments</p>      
                                            
                                    </div>
                                </div>

                                <div class="media border p-3 radius" style="margin:5% 0px 5% 20px">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8EH11coBfcf4tihV3nhwBSPOP2Bytw9CfaBE8GX8z3XM2V7Nn" alt="Ridwan Oyedele" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                                        <div class="card-body">
                                                <h4 style="padding:0px; margin:0px 0px 8px 0px;" class="card-title">CSS Animation Story </h4>
                                                <p style="line-height:0px; font-size:12px" class="card-text text-muted font-italic">by Mark Essien</p>
                                                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p> 
                                                
                                                <p class="text-right text-muted small font-italic">comments</p>      
                                                
                                        </div>
                                </div>

                    </section>
                </div>
            </div>

        </main>  
        
        


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>