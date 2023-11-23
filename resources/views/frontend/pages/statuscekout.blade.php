@extends('frontend.layout.suksesapp')

@section('title')
statuscekout
@endsection

@section('content1')
<body>
    <!-- Semantic elements -->
    <!-- https://www.w3schools.com/html/html5_semantic_elements.asp -->

    <!-- Bootstrap navbar example -->
    <!-- https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->
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
            <div class="card card-status shadow mx-auto mt-4 lg-12 sm-6 md-6">

                <div class=" st text-center mt-4 mb-4">
                    <img class="bri" src="frontend/images/Logo-Bank-BRI.png" alt="" />

                    <table class="statuscekout text-left mt-5 mb-5 mx-auto center-table justify-content-around">
                        <tr>
                            <th width="50%">Nomor Rekening</th>
                            <td width="50%" class="text-left">: 33345 221 2213 221
                                <i class="fa fa-copy copy-icon" onclick="copyTextToClipboard('nomorRekening')"></i></td>
                        </tr>

                        <tr>
                            <th width="50%">Atas Nama</th>
                            <td width="50%" class="text-left">: INTERMEDIA TRANS</td>
                        </tr>
                        <tr>
                            <th width="50%">Total Pembayaran</th>
                            <td width="50%" class="text-left">: Rp.350.000</td>
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
            </form>

            <a href="index.html" class="btn btnstatus p-2 px-4 mt-4 ml-5 mx-auto"> Hubungi Kami!</a>
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
    <script src="frontend/libraries/retina/retina.js"></script>
    <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="frontend/libraries/xzoom/dist/xzoom.min.js"></script>
    <script src="frontend/libraries/gijgo/js/gijgo.min.js"></script>
</body>
@endsection