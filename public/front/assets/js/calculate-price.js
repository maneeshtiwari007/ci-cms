$(document).ready(function () {
    const rates = {
      computer: 30,
      server: 185,
      printer: 30,
      network: 40,
      offSiteBackup: 50,
      imagingBackup: 75,
      premiumMultiplier: 1.3,
    };
  
    function calculateTotal() {
      let helpdesk = $("input[name='helpdesk']:checked").val();
      let computers = parseInt($("input[name='totailComputer']").val()) || 0;
      let servers = parseInt($("input[name='totailserver']").val()) || 0;
      let printers = parseInt($("input[name='printers']").val()) || 0;
      let devices = parseInt($("input[name='networkDevices']").val()) || 0;
  
      let backup = $("input[name='offSiteBackup']:checked").val();
      let imaging = $("input[name='imagingBasedBackup']:checked").val();
  
      let multiplier = helpdesk === "24/7 Support" ? rates.premiumMultiplier : 1;
  
      let compCost = computers * rates.computer * multiplier;
      let servCost = servers * rates.server * multiplier;
      let printCost = printers * rates.printer * multiplier;
      let devCost = devices * rates.network * multiplier;
  
      let total = compCost + servCost + printCost + devCost;
      if (backup === "Yes") total += rates.offSiteBackup;
      if (imaging === "Yes") total += rates.imagingBackup;
  
      // Display values
      $("#costComputer2").text(`$${compCost}`);
      $("#costServer2").text(`$${servCost}`);
      $("#costNetwork2").text(`$${printCost}`);
      $("#costNetworkDevices2").text(`$${devCost}`);
      $("#totalCom").text(computers);
      $("#totalSer").text(servers);
      $("#totalNetwork").text(printers);
      $("#totalNetworkDevices").text(devices);
      $("#totalMothlyTaxCost").text(`$${total}`);
  
      // Update hidden fields
      $("#costComputersHidden").val(compCost);
      $("#costServersHidden").val(servCost);
      $("#costNetworksPrintersHidden").val(printCost);
      $("#costNetworkDevicesHidden").val(devCost);
      $("#offSiteBackupHidden").val(backup === "Yes" ? rates.offSiteBackup : 0);
      $("#imagingBasedBackupHidden").val(imaging === "Yes" ? rates.imagingBackup : 0);
      $("#totalMothlyTaxCostHidden").val(total);
    }
  
    // Event bindings
    $("input[name='ifserver']").change(function () {
      $(".manyServer").toggle(this.value === "Yes");
    });
  
    $("input[name='offSiteBackup']").change(function () {
      $(".storeOffSiteBackupDiv").toggle(this.value === "Yes");
      calculateTotal();
    });
  
    $("input[name='imagingBasedBackup']").change(function () {
      $(".imagingBasedBackupDiv").toggle(this.value === "Yes");
      calculateTotal();
    });
  
    $("input[type='number'], input[type='radio']").on("change keyup", calculateTotal);
  
    // Bootstrap tooltips
    $('[data-bs-toggle="tooltip"]').tooltip();
  
    calculateTotal();
  });