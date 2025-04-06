<?php 
$pageTitle = "Home Loan Calculator | MultiTool";
include '../../includes/common-header.php';
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <h1><i class="fas fa-home text-primary"></i> Home Loan Calculator</h1>
            <p class="lead">Calculate your home loan EMI and interest payments.</p>
            
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <form id="homeLoanForm">
                        <div class="mb-3">
                            <label for="loanAmount" class="form-label">Loan Amount (₹)</label>
                            <input type="number" class="form-control" id="loanAmount" placeholder="e.g. 3000000" required>
                        </div>
                        <div class="mb-3">
                            <label for="interestRate" class="form-label">Interest Rate (% p.a.)</label>
                            <input type="number" step="0.01" class="form-control" id="interestRate" placeholder="e.g. 7.5" required>
                        </div>
                        <div class="mb-3">
                            <label for="loanTenure" class="form-label">Loan Tenure (years)</label>
                            <input type="number" class="form-control" id="loanTenure" placeholder="e.g. 20" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Calculate</button>
                    </form>
                    
                    <div id="loanResult" class="mt-4" style="display: none;">
                        <h4>Results</h4>
                        <table class="table table-bordered">
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
document.getElementById('homeLoanForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const principal = parseFloat(document.getElementById('loanAmount').value);
    const rate = parseFloat(document.getElementById('interestRate').value);
    const years = parseInt(document.getElementById('loanTenure').value);
    const months = years * 12;
    
    const monthlyRate = rate / 12 / 100;
    const emi = principal * monthlyRate * Math.pow(1 + monthlyRate, months) / (Math.pow(1 + monthlyRate, months) - 1);
    const totalPayment = emi * months;
    const totalInterest = totalPayment - principal;
    
    document.getElementById('monthlyEmi').textContent = '₹' + emi.toFixed(2);
    document.getElementById('totalInterest').textContent = '₹' + totalInterest.toFixed(2);
    document.getElementById('totalPayment').textContent = '₹' + totalPayment.toFixed(2);
    document.getElementById('loanResult').style.display = 'block';
});
</script>

<?php include '../../includes/common-footer.php'; ?>