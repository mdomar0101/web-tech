<?php
// Start session
session_start();

// Include and initialize DB class
require_once '../model/admin_TransactionFunctions.class.php';
$db = new Json();

// Set default redirect url
$redirectURL = '../view/admin_Transaction.php';

if(isset($_POST['userSubmit']))
{
    // Get form fields value
    $id = $_POST['id'];
    $username = trim(strip_tags($_POST['username']));
    $email = trim(strip_tags($_POST['email']));
    $mobile_number = trim(strip_tags($_POST['mobile_number']));
    $residence = trim(strip_tags($_POST['residence']));
    $amount = trim(strip_tags($_POST['amount']));

    $id_str = '';
    if(!empty($id))
    {
        $id_str = '?id='.$id;
    }

    // Fields validation
    $errorMsg = '';
    if(empty($username))
    {
        $errorMsg .= '<p><font color=red>Please enter the expected username.</p>';
    }
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $errorMsg .= '<p><font color=red>Please enter a valid email.</p>';
    }
    if(empty($mobile_number))
    {
        $errorMsg .= '<p><font color=red>Please enter contact no.</p>';
    }
    if(empty($residence))
    {
        $errorMsg .= '<p>Please enter the expected living address</p>';
    }
    if(empty($amount))
    {
        $errorMsg .= '<p>Please enter the expected balance</p>';
    }

    // Submitted form data
    $userData = array(
        'username' => $username,
        'email' => $email,
        'mobile_number' => $mobile_number,
        'residence' => $residence,
        'amount' => $amount
    );

    // Store the submitted field value in the session
    $sessData['userData'] = $userData;

    // Submit the form data
    if(empty($errorMsg))
    {
        if(!empty($_POST['id']))
        {

            // Update user data
            $update = $db->update($userData, $_POST['id']);

            if($update)
            {
                $sessData['status']['type'] = 'success';
                $sessData['status']['msg'] = 'Data has been updated successfully.';

                // Remove submitted fields value from session
                unset($sessData['userData']);
            }
            else
            {
                $sessData['status']['type'] = 'error';
                $sessData['status']['msg'] = 'Something unexpected occurred, please try again.';

                // Set redirect url
                $redirectURL = '../view/admin_CreateNewTrans.php'.$id_str;
            }
        }
        else
        {
            // Insert user data
            $insert = $db->insert($userData);

            if($insert)
            {
                $sessData['status']['type'] = 'success';
                $sessData['status']['msg'] = 'New DATA has been created successfully.';

                // Remove submitted fields value from session
                unset($sessData['userData']);
            }
            else
            {
                $sessData['status']['type'] = 'error';
                $sessData['status']['msg'] = 'Some problem occurred, please try again.';

                // Set redirect url
                $redirectURL = '../view/admin_CreateNewTrans.php'.$id_str;
            }
        }
    }
    else
    {
        $sessData['status']['type'] = 'error of null submission';
        $sessData['status']['msg'] = '<p>Please fill all the mandatory fields.</p>'.$errorMsg;

        // Set redirect url
        $redirectURL = '../view/admin_CreateNewTrans.php'.$id_str;
    }

    // Store status into the session
    $_SESSION['sessData'] = $sessData;
}
elseif(($_REQUEST['action_type'] == 'delete') && !empty($_GET['id']))
{
    // Delete data
    $delete = $db->delete($_GET['id']);

    if($delete)
    {
        $sessData['status']['type'] = 'success';
        $sessData['status']['msg'] = 'Data has been deleted successfully.';
    }
    else
    {
        $sessData['status']['type'] = 'error';
        $sessData['status']['msg'] = 'Some problem occurred, please try again.';
    }

    // Store status into the session
    $_SESSION['sessData'] = $sessData;
}

// Redirect to the respective page
header("Location:".$redirectURL);
exit();

?>
