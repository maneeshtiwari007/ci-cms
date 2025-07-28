<?= $this->extend('frontend/layouts/main') ?>

<?= $this->section('content') ?>

<header class="bg-dark text-white  py-5 pt-5 position-relative" style="background-image: url('assets/images/inner-banner.jpg'); background-size: cover; background-position: center;">
  <div class="container">
    <h1 class="display-6 text-white fw-bold">Calculate Your Monthly IT Cost</h1>
    <p class="lead  text-white">Estimate your monthly expenses based on your business needs.</p>
  </div>
  <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0"></div>
</header>


<!-- Page Header with Background Image -->
<section class="breadcrumb-container">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a href="/" class="">Home</a></li>
        <li class="breadcrumb-item active " aria-current="page">IT Cost Calculator</li>
      </ol>
    </nav>
  </div>
</section>


<section>
  
  <!-- HTML5 Form Structure (Bootstrap 5 Ready) -->
<div class="container py-5">
  <h3 class="mb-4">How much would Australia wide, 9 to 5 and 24/7 IT support cost for your business?</h3>
  <form class="it-cost-form" id="it-cost-form">
    <div class="row">
      <div class="col-md-6">
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Helpdesk Support 
              <i class="bi bi-info-circle-fill" data-bs-toggle="tooltip" title="If you business is primarily open during business hours then chose 9 to 5 support which will save you the money by paying only what you use"></i>
            </label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="helpdesk" value="9 to 5 Support" checked>
                <label class="form-check-label">9 to 5 Support</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="helpdesk" value="24/7 Support">
                <label class="form-check-label">24/7 Support</label>
              </div>
            </div>
          </div>
    
          <div class="col-md-6">
            <label for="totailComputer" class="form-label">Number of Computers
              <i class="bi bi-info-circle-fill" data-bs-toggle="tooltip" title="Total office computers used in your office which requirement updates and maintenance, expert ongoing maintenance strt from $31 per pc."></i>
            </label>
            <input type="number" class="form-control" name="totailComputer" min="0" value="0">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="printers" class="form-label">Number of Network Printers
              <i class="bi bi-info-circle-fill" data-bs-toggle="tooltip" title="How many network printers you printer to, if not sure leave it blank"></i>
            </label>
            <input type="number" class="form-control" name="printers" min="0" value="0">
          </div>
          <div class="col-md-6">
            <label for="networkDevices" class="form-label">Number of Network Devices</label>
            <input type="number" class="form-control" name="networkDevices" min="0" value="0">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Do you have servers?
              <i class="bi bi-info-circle-fill" data-bs-toggle="tooltip" title="We provide unlimited, 24/7 support and maintenance for your servers for just $99 per server per month."></i>
            </label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ifserver" value="No" checked>
                <label class="form-check-label">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ifserver" value="Yes">
                <label class="form-check-label">Yes</label>
              </div>
            </div>
          </div>
    
          <div class="col-md-6 manyServer" style="display:none;">
            <label for="totailserver" class="form-label">Number of Servers
              <i class="bi bi-info-circle-fill" data-bs-toggle="tooltip" title="If you have servers, please specify the number of servers you have. We provide unlimited, 24/7 support and maintenance for your servers for just $99 per server per month."></i>
            </label>
            <input type="number" class="form-control" name="totailserver" id="totailserver" min="0" value="0">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">On-site Support Rate
              <i class="bi bi-info-circle-fill" data-bs-toggle="tooltip" title="Choose the support rate that best fits your business needs. Standard support is available during business hours, while Premium support includes after-hours assistance."></i>
            </label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="supportrate" value="Standard" checked>
                <label class="form-check-label">Standard</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="supportrate" value="Premium">
                <label class="form-check-label">Premium</label>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Store Off-site Backups?
              <i class="bi bi-info-circle-fill" data-bs-toggle="tooltip" title="We offer off-site backup services to ensure your data is safe and secure. This service is available for an additional monthly fee."></i>
            </label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="offSiteBackup" value="No" checked>
                <label class="form-check-label">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="offSiteBackup" value="Yes">
                <label class="form-check-label">Yes</label>
              </div>
            </div>
          </div>
    
          <div class="col-md-6 storeOffSiteBackupDiv" style="display:none;">
            <p class="text-muted">Off-site backup cost: $50</p>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Imaging Based Backups?
              <i class="bi bi-info-circle-fill" data-bs-toggle="tooltip" title="Imaging based backups provide a complete snapshot of your system, allowing for quick recovery in case of data loss. This service is available for an additional monthly fee."></i>
            </label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="imagingBasedBackup" value="No" checked>
                <label class="form-check-label">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="imagingBasedBackup" value="Yes">
                <label class="form-check-label">Yes</label>
              </div>
            </div>
          </div>
    
          <div class="col-md-6 imagingBasedBackupDiv" style="display:none;">
            <p class="text-muted">Imaging backup cost: $75</p>
          </div>
        </div>

      </div>
      <div class="col-md-6">
        <h5 class="mb-3">Cost Summary</h5>
        <div class="table-responsive">
          <table class="table table-bordered table-striped align-middle text-center">
            <thead class="table-light">
              <tr>
                <th scope="col">Item</th>
                <th scope="col">Quantity</th>
                <th scope="col">Cost</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Computers</strong></td>
                <td><span id="totalCom">0</span></td>
                <td><span id="costComputer2">$0</span></td>
              </tr>
              <tr>
                <td><strong>Servers</strong></td>
                <td><span id="totalSer">0</span></td>
                <td><span id="costServer2">$0</span></td>
              </tr>
              <tr>
                <td><strong>Printers</strong></td>
                <td><span id="totalNetwork">0</span></td>
                <td><span id="costNetwork2">$0</span></td>
              </tr>
              <tr>
                <td><strong>Network Devices</strong></td>
                <td><span id="totalNetworkDevices">0</span></td>
                <td><span id="costNetworkDevices2">$0</span></td>
              </tr>
              <tr class="table-primary">
                <td><strong>Total Monthly<br>(ex GST)</strong></td>
                <td colspan="2"><span id="totalMothlyTaxCost">$0</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      
      
    </div>
  
    <hr>
<div class="row">
  <div class="col-md-6">
    <div class="mb-3">
      <label for="name" class="form-label">Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
    </div>
  </div>
  <div class="col-md-6">
    <div class="mb-3">
      <label for="email" class="form-label">Your Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
    </div>
  </div>
  <div class="col-md-6">
    <div class="mb-3">
      <label for="phone" class="form-label">Phone:</label>
      <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
    </div>
  </div>
  <div class="col-md-12">
    <div class="mt-4">
      <button type="submit" class="btn btn-primary">Submit Inquiry</button>
    </div>
  </div>
</div>


    <!-- Hidden fields for backend -->
    <input type="hidden" id="costComputersHidden" name="costComputersHidden">
    <input type="hidden" id="costServersHidden" name="costServersHidden">
    <input type="hidden" id="costNetworksPrintersHidden" name="costNetworksPrintersHidden">
    <input type="hidden" id="costNetworkDevicesHidden" name="costNetworkDevicesHidden">
    <input type="hidden" id="offSiteBackupHidden" name="offSiteBackupHidden">
    <input type="hidden" id="imagingBasedBackupHidden" name="imagingBasedBackupHidden">
    <input type="hidden" id="totalMothlyTaxCostHidden" name="totalMothlyTaxCostHidden">
    

    <!-- <div class="mt-4">
      <button type="submit" class="btn btn-primary">Submit Inquiry</button>
    </div> -->
  </form>
</div>


</section>

<?= $this->endSection() ?>