<!DOCTYPE html>
<html>
	<head>
	<title>Ziki | DragonBones</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="light-theme.css">
	</head>
	
	<body>
        <div class="container">
            <aside class="side-bar">
                <div class="side-bar-info">
                    <!--https://images.unsplash.com/photo-1516790987203-731c5d30f489?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1534&q=80-->
                    <div class="img-holder">
                    </div>
                    <h3 class="user-name">Ogundiji Bolade</h3>
                    <h4 class="user-skill">Product Designer</h4>
                    <h6 class="view-profile"><a href="#">View my Profile</a></h6>
                    <div class="social-media">
                        <ul>
                            <li>Home</li>
                            <li>Twitter</li>
                            <li>RSS</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <ul class="side-bar-menu">
                    <li>Post</li>
                    <li>Articles</li>
                    <li>Publication</li>
                </ul>
            </aside>

            <section class="main-section">
                <div class="make-post-editor">
                    <h4>Share an update</h4>
                    <div></div>
                    <form method="POST" action="https://ziki.hng.tech/post.php">
                    <textarea name="body" placeholder="WRITE SOMETHING ..."></textarea>

                    <button class="button-publish">Post</button>
                    </form>
                </div>

                <div class="main-section-articles">
                    
                </div>
            </section>
        </div>
    </body>
    <script src="https://ziki.hng.tech/post.php/dragonbones/app.js"></script>
</html>
