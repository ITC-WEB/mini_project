@extends('frontend.layout.suksesapp')

@section('title')
statuscekout
@endsection

@section('content1')
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
                <a class="navbar-brand" href="index.html">
                    <img src="frontend/images/logo itc.png" alt="" />
                </a>
            </div>
            <ul class="navbar-nav mr-auto d-none d-lg-block">
                <li>
                    <span class="text-muted">| &nbsp; Beyond the explorer of the world</span>
                </li>
            </ul>
        </nav>
    </div>
    <main>
        <div class="container ">
            <div class="card card-status shadow mx-auto mt-4 col-lg-12 col-md-6 col-sm-6">
                <div class=" st text-center mt-4 mb-4">
                    <img class="bri" src="frontend/images/Logo-Bank-BRI.png" alt="" />
                    <table class="statuscekout text-left mt-5 mb-5 mx-auto center-table justify-content-around">
                        <tr>
                            <th>Nomor Rekening</th>
                            <td class="text-left">
                                <span id="nomorRekening">33345 221 2213 221</span>
                                <i class="fa fa-copy copy-icon" onclick="copyTextToClipboard('nomorRekening')"></i>
                            </td>
                        </tr>
                        <tr>
                            <th>Atas Nama</th>
                            <td class="text-left">INTERMEDIA TRANS</td>
                        </tr>
                        <tr>
                            <th>Total Pembayaran</th>
                            <td class="text-left">Rp.350.000</td>
                        </tr>
                    </table>
                    <h1 class="keterangan font-weight-light mt-5">
                        Silahkan lakukan pembayaran, Lalu Screen Capture <br> Bukti Pembayaran.
                    </h1>
                </div>
            </div>
            <form>
                <div class="input mt-4 mx-auto">
                    <label for="inputSIM" class="font-weight-light">*Silahkan Unggah Bukti Pembayaran</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputSIM" accept=".jpg, .jpeg, .png, .pdf" />
                        <label class="custom-file-label" for="inputSIM">img.png</label>
                    </div>
                    <div class="form-group form-check mt-2">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Saya sudah melakukan Pembayaran dan mengunggah Bukti Pembayaran</label>
                      </div>
            </form>
            <a href="index.html" class="btn btnstatus p-2  mt-4 ml-5 mx-auto"> Hubungi Kami!</a>
        </div>
        </div>
        </div>
        </div>
    </main>
   
<script>
    function copyTextToClipboard(elementId) {
        var textToCopy = document.getElementById(elementId);
        var range = document.createRange();
        range.selectNode(textToCopy);
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(range);
        document.execCommand("copy");
        window.getSelection().removeAllRanges();
    }
</script>

    <script src="frontend/libraries/gijgo/js/gijgo.min.js"></script>
</body>
@endsection