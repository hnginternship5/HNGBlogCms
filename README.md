# Ziki

Each team is to come up with 2 different themes for the site. The teams will have to collaborate to create the following:

- The blogging experience
- Authentication (which should only be possible via google or via facebook, there is no native auth)
- Commenting
- Customisation of the sidebar
- Uploading of the profile image

*This app is to be created *without a database*! The posts are to be stored as markdown files.*
_There should be a settings.json file that saves other things like auth token and so on.
To design their themes, each team will need a designer - and not all designers right now are getting positive comments from me. Please recruit the designers I am currently liking their work into your team._

## Installation

**This project works with PHP**

- `git clone https://github.com/hnginternship5/ziki`
- cd into the folder or directory
  #Step 1
- `php -S localhost:8000`
- open browser `http://localhost:8000`  
  OR
  #Step 2
- `use XAMPP or WAMPP`

### Notice

- For every task you, dont push to Master!!!
- All icons are on the designs. Dont use Font Awesome. Thanks.
- Create a well detailed Pull Request please. Add screenshots of tasks done. So we wont take time to review your PR.
- Please and Please , dont override peoples work. So there won't be conflicts up and down.
- Thanks . Enjoy!!!

### To add the page loader to your php file

- your page has to be using the universal `head-tag.php` file, inlude it in your `<head>` tag using:

```php
     <?php
        $title = "title of page"
        include 'head-tag.php';
      ?>
```

- copy the div with id of "loader-container" like this:
  ```html
  <div id="loader-container">
    <div id="loader"></div>
  </div>
  ```
- and add it just after the opening `<body>` tag, then add an id of "content" to the main element with all the content

```html
<div id="content">
  <!-- main content in here -->
</div>
```

#### so everything should look like this:

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- head tag of every page -->
    <?php
        $title = "title of page" 
        include 'head-tag.php';
    ?>
  </head>
  <body>
    <div id="loader-container">
      <div id="loader"></div>
    </div>

    <div id="content">
      <!-- main content in here -->
    </div>
    <!-- footer of everypage -->
    <?php include 'footer-tag.php'?>
  </body>
</html>
```
