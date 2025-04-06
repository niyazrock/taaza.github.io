<?php 
$pageTitle = "ROI Calculator | MultiTool";
include '../../includes/common-header.php';
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <h1><i class="fas fa-percentage text-primary"></i> ROI Calculator</h1>
            <p class="lead">Calculate Return on Investment (ROI) for your investments.</p>
            
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <form id="roiForm">
                        <div class="mb-3">
                            <label for="initialInvestment" class="form-label">Initial Investment (₹)</label>
                            <input type="number" class="form-control" id="initialInvestment" placeholder="e.g. 100000" required>
                        </div>
                        <div class="mb-3">
                            <label for="finalValue" class="form-label">Final Value (₹)</label>
                            <input type="number" class="form-control" id="finalValue" placeholder="e.g. 150000" required>
                        </div>
                        <div class="mb-3">
                            <label for="investmentPeriod" class="form-label">Investment Period (years)</label>
                            <input type="number" step="0.1" class="form-control" id="investmentPeriod" placeholder="e.g. 3.5" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Calculate ROI</button>
                    </form>
                    
                    <div id="roiResult" class="mt-4" style="display: none;">
                        <h4>Results</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th>Total Return</th>
                                <td id="totalReturn">₹0</td>
                            </tr>
                            <tr>
                                <th>ROI</th>
                                <td id="roiPercentage">0%</td>
                            </tr>
                            <tr>
                                <th>Annualized ROI</th>
                                <td id="annualizedRoi">0%</td>
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
document.getElementById('roiForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const initial = parseFloat(document.getElementById('initialInvestment').value);
    const final = parseFloat(document.getElementById('finalValue').value);
    const years = parseFloat(document.getElementById('investmentPeriod').value);
    
    const totalReturn = final - initial;
    const roi = ((final - initial) / initial) * 100;
    const annualizedRoi = (Math.pow(final / initial, 1 / years) - 1) * 100;
    
    document.getElementById('totalReturn').textContent = '₹' + totalReturn.toFixed(2);
    document.getElementById('roiPercentage').textContent = roi.toFixed(2) + '%';
    document.getElementById('annualizedRoi').textContent = annualizedRoi.toFixed(2) + '%';
    document.getElementById('roiResult').style.display = 'block';
});
</script>

<?php include '../../includes/common-footer.php'; ?>