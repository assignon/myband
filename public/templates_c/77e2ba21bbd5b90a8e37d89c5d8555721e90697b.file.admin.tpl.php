<?php /* Smarty version Smarty-3.1.18, created on 2016-10-27 01:00:05
         compiled from "..\webApp\vieuws\tpl_files\private\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14796580ee0265dadc4-94540383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77e2ba21bbd5b90a8e37d89c5d8555721e90697b' => 
    array (
      0 => '..\\webApp\\vieuws\\tpl_files\\private\\admin.tpl',
      1 => 1477530002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14796580ee0265dadc4-94540383',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580ee026649b25_67485659',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580ee026649b25_67485659')) {function content_580ee026649b25_67485659($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/css/admin.css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="../public/javascript/admin.js"></script>
        <title>Admin</title>
  </head>
  <body>

      <header>
     
        <div id="core">
           
            <div id="forms">
                
                <div class="sign" id="signin">
                    <p id="signupError"></p>
                    <img src="" alt="" id="avatar">
                    
                    <form action="" method="post">
                        
                        <input type="text" name="username" placeholder="Admin Name">
                        
                        <div id="passub">
                        
                          <input type="password" name="password" placeholder="Admin Password">
                        
                          <input type="submit" name="signin" value="SignIn" >
                        
                        </div>
                        
                    </form>
                    
                </div>
                
                <div class="sign" id="signUp">
                    
                    <form action="" method="post">
                        <p id="error"></p>
                        <input type="text" name="username" placeholder="Admin Name" id="user">
                        
                        <input type="email" name="email" placeholder="Admin Email" id="email">
                        
                        <input type="password" name="password" placeholder="Admin Password" id="pass">
                        
                        <div id="choice">
                            
                            <div id="signed"><p id="login">SignIn</p></div>
                            <input type="submit" name="signup" value="SignUp">
                            
                        </div>
                        
                    </form>
                    
                </div>
                
            </div>
            
            <div id="option">
                
                <div class="options"></div>
                <div class="options"></div>
                <div class="options"></div>
                <div class="options"></div>
                
            </div>
            
        </div>
      
      </header>
    
      <footer>
        
        
        
      </footer>
    
    </body>
</html>
    
<?php }} ?>
