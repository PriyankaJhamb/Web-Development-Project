<!--
The parent <div> of the modal must have an ID that is the same as the value of the data-target attribute used to trigger the modal ("myModal").

The .modal class identifies the content of <div> as a modal and brings focus to it.

The .fade class adds a transition effect which fades the modal in and out. Remove this class if you do not want this effect.

The attribute role="dialog" improves accessibility for people using screen readers.

The .modal-dialog class sets the proper width and margin of the modal.

The "Modal content" part:

The <div> with class="modal-content" styles the modal (border, background-color, etc.). Inside this <div>, add the modal's header, body, and footer.

The .modal-header class is used to define the style for the header of the modal. The <button> inside the header has a data-dismiss="modal" attribute which closes the modal if you click on it. The .close class styles the close button, and the .modal-title class styles the header with a proper line-height.

The .modal-body class is used to define the style for the body of the modal. Add any HTML markup here; paragraphs, images, videos, etc.

The .modal-footer class is used to define the style for the footer of the modal. Note that this area is right aligned by default.
-->

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title text-center">
            Login
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="glyphicon glyphicon-remove"></span>
        </button>
        </h2>
      </div>
      <div class="modal-body">
            <form class="form" action="login_script.php" method="POST">
                <div class="form-group">
                    <p>Don't have an Account? <a href="signup.php">Register</a></p>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" pattern=".{6,}" placeholder="Enter Password" required>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary" data-dismiss="modal">Login</button>
                </div>
                <div class="form-group">
                    <p><a href="#">Forgot Password?</a></p>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>
