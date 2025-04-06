<?php 
$pageTitle = "SIP Calculator | MultiTool";
include '../../includes/common-header.php';
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <h1><i class="fas fa-chart-line text-primary"></i> SIP Calculator</h1>
            <p class="lead">Calculate returns on your Systematic Investment Plan (SIP).</p>
            
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <form id="sipForm">
                        <div class="mb-3">
                            <label for="monthlyInvestment" class="form-label">Monthly Investment (₹)</label>
                            <input type="number" class="form-control" id="monthlyInvestment" placeholder="e.g. 5000" required>
                        </div>
                        <div class="mb-3">
                            <label for="investmentPeriod" class="form-label">Investment Period (years)</label>
                            <input type="number" class="form-control" id="investmentPeriod" placeholder="e.g. 10" required>
                        </div>
                        <div class="mb-3">
                            <label for="expectedReturn" class="form-label">Expected Return Rate (% p.a.)</label>
                            <input type="number" step="0.01" class="form-control" id="expectedReturn" placeholder="e.g. 12" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Calculate</button>
                    </form>
                    
                    <div id="sipResult" class="mt-4" style="display: none;">
                        <h4>Results</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th>Total Investment</th>
                                <td id="totalInvestment">₹0</td>
                            </tr>
                            <tr>
                                <th>Estimated Returns</th>
                                <td id="estimatedReturns">₹0</td>
                            </tr>
                            <tr>
                                <th>Total Value</th>
                                <td id="totalValue">₹0</td>
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
document.getElementById('sipForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const monthlyInvestment = parseFloat(document.getElementById('monthlyInvestment').value);
    const years = parseInt(document.getElementById('investmentPeriod').value);
    const rate = parseFloat(document.getElementById('expectedReturn').value);
    
    const months = years * 12;
    const monthlyRate = rate / 12 / 100;
    
    // Future value of SIP formula: FV = P * [(1 + r)^n - 1] / r * (1 + r)
    const futureValue = monthlyInvestment * (Math.pow(1 + monthlyRate, months) - 1) / monthlyRate * (1 + monthlyRate);
    const totalInvestment = monthlyInvestment * months;
    const estimatedReturns = futureValue - totalInvestment;
    
    document.getElementById('totalInvestment').textContent = '₹' + totalInvestment.toFixed(2);
    document.getElementById('estimatedReturns').textContent = '₹' + estimatedReturns.toFixed(2);
    document.getElementById('totalValue').textContent = '₹' + futureValue.toFixed(2);
    document.getElementById('sipResult').style.display = 'block';
});
</script>

<?php include '../../includes/common-footer.php'; ?>