<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?= base_url(); ?>application/views/admin/asset/css/rec_style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
        <script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script language="JavaScript" type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="col-md-12 pt-3">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <nav class="navbar navbar-dark bg-light">
                        <button type="button" class="btn btn-secondary gradient_btn">Section-1</button>
                        <button type="button" class="btn btn-secondary gradient_btn">Section-2</button>
                        <button type="button" class="btn btn-secondary gradient_btn">Section-3</button>
                        <button type="button" class="btn btn-secondary gradient_btn">Section-4</button>
                    </nav>
                </div>
            </div>
            <div class="col-md-10 mx-auto p-3 mt-4 bg-light">
                <div class="table-responsive-md">
                    <div class="col-md-12 pb-2 text-right pr-0">
                        <button type="button" class="btn btn-success px-4" href="#myModal" data-toggle="modal">Add</button>
                    </div>
                    <table class="mb-0 table table-bordered" id="myTable6">
                        <thead>
                            <tr>
                                <th>Sr.no</th>
                                <th>Data1</th>
                                <th>Data2</th>
                                <th>Data3</th>
                                <th>Data4</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < 8; $i++) { ?>
                                <tr>
                                    <td>1</td>
                                    <td>Data1</td>
                                    <td>Data2</td>
                                    <td>Data3</td>
                                    <td>Data4</td>
                                    <td>
                                        <i class="fas fa-edit ml-2 mr-2 text-primary" style="font-size:20px;cursor: pointer;"></i>
                                        <i class="fas fa-trash mr-2 text-danger" style="font-size:20px;cursor: pointer;"></i>
                                        <i class="fas fa-eye mr-2 text-info" style="font-size:20px;cursor: pointer;"></i>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Submit Required Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body p-0 pb-3">
                        <div class="col-md-12">
                            <form action="#" class="signup">
                                <div class="field">
                                    <input type="text" placeholder="Email Address" required>
                                </div>
                                <div class="field">
                                    <input type="text" placeholder="Email Address" required>
                                </div>
                                <div class="field">
                                    <input type="text" placeholder="Email Address" required>
                                </div>
                                <div class="field">
                                    <input type="text" placeholder="Email Address" required>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(
                    function () {
                        $('#myTable6').dataTable(
                                {
                                    aaSorting: [
                                        [0, 'desc']
                                    ]
                                }
                        );
                    }
            );
        </script>
    </body>
</html>