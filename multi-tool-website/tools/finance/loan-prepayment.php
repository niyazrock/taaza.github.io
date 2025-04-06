<?php 
$pageTitle = "Loan Prepayment Calculator | MultiTool";
include '../../includes/common-header.php';
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <h1><i class="fas fa-money-bill-wave text-primary"></i> Loan Prepayment Calculator</h1>
            <p class="lead">Calculate savings from prepaying your loan.</p>
            
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <form id="prepaymentForm">
                        <div class="mb-3">
                            <label for="currentLoanAmount" class="form-label">Current Loan Balance (₹)</label>
                            <input type="number" class="form-control" id="currentLoanAmount" placeholder="e.g. 500000" required>
                        </div>
                        <div class="mb-3">
                            <label for="interestRate" class="form-label">Interest Rate (% p.a.)</label>
                            <input type="number" step="0.01" class="form-control" id="interestRate" placeholder="e.g. 8.5" required>
                        </div>
                        <div class="mb-3">
                            <label for="remainingTerm" class="form-label">Remaining Term (months)</label>
                            <input type="number" class="form-control" id="remainingTerm" placeholder="e.g. 24" required>
                        </div>
                        <div class="mb-3">
                            <label for="prepaymentAmount" class="form-label">Prepayment Amount (₹)</label>
                            <input type="number" class="form-control" id="prepaymentAmount" placeholder="e.g. 100000" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Calculate Savings</button>
                    </form>
                    
                    <div id="prepaymentResult" class="mt-4" style="display: none;">
                        <h4>Results</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th>New Loan Balance</th>
                                <td id="newLoanBalance">₹0</td>
                            </tr>
                            <tr>
                                <th>Interest Saved</th>
                                <td id="interestSaved">₹0</td>
                            </tr>
                            <tr>
                                <th>New EMI (if term unchanged)</th>
                                <td id="newEmi">₹0</td>
                            </tr>
                            <tr>
                                <th>New Term (if EMI unchanged)</th>
                                <td id="newTerm">0 months</td>
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
document.getElementById('prepaymentForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const currentBalance = parseFloat(document.getElementById('currentLoanAmount').value);
    const rate = parseFloat(document.getElementById('interestRate').value);
    const remainingTerm = parseInt(document.getElementById('remainingTerm').value);
    const prepayment = parseFloat(document.getElementById('prepaymentAmount').value);
    
    const newBalance = currentBalance - prepayment;
    const monthlyRate = rate / 12 / 100;
    
    // Original EMI
    const originalEmi = currentBalance * monthlyRate * Math.pow(1 + monthlyRate, remainingTerm) / (Math.pow(1 + monthlyRate, remainingTerm) - 1);
    const originalTotalInterest = (originalEmi * remainingTerm) - currentBalance;
    
    // New EMI with same term
    const newEmi = newBalance * monthlyRate * Math.pow(1 + monthlyRate, remainingTerm) / (Math.pow(1 + monthlyRate, remainingTerm) - 1);
    const newTotalInterest = (newEmi * remainingTerm) - newBalance;
    
    // New term with same EMI
    const numerator = Math.log(originalEmi / (originalEmi - newBalance * monthlyRate));
    const denominator = Math.log(1 + monthlyRate);
    const newTerm = Math.ceil(numerator / denominator);
    const interestWithSameEmi = (originalEmi * newTerm) - newBalance;
    
    const interestSaved = originalTotalInterest - newTotalInterest;
    
    document.getElementById('newLoanBalance').textContent = '₹' + newBalance.toFixed(2);
    document.getElementById('interestSaved').textContent = '₹' + interestSaved.toFixed(2);
    document.getElementById('newEmi').textContent = '₹' + newEmi.toFixed(2);
    document.getElementById('newTerm').textContent = newTerm + ' months';
    document.getElementById('prepaymentResult').style.display = 'block';
});
</script>

<?php include '../../includes/common-footer.php'; ?>