<?php 
$pageTitle = "Car Loan Calculator | MultiTool";
include '../../includes/common-header.php';
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <h1><i class="fas fa-car text-primary"></i> Car Loan Calculator</h1>
            <p class="lead">Calculate your car loan EMI and interest payments.</p>
            
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <form id="carLoanForm">
                        <div class="mb-3">
                            <label for="carPrice" class="form-label">Car Price (₹)</label>
                            <input type="number" class="form-control" id="carPrice" placeholder="e.g. 800000" required>
                        </div>
                        <div class="mb-3">
                            <label for="downPayment" class="form-label">Down Payment (₹)</label>
                            <input type="number" class="form-control" id="downPayment" placeholder="e.g. 200000" required>
                        </div>
                        <div class="mb-3">
                            <label for="loanTerm" class="form-label">Loan Term (years)</label>
                            <input type="number" class="form-control" id="loanTerm" placeholder="e.g. 5" required>
                        </div>
                        <div class="mb-3">
                            <label for="interestRate" class="form-label">Interest Rate (% p.a.)</label>
                            <input type="number" step="0.01" class="form-control" id="interestRate" placeholder="e.g. 9.5" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Calculate</button>
                    </form>
                    
                    <div id="loanResult" class="mt-4" style="display: none;">
                        <h4>Results</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th>Loan Amount</th>
                                <td id="loanAmount">₹0</td>
                            </tr>
                            <tr>
                                <th>Monthly EMI</th>
                                <td id="monthlyEmi">₹0</td>
                            </tr>
                            <tr>
                                <th>Total Interest</th>
                                <td id="totalInterest">₹0</td>
                            </tr>
                            <tr>
                                <th>Total Payment</th>
                                <td id="totalPayment">₹0</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <?php include '../../includes/ads.php'; ?>
        </div>
    </div>
</div>

<script>
document.getElementById('carLoanForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const carPrice = parseFloat(document.getElementById('carPrice').value);
    const downPayment = parseFloat(document.getElementById('downPayment').value);
    const years = parseInt(document.getElementById('loanTerm').value);
    const rate = parseFloat(document.getElementById('interestRate').value);
    
    const loanAmount = carPrice - downPayment;
    const months = years * 12;
    const monthlyRate = rate / 12 / 100;
    const emi = loanAmount * monthlyRate * Math.pow(1 + monthlyRate, months) / (Math.pow(1 + monthlyRate, months) - 1);
    const totalPayment = emi * months;
    const totalInterest = totalPayment - loanAmount;
    
    document.getElementById('loanAmount').textContent = '₹' + loanAmount.toFixed(2);
    document.getElementById('monthlyEmi').textContent = '₹' + emi.toFixed(2);
    document.getElementById('totalInterest').textContent = '₹' + totalInterest.toFixed(2);
    document.getElementById('totalPayment').textContent = '₹' + totalPayment.toFixed(2);
    document.getElementById('loanResult').style.display = 'block';
});
</script>

<?php include '../../includes/common-footer.php'; ?>