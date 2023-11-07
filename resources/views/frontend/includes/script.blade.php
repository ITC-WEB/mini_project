<script src="{{asset('frontend/libraries/retina/retina.js')}}"></script>
<script src="{{asset('frontend/libraries/jquery/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('frontend/libraries/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('frontend/libraries/xzoom/dist/xzoom.min.js')}}"></script>
<script src="{{asset('frontend/libraries/gijgo/js/gijgo.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/stefangabos/Zebra_Datepicker/dist/zebra_datepicker.min.js"></script>
<script>
    $(document).ready(function() {
        $(function() {

            $('#mystartdate').Zebra_DatePicker({
                direction: 3, // represents the earliest start day from now
                select_other_months: 1,
                pair: $('#myenddate'),
                format: 'm/d/Y',
                // onClose: function(el) {
                //     showDays(el);
                // }
            });

            $('#myenddate').Zebra_DatePicker({
                direction: [1, 30], // represents 30 days from the selected date
                select_other_months: 1,
                format: 'm/d/Y',
                onClose: function(el) {
                    showDays(el);
                }
            });
        });

        function showDays() {
            var harga_sewa = $('input[name="harga_sewa"]').val();
            // get date
            var e = $('Rp')
            var start = $('#mystartdate').val();
            var end = $('#myenddate').val();
            if (!start || !end) return;

            // parse date
            var startArr = start.split("/");
            var endArr = end.split("/");
            var startDate = new Date(startArr[2], startArr[0] - 1, startArr[1]);
            var endDate = new Date(endArr[2], endArr[0] - 1, endArr[1]);

            // calculate days
            var days = Math.round((endDate - startDate) / (1000 * 60 * 60 * 24));

            $('.num_nights').val('     ' + '    ' + '       ' + '   ' + '    ' + ('Rp.') + days * harga_sewa);
        };

    });
</script>