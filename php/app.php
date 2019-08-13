
<?php
/*
    include('db_connection.php');
    for($count =1 ; $count == 5; $count ++){
        $sql="SELECT Question FROM `quiz` where Qno = 1;";
        $result = mysqli_query($con, $sql);
        $rescheck = mysqli_num_rows($result);
        if($rescheck > 0){
            while($row = mysqli_fetch_assoc($result)){

            }
        }
        else{
           echo " We're facing a database, please try again after sometime. Thank You :)";
        w}
    }
    */
                include 'db_connection.php'; 
                $sql="SELECT CorrectAns FROM `quiz` where Qno = 1;"; 
                $query = mysqli_query($con, $sql); 
                $res= mysqli_num_rows($query); 
                if($res > 0 ){
                    while($row = mysqli_fetch_assoc($query)){
                       $correct_ans = $row['CorrectAns'];
                    }
                }else{
                    echo "We Are Facing A DataBase Error, Sorry For The InConvenince";
                } 
                $sql1="SELECT WrongAns1 FROM `quiz` where Qno = 1;"; 
                $query1 = mysqli_query($con, $sql1); 
                $res1= mysqli_num_rows($query1); 
                if($res1 > 0 ){
                    while($row = mysqli_fetch_assoc($query1)){
                       $wrong_ans1 = $row['WrongAns1'];
                    }
                }else{
                    echo "We Are Facing A DataBase Error, Sorry For The InConvenince";
                } 
                $sql2="SELECT WrongAns2 FROM `quiz` where Qno = 1;"; 
                $query2 = mysqli_query($con, $sql2); 
                $res2= mysqli_num_rows($query2); 
                if($res2 > 0 ){
                    while($row = mysqli_fetch_assoc($query2)){
                       $wrong_ans2 = $row['WrongAns2'];
                    }
                }else{
                    echo "We Are Facing A DataBase Error, Sorry For The InConvenince";
                } 
                $sql3="SELECT WrongAns3 FROM `quiz` where Qno = 1;"; 
                $query3 = mysqli_query($con, $sql3); 
                $res3= mysqli_num_rows($query3); 
                if($res3 > 0 ){
                    while($row = mysqli_fetch_assoc($query3)){
                       $wrong_ans3 = $row['WrongAns3'];
                    }
                }else{
                    echo "We Are Facing A DataBase Error, Sorry For The InConvenince";
                } 
    ?>
<?php 
                include 'db_connection.php'; 
                $sql="SELECT Question FROM `quiz`where Qno = 1;"; 
                $query= mysqli_query($con,$sql); 
                $res=mysqli_num_rows($query); 
                if($res > 0){
                    while($row = mysqli_fetch_assoc($query)){
                        $question = $row["Question"];
                    }
                } 
                else
                {
                    echo "We Are Facing A DataBase Error, Sorry For The InConvenince";
                }
?>
<html>
    <head>
        <title>Quizy</title>
        <link rel="shortcut icon" type="image/png" href="../asset/quiz.png" />
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- font awesome -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/326ad51f5a.js"></script>
        <!-- jquery -->
        <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous">
        </script>
    </head>
    <body>
    <script>
        alert("Welcome '<?php echo $_POST['username'];?>'.... :]");
    </script>
    <div class="page">
        <div class="question">
            <div class="card">      
            <!-- questions below -->
            <h4 id="ques" style="position:absolute;left:23px;top:12px;color:#434343;font-family:'product sans';font-weight:bold"> <?php print($question); ?> </h4>
                <!-- questions above -->
                <div class="w3-light-grey w3-round-xlarge">
                    <div class="w3-container w3-blue w3-round-xlarge" style="width:0%;position:absolute;bottom:35px;height:5px;left:25px;right:55px;"></div>
                </div>
                <b style="color: #434343;">Question <i id ="count" style="color: #434343;">1</i> of <i style="color: #434343;">5</i>.</b><br>
                <!-- radio buttons -->
                <input type="radio" name="demo" value="<?php print($correct_ans); ?>" id="crt" class="form-radio" style="position:absolute;top: 70px;"><label id="crtla" for="radio-one" style="position:absolute;top: 70px;left: 55px;font: 15px/1.7 'product Sans';font-weight:bold;font-size:21px;color: #434343;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;cursor: pointer;"><?php print($correct_ans) ?></label><br>
                <input type="radio" name="demo" value="<?php print($wrong_ans1); ?>" id="wrg1" class="form-radio" style="position:absolute;top: 110px;"><label id="wrg1la" for="radio-one" style="position:absolute;top: 110px;left: 55px;font: 15px/1.7 'product Sans';font-weight:bold;font-size:21px;color: #434343;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;cursor: pointer;"><?php print($wrong_ans1); ?></label><br>
                <input type="radio" name="demo" value="<?php print($wrong_ans2); ?>" id="wrg2" class="form-radio" style="position:absolute;top: 150px;"><label id="wrg2la" for="radio-one" style="position:absolute;top: 150px;left: 55px;font: 15px/1.7 'product Sans';font-weight:bold;font-size:21px;color: #434343;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;cursor: pointer;"><?php print($wrong_ans2); ?></label><br>
                <input type="radio" name="demo" value="<?php print($wrong_ans3); ?>" id="wrg3" class="form-radio" style="position:absolute;top: 190px;"><label id="wrg3la" for="radio-one" style="position:absolute;top: 190px;left: 55px;font: 15px/1.7 'product Sans';font-weight:bold;font-size:21px;color: #434343;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;cursor: pointer;"><?php print($wrong_ans3); ?></label><br>
                <div class = "subans">
                    <button
                        type="submit"
                        class="btn btn-primary kpbtn js"
                        style="width:20%;height:10%;position:absolute;left:20px;bottom:60px;font-size: 15px;padding: 0 0"
                    >next <i class="fas fa-arrow-circle-right fa-sm"></i></button>
                </div>
            </div>

        </div>
    </div>
    <script>
        let questionDB;
        //questionDOM :- gets the question.
        let questionDOM = document.getElementById('ques').innerHTML;
        // correctAns :- gets the correct ans 
        let correctAns = document.getElementById('crtla').innerHTML;
        // wrongAns_1 :- wrong ans 1
        let wrongAns_1 = document.getElementById('wrg1la').innerHTML;
        // wrongAns_2 :- wrong ans 2
        let wrongAns_2 = document.getElementById('wrg2la').innerHTML;
        // wrongAns_3 :- wrong ans 3
        let wrongAns_3 = document.getElementById('wrg3la').innerHTML;
        // Quescount :- question number |bottom|
        let Quescount= document.getElementById("count").innerHTML;
        console.log("TCL: Quescount", Quescount);
        // questionCount variable used to update the question number
        let questionCount = 2;
        
        let buttonClick = document.querySelector('.js');
        let originalRandomNo;
       buttonClick.addEventListener("click", () => {
            document.getElementById("count").innerHTML = questionCount;
            <?php
                $num2 = random_int(2, 10); 

                print_r($num);
            ?>


            $.ajax({
                url: "app.php",
                method: "post",
                data : originalRandomNo,
                success: function(res){
                    console.log(res);
                }

            })
            questionDB = '<?php 
                $qno = json_decode($_POST['originalRandomNo']);
                include 'db_connection.php'; 
                $sql="SELECT Question FROM `quiz`where Qno = $qno;"; 
                $query= mysqli_query($con,$sql); 
                $res=mysqli_num_rows($query); 
                if($res > 0){
                    while($row = mysqli_fetch_assoc($query)){
                        $question = $row["Question"];
                    }
                } 
                else
                {
                    echo "We Are Facing A DataBase Error, Sorry For The InConvenince";
                }
            ?>';
            console.log("TCL: questionDB", questionDB);
            
       })


    </script>
    </body>
</html>


