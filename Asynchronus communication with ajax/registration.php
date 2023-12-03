

<html lang="en">

<head>
    <title>Registration</title>
</head>

<body>
    <table width="100%" height="100%">


        <tr>
            <td colspan="2" height="2px">
                <hr>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                <main>
                    <table width="700px" >
                        <tr>
                            <td>
                                <form method="post" action="">
                                    <fieldset>
                                        <legend>
                                            Registration
                                        </legend>

                                        <table width="100%">

                                            <tr>
                                                <td>Name</td>
                                                <td>:
                                                    <input type="text" name="name" value="">
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Email</td>
                                                <td>:
                                                    <input type="email" id="name" name="email" value=""><button title="hint: example@gmail.com">i</button>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>User Name</td>
                                                <td>:
                                                    <input type="text" id="username" name="username" value=""><button title="hint: abcde-/./_">i</button>
                                                   
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Password</td>
                                                <td>:
                                                    <input type="password" id="password" name="password" value="">
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Confirm Password</td>
                                                <td>:
                                                    <input type="password" name="confirmPassword" value="">
                                                   
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Phone No</td>
                                                <td>:
                                                    <input type="text" id="phonenumber" name="phoneNumber" value=""><button title="hint: 01*********">i</button>
                                                   
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <input type="submit" value="Submit" name="submit">
                                                    <input type="reset" value="Reset">
                                                </td>
                                            </tr>

                                        </table>

                                    </fieldset>
                                </form>

                                <script>
                                    function validateAndAjax() {
                                        let username = document.getElementById('name').value;
                                        let username = document.getElementById('email').value;
                                        let username = document.getElementById('username').value;
                                        let username = document.getElementById('password').value;

                                        if (username.trim() === '') {
                                            alert('Please enter a username.');
                                            return;
                                        }
                                        let xhttp = new XMLHttpRequest();
                                        xhttp.open('POST', 'regisgtrationCheck', true);
                                        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                        xhttp.send('name=' + name);
                                        xhttp.send('email=' + email);
                                        xhttp.send('username=' + username);
                                        xhttp.send('password=' + password);


                                        
                                        xhttp.onreadystatechange = function () {
                                            if (this.readyState == 4 && this.status == 200) {
                                                document.getElementById('head').innerHTML = this.responseText;
                                            }
                                        };
                                    }
                                </script>
                            </td>
                        </tr>
                    </table>
                </main>
            </td>
        </tr>

    </table>

</body>

</html>