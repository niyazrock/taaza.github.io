<?php 
$pageTitle = "Compound Interest Calculator | MultiTool";
include '../../includes/common-header.php';
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <h1><i class="fas fa-calculator text-primary"></i> Compound Interest Calculator</h1>
            <p class="lead">Calculate how your money can grow using compound interest.</p>
            
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <form id="compoundForm">
                        <div class="mb-3">
                            <label for="principal" class="form-label">Principal Amount (₹)</label>
                            <input type="number" class="form-control" id="principal" placeholder="e.g. 10000" required>
                        </div>
                        <div class="mb-3">
                            <label for="rate" class="form-label">Annual Interest Rate (%)</label>
                            <input type="number" step="0.01" class="form-control" id="rate" placeholder="e.g. 5" required>
                        </div>
                        <div class="mb-3">
                            <label for="time" class="form-label">Time Period (years)</label>
                            <input type="number" class="form-control" id="time" placeholder="e.g. 10" required>
                        </div>
                        <div class="mb-3">
                            <label for="compounding" class="form-label">Compounding Frequency</label>
                            <select class="form-select" id="compounding" required>
                                <option value="1">Annually</option>
                                <option value="2">Semi-Annually</option>
                                <option value="4">Quarterly</option>
                                <option value="12" selected>Monthly</option>
                                <option value="365">Daily</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="additional" class="form-label">Additional Contributions (₹/period, optional)</label>
                            <input type="number" class="form-control" id="additional" placeholder="e.g. 1000" value="0">
                        </div>
                        <button type="submit" class="btn btn-primary">Calculate</button>
                    </form>
                    
                    <div id="compoundResult" class="mt-4" style="display: none;">
                        <h4>Results</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th>Future Value</th>
                                <td id="futureValue">₹0</td>
                            </tr>
                            <tr>
                                <th>Total Contributions</th>
                                <td id="totalContributions">₹0</td>
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
document.getElementById('compoundForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const principal = parseFloat(document.getElementById('principal').value);
    const rate = parseFloat(document.getElementById('rate').value);
    const time = parseFloat(document.getElementById('time').value);
    const compounding = parseInt(document.getElementById('compounding').value);
    const additional = parseFloat(document.getElementById('additional').value) || 0;
    
    const periods = time * compounding;
    const periodicRate = rate / 100 / compounding;
    
    // Future value with regular contributions formula: FV = P(1+r)^n + C[((1+r)^n - 1)/r]
    const futureValue = principal * Math.pow(1 + periodicRate, periods) + 
                       additional * (Math.pow(1 + periodicRate, periods) - 1) / periodicRate;
    
    const totalContributions = principal + (additional * periods);
    const interestEarned = futureValue - totalContributions;
    
    document.getElementById('futureValue').textContent = '₹' + futureValue.toFixed(2);
    document.getElementById('totalContributions').textContent = '₹' + totalContributions.toFixed(2);
    document.getElementById('interestEarned').textContent = '₹' + interestEarned.toFixed(2);
    document.getElementById('compoundResult').style.display = 'block';
});
</script>

<?php include '../../includes/common-footer.php'; ?>