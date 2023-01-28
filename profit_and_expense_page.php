<?php
session_start();
include("db_connection.php");

$branchName = $_SESSION['branch_name'];

$result_of_training = mysqli_query($conn, "SELECT SUM(fees_paid) AS value_sum_of_training FROM amd_student_registered WHERE created_by ='$branchName'");
$row_of_training = mysqli_fetch_assoc($result_of_training);
$sum_of_training = $row_of_training['value_sum_of_training'];

$result_of_requests = mysqli_query($conn, "SELECT SUM(fees_paid) AS value_sum_of_requests FROM amd_customer_requests WHERE created_by ='$branchName'");
$row_of_requests = mysqli_fetch_assoc($result_of_requests);
$sum_of_requests = $row_of_requests['value_sum_of_requests'];

$result_of_fuel = mysqli_query($conn, "SELECT SUM(amount) AS value_sum_of_fuel FROM amd_fuel_consumption_records WHERE created_by ='$branchName'");
$row_of_fuel = mysqli_fetch_assoc($result_of_fuel);
$sum_of_fuel = $row_of_fuel['value_sum_of_fuel'];

$result_of_maintainence = mysqli_query($conn, "SELECT SUM(bill_amount) AS value_sum_of_maintainence FROM amd_car_maintainence_record WHERE created_by ='$branchName'");
$row_of_maintainence = mysqli_fetch_assoc($result_of_maintainence);
$sum_of_maintainence = $row_of_maintainence['value_sum_of_maintainence'];

$result_of_salary = mysqli_query($conn, "SELECT SUM(salary_amount) AS value_sum_of_salary FROM amd_salary_records WHERE created_by ='$branchName'");
$row_of_salary = mysqli_fetch_assoc($result_of_salary);
$sum_of_salary = $row_of_salary['value_sum_of_salary'];

$overall_profit = ($sum_of_training + $sum_of_requests) - ($sum_of_fuel + $sum_of_maintainence + $sum_of_salary);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Dashboard</title>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE, NO-STORE, must-revalidate">
</head>

<body>
    <section class="text-gray-600 body-font">
        <div class="container bg-yellow-100 px-12 py-12 mx-auto">
            <div class="flex flex-wrap w-full ">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <div class="text-center">
                        <img class="w-36 mb-4" src="/amazeadminpanel/assets/amazenewlogo.svg" alt="logo" />
                    </div>
                    <div class="h-1 w-48 bg-yellow-500 rounded"></div>
                    <p class="mt-4 text-sm font-medium text-gray-900">Net Profit & Expense Overview</p>
                </div>
                <p class="lg:w-1/2 w-full font-medium text-sm leading-relaxed text-gray-900"> An admin panel enables administrators of an application, website, or IT system
                    to manage its configurations, settings,
                    content, and features and carry out oversight functions critical to the
                    business.</p>
            </div>
        </div>
        <div class="container px-12 mt-12 mb-12 mx-auto">
            <div id="myfirstchart" style="height: 250px;"></div>
            <div class="flex flex-wrap w-full mb-10">
                <div class="p-1 md:w-1/3 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-md">
                        <h2 class="title-font font-medium text-xl text-gray-900">
                            <span style="color: #03C988">
                                <b>
                                    <p class="counter">₹ <?= number_format($sum_of_training) ?></p>
                                </b>
                            </span>
                        </h2>
                        <p class="leading-relaxed font-medium text-sm">Total Revenue From Training</p>
                    </div>
                </div>
                <div class="p-1 md:w-1/3 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-md">
                        <h2 class="title-font font-medium text-xl text-gray-900">
                            <span style="color: #03C988">
                                <b>
                                    <p class="counter">₹ <?= number_format($sum_of_requests) ?></p>
                                </b>
                            </span>
                        </h2>
                        <p class="leading-relaxed font-medium text-sm">Total Revenue From Customer Requests</p>
                    </div>
                </div>
                <div class="p-1 md:w-1/3 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-md">
                        <h2 class="title-font font-medium text-xl text-gray-900">
                            <span style="color: #DD5353">
                                <b>
                                    <p class="counter">₹ <?= number_format($sum_of_fuel) ?></p>
                                </b>
                            </span>
                        </h2>
                        <p class="leading-relaxed font-medium text-sm">Total Expense on Fuel Consumption</p>
                    </div>
                </div>
                <div class="p-1 md:w-1/3 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-md">
                        <h2 class="title-font font-medium text-xl text-gray-900">
                            <span style="color: #DD5353">
                                <b>
                                    <p class="counter">₹ <?= number_format($sum_of_maintainence) ?></p>
                                </b>
                            </span>
                        </h2>
                        <p class="leading-relaxed font-medium text-sm">Total Expense on Car Maintainence</p>
                    </div>
                </div>
                <div class="p-1 md:w-1/3 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-md">
                        <h2 class="title-font font-medium text-xl text-gray-900">
                            <span style="color: #DD5353">
                                <b>
                                    <p class="counter">₹ <?= number_format($sum_of_salary) ?></p>
                                </b>
                            </span>
                        </h2>
                        <p class="leading-relaxed font-medium text-sm">Total Staff Salary Given</p>
                    </div>
                </div>
                <div class="p-1 md:w-1/3 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-md">
                        <h2 class="title-font font-medium text-xl text-gray-900">
                            <span style="color: #03C988">
                                <b>
                                    <p class="counter">₹ <?= number_format($overall_profit) ?></p>
                                </b>
                            </span>
                        </h2>
                        <p class="leading-relaxed font-medium text-sm">Overall Revenue</p>
                    </div>
                </div>
            </div>
    </section>
</body>
<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);

    #myfirstchart * {
        font-family: open sans;
    }
</style>
<script>
    new Morris.Donut({
        // ID of the element in which to draw the chart.
        element: 'myfirstchart',

        data: [{
                label: "Training",
                value: <?= $sum_of_training ?>
            },
            {
                label: "Customers",
                value: <?= $sum_of_requests ?>
            },
            {
                label: "Fuel",
                value: <?= $sum_of_fuel ?>
            },
            {
                label: "Car",
                value: <?= $sum_of_maintainence ?>
            },
            {
                label: "Salary",
                value: <?= $sum_of_salary ?>
            }
        ],
        colors: [
            '#AACB73',
            '#FF7B54',
            '#FF0032',
            '#FBC252',
            '#26C6DA'
        ],
        labels: ['Value']
    });
</script>

</html>

<?php
error_reporting(0);
$userprofile = $_SESSION['user_name'];
if ($userprofile == true) {
} else {
    echo "<script type='text/javascript'>Swal.fire({
                icon: 'error',
                title: 'User login required!',
                text: 'User login is required to access this page so please login to continue',
                });</script>";
?>
    <meta http-equiv="refresh" content="0; url = http://localhost/amazeadminpanel/index.php" />
<?php
}
?>