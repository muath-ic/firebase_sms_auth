<!DOCTYPE html>
<html lang="en">
<head>
 <title>Bootstrap Example</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.orange-indigo.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
   <div class="row">
    <div class="col-md-12">
                   <div class="row">
                       <div class="col-md-12">
                      <h3><center> <img src="sd.PNG" width="5%"/>
                                    Firebase Phone Auththentication With Laravel</center></h3>
                       </div>
                   </div>
               <div>
                   <form id="sign-in-form" action="#">
                   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                     <input class="mdl-textfield__input" type="text" pattern="\+[0-9\s\-\(\)]+"

                                                         id="phone-number">
                     <label class="mdl-textfield__label" for="phone-number">
                                                         Enter your Mobile number..</label>
                     <span class="mdl-textfield__error">Input is not an international M number!</span>
                   </div>

                   <button class="btn btn-primary" id="sign-in-button">Sign-in</button>
                 </form>

                 <button class="mdl-button mdl-js-button mdl-button--raised" id="sign-out-button">
                 Sign-out</button>
                 <form id="verification-code-form" action="#">
                   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                     <input class="mdl-textfield__input" type="text" id="verification-code">
                     <label class="mdl-textfield__label" for="verification-code">
                      Enter the verification code...</label>
                   </div>
                   <input type="submit" class="btn btn-success"

                    id="verify-code-button" value="Verify Code"/>
                   <button class="btn btn-danger" id="cancel-verify-code-button">Cancel</button>
                 </form>
               </div>
   </div>
   </div>
   <br />
   <br />
   <div class="row">
       <div class="col-md-12">
           <div class="card card-default">
               <div class="card-header">
                   <div class="row">
                       <div class="col-md-12">
                           <h4>User Login Information</h4>
                       </div>
                   </div>
               </div>

               <div>
                   <div>
                       Firebase sign-in status: <span id="sign-in-status">Unknown</span>
                       <div>Firebase auth <code>User Details</code> object value:</div>
                       <pre><code id="account-details">No User Login</code></pre>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
