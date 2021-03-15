<?php
include ROOT . '/views/layouts/header.php';
?>

  <!-- SEARCH -->
  <section id="search" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto">
          <div class="input-group">
            <input
              type="text"
              class="form-control"
              placeholder="Search Posts..."
            />
            <div class="input-group-append">
              <button class="btn btn-primary">Search</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Latest Posts</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Date</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>1</td>
                <td>Post One</td>
                <td>Web Development</td>
                <td>May 10 2020</td>
                <td>
                  <a href="details.html" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Post Two</td>
                <td>Tech Gadgets</td>
                <td>May 11 2020</td>
                <td>
                  <a href="details.html" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Post Three</td>
                <td>Web Development</td>
                <td>May 13 2020</td>
                <td>
                  <a href="details.html" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Post Four</td>
                <td>Business</td>
                <td>May 19 2020</td>
                <td>
                  <a href="details.html" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>Post Five</td>
                <td>Web Development</td>
                <td>May 10 2020</td>
                <td>
                  <a href="details.html" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>Post Six</td>
                <td>Health & Wellness</td>
                <td>May 20 2020</td>
                <td>
                  <a href="details.html" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
          <!-- PAGINATION -->
          <nav class="ml-4 mt-5">
            <ul class="pagination">
              <li class="page-item disabled">
                <a href="#" class="page-link">Previous</a>
              </li>
              <li class="page-item active">
                <a href="#" class="page-link">1</a>
              </li>
              <li class="page-item">
                <a href="#" class="page-link">2</a>
              </li>
              <li class="page-item">
                <a href="#" class="page-link">3</a>
              </li>
              <li class="page-item">
                <a href="#" class="page-link">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>

<?php
include ROOT . '/views/layouts/footer.php';
?>