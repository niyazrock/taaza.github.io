<?php 
$pageTitle = "MultiTool - Free Online Calculators & Tools";
include 'includes/common-header.php';
?>

<div class="container mt-4">
    <div class="jumbotron bg-light p-5 rounded">
        <h1 class="display-4"><i class="fas fa-calculator text-primary"></i> Welcome to MultiTool!</h1>
        <p class="lead">Your one-stop destination for free online calculators and tools for all your needs.</p>
        <hr class="my-4">
        <p>From finance to fitness, education to engineering - we've got you covered with accurate and easy-to-use tools.</p>
        <a class="btn btn-primary btn-lg" href="#tools" role="button">Explore Tools</a>
    </div>

    <?php include 'includes/ads.php'; ?>

    <section id="tools" class="my-5">
        <h2 class="text-center mb-4"><i class="fas fa-tools"></i> Our Tools</h2>
        
        <div class="row">
            <!-- Finance & Loan Calculators -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-primary text-white">
                        <h5><i class="fas fa-money-bill-wave me-2"></i>Finance & Loan</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-calculator me-2 text-primary"></i><a href="/tools/finance/emi-calculator.php">EMI Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-hand-holding-usd me-2 text-primary"></i><a href="/tools/finance/personal-loan.php">Personal Loan Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-home me-2 text-primary"></i><a href="/tools/finance/home-loan.php">Home Loan Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-car me-2 text-primary"></i><a href="/tools/finance/car-loan.php">Car Loan Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-money-bill-wave me-2 text-primary"></i><a href="/tools/finance/loan-prepayment.php">Loan Prepayment Calculator</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Investment & Business Calculators -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-success text-white">
                        <h5><i class="fas fa-chart-line me-2"></i>Investment & Business</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-piggy-bank me-2 text-success"></i><a href="/tools/investment/sip-calculator.php">SIP Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-file-invoice-dollar me-2 text-success"></i><a href="/tools/investment/fd-calculator.php">FD Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-percentage me-2 text-success"></i><a href="/tools/investment/roi-calculator.php">ROI Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-calculator me-2 text-success"></i><a href="/tools/investment/compound-interest.php">Compound Interest Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-money-bill-trend-up me-2 text-success"></i><a href="/tools/investment/profit-margin.php">Profit Margin Calculator</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Tax & Salary Calculators -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-danger text-white">
                        <h5><i class="fas fa-file-invoice-dollar me-2"></i>Tax & Salary</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-file-invoice me-2 text-danger"></i><a href="/tools/tax/income-tax.php">Income Tax Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-receipt me-2 text-danger"></i><a href="/tools/tax/gst-calculator.php">GST Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-percent me-2 text-danger"></i><a href="/tools/tax/tds-calculator.php">TDS Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-home me-2 text-danger"></i><a href="/tools/tax/hra-calculator.php">HRA Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-user-tie me-2 text-danger"></i><a href="/tools/tax/pension-calculator.php">Pension Calculator</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Real Estate & Rent Calculators -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-warning text-dark">
                        <h5><i class="fas fa-home me-2"></i>Real Estate & Rent</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-home me-2 text-warning"></i><a href="/tools/real-estate/home-affordability.php">Home Affordability Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-building me-2 text-warning"></i><a href="/tools/real-estate/rental-yield.php">Rental Yield Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-home me-2 text-warning"></i><a href="/tools/real-estate/property-emi.php">Property EMI Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-file-signature me-2 text-warning"></i><a href="/tools/real-estate/stamp-duty.php">Stamp Duty Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-hammer me-2 text-warning"></i><a href="/tools/real-estate/construction-cost.php">Construction Cost Calculator</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Health & Fitness Calculators -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-info text-white">
                        <h5><i class="fas fa-heartbeat me-2"></i>Health & Fitness</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-weight me-2 text-info"></i><a href="/tools/health/bmi-calculator.php">BMI Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-fire me-2 text-info"></i><a href="/tools/health/bmr-calculator.php">BMR Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-utensils me-2 text-info"></i><a href="/tools/health/calorie-calculator.php">Calorie Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-tint me-2 text-info"></i><a href="/tools/health/water-intake.php">Water Intake Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-heartbeat me-2 text-info"></i><a href="/tools/health/heart-rate.php">Heart Rate Calculator</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Education & Age Calculators -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-secondary text-white">
                        <h5><i class="fas fa-graduation-cap me-2"></i>Education & Age</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-birthday-cake me-2 text-secondary"></i><a href="/tools/education/age-calculator.php">Age Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-percentage me-2 text-secondary"></i><a href="/tools/education/gpa-percentage.php">GPA to Percentage</a></li>
                            <li class="list-group-item"><i class="fas fa-calculator me-2 text-secondary"></i><a href="/tools/education/percentage-calculator.php">Percentage Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-graduation-cap me-2 text-secondary"></i><a href="/tools/education/grade-calculator.php">Grade Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-hand-holding-usd me-2 text-secondary"></i><a href="/tools/education/student-loan.php">Student Loan Calculator</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <!-- Science & Math Calculators -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-dark text-white">
                        <h5><i class="fas fa-flask me-2"></i>Science & Math</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-tachometer-alt me-2 text-dark"></i><a href="/tools/science/speed-distance-time.php">Speed, Distance & Time</a></li>
                            <li class="list-group-item"><i class="fas fa-bolt me-2 text-dark"></i><a href="/tools/science/force-calculator.php">Force Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-bolt me-2 text-dark"></i><a href="/tools/science/ohms-law.php">Ohm's Law Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-exchange-alt me-2 text-dark"></i><a href="/tools/science/unit-converter.php">Unit Converter</a></li>
                            <li class="list-group-item"><i class="fas fa-shapes me-2 text-dark"></i><a href="/tools/science/triangle-area.php">Triangle Area Calculator</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Shopping & Discount Calculators -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-purple text-white">
                        <h5><i class="fas fa-shopping-cart me-2"></i>Shopping & Discount</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-tag me-2 text-purple"></i><a href="/tools/shopping/discount-calculator.php">Discount Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-receipt me-2 text-purple"></i><a href="/tools/shopping/gst-inclusive-exclusive.php">GST Inclusive/Exclusive</a></li>
                            <li class="list-group-item"><i class="fas fa-tags me-2 text-purple"></i><a href="/tools/shopping/price-per-unit.php">Price per Unit Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-money-bill-wave me-2 text-purple"></i><a href="/tools/shopping/cashback-calculator.php">Cashback Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-utensils me-2 text-purple"></i><a href="/tools/shopping/tip-calculator.php">Tip Calculator</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Travel & Fuel Cost Calculators -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-teal text-white">
                        <h5><i class="fas fa-plane me-2"></i>Travel & Fuel</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-gas-pump me-2 text-teal"></i><a href="/tools/travel/fuel-cost.php">Fuel Cost Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-road me-2 text-teal"></i><a href="/tools/travel/toll-tax.php">Toll Tax Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-plane me-2 text-teal"></i><a href="/tools/travel/flight-time.php">Flight Time Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-taxi me-2 text-teal"></i><a href="/tools/travel/fare-estimator.php">Fare Estimator</a></li>
                            <li class="list-group-item"><i class="fas fa-money-bill-wave me-2 text-teal"></i><a href="/tools/travel/currency-converter.php">Currency Converter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Electricity & Energy Calculators -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-indigo text-white">
                        <h5><i class="fas fa-bolt me-2"></i>Electricity & Energy</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-lightbulb me-2 text-indigo"></i><a href="/tools/electricity/electricity-bill.php">Electricity Bill Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-solar-panel me-2 text-indigo"></i><a href="/tools/electricity/solar-savings.php">Solar Panel Savings</a></li>
                            <li class="list-group-item"><i class="fas fa-plug me-2 text-indigo"></i><a href="/tools/electricity/power-consumption.php">Power Consumption</a></li>
                            <li class="list-group-item"><i class="fas fa-battery-full me-2 text-indigo"></i><a href="/tools/electricity/battery-life.php">Battery Life Calculator</a></li>
                            <li class="list-group-item"><i class="fas fa-cloud me-2 text-indigo"></i><a href="/tools/electricity/carbon-footprint.php">Carbon Footprint Calculator</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/ads.php'; ?>
</div>

<?php include 'includes/common-footer.php'; ?>