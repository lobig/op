<?php

// Include config file
include '../config/db/db_conn.php';

// Define variables and initialize with empty values
$regemail = $regpwd = $confirm_regpwd = "";
$regemail_err = $regpwd_err = $confirm_regpwd_err = "";
/*
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Validate username
    if(empty(trim($_POST["regemail"]))){
        $regemail_err = "Kérlek adj meg egy e-mail címet!";
    } else{
        // Prepare a select statement
        $sql = "SELECT RegistrationEmailAddress FROM users WHERE RegistrationEmailAddress = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["regemail"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // store result 
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $regemail_err = "A megadott e-mail címmel már regisztráltak.";
                } else{
                    $regemail = trim($_POST["regemail"]);
                }
            } else{
                echo "Hoppá! Valami hiba történt.";
            }
            
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["regpwd"]))){
        $regpwd_err = "Kérlek adj meg egy jelszót!";
    } elseif(strlen(trim($_POST["regpwd"])) < 6){
        $regpwd_err = "A jelszó legalább 6 karakterből álljon!";
    } else{
        $regpwd = trim($_POST["regpwd"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_regpwd"]))){
        $confirm_regpwd_err = "Kérlek add meg a jelszó megerősítést!";
    } else{
        $confirm_regpwd = trim($_POST["confirm_regpwd"]);
        if(empty($regpwd_err) && ($regpwd != $confirm_regpwd)){
            $confirm_regpwd_err = "A két jelszó nem egyezik!";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($regemail_err) && empty($regpwd_err) && empty($confirm_regpwd_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (RegistrationEmailAddress, Password) VALUES (?, ?)";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $regemail;
            $param_password = password_hash($regpwd, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: index.php");
            } else{
                echo "Valami hiba történt. Kérlek próbáld meg később!";
            }
            
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
*/

?>

<!-- regModal -->
<div class="modal fade modal-top p-0" id="regModal" data-backdrop="true">
	<div class="modal-dialog ml-auto max-width-100">
		<div class="modal-content rounded-0">
			<div class="modal-header rounded-0 LavenderBlush">
			<h3 class="modal-title">Regisztráció</h3>
				<button type="button" class="close" data-dismiss="modal" style="padding-top: 22px;"><span aria-hidden="true"><span class="fa fa-times"></span></span></button>
			</div>
			<div class="modal-body LavenderBlush">
				<div class="form-group">
					<label for="regemail">E-mail cím:</label>
					<input type="email" class="form-control" placeholder="" id="regemail" name="regemail">
				</div>
				<div class="form-group">
					<label for="regpwd">Jelszó:</label>
					<input type="password" class="form-control" placeholder="" id="regpwd" name="regpwd">
					<small id="passwordHelpInline" class="text-muted">A jelszó 8-20 karakter hosszú lehet, és tartalmaznia kell kis- és nagybetűket, valamint számokat.</small>      
				</div>
				<div class="form-group">
					<label for="confirm_regpwd">Jelszó mégegyszer:</label>
					<input type="password" class="form-control" placeholder="" id="confirm_regpwd" name="confirm_regpwd">
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					<label class="form-check-label" for="defaultCheck1">A <a class="text-info" data-toggle="modal" data-target="#userModal">Felhasználói feltételek</a>et és az <a class="text-info" data-toggle="modal" data-target="#gdprModal">Adatvédelmi szabályzat</a>ot elfogadom.</label>
				</div>
			</div>
			<div class="modal-footer LavenderBlush">
				<div class="form-group">
					
						<input type="submit" class="btn btn-info btn-block" data-dismiss="modal" value="Regisztráció">
					
				</div>
			</div>
		</div>
	</div>
</div>




