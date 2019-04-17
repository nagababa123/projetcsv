<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
    <head>
        <title>Export Mysql Data to CSV File in Codeigniter</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container box">
            <h3 align="center">Export Mysql Data to CSV File in Codeigniter</h3>
            <br />
            <form method="post" action="<?php echo base_url(); ?>C_export_csv/export">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="panel-title">Student Data</h3>
                            </div>
                            <div class="col-md-6" align="right">
                                <input type="submit" name="export" class="btn btn-success btn-xs" value="Export to CSV" />
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Student Name</th>
                                    <th>Student Phone</th>
                                    <th>image</th>
                                </tr>
                                <?php
                                foreach ($student_data->result_array() as $row) {
                                    echo '
        <tr>
         <td>' . $row['student_name'] . '</td>
         <td>' . $row['student_phone'] . '</td>
             <td>' . $row['image'] . '</td>
        </tr>
        ';
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
