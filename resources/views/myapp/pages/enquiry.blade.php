@include('./includes.appnavigation')

<section class="py-5 enquiry-section" id="enquiry">
    <div class="container">
      <div class="text-center mb-4">
        <h2 class="fw-bold" style="color: var(--primary-color);">Make an Enquiry</h2>
        <p class="text-muted">Let us know your needs — we're here to craft your ideal solution.</p>
      </div>
  
      <div class="row align-items-center g-5">
        <!-- Left Side Info -->
        <div class="col-lg-6 animate__animated animate__fadeInLeft">
          <h4 style="color: var(--secondary-color);">Our Services Include:</h4>
          <ul class="list-group list-group-flush mb-4">
            <li class="list-group-item">✅ Software Development (Agile & Custom)</li>
            <li class="list-group-item">✅ Mobile App Development</li>
            <li class="list-group-item">✅ Cloud Services & Integration</li>
            <li class="list-group-item">✅ Data Analytics & Insights</li>
          </ul>
          <p class="text-muted">Fill out the form and our team will reach out within 24 hours.</p>
        </div>
  
        <!-- Right Side Form -->
        <div class="col-lg-6 animate__animated animate__fadeInRight">
          <form class="p-4 rounded shadow-lg" style="background-color: var(--light-color);">
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="name" placeholder="Your full name" required />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" placeholder="example@domain.com" required />
            </div>
            <div class="mb-3">
              <label for="service" class="form-label">Service Interested In</label>
              <select class="form-select" id="service">
                <option selected disabled>Select a service</option>
                <option>Software Development</option>
                <option>Mobile App Development</option>
                <option>Cloud Services</option>
                <option>Data Analytics</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Your Message</label>
              <textarea class="form-control" id="message" rows="4" placeholder="Tell us what you need..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100" style="background-color: var(--primary-color); border: none;">
              Submit Enquiry
            </button>
          </form>
        </div>
      </div>
    </div>
</section>
  


@include('/includes.appfooter')
