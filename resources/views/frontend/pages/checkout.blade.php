@extends('frontend.layout.app')

@section('title')
checkout 
@endsection

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0 pl-3 pl-lg-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page">
                                Paket Rental
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Details
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Checkout
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details mb-3">
                        <h1>Form Perngisian Data Rental</h1>
                        <p>Malang, Indonesia</p>
                        <div class="member mt-3">
                            <form>
                                <div class="form-group">
                                    <label for="inputUsername" class="font-weight-bold">Nama </label>
                                    <input type="text" class="form-control" id="inputUsername" placeholder="Username" />
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 col-sm-6 mb-3">
                                        <label for="inputEmail" class="font-weight-bold">Email </label>
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" />
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label for="inputPhone" class="font-weight-bold">Phone </label>
                                        <input type="tel" class="form-control" id="inputPhone" placeholder="Phone" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 col-sm-6 mb-3">
                                        <label for="tanggalMulai" class="font-weight-bold">Tanggal Mulai</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control datepicker" id="tanggalMulai" placeholder="Tanggal Mulai" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 mb-3">
                                        <label for="tanggalSelesai" class="font-weight-bold">Tanggal Selesai</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control datepicker" id="tanggalSelesai" placeholder="Tanggal Selesai" />
                                        </div>
                                    </div>
                                </div>
                                <label for="inputUsername" class="font-weight-bold">Supir</label>
                                <div class="row">
                                    <div class="col-auto">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                          Iya
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                          Tidak
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <label for="inputUsername" class="font-weight-bold mt-3">Pembayaran Bank </label>
                                  <div class="grid">
                                    <label class="card-button">
                                      <input name="plan" class="radio" type="radio" checked>
                                      <span class="plan-details">
                                        <span class="plan-type">BCA</span>
                                        <span class="mt-2 text-center">5321-09-77654-90-8</span>
                                      </span>
                                    </label>
                                    <label class="card-button">
                                      <input name="plan" class="radio" type="radio">
                                      <span class="plan-details" aria-hidden="true">
                                        <span class="plan-type">BRI</span>
                                        <span class="mt-2 text-center">52281-09-009868-90-8</span>
                                      </span>
                                    </label>
                                   
                                  </div>
                                  
                               
                               
                                <div class="form-group">
                                    <div class="join-container mt-5">
                                        <a href="success.html" class="btn btn-block btn-join-now mt-3 py-2">I Have Made Payment</a>
                                    </div>
                                    <div class="text-center mt-3">
                                        <a href="#" class="text-muted">Cancel Booking</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Checkout Information</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Mobil</th>
                                <td width="50%" class="text-right">Avanza</td>
                            </tr>
                            <tr>
                                <th width="50%">Supir</th>
                                <td width="50%" class="text-right">Rp. 100.000/hari</td>
                            </tr>
                            <tr>
                                <th width="50%">Total</th>
                                <td width="50%" class="text-right text-total"><span class="text-blue">Rp. 1.000.000</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection