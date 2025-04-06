<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <i class="fas fa-calculator me-2"></i>MultiTool
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/"><i class="fas fa-home me-1"></i> Home</a>
                </li>
                
                <!-- Finance Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="financeDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-money-bill-wave me-1"></i> Finance
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/tools/finance/emi-calculator.php">EMI Calculator</a></li>
                        <li><a class="dropdown-item" href="/tools/finance/personal-loan.php">Personal Loan Calculator</a></li>
                        <li><a class="dropdown-item" href="/tools/finance/home-loan.php">Home Loan Calculator</a></li>
                        <li><a class="dropdown-item" href="/tools/finance/car-loan.php">Car Loan Calculator</a></li>
                        <li><a class="dropdown-item" href="/tools/finance/loan-prepayment.php">Loan Prepayment Calculator</a></li>
                    </ul>
                </li>
                
                <!-- Investment Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="investmentDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-chart-line me-1"></i> Investment
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/tools/investment/sip-calculator.php">SIP Calculator</a></li>
                        <li><a class="dropdown-item" href="/tools/investment/fd-calculator.php">FD Calculator</a></li>
                        <li><a class="dropdown-item" href="/tools/investment/roi-calculator.php">ROI Calculator</a></li>
                        <li><a class="dropdown-item" href="/tools/investment/compound-interest.php">Compound Interest Calculator</a></li>
                        <li><a class="dropdown-item" href="/tools/investment/profit-margin.php">Profit Margin Calculator</a></li>
                    </ul>
                </li>
                
                <!-- More dropdown menus would go here -->
                
            </ul>
            <form class="d-flex" action="/search.php" method="get">
                <input class="form-control me-2" type="search" placeholder="Search tools..." name="q">
                <button class="btn btn-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>