<?php

/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 07.10.2016
 * Time: 22:54
 */
class LoginView
{
    public $loginBlockCSS = '<link href="/css/login.css" rel="stylesheet" type="text/css">';
    public $loginBlock = "
<div class = 'login_block'>
                <h1>Авторизация</h1>
                <form method='post' action='/'>
                    
                    <input type = 'text' name = 'login' id = 'input_login' value = 'Login'
                    onfocus=\"if (this.value == 'Login') {this.value = '';}\" onblur=\"if (this.value == '') 
                    {this.value = 'Login';}\" />
                    
                    <input type = 'password' name = 'password' id = 'input_password' placeholder = 'Password'
                    onfocus=\"if (this.placeholder == 'Password') {this.placeholder = '';}\" onblur=\"if (this.value == '') 
                    {this.placeholder = 'Password';}\" />
                    
                    <input type = 'submit' value = 'Войти' id = 'input_submit' name='s'/>
                    
                                       
                </form>
                <a href = \"/\"><button class = \"btn-danger\">Назад</button></a>
                <form method='post' action='/login'>
                    <input type='submit' value='Регистрация' id='btn-registr' class=\"btn-registr\" name='register'/>
                </form>                
            </div>
";
    public $registerBlock = "<div class='register_block'>
        <h1>Регистрация</h1>
            <form method='post' action='/login'>
                <input type = 'text' name = 'login' id = 'input_login' value = 'Login'
                    onfocus=\"if (this.value == 'Login') {this.value = '';}\" onblur=\"if (this.value == '') 
                    {this.value = 'Login';}\" />
                
                <input type = 'text' name = 'first_name' id = 'input_first_name' value = 'First Name'
                    onfocus=\"if (this.value == 'First Name') {this.value = '';}\" onblur=\"if (this.value == '') 
                    {this.value = 'First Name';}\" />
                
                <input type = 'text' name = 'last_name' id = 'input_last_name' value = 'Last Name'
                    onfocus=\"if (this.value == 'Last Name') {this.value = '';}\" onblur=\"if (this.value == '') 
                    {this.value = 'Last Name';}\" />
                
                <input type = 'text' name = 'email' id = 'input_email' value = 'E-mail'
                    onfocus=\"if (this.value == 'E-mail') {this.value = '';}\" onblur=\"if (this.value == '') 
                    {this.value = 'E-mail';}\" />        
                        
                <input type = 'password' name = 'password' id = 'input_password' placeholder = 'Password'
                    onfocus=\"if (this.placeholder == 'Password') {this.placeholder = '';}\" onblur=\"if (this.value == '') 
                    {this.placeholder = 'Password';}\" />
                    
                <input type = 'submit' value = 'Отправить' id = 'input_in' name='input_in'/>
                
                </form>
                <a href = \"/\"><button class = \"btn-danger\">Назад</button></a>
                <form method='post' action='/login'>
                    <input type='submit' value='Авторизация' id='btn-login' class=\"btn-login\" name='login'/>
                </form>
</div>
    ";

}