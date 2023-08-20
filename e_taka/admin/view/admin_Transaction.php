<?php
// Start session
session_start();

// Retrieve session data
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';

// Include and initialize JSON class
require_once '../model/admin_TransactionFunctions.class.php';
$db = new Json();

// Fetch the member's data
$members = $db->getRows();

// Get status message from session
if(!empty($sessData['status']['msg']))
{
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}

?>

<!-- Display status message -->
<?php if(!empty($statusMsg) && ($statusMsgType == 'success'))
{
?>

<div class="col-xs-12">
    <div class="alert alert-success"><?php echo $statusMsg; ?></div>
</div>

<?php
}
elseif(!empty($statusMsg) && ($statusMsgType == 'error'))
{
?>

<div class="col-xs-12">
    <div class="alert alert-danger"><?php echo $statusMsg; ?></div>
</div>

<?php
}
?>

<div class="row" align="center">
    <div class="col-md-12 head">
        <h5>Transaction Statements</h5>
        <!-- Add link -->
        <div class="float-right">
            <a href="admin_CreateNewTrans.php" class="btn btn-success"><i class="plus"></i> Create New Transaction</a>
            <a href="admin_Dashboard.php" class="btn btn-warning">Back</a>
            
            
        </div>
    </div>

    <!-- List the users -->
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>##</th>
                <th>USERNAME</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Residence</th>
                <th>Amount</th>
                <th>##Controls##</th>
            </tr>
        </thead>
        <tbody>

            <?php
               if(!empty($members))
               {
                  $count = 0;
                  foreach($members as $row)
                  {
                     $count++;
            ?>

            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['mobile_number']; ?></td>
                <td><?php echo $row['residence']; ?></td>
                <td><?php echo $row['amount']; ?></td>
                <td>
                    <a href="admin_CreateNewTrans.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">edit</a>
                    <a href="../controller/admin_TransControl.php?action_type=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete?');">delete</a>
                   
                </td>
            </tr>

            <?php
                  }
               }
               else
               {
            ?>

            <tr><td colspan="6">No Account Holder(s) found...</td></tr>

            <?php
               }
            ?>

        </tbody>
    </table>
</div>
