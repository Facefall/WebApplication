
<div class="">
                    <nav class="top-nav-collapse text-center"><h1>Registration</h1></nav>
                    <div class="container">
                        <form action="" method="POST">
                            <div class="form-group">
                                <p>Full Name: <span> * <?= isset($Err["FullName_Err"]) ? $Err["FullName_Err"] : "" ;?></span></p>
                                <input type="text" class="form-control" name="FullName"/>
                            </div>
                            <div class="form-group">
                                <p>Email: <span>  *<?= isset($Err["Email_Err"]) ? $Err["Email_Err"] : "" ;?> </span></p> 
                                <input type="email" class="form-control" name="Email" />
                            </div>
                            <div class="form-group">
                                <p>Mobile: <span>  *<?= isset($Err["Mobile_Err"]) ? $Err["Mobile_Err"] : "" ;?> </span></p> 
                                <input type="text" class="form-control" name="Mobile" />
                            </div>
                            <div class="form-group" style="margin-bottom:10px">
                                <p>Birth: <span>  *<?= isset($Err["Birth_Err"]) ? $Err["Birth_Err"] : "" ;?> </span></p>
                                <input type="Date" class="form-control" name="Birth" />
                            </div>
                            <hr>
                            <button type="submit" name="submit" class="text-center btn btn-default text-center col-xs-12">Submit</button>
                        </form>
                    </div>
                </div>';
