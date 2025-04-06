<?php 
$pageTitle = "FD Calculator | MultiTool";
include '../../includes/common-header.php';
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <h1><i class="fas fa-piggy-bank text-primary"></i> Fixed Deposit Calculator</h1>
            <p class="lead">Calculate returns on your Fixed Deposit investment.</p>
            
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <form id="fdForm">
                        <div class="mb-3">
                            <label for="principalAmount" class="form-label">Principal Amount (₹)</label>
                            <input type="number" class="form-control" id="principalAmount" placeholder="e.g. 100000" required>
                        </div>
                        <div class="mb-3">
                            <label for="interestRate" class="form-label">Interest Rate (% p.a.)</label>
                            <input type="number" step="0.01" class="form-control" id="interestRate" placeholder="e.g. 6.5" required>
                        </div>
                        <div class="mb-3">
                            <label for="tenure" class="form-label">Tenure (years)</label>
                            <input type="number" class="form-control" id="tenure" placeholder="e.g. 5" required>
                        </div>
                        <div class="mb-3">
                            <label for="compounding" class="form-label">Compounding Frequency</label>
                            <select class="form-select" id="compounding" required>
                                <option value="1">Annually</option>
                                <option value="2">Semi-Annually</option>
                                <option value="4">Quarterly</option>
                                <option value="12" selected>Monthly</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Calculate</button>
                    </form>
                    
                    <div id="fdResult" class="mt-4" style="display: none;">
                        <h4>Results</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th>Maturity Amount</th>
                                <td id="maturityAmount">₹0</td>
                            </tr>
                            <tr>
                                <th>Interest Earned</th>
                                <td id="interestEarned">₹0</td>
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
document.getElementById('fdForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const principal = parseFloat(document.getElementById('principalAmount').value);
    const rate = parseFloat(document.getElementById('interestRate').value);
    const years = parseInt(document.getElementById('tenure').value);
    const compounding = parseInt(document.getElementById('compounding').value);
    
    // Compound interest formula: A = P * (1 + r/n)^(n*t)
    const amount = principal * Math.pow(1 + (rate / 100) / compounding, compounding * years);
    const interest = amount - principal;
    
    document.getElementById('maturityAmount').textContent = '₹' + amount.toFixed(2);
    document.getElementById('interestEarned').textContent = '₹' + interest.toFixed(2);
    document.getElementById('fdResult').style.display = 'block';
});
</script>

<?php include '../../includes/common-footer.php'; ?>