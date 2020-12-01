<?php $__env->startSection('content'); ?>
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/master.css')); ?>">
        </head>
        <div class="row justify-content-center">
        <div class="container">
            <h2>  ADMIN Dashboard</h2>
            <section id="table">
                <form method="post" action="insertadmin.php" >
                    <table alighn="center" border="1px" style="width:700px, line-height:60px;">
                        <tr>
                            <th colspan="14"><h2>APPOINTMENT DETAILS DETAILS</h2></th>
                        </tr>

                        <t>
                                <th> Farmer No. </th>
                                <th> sales date </th>
                                <th> buyer floor time </th>
                                <th>id/nrc</th>
                                <th> grower No.</th>
                                <th> growers name</th>
                                <th> virginia </th>
                                <th> station</th>
                                <th> reoffer</th>
                                <th> No.of Bales </th>
                                <th> total per farmer </th>
                                <th> Cumulative </th>
                                <th> grower rep </th>
                                <th> R Buyer </th>

                                <?php
                                $connect = mysqli_connect("localhost", "root", "", "taz_db");
                                //echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL HAVING sum(nofbales) <= 31 HAVING sum(nofbales) <= 2450" SELECT SUM(CASE WHEN YourCondition=1 THEN 1 ELSE 0 END);
                                $total = 0;
                                $rt = 0;
                                $sql="SELECT id,sdate, bftime, nrc, vz, name,virginia,station,reoffer,nofbales,grep,merchant
                                        FROM app
                                        WHERE nofbales <= 2450";
                                $result=mysqli_query($connect, $sql);

                                if (mysqli_num_rows($result)>0) {
                                while($rows=mysqli_fetch_array($result)) {

                                $total += $rows["nofbales"];
                                $rt = $rows["nofbales"] + $rows["reoffer"];
                                $cum=0;
                                $cum = $total += $rows["reoffer"] ;
                                ?>
                                <tr>
                                    <td width="10%" ><?php echo $rows['id']; ?></td>
                                    <td width="10%" ><?php echo $rows['sdate']; ?></td>
                                    <td width="10%">
                                        <select class="select" name="time" required>
                                            <option value=""> --select time--</option>
                                            <option value="8am"> 08am </option>
                                            <option value="10am"> 10am </option>
                                        </select>
                                    </td>
                                    <td width="10%"><?php echo $rows['nrc']; ?></td>
                                    <td width="10%"><?php echo $rows['vz']; ?></td>
                                    <td width="10%"><?php echo $rows['name']; ?></td>
                                    <td width="10%"><?php echo $rows['virginia']; ?></td>
                                    <td width="10%"><?php echo $rows['station']; ?></td>
                                    <td width="10%"><?php echo $rows['reoffer']; ?></td>
                                    <td width="10%"><?php echo $rows['nofbales']; ?></td>
                                    <td width="10%"> <?php echo $rt; ?></td>
                                    <td width="10%"> <?php echo $cum; ?></td>
                                    <td width="10%">
                                        <select class="select" name="rep" required>
                                            <option value=""> --select rep--</option>
                                            <option value="rk"> rabecca </option>
                                            <option value="cm"> christabel </option>
                                            <option value="mt"> memory </option>
                                        </select>
                                    </td>
                                    <td width="10%"><?php echo $rows['merchant']; ?></td>


                                </tr>
                            <?php
                            $sql1="SELECT sum(reoffer) AS snf FROM app";
                            $results=mysqli_query($connect, $sql1);
                            $row1=$results->fetch_assoc();

                            $sql2="SELECT sum(nofbales) AS tota FROM app";
                            $results=mysqli_query($connect, $sql2);
                            $row2=$results->fetch_assoc();

                            $sql3="SELECT (sum(nofbales)) + (sum(reoffer))
                                        AS cumu FROM app";
                            $results=mysqli_query($connect, $sql3);
                            $row3=$results->fetch_assoc();

                            $sql4="SELECT sum(virginia) AS tot FROM app";
                            $results=mysqli_query($connect, $sql4);
                            $row4=$results->fetch_assoc();

                            $output='';
                            $output .= '<tr>
<td class="textright" colspan="7"><b>Total: '.$row4["tot"].' </b></td>
<td class="textright" colspan="2"><b>Total: '.$row1["snf"].' </b></td>
<td class="textright" colspan="1"><b>Total: '.$row2["tota"].' </b></td>
<td class="textright" colspan="1"><b>per farmer </b></td>
<td class="textright" colspan="3"><b>Total: '.$row3["cumu"].' </b></td>
</tr>';
                            }
                            echo $output;
                            }
                            mysqli_close($connect);
                            ?>
                </form>
                </section>
                    <!-- <button onclick="myFunction()">Click me</button> -->
                    <script>
                        //
                    </script>

            </div>
        </div>
        <a class="btn btn-primary btn-lg" href="<?=('HomeController/adminfinal')?>"  onclick="update()"
               role="button" class="Lead">Update Data</a><br>
        <br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>