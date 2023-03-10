<?php
session_start();
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
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE, NO-STORE, must-revalidate">
</head>

<script>
    history.pushState(null, document.title, location.href);
    history.back();
    history.forward();
    window.onpopstate = function() {
        history.go(1);
    };
</script>

<body>
    <section class="text-gray-600 body-font">
        <div class="container bg-yellow-100 px-12 py-12 mx-auto">
            <div class="flex flex-wrap w-full ">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <div class="text-center">
                        <img class="w-36 mb-4" src="assets/amazenewlogo.svg" alt="logo" />
                    </div>
                    <div class="h-1 w-48 bg-yellow-500 rounded"></div>
                    <p class="mt-4 text-sm font-medium text-gray-900">Welcome, <?php
                                                                                $branchName = str_replace("_", " ", $_SESSION['branch_name']);
                                                                                echo ucwords(strtolower($branchName));
                                                                                ?></p>
                </div>
                <p class="lg:w-1/2 w-full font-medium text-sm leading-relaxed text-gray-900"> An admin panel enables administrators of an application, website, or IT system
                    to manage its configurations, settings,
                    content, and features and carry out oversight functions critical to the
                    business.</p>
            </div>
            <div class="flex items-center justify-end -mt-10">
                <a href="logout.php"><button name="logout" class="flex mx-auto text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 font-medium rounded text-sm">Logout</button></a>
            </div>
        </div>
        <div class="container px-12 py-12 mx-auto">
            <div class="flex flex-wrap -m-3">
                <div class="p-1 md:w-1/3">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full" src="assets/student_registration.svg" alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">OVERVIEW</h2>
                            <h1 class="title-font text-md font-medium text-gray-900 mb-3">Customer Requests</h1>
                            <p class="leading-relaxed mb-3 text-sm text-sm font-medium">Here you can manage all the customer requests and keep the track of it to get it done as soon as possible.</p>
                            <div class="flex items-center flex-wrap ">
                                <a class="text-yellow-500 text-md font-medium inline-flex items-center md:mb-2 lg:mb-0" href="customer_request_list.php">Continue
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-1 md:w-1/3">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full" src="assets/analysys.svg" alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">OVERVIEW</h2>
                            <h1 class="title-font text-md font-medium text-gray-900 mb-3">Training Students</h1>
                            <p class="leading-relaxed mb-3 text-sm font-medium">Here you can manage and keep track of all the students who are registered for driving classes.</p>
                            <div class="flex items-center flex-wrap ">
                                <a class="text-yellow-500 text-md font-medium inline-flex items-center md:mb-2 lg:mb-0" href="student_detail_list.php?page_no=1">Continue
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-1 md:w-1/3">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full" src="assets/car_maintainence.svg" alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">OVERVIEW</h2>
                            <h1 class="title-font text-md font-medium text-gray-900 mb-3">Car Maintainence Records</h1>
                            <p class="leading-relaxed mb-3 text-sm font-medium">Here you can overview and add car maintainence records to keep track on expenses on car.</p>
                            <div class="flex items-center flex-wrap ">
                                <a class="text-yellow-500 text-md font-medium inline-flex items-center md:mb-2 lg:mb-0" href="car_maintainence_records.php">Continue
                                    <svg class=" w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-1 md:w-1/3">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full" src="assets/fuel_consumption_entry.svg" alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">OVERVIEW</h2>
                            <h1 class="title-font text-md font-medium text-gray-900 mb-3">Fuel Consumption Records</h1>
                            <p class="leading-relaxed mb-3 text-sm font-medium">Here you can overview and add fuel consumption records to keep track on fuel consumption of each car.</p>
                            <div class="flex items-center flex-wrap ">
                                <a class="text-yellow-500 text-md font-medium inline-flex items-center md:mb-2 lg:mb-0" href="fuel_consumption_records.php">Continue
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-1 md:w-1/3">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full" src="assets/staff_registration.svg" alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">OVERVIEW</h2>
                            <h1 class="title-font text-md font-medium text-gray-900 mb-3">Salary Records</h1>
                            <p class="leading-relaxed mb-3 text-sm font-medium">It helps you to overview and add salary records, also you can track salaries disbursed to staff.</p>
                            <div class="flex items-center flex-wrap ">
                                <a class="text-yellow-500 text-md font-medium inline-flex items-center md:mb-2 lg:mb-0" href="salary_records.php">Continue
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-1 md:w-1/3">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full" src="assets/pandl.svg" alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">OVERVIEW</h2>
                            <h1 class="title-font text-md font-medium text-gray-900 mb-3">Net Profit & Expense Statements</h1>
                            <p class="leading-relaxed mb-3 text-sm font-medium">It helps you to overview the exact numbers of total profit and expenses along with graphical representation.</p>
                            <div class="flex items-center flex-wrap ">
                                <a class="text-yellow-500 text-md font-medium inline-flex items-center md:mb-2 lg:mb-0" href="profit_and_expense_page.php">Continue
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container bg-yellow-100 px-12 py-4 mx-auto">
            <footer class="text-center text-xs lg:text-left">
                <div class="text-gray-500 font-medium text-left p-2">
                    ?? 2023 Copyright: Amaze motor driving school, panel designed & developed by uxstechnologies
                </div>
            </footer>
        </div>
    </section>
</body>

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