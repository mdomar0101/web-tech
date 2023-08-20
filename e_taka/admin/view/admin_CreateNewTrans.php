<?php
// Start session
session_start();

// Retrieve session data
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';

// Get member data
$memberData = $userData = array();
if(!empty($_GET['id']))
{
    // Include and initialize JSON class
    include '../model/admin_TransactionFunctions.class.php';
    $db = new Json();

    // Fetch the member data
    $memberData = $db->getSingle($_GET['id']);
}

$userData = !empty($sessData['userData'])?$sessData['userData']:$memberData;
unset($_SESSION['sessData']['userData']);

$actionLabel = !empty($_GET['id'])?'Edit':'Add';

// Get status message from session
if(!empty($sessData['status']['msg']))
{
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}

?>

<!-- Display status message -->

<?php
   if(!empty($statusMsg) && ($statusMsgType == 'success'))
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
    <div class="col-md-12">
        <h2><?php echo $actionLabel; ?> Transaction Process</h2>
    </div>
    <div class="col-md-6">
      <form method="post" action="../controller/admin_TransControl.php">
         <div class="form-group">
            <label>USERNAME</label>
               <input type="text" class="form-control" name="username" placeholder="Enter USERNAME" value="<?php echo !empty($userData['username'])?$userData['username']:''; ?>" required="">
         </div>
         <div class="form-group">
            <label>Email Address</label>
               <input type="email" class="form-control" name="email" placeholder="Enter Email Address" value="<?php echo !empty($userData['email'])?$userData['email']:''; ?>" required="">
         </div>
         <div class="form-group">
             <label>Phone Number</label>
             <input type="text" class="form-control" name="mobile_number" value=""placeholder="Enter contact number" value="<?php echo !empty($userData['mobile_number'])?$userData['mobile_number']:''; ?>" required="">
         </div>
         <div class="form-group">
             <label>Living Address</label>
             <input type="text" class="form-control" name="residence" placeholder="Enter Living Address" value="<?php echo !empty($userData['residence'])?$userData['residence']:''; ?>" required="">
         </div>
         <div class="form-group">
             <label>Amount of Transaction</label>
             <input type="number" class="form-control" name="amount" min="1" max="20000" placeholder="Enter Total Amount" value="<?php echo !empty($userData['amount'])?$userData['amount']:''; ?>" required="">
         </div>

         <a href="admin_Transaction.php" class="btn btn-secondary">Back</a>
         <input type="hidden" name="id" value="<?php echo !empty($memberData['id'])?$memberData['id']:''; ?>">
         <input type="submit" name="userSubmit" class="btn btn-success" value="Submit">
     </form>
    </div>
</div>
