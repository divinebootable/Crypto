<?php
session_start();
$_SESSION['msg'] = '';
include "db_config.php";
$error = "username/password incorrect";
 
            if(isset($_POST['login'])){
              $username = $_POST['username'];
              $password = $_POST['password'];

                if($password == "" && $username == ""){
                  ?>
                    <script language="JavaScript">
                        alert(' Please fill form!');
                        document.location='../login.php';
                    </script>
                    <?php
                } else{
                           $result =$conn->query("select * from users where email='".$username."'AND password='".$password."' limit 1");

                             if($result){
                                 
                                    if($result->num_rows > 0){

                                      $found_user = mysqli_fetch_array($result);

                                      $_SESSION['username'] = $found_user['username'];
                                      $_SESSION['password'] = $found_user['password'];
                                      

                                           if($found_user){
                                            $_SESSION['user'] = $username;

                                              header("location:../Dashboard/dashboard.php");
                                             }else{
                                                     ?>
                                                <script language="JavaScript">
                                                  alert(' wrong info!');
                                                  document.location='../login.php';
                                              </script>
                                                <?php

                                             }
                                           }else{
                                               $_SESSION['error'] = $error;
                                               header("location:../login.php");
                                           }
                                    }  else{
                                                ?>
                                                <script language="JavaScript">
                                                  alert(' Please fill form!');
                                                  document.location='../login.php';
                                              </script>
                                                <?php
                                              }
                             

                }
              
             }

            
             
?>