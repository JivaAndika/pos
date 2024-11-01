<?php
require_once __DIR__ . "/../Model/Model.php";
require_once __DIR__ . "/../Model/Categories.php";

$key = $_GET['keyword'];
$kategori = new Categories();

$limit = 2;
$pageActive = (isset($_GET['page'] ))  ? ( $_GET['page']) : 1;
$startData = $limit * $pageActive - $limit;
$length = count($kategori->all());
$countPage = ceil($length / $limit);
$num = ($pageActive - 1) * $limit + 1;
if(!$key){
  $Categories = $kategori->pagginate($startData,$limit);
} else{
  $Categories = $kategori->search($key);
 
}

?>    
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th>
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                              <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                            </div>
                          </th>
                          <th>Task Name</th>
                          <th>Action</th>
                        </tr>
                        <?php foreach($Categories  as $Categorie ):?>
                        <tr>
                          <td >
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                              <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                            </div>
                          </td>
                          <td><?= $Categorie['name'] ?></td>
                          
                          <td>
                            <a href="#" class="btn btn-primary mr-1"><i class="fas fa-info-circle"></i> Detail</a>
                            <a href="#" class="btn btn-success mr-1"><i class="far fa-edit"></i> Edit</a>
                            <a href="#" class="btn btn-danger mr-1"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                        </tr>
                        <?php endforeach ?>
                      </table>
                      <div class="d-flex justify-content-center"> 
                        <nav aria-label="Page navigation">
                          <ul class="pagination">

                            <li class="page-item ">
                              <a class="page-link" href="?page=<?= $prev ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>

                            <?php for ($i = 1; $i <= $countPage; $i++): ?>
                              <li class="page-item">
                                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                              </li>
                              <?php endfor; ?>

                            <li class="page-item">
                              <a class="page-link" href="?page=<?= $next ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          