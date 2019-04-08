<div class="row">
  <div class="col-sm-9">
    <div class="row">
      <img class="img-responsive profile-pic" src="images/fiverr.jpg" alt="author picture">
      <div class="row text-center">
        <h3>TONI ATUNRASE</h3>
        <h4 class="occupation">Web/Software Developer</h4>
        <p>Software Engineer at AWS design enthusiast and music lover</p>
        <a href=""><i class="fa fa-paperclip"></i> hng/toni</a>
      </div>
    </div>
    <hr>
    <div class="row">
      <ul class="side_nav">
        <li><a class="side_nav" href="<?= myUrl(''); ?>">Home</a></li>
        <li><a class="side_nav" href="<?= myUrl('draft.php'); ?>">Drafts</a></li>
        <li><a class="side_nav" href="<?= myUrl('journal.php'); ?>">My Journal</a></li>
        <li><a class="side_nav" href="<?= myUrl('journal.php'); ?>">Other Journals</a></li>
        <li><a class="side_nav" href="" data-toggle="modal" data-target="#profile">Profile</a></li>
        <li><a class="side_nav" href="/Authentication/login.php">Sign In</a></li>
      </ul>
    </div>
  </div>
</div>

  <!-- Modal -->
<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div> -->
      <div class="modal-body">
    <div class="avatar text-center">
      <img src="https://res.cloudinary.com/djxdnzlej/image/upload/v1554376001/pp.jpg" class="img-circle"/>
    </div>
    <div class="profile-form">
      <form role="form" class="form-horizontal">
        <div class="form-group col-sm-12">
          <label>Name</label>
          <input class="form-control" type="text" name="" value="Toni Aturanse" />
        </div>
        <div class="form-group col-sm-12">
          <label>Bio</label>
          <textarea class="form-control"  name=""> Software Engineer at AWS, design enthusiast and music lover</textarea>
        </div>
        <div class="form-group col-sm-12">
          <label>Website</label>
          <input class="form-control" type="text" name="" value="www.hng.com/toni">
        </div>
      </form>
    </div>
      </div>
    <div class="clearfix"></div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-default center-block">Save</button>
      </div>
    </div>
  </div>
</div>
