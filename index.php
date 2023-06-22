<html>

<head>
    <title>Deogiri College </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <style>
        .btn-success1 {
            background-color: #800080;
            border: #800080;
            border-radius: 300px;
        }

        .btn-success1:hover {
            background-color: #ff00ff;
            border: #000000;
            color: #ffffff;
        }

        .btn-success2 {
            background-color: #000000;
            border: #ffffff;
            color: #ffffff;
            border-radius: 1px;
        }

        .btn-success2:hover {
            background-color: #ff0000;
            border: #000000;
            color: #ffffff;
        }

        .btn-success {
            background-color: #000000;
            border: #800080;
            border-radius: 1px;
        }

        .btn-success:hover {
            background-color: #7cfc00;
            border: #000000;
            color: #000000;
        }

        .hr {
            background-color: #7cfc00;
            border: #000000;
            color: #000000;

        }
    </style>
</head>

<body>
    <h2>

        <marquee style=" color: #000000; " behavior="scroll" directio="up" scrollamount="15">Deogiri College Aurangabad</marquee>

    </h2>
    <hr>

    <img src="./deogiri.jpg" width="1360" height="200">
    <right>
        <small>
            <h2 style="margin-left:20px; margin-top: 0.7%; margin-bottom:0.2%;color: #ff0000;">Admission Form</h2>
        </small>
    </right>
    <hr>

    <form>
    <div>
        <tr>
            <th>
            <td>
                <h4 style="margin-left:20px; color:#008000 ">Personal Detail</h4>
            </td>
            </th>
        </tr>
        <table class="table table-hover">
            <tr>
                <th>
                    <label>Full name</label>
                </th>
                <td>
                    <input type="text" id="full_name" class="form-control" placeholder="Ex. Abi Sirsath" />
                </td>
            </tr>

            <tr>
                <th>
                    <label>Mobile number</label>
                </th>
                <td>
                    <input type="text" id="mobile" class="form-control" placeholder="+91-1234567890" />
                </td>
            </tr>

            <tr>
                <th>
                    <label>Email address</label>
                </th>
                <td>
                    <input type="email" id="email" class="form-control" placeholder="yourname@domain.com" />
                </td>
            </tr>

            <tr>
                <th>
                    <label> Gender</label>
                </th>
                <td>
                    Male<input type="radio" name="G" value="Male" />
                    Famale<input type="radio" name="G" value="Female" />
                    Other<input type="radio" name="G" value="Other" />
                </td>
            </tr>
            

                <th>
                    <label> Date Of Birth</label>
                </th>
                <td>

                    <select name="day">
                        <option>Day</option>
                        <?php
                        for ($day = 1; $day <= 31; $day++) {
                            echo "<option value = " . $day . ">" . $day . "</option>";
                        }
                        ?>
                    </select>

                    <select name="Month">
                        <option>month</option>
                        <?php

                        for ($m = 1; $m <= 12; $m++) {
                            echo '  <option value="' . $m . '">' . date('M', mktime(0, 0, 0, $m)) . '</option>' . PHP_EOL;
                        }
                        ?>
                    </select>

                    <select name="Year">
                        <option>Year</option>
                        <?php

                        for ($day = 1900; $day <= 2021; $day++) {
                            echo "<option value = " . $day . ">" . $day . "</option>";
                        }
                        ?>
                    </select>


        </table>
        </div>
    </form>
    <hr>

    <form>
          <th>
            
            <td>
                <h4 style="margin-left:20px; color:#008000">Address</h4>
            </td>
            </th>
    
        <table class="table table-hover">

            <tr>
                <th>
                <div>
                    <label>State</label>
                    </div>
                </th>
                <td>
                    <select name="cars" id="cars" multiple style="width: 300px; size: 8;">
                        <option value="State">Andhra Pradesh</option>
                        <option value="State">Arunachal Pradesh</option>
                        <option value="State">Assam</option>
                        <option value="State">Andhra Pradesh</option>
                        <option value="State">Chhattisgarh</option>
                        <option value="State">Goa</option>
                        <option value="State">Gujarat</option>
                        <option value="State">Haryana</option>
                        <option value="State">Himachal Pradesh </option>
                        <option value="State">Jharkhand</option>
                        <option value="State">Karnataka</option>
                        <option value="State">Kerala</option>
                        <option value="State">Madhya Pradesh</option>
                        <option value="State">Maharashtra</option>
                        <option value="State">Manipur</option>
                        <option value="State">Meghalaya</option>
                        <option value="State">Mizoram</option>
                        <option value="State">Nagaland</option>
                        <option value="State">Odisha</option>
                        <option value="State">Punjab</option>
                        <option value="State">Rajasthan</option>
                        <option value="State">Sikkim</option>
                        <option value="State">Tamil Nadu</option>
                        <option value="State">Telangana </option>
                        <option value="State">Tripura</option>
                        <option value="State">Uttar Pradesh</option>
                        <option value="State">Uttarakhand</option>
                    </select>
                    <input type="submit" value="Submit" class="btn btn-success1 btn-sm" />
                    </th>
                </td>
            </tr>
            <tr>
                <th>

                </th>
            </tr>


            <th>
                <label>District</label>
            </th>

            </th>
            <td>
                <input type="District" id="email" class="form-control" placeholder="District" />
            </td>
            </tr>

            <tr>
                <th>
                    <label>Address</label>
                </th>
                <td>
                    <input type="text" id="Address" class="form-control" placeholder="Address" />
                </td>
            </tr>

            <tr>
                <th>
                    <label>Pin-code</label>
                </th>
                <td>
                    <input type="text" id="Pin-code" class="form-control" placeholder="Pin-code" />
                </td>
            </tr>
        </table>
    </form>

    <form>
        <tr>
            <th>
            <td>
                <h4 style="margin-left:20px; color:#008000">Education</h4>
            </td>
            </th>
        </tr>
        <table class="table table-hover">
            <tr>
                <th>
                    <label>SSC</label>
                </th>
                <td>
                    <input type="text" id="full_name" class="form-control" placeholder="Mark sheet number" />
                </td>
            </tr>

            <tr>
                <th>
                    <label>Percentage</label>
                </th>
                <td>
                    <input type="text" id="mobile" class="form-control" placeholder="Percentage %" />
                </td>
            </tr>


            <tr>
                <th>
                    <label> Passing Year</label>
                </th>
                <td>
                    <?php

                    // build months menu
                    echo '<select name="month">' . PHP_EOL;
                    for ($m = 1; $m <= 12; $m++) {
                        echo '  <option value="' . $m . '">' . date('M', mktime(0, 0, 0, $m)) . '</option>' . PHP_EOL;
                    }
                    echo '</select>' . PHP_EOL;


                    ?>
                    
                    <select name="Year">
                        <option>Year</option>
                        <?php

                        for ($day = 1900; $day <= 2021; $day++) {
                            echo "<option value = " . $day . ">" . $day . "</option>";
                        }
                        ?>
                    </select>
            <tr>
                <th>
                    <label>HSC</label>
                </th>
                <td>
                    <input type="text" id="full_name" class="form-control" placeholder="Mark sheet number" />
                </td>
            </tr>

            <tr>
                <th>
                    <label>Percentage</label>
                </th>
                <td>
                    <input type="text" id="mobile" class="form-control" placeholder="Percentage %" />
                </td>
            </tr>


            <tr>
                <th>
                    <label> Passing Year</label>
                </th>
                <td>
                    <?php
                    // lowest year wanted



                    // build months menu
                    echo '<select name="month">' . PHP_EOL;
                    for ($m = 1; $m <= 12; $m++) {
                        echo '  <option value="' . $m . '">' . date('M', mktime(0, 0, 0, $m)) . '</option>' . PHP_EOL;
                    }
                    echo '</select>' . PHP_EOL;


                    ?>
                    
                    <select name="Year">
                        <option>Year</option>
                        <?php

                        for ($day = 1900; $day <= 2021; $day++) {
                            echo "<option value = " . $day . ">" . $day . "</option>";
                        }
                        ?>
                    </select>


            <tr>
                <th>
                </th>
                <td>
                    <input type="submit" value="Preview" class="btn btn-success2 btn-sm" />
                    <input type="submit" value="Submit" class="btn btn-success btn-sm" />
                </td>
            </tr>

        </table>
    </form>
</body>

</html> 