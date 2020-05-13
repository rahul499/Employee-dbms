<html>
<head>
    <title> Insert Employee</title>
    <style>
       body {
background-image: url('images/journey.jpg');
background-repeat: no-repeat;
background-size: cover;
}

.form-register{
    max-width: 1000px;
    width: 100%;
    margin: 0 auto;

    font: bold 14px sans-serif;
    text-align: center;
}

.form1{
    position: relative;
    display: inline-block;
    vertical-align: top;
    margin-right: 130px;
    text-align: center;
}

.form1 .form-white-background{
    width: 570px;
    box-sizing: border-box;
    background-color: #ffffff;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
    padding: 60px 80px;
    margin-bottom: 35px;
}

.form1 .form-row{
    text-align: left;
    margin-bottom: 23px;
}

.form1 .form-title-row{
    text-align: center;
    margin-bottom: 50px;
}

.form1 h1{
    display: inline-block;
    box-sizing: border-box;
    color:  #4c565e;
    font-size: 24px;
    padding: 0 20px 15px;
    border-bottom: 2px solid #6caee0;
    margin: 0;
}

.form1 .form-row > label span{
    display: inline-block;
    box-sizing: border-box;
    color:  #5f5f5f;
    width: 125px;
    text-align: right;
    padding-right: 25px;
}

.form1 input{
    color:  #5f5f5f;
    box-sizing: border-box;
    width: 230px;
    box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
    padding: 12px 18px;
    border: 1px solid #dbdbdb;
}

.form1 .form-checkbox input{
    margin-left: 128px;
    margin-right: 10px;
    width: auto;
    vertical-align: top;
}

.form1 .form-row .form-checkbox span{
    font-size: 12px;
    font-weight: normal;
    display: inline-block;
    text-align: left;
    width: 220px;
    margin: 0;
}

.form1.form-checkbox span a{
    text-decoration: none;
    color:  #6caee0;
}

.form1 button{
    display: block;
    border-radius: 2px;
    background-color:  #6caee0;
    color: #ffffff;
    font-weight: bold;
    box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
    padding: 15px 35px;
    border: 0;
    margin: 55px auto 0;
    cursor: pointer;
}

.form1 .form-log-in-with-existing{
    text-decoration: none;
    padding: 4px 8px;
    font-weight: normal;
    color: #7b9d62;
    background-color: #d6f0c3;
}

.msg-box{
            height: 80px;
        }

@media (max-width: 900px) {


    .form-register{
        margin: 20px auto;
    }

    .form1{
        position: relative;
        display: block;
        margin: 0;
    }

    .form1 .form-white-background{
        margin: 0 auto 32px;
    }

    .form1:after{
        bottom: -80px;
        left: 50%;
        margin-left: -25px;
    }

    .form-sign-in-with-social {
        margin-top: 105px;
    }

}

@media (max-width: 600px) {

    .form1 .form-white-background{
        width: 300px;
        padding-left: 35px;
        padding-right: 35px;
    }

    .form1 .form-row > label span{
        display: block;
        text-align: left;
        padding: 0 0 10px;
    }

    .form1 input{
        display: block;
        margin: 0 auto;
    }

    .form1 .form-checkbox input{
        display: inline-block;
        margin-left: 0;
    }

    .form1 .form-checkbox span{
        width: 200px !important;
    }

    .form1:after{
        bottom: -80px;
        left: 50%;
        margin-left: -25px;
    }
.body{
background-image-width: 600px;
}

}

.header {
padding: 50px;
font-size: 30px;
text-align: center;
background: black;
background-image: url('images/12.jpg');
background-repeat: no-repeat;
background-size: cover;
border:5px solid black;
}
</style>



    </head>
    <body>

 <div class="header">
  <h1>ADD AN EMPLOYEE</h1>
</div>

    <div class="main-content">
        <br><br><br>
        <form class="form-register" method="post" action="insertemployeedata.php">

            <div class="form1">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Employee Registration</h1>
                    </div>
                    
                    <div class="form-row">
                        <label>
                            <span>Id</span>
                            <input type="number" name="id" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Name</span>
                            <input type="text" name="name" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Date of Birth</span>
                            <input type="text" name="dob" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Mobile</span>
                            <input type="number" name="mobile" pattern="[0-9]{10}" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Address</span>
                            <input type="text" name="address" required>
                        </label>
                    </div>

                     
                     <div class="form-row">
                        <label>
                            <span>Salary</span>
                            <input type="number" name="salary"  required /> 
                        </label>
                    </div>

                    

                    <div class="form-row">
                        <label>
                            <span>Qualification</span>
                            <input type="text" name="qualification" required>
                        </label>
                    </div>

                     <div class="form-row">
                        <label>
                            <span>Job Profile</span>
                            <input type="text" name="job"  required /> 
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Date of Joining</span>
                            <input type="text" name="joindate"   /> 
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit">Register</button>
                    </div><br>
                </div>
            </div>
        </form>
    </div>
</body>
</html>