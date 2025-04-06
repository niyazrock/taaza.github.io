<?php 
$pageTitle = "Profit Margin Calculator | MultiTool";
include '../../includes/common-header.php';
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <h1><i class="fas fa-money-bill-trend-up text-primary"></i> Profit Margin Calculator</h1>
            <p class="lead">Calculate your profit margin percentage and markup.</p>
            
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <form id="profitForm">
                        <div class="mb-3">
                            <label for="cost" class="form-label">Cost (₹)</label>
                            <input type="number" step="0.01" class="form-control" id="cost" placeholder="e.g. 50" required>
                        </div>
                        <div class="mb-3">
                            <label for="revenue" class="form-label">Revenue (Selling Price) (₹)</label>
                            <input type="number" step="0.01" class="form-control" id="revenue" placeholder="e.g. 75" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Calculate</button>
                    </form>
                    
                    <div id="profitResult" class="mt-4" style="display: none;">
                        <h4>Results</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th>Profit Amount</th>
                                <td id="profitAmount">₹0</td>
                            </tr>
                            <tr>
                                <th>Profit Margin</th>
                                <td id="profitMargin">0%</td>
                            </tr>
                            <tr>
                                <th>Markup Percentage</th>
                                <td id="markupPercentage">0%</td>
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
document.getElementById('profitForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const cost = parseFloat(document.getElementById('cost').value);
    const revenue = parseFloat(document.getElementById('revenue').value);
    
    const profit = revenue - cost;
    const margin = (profit / revenue) * 100;
    const markup = (profit / cost) * 100;
    
    document.getElementById('profitAmount').textContent = '₹' + profit.toFixed(2);
    document.getElementById('profitMargin').textContent = margin.toFixed(2) + '%';
    document.getElementById('markupPercentage').textContent = markup.toFixed(2) + '%';
    document.getElementById('profitResult').style.display = 'block';
});
</script>

<?php include '../../includes/common-footer.php'; ?>