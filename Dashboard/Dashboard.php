<?php

include("DashboardConf/db-Read.php")

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dashboars VOSIMMO</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Files Links -->

        <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
        <link rel="stylesheet" href="assets/css/Dashboard.css">
        <!--fonts style -->

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-xs-6">
                            <h2>Manage <b>Propertys</b></h2>
                        </div>
                        <div class="col-xs-6">
                            <a href="#addPropertyModal" class="btn btn-success" data-toggle="modal"><i
                                        class="material-icons">&#xE147;</i> <span>Add New Property</span></a>
                            <a href="#deletePropertyModal" class="btn btn-danger" data-toggle="modal"><i
                                        class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>
								<span class="custom-checkbox">
									<input type="checkbox" id="selectAll">
									<label for="selectAll"></label>
								</span>
                        </th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Location</th>
                        <th>Type</th>
                        <th>Rate</th>
                        <th>Etat</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
<?php
if ($result_r->num_rows > 0) {

    while ($row = $result_r->fetch_assoc()) {

        echo "
                <tr>
                    <td>
								<span class='custom - checkbox'>
									<input type='checkbox' id='checkbox1' name='options[]' value='1'>
									<label for='checkbox1'></label>
								</span>
                    </td>
                    <td>" .$row['img']. "</td>
                    <td>" .$row['prix']. "</td>
                    <td>" .$row['location']. "</td>
                    <td>" .$row['type']. "</td>
                    <td>" .$row['rate']. "</td>
                    <td>" .$row['etat']. "</td>
                    <td>
                      <a href='#editPropertyModal' class='edit' data-toggle='modal'><i class='material-icons'
                                                                                         data - toggle = 'tooltip'
                                                                                         title = 'Edit' >&#xE254;</i></a>
                        <a href = '#deletePropertyModal' class='delete' data - toggle = 'modal' ><i class='material-icons'
                                                                                             data - toggle = 'tooltip'
                                                                                             title = 'Delete' >&#xE872;</i></a>
                    </td >
                </tr >";
               }
                }
                ?>

                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint - text">Showing <b>1</b> out of <b>2</b> entries</div>
                <ul class="pagination">
                    <li class="page - item disabled"><a href="#">Previous</a></li>
        < li class="page-item active" ><a href = "#" class="page-link" > 1</a ></li >
                    <li class="page-item" ><a href = "#" class="page-link" > 2</a ></li >
                    <li class="page-item" ><a href = "#" class="page-link" > Next</a ></li >
                </ul >
            </div >
        </div >
    </div >
</div >

<div id = "addPropertyModal" class="modal fade" >
    <div class="modal-dialog" >
        <div class="modal-content" >
            <form action = "DashboardConf/db-Create.php" method = "POST" >
                <div class="modal-header" >
                    <h4 class="modal-title" > Add Property </h4 >
                    <button type = "button" class="close" data - dismiss = "modal" aria - hidden = "true" >&times;</button >
                </div >
                <div class="modal-body" >
                    <div class="form-group" >
                        <label > Image</label >
                        <input type = "text" name = "Image_c" class="form-control" required >
                    </div >
                    <div class="form-group" >
                        <label > Price</label >
                        <input type = "number" name = "Price_c" class="form-control" required >
                    </div >
                    <div class="form-group" >
                        <label > Location</label >
                        <input type = "text" name = "Location_c" class="form-control" required >
                    </div >
                    <div class="form-group" >
                        <label > Type</label >
                        <input type = "tel" name = "Type_c" maxlength = "1" pattern = "[0-2]" class="form-control" required >
                    </div >
                    <div class="form-group" >
                        <label > Rate</label >
                        <input type = "tel" name = "Rate_c" maxlength = "1" pattern = "[0-5]" class="form-control" required >
                    </div >
                    <div class="form-group" >
                        <label > Etat</label >
                        <input type = "tel" name = "Etat_c" maxlength = "1" pattern = "[0-2]" class="form-control" required >
                    </div >
                </div >
                <div class="modal-footer" >
                    <input type = "button" class="btn btn-default" data - dismiss = "modal" value = "Cancel" >
                    <input type = "submit" class="btn btn-success" value = "Add" >
                </div >
            </form >
        </div >
    </div >
</div >

<div id = "editPropertyModal" class="modal fade" >
    <div class="modal-dialog" >
        <div class="modal-content" >
            <form action = "DashboardConf/db-update.php" method = "POST">
                <div class="modal-header" >
                    <h4 class="modal-title" > Edit Property </h4 >
                    <button type = "button" class="close" data - dismiss = "modal" aria - hidden = "true" >&times;</button >
                </div >
                <div class="modal-body" >
                    <div class="form-group" >
                        <label > Image</label >
                        <input type = "text" name = "Image_u" class="form-control" required >
                    </div >
                    <div class="form-group" >
                        <label > Price</label >
                        <input type = "number" name = "Price_u" class="form-control" required >
                    </div >
                    <div class="form-group" >
                        <label > Location</label >
                        <input type = "text" name = "Location_u" class="form-control" required >
                    </div >
                    <div class="form-group" >
                        <label > Type</label >
                        <input type = "tel" name = "Type_u" maxlength = "1" pattern = "[0-2]" class="form-control" required >
                    </div >
                    <div class="form-group" >
                        <label > Rate</label >
                        <input type = "tel" name = "Rate_u" maxlength = "1" pattern = "[0-5]" class="form-control" required >
                    </div >
                    <div class="form-group" >
                        <label > Etat</label >
                        <input type = "tel" name = "Etat_u" maxlength = "1" pattern = "[0-2]" class="form-control" required >
                    </div >
                </div >
                <div class="modal-footer" >
                    <input type = "button" class="btn btn-default" data - dismiss = "modal" value = "Cancel" >
                    <input type = "submit" class="btn btn-success" value = "Save" >
                </div >

            </form >
        </div >
    </div >
</div >

<div id = "deletePropertyModal" class="modal fade" >
    <div class="modal-dialog" >
        <div class="modal-content" >
            <form action = "DashboardConf/db-delete.php" method = "POST">
                <div class="modal-header" >
                    <h4 class="modal-title" > Delete Property </h4 >
                    <button type = "button" class="close" data - dismiss = "modal" aria - hidden = "true" >&times;</button >
                </div >
                <div class="modal-body" >
                    <p > Are you sure you want to delete these Records ?</p >
                    <p class="text-warning" ><small > This action cannot be undone .</small ></p >
                </div >
                <div class="modal-footer" >
                    <input type = "button" class="btn btn-default" data - dismiss = "modal" value = "Cancel" >
                    <input type = "submit" class="btn btn-danger" value = "Delete" >
                </div >
            </form >
        </div >
    </div >
</div >
</body >

<!--Script -->

<script src = "assets/js/Dashboard.js" >

</script >

<!--End Script-- >
</html >
