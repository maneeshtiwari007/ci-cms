<?= $this->extend('frontend/layouts/main') ?>
<?= $this->section('title') ?>Cyber Security<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Page Header with Background Image -->
<header class="bg-dark text-white py-5 pt-5 position-relative" style="background-image: url('<?= base_url('front/assets/images/inner-banner.jpg'); ?>'); background-size: cover; background-position: center;">
  <div class="container">
    <h1 class="display-6 text-white fw-bold">Cyber Security</h1>
    <p class="lead  text-white">We Safeguarding your Systems, Networks, and Data Against Evolving Online Threats</p>
  </div>
  <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0"></div>
</header>


<!-- Page Header with Background Image -->
<section class="breadcrumb-container">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a href="/" class="">Home</a></li>
        <li class="breadcrumb-item active " aria-current="page">Cyber Security</li>
      </ol>
    </nav>
  </div>
</section>


<section class="py-5">
  <div class="container">
    <h2 class="mb-4">Cyber Security</h2>
    <div class="row align-items-top">
      <!-- Left Column: Image -->
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="<?= base_url('front/assets/images/cyber-security.png') ?>" alt="IT Services" class="img-fluid rounded shadow" />
      </div>

      <!-- Right Column: Text Content -->
      <div class="col-md-6">
        <h3 class="mb-3">Protecting Your Digital World</h3>
        <p>
          In today’s connected world, cyber threats are constantly evolving, putting individuals and businesses at risk. Cyber security is the practice of safeguarding systems, networks, and data from malicious attacks, theft, or damage. Whether it’s personal information, financial transactions, or business operations, protecting your digital assets is no longer optional — it’s essential.
        </p>
        
        <div class="d-flex gap-2 flex-wrap">
            <span class="pill">Data Protection</span>
            <span class="pill">Financial Security</span>
            <span class="pill">Compliance</span>
            <span class="pill">Incident Response</span>
          </div>
        
        
       
      
      </div>
    </div>
  </div>
</section>


<section class="g-4">
  <div class="container">
     <div class="row">
  
      <!-- LEFT: Why Cyber Security Matters / Best Practices -->
      <article class="col-lg-6">
        <div class="mb-4">
          <h3 class="h4">Why Cyber Security Matters</h3>
          <ul class="list-unstyled mt-3">
            <li class="d-flex mb-2">
              <div class="me-3 feature-icon"><i class="bi bi-file-earmark-lock-fill"></i></div>
              <div>
                <strong>Data Protection</strong>
                <div class="muted">Prevent unauthorised access to sensitive information.</div>
              </div>
            </li>

            <li class="d-flex mb-2">
              <div class="me-3 feature-icon"><i class="bi bi-cash-stack"></i></div>
              <div>
                <strong>Financial Security</strong>
                <div class="muted">Avoid fraud, ransomware losses and identity theft.</div>
              </div>
            </li>

            <li class="d-flex mb-2">
              <div class="me-3 feature-icon"><i class="bi bi-person-badge-fill"></i></div>
              <div>
                <strong>Reputation Safety</strong>
                <div class="muted">A single breach can damage trust and credibility.</div>
              </div>
            </li>

            <li class="d-flex mb-2">
              <div class="me-3 feature-icon"><i class="bi bi-file-earmark-check-fill"></i></div>
              <div>
                <strong>Compliance</strong>
                <div class="muted">Meet regulations like GDPR, ISO 27001, NIST.</div>
              </div>
            </li>
          </ul>
        </div>
      </article>
       
      <article class="col-lg-6">
        <div class="mb-4">
          <h3 class="h4">Cyber Security Services We Offer</h3>
          <ul class="list-unstyled mt-3">
            <li class="d-flex mb-2">
              <div class="me-3 feature-icon">
                <i class="bi bi-search-heart-fill"></i>
              </div>
              <div>
                <strong>Network security assessments</strong>
                <div class="muted">Baseline risk analysis and hardening recommendations.</div>
              </div>
            </li>

            <li class="d-flex mb-2">
              <div class="me-3 feature-icon"><i class="bi bi-shield-check"></i></div>
              <div>
                <strong>Vulnerability scanning & penetration testing</strong>
                <div class="muted">Simulated attacks to expose weaknesses before adversaries do.</div>
              </div>
            </li>

            <li class="d-flex mb-2">
              <div class="me-3 feature-icon"><i class="bi bi-gear-fill"></i></div>
              <div>
                <strong>Managed firewall & endpoint protection</strong>
                <div class="muted">24/7 managed controls and monitoring.</div>
              </div>
            </li>

            <li class="d-flex mb-2">
              <div class="me-3 feature-icon"><i class="bi bi-activity"></i></div>
              <div>
                <strong>Incident response & recovery</strong>
                <div class="muted">Contain, investigate and restore after a breach.</div>
              </div>
            </li>
            
            <li class="d-flex mb-2">
              <div class="me-3 feature-icon"><i class="bi bi-people-fill"></i></div>
              <div>
                <strong>Cyber awareness training</strong>
                <div class="muted">Practical programs for staff & stakeholders.</div>
              </div>
            </li>
            
          </ul>
        </div>
      </article>
       
       
       <article class="col-lg-6">
        <div class="mb-4">
          <h3 class="h4">Common Cyber Threats</h3>
          <ul class="list-unstyled mt-3">
            <li class="d-flex mb-2">
              <div class="me-3 feature-icon">
                <i class="bi bi-envelope-fill"></i>
              </div>
              <div>
                <strong>Phishing Attacks</strong>
                <div class="muted">Fake emails or messages designed to steal credentials.</div>
              </div>
            </li>

            <li class="d-flex mb-2">
              <div class="me-3 feature-icon"><i class="bi bi-bug-fill"></i></div>
              <div>
                <strong>Spyware & Malware</strong>
                <div class="muted">Programs that track and exploit activity.</div>
              </div>
            </li>

            <li class="d-flex mb-2">
              <div class="me-3 feature-icon"><i class="bi bi-lock-fill"></i></div>
              <div>
                <strong>Ransomware</strong>
                <div class="muted">Malware that encrypts data and demands payment.</div>
              </div>
            </li>

            <li class="d-flex mb-2">
              <div class="me-3 feature-icon"><i class="bi bi-cloud-lightning-fill"></i></div>
              <div>
                <strong>DDoS Attacks</strong>
                <div class="muted">Overwhelming traffic to disrupt service availability.</div>
              </div>
            </li>
            
          </ul>
        </div>
      </article>
       
        <article class="col-lg-6">
        <div class="mb-4">
          <h3 class="h4">Best Practices (Quick Checklist)</h3>
          <ul class="list-unstyled mt-3">
            <li class="d-flex mb-2">
              <div class="me-3 feature-icon">
                <i class="bi bi-check-circle-fill"></i>
              </div>
              <div>
                <strong>Use strong passwords & Multi-Factor Authentication (MFA)</strong>
                <div class="muted">Passwords + MFA dramatically reduce account takeover risk.</div>
              </div>
            </li>

            <li class="d-flex mb-2">
              <div class="me-3 feature-icon"><i class="bi bi-arrow-repeat"></i></div>
              <div>
                <strong>Keep software updated</strong>
                <div class="muted">Patch vulnerabilities promptly (OS, firmware, apps).</div>
              </div>
            </li>

            <li class="d-flex mb-2">
              <div class="me-3 feature-icon"><i class="bi bi-people-fill"></i></div>
              <div>
                <strong>Educate users</strong>
                <div class="muted">Train employees on phishing, social engineering and device hygiene.</div>
              </div>
            </li>

            <li class="d-flex mb-2">
              <div class="me-3 feature-icon"><i class="bi bi-hdd-fill"></i></div>
              <div>
                <strong>Backup data frequently</strong>
                <div class="muted">Keep offline and offsite backups to limit ransomware impact.</div>
              </div>
            </li>
            
          </ul>
        </div>
      </article>
       
        <article class="col-lg-12">
           <h3 class="mb-2">Quick Roadmap (Starter)</h3>
          <ol class="muted">
            <li>Discovery & risk assessment (week 1)</li>
            <li>Prioritised remediation plan (week 1–2)</li>
            <li>Implement critical protections (MFA, patching, backups)</li>
            <li>Continuous monitoring & awareness training</li>
          </ol>
       </article>
       
        <article class="col-lg-12">
            <h3 class="mb-2">Who needs this?</h3>
          <p class="muted mb-1">Small & medium businesses, e-commerce, healthcare, finance, educational institutions and any organisation handling customer data.</p>

         
       </article>

     
   </div>
  </div>
    </section>

      

    <!-- CTA BANNER -->
    <section class="mt-5 p-4 rounded-3 text-center" style="background:linear-gradient(90deg, rgba(214,51,42,0.12), rgba(0,0,0,0.05));">
      <div class="container">
      <div class="row align-items-center">
        <div class="col-md-8 text-md-start">
          <h4 class="mb-1">Your safety starts here</h4>
          <p class="muted mb-0">Proactive security reduces impact and lets you focus on growth. Book a no-obligation assessment today.</p>
        </div>
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
          <a class="btn blue-bg btn-lg" href="mailto:sales@primeit.com.au?subject=Security%20Assessment">Book Assessment</a>
        </div>
      </div>
        </div>
    </section>


<section class="py-5 text-center bg-dark">
  <div class="container">
    <h2 class="text-white py-3">Key Features</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Data Protection</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Financial Security</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Reputation Safety</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Network Assessment</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Firewall Protection</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Incident Recovery</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Threat Monitoring</h5>
          </div>
        </div>
      </div>
      
       <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Regulatory Compliance</h5>
          </div>
        </div>
      </div>
      
      
  
    </div>
  </div>
  
</section>

<section class="py-5 text-center text-bg-warning cto-block">
  <div class="container text-center py-5">
    <h2 class="mb-4 text-black">Call for help now! 1300 141822</h2>
    <a href="<?= base_url('contact-us') ?>" class="btn  btn-primary">Contact Us</a>
  </div>
</section>

<?= $this->endSection() ?>