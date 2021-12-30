<?php require_once dirname(__FILE__).'/partials/dbClass.php';

$dbConnection=new Database();
require_once dirname(__FILE__).'/partials/header.php';

?>

<body>

    <!--Form Modal -->
    <?php require_once dirname(__FILE__).'/partials/form.php'; ?>

    <div class="container-fluid mb-3">
        <h3 class="bg-warning text-dark text-center py-3">PHP Advance CRUD</h3>
    </div>

    <div class="container">
       
        <div class="row">
            <div class="col-10">
                <div class="input-group mb-3">

                    <div class="input-group flex-nowrap">
                    <span class="input-group-text bg-dark" > <i class="fas fa-search text-light"></i> </span>
                    <input type="text" class="form-control" placeholder="Search user..." >
                    </div>

                </div>
            </div>
            
            <div class="col-2">
                
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#userModal">Add New </button>

            </div>

        </div>
    </div>

    <!-- Table -->
    <?php require_once dirname(__FILE__).'/userProfile.php';?>
    <div class="container">
            <table class="table" id=" userDatable">
        <thead class="table-dark">
            <tr>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>
               <a title="View Profile" href="#" class="me-3"> <i class="fas fa-eye text-success  profile" data-bs-toggle="modal" data-bs-target="#userViewModal"></i> </a>
               <a title="Edit User" href="#" class="me-3"> <i class="fas fa-edit text-warning editUser" data-bs-toggle="modal" data-bs-target="#userModal"></i> </a>
               <a title="Delete User" href="#" class="me-3"> <i class="fas fa-trash text-danger deleteUser " data-bs-toggle="modal" data-bs-target="#deletUserModal"></i> </a>
            </td>
            </tr>
           
        </tbody>
        </table>
    </div>

    <div class="container my-3 d-flex justify-content-center">
    <nav id="pagination">
        <ul class="pagination">
            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
    </div>

  
   

    
</body>
</html>