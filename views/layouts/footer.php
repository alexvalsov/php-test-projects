<!-- FOOTER -->

<footer id="main-footer" class="bg-dark text-white mt-5 p-5">
  <div class="container">
    <div class="row">
      <div class="col">
        <p class="lead text-center">
          Copyright &copy; <span id="year"></span>
          Blogen
        </p>
      </div>
    </div>
  </div>
</footer>

<!-- MODALS -->

<!-- ADD POST MODAL -->
<div class="modal fade" id="addPostModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Add Post</h5>
        <button class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control"/>
          </div>
          <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control">
              <option value="">Web Development</option>
              <option value="">Tech Gadgets</option>
              <option value="">Business</option>
              <option value="">Health & Wellness</option>
            </select>
          </div>
          <div class="form-group">
            <label for="image">Upload Image</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="image"/>
              <labe for="image" class="custom-file-label">Choose File</labe>
            </div>
            <small class="form-text text-muted">Max Size 3mb</small>
          </div>
          <div class="form-group">
            <label for="body">Body</label>
            <textarea name="editor1" class="form-control"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-dismiss="modal">
          Save Changes
        </button>
      </div>
    </div>
  </div>
</div>

<!-- ADD CATEGORY MODAL -->
<div class="modal fade" id="addCategoryModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title">Add Category</h5>
        <button class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control"/>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" data-dismiss="modal">
          Save Changes
        </button>
      </div>
    </div>
  </div>
</div>

<!-- ADD USER MODAL -->
<div class="modal fade" id="addUserModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-warning text-white">
        <h5 class="modal-title">Add User</h5>
        <button class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control"/>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control"/>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control"/>
          </div>
          <div class="form-group">
            <label for="password2">Confirm Password</label>
            <input type="password" class="form-control"/>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning" data-dismiss="modal">
          Save Changes
        </button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script type="text/javascript" src="/template/js/vendors.792098cec8803b4f9852.js"></script>
<script type="text/javascript" src="/template/js/app.b463c538aa7ffd8f31cb.js"></script></body>
</html>