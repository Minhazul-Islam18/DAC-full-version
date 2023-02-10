<!-- Add New Credit Card Modal -->
<div class="modal fade" id="addInvoice" tabindex="-1" aria-hidden="true">
  <div style="max-width: max-content;" class="modal-dialog modal-dialog-centered1 modal-simple modal-add-invoice">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3>Creation of Invoices for Customers.</h3>
          <p>Easily create invoices & email links to customers for payments.</p>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card text-center bg-transparent border border-success">
                <div class="card-body">
                  <h5 class="card-title text-uppercase">Pay to Postulate</h5>
                  <p class="card-text">Create an invoice whose payment will allow company to apply for public contact.
                </div>
                <div class="card-footer border-1">
                  <a href="{{ route('invoice.create', ['type' => 'Pay to Postulate']);
                  }}">
                  <button class="btn btn-primary">Get Started</button>                  
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card text-center bg-transparent border border-info">
                <div class="card-body">
                  <h5 class="card-title text-uppercase">Pay to Consult</h5>
                  <p class="card-text">Create an invoice whose payment will allow company to to consult a tender file.
                </div>
                <div class="card-footer border-1">
                  <a href="{{route('invoice.create', ['type' => 'Pay to Consult']);
                  }}">
                  <button class="btn btn-primary">Get Started</button>                  
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card text-center bg-transparent border border-danger">
                <div class="card-body">
                  <h5 class="card-title text-uppercase">Pay for a package</h5>
                  <p class="card-text">Create an invoice whose payment will allow company to subscribe to a package.
                </div>
                <div class="card-footer border-1">
                  <a href="{{route('invoice.create', ['type' => 'Pay for Package']);
                  }}">
                  <button class="btn btn-primary">Get Started</button>                  
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->
