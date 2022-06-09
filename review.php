<?php
include_once 'sidebar_menu.php'
 ?>
    <div class="main_content">
        <div class="main_header">
            <h1 style="text-align:center;color:white;"><u>Travel with us!!</u></h1>
        </div>
        <div class="section">
            <form name='Review section'>
                <fieldset style="height:600px;">
                    <legend>Leave a review!</legend><br>
                    <div class="review">
                        How was it?
                        <textarea rows="4" cols="50" placeholder="Describe your experience with us here." autofocus style="width:1190px;height:200px;"></textarea>
                    </div>
                    <div>
                        <input id="myInput" type="text" placeholder="Search ..."><br><br />

                        <input type="checkbox" id="cx1" name="fav_language" value="HTML">
                        <label for="cx1">
                            <input id="myInput1" type="text" placeholder="Criteria">
                        </label>

                        <input type="checkbox" id="cx2" name="fav_language" value="HTML">
                        <label for="cx2">
                            <input id="myInput2" type="text" placeholder="Criteria">
                        </label>
                        <br />

                        <input type="radio" id="ra1" name="fav_language" value="HTML">
                        <label for="ra1"><input id="myInput4" type="text" placeholder="Criteria"></label>

                        <input type="radio" id="ra2" name="fav_language" value="HTML">
                        <label for="ra2"><input id="myInput5" type="text" placeholder="Criteria"></label>
                        <br /><br />

                        <table class="table-sortable" style="width:98%;margin-left: 5px;">
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Occupation</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <tr>
                                    <td>1</td>
                                    <td>Dom</td>
                                    <td>35</td>
                                    <td>Web Developer</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Rebecca</td>
                                    <td>29</td>
                                    <td>Teacher</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>John</td>
                                    <td>30</td>
                                    <td>Civil Engineer</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Andre</td>
                                    <td>20</td>
                                    <td>Plumber</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Andre</td>
                                    <td>24</td>
                                    <td>Dentist</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Andre</td>
                                    <td>24</td>
                                    <td>Dentist</td>
                                </tr>
                            </tbody>
                        </table>
                        <script src="scripts.js"></script>
                    </div>
            </form>
            <!--Live search-->
            <script>
                $(document).ready(function () {
                    //Search bar
                    $("#myInput").on("keyup", function () {
                        //this refers to #myInput
                        var value = $(this).val().toLowerCase();
                        //filter function
                        $("#myTable tr").filter(function () {
                            //using toggle predefined function for filtering
                            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    });

                    //changing the state of the radio button
                    $('#ra1').change(function () {
                        $("#myInput4").on("keyup", function () {
                            var value = $(this).val().toLowerCase();
                            $("#myTable tr").filter(function () {
                                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                            });
                        });
                    });

                    $('#ra2').change(function () {
                        $("#myInput5").on("keyup", function () {
                            var value = $(this).val().toLowerCase();
                            $("#myTable tr").filter(function () {
                                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                            });
                        });
                    });



                    $('#cx1').change(function () {
                        $("#myInput1").on("keyup", function () {
                            var value = $(this).val().toLowerCase();

                            $("#myTable tr").filter(function () {
                                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                            });


                        });
                        $('#cx2').change(function () {
                            $("#myInput2").on("keyup", function () {
                                var value = $(this).val().toLowerCase();

                                $("#myTable tr").filter(function () {
                                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                                });


                            });
                        });

                    });

                });

            </script>
            <br>
            <label for="review">Rating : </label>
            <input type="number" id="review" name="review" step="1" max="5" min="1">
            <br>
            <input type="radio" id="public" name="rev" value="Review public.">
            <label for="public">Public review.</label>
            <br>
            <input type="radio" id="anon" name="rev" value="Review anonim.">
            <label for="anon">Anonymous review.</label>
            <br><br>
            <button type="submit">Post</button>
            <?php
            include_once 'footer.php'
             ?>
        </div>
    </div>
</body>
</html>
