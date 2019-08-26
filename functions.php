<?php

function pedidoOracao(){
    $to = 'contato@ministeriosemearbrasilia.com.br';
    $name = $_POST["nome"];
    $email= $_POST["email"];
    $telefone= $_POST["telefone"];
    $msg= $_POST["msg"];
    
 
 
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
    $message ='  <table style="width:100%">
                 <tr>
                     <td>'.$name.'  '.$telefone.'</td>
                 </tr>
                 <tr><td>Email: '.$email.'</td></tr>
                 <tr><td>phone: '.$telefone.'</td></tr>
                 <tr><td>Text: '.$msg.'</td></tr>
 
                 </table>
                 ';
 
    if (@mail($to, $email, $message, $headers))
    {
        echo 'Sua mensagem foi enviada';
    }else{
        echo 'failed';
    }
    
}